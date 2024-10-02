<?php

class VtaPedido {

    const PEDIDO_ACTIVO_SESSION = 'PEDIDO_ACTIVO_SESSION';
    const TIENDA_INSUMOS_FILTROS = 'TIENDA_INSUMOS_FILTROS';
    const TIENDA_INSUMOS_VISUALIZACION = 'TIENDA_INSUMOS_VISUALIZACION';
    const TIENDA_CONTROLA_STOCK = false;

    /**
     * Agrega un producto al Array de Session
     */
    static function setCarritoSessionAgregarProducto($insumo_id, $cantidad) {
              
        
        // -------------------------------------------------------------------------
        // se inicializa el cliente
        // -------------------------------------------------------------------------
        $cli_cliente_tienda = CliClienteTiendaLogin::getCliClienteTiendaAutenticado();
        if ($cli_cliente_tienda) {
            $ins_tipo_lista_precio_cliente = $cli_cliente_tienda->getInsTipoListaPrecioParaClienteTienda();
        }
        else {
            $ins_tipo_lista_precio_cliente = InsTipoListaPrecio::getOxCodigo(InsTipoListaPrecio::TIPO_PRECIO_VENTA_ONLINE);
        }

        if ($cli_cliente_tienda) {
            $cli_cliente = $cli_cliente_tienda->getCliCliente();
            if ($cli_cliente->getId() != 'null') {
                $cli_categoria = $cli_cliente->getCliCategoria();

                // -------------------------------------------------------------------------
                // se inicializa descuento financiero, si le corresponde a la categoria
                // -------------------------------------------------------------------------
                if ($cli_categoria) {
                    $vta_descuento_financiero = $cli_categoria->getVtaDescuentoFinancieroXCliCategoriaVtaDescuentoFinanciero();
                }
            }
        }
        
        $_PEDIDO_ACTIVO_SESSION = Gral::getSes(VtaPedido::PEDIDO_ACTIVO_SESSION);

        $ins_insumo = InsInsumo::getOxId($insumo_id);
        $importe_unidad = $ins_insumo->getInsInsumoImporteVentaActual($ins_tipo_lista_precio_cliente, $incluye_iva = false);
        $gral_tipo_iva_venta = $ins_insumo->getGralTipoIvaVentaObj();
        
        $importe_unidad_iva = $importe_unidad * $gral_tipo_iva_venta->getValorIvaDecimal();
        if($vta_descuento_financiero){
            $importe_unidad_df = $importe_unidad * $vta_descuento_financiero->getValorDFDecimal();
        }
        $importe_total = $importe_unidad * $cantidad;
        $importe_total_df = $importe_unidad_df * $cantidad;
        $importe_total_iva = $importe_unidad_iva * $cantidad;

        $arr_insumo = array(
            'ins_tipo_lista_precio_id' => $ins_tipo_lista_precio_cliente->getId(),
            'ins_tipo_lista_precio_descripcion' => $ins_tipo_lista_precio_cliente->getDescripcion(),
            'ins_tipo_lista_precio_minimo' => $ins_tipo_lista_precio_cliente->getImporteMinimo(),
            'producto_id' => $insumo_id,
            'cantidad' => $cantidad,
            'importe_unidad' => round($importe_unidad, 2),
            'importe_unidad_coniva' => round($importe_unidad + $importe_unidad_iva, 2),
            'importe_unidad_condf' => round($importe_unidad - $importe_unidad_df, 2),
            'importe_unidad_condf_coniva' => round(($importe_unidad - $importe_unidad_df) * $gral_tipo_iva_venta->getValorIvaDecimalParaSumarEnCalculo(), 2),
            'importe_unidad_df' => round($importe_unidad_df, 2),
            'importe_total' => round($importe_total, 2),
            'importe_total_coniva' => round($importe_total + $importe_total_iva, 2),
            'importe_total_condf' => round($importe_total - $importe_total_df, 2),
            'importe_total_condf_coniva' => round(($importe_total - $importe_total_df) * $gral_tipo_iva_venta->getValorIvaDecimalParaSumarEnCalculo(), 2),
            'importe_total_df' => round($importe_total_df, 2),
            'tipo_iva_id' => $gral_tipo_iva_venta->getId(),
            'tipo_iva_porcentual' => $gral_tipo_iva_venta->getValorIva(),
            'tipo_iva_decimal' => $gral_tipo_iva_venta->getValorIva() / 100,
            'peso' => 0,
            'volumen' => 0,
        );

        // ---------------------------------------------------------------------
        // se agrega el producto al array
        // ---------------------------------------------------------------------
        $_PEDIDO_ACTIVO_SESSION['productos'][$insumo_id] = $arr_insumo;

        // ---------------------------------------------------------------------
        // se registra el array en session
        // ---------------------------------------------------------------------
        $_PEDIDO_ACTIVO_SESSION = Gral::setSes(VtaPedido::PEDIDO_ACTIVO_SESSION, $_PEDIDO_ACTIVO_SESSION);

        // ---------------------------------------------------------------------
        // se recalcula el resumen
        // ---------------------------------------------------------------------
        self::getCarritoSessionRecalcularResumen();

        // ---------------------------------------------------------------------
        // se registra producto en el presupuesto en proceso tienda 
        // ---------------------------------------------------------------------
        VtaPresupuesto::setAgregarProductoAPresupuestoDesdeTienda($cli_cliente_tienda, $insumo_id, $cantidad);
        
        return $_PEDIDO_ACTIVO_SESSION;
    }

