<?php 
require_once "base/BVtaRemitoAjuste.php"; 
class VtaRemitoAjuste extends BVtaRemitoAjuste
{
    const PREFIJO_RMT = 'RMTA-';

    /**
     * Autor: Gustavo Romo.
     * Fecha: 27/09/2017 09:00 hs.
     * Metodo que genera un remito.
     * @return Obj VtaRemitoAjuste
     */
    static function setInicializarVtaRemitoAjuste($vta_presupuesto = false, $vta_orden_venta_ids, $vta_orden_venta_cantidads, $cli_cliente_id = 0, $vta_remito_ajuste_tipo_despacho_id, $cli_centro_recepcion_id, $gral_sucursal_retiro, $nota_interna = '', $nota_publica = '', $cmb_registrar_movimiento_stock = 0, $cmb_pan_panol_id = 0, $cmb_finalizar_remito = 0, $vta_tipo_remito_ajuste_id, $gral_empresa_id, $vta_punto_venta_id) {

        $vta_punto_venta = VtaPuntoVenta::getOxId($vta_punto_venta_id);
        $gral_sucursal = $vta_punto_venta->getGralSucursalXGralSucursalVtaPuntoVenta();
        
        $vta_remito_ajuste = new VtaRemitoAjuste();
        $vta_remito_ajuste->setVtaRemitoAjusteTipoDespachoId($vta_remito_ajuste_tipo_despacho_id);
        
        if ($cli_cliente_id != 0) {
            $vta_remito_ajuste->setCliClienteId($cli_cliente_id);
        }
        if ($cli_centro_recepcion_id != 0) {
            $vta_remito_ajuste->setCliCentroRecepcionId($cli_centro_recepcion_id);
            $vta_remito_ajuste->setEnDomicilio(1);
        }
        if ($gral_sucursal_retiro != 0) {
            $vta_remito_ajuste->setGralSucursalRetiro($gral_sucursal_retiro);
        }
        if ($vta_presupuesto) {
            $vta_remito_ajuste->setVtaPresupuestoId($vta_presupuesto->getId());
        }

        $vta_remito_ajuste->setFecha(Gral::getFechaActual());
        $vta_remito_ajuste->setObservacion($nota_interna);
        $vta_remito_ajuste->setNotaPublica($nota_publica);
        
        $vta_remito_ajuste->setVtaTipoRemitoAjusteId($vta_tipo_remito_ajuste_id);
        $vta_remito_ajuste->setGralEmpresaId($gral_empresa_id);
        $vta_remito_ajuste->setVtaPuntoVentaId($vta_punto_venta_id);
        
        $vta_remito_ajuste->setNumeroSucursal(str_pad($gral_sucursal->getNumero(), DbConfig::VARS_CANTIDAD_NRO_SUCURSAL, 0, STR_PAD_LEFT));
        $vta_remito_ajuste->setNumeroPuntoVenta(str_pad($vta_punto_venta->getNumero(), DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA_SIMPLE, 0, STR_PAD_LEFT));
        //$vta_remito_ajuste->setNumeroRemitoAjuste($numero_remito_ajuste);
        
        $vta_remito_ajuste->setEstado(1);
        $vta_remito_ajuste->save();

        // se setea el codigo del remito
        $vta_remito_ajuste->setCodigo(self::PREFIJO_RMT . str_pad($vta_remito_ajuste->getId(), 8, 0, STR_PAD_LEFT));
        $vta_remito_ajuste->save();

        // se registra el estado inicial del remito
        $vta_remito_ajuste->setVtaRemitoAjusteEstado(VtaRemitoAjusteTipoEstado::TIPO_GENERADO, $nota_interna);

        if (!empty($vta_remito_ajuste->getId())) {
            foreach ($vta_orden_venta_ids as $vta_orden_venta_id) {
                $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
                $persona_descripcion = $vta_orden_venta->getPersonaDescripcion();

                if (!$vta_orden_venta->getVtaOrdenVentaEstadoEnRemitoAjuste()) {
                    $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_EN_AJUSTE);
                }

                $vta_remito_ajuste_vta_orden_venta = new VtaRemitoAjusteVtaOrdenVenta();
                $vta_remito_ajuste_vta_orden_venta->setDescripcion($vta_orden_venta->getDescripcion());
                $vta_remito_ajuste_vta_orden_venta->setVtaRemitoAjusteId($vta_remito_ajuste->getId());
                $vta_remito_ajuste_vta_orden_venta->setVtaOrdenVentaId($vta_orden_venta->getId());
                $vta_remito_ajuste_vta_orden_venta->setInsInsumoId($vta_orden_venta->getInsInsumoId());
                $vta_remito_ajuste_vta_orden_venta->setCantidad($vta_orden_venta_cantidads[$vta_orden_venta->getId()]);
                $vta_remito_ajuste_vta_orden_venta->setCodigo('');
                $vta_remito_ajuste_vta_orden_venta->setObservacion('');
                $vta_remito_ajuste_vta_orden_venta->setEstado(1);
                $vta_remito_ajuste_vta_orden_venta->save();
            }
        }

        $vta_remito_ajuste->setPersonaDescripcion($persona_descripcion);
        $vta_remito_ajuste->save();

        // ---------------------------------------------------------------------
        // si se realiza movimiento de stock en el mismo registro
        // ---------------------------------------------------------------------
        if($cmb_registrar_movimiento_stock == 1){
            $vta_remito_ajuste_estado = $vta_remito_ajuste->setVtaRemitoAjusteEstado(VtaRemitoAjusteTipoEstado::TIPO_PREPARADO);
            $vta_remito_ajuste_estado->setNotaInterna('Autorizado desde generacion de remito');
            $vta_remito_ajuste_estado->save();

            $vta_remito_ajuste->setPanPanolId($cmb_pan_panol_id);
            $vta_remito_ajuste->save();

            // -----------------------------------------------------------------
            // se registra movimiento de stock
            // -----------------------------------------------------------------
            $vta_remito_ajuste->setVtaRemitoAjusteRegistrarMovimientoStock();
        }
        
