<?php

class RepReporte {
    
    /**
     * Autor: Baez Julian
     * Fecha: 14/07/2022 07:00
     * @param type $txt_filtro_desde
     * @param type $txt_filtro_hasta
     * @return type
     */
    static function getArrayResultadosPorSucursal($txt_filtro_desde, $txt_filtro_hasta){
        
        $array_resumens = array();
        $total_ventas_netas = 0;
        $total_costo_mercaderia = 0;
        $total_gastos_compras = 0;
        $total_gastos = 0;
        $total_resultado_bruto = 0;
        $total_resultado_neto = 0;
        
        // ---------------------------------------------------------------------
        // Consulta GralSucursal
        // ---------------------------------------------------------------------
        $gral_sucursals = GralSucursal::getGralSucursals(null, null, true, array(array('campo' => 'orden', 'orden' => 'asc')));
        //Gral::prr($gral_sucursals);exit;
        
        // ---------------------------------------------------------------------
        // Consulta PdeFacturaTipoConcepto
        // ---------------------------------------------------------------------
        $pde_factura_tipo_conceptos = PdeFacturaTipoConcepto::getPdeFacturaTipoConceptos(null, null, true, array(array('campo' => 'orden', 'orden' => 'asc')));
        //Gral::prr($pde_factura_tipo_conceptos);exit;
        
        foreach ($gral_sucursals as $gral_sucursal) {
            $ventas_netas = 0;
            $costo_mercaderia = 0;
            $gastos = 0;
            $resultado_bruto = 0;
            $resultado_neto = 0;
            
            // -----------------------------------------------------------------
            // Consulta VtaOrdenVenta
            // -----------------------------------------------------------------
            $criterio = new Criterio();
            $criterio->addDistinct(true);

            if ($txt_filtro_desde != '') {
                $criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $txt_filtro_desde . ' 00:00:00', Criterio::MAYORIGUAL);
            }
            if ($txt_filtro_hasta != '') {
                $criterio->add(VtaOrdenVenta::GEN_ATTR_CREADO, $txt_filtro_hasta . ' 23:59:59', Criterio::MENORIGUAL);
            }
            $criterio->add(GralSucursal::GEN_ATTR_ID, $gral_sucursal->getId(), Criterio::IGUAL);
            $criterio->addTabla(VtaOrdenVenta::GEN_TABLA);
            $criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_GRAL_SUCURSAL_ID);
            $criterio->addRealJoin(VtaOrdenVentaImporte::GEN_TABLA, VtaOrdenVentaImporte::GEN_ATTR_VTA_ORDEN_VENTA_ID, VtaOrdenVenta::GEN_ATTR_ID, 'LEFT JOIN');
            $criterio->setCriterios();
            $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $criterio);
            //Gral::prr($vta_orden_ventas);exit;
            
            // -----------------------------------------------------------------
            // Consulta PdeFacturaGralCentroCosto
            // -----------------------------------------------------------------
            $criterio = new Criterio();
            $criterio->addDistinct(true);

            if ($txt_filtro_desde != '') {
                $criterio->add(PdeFactura::GEN_ATTR_FECHA_EMISION, $txt_filtro_desde, Criterio::MAYORIGUAL);
            }
            if ($txt_filtro_hasta != '') {
                $criterio->add(PdeFactura::GEN_ATTR_FECHA_EMISION, $txt_filtro_hasta, Criterio::MENORIGUAL);
            }
            $criterio->add(GralSucursal::GEN_ATTR_ID, $gral_sucursal->getId(), Criterio::IGUAL);
            
            $criterio->addTabla(PdeFacturaGralCentroCosto::GEN_TABLA);
            $criterio->addRealJoin(GralCentroCosto::GEN_TABLA, GralCentroCosto::GEN_ATTR_ID, PdeFacturaGralCentroCosto::GEN_ATTR_GRAL_CENTRO_COSTO_ID);
            $criterio->addRealJoin(GralCentroCostoGralSucursal::GEN_TABLA, GralCentroCostoGralSucursal::GEN_ATTR_GRAL_CENTRO_COSTO_ID, GralCentroCosto::GEN_ATTR_ID);
            $criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, GralCentroCostoGralSucursal::GEN_ATTR_GRAL_SUCURSAL_ID);
            $criterio->addRealJoin(PdeFactura::GEN_TABLA, PdeFactura::GEN_ATTR_ID, PdeFacturaGralCentroCosto::GEN_ATTR_PDE_FACTURA_ID);
            //$criterio->addRealJoin(PdeFacturaItem::GEN_TABLA, PdeFacturaItem::GEN_ATTR_PDE_FACTURA_ID, PdeFactura::GEN_ATTR_ID, 'LEFT JOIN');
            //$criterio->addRealJoin(PdeFacturaConcepto::GEN_TABLA, PdeFacturaConcepto::GEN_ATTR_ID, PdeFacturaItem::GEN_ATTR_PDE_FACTURA_CONCEPTO_ID, 'LEFT JOIN');
            //$criterio->addRealJoin(PdeFacturaTipoConcepto::GEN_TABLA, PdeFacturaTipoConcepto::GEN_ATTR_ID, PdeFacturaConcepto::GEN_ATTR_PDE_FACTURA_TIPO_CONCEPTO_ID, 'LEFT JOIN');
            $criterio->setCriterios();
            
            $pde_factura_gral_centro_costos = PdeFacturaGralCentroCosto::getPdeFacturaGralCentroCostos(null, $criterio);
            //Gral::prr($pde_factura_gral_centro_costos);exit;
            
            // -----------------------------------------------------------------------------
            // se instancia coleccion de objetos de extension multiple a utilizar dentro del foreach
            // -----------------------------------------------------------------------------
            $vta_orden_venta_importes = VtaOrdenVentaImporte::getVtaOrdenVentaImportesXVtaOrdenVentas($vta_orden_ventas);

            
            // -----------------------------------------------------------------
            // Procesamiento de datos
            // -----------------------------------------------------------------
            foreach ($vta_orden_ventas as $vta_orden_venta) {
                //$vta_orden_venta_importe = $vta_orden_venta->getResumenComprobante();
                $vta_orden_venta_importe = $vta_orden_venta->getResumenComprobanteFromArray($vta_orden_venta_importes);
                
                $ventas_netas = $ventas_netas + $vta_orden_venta_importe->getImporteSubtotal();
                $costo_mercaderia = $costo_mercaderia + $vta_orden_venta->getImporteCostoTotal();
            }
            $resultado_bruto = $ventas_netas - $costo_mercaderia;
            
            // -----------------------------------------------------------------
            // Creacion de datos (Descripcion, Ventas Netas, Costo Mercaderia y
            // Resultado Bruto) en array
            // -----------------------------------------------------------------
            $array_resumens[$gral_sucursal->getCodigo()]['DESCRIPCION'] = $gral_sucursal->getDescripcion();
            $array_resumens[$gral_sucursal->getCodigo()]['VENTAS_NETAS'] = round($ventas_netas, 2);
            $array_resumens[$gral_sucursal->getCodigo()]['COSTO_MERCADERIA'] = round($costo_mercaderia, 2);
            $array_resumens[$gral_sucursal->getCodigo()]['RESULTADO_BRUTO'] = round($resultado_bruto, 2);
            
            // -----------------------------------------------------------------
            // Se genera Array de Costos y Gastos
            // -----------------------------------------------------------------
            foreach ($pde_factura_gral_centro_costos as $pde_factura_gral_centro_costo) {
                
                $pde_factura = $pde_factura_gral_centro_costo->getPdeFactura();
                $pde_factura_items = $pde_factura->getPdeFacturaItems();
                $pde_factura_pde_ocs = $pde_factura->getPdeFacturaPdeOcs();
                
                // -------------------------------------------------------------
                // items de facturas de compra
                // -------------------------------------------------------------
                foreach ($pde_factura_items as $pde_factura_item) {
                    $importe_afectado_al_item = $pde_factura_item->getImporteAfectadoParaGralCentroCosto($pde_factura_gral_centro_costo->getPorcentajeAfectado());
                    $codigo_pde_factura_tipo_concepto = $pde_factura_item->getPdeFacturaConcepto()->getPdeFacturaTipoConcepto()->getCodigo();
                    
                    foreach ($pde_factura_tipo_conceptos as $pde_factura_tipo_concepto) {
                        if($codigo_pde_factura_tipo_concepto == $pde_factura_tipo_concepto->getCodigo()){
                            // -------------------------------------------------
                            // Creacion de datos (Gastos Dinamicos) en array
                            // -------------------------------------------------
                            $array_resumens[$gral_sucursal->getCodigo()][$pde_factura_tipo_concepto->getCodigo()] += round($importe_afectado_al_item, 2);
                            $gastos = $gastos + $importe_afectado_al_item;
                        }
                    }
                }
                
                // -------------------------------------------------------------
                // ordenes de compra
                // -------------------------------------------------------------
                foreach ($pde_factura_pde_ocs as $pde_factura_pde_oc) {
                    $importe_afectado_al_oc = $pde_factura_pde_oc->getImporteAfectadoParaGralCentroCosto($pde_factura_gral_centro_costo->getPorcentajeAfectado());
                    $array_resumens[$gral_sucursal->getCodigo()]['COMPRAS'] += round($importe_afectado_al_oc, 2);
                    $gastos = $gastos + $importe_afectado_al_oc;
                    $total_gastos_compras = $total_gastos_compras + $importe_afectado_al_oc;
                }
            }

            $resultado_neto = $resultado_bruto - $gastos;
            
            // -----------------------------------------------------------------
            // Creacion de datos (Gastos y Resultado Neto) en array
            // -----------------------------------------------------------------
            $array_resumens[$gral_sucursal->getCodigo()]['GASTOS'] = round($gastos, 2);
            $array_resumens[$gral_sucursal->getCodigo()]['RESULTADO_NETO'] = round($resultado_neto, 2);
            
            // -----------------------------------------------------------------
            // Procesamiento de Totalizadores (Ventas Netas, Costo Mercaderia y
            // Gastos) en array
            // -----------------------------------------------------------------
            $total_ventas_netas = $total_ventas_netas + $ventas_netas;
            $total_costo_mercaderia = $total_costo_mercaderia + $costo_mercaderia;
            $total_gastos = $total_gastos + $gastos;
        }
        
        // ---------------------------------------------------------------------
        // Procesamiento de Totalizadores (Resultado Bruto y Resultado Neto) en
        // array
        // ---------------------------------------------------------------------
        $total_resultado_bruto = $total_ventas_netas - $total_costo_mercaderia;
        $total_resultado_neto = $total_resultado_bruto - $total_gastos;
        
        // ---------------------------------------------------------------------
        // Creacion de datos (Totalizadores) en array
        // ---------------------------------------------------------------------
        $array_resumens['TOTAL']['DESCRIPCION'] = 'TOTAL';
        $array_resumens['TOTAL']['VENTAS_NETAS'] = round($total_ventas_netas, 2);
        $array_resumens['TOTAL']['COSTO_MERCADERIA'] = round($total_costo_mercaderia, 2);
        $array_resumens['TOTAL']['RESULTADO_BRUTO'] = round($total_resultado_bruto, 2);
        foreach ($pde_factura_tipo_conceptos as $pde_factura_tipo_concepto) {
            $total_gastos_dinamicos = 0;
            foreach ($array_resumens as $array_resumen) {
                if($array_resumen['DESCRIPCION'] != 'TOTAL'){
                    $total_gastos_dinamicos = $total_gastos_dinamicos + $array_resumen[$pde_factura_tipo_concepto->getCodigo()];
                }
            }
            $array_resumens['TOTAL'][$pde_factura_tipo_concepto->getCodigo()] = round($total_gastos_dinamicos, 2);
        }
        
        $array_resumens['TOTAL']['COMPRAS'] = round($total_gastos_compras, 2);
        $array_resumens['TOTAL']['GASTOS'] = round($total_gastos, 2);
        $array_resumens['TOTAL']['RESULTADO_NETO'] = round($total_resultado_neto, 2);
        
        // ---------------------------------------------------------------------
        // Creacion de datos (Participacion Decimal y Porcentual) en array
        // ---------------------------------------------------------------------
        $total_participacion_decimal = 0;
        $total_participacion_porcentual = 0;
        foreach ($array_resumens as $i => $array_resumen) {
            if($array_resumen['DESCRIPCION'] != 'TOTAL'){
                $participacion_decimal = $array_resumen['RESULTADO_NETO'] / $array_resumens['TOTAL']['RESULTADO_NETO'];
                $total_participacion_decimal = $total_participacion_decimal + $participacion_decimal;
                $array_resumens[$i]['PARTICIPACION_DECIMAL'] = $participacion_decimal;
                
                $participacion_porcentual = round(($array_resumen['RESULTADO_NETO'] / $array_resumens['TOTAL']['RESULTADO_NETO'])*100, 2);
                $total_participacion_porcentual = $total_participacion_porcentual + $participacion_porcentual;
                $array_resumens[$i]['PARTICIPACION_PORCENTUAL'] = round($participacion_porcentual, 2);
            }
        }
        $array_resumens['TOTAL']['PARTICIPACION_DECIMAL'] = $total_participacion_decimal;
        $array_resumens['TOTAL']['PARTICIPACION_PORCENTUAL'] = round($total_participacion_porcentual, 0);
        //Gral::prr($array_resumens);exit;
        
        return $array_resumens;
    }
    
}