    /**
     * Quita un producto del Array de Session
     */
    static function setCarritoSessionQuitarProducto($producto_id) {
        
        $cli_cliente_tienda = CliClienteTiendaLogin::getCliClienteTiendaAutenticado();

        // ---------------------------------------------------------------------
        // quita el producto de session
        // ---------------------------------------------------------------------
        unset($_SESSION[VtaPedido::PEDIDO_ACTIVO_SESSION]['productos'][$producto_id]);

        // ---------------------------------------------------------------------
        // se recalcula el resumen
        // ---------------------------------------------------------------------
        self::getCarritoSessionRecalcularResumen();

        // ---------------------------------------------------------------------
        // se registra la quita del producto en el presupuesto en proceso tienda 
        // ---------------------------------------------------------------------
        VtaPresupuesto::setQuitarProductoAPresupuestoDesdeTienda($cli_cliente_tienda, $producto_id);
        
        return $_PEDIDO_ACTIVO_SESSION;
    }

    /**
     * Quita un producto del Array de Session
     */
    static function setCarritoSessionQuitarProductos() {

        // ---------------------------------------------------------------------
        // quita los productos de session
        // ---------------------------------------------------------------------
        unset($_SESSION[VtaPedido::PEDIDO_ACTIVO_SESSION]);
    }