        // ---------------------------------------------------------------------
        // si se registra finalizacion de remito (procedimiento simplificado)
        // ---------------------------------------------------------------------
        if($cmb_finalizar_remito == 1){
            $vta_remito_ajuste_estado = $vta_remito_ajuste->setVtaRemitoAjusteEstado(VtaRemitoAjusteTipoEstado::TIPO_ENTREGADO);
            $vta_remito_ajuste_estado->setNotaInterna('Procedimiento Simplificado de Remision');        
            $vta_remito_ajuste_estado->save();
            
            // ---------------------------------------------------------------------
            // se verifica el estado de remision de las OV del remito
            // ---------------------------------------------------------------------
            $vta_remito_ajuste_vta_orden_ventas = $vta_remito_ajuste->getVtaRemitoAjusteVtaOrdenVentas();
            foreach ($vta_remito_ajuste_vta_orden_ventas as $vta_remito_ajuste_vta_orden_venta) {
                $vta_orden_venta = $vta_remito_ajuste_vta_orden_venta->getVtaOrdenVenta();

                if ($vta_orden_venta->getCantidadDisponibleEnRemitoAjuste() > 0) {
                    $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_DESPACHO_PARCIAL, $nota_interna);
                } else {
                    $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_DESPACHO_TOTAL, $nota_interna);
                }
            }
        }
        
        // --------------------------------------------------------------------
        // se autogenera el numero de comprobante
        // --------------------------------------------------------------------
        $vta_remito_ajuste->setAutogenerarNumeroComprobante();
        
        return $vta_remito_ajuste;
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 17/03/2020 20:00 hs.
     * Metodo que genera un remito por venta cta cte inmediata.
     * @return Obj VtaRemitoAjuste
     */
    static function setInicializarVtaRemitoAjusteDesdeVentaInmediataCtacteXXX($vta_presupuesto = false, $vta_orden_venta_ids, $vta_orden_venta_cantidads, $cli_cliente_id = 0, $cli_centro_recepcion_id = 0, $en_domicilio = 0, $pan_panol_id, $observacion = '') {

        $vta_remito_ajuste = new VtaRemitoAjuste();
        if ($cli_cliente_id != 0) {
            $vta_remito_ajuste->setCliClienteId($cli_cliente_id);
        }
        if ($cli_centro_recepcion_id != 0) {
            $vta_remito_ajuste->setCliCentroRecepcionId($cli_centro_recepcion_id);
        }

        if ($vta_presupuesto) {
            $vta_remito_ajuste->setVtaPresupuestoId($vta_presupuesto->getId());
        }

        $vta_remito_ajuste->setFecha(Gral::getFechaActual());
        $vta_remito_ajuste->setObservacion($observacion);
        $vta_remito_ajuste->setEstado(1);
        $vta_remito_ajuste->setEnDomicilio($en_domicilio);
        if($pan_panol_id != 0){
            $vta_remito_ajuste->setPanPanolId($pan_panol_id);
        }
        $vta_remito_ajuste->save();

        // se setea el codigo del remito
        $vta_remito_ajuste->setCodigo(self::PREFIJO_RMT . str_pad($vta_remito_ajuste->getId(), 8, 0, STR_PAD_LEFT));
        $vta_remito_ajuste->save();

        // se registra el estado inicial del remito
        $vta_remito_ajuste->setVtaRemitoAjusteEstado(VtaRemitoAjusteTipoEstado::TIPO_GENERADO, $observacion);

        if($pan_panol_id != 0){
            // se registra el estado preparadp del remito
            $vta_remito_ajuste->setVtaRemitoAjusteEstado(VtaRemitoAjusteTipoEstado::TIPO_PREPARADO, $observacion);
        }

        if (!empty($vta_remito_ajuste->getId())) {
            foreach ($vta_orden_venta_ids as $vta_orden_venta_id) {
                $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
                $persona_descripcion = $vta_orden_venta->getPersonaDescripcion();

                if (!$vta_orden_venta->getVtaOrdenVentaEstadoEnRemito()) {
                    $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_EN_REMITO);
                    $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_DESPACHO_TOTAL, $observacion = "Venta Inmediata Contado");
                }

                $vta_remito_ajuste_vta_orden_venta = new VtaRemitoAjusteVtaOrdenVenta();
                $vta_remito_ajuste_vta_orden_venta->setDescripcion($vta_orden_venta->getDescripcion());
                $vta_remito_ajuste_vta_orden_venta->setVtaRemitoAjusteId($vta_remito_ajuste->getId());
                $vta_remito_ajuste_vta_orden_venta->setVtaOrdenVentaId($vta_orden_venta->getId());
                $vta_remito_ajuste_vta_orden_venta->setInsInsumoId($vta_orden_venta->getInsInsumoId());
                $vta_remito_ajuste_vta_orden_venta->setCantidad($vta_orden_venta_cantidads[$vta_orden_venta->getId()]);
                $vta_remito_ajuste_vta_orden_venta->setCodigo('');
                $vta_remito_ajuste_vta_orden_venta->setObservacion('');
                $vta_remito_ajuste_vta_orden_venta->setEstado(1);
                $vta_remito_ajuste_vta_orden_venta->save();
            }
        }

        $vta_remito_ajuste->setPersonaDescripcion($persona_descripcion);
        $vta_remito_ajuste->save();

        if($pan_panol_id != 0){
            // -------------------------------------------------------------------------
            // se registra movimiento de stock
            // -------------------------------------------------------------------------
            $vta_remito_ajuste->setVtaRemitoAjusteRegistrarMovimientoStock();
        }
        
        return $vta_remito_ajuste;
    }
    
    
    static function setInicializarVtaRemitoAjusteDesdeVentaInmediataCtacte($vta_presupuesto = false, $vta_orden_venta_ids, $vta_orden_venta_cantidads, $cli_cliente_id = 0, $cli_centro_recepcion_id = 0, $en_domicilio = 0, $pan_panol_id, $arr_info_tipo_despacho, $observacion = '') {

        if ($arr_info_tipo_despacho) {
            $vta_remito_ajuste_tipo_despacho = $arr_info_tipo_despacho['vta_remito_ajuste_tipo_despacho'];
            $nota_publica                    = $arr_info_tipo_despacho['nota_publica'];
            $destinatario                    = $arr_info_tipo_despacho['destinatario'];
        }

        $vta_remito_ajuste = new VtaRemitoAjuste();
        if ($cli_cliente_id != 0) {
            $vta_remito_ajuste->setCliClienteId($cli_cliente_id);
        }
        if ($cli_centro_recepcion_id != 0) {
            $vta_remito_ajuste->setCliCentroRecepcionId($cli_centro_recepcion_id);
        }
        if ($vta_remito_ajuste_tipo_despacho) {
            $vta_remito_ajuste->setVtaRemitoAjusteTipoDespachoId($vta_remito_ajuste_tipo_despacho->getId());
        }

        if ($vta_presupuesto) {
            $vta_remito_ajuste->setVtaPresupuestoId($vta_presupuesto->getId());
        }

        $vta_remito_ajuste->setFecha(Gral::getFechaActual());
        $vta_remito_ajuste->setObservacion($observacion);
        $vta_remito_ajuste->setNotaPublica($nota_publica);
        $vta_remito_ajuste->setEstado(1);
        $vta_remito_ajuste->setEnDomicilio($en_domicilio);
        if ($pan_panol_id != 0) {
            $vta_remito_ajuste->setPanPanolId($pan_panol_id);
        }
        $vta_remito_ajuste->save();

        // ----------------------------------------------------------------------
        // se setea el codigo del remito
        // ----------------------------------------------------------------------
        $vta_remito_ajuste->setCodigo(self::PREFIJO_RMT . str_pad($vta_remito_ajuste->getId(), 8, 0, STR_PAD_LEFT));
        $vta_remito_ajuste->save();

        // ----------------------------------------------------------------------
        // se registra el estado inicial del remito
        // ----------------------------------------------------------------------
        $vta_remito_ajuste->setVtaRemitoAjusteEstado(VtaRemitoAjusteTipoEstado::TIPO_GENERADO, $observacion);

        if ($pan_panol_id != 0) {
            // ------------------------------------------------------------------
            // se registra el estado preparado del remito
            // ------------------------------------------------------------------
            $vta_remito_ajuste->setVtaRemitoAjusteEstado(VtaRemitoAjusteTipoEstado::TIPO_PREPARADO, $observacion);
        }

        // ------------------------------------------------------------------
        // se deduce en que estado debe quedar el remito, de acuerdo al tipo de desapcho
        // ------------------------------------------------------------------
        if ($vta_remito_ajuste_tipo_despacho)
        {
            if ($vta_remito_ajuste_tipo_despacho->getCodigo() == VtaRemitoAjusteTipoDespacho::TIPO_RETIRO_SUCURSAL)
            {
                $retirado_por = $arr_info_tipo_despacho['retirado_por'];

                // ------------------------------------------------------------------
                // se registra el estado despachado del remito
                // ------------------------------------------------------------------
                $vta_remito_ajuste->setVtaRemitoAjusteEstadoRetirado($retirado_por, $nota_publica);
            }
            elseif ($vta_remito_ajuste_tipo_despacho->getCodigo() == VtaRemitoAjusteTipoDespacho::TIPO_ENVIO_DOMICILIO)
            {
                $gral_empresa_transportadora_id = $arr_info_tipo_despacho['gral_empresa_transportadora_id'];
                $guia                           = $arr_info_tipo_despacho['guia'];
                $costo_envio                    = $arr_info_tipo_despacho['costo_envio'];
                $cantidad_bultos                = $arr_info_tipo_despacho['cantidad_bultos'];
                $peso                           = $arr_info_tipo_despacho['peso'];
                $destinatario                   = $arr_info_tipo_despacho['destinatario'];

                // ------------------------------------------------------------------
                // se registra el estado despachado del remito
                // ------------------------------------------------------------------
                $vta_remito_ajuste->setVtaRemitoAjusteEstadoDespachado($gral_empresa_transportadora_id, $guia, $costo_envio, $cantidad_bultos, $peso, $nota_interna = $observacion, $nota_publica);
            }
        }
        
        if (!empty($vta_remito_ajuste->getId())) {
            foreach ($vta_orden_venta_ids as $vta_orden_venta_id) {
                $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
                $persona_descripcion = $vta_orden_venta->getPersonaDescripcion();

                if (!$vta_orden_venta->getVtaOrdenVentaEstadoEnRemitoAjuste()) {
                    $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_EN_AJUSTE);
                    $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_AJUSTE_TOTAL, $observacion = "Ajuste Inmediato Cta Cte");
                }

                $vta_remito_ajuste_vta_orden_venta = new VtaRemitoAjusteVtaOrdenVenta();
                $vta_remito_ajuste_vta_orden_venta->setDescripcion($vta_orden_venta->getDescripcion());
                $vta_remito_ajuste_vta_orden_venta->setVtaRemitoAjusteId($vta_remito_ajuste->getId());
                $vta_remito_ajuste_vta_orden_venta->setVtaOrdenVentaId($vta_orden_venta->getId());
                $vta_remito_ajuste_vta_orden_venta->setInsInsumoId($vta_orden_venta->getInsInsumoId());
                $vta_remito_ajuste_vta_orden_venta->setCantidad($vta_orden_venta_cantidads[$vta_orden_venta->getId()]);
                $vta_remito_ajuste_vta_orden_venta->setCodigo('');
                $vta_remito_ajuste_vta_orden_venta->setObservacion('');
                $vta_remito_ajuste_vta_orden_venta->setEstado(1);
                $vta_remito_ajuste_vta_orden_venta->save();
            }
        }

        $vta_remito_ajuste->setRetiradoPor($retirado_por);
        $vta_remito_ajuste->setNotaPublica($nota_publica);
        $vta_remito_ajuste->setPersonaDescripcion($persona_descripcion);
        $vta_remito_ajuste->save();

        if ($pan_panol_id != 0) {
            // -------------------------------------------------------------------------
            // se registra movimiento de stock
            // -------------------------------------------------------------------------
            $vta_remito_ajuste->setVtaRemitoAjusteRegistrarMovimientoStock();
        }

        if (trim($destinatario) != '') {
            // -------------------------------------------------------------------------
            // se envia email de notificacion al cliente
            // -------------------------------------------------------------------------
            //$vta_remito_ajuste->enviarRemitoAjusteEmail($enviar = true, $destinatario, $nota_publica, $archivo_adjunto_urls = false);
        }

        return $vta_remito_ajuste;
    }


    /**
     * Autor: Pablo Rosen
     * Fecha: 17/10/2017 17:00 hs.
     * Metodo que genera un remito por venta contado inmediata.
     * @return Obj VtaRemitoAjuste
     */
    static function setInicializarVtaRemitoAjusteDesdeVentaInmediataContado($vta_presupuesto = false, $vta_orden_venta_ids, $vta_orden_venta_cantidads, $cli_cliente_id = 0, $cli_centro_recepcion_id = 0, $en_domicilio = 0, $pan_panol_id, $observacion = '', $vta_tipo_remito_ajuste_id, $gral_empresa_id, $vta_punto_venta_id) {

        $vta_remito_ajuste = new VtaRemitoAjuste();
        if ($cli_cliente_id != 0) {
            $vta_remito_ajuste->setCliClienteId($cli_cliente_id);
        }
        if ($cli_centro_recepcion_id != 0) {
            $vta_remito_ajuste->setCliCentroRecepcionId($cli_centro_recepcion_id);
        }

        if ($vta_presupuesto) {
            $vta_remito_ajuste->setVtaPresupuestoId($vta_presupuesto->getId());
            $vta_remito_ajuste->setGralSucursalId($vta_presupuesto->getGralSucursalId());
        }

        $vta_remito_ajuste_tipo_despacho = VtaRemitoAjusteTipoDespacho::getOxCodigo(VtaRemitoAjusteTipoDespacho::TIPO_RETIRO_SUCURSAL);
        if($vta_remito_ajuste_tipo_despacho){
            $vta_remito_ajuste->setVtaRemitoAjusteTipoDespachoId($vta_remito_ajuste_tipo_despacho->getId());
        }

        $vta_remito_ajuste->setFecha(Gral::getFechaActual());
        $vta_remito_ajuste->setObservacion($observacion);
        $vta_remito_ajuste->setEstado(1);
        $vta_remito_ajuste->setEnDomicilio($en_domicilio);
        $vta_remito_ajuste->setPanPanolId($pan_panol_id);

        $vta_remito_ajuste->setGralEmpresaId($gral_empresa_id);
        $vta_remito_ajuste->setVtaPuntoVentaId($vta_punto_venta_id);
        $vta_remito_ajuste->setVtaTipoRemitoAjusteId($vta_tipo_remito_ajuste_id);
        
        $vta_remito_ajuste->save();

        // se setea el codigo del remito
        $vta_remito_ajuste->setCodigo(self::PREFIJO_RMT . str_pad($vta_remito_ajuste->getId(), 8, 0, STR_PAD_LEFT));
        $vta_remito_ajuste->save();

        // se registra el estado inicial del remito
        $vta_remito_ajuste->setVtaRemitoAjusteEstado(VtaRemitoAjusteTipoEstado::TIPO_GENERADO, $observacion);

        // se registra el estado preparadp del remito
        $vta_remito_ajuste->setVtaRemitoAjusteEstado(VtaRemitoAjusteTipoEstado::TIPO_PREPARADO, $observacion);

        // se registra el estado entregado del remito
        $vta_remito_ajuste->setVtaRemitoAjusteEstado(VtaRemitoAjusteTipoEstado::TIPO_ENTREGADO, $observacion);        

        if (!empty($vta_remito_ajuste->getId())) {
            foreach ($vta_orden_venta_ids as $vta_orden_venta_id) {
                $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
                $persona_descripcion = $vta_orden_venta->getPersonaDescripcion();

                if (!$vta_orden_venta->getVtaOrdenVentaEstadoEnRemito()) {
                    $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_EN_AJUSTE);
                    $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_AJUSTE_TOTAL, $observacion = "Ajuste Inmediata Contado");
                }

                $vta_remito_ajuste_vta_orden_venta = new VtaRemitoAjusteVtaOrdenVenta();
                $vta_remito_ajuste_vta_orden_venta->setDescripcion($vta_orden_venta->getDescripcion());
                $vta_remito_ajuste_vta_orden_venta->setVtaRemitoAjusteId($vta_remito_ajuste->getId());
                $vta_remito_ajuste_vta_orden_venta->setVtaOrdenVentaId($vta_orden_venta->getId());
                $vta_remito_ajuste_vta_orden_venta->setInsInsumoId($vta_orden_venta->getInsInsumoId());
                $vta_remito_ajuste_vta_orden_venta->setCantidad($vta_orden_venta_cantidads[$vta_orden_venta->getId()]);
                $vta_remito_ajuste_vta_orden_venta->setCodigo('');
                $vta_remito_ajuste_vta_orden_venta->setObservacion('');
                $vta_remito_ajuste_vta_orden_venta->setEstado(1);
                $vta_remito_ajuste_vta_orden_venta->save();
            }
        }

        $vta_remito_ajuste->setPersonaDescripcion($persona_descripcion);
        $vta_remito_ajuste->save();

        // -------------------------------------------------------------------------
        // se registra movimiento de stock
        // -------------------------------------------------------------------------
        $vta_remito_ajuste->setVtaRemitoAjusteRegistrarMovimientoStock();

        return $vta_remito_ajuste;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 27/09/2017 08:00 hs.
     * Metodo que registra un nuevo estado del remito.
     * @return Obj VtaRemitoAjusteEstado
     */
    public function setVtaRemitoAjusteEstado($codigo, $observacion = '') {
        $inicial = 1;
        $vta_remito_ajuste_estado = false;

        // se agrega el nuevo estado del remito
        $vta_remito_ajuste_tipo_estado = VtaRemitoAjusteTipoEstado::getOxCodigo($codigo);

        if ($vta_remito_ajuste_tipo_estado) {
            foreach ($this->getVtaRemitoAjusteEstados() as $vta_remito_ajuste_estado) {
                $vta_remito_ajuste_estado->setActual(0);
                $vta_remito_ajuste_estado->save();
                $inicial = 0;
            }

            $vta_remito_ajuste_estado = new VtaRemitoAjusteEstado();
            $vta_remito_ajuste_estado->setVtaRemitoAjusteId($this->getId());
            $vta_remito_ajuste_estado->setVtaRemitoAjusteTipoEstadoId($vta_remito_ajuste_tipo_estado->getId());
            $vta_remito_ajuste_estado->setInicial($inicial);
            $vta_remito_ajuste_estado->setActual(1);
            $vta_remito_ajuste_estado->setNotaInterna($observacion);
            $vta_remito_ajuste_estado->setObservacion('');
            $vta_remito_ajuste_estado->save();

            // actualizamos el estado en vta_remito_ajuste      
            $this->setVtaRemitoAjusteTipoEstadoId($vta_remito_ajuste_tipo_estado->getId());
            $this->save();
        }

        return $vta_remito_ajuste_estado;
    }

    /**
     *  Autor: Pablo Rosen
     * Fecha: 30/07/2020 10:22
     * Metodo que permite registrar el estado de despachado de un remito, ademas de sus datos relevantes
     */
    public function setVtaRemitoAjusteEstadoRetirado($retirado_por, $nota_publica) {

        // ---------------------------------------------------------------------
        // se registra el camio de estado
        // ---------------------------------------------------------------------
        $vta_remito_ajuste_estado = $this->setVtaRemitoAjusteEstado(VtaRemitoAjusteTipoEstado::TIPO_ENTREGADO);

        // ---------------------------------------------------------------------
        // se agregan datos extras del tipo de estado
        // ---------------------------------------------------------------------
        $vta_remito_ajuste_estado->setRetiradoPor($retirado_por);
        $vta_remito_ajuste_estado->save();

        // ---------------------------------------------------------------------
        // se registra la nota publica en el remito
        // ---------------------------------------------------------------------
        $this->setRetiradoPor($retirado_por);
        $this->setNotaPublica($nota_publica);
        $this->save();

        return $vta_remito_ajuste_estado;
    }

    /**
     *  Autor: Pablo Rosen
     * Fecha: 30/07/2020 10:22
     * Metodo que permite registrar el estado de despachado de un remito, ademas de sus datos relevantes
     */
    public function setVtaRemitoAjusteEstadoDespachado($gral_empresa_transportadora_id, $guia, $costo_envio, $cantidad_bultos, $peso, $nota_interna, $nota_publica) {

        // ---------------------------------------------------------------------
        // se registra el camio de estado
        // ---------------------------------------------------------------------
        $vta_remito_ajuste_estado = $this->setVtaRemitoAjusteEstado(VtaRemitoAjusteTipoEstado::TIPO_DESPACHADO);

        // ---------------------------------------------------------------------
        // se agregan datos extras del tipo de estado
        // ---------------------------------------------------------------------
        $vta_remito_ajuste_estado->setGralEmpresaTransportadoraId($gral_empresa_transportadora_id);
        $vta_remito_ajuste_estado->setGuia($guia);
        $vta_remito_ajuste_estado->setCostoEnvio($costo_envio);
        $vta_remito_ajuste_estado->setCantidadBultos($cantidad_bultos);
        $vta_remito_ajuste_estado->setPeso($peso);
        $vta_remito_ajuste_estado->setNotaInterna($nota_interna);
        $vta_remito_ajuste_estado->save();

        // ---------------------------------------------------------------------
        // se registra la nomta publica en el remito
        // ---------------------------------------------------------------------
        $this->setNotaPublica($nota_publica);
        $this->save();


        return $vta_remito_estado;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 27/09/2017 11:07 hs.
     * Metodo que retorna el estado actual del remito.
     * @return Obj VtaRemitoAjusteEstado
     */
    public function getVtaRemitoAjusteEstadoActual() {
        $c = new Criterio();
        $c->add(VtaRemitoAjusteEstado::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaRemitoAjusteEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(VtaRemitoAjusteEstado::GEN_TABLA);
        $c->setCriterios();

        $vta_remito_ajuste_estados = VtaRemitoAjusteEstado::getVtaRemitoAjusteEstados(null, $c);
        foreach ($vta_remito_ajuste_estados as $vta_remito_ajuste_estado) {
            return $vta_remito_ajuste_estado;
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 27/09/2017 11:00 hs.
     * Metodo que retorna el tipo de estado actual del remito.
     * @return Obj VtaRemitoAjusteEstado
     */
    public function getVtaRemitoAjusteTipoEstadoActual() {
        $vta_remito_ajuste_actual = $this->getVtaRemitoAjusteEstadoActual();
        if ($vta_remito_ajuste_actual) {
            return $vta_remito_ajuste_actual->getVtaRemitoAjusteTipoEstado();
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 27/09/2017 11:00 hs.
     * Metodo que retorna si el remito esta en un estado terminal.
     * @return Bool
     */
    public function getVtaRemitoAjusteTipoEstadoActualTerminal() {
        $terminal = $this->getVtaRemitoAjusteTipoEstadoActual()->getTerminal();
        return $terminal;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 22/11/2017 21:08.
     * Metodo que retorna el estado de un remito de acuerdo a un codigo indicado
     * @return PdiEstado
     */
    public function getVtaRemitoAjusteEstadoXCodigoDeVtaRemitoAjusteTipoEstado($valor) {
        $c = new Criterio();
        $c->add(VtaRemitoAjusteEstado::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaRemitoAjusteTipoEstado::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
        $c->addTabla(VtaRemitoAjusteEstado::GEN_TABLA);
        $c->addRealJoin(VtaRemitoAjusteTipoEstado::GEN_TABLA, VtaRemitoAjusteTipoEstado::GEN_ATTR_ID, VtaRemitoAjusteEstado::GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID);
        $c->setCriterios();

        $vta_remito_ajuste_estados = VtaRemitoAjusteEstado::getVtaRemitoAjusteEstados(null, $c);
        foreach ($vta_remito_ajuste_estados as $vta_remito_ajuste_estado) {
            return $vta_remito_ajuste_estado;
        }
        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 27/09/2017 11:00 hs.
     * Metodo que retorna el usuario.
     * @return VtaVendedor
     */
    public function getVtaVendedor() {
        $vta_vendedor = UsUsuario::getOxId($this->getCreadoPor());
        return $vta_vendedor;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 27/09/2017 11:00 hs.
     * Metodo que retorna la cantidad VtaRemitoAjusteVtaOrdenVenta.
     * @return Integer
     */
    public function getCantidadItemsRemitoAjuste() {
        $items = $this->getVtaRemitoAjusteVtaOrdenVentas(null, null, true);
        return count($items);
    }



    /**
     * Autor: Gustavo Romo.
     * Fecha: 18/10/2017 11:00 hs.
     * Metodo que envia el remito por email.
     * @return 
     */
    public function enviarRemitoAjusteEmail($enviar = false, $destinatarios = false, $txa_observacion, $archivo_adjunto_urls = false) {
        if (!Mail::MAIL_ACTIVO)
            return false;

        $mail_asunto = Gral::getConfig('gral_cliente').' - Remito #' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios = str_replace(' ', '', $destinatarios);
        $destinatarios = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param = array(
            'vta_remito_ajuste_id' => $this->getId(),
            'observacion' => $txa_observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_vta_remito_ajuste.php";
        $msg = Gral::get_include_contents($archivo, $param);

        if (!$enviar) {
            echo $msg;
            return;
        }

        if (!empty($archivo_adjunto_urls)) {
            foreach ($archivo_adjunto_urls as $nombre_archivo => $contenido_archivo) {
                $strContenidoPdf = $contenido_archivo;
            }
        }

        $vta_remito_ajuste_enviado = $this->inicializarVtaRemitoAjusteEnviado($txa_observacion, $destinatarios, $mail_asunto, $msg, $strContenidoPdf);

        $mail = new PHPMailer(); // defaults to using php "mail()"

        try {
            //$mail->SetLanguage('es', 'language/');
            $mail->IsSMTP(); //indico a la clase que use SMTP
            $mail->SMTPAuth = true;
            $mail->SMTPDebug = 0;
            if (Mail::MAIL_SECURE != '') {
                $mail->SMTPSecure = Mail::MAIL_SECURE;
            }
            $mail->CharSet = 'UTF-8';

            $mail->Host = Mail::MAIL_SERVIDOR_ENVIO; // SMTP server
            $mail->Username = Mail::MAIL_CASILLA_USUARIO;
            $mail->Password = Mail::MAIL_PASS_ENVIO;
            $mail->Port = Mail::MAIL_PUERTO_ENVIO;

            $mail->From = Mail::MAIL_CASILLA_ENVIO;
            $mail->FromName = Mail::MAIL_NOMBRE_REMITENTE;
            $mail->AddReplyTo(Mail::MAIL_CASILLA_REPLYTO);

            $mail->IsHTML(true);
            $mail->Subject = $mail_asunto;

            $mail->Body = $msg;

            if (!empty($arr_destinatarios)) {
                foreach ($arr_destinatarios as $arr_destinatario) {
                    if (filter_var($arr_destinatario, FILTER_VALIDATE_EMAIL)) { // comprobarEmail($destinatario)
                        $mail->AddAddress($arr_destinatario); //destinatarios
                    }
                }
            }

            if (!empty($archivo_adjunto_urls)) {
                foreach ($archivo_adjunto_urls as $nombre_archivo => $contenido_archivo) {
                    $mail->AddStringAttachment($contenido_archivo, $nombre_archivo, 'base64', 'application/pdf');
                }
            }

            $mail->Timeout = 20;

            $envio_ok = $mail->Send();
            if ($envio_ok) {
                $vta_remito_ajuste_enviado->setConfirmarVtaRemitoAjusteEnviado(1, VtaRemitoAjusteEnviado::REMITO_ENVIADO_CORRECTAMENTE);
            } else {
                $vta_remito_ajuste_enviado->setConfirmarVtaRemitoAjusteEnviado(0, $mail->ErrorInfo);
            }

            return $envio_ok;
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }

        return false;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 19/10/2017 11:00 hs.
     * Metodo que Inicializa el envio por mail del remito.
     * @return VtaRemitoAjusteEnviado
     */
    public function inicializarVtaRemitoAjusteEnviado($observacion, $destinatarios, $mail_asunto, $mail_contenido, $archivo_adjunto) {
        $vta_remito_ajuste_enviado = new VtaRemitoAjusteEnviado();
        $vta_remito_ajuste_enviado->setDescripcion('');
        $vta_remito_ajuste_enviado->setVtaRemitoAjusteId($this->getId());
        $vta_remito_ajuste_enviado->setAsunto($mail_asunto);
        $vta_remito_ajuste_enviado->setDestinatario($destinatarios);

        $vta_remito_ajuste_enviado->setCuerpo(addslashes($mail_contenido));
        $vta_remito_ajuste_enviado->setAdjunto(base64_encode($archivo_adjunto));

        $vta_remito_ajuste_enviado->setCodigoEnvio(0);
        $vta_remito_ajuste_enviado->setObservacion($observacion);
        $vta_remito_ajuste_enviado->setEstado(0);

        $vta_remito_ajuste_enviado->save();

        return $vta_remito_ajuste_enviado;
    }

    public function getNombreArchivoAdjuntoRemitoAjuste() {
        return Gral::getConfig('conf_proyecto_min').' - Remito Ajuste #' . $this->getCodigo() . '.pdf';
    }

    public function getControlEstado($txt_vta_remito_ajuste_tipo_estado) {
        $vta_remito_ajuste_estado = $this->getVtaRemitoAjusteEstadoActual();
        if ($vta_remito_ajuste_estado->getVtaRemitoAjusteTipoEstado()->getCodigo() == $txt_vta_remito_ajuste_tipo_estado) {
            return true;
        }
        return false;
    }

    public function getVtaOrdenVentas() {

        $c = new Criterio();
        $c->add(VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $this->getId(), Criterio::IGUAL);

        $c->addTabla(VtaOrdenVenta::GEN_TABLA);
        $c->addRealJoin(VtaRemitoAjusteVtaOrdenVenta::GEN_TABLA, VtaRemitoAjusteVtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_ID, VtaOrdenVenta::GEN_ATTR_ID);

        $c->setCriterios();

        $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $c);
        if (count($vta_orden_ventas) > 0) {
            return $vta_orden_ventas;
        }
        return false;
    }

    public function getVtaPresupuesto_OLD() {
        $vta_orden_ventas = $this->getVtaOrdenVentas();

        foreach ($vta_orden_ventas as $vta_orden_venta) {
            return $vta_orden_venta->getVtaPresupuesto();
        }
        return false;
    }

    /**
     * Retorna un valor booleano que indica si alguno de los items del remito mueve stock
     * @return boolean
     */
    public function getVtaRemitoAjusteMueveStock() {
        $remito_mueve_stock = false;

        $vta_remito_ajuste_vta_orden_ventas = $this->getVtaRemitoAjusteVtaOrdenVentas();
        foreach ($vta_remito_ajuste_vta_orden_ventas as $vta_remito_ajuste_vta_orden_venta) {
            $vta_orden_venta = $vta_remito_ajuste_vta_orden_venta->getVtaOrdenVenta();
            $ins_insumo = $vta_orden_venta->getInsInsumo();
            if ($ins_insumo->getControlStock()) {
                $remito_mueve_stock = true;
            }
        }
        return $remito_mueve_stock;
    }

    public function setVtaRemitoAjusteRegistrarMovimientoStock() {
        foreach ($this->getVtaRemitoAjusteVtaOrdenVentas() as $vta_remito_ajuste_vta_orden_venta) {
            $vta_orden_venta = $vta_remito_ajuste_vta_orden_venta->getVtaOrdenVenta();
            $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
            $ins_insumo = $vta_orden_venta->getInsInsumo();
            $cantidad = $vta_remito_ajuste_vta_orden_venta->getCantidad();
            if ($ins_insumo->getControlStock()) {
                // -------------------------------------------------------------
                // se registra pedido para control y actualizacion de stock
                // -------------------------------------------------------------
                $ins_stock_tipo_movimiento_codigo = InsStockTipoMovimiento::TIPO_MOV_SALIDA;

                $pan_panol_id = 1; // hardcodeado panol unico LAE Casa Central, se debe dinamizar
                $pan_panol = $this->getPanPanol();
                if($pan_panol){
                    $pan_panol_id = $pan_panol->getId();
                }

                $pdi_pedido = PdiPedido::setPdiPedidoPorRemisionDeInsumo(
                                $ins_insumo->getId(), $panol_origen = $pan_panol_id, $panol_destino = $pan_panol_id, $cantidad, $observacion = 'Remision por Venta ' . $this->getCodigo().' en Presupuesto '.$vta_presupuesto->getCodigo().' a Cliente '.$vta_presupuesto->getPersonaDescripcion(), $ins_stock_tipo_movimiento_codigo
                );
            }
            
            
            // ---------------------------------------------------------------------------------
            // si el insumo esta compuesto por otros, debemos afectar el stock de su composicion
            // ---------------------------------------------------------------------------------
            $ins_insumo_composicions = $ins_insumo->getInsInsumoComposicions(null, null, true);
            foreach($ins_insumo_composicions as $ins_insumo_composicion)
            {
                $ins_insumo_hijo = $ins_insumo_composicion->getInsInsumoComposicionObj();
                if ($ins_insumo_hijo->getControlStock())
                {
                    $cantidad_composicion = $ins_insumo_composicion->getCantidad() * $cantidad;
                    
                    // -------------------------------------------------------------
                    // se registra pedido para control y actualizacion de stock de la composicion
                    // -------------------------------------------------------------
                    $ins_stock_tipo_movimiento_codigo = InsStockTipoMovimiento::TIPO_MOV_SALIDA;
                    
                    $pan_panol_id = 1; // hardcodeado panol inicial, se debe dinamizar
                    $pan_panol = $this->getPanPanol();
                    if($pan_panol){
                        $pan_panol_id = $pan_panol->getId();
                    }

                    $pdi_pedido = PdiPedido::setPdiPedidoPorRemisionDeInsumo(
                                    $ins_insumo_hijo->getId(), $panol_origen = $pan_panol_id, $panol_destino = $pan_panol_id, $cantidad_composicion, $observacion = 'Remision por Venta de '.$ins_insumo->getDescripcion().' (COMBO) en ' . $this->getCodigo().' en Presupuesto '.$vta_presupuesto->getCodigo().' a Cliente '.$vta_presupuesto->getPersonaDescripcion(), $ins_stock_tipo_movimiento_codigo
                    );
                }
            } 
        }

        return true;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 27/08/2018 18:39
     * Metodo que genera codigo EPL para impresion de etiqueta
     * @return String
     */
    public function getEtiquetaRemisionEPL($cantidad = 1) {
        $texto = 'N
q540
;Q135,10
A50,35,0,1,1,2,R,"  '.Gral::getConfig('gral_cliente').' - Insumos de Panol  "
;LO100,130,550,10
B50,80,0,1,3,0,80,N,"' . $this->getCodigo() . '"
A50,180,0,3,1,1,N,"' . $this->getDescripcion() . '"
A50,210,0,2,1,1,N,"Cod: ' . $this->getCodigo() . '"
P' . $cantidad . ',1            
        ';

        return $texto;
    }

    /**
     * Registro de hoja de ruta
     *
     * @param [int] $vta_hoja_ruta_id
     * @return [object] $vta_hoja_ruta_vta_remito
     */
    public function setHojaRuta($vta_hoja_ruta_id)
    {
        //--------------------------------------
        // se desvincula la hoja de ruta actual
        //--------------------------------------
        $this->setDesvincularHojaRuta();

        //--------------------------------------
        // se vincula nueva hoja de ruta
        //--------------------------------------
        $array = array(
            array('campo' => 'vta_remito_ajuste_id', 'valor' => $this->getId()),
            array('campo' => 'estado', 'valor' => 1),
        );
        $vta_hoja_ruta_vta_remito_ajuste = VtaHojaRutaVtaRemitoAjuste::getOxArray($array);
        
        if (!$vta_hoja_ruta_vta_remito_ajuste)
        {
            $vta_hoja_ruta_vta_remito_ajuste = new VtaHojaRutaVtaRemitoAjuste();
        }
        $vta_hoja_ruta_vta_remito_ajuste->setVtaHojaRutaId($vta_hoja_ruta_id);
        $vta_hoja_ruta_vta_remito_ajuste->setVtaRemitoAjusteId($this->getId());
        $vta_hoja_ruta_vta_remito_ajuste->setEstado(1);
        $vta_hoja_ruta_vta_remito_ajuste->save();
        
        return $vta_hoja_ruta_vta_remito_ajuste;
    }
    
    /**
     * Desvincula un remito ajuste a una hoja de ruta seteando en 0 el estado
     *
     * @return void
     */
    public function setDesvincularHojaRuta()
    {
        // se borran los registros
        $this->deleteVtaHojaRutaVtaRemitoAjustes();
        //return true;
        
        /*
        $vta_hoja_ruta_vta_remito_ajustes = $this->getVtaHojaRutaVtaRemitoAjustes(null, null, true);
        foreach($vta_hoja_ruta_vta_remito_ajustes as $vta_hoja_ruta_vta_remito_ajuste)
        {
            $vta_hoja_ruta_vta_remito_ajuste->setEstado(0);
            $vta_hoja_ruta_vta_remito_ajuste->save();
        }
        */
    }    
    
    /**
     * Undocumented function
     *
     * @return void
     */
    public function getVtaHojaRutaActiva()
    {
        $criterio = new Criterio();
        $criterio->addTabla(VtaHojaRuta::GEN_TABLA);
        $criterio->addRealJoin(VtaHojaRutaVtaRemitoAjuste::GEN_TABLA, VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_VTA_HOJA_RUTA_ID, VtaHojaRuta::GEN_ATTR_ID);
        $criterio->addRealJoin(VtaRemitoAjuste::GEN_TABLA, VtaRemitoAjuste::GEN_ATTR_ID, VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_VTA_REMITO_AJUSTE_ID);
        $criterio->add(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->add(VtaHojaRutaVtaRemitoAjuste::GEN_ATTR_VTA_REMITO_AJUSTE_ID, $this->getId(), Criterio::IGUAL);
        $criterio->setCriterios();
        
        $vta_hoja_rutas = VtaHojaRuta::getVtaHojaRutas(null, $criterio);
        foreach($vta_hoja_rutas as $vta_hoja_ruta){
            return $vta_hoja_ruta;
        }

        return false;
    }

    /**
     * 
     * @param type $arr_filtros
     * @return type
     */
    static function getVtaRemitoAjustesVinculablesAVtaHojaRuta($arr_filtros)
    {
        $criterio = new Criterio();
        
        if(isset($arr_filtros['vta_hoja_ruta_id']))
        {
            $criterio->add(VtaHojaRuta::GEN_ATTR_ID, $arr_filtros['vta_hoja_ruta_id'], Criterio::IGUAL);
        }
        
        if(isset($arr_filtros['fecha_desde']) && $arr_filtros['fecha_desde'] != '')
        {
            $criterio->add(VtaRemitoAjuste::GEN_ATTR_FECHA, Gral::getFechaToDB($arr_filtros['fecha_desde']), Criterio::MAYORIGUAL);
        }

        if(isset($arr_filtros['fecha_hasta']) && $arr_filtros['fecha_hasta'] != '')
        {
            $criterio->add(VtaRemitoAjuste::GEN_ATTR_FECHA, Gral::getFechaToDB($arr_filtros['fecha_hasta']), Criterio::MENORIGUAL);
        }

        if(isset($arr_filtros['geo_localidad_id']) && $arr_filtros['geo_localidad_id'] != 0)
        {
            $criterio->add(GeoLocalidad::GEN_ATTR_ID, $arr_filtros['geo_localidad_id'], Criterio::IGUAL);
        }

        if(isset($arr_filtros['buscador']) && $arr_filtros['buscador'] != '')
        {
            $criterio->addInicioSubconsulta();
            $criterio->add(VtaRemitoAjuste::GEN_ATTR_ID, $arr_filtros['buscador'], Criterio::LIKE, false, Criterio::_AND);
            $criterio->add(VtaRemitoAjuste::GEN_ATTR_CODIGO, $arr_filtros['buscador'], Criterio::LIKE, false, Criterio::_OR);
            $criterio->add(CliCliente::GEN_ATTR_DESCRIPCION, $arr_filtros['buscador'], Criterio::LIKE, false, Criterio::_OR);
            
            $criterio->addFinSubconsulta();
        }

        $criterio->add(VtaRemitoAjusteTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        
        //------------------------------------------------------
        //esta condicion es temporal
        //------------------------------------------------------
        //$criterio->add(VtaRemitoAjuste::GEN_ATTR_CREADO, '2022-03-01', Criterio::MAYORIGUAL);
        
        $criterio->addTabla(VtaRemitoAjuste::GEN_TABLA);
        $criterio->addRealJoin(CliCentroRecepcion::GEN_TABLA, CliCentroRecepcion::GEN_ATTR_ID, VtaRemitoAjuste::GEN_ATTR_CLI_CENTRO_RECEPCION_ID, 'LEFT JOIN');
        $criterio->addRealJoin(GeoLocalidad::GEN_TABLA, GeoLocalidad::GEN_ATTR_ID, CliCentroRecepcion::GEN_ATTR_GEO_LOCALIDAD_ID, 'LEFT JOIN');
        $criterio->addRealJoin(GralRutaGeoLocalidad::GEN_TABLA, GralRutaGeoLocalidad::GEN_ATTR_GEO_LOCALIDAD_ID, GeoLocalidad::GEN_ATTR_ID, 'LEFT JOIN');
        $criterio->addRealJoin(GralRuta::GEN_TABLA, GralRuta::GEN_ATTR_ID, GralRutaGeoLocalidad::GEN_ATTR_GRAL_RUTA_ID, 'LEFT JOIN');
        $criterio->addRealJoin(VtaHojaRuta::GEN_TABLA, VtaHojaRuta::GEN_ATTR_GRAL_RUTA_ID, GralRuta::GEN_ATTR_ID, 'LEFT JOIN');
        $criterio->addRealJoin(VtaRemitoAjusteTipoEstado::GEN_TABLA, VtaRemitoAjusteTipoEstado::GEN_ATTR_ID, VtaRemitoAjuste::GEN_ATTR_VTA_REMITO_AJUSTE_TIPO_ESTADO_ID, 'LEFT JOIN');
        
        $criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, VtaRemitoAjuste::GEN_ATTR_CLI_CLIENTE_ID, 'LEFT JOIN');
        
        $criterio->setCriterios();

        $vta_remito_ajustes = VtaRemitoAjuste::getVtaRemitoAjustes(null, $criterio);
        return $vta_remito_ajustes;
    }
    
    /**
     * Metodo que retorna el ultimo numero de comprobante asignado
     * @return boolean
     */
    public function getUltimoNumeroComprobante(){
        $ultimo = 0;

        $c = new Criterio();
        $c->addSelect(self::GEN_ATTR_NUMERO_REMITO_AJUSTE.'::INTEGER');
        $c->add(self::GEN_ATTR_VTA_TIPO_REMITO_AJUSTE_ID, $this->getVtaTipoRemitoAjusteId(), Criterio::IGUAL);
        $c->add(self::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getVtaPuntoVentaId(), Criterio::IGUAL);
        $c->add(self::GEN_ATTR_NUMERO_REMITO_AJUSTE, Criterio::VACIO, Criterio::DISTINTO);
        $c->addTabla(self::GEN_TABLA);
        $c->addOrden(self::GEN_ATTR_NUMERO_REMITO_AJUSTE.'::INTEGER', Criterio::_DESC);
        $c->setCriterios();
        
        $p = new Paginador(1, 1);
        
        $vta_remito_ajustes = VtaRemitoAjuste::getVtaRemitoAjustes($p, $c);
        foreach($vta_remito_ajustes as $vta_remito_ajuste){
            $numero_comprobante = $vta_remito_ajuste->getNumeroRemitoAjuste();
            $numero_comprobante_numerico = (int) $numero_comprobante;
            $ultimo = $numero_comprobante_numerico;
        }
        return $ultimo;
    }
        
    /**
     * Metodo que retorna el proximo numero de comprobante que debe asignado
     * @return boolean
     */
    public function getProximoNumeroComprobante(){
        $ultimo = $this->getUltimoNumeroComprobante();
        $proximo = $ultimo + 1;
        return $proximo;
    }
    
    /**
     * Metodo que registra el proximo numero de comprobante automatico
     * @return boolean
     */
    public function setAutogenerarNumeroComprobante(){
        $vta_punto_venta = $this->getVtaPuntoVenta();
        //$cae = $this->getCae();
        $numero_sucursal = $this->getNumeroSucursal();
        $numero_punto_venta = $this->getNumeroPuntoVenta();
        
        if($vta_punto_venta->getAutoincremental()){
            //if(trim($cae) == ''){
            if(true){
                $numero_comprobante = $this->getProximoNumeroComprobante();
                $numero_comprobante_pad = str_pad($numero_comprobante, DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);
                $numero_comprobante_completo = $numero_sucursal.'-'.$numero_punto_venta.'-'.$numero_comprobante_pad;
                $this->setNumeroRemitoAjuste($numero_comprobante_pad);
                $this->setNumeroRemitoAjusteCompleto($numero_comprobante_completo);
                //$this->setCae(ConfVariable::CODIGO_CAE_ALTERNATIVO);
                $this->save();
                //Gral::prr($this);
                
                return true;
            }
        }
        return false;
    } 
}
?>