    /**
     * Recalcula el RESUMEN del Array de Session
     */
    static function getCarritoSessionRecalcularResumen() {
        $_PEDIDO_ACTIVO_SESSION = Gral::getSes(VtaPedido::PEDIDO_ACTIVO_SESSION);

        // ---------------------------------------------------------------------
        // se recalcula el resumen
        // ---------------------------------------------------------------------
        if (count($_PEDIDO_ACTIVO_SESSION['productos']) > 0) {
            foreach ($_PEDIDO_ACTIVO_SESSION['productos'] as $arr_producto) {
                $producto_id = $arr_producto['producto_id'];
                
                $cantidad = $arr_producto['cantidad'];
                $importe_total = $arr_producto['importe_total'];
                $importe_total_condf = $arr_producto['importe_total_condf'];
                $tipo_iva_decimal = $arr_producto['tipo_iva_decimal'];
                $vta_presupuesto_id = $arr_producto['vta_presupuesto_id'];
                $vta_presupuesto_codigo = $arr_producto['vta_presupuesto_codigo'];
                $ins_tipo_lista_precio_id = $arr_producto['ins_tipo_lista_precio_id'];
                $ins_tipo_lista_precio_descripcion = $arr_producto['ins_tipo_lista_precio_descripcion'];
                $ins_tipo_lista_precio_importe_minimo = $arr_producto['ins_tipo_lista_precio_importe_minimo'];
                $peso = $arr_producto['peso'];
                $volumen = $arr_producto['volumen'];

                $resumen_items++;
                $resumen_unidades += $cantidad;
                $resumen_importe_subtotal += $importe_total;
                $resumen_importe_subtotal_condf += $importe_total_condf;
                $resumen_importe_iva += ($importe_total * $tipo_iva_decimal);
                $resumen_importe_total += ($importe_total * (1 + $tipo_iva_decimal));
                $resumen_importe_total_condf += ($importe_total_condf * (1 + $tipo_iva_decimal));
                $resumen_peso += $peso;
                $resumen_volumen += $volumen;
            }
            $_PEDIDO_ACTIVO_SESSION['resumen'] = array(
                'vta_presupuesto_id' => $vta_presupuesto_id,
                'vta_presupuesto_codigo' => $vta_presupuesto_codigo,
                'ins_tipo_lista_precio_id' => $ins_tipo_lista_precio_id,
                'ins_tipo_lista_precio_descripcion' => $ins_tipo_lista_precio_descripcion,
                'unidades' => $resumen_unidades,
                'items' => $resumen_items,
                'importe_subtotal' => round($resumen_importe_subtotal, 2),
                'importe_subtotal_condf' => round($resumen_importe_subtotal_condf, 2),
                'importe_iva' => round($resumen_importe_iva, 2),
                'importe_total' => round($resumen_importe_total, 2),
                'importe_total_condf' => round($resumen_importe_total_condf, 2),
                'importe_total_df' => round($resumen_importe_subtotal - $resumen_importe_subtotal_condf, 2),
                'importe_total_df_coniva' => round($resumen_importe_total - $resumen_importe_total_condf, 2),
                'importe_minimo_pedido' => $ins_tipo_lista_precio_importe_minimo,
                'importe_minimo_pedido_saldo' => $ins_tipo_lista_precio_importe_minimo - round($resumen_importe_total_condf, 2),
                'peso' => $resumen_peso,
                'volumen' => $resumen_volumen,
            );
            // ---------------------------------------------------------------------
            // se registra el array en session
            // ---------------------------------------------------------------------
            $_PEDIDO_ACTIVO_SESSION = Gral::setSes(VtaPedido::PEDIDO_ACTIVO_SESSION, $_PEDIDO_ACTIVO_SESSION);
        }
        else {
            unset($_SESSION[VtaPedido::PEDIDO_ACTIVO_SESSION]);
        }
    }

    static function getCarritoSessionProductoEnCarrito($producto_id) {
        $_PEDIDO_ACTIVO_SESSION = Gral::getSes(VtaPedido::PEDIDO_ACTIVO_SESSION);

        if (isset($_PEDIDO_ACTIVO_SESSION)) {
            if (isset($_PEDIDO_ACTIVO_SESSION['productos'][$producto_id])) {
                return $_PEDIDO_ACTIVO_SESSION['productos'][$producto_id];
            }
        }
        return false;
    }

    /**
     * Devuelve los productos vinculados al pedido en session
     * @return type
     */
    static function getPrdProductosEnCarrito() {
        $ins_insumos = array();

        $_PEDIDO_ACTIVO_SESSION = Gral::getSes(VtaPedido::PEDIDO_ACTIVO_SESSION);
        if (isset($_PEDIDO_ACTIVO_SESSION)) {
            if (count($_PEDIDO_ACTIVO_SESSION['productos']) > 0) {
                foreach ($_PEDIDO_ACTIVO_SESSION['productos'] as $arr_producto) {
                    $insumo_id = $arr_producto['producto_id'];
                    $ins_insumo = InsInsumo::getOxId($insumo_id);

                    if ($ins_insumo) {
                        $ins_insumos[] = $ins_insumo;
                    }
                }
            }
        }

        return $ins_insumos;
    }
    
    static function setPedidoActivoGestionDesdeVtaPresupuestoEnProceso($vta_presupuesto){
        $_PEDIDO_ACTIVO_SESSION = false;
        
        $ins_tipo_lista_precio_cliente = $vta_presupuesto->getInsTipoListaPrecio();
        $vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos(null, null, true);
        $vta_descuento_financiero = $vta_presupuesto->getVtaDescuentoFinanciero();
        
        foreach($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo){
            $vta_presupuesto = $vta_presupuesto_ins_insumo->getVtaPresupuesto();
            $ins_insumo = $vta_presupuesto_ins_insumo->getInsInsumo();
            $insumo_id = $ins_insumo->getId();
            $cantidad = $vta_presupuesto_ins_insumo->getCantidad();
            $importe_unidad = $vta_presupuesto_ins_insumo->getImporteUnitario();
            //$importe_unidad = $ins_insumo->getInsInsumoImporteVentaActual($ins_tipo_lista_precio_cliente, $incluye_iva = false);
            $gral_tipo_iva_venta = $vta_presupuesto_ins_insumo->getGralTipoIva();

            $importe_unidad_iva = $importe_unidad * $gral_tipo_iva_venta->getValorIvaDecimal();
            $importe_unidad_df = $importe_unidad * $vta_descuento_financiero->getValorDFDecimal();

            $importe_total = $importe_unidad * $cantidad;
            $importe_total_df = $importe_unidad_df * $cantidad;
            $importe_total_iva = $importe_unidad_iva * $cantidad;
            
            $arr_insumo = array(
                'vta_presupuesto_id' => $vta_presupuesto->getId(),
                'vta_presupuesto_codigo' => $vta_presupuesto->getCodigo(),
                'ins_tipo_lista_precio_descripcion' => $ins_tipo_lista_precio_cliente->getDescripcion(),
                'ins_tipo_lista_precio_importe_minimo' => $ins_tipo_lista_precio_cliente->getImporteMinimo(),
                'ins_tipo_lista_precio_id' => $ins_tipo_lista_precio_cliente->getId(),
                'producto_id' => $insumo_id,
                'cantidad' => $cantidad,
                'importe_unidad' => round($importe_unidad, 2),
                'importe_unidad_coniva' => round($importe_unidad + $importe_unidad_iva, 2),
                'importe_unidad_condf' => round($importe_unidad - $importe_unidad_df, 2),
                'importe_unidad_condf_coniva' => round(($importe_unidad - $importe_unidad_df) * $gral_tipo_iva_venta->getValorIvaDecimalParaSumarEnCalculo(), 2),
                'importe_unidad_df' => round($importe_unidad_df, 2),
                'importe_total' => round($importe_total, 2),
                'importe_total_coniva' => round($importe_total + $importe_total_iva, 2),
                'importe_total_condf' => round($importe_total - $importe_total_df, 2),
                'importe_total_condf_coniva' => round(($importe_total - $importe_total_df) * $gral_tipo_iva_venta->getValorIvaDecimalParaSumarEnCalculo(), 2),
                'importe_total_df' => round($importe_total_df, 2),
                'tipo_iva_id' => $gral_tipo_iva_venta->getId(),
                'tipo_iva_porcentual' => $gral_tipo_iva_venta->getValorIva(),
                'tipo_iva_decimal' => $gral_tipo_iva_venta->getValorIva() / 100,
                'peso' => 0,
                'volumen' => 0,
            );
            //Gral::prr($arr_insumo);

            // ---------------------------------------------------------------------
            // se agrega el producto al array
            // ---------------------------------------------------------------------
            $_PEDIDO_ACTIVO_SESSION['productos'][$insumo_id] = $arr_insumo;

        }
        
        // ---------------------------------------------------------------------
        // se registra el array en session
        // ---------------------------------------------------------------------
        $_PEDIDO_ACTIVO_SESSION = Gral::setSes(VtaPedido::PEDIDO_ACTIVO_SESSION, $_PEDIDO_ACTIVO_SESSION);

        // ---------------------------------------------------------------------
        // se recalcula el resumen
        // ---------------------------------------------------------------------
        self::getCarritoSessionRecalcularResumen();
    }

}

?>