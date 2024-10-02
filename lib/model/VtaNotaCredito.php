<?php

require_once "base/BVtaNotaCredito.php";

class VtaNotaCredito extends BVtaNotaCredito {

    const PREFIJO_NOTA_CREDITO = 'NC-';

    public function getTipoComprobanteSiglas() {
        return "NCR";
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 05/03/2018 09:00 hs.
     * Metodo que genera una nota de credito item.
     * @return Obj VtaNotaCredito
     */
    static function setInicializarVtaNotaCreditoItem($cmb_vta_preventista_id, $gral_actividad_id, $gral_escenario_id, $gral_fp_forma_pago_id, $gral_empresa_id, $vta_punto_venta_id, $nro_timbrado, $cli_cliente_id, $txt_cantidads, $txt_descripcions, $txt_importe_unitarios, $cmb_gral_tipo_iva_ids, $cmb_vta_nota_credito_concepto_ids, $cmb_aplica_percepcion_iibbs, $txa_nota_publica = '', $observacion = '', $chk_tributo_omitir_minimo = 0, $vta_nota_debito_ids = null, $vta_factura_ids = null) {

        // ---------------------------------------------------------------------
        // se determina el origen del comprobante
        // ---------------------------------------------------------------------
        $vta_tipo_origen_nota_credito = VtaTipoOrigenNotaCredito::getOxCodigo(VtaTipoOrigenNotaCredito::ORIGEN_ITEM);
        $gral_tipo_documento_cuit = GralTipoDocumento::getOxCodigo(GralTipoDocumento::TIPO_CUIT);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));
        $vta_punto_venta = VtaPuntoVenta::getOxId($vta_punto_venta_id);
        $gral_sucursal = $vta_punto_venta->getGralSucursalXGralSucursalVtaPuntoVenta();
        
        $cli_cliente = CliCliente::getOxId($cli_cliente_id);

        $vta_nota_credito = new VtaNotaCredito();
        $vta_nota_credito->setVtaTipoOrigenNotaCreditoId($vta_tipo_origen_nota_credito->getId());
        $vta_nota_credito->setVtaPreventistaId($cmb_vta_preventista_id);
        $vta_nota_credito->setGralActividadId($gral_actividad_id);
        $vta_nota_credito->setGralEscenarioId($gral_escenario_id);
        $vta_nota_credito->setGralFpFormaPagoId($gral_fp_forma_pago_id);
        $vta_nota_credito->setGralEmpresaId($gral_empresa_id);
        $vta_nota_credito->setVtaPuntoVentaId($vta_punto_venta_id);
        $vta_nota_credito->setNumeroTimbrado($nro_timbrado);        
        $vta_nota_credito->setNumeroSucursal(str_pad($gral_sucursal->getNumero(), DbConfig::VARS_CANTIDAD_NRO_SUCURSAL, 0, STR_PAD_LEFT));
        $vta_nota_credito->setNumeroPuntoVenta(str_pad($vta_punto_venta->getNumero(), DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA_SIMPLE, 0, STR_PAD_LEFT));
        $vta_nota_credito->setFechaEmision(Gral::getFechaActual());
        $vta_nota_credito->setFechaVencimiento(Gral::getFechaActual());
        if ($gral_mes) {
            $vta_nota_credito->setGralMesId($gral_mes->getId());
        }
        $vta_nota_credito->setAnio(date('Y'));
        $vta_nota_credito->setNotaPublica($txa_nota_publica);
        $vta_nota_credito->setObservacion($observacion);
        $vta_nota_credito->setEstado(1);
        $vta_nota_credito->save();

        // --------------------------------------------------------------------
        // se setea el codigo de la nota de credito
        // --------------------------------------------------------------------
        $vta_nota_credito->setCodigo(self::PREFIJO_NOTA_CREDITO . str_pad($vta_nota_credito->getId(), 8, 0, STR_PAD_LEFT));
        $vta_nota_credito->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial de la nota de credito
        // --------------------------------------------------------------------
        $vta_nota_credito_estado = $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_GENERADO, $observacion);

        // --------------------------------------------------------------------
        // se agregan los items a la nota de credito
        // --------------------------------------------------------------------
        if (!empty($vta_nota_credito->getId())) {

            foreach ($txt_descripcions as $key => $txt_descripcion) {

                $importe_unitario = $txt_importe_unitarios[$key];
                $importe_unitario = Gral::getImporteDesdePriceFormatToDB($importe_unitario);

                // Cargo el detalle de la NC
                $vta_nota_credito_item = new VtaNotaCreditoItem();

                $vta_nota_credito_item->setDescripcion($txt_descripcions[$key]);
                $vta_nota_credito_item->setVtaNotaCreditoId($vta_nota_credito->getId());
                $vta_nota_credito_item->setGralTipoIvaId($cmb_gral_tipo_iva_ids[$key]);
                $vta_nota_credito_item->setVtaNotaCreditoConceptoId($cmb_vta_nota_credito_concepto_ids[$key]);
                $vta_nota_credito_item->setPercepcionIibbAplica($cmb_aplica_percepcion_iibbs[$key]);

                //$vta_nota_credito_item->setCantidad($txt_cantidads[$key]);
                $vta_nota_credito_item->setCantidad(1);
                $vta_nota_credito_item->setImporteUnitario($importe_unitario);
                $vta_nota_credito_item->setCodigo('');
                $vta_nota_credito_item->setObservacion('');
                $vta_nota_credito_item->setEstado(1);

                $vta_nota_credito_item->save();
            }
        }

        // --------------------------------------------------------------------
        // se vincula el cliente a la NC
        // --------------------------------------------------------------------        
        $vta_nota_credito->setCliClienteId($cli_cliente->getId());
        $vta_nota_credito->setRazonSocial($cli_cliente->getRazonSocial());
        $vta_nota_credito->setDomicilioLegal($cli_cliente->getDomicilioLegal());
        $vta_nota_credito->setCuit($cli_cliente->getCuit());
        $vta_nota_credito->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
        $vta_nota_credito->setGralTipoPersoneriaId($cli_cliente->getGralTipoPersoneriaId());
        $vta_nota_credito->setPersonaDescripcion($cli_cliente->getDescripcion());
        if ($gral_tipo_documento_cuit) {
            $vta_nota_credito->setGralTipoDocumentoId($gral_tipo_documento_cuit->getId());
        }
        $vta_nota_credito->setGralTipoDocumentoId($cli_cliente->getGralTipoDocumentoId());
        $vta_nota_credito->setPersonaDocumento($cli_cliente->getCuit());
        $vta_nota_credito->setPersonaEmail($cli_cliente->getEmail());

        // --------------------------------------------------------------------
        // se determina la condicion de iva de la NC
        // --------------------------------------------------------------------
        $gral_condicion_iva = self::getDeterminacionGralCondicionIva($cli_cliente_id);
        $vta_nota_credito->setGralCondicionIvaId($gral_condicion_iva->getId());

        // --------------------------------------------------------------------
        // se determina el tipo de NC
        // --------------------------------------------------------------------
        $vta_tipo_nota_credito = self::getDeterminacionTipoNotaCredito($cli_cliente_id);
        $vta_nota_credito->setVtaTipoNotaCreditoId($vta_tipo_nota_credito->getId());
        $vta_nota_credito->save();

        // --------------------------------------------------------------------
        // se vinculan tributos a la ND
        // --------------------------------------------------------------------
        $importe_subtotal_neto_gravado = $vta_nota_credito->getVtaNotaCreditoSubtotalParaPercepcionIIBB();
        $vta_nota_credito->setAgregarTributos($importe_subtotal_neto_gravado, $chk_tributo_omitir_minimo);

        // ---------------------------------------------------------------------
        // se generan vinculos con comprobantes afectados
        // ---------------------------------------------------------------------
        $vta_nota_credito->setImputarVtaComprobante($recalcular_estado = false, $vta_nota_debito_ids, $vta_factura_ids);

        // --------------------------------------------------------------------
        // se autoriza NC
        // --------------------------------------------------------------------
        if ($vta_punto_venta->getSolicitaCae()) {

            // --------------------------------------------------------------------
            // se inicializan registros ws fe para solicitud en afip
            // --------------------------------------------------------------------
            //$ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitudNotaCreditoItem($vta_nota_credito->getId());

            //if (!$ws_fe_ope_solicitud->setEnviarWsFeOpeSolicitud()) {
                //echo 'Error al enviar factura electronica. ';
            //}
            
            // --------------------------------------------------------------------
            // se autogenera el numero de comprobante, pero sin autorizacion
            // --------------------------------------------------------------------
            $vta_nota_credito->setAutogenerarNumeroComprobante($asignar_cae = false);
            
            // -------------------------------------------------------------------------
            // Se genera DE e intenta autorizar
            // -------------------------------------------------------------------------
            $eku_de = $vta_nota_credito->setAutorizarDE_SIFEN();
            
        } else {
            // --------------------------------------------------------------------
            // se registra el estado pendiente de la nc al no solicitar CAE
            // --------------------------------------------------------------------
            $vta_nota_credito_estado = $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_PENDIENTE, $observacion);
            
            // --------------------------------------------------------------------
            // se autogenera el numero de comprobante
            // --------------------------------------------------------------------
            $vta_nota_credito->setAutogenerarNumeroComprobante();
        }

        // ---------------------------------------------------------------------
        // se fuerza la recarga del objeto para no perder cae y nro de comprobante
        // ---------------------------------------------------------------------
        $vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito->getId());

        // ---------------------------------------------------------------------
        // se generan vinculos con comprobantes afectados (forzado post autorizacion)
        // ---------------------------------------------------------------------
        $vta_nota_credito->setImputarVtaComprobante($recalcular_estado = true, $vta_nota_debito_ids, $vta_factura_ids);

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_nota_credito->setActualizarResumenComprobante();

        return $vta_nota_credito;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 20/02/2018 09:00 hs.
     * Metodo que genera una nota de credito.
     * @return Obj VtaNotaCredito
     */
    static function setInicializarVtaNotaCreditoDesdeFactura($vta_factura, $vta_factura_vta_orden_venta_ids, $vta_factura_vta_orden_venta_cantidads, $observacion = '', $afectar_stock = 0, $pan_panol_id = 0) {

        // se determina el origen del comprobante
        $vta_tipo_origen_nota_credito = VtaTipoOrigenNotaCredito::getOxCodigo(VtaTipoOrigenNotaCredito::ORIGEN_ANULACION_FACTURA);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));

        $cli_cliente = $vta_factura->getCliCliente();

        $vta_nota_credito = new VtaNotaCredito();
        $vta_nota_credito->setVtaTipoOrigenNotaCreditoId($vta_tipo_origen_nota_credito->getId());

        if ($vta_factura) {
            $vta_punto_venta = $vta_factura->getVtaPuntoVenta();
            $gral_sucursal = $vta_factura->getGralSucursal();
            
            // se toman valores de la factura que da origen a la nc
            $vta_nota_credito->setGralCondicionIvaId($vta_factura->getGralCondicionIvaId());
            $vta_nota_credito->setGralTipoPersoneriaId($vta_factura->getGralTipoPersoneriaId());
            $vta_nota_credito->setGralActividadId($vta_factura->getGralActividadId());
            $vta_nota_credito->setGralEscenarioId($vta_factura->getGralEscenarioId());
            $vta_nota_credito->setGralFpFormaPagoId($vta_factura->getGralFpFormaPagoId());
            $vta_nota_credito->setVtaPreventistaId($vta_factura->getVtaPreventistaId());
            $vta_nota_credito->setGralEmpresaId($vta_factura->getGralEmpresaId());
            $vta_nota_credito->setVtaPuntoVentaId($vta_factura->getVtaPuntoVentaId());

            $vta_nota_credito->setPersonaDescripcion($vta_factura->getPersonaDescripcion());
            $vta_nota_credito->setGralTipoDocumentoId($vta_factura->getGralTipoDocumentoId());
            $vta_nota_credito->setPersonaDocumento($vta_factura->getPersonaDocumento());
            $vta_nota_credito->setPersonaEmail($vta_factura->getPersonaEmail());

            $vta_nota_credito->setRazonSocial($vta_factura->getRazonSocial());
            $vta_nota_credito->setDomicilioLegal($vta_factura->getDomicilioLegal());
            $vta_nota_credito->setCuit($vta_factura->getCuit());

            $vta_nota_credito->setNumeroSucursal(str_pad($gral_sucursal->getNumero(), DbConfig::VARS_CANTIDAD_NRO_SUCURSAL, 0, STR_PAD_LEFT));
            $vta_nota_credito->setNumeroPuntoVenta(str_pad($vta_punto_venta->getNumero(), DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA_SIMPLE, 0, STR_PAD_LEFT));
        }

        $vta_nota_credito->setCliClienteId($cli_cliente->getId());

        // --------------------------------------------------------------------
        // se determina el tipo de NC
        // --------------------------------------------------------------------
        $vta_tipo_nota_credito = self::getDeterminacionTipoNotaCredito($cli_cliente->getId());
        $vta_nota_credito->setVtaTipoNotaCreditoId($vta_tipo_nota_credito->getId());

        $vta_nota_credito->setFechaEmision(Gral::getFechaActual());
        $vta_nota_credito->setFechaVencimiento(Gral::getFechaActual());
        if ($gral_mes) {
            $vta_nota_credito->setGralMesId($gral_mes->getId());
        }
        $vta_nota_credito->setAnio(date('Y'));
        $vta_nota_credito->setObservacion($observacion);
        $vta_nota_credito->setEstado(1);
        $vta_nota_credito->save();

        // --------------------------------------------------------------------
        // se setea el codigo de la nota de credito
        // --------------------------------------------------------------------
        $vta_nota_credito->setCodigo(self::PREFIJO_NOTA_CREDITO . str_pad($vta_nota_credito->getId(), 8, 0, STR_PAD_LEFT));
        $vta_nota_credito->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial de la nota de credito
        // --------------------------------------------------------------------
        $vta_nota_credito_estado = $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_GENERADO, $observacion);

        // --------------------------------------------------------------------
        // se agregan los items a la NC
        // --------------------------------------------------------------------
        if (!empty($vta_nota_credito->getId())) {
            foreach ($vta_factura_vta_orden_venta_ids as $vta_factura_vta_orden_venta_id) {

                $vta_factura_vta_orden_venta = VtaFacturaVtaOrdenVenta::getOxId($vta_factura_vta_orden_venta_id);
                $vta_factura = $vta_factura_vta_orden_venta->getVtaFactura();

                $ins_insumo = $vta_factura_vta_orden_venta->getInsInsumo();
                $ins_unidad_medida_id = $vta_factura_vta_orden_venta->getInsUnidadMedidaId();
                $cantidad_a_debitar = $vta_factura_vta_orden_venta_cantidads[$vta_factura_vta_orden_venta->getId()];

                // Cargo el detalle de la NC
                $vta_nota_credito_vta_factura_vta_orden_venta = new VtaNotaCreditoVtaFacturaVtaOrdenVenta();

                $vta_nota_credito_vta_factura_vta_orden_venta->setDescripcion($ins_insumo->getDescripcion());
                $vta_nota_credito_vta_factura_vta_orden_venta->setVtaNotaCreditoId($vta_nota_credito->getId());
                $vta_nota_credito_vta_factura_vta_orden_venta->setVtaFacturaVtaOrdenVentaId($vta_factura_vta_orden_venta_id);
                $vta_nota_credito_vta_factura_vta_orden_venta->setInsInsumoId($vta_factura_vta_orden_venta->getInsInsumoId());
                $vta_nota_credito_vta_factura_vta_orden_venta->setInsUnidadMedidaId($ins_unidad_medida_id);
                $vta_nota_credito_vta_factura_vta_orden_venta->setCantidad($cantidad_a_debitar);
                $vta_nota_credito_vta_factura_vta_orden_venta->setImporteUnitario($vta_factura_vta_orden_venta->getImporteUnitario());
                $vta_nota_credito_vta_factura_vta_orden_venta->setCodigo('');
                $vta_nota_credito_vta_factura_vta_orden_venta->setObservacion('');
                $vta_nota_credito_vta_factura_vta_orden_venta->setEstado(1);
                $vta_nota_credito_vta_factura_vta_orden_venta->setGralTipoIvaId($vta_factura_vta_orden_venta->getGralTipoIvaId());

                $vta_nota_credito_vta_factura_vta_orden_venta->save();

                $vta_factura_vta_orden_venta_importe_iva = $vta_factura_vta_orden_venta->getImporteIva($cantidad_a_debitar);
                $vta_nota_credito_importe_iva += $vta_factura_vta_orden_venta_importe_iva;

                // -------------------------------------------------------------
                // se afecta el stock de los insumos seleccionados si asi se dispuso
                // -------------------------------------------------------------
                if ($afectar_stock) {
                    // solo si el insumo requiere control stock
                    if ($ins_insumo->getControlStock()) {
                        // -------------------------------------------------------------
                        // se registra pedido para control y actualizacion de stock por devolucion
                        // -------------------------------------------------------------
                        $ins_stock_tipo_movimiento_codigo = InsStockTipoMovimiento::TIPO_MOV_REINGRESO;

                        $pdi_pedido = PdiPedido::setPdiPedidoPorDevolucionDeInsumoEnNC(
                                        $ins_insumo->getId(), $panol_origen = $pan_panol_id, $panol_destino = $pan_panol_id, $cantidad_a_debitar, $observacion = 'Reingreso por devolucion con ' . $vta_nota_credito->getCodigo() . ' de Cliente ' . $cli_cliente->getDescripcion(), $ins_stock_tipo_movimiento_codigo
                        );
                        // ---------------------------------------------------------------------
                    }
                    
                    // ---------------------------------------------------------------------
                    // si el insumo esta compuesto por otros, debemos afectar el stock de su composicion
                    // ---------------------------------------------------------------------
                    $ins_insumo_composicions = $ins_insumo->getInsInsumoComposicions(null, null, true);
                    foreach($ins_insumo_composicions as $ins_insumo_composicion)
                    {
                        $ins_insumo_hijo = $ins_insumo_composicion->getInsInsumoComposicionObj();
                        if ($ins_insumo_hijo->getControlStock())
                        {
                            $cantidad_composicion = $ins_insumo_composicion->getCantidad() * $cantidad_a_debitar;

                            // -------------------------------------------------------------
                            // se registra pedido para control y actualizacion de stock de la composicion
                            // -------------------------------------------------------------
                            $ins_stock_tipo_movimiento_codigo = InsStockTipoMovimiento::TIPO_MOV_REINGRESO;

                            $pdi_pedido = PdiPedido::setPdiPedidoPorDevolucionDeInsumoEnNC(
                                            $ins_insumo_hijo->getId(), $panol_origen = $pan_panol_id, $panol_destino = $pan_panol_id, $cantidad_composicion, $observacion = 'Reingreso por devolucion de '.$ins_insumo->getDescripcion().' (COMBO) con ' . $vta_nota_credito->getCodigo().' de Cliente '.$cli_cliente->getDescripcion(), $ins_stock_tipo_movimiento_codigo
                            );
                        }
                    }
                }
            }
        }

        // --------------------------------------------------------------------
        // se vinculan tributos a la nota de credito (vta_nota_credito_vta_factura_vta_tributo)
        // --------------------------------------------------------------------
        $vta_nota_credito_importe_imponible = $vta_nota_credito->getVtaNotaCreditoSubtotal();
        $vta_factura_vta_tributos = $vta_factura->getVtaFacturaVtaTributos();

        foreach ($vta_factura_vta_tributos as $vta_factura_vta_tributo) {

            $alicuota_decimal = $vta_factura_vta_tributo->getAlicuotaDecimal();
            $vta_nota_credito_importe_tributo = round($vta_nota_credito_importe_imponible * $alicuota_decimal, 2);

            $vta_nota_credito_vta_factura_vta_tributo = new VtaNotaCreditoVtaFacturaVtaTributo();

            $vta_nota_credito_vta_factura_vta_tributo->setVtaNotaCreditoId($vta_nota_credito->getId());
            $vta_nota_credito_vta_factura_vta_tributo->setVtaFacturaVtaTributoId($vta_factura_vta_tributo->getId());
            $vta_nota_credito_vta_factura_vta_tributo->setImporteImponible($vta_nota_credito_importe_imponible);
            $vta_nota_credito_vta_factura_vta_tributo->setImporteTributo($vta_nota_credito_importe_tributo);
            $vta_nota_credito_vta_factura_vta_tributo->setAlicuotaPorcentual($vta_factura_vta_tributo->getAlicuotaPorcentual());
            $vta_nota_credito_vta_factura_vta_tributo->setAlicuotaDecimal($vta_factura_vta_tributo->getAlicuotaDecimal());
            $vta_nota_credito_vta_factura_vta_tributo->setEstado(1);

            $vta_nota_credito_vta_factura_vta_tributo->save();
        }

        // --------------------------------------------------------------------
        // se vinculan la nota de credito a la factura
        // --------------------------------------------------------------------
        $vta_factura_importe_disponible = $vta_factura->getSaldoImputable();

        $vta_nota_credito_importe_a_imputar = $vta_nota_credito_importe_imponible + $vta_nota_credito_importe_iva + $vta_nota_credito_importe_tributo;

        // Genero la relacion
        $vta_factura_vta_nota_credito = new VtaFacturaVtaNotaCredito();

        $vta_factura_vta_nota_credito->setVtaNotaCreditoId($vta_nota_credito->getId());
        $vta_factura_vta_nota_credito->setVtaFacturaId($vta_factura->getId());
        $vta_factura_vta_nota_credito->setEstado(1);

        // Monto de la nota_debito mayor o igual al del Recibo
        //**********************************************************************
        // Buscar solucion a la comparacion. 
        // Por error de decimales carga mal los estados.
        //**********************************************************************

        if ((int) (round($vta_nota_credito_importe_a_imputar, 2) * 100) < (int) (round($vta_factura_importe_disponible, 2) * 100)) {

            $vta_factura_vta_nota_credito->setImporteAfectado($vta_nota_credito_importe_a_imputar);

            // Cambio el estado del Recibo
            $vta_factura_tipo_estado = $vta_factura->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_ANULADO_PARCIAL, '');
        } else {
            $vta_factura_vta_nota_credito->setImporteAfectado($vta_factura_importe_disponible);

            // Cambio el estado del Recibo
            $vta_factura_tipo_estado = $vta_factura->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_ANULADO, '');
        }
        $vta_nota_credito_importe_a_imputar -= $vta_factura_importe_disponible;
        $vta_factura_vta_nota_credito->save();


        // --------------------------------------------------------------------
        // se autoriza NC
        // --------------------------------------------------------------------
        if ($vta_punto_venta->getSolicitaCae()) {

            // --------------------------------------------------------------------
            // se inicializan registros ws fe para solicitud en afip
            // --------------------------------------------------------------------
            $vta_nota_credito_id = $vta_nota_credito->getId();
            //$ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitudNotaCredito($vta_nota_credito_id);

            //if (!$ws_fe_ope_solicitud->setEnviarWsFeOpeSolicitud()) {
                //echo 'Error al enviar factura electronica. ';
            //}
            
            // --------------------------------------------------------------------
            // se autogenera el numero de comprobante, pero sin autorizacion
            // --------------------------------------------------------------------
            $vta_nota_credito->setAutogenerarNumeroComprobante($asignar_cae = false);
            
            // -------------------------------------------------------------------------
            // Se genera DE e intenta autorizar
            // -------------------------------------------------------------------------
            $eku_de = $vta_nota_credito->setAutorizarDE_SIFEN();
            
        } else {
            // --------------------------------------------------------------------
            // se registra el estado pendiente de la nc al no solicitar CAE
            // --------------------------------------------------------------------
            $vta_nota_credito_estado = $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_PENDIENTE, $observacion);
            
            // --------------------------------------------------------------------
            // se autogenera el numero de comprobante
            // --------------------------------------------------------------------
            $vta_nota_credito->setAutogenerarNumeroComprobante();
        }

        $vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);

        // ----------------------------------------------------------------------
        // Cambio el estado de la ND
        // ----------------------------------------------------------------------
        if ((int) ($vta_nota_credito_importe_a_imputar * 100) > 0) {
            $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_IMPUTADO_PARCIAL, '');
        } else {
            $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_IMPUTADO, '');
        }

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_nota_credito->setActualizarResumenComprobante();

        return $vta_nota_credito;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 09/08/2018 11:04 hs.
     * Metodo que genera una nota de credito a partir de la anulacion de una factura item
     * @return Obj VtaNotaCredito
     */
    static function setInicializarVtaNotaCreditoDesdeFacturaItem($vta_factura, $observacion = '') {

        // se determina el origen del comprobante
        $vta_tipo_origen_nota_credito = VtaTipoOrigenNotaCredito::getOxCodigo(VtaTipoOrigenNotaCredito::ORIGEN_ANULACION_FACTURA);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));

        $cli_cliente = $vta_factura->getCliCliente();

        $vta_nota_credito = new VtaNotaCredito();
        $vta_nota_credito->setVtaTipoOrigenNotaCreditoId($vta_tipo_origen_nota_credito->getId());

        if ($vta_factura) {
            $vta_punto_venta = $vta_factura->getVtaPuntoVenta();
            $gral_sucursal = $vta_factura->getGralSucursal();
            
            // se toman valores de la factura que da origen a la nc
            $vta_nota_credito->setGralCondicionIvaId($vta_factura->getGralCondicionIvaId());
            $vta_nota_credito->setGralTipoPersoneriaId($vta_factura->getGralTipoPersoneriaId());
            $vta_nota_credito->setGralActividadId($vta_factura->getGralActividadId());
            $vta_nota_credito->setGralEscenarioId($vta_factura->getGralEscenarioId());
            $vta_nota_credito->setGralFpFormaPagoId($vta_factura->getGralFpFormaPagoId());
            $vta_nota_credito->setVtaPreventistaId($vta_factura->getVtaPreventistaId());
            $vta_nota_credito->setGralEmpresaId($vta_factura->getGralEmpresaId());
            $vta_nota_credito->setVtaPuntoVentaId($vta_factura->getVtaPuntoVentaId());

            $vta_nota_credito->setPersonaDescripcion($vta_factura->getPersonaDescripcion());
            $vta_nota_credito->setGralTipoDocumentoId($vta_factura->getGralTipoDocumentoId());
            $vta_nota_credito->setPersonaDocumento($vta_factura->getPersonaDocumento());
            $vta_nota_credito->setPersonaEmail($vta_factura->getPersonaEmail());

            $vta_nota_credito->setRazonSocial($vta_factura->getRazonSocial());
            $vta_nota_credito->setDomicilioLegal($vta_factura->getDomicilioLegal());
            $vta_nota_credito->setCuit($vta_factura->getCuit());

            $vta_nota_credito->setNumeroSucursal(str_pad($gral_sucursal->getNumero(), DbConfig::VARS_CANTIDAD_NRO_SUCURSAL, 0, STR_PAD_LEFT));
            $vta_nota_credito->setNumeroPuntoVenta(str_pad($vta_punto_venta->getNumero(), DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA_SIMPLE, 0, STR_PAD_LEFT));
        }
        $vta_nota_credito->setCliClienteId($cli_cliente->getId());

        // --------------------------------------------------------------------
        // se determina el tipo de NC
        // --------------------------------------------------------------------
        $vta_tipo_nota_credito = self::getDeterminacionTipoNotaCredito($cli_cliente->getId());
        $vta_nota_credito->setVtaTipoNotaCreditoId($vta_tipo_nota_credito->getId());

        $vta_nota_credito->setFechaEmision(Gral::getFechaActual());
        $vta_nota_credito->setFechaVencimiento(Gral::getFechaActual());
        if ($gral_mes) {
            $vta_nota_credito->setGralMesId($gral_mes->getId());
        }
        $vta_nota_credito->setAnio(date('Y'));
        $vta_nota_credito->setObservacion($observacion);
        $vta_nota_credito->setEstado(1);
        $vta_nota_credito->save();

        // --------------------------------------------------------------------
        // se setea el codigo de la nota de credito
        // --------------------------------------------------------------------
        $vta_nota_credito->setCodigo(self::PREFIJO_NOTA_CREDITO . str_pad($vta_nota_credito->getId(), 8, 0, STR_PAD_LEFT));
        $vta_nota_credito->save();

        // --------------------------------------------------------------------
        // se agregan los items a la NC
        // --------------------------------------------------------------------
        $vta_factura_items = $vta_factura->getVtaFacturaItems(null, null, true);
        $vta_factura_vta_tributos = $vta_factura->getVtaFacturaVtaTributos(null, null, true);

        $vta_nota_credito_concepto = VtaNotaCreditoConcepto::getOxCodigo(VtaNotaCreditoConcepto::TIPO_DEVOLUCION);

        // --------------------------------------------------------------------
        // Copio los items de ND a NC
        // --------------------------------------------------------------------
        foreach ($vta_factura_items as $vta_factura_item) {

            $vta_nota_credito_item = new VtaNotaCreditoItem();
            $vta_nota_credito_item->setDescripcion($vta_factura_item->getDescripcion());
            $vta_nota_credito_item->setVtaNotaCreditoId($vta_nota_credito->getId());
            $vta_nota_credito_item->setGralTipoIvaId($vta_factura_item->getGralTipoIvaId());
            $vta_nota_credito_item->setImporteUnitario($vta_factura_item->getImporteUnitario());
            $vta_nota_credito_item->setCantidad($vta_factura_item->getCantidad());
            $vta_nota_credito_item->setCodigo('');
            $vta_nota_credito_item->setObservacion('');
            $vta_nota_credito_item->setEstado(1);

            if ($vta_nota_credito_concepto) {
                $vta_nota_credito_item->setVtaNotaCreditoConceptoId($vta_nota_credito_concepto->getId());
            }

            $vta_nota_credito_item->save();
        }

        // --------------------------------------------------------------------
        // se vinculan tributos a la nota de credito
        // --------------------------------------------------------------------
        foreach ($vta_factura_vta_tributos as $vta_factura_vta_tributo) {

            $vta_nota_credito_vta_tributo = new VtaNotaCreditoVtaTributo();

            $vta_nota_credito_vta_tributo->setDescripcion($vta_factura_vta_tributo->getDescripcion());
            $vta_nota_credito_vta_tributo->setVtaNotaCreditoId($vta_nota_credito->getId());
            $vta_nota_credito_vta_tributo->setVtaTributoId($vta_factura_vta_tributo->getVtaTributoId());
            $vta_nota_credito_vta_tributo->setImporteImponible($vta_factura_vta_tributo->getImporteImponible());
            $vta_nota_credito_vta_tributo->setImporteTributo($vta_factura_vta_tributo->getImporteTributo());
            $vta_nota_credito_vta_tributo->setAlicuotaPorcentual($vta_factura_vta_tributo->getAlicuotaPorcentual());
            $vta_nota_credito_vta_tributo->setAlicuotaDecimal($vta_factura_vta_tributo->getAlicuotaDecimal());
            $vta_nota_credito_vta_tributo->setCodigo('');
            $vta_nota_credito_vta_tributo->setObservacion('');
            $vta_nota_credito_vta_tributo->setEstado(1);

            $vta_nota_credito_vta_tributo->save();
        }

        // --------------------------------------------------------------------
        // se vinculan la factura a la nota de credito con los importes
        // --------------------------------------------------------------------        
        $vta_nota_credito_importe_imponible = $vta_nota_credito->getVtaNotaCreditoSubtotal();
        $vta_nota_credito_importe_iva = $vta_nota_credito->getVtaNotaCreditoIva();
        $vta_nota_credito_importe_tributo = $vta_nota_credito->getVtaNotaCreditoTributo();

        $vta_nota_credito_importe_a_imputar = $vta_nota_credito_importe_imponible + $vta_nota_credito_importe_iva + $vta_nota_credito_importe_tributo;
        // Genero la relacion
        $vta_factura_vta_nota_credito = new VtaFacturaVtaNotaCredito();

        $vta_factura_vta_nota_credito->setVtaFacturaId($vta_factura->getId());
        $vta_factura_vta_nota_credito->setVtaNotaCreditoId($vta_nota_credito->getId());
        $vta_factura_vta_nota_credito->setEstado(1);

        $vta_factura_vta_nota_credito->setImporteAfectado($vta_nota_credito_importe_a_imputar);
        $vta_factura_vta_nota_credito->save();

        // --------------------------------------------------------------------
        // se registra el estado de la nota de debito
        // --------------------------------------------------------------------
        $vta_factura_estado = $vta_factura->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_ANULADO, '');

        // --------------------------------------------------------------------
        // se registra el estado inicial de la nota de credito
        // --------------------------------------------------------------------
        $vta_nota_credito_estado = $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_GENERADO, $observacion);

        // --------------------------------------------------------------------
        // se autoriza NC
        // --------------------------------------------------------------------
        if ($vta_punto_venta->getSolicitaCae()) {
            // --------------------------------------------------------------------
            // se inicializan registros ws fe para solicitud en afip
            // --------------------------------------------------------------------
            $vta_nota_credito_id = $vta_nota_credito->getId();
            //$ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitudNotaCreditoItem($vta_nota_credito_id);

            //if (!$ws_fe_ope_solicitud->setEnviarWsFeOpeSolicitud()) {
                //echo 'Error al enviar factura electronica. ';
            //}
            
            // --------------------------------------------------------------------
            // se autogenera el numero de comprobante, pero sin autorizacion
            // --------------------------------------------------------------------
            $vta_nota_credito->setAutogenerarNumeroComprobante($asignar_cae = false);
            
            // -------------------------------------------------------------------------
            // Se genera DE e intenta autorizar
            // -------------------------------------------------------------------------
            $eku_de = $vta_nota_credito->setAutorizarDE_SIFEN();
            
        } else {
            // --------------------------------------------------------------------
            // se registra el estado pendiente de la nc al no solicitar CAE
            // --------------------------------------------------------------------
            $vta_nota_credito_estado = $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_PENDIENTE, $observacion);
            
            // --------------------------------------------------------------------
            // se autogenera el numero de comprobante
            // --------------------------------------------------------------------
            $vta_nota_credito->setAutogenerarNumeroComprobante();
        }
        $vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);

        // ----------------------------------------------------------------------
        // Cambio el estado de la NC
        // ----------------------------------------------------------------------
        $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_IMPUTADO, '');

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_nota_credito->setActualizarResumenComprobante();

        return $vta_nota_credito;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 12/06/2018 09:00 hs.
     * Metodo que genera una nota de credito.
     * @return Obj VtaNotaCredito
     */
    static function setInicializarVtaNotaCreditoDesdeNotaDebito($vta_nota_debito, $observacion = '') {

        // se determina el origen del comprobante
        $vta_tipo_origen_nota_credito = VtaTipoOrigenNotaCredito::getOxCodigo(VtaTipoOrigenNotaCredito::ORIGEN_ANULACION_ND);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));

        $cli_cliente = $vta_nota_debito->getCliCliente();

        $vta_nota_credito = new VtaNotaCredito();
        $vta_nota_credito->setVtaTipoOrigenNotaCreditoId($vta_tipo_origen_nota_credito->getId());

        if ($vta_nota_debito) {
            $vta_punto_venta = $vta_nota_debito->getVtaPuntoVenta();
            $gral_sucursal = $vta_nota_debito->getGralSucursal();
            
            // se toman valores de la nd que da origen a la nc
            $vta_nota_credito->setGralCondicionIvaId($vta_nota_debito->getGralCondicionIvaId());
            $vta_nota_credito->setGralTipoPersoneriaId($vta_nota_debito->getGralTipoPersoneriaId());
            $vta_nota_credito->setGralActividadId($vta_nota_debito->getGralActividadId());
            $vta_nota_credito->setGralEscenarioId($vta_nota_debito->getGralEscenarioId());
            $vta_nota_credito->setGralFpFormaPagoId($vta_nota_debito->getGralFpFormaPagoId());
            $vta_nota_credito->setVtaPreventistaId($vta_nota_debito->getVtaPreventistaId());
            $vta_nota_credito->setGralEmpresaId($vta_nota_debito->getGralEmpresaId());
            $vta_nota_credito->setVtaPuntoVentaId($vta_nota_debito->getVtaPuntoVentaId());

            $vta_nota_credito->setPersonaDescripcion($vta_nota_debito->getPersonaDescripcion());
            $vta_nota_credito->setGralTipoDocumentoId($vta_nota_debito->getGralTipoDocumentoId());
            $vta_nota_credito->setPersonaDocumento($vta_nota_debito->getPersonaDocumento());
            $vta_nota_credito->setPersonaEmail($vta_nota_debito->getPersonaEmail());

            $vta_nota_credito->setRazonSocial($vta_nota_debito->getRazonSocial());
            $vta_nota_credito->setDomicilioLegal($vta_nota_debito->getDomicilioLegal());
            $vta_nota_credito->setCuit($vta_nota_debito->getCuit());

            $vta_nota_credito->setNumeroSucursal(str_pad($gral_sucursal->getNumero(), DbConfig::VARS_CANTIDAD_NRO_SUCURSAL, 0, STR_PAD_LEFT));
            $vta_nota_credito->setNumeroPuntoVenta(str_pad($vta_punto_venta->getNumero(), DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA_SIMPLE, 0, STR_PAD_LEFT));
        }
        $vta_nota_credito->setCliClienteId($cli_cliente->getId());

        // --------------------------------------------------------------------
        // se determina el tipo de NC
        // --------------------------------------------------------------------
        $vta_tipo_nota_credito = self::getDeterminacionTipoNotaCredito($cli_cliente->getId());
        $vta_nota_credito->setVtaTipoNotaCreditoId($vta_tipo_nota_credito->getId());

        $vta_nota_credito->setFechaEmision(Gral::getFechaActual());
        $vta_nota_credito->setFechaVencimiento(Gral::getFechaActual());
        if ($gral_mes) {
            $vta_nota_credito->setGralMesId($gral_mes->getId());
        }
        $vta_nota_credito->setAnio(date('Y'));
        $vta_nota_credito->setObservacion($observacion);
        $vta_nota_credito->setEstado(1);
        $vta_nota_credito->save();

        // --------------------------------------------------------------------
        // se setea el codigo de la nota de credito
        // --------------------------------------------------------------------
        $vta_nota_credito->setCodigo(self::PREFIJO_NOTA_CREDITO . str_pad($vta_nota_credito->getId(), 8, 0, STR_PAD_LEFT));
        $vta_nota_credito->save();

        // --------------------------------------------------------------------
        // se agregan los items a la NC
        // --------------------------------------------------------------------
        $vta_nota_debito_items = $vta_nota_debito->getVtaNotaDebitoItems(null, null, true);
        $vta_nota_debito_vta_tributos = $vta_nota_debito->getVtaNotaDebitoVtaTributos(null, null, true);

        $vta_nota_credito_concepto = VtaNotaCreditoConcepto::getOxCodigo(VtaNotaCreditoConcepto::TIPO_OTRO);

        // --------------------------------------------------------------------
        // Copio los items de ND a NC
        // --------------------------------------------------------------------
        foreach ($vta_nota_debito_items as $vta_nota_debito_item) {

            $vta_nota_credito_item = new VtaNotaCreditoItem();
            $vta_nota_credito_item->setDescripcion($vta_nota_debito_item->getDescripcion());
            $vta_nota_credito_item->setVtaNotaCreditoId($vta_nota_credito->getId());
            $vta_nota_credito_item->setGralTipoIvaId($vta_nota_debito_item->getGralTipoIvaId());
            $vta_nota_credito_item->setImporteUnitario($vta_nota_debito_item->getImporteUnitario());
            $vta_nota_credito_item->setCantidad($vta_nota_debito_item->getCantidad());
            $vta_nota_credito_item->setPercepcionIibbAplica($vta_nota_debito_item->getPercepcionIibbAplica());
            $vta_nota_credito_item->setCodigo('');
            $vta_nota_credito_item->setObservacion('');
            $vta_nota_credito_item->setEstado(1);

            if ($vta_nota_credito_concepto) {
                $vta_nota_credito_item->setVtaNotaCreditoConceptoId($vta_nota_credito_concepto->getId());
            }

            $vta_nota_credito_item->save();
        }

        // --------------------------------------------------------------------
        // se vinculan tributos a la nota de credito
        // --------------------------------------------------------------------
        foreach ($vta_nota_debito_vta_tributos as $vta_nota_debito_vta_tributo) {

            $vta_nota_credito_vta_tributo = new VtaNotaCreditoVtaTributo();

            $vta_nota_credito_vta_tributo->setDescripcion($vta_nota_debito_vta_tributo->getDescripcion());
            $vta_nota_credito_vta_tributo->setVtaNotaCreditoId($vta_nota_credito->getId());
            $vta_nota_credito_vta_tributo->setVtaTributoId($vta_nota_debito_vta_tributo->getVtaTributoId());
            $vta_nota_credito_vta_tributo->setImporteImponible($vta_nota_debito_vta_tributo->getImporteImponible());
            $vta_nota_credito_vta_tributo->setImporteTributo($vta_nota_debito_vta_tributo->getImporteTributo());
            $vta_nota_credito_vta_tributo->setAlicuotaPorcentual($vta_nota_debito_vta_tributo->getAlicuotaPorcentual());
            $vta_nota_credito_vta_tributo->setAlicuotaDecimal($vta_nota_debito_vta_tributo->getAlicuotaDecimal());
            $vta_nota_credito_vta_tributo->setCodigo('');
            $vta_nota_credito_vta_tributo->setObservacion('');
            $vta_nota_credito_vta_tributo->setEstado(1);

            $vta_nota_credito_vta_tributo->save();
        }

        // --------------------------------------------------------------------
        // se vinculan la nota de debito a la nota de credito con los importes
        // --------------------------------------------------------------------        
        $vta_nota_credito_importe_imponible = $vta_nota_credito->getVtaNotaCreditoSubtotal();
        $vta_nota_credito_importe_iva = $vta_nota_credito->getVtaNotaCreditoIva();
        $vta_nota_credito_importe_tributo = $vta_nota_credito->getVtaNotaCreditoTributo();

        $vta_nota_credito_importe_a_imputar = $vta_nota_credito_importe_imponible + $vta_nota_credito_importe_iva + $vta_nota_credito_importe_tributo;
        // Genero la relacion
        $vta_nota_debito_vta_nota_credito = new VtaNotaDebitoVtaNotaCredito();

        $vta_nota_debito_vta_nota_credito->setVtaNotaDebitoId($vta_nota_debito->getId());
        $vta_nota_debito_vta_nota_credito->setVtaNotaCreditoId($vta_nota_credito->getId());
        $vta_nota_debito_vta_nota_credito->setEstado(1);

        $vta_nota_debito_vta_nota_credito->setImporteAfectado($vta_nota_credito_importe_a_imputar);
        $vta_nota_debito_vta_nota_credito->save();

        // --------------------------------------------------------------------
        // se registra el estado de la nota de debito
        // --------------------------------------------------------------------
        $vta_nota_debito_estado = $vta_nota_debito->setVtaNotaDebitoEstado(VtaNotaDebitoTipoEstado::TIPO_ANULADO, '');

        // --------------------------------------------------------------------
        // se registra el estado inicial de la nota de credito
        // --------------------------------------------------------------------
        $vta_nota_credito_estado = $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_GENERADO, $observacion);

        // --------------------------------------------------------------------
        // se autoriza NC
        // --------------------------------------------------------------------
        if ($vta_punto_venta->getSolicitaCae()) {

            // --------------------------------------------------------------------
            // se inicializan registros ws fe para solicitud en afip
            // --------------------------------------------------------------------
            //$vta_nota_credito_id = $vta_nota_credito->getId();
            //$ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitudNotaCreditoItem($vta_nota_credito_id);

            //if (!$ws_fe_ope_solicitud->setEnviarWsFeOpeSolicitud()) {
                //echo 'Error al enviar factura electronica. ';
            //}
            
            // --------------------------------------------------------------------
            // se autogenera el numero de comprobante, pero sin autorizacion
            // --------------------------------------------------------------------
            $vta_nota_credito->setAutogenerarNumeroComprobante($asignar_cae = false);
            
        } else {
            // --------------------------------------------------------------------
            // se registra el estado pendiente de la nc al no solicitar CAE
            // --------------------------------------------------------------------
            $vta_nota_credito_estado = $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_PENDIENTE, $observacion);
            
            // --------------------------------------------------------------------
            // se autogenera el numero de comprobante
            // --------------------------------------------------------------------
            $vta_nota_credito->setAutogenerarNumeroComprobante();
        }

        $vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);

        // ---------------------------------------------------------------------
        // Cambio el estado de la NC
        // ---------------------------------------------------------------------
        $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_IMPUTADO, '');

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_nota_credito->setActualizarResumenComprobante();

        return $vta_nota_credito;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 31/07/2018 09:00 hs.
     * Metodo que genera una nota de credito desde descuento financiero.
     * @return Obj VtaNotaCredito
     */
    static function setInicializarVtaNotaCreditoDesdeDescuentoFinanciero($vta_factura, $descuento_financiero, $txa_nota_publica, $observacion = '') {

        // se determina el origen del comprobante
        $vta_tipo_origen_nota_credito = VtaTipoOrigenNotaCredito::getOxCodigo(VtaTipoOrigenNotaCredito::ORIGEN_DESCUENTO_FINANCIERO);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));

        $cli_cliente = $vta_factura->getCliCliente();

        $vta_nota_credito = new VtaNotaCredito();
        $vta_nota_credito->setVtaTipoOrigenNotaCreditoId($vta_tipo_origen_nota_credito->getId());

        if ($vta_factura) {
            $vta_punto_venta = $vta_factura->getVtaPuntoVenta();
            $gral_sucursal = $vta_factura->getGralSucursal();
            
            // se toman valores de la factura que da origen a la nc
            $vta_nota_credito->setGralCondicionIvaId($vta_factura->getGralCondicionIvaId());
            $vta_nota_credito->setGralTipoPersoneriaId($vta_factura->getGralTipoPersoneriaId());
            $vta_nota_credito->setGralActividadId($vta_factura->getGralActividadId());
            $vta_nota_credito->setGralEscenarioId($vta_factura->getGralEscenarioId());
            $vta_nota_credito->setGralFpFormaPagoId($vta_factura->getGralFpFormaPagoId());
            $vta_nota_credito->setVtaPreventistaId($vta_factura->getVtaPreventistaId());
            $vta_nota_credito->setGralEmpresaId($vta_factura->getGralEmpresaId());
            $vta_nota_credito->setVtaPuntoVentaId($vta_factura->getVtaPuntoVentaId());

            $vta_nota_credito->setPersonaDescripcion($vta_factura->getPersonaDescripcion());
            $vta_nota_credito->setGralTipoDocumentoId($vta_factura->getGralTipoDocumentoId());
            $vta_nota_credito->setPersonaDocumento($vta_factura->getPersonaDocumento());
            $vta_nota_credito->setPersonaEmail($vta_factura->getPersonaEmail());

            $vta_nota_credito->setRazonSocial($vta_factura->getRazonSocial());
            $vta_nota_credito->setDomicilioLegal($vta_factura->getDomicilioLegal());
            $vta_nota_credito->setCuit($vta_factura->getCuit());

            $vta_nota_credito->setNumeroSucursal(str_pad($gral_sucursal->getNumero(), DbConfig::VARS_CANTIDAD_NRO_SUCURSAL, 0, STR_PAD_LEFT));
            $vta_nota_credito->setNumeroPuntoVenta(str_pad($vta_punto_venta->getNumero(), DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA_SIMPLE, 0, STR_PAD_LEFT));
        }

        $vta_nota_credito->setCliClienteId($cli_cliente->getId());

        // --------------------------------------------------------------------
        // se determina el tipo de NC
        // --------------------------------------------------------------------
        $vta_tipo_nota_credito = self::getDeterminacionTipoNotaCredito($cli_cliente->getId());
        $vta_nota_credito->setVtaTipoNotaCreditoId($vta_tipo_nota_credito->getId());

        $vta_nota_credito->setFechaEmision(Gral::getFechaActual());
        $vta_nota_credito->setFechaVencimiento(Gral::getFechaActual());
        if ($gral_mes) {
            $vta_nota_credito->setGralMesId($gral_mes->getId());
        }
        $vta_nota_credito->setAnio(date('Y'));
        $vta_nota_credito->setNotaPublica($txa_nota_publica);
        $vta_nota_credito->setObservacion($observacion);
        $vta_nota_credito->setEstado(1);
        $vta_nota_credito->save();

        // --------------------------------------------------------------------
        // se setea el codigo de la NC
        // --------------------------------------------------------------------
        $vta_nota_credito->setCodigo(self::PREFIJO_NOTA_CREDITO . str_pad($vta_nota_credito->getId(), 8, 0, STR_PAD_LEFT));
        $vta_nota_credito->save();

        // --------------------------------------------------------------------
        // Creo el item de la NC
        // --------------------------------------------------------------------
        $arr_ivas = $vta_factura->getArrIvaFacturaFull();
        $vta_nota_credito_concepto = VtaNotaCreditoConcepto::getOxCodigo(VtaNotaCreditoConcepto::TIPO_DESCUENTO_FINANCIERO);

        foreach ($arr_ivas as $arr_iva) {
            $descuento_financiero_decimal = $descuento_financiero / 100;
            $base_imponible = $arr_iva['base_imponible'];
            $importe_unitario = $base_imponible * $descuento_financiero_decimal;
            $gral_tipo_iva_id = $arr_iva['id'];

            $vta_nota_credito_item = new VtaNotaCreditoItem();
            $vta_nota_credito_item->setVtaNotaCreditoId($vta_nota_credito->getId());
            $vta_nota_credito_item->setGralTipoIvaId($gral_tipo_iva_id);

            $vta_nota_credito_item->setDescripcion('DF ' . $descuento_financiero . '% por Pago en termino de Factura ' . $vta_factura->getNumeroFacturaCompleto());
            $vta_nota_credito_item->setCantidad(1);
            $vta_nota_credito_item->setImporteUnitario($importe_unitario);
            $vta_nota_credito_item->setCodigo('');
            $vta_nota_credito_item->setObservacion('');
            $vta_nota_credito_item->setEstado(1);
            $vta_nota_credito_item->setPercepcionIibbAplica(1);

            if ($vta_nota_credito_concepto) {
                $vta_nota_credito_item->setVtaNotaCreditoConceptoId($vta_nota_credito_concepto->getId());
            }

            $vta_nota_credito_item->save();
        }

        // --------------------------------------------------------------------
        // se vinculan tributos a la nota de credito (vta_nota_credito_vta_factura_vta_tributo)
        // --------------------------------------------------------------------
        $vta_nota_credito_importe_imponible = $vta_nota_credito->getVtaNotaCreditoSubtotalParaPercepcionIIBB();
        $vta_factura_vta_tributos = $vta_factura->getVtaFacturaVtaTributos();

        foreach ($vta_factura_vta_tributos as $vta_factura_vta_tributo) {

            $alicuota_decimal = $vta_factura_vta_tributo->getAlicuotaDecimal();
            $vta_nota_credito_importe_tributo = round($vta_nota_credito_importe_imponible * $alicuota_decimal, 2);

            $vta_nota_credito_vta_factura_vta_tributo = new VtaNotaCreditoVtaFacturaVtaTributo();

            $vta_nota_credito_vta_factura_vta_tributo->setVtaNotaCreditoId($vta_nota_credito->getId());
            $vta_nota_credito_vta_factura_vta_tributo->setVtaFacturaVtaTributoId($vta_factura_vta_tributo->getId());
            $vta_nota_credito_vta_factura_vta_tributo->setImporteImponible($vta_nota_credito_importe_imponible);
            $vta_nota_credito_vta_factura_vta_tributo->setImporteTributo($vta_nota_credito_importe_tributo);
            $vta_nota_credito_vta_factura_vta_tributo->setAlicuotaPorcentual($vta_factura_vta_tributo->getAlicuotaPorcentual());
            $vta_nota_credito_vta_factura_vta_tributo->setAlicuotaDecimal($vta_factura_vta_tributo->getAlicuotaDecimal());
            $vta_nota_credito_vta_factura_vta_tributo->setEstado(1);

            $vta_nota_credito_vta_factura_vta_tributo->save();
        }


        // --------------------------------------------------------------------
        // se vinculan la nota de debito a la nota de credito con los importes
        // --------------------------------------------------------------------
        $vta_nota_credito_importe_imponible = $vta_nota_credito->getVtaNotaCreditoSubtotal();
        $vta_nota_credito_importe_iva = $vta_nota_credito->getVtaNotaCreditoIva();
        $vta_nota_credito_importe_tributo = $vta_nota_credito->getVtaNotaCreditoTributo();

        $vta_nota_credito_importe_a_imputar = $vta_nota_credito_importe_imponible + $vta_nota_credito_importe_iva + $vta_nota_credito_importe_tributo;
        // Genero la relacion
        $vta_factura_vta_nota_credito = new VtaFacturaVtaNotaCredito();

        $vta_factura_vta_nota_credito->setVtaFacturaId($vta_factura->getId());
        $vta_factura_vta_nota_credito->setVtaNotaCreditoId($vta_nota_credito->getId());
        $vta_factura_vta_nota_credito->setEstado(1);

        $vta_factura_vta_nota_credito->setImporteAfectado($vta_nota_credito_importe_a_imputar);
        $vta_factura_vta_nota_credito->save();

        // --------------------------------------------------------------------
        // se registra el estado de la factura
        // --------------------------------------------------------------------
        $vta_factura_estado = $vta_factura->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_SALDADO_PARCIAL, '');

        // --------------------------------------------------------------------
        // se registra el estado inicial de la nota de credito
        // --------------------------------------------------------------------
        $vta_nota_credito_estado = $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_GENERADO, $observacion);

        // --------------------------------------------------------------------
        // se autoriza NC
        // --------------------------------------------------------------------
        if ($vta_punto_venta->getSolicitaCae()) {
            // --------------------------------------------------------------------
            // se inicializan registros ws fe para solicitud en afip
            // --------------------------------------------------------------------
            $vta_nota_credito_id = $vta_nota_credito->getId();
            //$ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitudNotaCreditoItem($vta_nota_credito_id);

            //if (!$ws_fe_ope_solicitud->setEnviarWsFeOpeSolicitud()) {
                //echo 'Error al enviar factura electronica. ';
            //}
            
            // --------------------------------------------------------------------
            // se autogenera el numero de comprobante, pero sin autorizacion
            // --------------------------------------------------------------------
            $vta_nota_credito->setAutogenerarNumeroComprobante($asignar_cae = false);
            
        } else {
            // --------------------------------------------------------------------
            // se registra el estado pendiente de la nc al no solicitar CAE
            // --------------------------------------------------------------------
            $vta_nota_credito_estado = $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_PENDIENTE, $observacion);
            
            // --------------------------------------------------------------------
            // se autogenera el numero de comprobante
            // --------------------------------------------------------------------
            $vta_nota_credito->setAutogenerarNumeroComprobante();
        }

        $vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);

        // ----------------------------------------------------------------------
        // Cambio el estado de la NC
        // ----------------------------------------------------------------------
        $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_IMPUTADO, '');


        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_nota_credito->setActualizarResumenComprobante();

        return $vta_nota_credito;
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 18/08/2023 13:05 hs.
     * Metodo que modifica los datos basicos del comprobante
     * @return Obj VtaNotaCredito
     */
    public function setModificarDatosComprobante($vta_tipo_nota_credito_id, $cli_cliente_id, $txt_fecha, $cmb_gral_mes_id, $cmb_anio, $txt_nro_timbrado, $txt_nro_punto_venta, $txt_nro_comprobante, $txt_fecha_vencimiento, $txa_observacion) {
        $cli_cliente = PrvProveedor::getOxId($cli_cliente_id);

        $this->setVtaTipoNotaCreditoId($vta_tipo_nota_credito_id);
        $this->setCliClienteId($cli_cliente_id);
        $this->setFechaEmision($txt_fecha);
        $this->setGralMesId($cmb_gral_mes_id);
        $this->setAnio($cmb_anio);
        $this->setNumeroTimbrado($txt_nro_timbrado);        
        $this->setNumeroPuntoVenta($txt_nro_punto_venta);
        $this->setNumeroNotaCredito($txt_nro_comprobante);
        $this->setNumeroNotaCreditoCompleto($this->getNumeroNotaCreditoCompletoFormateado());
        $this->setFechaVencimiento($txt_fecha_vencimiento);
        $this->setObservacion($txa_observacion);

        if ($cli_cliente) {
            $this->setRazonSocial($cli_cliente->getRazonSocial());
            $this->setDomicilioLegal($cli_cliente->getDomicilioLegal());
            $this->setCuit($cli_cliente->getCuit());
            $this->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
            $this->setGralTipoPersoneriaId($cli_cliente->getGralTipoPersoneriaId());

            $this->setPersonaDescripcion($cli_cliente->getRazonSocial());
        }
        
        $this->save();
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 15/09/2018
     */
    public function getWsFeParamTipoComprobante() {
        $vta_tipo_nota_credito = $this->getVtaTipoNotaCredito();
        $ws_fe_param_tipo_comprobante = $vta_tipo_nota_credito->getWsFeParamTipoComprobanteXVtaTipoNotaCreditoWsFeParamTipoComprobante();
        return $ws_fe_param_tipo_comprobante;
    }

    /**
     * Metodo que retorna el numero completo del comprobante
     * @return string
     */
    public function getNumeroNotaCreditoCompletoFormateado() {
        $gral_sucursal = $this->getVtaPuntoVenta()->getGralSucursalXGralSucursalVtaPuntoVenta();

        $numero_sucursal = str_pad($gral_sucursal->getNumero(), DbConfig::VARS_CANTIDAD_NRO_SUCURSAL, 0, STR_PAD_LEFT);
        $numero_punto_venta = str_pad($this->getVtaPuntoVenta()->getNumero(), DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA_SIMPLE, 0, STR_PAD_LEFT);
        $numero_nota_credito = str_pad($this->getNumeroNotaCredito(), DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);

        $numero_nota_credito_completo = $numero_sucursal . '-' . $numero_punto_venta . '-' . $numero_nota_credito;
        return $numero_nota_credito_completo;
    }

    /**
     * Metodo que retorna el codigo numerico para el barcode de afip
     */
    public function getBarcodeAFIPParaComprobante() {
        $barcode = "";

        $gral_empresa = $this->getGralEmpresa();
        $ws_fe_param_tipo_comprobante = $this->getVtaTipoNotaCredito()->getWsFeParamTipoComprobanteXVtaTipoNotaCreditoWsFeParamTipoComprobante();

        $barcode .= str_replace("-", "", $gral_empresa->getCuit());
        $barcode .= str_pad($ws_fe_param_tipo_comprobante->getCodigoAfip(), 3, 0, STR_PAD_LEFT);
        $barcode .= str_pad($this->getNumeroPuntoVenta(), 5, 0, STR_PAD_LEFT);
        $barcode .= str_replace("-", "", $this->getCae());
        $barcode .= str_replace("-", "", $this->getFechaEmision());

        return $barcode;
    }

    /**
     * Metodo que retorna la fecha de vencimiento del CAE obtenida desde RESPUESTA AFIP
     * @return string
     */
    public function getCaeVencimiento() {
        $ws_fe_ope_solicitud_respuesta = WsFeOpeSolicitudRespuesta::getOxWsFeAfipCae($this->getCae());
        if ($ws_fe_ope_solicitud_respuesta) {
            $fecha_vencimiento_cae = $ws_fe_ope_solicitud_respuesta->getWsFeAfipCaeFechaVencimiento();

            $anio = substr($fecha_vencimiento_cae, 0, 4);
            $mes = substr($fecha_vencimiento_cae, 4, 2);
            $dia = substr($fecha_vencimiento_cae, 6, 2);

            $fecha_vencimiento_cae = $anio . '-' . $mes . '-' . $dia;
        }

        return $fecha_vencimiento_cae;
    }

    /**
     * Autor: Pablo Rosen.
     * Fecha: 15/05/2018 19:58 hs.
     * Metodo que registra un nuevo estado de la nota de credito.
     * @return Obj VtaNotaCreditoEstado
     */
    public function setVtaNotaCreditoEstado($codigo, $observacion = '') {
        $inicial = 1;
        $vta_nota_credito_estado = false;

        // se agrega el nuevo estado del factura
        $vta_nota_credito_tipo_estado = VtaNotaCreditoTipoEstado::getOxCodigo($codigo);

        if ($vta_nota_credito_tipo_estado) {
            foreach ($this->getVtaNotaCreditoEstados() as $vta_nota_credito_estado) {
                $vta_nota_credito_estado->setActual(0);
                $vta_nota_credito_estado->save();
                $inicial = 0;
            }

            $vta_nota_credito_estado = new VtaNotaCreditoEstado();
            $vta_nota_credito_estado->setVtaNotaCreditoId($this->getId());
            $vta_nota_credito_estado->setVtaNotaCreditoTipoEstadoId($vta_nota_credito_tipo_estado->getId());
            $vta_nota_credito_estado->setInicial($inicial);
            $vta_nota_credito_estado->setActual(1);
            $vta_nota_credito_estado->setObservacion($observacion);
            $vta_nota_credito_estado->save();

            // actualizamos el estado en vta_nota_credito      
            $this->setVtaNotaCreditoTipoEstadoId($vta_nota_credito_tipo_estado->getId());
            $this->save();
        }

        return $vta_nota_credito_estado;
    }

    /**
     * Registro de los movimientos contables de la operacion
     */
    public function setRegistrarContabilidad($cntb_periodo = false) {
        if ((int) $this->getCntbDiarioAsientoId() > 0) {
            return;
        }

        $vta_nota_credito_tipo_estado = $this->getVtaNotaCreditoTipoEstado();

        if ($vta_nota_credito_tipo_estado->getContabilizable()) {
            $cli_cliente = $this->getCliCliente();
            $gral_empresa = $this->getGralEmpresa();
            $cntb_ejercicio = CntbEjercicio::getCntbEjercicioActual($gral_empresa);
            $cntb_tipo_asiento = CntbTipoAsiento::getOxCodigo(CntbTipoAsiento::TIPO_OPERATIVO);
            $cntb_tipo_origen = CntbTipoOrigen::getOxCodigo(CntbTipoOrigen::TIPO_AUTOMATICO);
            $cntb_tipo_movimiento = CntbTipoMovimiento::getOxCodigo(CntbTipoMovimiento::TIPO_VENTAS);
            $descripcion = 'Asiento de VtaNotaCredito ' . $this->getId();

            $array_cuentas_debe = array();
            $array_cuentas_haber = array();

            $vta_tipo_origen_nota_credito = $this->getVtaTipoOrigenNotaCredito();
            $gral_actividad = $this->getGralActividad();
            $gral_tipo_documento = $this->getGralTipoDocumento();
            $gral_condicion_iva = $this->getGralCondicionIva();
            $gral_fp_forma_pago = $this->getGralFpFormaPago();
            $cntb_cuenta_venta_debe = $gral_fp_forma_pago->getCntbCuentaVentaObj();

            $importe_iva = $this->getVtaNotaCreditoIva();
            $importe_tributo = $this->getVtaNotaCreditoTributo();
            $importe_subtotal = $this->getVtaNotaCreditoSubtotal();
            $importe_total = $this->getVtaNotaCreditoTotal();

            $vta_nota_credito_vta_factura_vta_tributos = $this->getVtaNotaCreditoVtaFacturaVtaTributos(null, null, true);
            $vta_nota_credito_vta_tributos = $this->getVtaNotaCreditoVtaTributos(null, null, true);

            if ($vta_tipo_origen_nota_credito && $vta_tipo_origen_nota_credito->getCodigo() == VtaTipoOrigenNotaCredito::ORIGEN_DESCUENTO_FINANCIERO) {
                // -----------------------------------------------------------------
                // si nace desde una NC por DF
                // -----------------------------------------------------------------           
                // 
                // -----------------------------------------------------------------
                // DEBE
                // -----------------------------------------------------------------
                $array_cuentas_debe[] = array(
                    'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('55010101'), // DESCUENTOS OTORGADOS
                    'codigo_comprobante' => $txt_comprobante = '',
                    'importe' => $importe_subtotal,
                );

                if ($importe_iva > 0) {
                    $array_cuentas_debe[] = array(
                        'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('21030103'), // IVA DEBITO FISCAL 
                        'codigo_comprobante' => $txt_comprobante = '',
                        'importe' => $importe_iva,
                    );
                }

                if ($importe_tributo > 0) {
                    foreach ($vta_nota_credito_vta_factura_vta_tributos as $vta_nota_credito_vta_factura_vta_tributo) {
                        $vta_factura_vta_tributo = $vta_nota_credito_vta_factura_vta_tributo->getVtaFacturaVtaTributo();
                        $vta_tributo = $vta_factura_vta_tributo->getVtaTributo();
                        $importe_tributo_uno = $vta_nota_credito_vta_factura_vta_tributo->getImporteTributo();
                        $cntb_cuenta_tributo = $vta_tributo->getCntbCuenta();
                        if ($cntb_cuenta_tributo && $importe_tributo_uno > 0) {
                            $array_cuentas_debe[] = array(
                                //'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('53010118'), // INGRESOS BRUTOS 
                                'cntb_cuenta' => $cntb_cuenta_tributo,
                                'codigo_comprobante' => $txt_comprobante = '',
                                'importe' => $importe_tributo_uno,
                            );
                        }
                    }
                }

                // -----------------------------------------------------------------
                // HABER
                // -----------------------------------------------------------------
                $vta_factura_vinculada = $this->getVtaFacturaXVtaFacturaVtaNotaCredito();
                if ($vta_factura_vinculada) {
                    $gral_fp_forma_pago = $vta_factura_vinculada->getGralFpFormaPago();
                    $cntb_cuenta_venta_haber = $gral_fp_forma_pago->getCntbCuentaVentaObj();
                }
                if ($cntb_cuenta_venta_haber) {
                    $array_cuentas_haber[] = array(
                        'cntb_cuenta' => $cntb_cuenta_venta_haber,
                        'codigo_comprobante' => $txt_comprobante = '',
                        'importe' => $importe_total,
                    );
                } else {
                    $array_cuentas_haber[] = array(
                        'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('11010301'), // CUENTAS A COBRAR POR VENTAS
                        'codigo_comprobante' => $txt_comprobante = '',
                        'importe' => $importe_total,
                    );
                }
            } elseif ($vta_tipo_origen_nota_credito && $vta_tipo_origen_nota_credito->getCodigo() == VtaTipoOrigenNotaCredito::ORIGEN_ANULACION_FACTURA) {
                // -----------------------------------------------------------------
                // si nace desde una NC por ANULACION DE FACTURA
                // -----------------------------------------------------------------
                // 
                // -----------------------------------------------------------------
                // DEBE
                // -----------------------------------------------------------------
                $array_cuentas_debe[] = array(
                    'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('41010102'), // INGRESOS POR VENTA REPUESTOS ***** CUENTA DEVOLUCIONES?
                    'codigo_comprobante' => $txt_comprobante = '',
                    'importe' => $importe_subtotal,
                );

                if ($importe_iva > 0) {
                    $array_cuentas_debe[] = array(
                        'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('21030103'), // IVA DEBITO FISCAL 
                        'codigo_comprobante' => $txt_comprobante = '',
                        'importe' => $importe_iva,
                    );
                }

                if ($importe_tributo > 0) {
                    foreach ($vta_nota_credito_vta_factura_vta_tributos as $vta_nota_credito_vta_factura_vta_tributo) {
                        $vta_factura_vta_tributo = $vta_nota_credito_vta_factura_vta_tributo->getVtaFacturaVtaTributo();
                        $vta_tributo = $vta_factura_vta_tributo->getVtaTributo();
                        $importe_tributo_uno = $vta_nota_credito_vta_factura_vta_tributo->getImporteTributo();
                        $cntb_cuenta_tributo = $vta_tributo->getCntbCuenta();
                        if ($cntb_cuenta_tributo && $importe_tributo_uno > 0) {
                            $array_cuentas_debe[] = array(
                                //'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('53010118'), // INGRESOS BRUTOS 
                                'cntb_cuenta' => $cntb_cuenta_tributo,
                                'codigo_comprobante' => $txt_comprobante = '',
                                'importe' => $importe_tributo_uno,
                            );
                        }
                    }
                }

                // -----------------------------------------------------------------
                // HABER
                // -----------------------------------------------------------------
                $vta_factura_vinculada = $this->getVtaFacturaXVtaFacturaVtaNotaCredito();
                if ($vta_factura_vinculada) {
                    $gral_fp_forma_pago = $vta_factura_vinculada->getGralFpFormaPago();
                    $cntb_cuenta_venta_haber = $gral_fp_forma_pago->getCntbCuentaVentaObj();
                }
                if ($cntb_cuenta_venta_haber) {
                    $array_cuentas_haber[] = array(
                        'cntb_cuenta' => $cntb_cuenta_venta_haber,
                        'codigo_comprobante' => $txt_comprobante = '',
                        'importe' => $importe_total,
                    );
                } else {
                    $array_cuentas_haber[] = array(
                        'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('11010101'), // CAJA ADMINISTRACION
                        'codigo_comprobante' => $txt_comprobante = '',
                        'importe' => $importe_total,
                    );
                }
            } elseif ($vta_tipo_origen_nota_credito && $vta_tipo_origen_nota_credito->getCodigo() == VtaTipoOrigenNotaCredito::ORIGEN_ANULACION_ND) {
                // -----------------------------------------------------------------
                // si nace desde una NC por ANULACION DE ND
                // -----------------------------------------------------------------
                //            
                // -----------------------------------------------------------------
                // DEBE
                // -----------------------------------------------------------------
                $vta_nota_credito_items = $this->getVtaNotaCreditoItems();
                foreach ($vta_nota_credito_items as $vta_nota_credito_item) {
                    $importe_total_item = $vta_nota_credito_item->getImporteTotal();
                    $vta_nota_credito_concepto = $vta_nota_credito_item->getVtaNotaCreditoConcepto();
                    $cntb_cuenta_venta_debe = $vta_nota_credito_concepto->getCntbCuenta();

                    if ($cntb_cuenta_venta_debe && $importe_total_item > 0) {
                        $array_cuentas_debe[] = array(
                            'cntb_cuenta' => $cntb_cuenta_venta_debe,
                            'codigo_comprobante' => $txt_comprobante = '',
                            'importe' => $importe_total_item,
                        );
                    }
                }

                if ($importe_iva > 0) {
                    $array_cuentas_debe[] = array(
                        'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('21030103'), // IVA DEBITO FISCAL 
                        'codigo_comprobante' => $txt_comprobante = '',
                        'importe' => $importe_iva,
                    );
                }

                if ($importe_tributo > 0) {
                    foreach ($vta_nota_credito_vta_tributos as $vta_nota_credito_vta_tributo) {
                        $vta_tributo = $vta_nota_credito_vta_tributo->getVtaTributo();
                        $importe_tributo_uno = $vta_nota_credito_vta_tributo->getImporteTributo();
                        $cntb_cuenta_tributo = $vta_tributo->getCntbCuenta();
                        if ($cntb_cuenta_tributo && $importe_tributo_uno > 0) {
                            $array_cuentas_debe[] = array(
                                //'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('53010118'), // INGRESOS BRUTOS 
                                'cntb_cuenta' => $cntb_cuenta_tributo,
                                'codigo_comprobante' => $txt_comprobante = '',
                                'importe' => $importe_tributo_uno,
                            );
                        }
                    }
                }

                // -----------------------------------------------------------------
                // HABER
                // -----------------------------------------------------------------
                $vta_nota_debito_vinculada = $this->getVtaNotaDebitoXVtaNotaDebitoVtaNotaCredito();
                if ($vta_nota_debito_vinculada) {
                    $gral_fp_forma_pago = $vta_nota_debito_vinculada->getGralFpFormaPago();
                    $cntb_cuenta_venta_haber = $gral_fp_forma_pago->getCntbCuentaVentaObj();
                }
                if ($cntb_cuenta_venta_haber) {
                    $array_cuentas_haber[] = array(
                        'cntb_cuenta' => $cntb_cuenta_venta_haber,
                        'codigo_comprobante' => $txt_comprobante = '',
                        'importe' => $importe_total,
                    );
                } else {
                    $array_cuentas_haber[] = array(
                        'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('11010301'), // CUENTAS A COBRAR POR VENTAS
                        'codigo_comprobante' => $txt_comprobante = '',
                        'importe' => $importe_total,
                    );
                }
            } elseif ($vta_tipo_origen_nota_credito && $vta_tipo_origen_nota_credito->getCodigo() == VtaTipoOrigenNotaCredito::ORIGEN_ITEM) {
                // -----------------------------------------------------------------
                // si nace desde una NC por ITEM
                // -----------------------------------------------------------------
                //            
                // -----------------------------------------------------------------
                // DEBE
                // -----------------------------------------------------------------                
                $vta_nota_credito_items = $this->getVtaNotaCreditoItems();
                foreach ($vta_nota_credito_items as $vta_nota_credito_item) {
                    $importe_total_item = $vta_nota_credito_item->getImporteTotal();
                    $vta_nota_credito_concepto = $vta_nota_credito_item->getVtaNotaCreditoConcepto();
                    $cntb_cuenta_venta_debe = $vta_nota_credito_concepto->getCntbCuenta();

                    if ($cntb_cuenta_venta_debe && $importe_total_item > 0) {
                        $array_cuentas_debe[] = array(
                            'cntb_cuenta' => $cntb_cuenta_venta_debe,
                            'codigo_comprobante' => $txt_comprobante = '',
                            'importe' => $importe_total_item,
                        );
                    }
                }

                if ($importe_iva > 0) {
                    $array_cuentas_debe[] = array(
                        'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('21030103'), // IVA DEBITO FISCAL 
                        'codigo_comprobante' => $txt_comprobante = '',
                        'importe' => $importe_iva,
                    );
                }

                if ($importe_tributo > 0) {
                    foreach ($vta_nota_credito_vta_tributos as $vta_nota_credito_vta_tributo) {
                        $vta_tributo = $vta_nota_credito_vta_tributo->getVtaTributo();
                        $importe_tributo_uno = $vta_nota_credito_vta_tributo->getImporteTributo();
                        $cntb_cuenta_tributo = $vta_tributo->getCntbCuenta();
                        if ($cntb_cuenta_tributo && $importe_tributo_uno > 0) {
                            $array_cuentas_debe[] = array(
                                //'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('53010118'), // INGRESOS BRUTOS 
                                'cntb_cuenta' => $cntb_cuenta_tributo,
                                'codigo_comprobante' => $txt_comprobante = '',
                                'importe' => $importe_tributo_uno,
                            );
                        }
                    }
                }

                // -----------------------------------------------------------------
                // HABER
                // -----------------------------------------------------------------
                $vta_factura_vinculada = $this->getVtaFacturaXVtaFacturaVtaNotaCredito();
                if ($vta_factura_vinculada) {
                    $gral_fp_forma_pago = $vta_factura_vinculada->getGralFpFormaPago();
                    $cntb_cuenta_venta_haber = $gral_fp_forma_pago->getCntbCuentaVentaObj();
                }

                $vta_nota_debito_vinculada = $this->getVtaNotaDebitoXVtaNotaDebitoVtaNotaCredito();
                if ($vta_nota_debito_vinculada) {
                    $gral_fp_forma_pago = $vta_nota_debito_vinculada->getGralFpFormaPago();
                    $cntb_cuenta_venta_haber = $gral_fp_forma_pago->getCntbCuentaVentaObj();
                }

                if ($cntb_cuenta_venta_haber) {
                    $array_cuentas_haber[] = array(
                        'cntb_cuenta' => $cntb_cuenta_venta_haber,
                        'codigo_comprobante' => $txt_comprobante = '',
                        'importe' => $importe_total,
                    );
                } else {
                    $array_cuentas_haber[] = array(
                        'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('11010301'), // CUENTAS A COBRAR POR VENTAS
                        'codigo_comprobante' => $txt_comprobante = '',
                        'importe' => $importe_total,
                    );
                }
            }

            //Gral::prr($array_cuentas_debe);
            //Gral::prr($array_cuentas_haber);

            if ($cntb_ejercicio) {

                $cntb_diario_asiento = false;
                $fecha = $this->getFechaEmision();

                $arr_estado_control = $cntb_ejercicio->setRegistrarAsiento($cntb_diario_asiento, $fecha, $cntb_tipo_asiento, $gral_actividad, $cntb_tipo_origen, $cntb_tipo_movimiento, $descripcion, $array_cuentas_debe, $array_cuentas_haber, $cntb_periodo);
                //Gral::prr($arr_estado_control);
                //--------------------------------------------------------------
                // se vincula el comprobante con el asiento contable
                //--------------------------------------------------------------
                if ($arr_estado_control['error'] == 0) {
                    $cntb_diario_asiento = $arr_estado_control['cntb_diario_asiento'];

                    $this->setVincularAsientoContable($cntb_diario_asiento);
                } else {
                    //Gral::prr($arr_estado_control);            
                }

                return $arr_estado_control;
            }
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 16/08/2018 17:52h
     * Metodo que vincula el comprobante con su correspondiente asiento contable
     * @param type $cntb_diario_asiento
     */
    public function setVincularAsientoContable($cntb_diario_asiento) {
        if ($cntb_diario_asiento) {
            $cntb_diario_asiento_vta_nota_credito = new CntbDiarioAsientoVtaNotaCredito();
            $cntb_diario_asiento_vta_nota_credito->setCntbDiarioAsientoId($cntb_diario_asiento->getId());
            $cntb_diario_asiento_vta_nota_credito->setVtaNotaCreditoId($this->getId());
            $cntb_diario_asiento_vta_nota_credito->save();

            $vta_tipo_nota_credito = $this->getVtaTipoNotaCredito();
            $vta_tipo_origen_nota_credito = $this->getVtaTipoOrigenNotaCredito();
            $gral_condicion_iva = $this->getGralCondicionIva();
            $gral_tipo_documento = $this->getGralTipoDocumento();

            // --------------------------------------------------------------------------
            // se determina vinculo del comprobante
            // --------------------------------------------------------------------------
            $descripcion_vinculo = '';
            $vta_factura = $this->getVtaFacturaXVtaFacturaVtaNotaCredito(null, null, true);
            $vta_nota_debito = $this->getVtaNotaDebitoXVtaNotaDebitoVtaNotaCredito(null, null, true);
            if ($vta_factura) {
                $descripcion_vinculo = ' - Vinculado a ' . $vta_factura->getTipoComprobanteSiglas() . ' ' . $vta_factura->getNumeroComprobanteCompleto();
            } elseif ($vta_nota_debito) {
                $descripcion_vinculo = ' - Vinculado a ' . $vta_nota_debito->getTipoComprobanteSiglas() . ' ' . $vta_nota_debito->getNumeroComprobanteCompleto();
            }

            // --------------------------------------------------------------------------
            // si fueron items de factura anulados por una NC
            // --------------------------------------------------------------------------
            $vta_factura_vta_orden_ventas = $this->getVtaFacturaVtaOrdenVentasXVtaNotaCreditoVtaFacturaVtaOrdenVenta();
            if (count($vta_factura_vta_orden_ventas) > 0) {
                $cantidad_items = count($vta_factura_vta_orden_ventas) . " Items de Facturas";
            }

            // --------------------------------------------------------------------------
            // si fueron items
            // --------------------------------------------------------------------------
            $vta_nota_credito_items = $this->getVtaNotaCreditoItems();
            if (count($vta_nota_credito_items) > 0) {
                $cantidad_items = count($vta_nota_credito_items) . " Items";
            }

            $descripcion = $vta_tipo_nota_credito->getDescripcion() . " " . $this->getNumeroComprobanteCompleto() . ' - ' . $vta_tipo_origen_nota_credito->getDescripcion() . $descripcion_vinculo;
            $observacion = "Emitida a " . $gral_condicion_iva->getDescripcion() . " " . $this->getPersonaDescripcion() . " " . $gral_tipo_documento->getDescripcion() . " " . $this->getPersonaDocumento() . " por " . $cantidad_items;

            // --------------------------------------------------------------------------
            // se actualiza la descripcion y observacion del asiento
            // --------------------------------------------------------------------------
            $cntb_diario_asiento->setDescripcion($descripcion);
            $cntb_diario_asiento->setObservacion($observacion);
            $cntb_diario_asiento->save();
        }
    }

    /**
     * Metodo que retorna el tipo de factura que tiene un cliente.
     * @param type $cli_cliente_id
     * @return type GralCondicionIva
     */
    static function getDeterminacionGralCondicionIva($cli_cliente_id) {
        $gral_condicion_iva = GralCondicionIva::getOxCodigo(GralCondicionIva::TIPO_CONSUMIDOR_FINAL);

        $cli_cliente = CliCliente::getOxId($cli_cliente_id);

        if ($cli_cliente) {
            $gral_condicion_iva = $cli_cliente->getGralCondicionIva();
        }
        return $gral_condicion_iva;
    }

    /**
     * Metodo que retorna el tipo de NC que tiene un cliente.
     * @param type $cli_cliente_id
     * @return type VtaTipoNotaCredito
     */
    static function getDeterminacionTipoNotaCredito($cli_cliente_id) {
        //$vta_tipo_nota_credito = VtaTipoNotaCredito::getOxCodigo(VtaTipoNotaCredito::TIPO_NOTA_CREDITO_B);
        $vta_tipo_nota_credito = VtaTipoNotaCredito::getOxCodigo(VtaTipoNotaCredito::TIPO_NOTA_CREDITO_A);

        $cli_cliente = CliCliente::getOxId($cli_cliente_id);

        if ($cli_cliente) {
            $gral_condicion_iva_id = $cli_cliente->getGralCondicionIvaId();

            $gral_condicion_iva_vta_tipo_nota_creditos = GralCondicionIvaVtaTipoNotaCredito::getOsxGralCondicionIvaId($gral_condicion_iva_id);
            foreach ($gral_condicion_iva_vta_tipo_nota_creditos as $gral_condicion_iva_vta_tipo_nota_credito) {
                $vta_tipo_nota_credito = $gral_condicion_iva_vta_tipo_nota_credito->getVtaTipoNotaCredito();
                return $vta_tipo_nota_credito;
            }
        }
        return $vta_tipo_nota_credito;
    }

    public function setAgregarTributos($subtotal_calculado, $omitir_minimo = false) {

        $arr_vta_tributos_vigentes = $this->getTributosAAplicar($subtotal_calculado, $omitir_minimo);

        // ----------------------------------------------------------------
        // se agrega cada tributo que afecta a la NC
        // ----------------------------------------------------------------
        if (count($arr_vta_tributos_vigentes) > 0) {
            foreach ($arr_vta_tributos_vigentes as $arr_vta_tributo_vigente) {

                //Gral::prr($arr_vta_tributo_vigente);
                $vta_tributo = $arr_vta_tributo_vigente['vta_tributo'];
                $vta_tributo_vigente_aplica = $arr_vta_tributo_vigente['aplica'];
                $vta_tributo_vigente_exento = $arr_vta_tributo_vigente['exento'];
                $vta_tributo_vigente_supera_minimo = $arr_vta_tributo_vigente['supera_minimo'];

                if ($vta_tributo_vigente_aplica && !$vta_tributo_vigente_exento && $vta_tributo_vigente_supera_minimo) {
                    $array = array(
                        array('campo' => 'vta_nota_credito_id', 'valor' => $this->getId()),
                        array('campo' => 'vta_tributo_id', 'valor' => $vta_tributo->getId()),
                    );
                    $vta_nota_credito_vta_tributo = VtaNotaCreditoVtaTributo::getOxArray($array);
                    if (!$vta_nota_credito_vta_tributo) {
                        $vta_nota_credito_vta_tributo = new VtaNotaCreditoVtaTributo();
                        $vta_nota_credito_vta_tributo->setVtaNotaCreditoId($this->getId());
                        $vta_nota_credito_vta_tributo->setVtaTributoId($vta_tributo->getId());
                    }

                    $importe_neto_gravado = $this->getVtaNotaCreditoSubtotalParaPercepcionIIBB();
                    $importe_tributo = $importe_neto_gravado * $vta_tributo->getAlicuotaDecimal();

                    $vta_nota_credito_vta_tributo->setImporteImponible($importe_neto_gravado);
                    $vta_nota_credito_vta_tributo->setImporteTributo($importe_tributo);
                    $vta_nota_credito_vta_tributo->setAlicuotaPorcentual($vta_tributo->getAlicuotaPorcentual());
                    $vta_nota_credito_vta_tributo->setAlicuotaDecimal($vta_tributo->getAlicuotaDecimal());
                    $vta_nota_credito_vta_tributo->setEstado(1);
                    $vta_nota_credito_vta_tributo->save();
                }
            }
        }
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 23/04/2018 11:00 hs.
     * Metodo que retorna los tributos a aplicar.
     * @return VtaTributos
     */
    public function getTributosAAplicar($subtotal_calculado, $omitir_minimo = false) {
        $arr_vta_tributos_vigentes = array();

        $vta_tributos = VtaTributo::getVtaTributos(null, null, true);

        foreach ($vta_tributos as $vta_tributo) {
            $vta_tributo_aplica = false;
            $vta_tributo_aplica = $vta_tributo->getVtaTributoAplica($this, $subtotal_calculado, $omitir_minimo);

            if ($vta_tributo_aplica) {
                $arr_vta_tributos_vigentes[] = $vta_tributo_aplica;
            }
        }
        return $arr_vta_tributos_vigentes;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que que retorna el importe del Iva de la nota de credito generada por una factura.
     * Modulo vta_comprobante_gestion.
     * @return Float
     */
    public function getVtaNotaCreditoIva() {
        // se suman los items de facturas anuladas
        $vta_nota_credito_vta_factura_vta_orden_ventas = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas(null, null, true);

        foreach ($vta_nota_credito_vta_factura_vta_orden_ventas as $vta_nota_credito_vta_factura_vta_orden_venta) {
            $gral_tipo_iva = $vta_nota_credito_vta_factura_vta_orden_venta->getGralTipoIva();
            $valor_iva_coeficiente = $gral_tipo_iva->getValorIva() / 100;

            //$importe_unitario = round($vta_nota_credito_vta_factura_vta_orden_venta->getImporteUnitario(), 2);
            $importe_unitario = $vta_nota_credito_vta_factura_vta_orden_venta->getImporteUnitario();
            $cantidad = $vta_nota_credito_vta_factura_vta_orden_venta->getCantidad();
            $iva += $importe_unitario * $cantidad * $valor_iva_coeficiente;
        }

        // se suman los items sueltos de la nc
        $vta_nota_credito_items = $this->getVtaNotaCreditoItems(null, null, true);

        foreach ($vta_nota_credito_items as $vta_nota_credito_item) {
            $gral_tipo_iva = $vta_nota_credito_item->getGralTipoIva();
            $valor_iva_coeficiente = $gral_tipo_iva->getValorIva() / 100;

            $importe_unitario = round($vta_nota_credito_item->getImporteUnitario(), 2);
            $cantidad = $vta_nota_credito_item->getCantidad();
            $iva += $importe_unitario * $cantidad * $valor_iva_coeficiente;
        }

        return round($iva, 2);
    }

    /**
     * Metodo que retorna el valor de los tributos de la nota_credito.
     * @return type float
     */
    public function getVtaNotaCreditoTributo() {
//        $vta_nota_credito_vta_tributos = $this->getVtaNotaCreditoVtaTributos(null, null, true);
//        $importe_total_tributo = 0;
//
//        foreach ($vta_nota_credito_vta_tributos as $vta_nota_credito_vta_tributo) {
//            $importe_total_tributo += $vta_nota_credito_vta_tributo->getImporteTributo();
//        }

        $importe_total_tributo = $this->getVtaNotaCreditoImporteTributo();
        return $importe_total_tributo;
    }

    /**
     * Metodo que retorna el subtotal de los items de la NC sin iva.
     * @return type float
     */
    public function getVtaNotaCreditoSubtotal($tipo_subtotal = false) {

        // ---------------------------------------------------------------------
        // se suman las NC por ov en facturas (items de facturas anuladas)
        // --------------------------------------------------------------------- 
        $c = new Criterio();
        if ($tipo_subtotal == VtaComprobante::TIPO_SUBTOTAL_GRAVADO) {
            $c->add(GralTipoIva::GEN_ATTR_GRAVADO, 1, Criterio::IGUAL);
        }
        if ($tipo_subtotal == VtaComprobante::TIPO_SUBTOTAL_NO_GRAVADO) {
            $c->add(GralTipoIva::GEN_ATTR_CODIGO, GralTipoIva::TIPO_NO_GRAVADO, Criterio::IGUAL);
        }
        if ($tipo_subtotal == VtaComprobante::TIPO_SUBTOTAL_EXENTO) {
            $c->add(GralTipoIva::GEN_ATTR_CODIGO, GralTipoIva::TIPO_EXENTO, Criterio::IGUAL);
        }
        $c->addTabla(VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_TABLA);
        $c->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, VtaNotaCreditoVtaFacturaVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID);
        $c->setCriterios();

        $vta_nota_credito_vta_factura_vta_orden_ventas = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas(null, $c, true);
        foreach ($vta_nota_credito_vta_factura_vta_orden_ventas as $vta_nota_credito_vta_factura_vta_orden_venta) {
            $importe_unitario = $vta_nota_credito_vta_factura_vta_orden_venta->getImporteUnitario();
            $cantidad = $vta_nota_credito_vta_factura_vta_orden_venta->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }

        // ---------------------------------------------------------------------
        // se suman los items sueltos de la NC
        // --------------------------------------------------------------------- 
        $c = new Criterio();
        if ($tipo_subtotal == VtaComprobante::TIPO_SUBTOTAL_GRAVADO) {
            $c->add(GralTipoIva::GEN_ATTR_GRAVADO, 1, Criterio::IGUAL);
        }
        if ($tipo_subtotal == VtaComprobante::TIPO_SUBTOTAL_NO_GRAVADO) {
            $c->add(GralTipoIva::GEN_ATTR_CODIGO, GralTipoIva::TIPO_NO_GRAVADO, Criterio::IGUAL);
        }
        if ($tipo_subtotal == VtaComprobante::TIPO_SUBTOTAL_EXENTO) {
            $c->add(GralTipoIva::GEN_ATTR_CODIGO, GralTipoIva::TIPO_EXENTO, Criterio::IGUAL);
        }
        $c->addTabla(VtaNotaCreditoItem::GEN_TABLA);
        $c->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, VtaNotaCreditoItem::GEN_ATTR_GRAL_TIPO_IVA_ID);
        $c->setCriterios();

        $vta_nota_credito_items = $this->getVtaNotaCreditoItems(null, $c, true);
        foreach ($vta_nota_credito_items as $vta_nota_credito_item) {
            $importe_unitario = $vta_nota_credito_item->getImporteUnitario();
            $cantidad = $vta_nota_credito_item->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }

        return $subtotal;
    }

    /**
     * Metodo que retorna el subtotal de los items de la ND sin iva.
     * @return type float
     */
    public function getVtaNotaCreditoSubtotalParaPercepcionIIBB() {

        // se suman los items de facturas anuladas
        $vta_nota_credito_vta_factura_vta_orden_ventas = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas(null, null, true);

        foreach ($vta_nota_credito_vta_factura_vta_orden_ventas as $vta_nota_credito_vta_factura_vta_orden_venta) {
            $gral_tipo_iva = $vta_nota_credito_vta_factura_vta_orden_venta->getGralTipoIva();

            if ($gral_tipo_iva && $gral_tipo_iva->getGravado()) { // solo se agrega al array de IVA las alicuotas que estan gravadas
                $importe_unitario = $vta_nota_credito_vta_factura_vta_orden_venta->getImporteUnitario();
                $cantidad = $vta_nota_credito_vta_factura_vta_orden_venta->getCantidad();
                $subtotal += $importe_unitario * $cantidad;
            }
        }

        // se suman los items sueltos de la nc
        $vta_nota_credito_items = $this->getVtaNotaCreditoItems(null, null, true);

        foreach ($vta_nota_credito_items as $vta_nota_credito_item) {
            $gral_tipo_iva = $vta_nota_credito_item->getGralTipoIva();

            if ($gral_tipo_iva && $gral_tipo_iva->getGravado()) { // solo se agrega al array de IVA las alicuotas que estan gravadas
                if ($vta_nota_credito_item->getPercepcionIibbAplica()) {
                    $importe_unitario = $vta_nota_credito_item->getImporteUnitario();
                    $cantidad = $vta_nota_credito_item->getCantidad();
                    $subtotal += $importe_unitario * $cantidad;
                }
            }
        }

        return $subtotal;
    }

    public function getVtaNotaCreditoSubtotalParaComprobante() {
        $vta_tipo_nota_credito = $this->getVtaTipoNotaCredito();

        switch ($vta_tipo_nota_credito->getCodigo()) {
            case VtaTipoNotaCredito::TIPO_NOTA_CREDITO_A:
                $importe = $this->getVtaNotaCreditoSubtotal();
                break;
            case VtaTipoNotaCredito::TIPO_NOTA_CREDITO_B:
                $importe = $this->getVtaNotaCreditoSubtotal() + $this->getVtaNotaCreditoIva();
                break;
            default:
                $importe = $this->getVtaNotaCreditoSubtotal();
        }

        return $importe;
    }

    /**
     * Metodo que retorna el total de la nc con iva.
     * @return type float
     */
    public function getVtaNotaCreditoTotal() {
        $total = $this->getVtaNotaCreditoSubtotal() + $this->getVtaNotaCreditoIva() + $this->getVtaNotaCreditoTributo();
        return $total;
    }

    /**
     * @creado_por Pablo Rosen
     * creado 15/08/2018
     */
    public function getArrIvaNotaCreditoFull() {
        $arr_iva = array();

        // se toman los datos desde OV
        $vta_nota_credito_vta_factura_vta_orden_ventas = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas(null, null, true);

        foreach ($vta_nota_credito_vta_factura_vta_orden_ventas as $vta_nota_credito_vta_factura_vta_orden_venta) {
            $gral_tipo_iva = $vta_nota_credito_vta_factura_vta_orden_venta->getGralTipoIva();

            $importe_unitario = $vta_nota_credito_vta_factura_vta_orden_venta->getImporteUnitario();
            $iva = ($gral_tipo_iva->getValorIva() / 100) * $importe_unitario * $vta_nota_credito_vta_factura_vta_orden_venta->getCantidad();

            $acu_importe_unitario[$gral_tipo_iva->getCodigo()] += $importe_unitario * $vta_nota_credito_vta_factura_vta_orden_venta->getCantidad();
            $acu_iva[$gral_tipo_iva->getCodigo()] += $iva;

            $arr_iva[$gral_tipo_iva->getCodigo()] = array(
                'id' => $vta_nota_credito_vta_factura_vta_orden_venta->getGralTipoIvaId(),
                'descripcion' => $gral_tipo_iva->getDescripcion(),
                'codigo' => $gral_tipo_iva->getCodigo(),
                'base_imponible' => $acu_importe_unitario[$gral_tipo_iva->getCodigo()],
                'importe_iva' => $acu_iva[$gral_tipo_iva->getCodigo()],
            );
        }

        // se toman los datos desde item
        $vta_nota_credito_items = $this->getVtaNotaCreditoItems(null, null, true);

        foreach ($vta_nota_credito_items as $vta_nota_credito_item) {
            $gral_tipo_iva = $vta_nota_credito_item->getGralTipoIva();

            $importe_unitario = $vta_nota_credito_item->getImporteUnitario();
            $iva = ($gral_tipo_iva->getValorIva() / 100) * $importe_unitario * $vta_nota_credito_item->getCantidad();

            $acu_importe_unitario[$gral_tipo_iva->getCodigo()] += $importe_unitario * $vta_nota_credito_item->getCantidad();
            $acu_iva[$gral_tipo_iva->getCodigo()] += $iva;

            $arr_iva[$gral_tipo_iva->getCodigo()] = array(
                'id' => $vta_nota_credito_item->getGralTipoIvaId(),
                'descripcion' => $gral_tipo_iva->getDescripcion(),
                'codigo' => $gral_tipo_iva->getCodigo(),
                'base_imponible' => $acu_importe_unitario[$gral_tipo_iva->getCodigo()],
                'importe_iva' => $acu_iva[$gral_tipo_iva->getCodigo()],
            );
        }
        return $arr_iva;
    }

    /**
     * @creado_por Pablo Rosen
     * creado 15/08/2018
     */
    public function getArrIvaNotaCreditoParaCitiFull() {
        $arr_iva = array();

        // se toman los datos desde OV
        $vta_nota_credito_vta_factura_vta_orden_ventas = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas(null, null, true);

        foreach ($vta_nota_credito_vta_factura_vta_orden_ventas as $vta_nota_credito_vta_factura_vta_orden_venta) {
            $gral_tipo_iva = $vta_nota_credito_vta_factura_vta_orden_venta->getGralTipoIva();

            if ($gral_tipo_iva && $gral_tipo_iva->getGravado()) { // solo se agrega al array de IVA las alicuotas que estan gravadas
                $importe_unitario = $vta_nota_credito_vta_factura_vta_orden_venta->getImporteUnitario();
                $iva = ($gral_tipo_iva->getValorIva() / 100) * $importe_unitario * $vta_nota_credito_vta_factura_vta_orden_venta->getCantidad();

                $acu_importe_unitario[$gral_tipo_iva->getCodigo()] += $importe_unitario * $vta_nota_credito_vta_factura_vta_orden_venta->getCantidad();
                $acu_iva[$gral_tipo_iva->getCodigo()] += $iva;

                $arr_iva[$gral_tipo_iva->getCodigo()] = array(
                    'id' => $vta_nota_credito_vta_factura_vta_orden_venta->getGralTipoIvaId(),
                    'descripcion' => $gral_tipo_iva->getDescripcion(),
                    'codigo' => $gral_tipo_iva->getCodigo(),
                    'base_imponible' => $acu_importe_unitario[$gral_tipo_iva->getCodigo()],
                    'importe_iva' => $acu_iva[$gral_tipo_iva->getCodigo()],
                );
            }
        }

        // se toman los datos desde item
        $vta_nota_credito_items = $this->getVtaNotaCreditoItems(null, null, true);

        foreach ($vta_nota_credito_items as $vta_nota_credito_item) {
            $gral_tipo_iva = $vta_nota_credito_item->getGralTipoIva();

            if ($gral_tipo_iva && $gral_tipo_iva->getGravado()) { // solo se agrega al array de IVA las alicuotas que estan gravadas
                $importe_unitario = $vta_nota_credito_item->getImporteUnitario();
                $iva = ($gral_tipo_iva->getValorIva() / 100) * $importe_unitario * $vta_nota_credito_item->getCantidad();

                $acu_importe_unitario[$gral_tipo_iva->getCodigo()] += $importe_unitario * $vta_nota_credito_item->getCantidad();
                $acu_iva[$gral_tipo_iva->getCodigo()] += $iva;

                $arr_iva[$gral_tipo_iva->getCodigo()] = array(
                    'id' => $vta_nota_credito_item->getGralTipoIvaId(),
                    'descripcion' => $gral_tipo_iva->getDescripcion(),
                    'codigo' => $gral_tipo_iva->getCodigo(),
                    'base_imponible' => $acu_importe_unitario[$gral_tipo_iva->getCodigo()],
                    'importe_iva' => $acu_iva[$gral_tipo_iva->getCodigo()],
                );
            }
        }
        return $arr_iva;
    }

    public function getArrIvaParaAfip() {

        $arr = array();

        // facturas anuladas
        $vta_nota_credito_vta_factura_vta_orden_ventas = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas(null, null, true);
        foreach ($vta_nota_credito_vta_factura_vta_orden_ventas as $vta_nota_credito_vta_factura_vta_orden_venta) {
            $gral_tipo_iva = $vta_nota_credito_vta_factura_vta_orden_venta->getGralTipoIva();

            if ($gral_tipo_iva && $gral_tipo_iva->getGravado()) { // solo se agrega al array de IVA las alicuotas que estan gravadas
                $ws_fe_param_tipo_iva = $gral_tipo_iva->getWsFeParamTipoIvaXGralTipoIvaWsFeParamTipoIva();

                $importe_total = round($vta_nota_credito_vta_factura_vta_orden_venta->getImporteTotal(), 2);
                $importe_iva = round($vta_nota_credito_vta_factura_vta_orden_venta->getImporteIva(), 2);

                $arr[$gral_tipo_iva->getCodigo()]['WS_FE_PARAM_TIPO_IVA_ID'] = $ws_fe_param_tipo_iva->getId();
                $arr[$gral_tipo_iva->getCodigo()]['Id'] = $ws_fe_param_tipo_iva->getCodigoAfip();
                $arr[$gral_tipo_iva->getCodigo()]['BaseImp'] = $arr[$gral_tipo_iva->getCodigo()]['BaseImp'] + $importe_total;
                $arr[$gral_tipo_iva->getCodigo()]['Importe'] = $arr[$gral_tipo_iva->getCodigo()]['Importe'] + $importe_iva;
            }
        }

        // items
        $vta_nota_credito_items = $this->getVtaNotaCreditoItems(null, null, true);

        foreach ($vta_nota_credito_items as $vta_nota_credito_item) {
            $gral_tipo_iva = $vta_nota_credito_item->getGralTipoIva();

            if ($gral_tipo_iva && $gral_tipo_iva->getGravado()) { // solo se agrega al array de IVA las alicuotas que estan gravadas
                $ws_fe_param_tipo_iva = $gral_tipo_iva->getWsFeParamTipoIvaXGralTipoIvaWsFeParamTipoIva();

                $importe_total = round($vta_nota_credito_item->getImporteTotal(), 2);
                $importe_iva = round($vta_nota_credito_item->getImporteIva(), 2);

                $arr[$gral_tipo_iva->getCodigo()]['WS_FE_PARAM_TIPO_IVA_ID'] = $ws_fe_param_tipo_iva->getId();
                $arr[$gral_tipo_iva->getCodigo()]['Id'] = $ws_fe_param_tipo_iva->getCodigoAfip();
                $arr[$gral_tipo_iva->getCodigo()]['BaseImp'] = $arr[$gral_tipo_iva->getCodigo()]['BaseImp'] + $importe_total;
                $arr[$gral_tipo_iva->getCodigo()]['Importe'] = $arr[$gral_tipo_iva->getCodigo()]['Importe'] + $importe_iva;
            }
        }

        return $arr;
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 15/08/2018
     */
    public function getArrTributoNotaCreditoFull() {
        $arr_tributo = array();

        // corregido el 01/10/2018 faltaba este primero foreach
        $vta_nota_credito_vta_factura_vta_tributos = $this->getVtaNotaCreditoVtaFacturaVtaTributos(null, null, true);
        foreach ($vta_nota_credito_vta_factura_vta_tributos as $vta_nota_credito_vta_factura_vta_tributo) {
            $importe_unitario = $vta_nota_credito_vta_factura_vta_tributo->getImporteImponible();
            $importe_tributo = $vta_nota_credito_vta_factura_vta_tributo->getImporteTributo();

            $acu_importe_unitario[$vta_nota_credito_vta_factura_vta_tributo->getVtaFacturaVtaTributo()->getVtaTributo()->getCodigo()] += $importe_unitario;
            $acu_iva[$vta_nota_credito_vta_factura_vta_tributo->getVtaFacturaVtaTributo()->getVtaTributo()->getCodigo()] += $importe_tributo;

            $arr_tributo[$vta_nota_credito_vta_factura_vta_tributo->getVtaFacturaVtaTributo()->getVtaTributo()->getCodigo()] = array(
                'id' => $vta_nota_credito_vta_factura_vta_tributo->getVtaFacturaVtaTributo()->getVtaTributoId(),
                'descripcion' => $vta_nota_credito_vta_factura_vta_tributo->getVtaFacturaVtaTributo()->getVtaTributo()->getDescripcion(),
                'codigo' => $vta_nota_credito_vta_factura_vta_tributo->getVtaFacturaVtaTributo()->getVtaTributo()->getCodigo(),
                'base_imponible' => $acu_importe_unitario[$vta_nota_credito_vta_factura_vta_tributo->getVtaFacturaVtaTributo()->getVtaTributo()->getCodigo()],
                'importe_tributo' => $acu_iva[$vta_nota_credito_vta_factura_vta_tributo->getVtaFacturaVtaTributo()->getVtaTributo()->getCodigo()],
            );
        }

        $vta_nota_credito_vta_tributos = $this->getVtaNotaCreditoVtaTributos(null, null, true);
        foreach ($vta_nota_credito_vta_tributos as $vta_nota_credito_vta_tributo) {
            $importe_unitario = $vta_nota_credito_vta_tributo->getImporteImponible();
            $importe_tributo = ($vta_nota_credito_vta_tributo->getVtaTributo()->getAlicuotaPorcentual() / 100) * $importe_unitario;

            $acu_importe_unitario[$vta_nota_credito_vta_tributo->getVtaTributo()->getCodigo()] += $importe_unitario;
            $acu_iva[$vta_nota_credito_vta_tributo->getVtaTributo()->getCodigo()] += $importe_tributo;

            $arr_tributo[$vta_nota_credito_vta_tributo->getVtaTributo()->getCodigo()] = array(
                'id' => $vta_nota_credito_vta_tributo->getVtaTributoId(),
                'descripcion' => $vta_nota_credito_vta_tributo->getVtaTributo()->getDescripcion(),
                'codigo' => $vta_nota_credito_vta_tributo->getVtaTributo()->getCodigo(),
                'base_imponible' => $acu_importe_unitario[$vta_nota_credito_vta_tributo->getVtaTributo()->getCodigo()],
                'importe_tributo' => $acu_iva[$vta_nota_credito_vta_tributo->getVtaTributo()->getCodigo()],
            );
        }
        return $arr_tributo;
    }

    /**
     * Metodo que retorna el valor de los tributos de la factura.
     * @return type float
     */
    public function getArrVtaTributosAplicados() {

        // se toman los datos desde la nc factura
        $vta_nota_credito_vta_factura_vta_tributos = $this->getVtaNotaCreditoVtaFacturaVtaTributos(null, null, true);

        foreach ($vta_nota_credito_vta_factura_vta_tributos as $vta_nota_credito_vta_factura_vta_tributo) {
            $vta_factura_vta_tributo = $vta_nota_credito_vta_factura_vta_tributo->getVtaFacturaVtaTributo();
            $vta_tributo = $vta_factura_vta_tributo->getVtaTributo();
            $importe_total_tributo = $vta_nota_credito_vta_factura_vta_tributo->getImporteTributo();

            $arr_tributos[$vta_tributo->getId()] = array(
                'vta_tributo_id' => $vta_tributo->getId(),
                'vta_tributo_descripcion' => $vta_tributo->getDescripcion(),
                'importe' => $importe_total_tributo,
            );
        }

        // se toman los datos desde items de la nc
        $vta_nota_credito_vta_tributos = $this->getVtaNotaCreditoVtaTributos(null, null, true);

        foreach ($vta_nota_credito_vta_tributos as $vta_nota_credito_vta_tributo) {
            $vta_tributo = $vta_nota_credito_vta_tributo->getVtaTributo();
            $importe_total_tributo = $vta_nota_credito_vta_tributo->getImporteTributo();

            $arr_tributos[$vta_tributo->getId()] = array(
                'vta_tributo_id' => $vta_tributo->getId(),
                'vta_tributo_descripcion' => $vta_tributo->getDescripcion(),
                'importe' => $importe_total_tributo,
            );
        }


        return $arr_tributos;
    }

    public function getArrTributoParaAfip() {
        $arr = array();

        // se toman los datos desde la nc factura
        $vta_nota_credito_vta_factura_vta_tributos = $this->getVtaNotaCreditoVtaFacturaVtaTributos(null, null, true);

        foreach ($vta_nota_credito_vta_factura_vta_tributos as $vta_nota_credito_vta_factura_vta_tributo) {

            $importe_imponible = round($vta_nota_credito_vta_factura_vta_tributo->getImporteImponible(), 2);
            $importe_tributo = round($vta_nota_credito_vta_factura_vta_tributo->getImporteTributo(), 2);

            $vta_factura_vta_tributo = $vta_nota_credito_vta_factura_vta_tributo->getVtaFacturaVtaTributo();
            $vta_tributo = $vta_factura_vta_tributo->getVtaTributo();
            $ws_fe_param_tipo_tributo = $vta_tributo->getWsFeParamTipoTributoXVtaTributoWsFeParamTipoTributo();

            $arr[$vta_factura_vta_tributo->getVtaTributoId()]['WS_FE_PARAM_TIPO_TRIBUTO_ID'] = $ws_fe_param_tipo_tributo->getId();
            $arr[$vta_factura_vta_tributo->getVtaTributoId()]['Id'] = $ws_fe_param_tipo_tributo->getCodigoAfip();
            $arr[$vta_factura_vta_tributo->getVtaTributoId()]['Desc'] = $ws_fe_param_tipo_tributo->getDescripcion();
            $arr[$vta_factura_vta_tributo->getVtaTributoId()]['BaseImp'] = $importe_imponible;
            $arr[$vta_factura_vta_tributo->getVtaTributoId()]['Alic'] = $vta_nota_credito_vta_factura_vta_tributo->getAlicuotaPorcentual();
            $arr[$vta_factura_vta_tributo->getVtaTributoId()]['Importe'] = $importe_tributo;
        }

        // se toman los datos desde items de la nc
        $vta_nota_credito_vta_tributos = $this->getVtaNotaCreditoVtaTributos(null, null, true);

        foreach ($vta_nota_credito_vta_tributos as $vta_nota_credito_vta_tributo) {

            $importe_imponible = round($vta_nota_credito_vta_tributo->getImporteImponible(), 2);
            $importe_tributo = round($vta_nota_credito_vta_tributo->getImporteTributo(), 2);
            $vta_tributo = $vta_nota_credito_vta_tributo->getVtaTributo();
            $ws_fe_param_tipo_tributo = $vta_tributo->getWsFeParamTipoTributoXVtaTributoWsFeParamTipoTributo();

            $arr[$vta_nota_credito_vta_tributo->getVtaTributoId()]['WS_FE_PARAM_TIPO_TRIBUTO_ID'] = $ws_fe_param_tipo_tributo->getId();
            $arr[$vta_nota_credito_vta_tributo->getVtaTributoId()]['Id'] = $ws_fe_param_tipo_tributo->getCodigoAfip();
            $arr[$vta_nota_credito_vta_tributo->getVtaTributoId()]['Desc'] = $ws_fe_param_tipo_tributo->getDescripcion();
            $arr[$vta_nota_credito_vta_tributo->getVtaTributoId()]['BaseImp'] = $importe_imponible;
            $arr[$vta_nota_credito_vta_tributo->getVtaTributoId()]['Alic'] = $vta_nota_credito_vta_tributo->getAlicuotaPorcentual();
            $arr[$vta_nota_credito_vta_tributo->getVtaTributoId()]['Importe'] = $importe_tributo;
        }

        return $arr;
    }

    public function getArrTributoParaAfipVtaNotaCreditoItems() { // discontinuado, se integro todo al metodo getArrTributoParaAfip
        $arr = array();

        $vta_nota_credito_vta_tributos = $this->getVtaNotaCreditoVtaTributos(null, null, true);

        foreach ($vta_nota_credito_vta_tributos as $vta_nota_credito_vta_tributo) {

            $importe_imponible = round($vta_nota_credito_vta_tributo->getImporteImponible(), 2);
            $importe_tributo = round($vta_nota_credito_vta_tributo->getImporteTributo(), 2);
            $vta_tributo = $vta_nota_credito_vta_tributo->getVtaTributo();
            $ws_fe_param_tipo_tributo = $vta_tributo->getWsFeParamTipoTributoXVtaTributoWsFeParamTipoTributo();

            $arr[$vta_nota_credito_vta_tributo->getVtaTributoId()]['WS_FE_PARAM_TIPO_TRIBUTO_ID'] = $ws_fe_param_tipo_tributo->getId();
            $arr[$vta_nota_credito_vta_tributo->getVtaTributoId()]['Id'] = $ws_fe_param_tipo_tributo->getCodigoAfip();
            $arr[$vta_nota_credito_vta_tributo->getVtaTributoId()]['Desc'] = $ws_fe_param_tipo_tributo->getDescripcion();
            $arr[$vta_nota_credito_vta_tributo->getVtaTributoId()]['BaseImp'] = $importe_imponible;
            $arr[$vta_nota_credito_vta_tributo->getVtaTributoId()]['Alic'] = $vta_nota_credito_vta_tributo->getAlicuotaPorcentual();
            $arr[$vta_nota_credito_vta_tributo->getVtaTributoId()]['Importe'] = $importe_tributo;
        }

        return $arr;
    }

    /**
     * Metodo que retorna el subtotal de los items de la NC sin iva.
     * @return type float
     */
    public function getVtaNotaCreditoItemSubtotal() {

        // se discontinuara pronto!
        $vta_nota_credito_items = $this->getVtaNotaCreditoItems(null, null, true);

        foreach ($vta_nota_credito_items as $vta_nota_credito_item) {
            $importe_unitario = round($vta_nota_credito_item->getImporteUnitario(), 2);
            $cantidad = $vta_nota_credito_item->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }
        return $subtotal;
    }

    /**
     * Metodo que retorna el iva de los items de la NC.
     * @return type float
     */
    public function getVtaNotaCreditoItemIva() {
        $vta_nota_credito_items = $this->getVtaNotaCreditoItems(null, null, true);

        foreach ($vta_nota_credito_items as $vta_nota_credito_item) {
            $gral_tipo_iva = $vta_nota_credito_item->getGralTipoIva();
            $valor_iva_coeficiente = $gral_tipo_iva->getValorIva() / 100;

            $importe_unitario = round($vta_nota_credito_item->getImporteUnitario(), 2);
            $cantidad = $vta_nota_credito_item->getCantidad();
            $iva += $importe_unitario * $cantidad * $valor_iva_coeficiente;
        }
        return $iva;
    }

    /**
     * Metodo que retorna la cantidad de items que tiene una NC.
     * @return type float
     */
    public function getVtaNotaCreditoCantidadItems() {
        $vta_nota_credito_items = $this->getVtaNotaCreditoItems(null, null, true);
        $vta_nota_credito_vta_factura_vta_orden_ventas = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas(null, null, true);

        $cantidad_items = count($vta_nota_credito_items) + count($vta_nota_credito_vta_factura_vta_orden_ventas);

        return $cantidad_items;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 20/03/2018 11:00 hs.
     * Metodo que envia el NC por email.
     * @return 
     */
    public function enviarNotaCreditoEmail($enviar = false, $destinatarios = false, $txa_observacion, $archivo_adjunto_urls = false) {
        if (!Mail::MAIL_ACTIVO)
            return false;

        $mail_asunto = Gral::getConfig('gral_cliente') . ' - Nota de Credito #' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios = str_replace(' ', '', $destinatarios);
        $destinatarios = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param = array(
            'vta_nota_credito_id' => $this->getId(),
            'observacion' => $txa_observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_vta_nota_credito.php";
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

        $vta_nota_credito_enviado = $this->inicializarVtaNotaCreditoEnviado($txa_observacion, $destinatarios, $mail_asunto, $msg, $strContenidoPdf);

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
                $vta_nota_credito_enviado->setConfirmarVtaNotaCreditoEnviado(1, VtaNotaCreditoEnviado::NOTA_CREDITO_ENVIADO_CORRECTAMENTE);
            } else {
                $vta_nota_credito_enviado->setConfirmarVtaNotaCreditoEnviado(0, $mail->ErrorInfo);
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
     * Fecha: 20/03/2018 11:00 hs.
     * Metodo que Inicializa el envio por mail del Nc.
     * @return VtaNotaCreditoEnviado
     */
    public function inicializarVtaNotaCreditoEnviado($observacion, $destinatarios, $mail_asunto, $mail_contenido, $archivo_adjunto) {
        $vta_nota_credito_enviado = new VtaNotaCreditoEnviado();
        $vta_nota_credito_enviado->setDescripcion('');
        $vta_nota_credito_enviado->setVtaNotaCreditoId($this->getId());
        $vta_nota_credito_enviado->setAsunto($mail_asunto);
        $vta_nota_credito_enviado->setDestinatario($destinatarios);

        $vta_nota_credito_enviado->setCuerpo(addslashes($mail_contenido));
        $vta_nota_credito_enviado->setAdjunto(base64_encode($archivo_adjunto));

        $vta_nota_credito_enviado->setCodigoEnvio(0);
        $vta_nota_credito_enviado->setObservacion($observacion);
        $vta_nota_credito_enviado->setEstado(0);

        $vta_nota_credito_enviado->save();

        return $vta_nota_credito_enviado;
    }

    public function getNombreArchivoAdjuntoNotaCredito() {
        $nombre = Gral::getConfig('conf_proyecto_min') . '_NC_' . $this->getVtaTipoNotaCredito()->getCodigoMin() . '_' . $this->getNumeroComprobanteCompleto() . '_' . $this->getPersonaDescripcion();
        $nombre = str_replace('.', '', $nombre);
        $nombre = str_replace('-', '_', $nombre);
        $nombre = str_replace(' ', '_', $nombre);
        return $nombre . '.pdf';
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 03/05/2018 11:00 hs.
     * Metodo que retorna el numero de comprobante formato "pto vta - num comp afip".
     * @return String
     */
    public function getNumeroComprobanteCompleto() {
        $vta_punto_venta = $this->getVtaPuntoVenta();
        $gral_sucursal = $vta_punto_venta->getGralSucursalXGralSucursalVtaPuntoVenta();

        $numero_sucursal = str_pad($gral_sucursal->getNumero(), DbConfig::VARS_CANTIDAD_NRO_SUCURSAL, 0, STR_PAD_LEFT);
        $numero_punto_venta = str_pad($vta_punto_venta->getNumero(), DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA_SIMPLE, 0, STR_PAD_LEFT);
        $numero_comprobante = str_pad($this->getNumeroNotaCredito(), DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);

        return $numero_sucursal . '-' . $numero_punto_venta . '-' . $numero_comprobante;
    }

    /**
     * Metodo que retorna el numero de comprobante formato "siglas - letra - pto-vta - num-comp-afip". 
     * @creado_por Esteban Martinez
     * @creado 10/02/2019
     * @return String
     */
    public function getNumeroComprobanteCompletoFull() {
        $vta_punto_venta = $this->getVtaPuntoVenta();
        $gral_sucursal = $vta_punto_venta->getGralSucursalXGralSucursalVtaPuntoVenta();
        
        $siglas_tipo_comprobante = $this->getTipoComprobanteSiglas();        
        $letra_tipo_comprobante = $this->getVtaTipoNotaCredito()->getCodigoMin();

        $numero_sucursal = str_pad($gral_sucursal->getNumero(), DbConfig::VARS_CANTIDAD_NRO_SUCURSAL, 0, STR_PAD_LEFT);
        $numero_punto_venta = str_pad($vta_punto_venta->getNumero(), DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA_SIMPLE, 0, STR_PAD_LEFT);
        $numero_comprobante = str_pad($this->getNumeroNotaCredito(), DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);
        
        return $siglas_tipo_comprobante . ' ' . $letra_tipo_comprobante . ' ' . $numero_sucursal . '-' . $numero_punto_venta . '-' . $numero_comprobante;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     */
    public function getNumeroComprobante() {
        $numero_comprobante = $this->getNumeroNotaCredito();
        return $numero_comprobante;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que se utiliza en la pantalla de conciliacion de comprobantes.
     * Modulo vta_comprobante_gestion.
     * @return String
     */
    public function getTipoComprobante() {
        return $this->getVtaTipoNotaCredito()->getDescripcion();
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 28/07/2018 15:13 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna el tipo de comprobante si existe.
     * @return String
     */
    public function getTipoComprobanteMin() {
        return $this->getVtaTipoNotaCredito()->getCodigoMin();
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que se utiliza en la pantalla de conciliacion de comprobantes.
     * Modulo vta_comprobante_gestion.
     * @return String
     */
    public function getTipoEstadoComprobante() {
        return $this->getVtaNotaCreditoTipoEstado()->getDescripcion();
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 01/07/2020 18:32 hs.
     * Metodo generico que devuelve el origen del comprobante
     * @return String
     */
    public function getVtaTipoOrigenComprobanteDescripcion() {
        $descripcion = $this->getVtaTipoOrigenNotaCredito()->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 01/07/2020 18:32 hs.
     * Metodo generico que devuelve el tipo de comprobante
     * @return String
     */
    public function getVtaTipoComprobanteDescripcion() {
        $descripcion = $this->getVtaTipoNotaCredito()->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que se utiliza en la pantalla de conciliacion de comprobantes.
     * Modulo vta_comprobante_gestion.
     * @return Float
     */
    public function getImporteTotalComprobante($resumen = false) {
        
        if($resumen){
            // -------------------------------------------------------------------------
            // se instancia la tabla de resumen
            // -------------------------------------------------------------------------
            $vta_nota_credito_importe = $this->getResumenComprobante();
            return $vta_nota_credito_importe->getImporteTotal();
        }
        
        $vta_nota_credito_importe_total = 0;

        // Importes de la generacion de la NC desde una Factura
        $vta_nota_credito_subtotal = $this->getVtaNotaCreditoSubtotal();
        $vta_nota_credito_iva = $this->getVtaNotaCreditoIva();
        $vta_nota_credito_vta_factura_vta_tributo = $this->getVtaNotaCreditoImporteTributo();
        /*
          // Importes de la generacion de la NC a travez de los items
          $vta_nota_credito_item_subtotal = $this->getVtaNotaCreditoItemSubtotal();
          $vta_nota_credito_item_iva = $this->getVtaNotaCreditoItemIva();
          $vta_nota_credito_item_vta_tributo = $this->getVtaNotaCreditoItemImporteTributo();
         */
        $vta_nota_credito_total = $vta_nota_credito_subtotal + $vta_nota_credito_iva + $vta_nota_credito_vta_factura_vta_tributo;
        $vta_nota_credito_item_total = $vta_nota_credito_item_subtotal + $vta_nota_credito_item_iva + $vta_nota_credito_item_vta_tributo;

        $vta_nota_credito_importe_total = $vta_nota_credito_total + $vta_nota_credito_item_total;
        return $vta_nota_credito_importe_total;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/08/2018 22:13 hs.
     * Metodo que retorna el importe total del DEBE del comprobante
     * @return Double
     */
    public function getImporteTotalComprobanteDebe() {
        $importe_total_debe = 0;
        return $importe_total_debe;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/08/2018 22:13 hs.
     * Metodo que retorna el importe total del DEBE del comprobante
     * @return Double
     */
    public function getImporteTotalComprobanteHaber() {
        $importe_total_haber = $this->getImporteTotalComprobante($resumen = true);
        return $importe_total_haber;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImporteSubtotal($tipo_subtotal = false) {

        return $this->getVtaNotaCreditoSubtotal($tipo_subtotal);
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 16/08/2018
     */
    public function getArrIvaComprobanteFull() {
        return $this->getArrIvaNotaCreditoFull();
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 22/10/2018
     */
    public function getArrIvaParaCitiComprobanteFull() {
        return $this->getArrIvaNotaCreditoParaCitiFull();
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 16/08/2018
     */
    public function getArrTributoComprobanteFull() {
        return $this->getArrTributoNotaCreditoFull();
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 01/10/2018
     */
    public function getImporteIvaBaseImponible($codigo = false, $arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaNotaCreditoFull();
        }
        if ($codigo !== false) { // se compara asi porque existe iva cero y genera conflictos
            $arr_iva = $arr_iva_full[$codigo];
            $importe = $arr_iva['base_imponible'];
        } else {
            foreach ($arr_iva_full as $arr_iva) {
                $importe += $arr_iva['base_imponible'];
            }
        }

        return $importe;
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 01/10/2018
     */
    public function getImporteIvaImporte($codigo = false, $arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaNotaCreditoFull();
        }
        if ($codigo !== false) { // se compara asi porque existe iva cero y genera conflictos
            $arr_iva = $arr_iva_full[$codigo];
            $importe = $arr_iva['importe_iva'];
        } else {
            foreach ($arr_iva_full as $arr_iva) {
                $importe += $arr_iva['importe_iva'];
            }
        }

        return $importe;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImporteSubtotalNeto105($arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaNotaCreditoFull();
        }

        $arr_iva = $arr_iva_full["10.5"];

        return (is_array($arr_iva)) ? $arr_iva['base_imponible'] : 0;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImporteSubtotalNeto21($arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaNotaCreditoFull();
        }
        $arr_iva = $arr_iva_full["21"];

        return (is_array($arr_iva)) ? $arr_iva['base_imponible'] : 0;
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 19/10/2018 15:18
     * 
     * Esto devuelve la Base Imponible sobre el cual se calculo el impuesto
     */
    public function getImporteSubtotalNeto0($arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaNotaCreditoFull();
        }

        $arr_iva = $arr_iva_full["0"];

        return (is_array($arr_iva)) ? $arr_iva['base_imponible'] : 0;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     * 
     * Esto devuelve la Base Imponible sobre el cual se calculo el impuesto
     */
    public function getImporteSubtotalNetoNoGravado($arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaNotaCreditoFull();
        }

        //$arr_iva = $arr_iva_full["0"]; // anterior
        $arr_iva = $arr_iva_full["NO_GRAVADO"];

        return (is_array($arr_iva)) ? $arr_iva['base_imponible'] : 0;
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 19/10/2018 15:18
     * 
     * Esto devuelve la Base Imponible sobre el cual se calculo el impuesto
     */
    public function getImporteSubtotalNetoExento($arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaNotaCreditoFull();
        }

        $arr_iva = $arr_iva_full["EXENTO"];

        return (is_array($arr_iva)) ? $arr_iva['base_imponible'] : 0;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImporteIva105($arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaNotaCreditoFull();
        }
        $arr_iva = $arr_iva_full["10.5"];

        return (is_array($arr_iva)) ? $arr_iva['importe_iva'] : 0;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImporteIva21($arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaNotaCreditoFull();
        }
        $arr_iva = $arr_iva_full["21"];

        return (is_array($arr_iva)) ? $arr_iva['importe_iva'] : 0;
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 03/10/2018
     */
    public function getImporteTributoBaseImponible($codigo = false, $arr_tributo_full = false) {
        if (!$arr_tributo_full) {
            $arr_tributo_full = $this->getArrTributoNotaCreditoFull();
        }
        if ($codigo !== false) { // se compara asi porque existe iva cero y genera conflictos
            $arr_tributo = $arr_tributo_full[$codigo];
            $importe = $arr_tributo['base_imponible'];
        } else {
            foreach ($arr_tributo_full as $arr_tributo) {
                $importe += $arr_tributo['base_imponible'];
            }
        }

        return $importe;
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 03/10/2018
     */
    public function getImporteTributoImporte($codigo = false, $arr_tributo_full = false) {
        if (!$arr_tributo_full) {
            $arr_tributo_full = $this->getArrTributoNotaCreditoFull();
        }
        if ($codigo !== false) { // se compara asi porque existe iva cero y genera conflictos
            $arr_tributo = $arr_tributo_full[$codigo];
            $importe = $arr_tributo['importe_tributo'];
        } else {
            foreach ($arr_tributo_full as $arr_tributo) {
                $importe += $arr_tributo['importe_tributo'];
            }
        }

        return $importe;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImportePercepcionIIBB($arr_tributo_full = false) {
        if (!$arr_tributo_full) {
            $arr_tributo_full = $this->getArrTributoNotaCreditoFull();
        }

        $arr_tributo = $arr_tributo_full[PERCEPCIONES_IIBB];

        return $arr_tributo['importe_tributo'];
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImporteTotal() {
        return $this->getVtaNotaCreditoTotal();
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que retorna el importe total de los tributos de la NC generada por luna Factura.
     * @return Float
     */
    public function getVtaNotaCreditoImporteTributo() {
        $importe_tributo = 0;
        $vta_nota_credito_vta_factura_vta_tributos = $this->getVtaNotaCreditoVtaFacturaVtaTributos(null, null, true);

        foreach ($vta_nota_credito_vta_factura_vta_tributos as $vta_nota_credito_vta_factura_vta_tributo) {
            $importe_tributo += $vta_nota_credito_vta_factura_vta_tributo->getImporteTributo();
        }

        $vta_nota_credito_vta_tributos = $this->getVtaNotaCreditoVtaTributos(null, null, true);

        foreach ($vta_nota_credito_vta_tributos as $vta_nota_credito_vta_tributo) {
            $importe_tributo += $vta_nota_credito_vta_tributo->getImporteTributo();
        }

        return $importe_tributo;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que retorna el importe total de los tributos de la NC generada por la carga de los Items.
     * @return Float
     */
    public function getVtaNotaCreditoItemImporteTributo() {
        $importe_tributo = 0;
        $vta_nota_credito_vta_tributos = $this->getVtaNotaCreditoVtaTributos(null, null, true);

        foreach ($vta_nota_credito_vta_tributos as $vta_nota_credito_vta_tributo) {
            $importe_tributo += round($vta_nota_credito_vta_tributo->getImporteTributo(), 2);
        }

        return $importe_tributo;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que retorna una coleccion de NC para imputar en las ND y Facturas.
     * @return VtaNotaCreditos
     */
    static function getVtaNotaCreditosImputables($cli_cliente_id, $gral_empresa_id = null) {

        $criterio = new Criterio(VtaNotaCredito::SES_CRITERIOS);
        $criterio->setAmbiguo(false);
        $criterio->addDistinct(true);

        $criterio->addInicioSubconsulta();
        $criterio->add('', 'true', '', false, "");

        $criterio->add(VtaNotaCredito::GEN_ATTR_CLI_CLIENTE_ID, $cli_cliente_id, Criterio::IGUAL);

        if ($gral_empresa_id != 'null') {
            $criterio->add(VtaNotaCredito::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
        }
        $criterio->addFinSubconsulta();

        //----------------------------------------------
        // Aca va un inicio de subconsulta con el fin y despues los join
        //----------------------------------------------
        $criterio->addInicioSubconsulta();
        $criterio->add(VtaNotaCreditoTipoEstado::GEN_ATTR_IMPUTABLE, 1, Criterio::IGUAL);

        $criterio->addRealJoin(VtaNotaCreditoTipoEstado::GEN_TABLA, VtaNotaCreditoTipoEstado::GEN_ATTR_ID, VtaNotaCredito::GEN_ATTR_VTA_NOTA_CREDITO_TIPO_ESTADO_ID, 'LEFT JOIN');
        $criterio->addFinSubconsulta();

        $criterio->addTabla(VtaNotaCredito::GEN_TABLA);
        $criterio->setCriterios();

        $vta_nota_creditos = VtaNotaCredito::getVtaNotaCreditos(null, $criterio);

        return $vta_nota_creditos;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que retorna el importe disponible para ser imputado en una Factura o una Nota de Debito.
     * @return Float
     */
    public function getImporteDisponibleComprobante() {
        return $this->getImporteTotalComprobante();
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 15/05/2018 11:00 hs.
     * Metodo que retorna el importe disponible a imputar de una NC.
     * @return Float
     */
    public function getSaldoImputable() {
        $importe_total_comprobante_afectado = 0;

        // Busco el importe total de la NC
        $importe_total_comprobante = $this->getImporteTotalComprobante();

        // Busco el importe total ya imputado con Facturas
        $vta_factura_vta_nota_creditos = $this->getVtaFacturaVtaNotaCreditos(null, null, true);
        foreach ($vta_factura_vta_nota_creditos as $vta_factura_vta_nota_credito) {
            $importe_total_comprobante_afectado += $vta_factura_vta_nota_credito->getImporteAfectado();
        }

        // Busco el importe total ya imputado con Notas de Debito
        $vta_nota_debito_vta_nota_creditos = $this->getVtaNotaDebitoVtaNotaCreditos(null, null, true);
        foreach ($vta_nota_debito_vta_nota_creditos as $vta_nota_debito_vta_nota_credito) {
            $importe_total_comprobante_afectado += $vta_nota_debito_vta_nota_credito->getImporteAfectado();
        }

        // Busco el importe total ya imputado con Ajustes
        $vta_ajuste_debe_vta_nota_creditos = $this->getVtaAjusteDebeVtaNotaCreditos(null, null, true);
        foreach ($vta_ajuste_debe_vta_nota_creditos as $vta_ajuste_debe_vta_nota_credito) {
            $importe_total_comprobante_afectado += $vta_ajuste_debe_vta_nota_credito->getImporteAfectado();
        }

        $importe_total_comprobante = round($importe_total_comprobante, 2);
        $importe_total_comprobante_afectado = round($importe_total_comprobante_afectado, 2);

        $importe_total_comprobante_disponible = $importe_total_comprobante - $importe_total_comprobante_afectado;
        return $importe_total_comprobante_disponible;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 03/11/2018 17:06 hs.
     * Metodo utilizado en la imputacion de comprobantes.
     * @return 
     */
    public function setImputarVtaComprobante($recalcular_estado, $vta_nota_debito_ids = null, $vta_factura_ids = null, $vta_ajuste_debe_ids = null) {
        // Importe a imputar
        $vta_nota_credito_importe_total_a_imputar = $this->getSaldoImputable();

        // Agrupo todos los comprobantes para poder ordenarlos por fecha de emision
        foreach ($vta_factura_ids as $vta_factura_id) {
            $vta_factura = VtaFactura::getOxId($vta_factura_id);
            $vta_comprobantes[] = $vta_factura;
        }

        foreach ($vta_nota_debito_ids as $vta_nota_debito_id) {
            $vta_nota_debito = VtaNotaDebito::getOxId($vta_nota_debito_id);
            $vta_comprobantes[] = $vta_nota_debito;
        }

        foreach ($vta_ajuste_debe_ids as $vta_ajuste_debe_id) {
            $vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_ajuste_debe_id);
            $vta_comprobantes[] = $vta_ajuste_debe;
        }

        // Ordeno los comprobantes
        usort($vta_comprobantes, array($this, 'self::getOrdenarColeccionComprobantes'));

        $vta_nota_credito_importe_a_imputar = $vta_nota_credito_importe_total_a_imputar;
        // Genero el vinculo con el comprobante correspondiente
        foreach ($vta_comprobantes as $vta_comprobante) {

            if ((int) ($vta_nota_credito_importe_a_imputar * 100) > 0) {
                $clase = get_class($vta_comprobante);

                if ($clase == 'VtaNotaDebito') {
                    $vta_nota_debito = VtaNotaDebito::getOxId($vta_comprobante->getId());
                    $vta_nota_debito_importe_disponible = $vta_nota_debito->getSaldoImputable();

                    // Genero la relacion
                    $vta_nota_debito_vta_nota_credito = new VtaNotaDebitoVtaNotaCredito();

                    $vta_nota_debito_vta_nota_credito->setVtaNotaDebitoId($vta_nota_debito->getId());
                    $vta_nota_debito_vta_nota_credito->setVtaNotaCreditoId($this->getId());

                    // Monto de la nota_debito mayor o igual al de la NC
                    if ((int) ($vta_nota_credito_importe_a_imputar * 100) < (int) ($vta_nota_debito_importe_disponible * 100)) {
                        $vta_nota_debito_vta_nota_credito->setImporteAfectado($vta_nota_credito_importe_a_imputar);
                    } else {
                        $vta_nota_debito_vta_nota_credito->setImporteAfectado($vta_nota_debito_importe_disponible);
                    }
                    $vta_nota_debito_vta_nota_credito->setEstado(1);
                    $vta_nota_debito_vta_nota_credito->save();

                    $vta_nota_credito_importe_a_imputar -= $vta_nota_debito_importe_disponible;
                } elseif ($clase == 'VtaFactura') {
                    $vta_factura = VtaFactura::getOxId($vta_comprobante->getId());

                    $vta_factura_importe_disponible = $vta_factura->getSaldoImputable();

                    // Genero la relacion
                    $vta_factura_vta_nota_credito = new VtaFacturaVtaNotaCredito();

                    $vta_factura_vta_nota_credito->setVtaNotaCreditoId($this->getId());
                    $vta_factura_vta_nota_credito->setVtaFacturaId($vta_factura->getId());

                    // Monto de la nota_debito mayor o igual al del Recibo
                    if ((int) ($vta_nota_credito_importe_a_imputar * 100) < (int) ($vta_factura_importe_disponible * 100)) {
                        $vta_factura_vta_nota_credito->setImporteAfectado($vta_nota_credito_importe_a_imputar);
                    } else {
                        $vta_factura_vta_nota_credito->setImporteAfectado($vta_factura_importe_disponible);
                    }
                    $vta_factura_vta_nota_credito->setEstado(1);
                    $vta_factura_vta_nota_credito->save();

                    $vta_nota_credito_importe_a_imputar -= $vta_factura_importe_disponible;
                } elseif ($clase == 'VtaAjusteDebe') {
                    $vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_comprobante->getId());

                    $vta_ajuste_debe_importe_disponible = $vta_ajuste_debe->getSaldoImputable();

                    // Genero la relacion
                    $vta_ajuste_debe_vta_nota_credito = new VtaAjusteDebeVtaNotaCredito();
                    $vta_ajuste_debe_vta_nota_credito->setVtaNotaCreditoId($this->getId());
                    $vta_ajuste_debe_vta_nota_credito->setVtaAjusteDebeId($vta_ajuste_debe->getId());

                    // Monto de la factura mayor o igual al del Ajuste
                    if ((int) ($vta_nota_credito_importe_a_imputar * 100) < (int) ($vta_ajuste_debe_importe_disponible * 100)) {
                        $vta_ajuste_debe_vta_nota_credito->setImporteAfectado($vta_nota_credito_importe_a_imputar);
                    } else {
                        $vta_ajuste_debe_vta_nota_credito->setImporteAfectado($vta_ajuste_debe_importe_disponible);
                    }
                    $vta_ajuste_debe_vta_nota_credito->setEstado(1);
                    $vta_ajuste_debe_vta_nota_credito->save();

                    $vta_nota_credito_importe_a_imputar -= $vta_ajuste_debe_importe_disponible;    
                }
            }
        }

        if ($recalcular_estado) {
            // ---------------------------------------------------------------------
            // se recalcula estado de los comprobantes vinculados
            // ---------------------------------------------------------------------        
            $this->setRecalcularEstado($recursivo = true);
        }

        return $this;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 03/11/2018 17:06 hs.
     * Metodo que redefine el estado del comprobante de acuerdo a sus conciliaciones actuales
     * @return Obj VtaNotaCreditoEstado
     */
    public function setRecalcularEstado($recursivo = false) {

        // Importe imputable del comprobante
        $importe_comprobante_total = $this->getImporteTotalComprobante();

        $importe_comprobante_saldo = $importe_comprobante_total;

        $vta_factura_vta_nota_creditos = $this->getVtaFacturaVtaNotaCreditos(null, null, true);
        $vta_nota_debito_vta_nota_creditos = $this->getVtaNotaDebitoVtaNotaCreditos(null, null, true);
        $vta_ajuste_debe_vta_nota_creditos = $this->getVtaAjusteDebeVtaNotaCreditos(null, null, true);

        // ---------------------------------------------------------------------
        // se recorren las facturas vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_factura_vta_nota_creditos as $vta_factura_vta_nota_credito) {
            $importe_afectado = $vta_factura_vta_nota_credito->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $vta_factura_vta_nota_credito->getVtaFactura()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren las notas de debito vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_nota_debito_vta_nota_creditos as $vta_nota_debito_vta_nota_credito) {
            $importe_afectado = $vta_nota_debito_vta_nota_credito->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $vta_nota_debito_vta_nota_credito->getVtaNotaDebito()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren las ajustes vinculados
        // ---------------------------------------------------------------------
        foreach ($vta_ajuste_debe_vta_nota_creditos as $vta_ajuste_debe_vta_nota_credito) {
            $importe_afectado = $vta_ajuste_debe_vta_nota_credito->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $vta_ajuste_debe_vta_nota_credito->getVtaAjusteDebe()->setRecalcularEstado(false);
            }
        }

        if ((abs($importe_comprobante_saldo) >= 0) && (abs($importe_comprobante_saldo) <= 0.1)) {
            // -----------------------------------------------------------------
            // si tiene saldo cero el comprobante fue usado en su totalidad
            // -----------------------------------------------------------------
            $vta_nota_credito_estado = $this->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_IMPUTADO, '');
        } elseif ($importe_comprobante_saldo > 0.1 && $importe_comprobante_saldo != $importe_comprobante_total) {
            // -----------------------------------------------------------------
            // si tiene saldo mayor a cero el comprobante fue usado parcialmente
            // -----------------------------------------------------------------
            $vta_nota_credito_estado = $this->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_IMPUTADO_PARCIAL, '');
        } elseif ($importe_comprobante_saldo == $importe_comprobante_total) {
            // -----------------------------------------------------------------
            // si tiene saldo igual al total se encuentra pendiente de pago
            // -----------------------------------------------------------------
            $vta_nota_credito_estado = $this->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_PENDIENTE, '');
        }

        return $vta_nota_credito_estado;
    }

    static function getOrdenarColeccionComprobantes($vta_comprobante, $vta_comprobante_comparacion) {
        $fecha_emision = strtotime(date($vta_comprobante->getFechaEmision()));
        $fecha_emision_comparacion = strtotime(date($vta_comprobante_comparacion->getFechaEmision()));

        if ($fecha_emision == $fecha_emision_comparacion)
            return 0;

        return ($fecha_emision > $fecha_emision_comparacion) ? 1 : -1;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 06/11/2018 20:04 hs.
     * Metodo que rompe los vinculos del comprobante conciliado
     * @return Booleano
     */
    public function setDesvincularComprobantesConciliados($recursivo = false) {

        $vta_factura_vta_nota_creditos = $this->getVtaFacturaVtaNotaCreditos(null, null, true);
        $vta_nota_debito_nota_creditos = $this->getVtaNotaDebitoVtaNotaCreditos(null, null, true);
        $vta_ajuste_debes_vta_nota_creditos = $this->getVtaAjusteDebeVtaNotaCreditos(null, null, true);

        // ---------------------------------------------------------------------
        // se recorren las facturas vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_factura_vta_nota_creditos as $vta_factura_vta_nota_credito) {
            $vta_factura_vta_nota_credito->setEstado(0);
            $vta_factura_vta_nota_credito->save();

            if ($recursivo) {
                $vta_factura_vta_nota_credito->getVtaFactura()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren las notas de debito vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_nota_debito_nota_creditos as $vta_nota_debito_nota_credito) {
            $vta_nota_debito_nota_credito->setEstado(0);
            $vta_nota_debito_nota_credito->save();

            if ($recursivo) {
                $vta_nota_debito_nota_credito->getVtaNotaDebito()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren los ajustos vinculados
        // ---------------------------------------------------------------------
        foreach ($vta_ajuste_debes_vta_nota_creditos as $vta_ajuste_debes_vta_nota_credito) {
            $vta_ajuste_debes_vta_nota_credito->setEstado(0);
            $vta_ajuste_debes_vta_nota_credito->save();

            if ($recursivo) {
                $vta_ajuste_debes_vta_nota_credito->getVtaAjusteDebe()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recalcula estado del comprobante
        // ---------------------------------------------------------------------        
        $this->setRecalcularEstado(false);

        return true;
    }

    public function getVtaComprobanteTipoEstado() {
        return $this->getVtaNotaCreditoTipoEstado();
    }

    /**
     * Metodo que retorna los comprobantes vinculados al comprobante por conciliacion
     */
    public function getVtaComprobantesVinculadosPorConciliacion() {
        $vta_factura_vta_nota_creditos = $this->getVtaFacturaVtaNotaCreditos(null, null, true);
        $vta_nota_debito_vta_nota_creditos = $this->getVtaNotaDebitoVtaNotaCreditos(null, null, true);
        $vta_ajuste_debe_vta_nota_creditos = $this->getVtaAjusteDebeVtaNotaCreditos(null, null, true);

        $vta_facturas = $this->getVtaFacturasXVtaFacturaVtaNotaCredito(null, null, true);
        $vta_nota_debitos = $this->getVtaNotaDebitosXVtaNotaDebitoVtaNotaCredito(null, null, true);
        $vta_ajuste_debes = $this->getVtaAjusteDebesXVtaAjusteDebeVtaNotaCredito(null, null, true);

        $arr_comprobantes['INTERMEDIO'] = array_merge($vta_factura_vta_nota_creditos, $vta_nota_debito_vta_nota_creditos, $vta_ajuste_debe_vta_nota_creditos);
        $arr_comprobantes['EXTREMO'] = array_merge($vta_facturas, $vta_nota_debitos, $vta_ajuste_debes);

        // ---------------------------------------------------------------------
        // generacion de string para CSS
        // ---------------------------------------------------------------------
        $css_comprobantes_vinculados_por_conciliacion = '';
        foreach ($arr_comprobantes['EXTREMO'] as $arr_comprobante) {
            $css_comprobantes_vinculados_por_conciliacion .= ' CC_' . $arr_comprobante->getCodigo();
        }
        $arr_comprobantes['CSS_VINCULACION'] = $css_comprobantes_vinculados_por_conciliacion;
        // ---------------------------------------------------------------------

        return $arr_comprobantes;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 28/02/2019 10:47
     * Metodo que retorna un booleano indicando si el comprobante puede desvincularse de conciliacion o no
     * @return boolean
     */
    public function esComprobanteDesvinculable() {

        // ---------------------------------------------------------------------
        // se verifica que el comprobante no este vinculado a algun comprobante comisionado
        // ---------------------------------------------------------------------
        $c = new Criterio();
        $c->add(VtaFacturaVtaNotaCredito::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(VtaComisionVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(VtaComisionTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL);
        $c->addTabla(VtaFacturaVtaNotaCredito::GEN_TABLA);
        $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_ID, VtaFacturaVtaNotaCredito::GEN_ATTR_VTA_FACTURA_ID);
        $c->addRealJoin(VtaComisionVtaFactura::GEN_TABLA, VtaComisionVtaFactura::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
        $c->addRealJoin(VtaComision::GEN_TABLA, VtaComision::GEN_ATTR_ID, VtaComisionVtaFactura::GEN_ATTR_VTA_COMISION_ID);
        $c->addRealJoin(VtaComisionTipoEstado::GEN_TABLA, VtaComisionTipoEstado::GEN_ATTR_ID, VtaComision::GEN_ATTR_VTA_COMISION_TIPO_ESTADO_ID);
        $c->setCriterios();

        $vta_factura_vta_recibos = $this->getVtaFacturaVtaNotaCreditos(null, $c);
        if (count($vta_factura_vta_recibos) > 0) {
            return false;
        }
        return true;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiVentasCbteImporteTotalOperacion() {
        $afip_citi_importe_total_operacion = $this->getImporteTotal();

        $afip_citi_importe_total_operacion = round($afip_citi_importe_total_operacion, 2);
        $afip_citi_importe_total_operacion = Gral::completar_decimales($afip_citi_importe_total_operacion);

        $afip_citi_importe_total_operacion = str_replace(".", '', $afip_citi_importe_total_operacion);
        $afip_citi_importe_total_operacion = str_pad($afip_citi_importe_total_operacion, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_total_operacion = substr($afip_citi_importe_total_operacion, 0, 15);

        return $afip_citi_importe_total_operacion;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     * 
     * Campo 10: Importe total de conceptos que no integran el precio neto gravado.
      Se consignara el importe que surja de sumar los montos que no integren la base imponible.
      Podrá ser cero.
     */
    public function getAfipCitiVentasCbteImporteTotalConceptos() {
        $importe_base_imponible_no_gravado = $this->getImporteSubtotal(VtaComprobante::TIPO_SUBTOTAL_NO_GRAVADO);

        $afip_citi_importe_total_conceptos = $importe_base_imponible_no_gravado;

        $afip_citi_importe_total_conceptos = round($afip_citi_importe_total_conceptos, 2);
        $afip_citi_importe_total_conceptos = Gral::completar_decimales($afip_citi_importe_total_conceptos);
        $afip_citi_importe_total_conceptos = str_replace(".", '', $afip_citi_importe_total_conceptos);
        $afip_citi_importe_total_conceptos = str_pad($afip_citi_importe_total_conceptos, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_total_conceptos = substr($afip_citi_importe_total_conceptos, 0, 15);

        return $afip_citi_importe_total_conceptos;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiVentasCbteImportePercepcionNoCategorizados() {
        $afip_citi_importe_percepcion_no_categorizados = "0.00"; //revisar logica

        $afip_citi_importe_percepcion_no_categorizados = round($afip_citi_importe_percepcion_no_categorizados, 2);
        $afip_citi_importe_percepcion_no_categorizados = Gral::completar_decimales($afip_citi_importe_percepcion_no_categorizados);

        $afip_citi_importe_percepcion_no_categorizados = str_replace(".", '', $afip_citi_importe_percepcion_no_categorizados);
        $afip_citi_importe_percepcion_no_categorizados = str_pad($afip_citi_importe_percepcion_no_categorizados, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_percepcion_no_categorizados = substr($afip_citi_importe_percepcion_no_categorizados, 0, 15);

        return $afip_citi_importe_percepcion_no_categorizados;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiVentasCbteImporteOperacionesExentas() {
        $importe_base_imponible_exento = $this->getImporteSubtotal(VtaComprobante::TIPO_SUBTOTAL_EXENTO);

        $afip_citi_importe_operaciones_exentas = $importe_base_imponible_exento;

        $afip_citi_importe_operaciones_exentas = round($afip_citi_importe_operaciones_exentas, 2);
        $afip_citi_importe_operaciones_exentas = Gral::completar_decimales($afip_citi_importe_operaciones_exentas);

        $afip_citi_importe_operaciones_exentas = str_replace(".", '', $afip_citi_importe_operaciones_exentas);
        $afip_citi_importe_operaciones_exentas = str_pad($afip_citi_importe_operaciones_exentas, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_operaciones_exentas = substr($afip_citi_importe_operaciones_exentas, 0, 15);

        return $afip_citi_importe_operaciones_exentas;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiVentasCbteImportePercepcionesImpuestosNacionales($arr_tributo_full = false) {
        $afip_citi_importe_percepciones_impuestos_nacionales = "0.00"; //revisar logica 

        $afip_citi_importe_percepciones_impuestos_nacionales = round($afip_citi_importe_percepciones_impuestos_nacionales, 2);
        $afip_citi_importe_percepciones_impuestos_nacionales = Gral::completar_decimales($afip_citi_importe_percepciones_impuestos_nacionales);

        $afip_citi_importe_percepciones_impuestos_nacionales = str_replace(".", '', $afip_citi_importe_percepciones_impuestos_nacionales);
        $afip_citi_importe_percepciones_impuestos_nacionales = str_pad($afip_citi_importe_percepciones_impuestos_nacionales, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_percepciones_impuestos_nacionales = substr($afip_citi_importe_percepciones_impuestos_nacionales, 0, 15);

        return $afip_citi_importe_percepciones_impuestos_nacionales;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiVentasCbteImportePercepcionesIngresosBrutos($arr_tributo_full = false) {
        $afip_citi_importe_percepciones_ingresos_brutos = $this->getImportePercepcionIIBB($arr_tributo_full);

        $afip_citi_importe_percepciones_ingresos_brutos = round($afip_citi_importe_percepciones_ingresos_brutos, 2);
        $afip_citi_importe_percepciones_ingresos_brutos = Gral::completar_decimales($afip_citi_importe_percepciones_ingresos_brutos);

        $afip_citi_importe_percepciones_ingresos_brutos = str_replace(".", '', $afip_citi_importe_percepciones_ingresos_brutos);
        $afip_citi_importe_percepciones_ingresos_brutos = str_pad($afip_citi_importe_percepciones_ingresos_brutos, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_percepciones_ingresos_brutos = substr($afip_citi_importe_percepciones_ingresos_brutos, 0, 15);

        return $afip_citi_importe_percepciones_ingresos_brutos;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiVentasCbteImportePercepcionesImpuestosMunicipales($arr_tributo_full = false) {
        $afip_citi_importe_percepciones_impuestos_municipales = "0.00"; //revisar logica 

        $afip_citi_importe_percepciones_impuestos_municipales = round($afip_citi_importe_percepciones_impuestos_municipales, 2);
        $afip_citi_importe_percepciones_impuestos_municipales = Gral::completar_decimales($afip_citi_importe_percepciones_impuestos_municipales);

        $afip_citi_importe_percepciones_impuestos_municipales = str_replace(".", '', $afip_citi_importe_percepciones_impuestos_municipales);
        $afip_citi_importe_percepciones_impuestos_municipales = str_pad($afip_citi_importe_percepciones_impuestos_municipales, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_percepciones_impuestos_municipales = substr($afip_citi_importe_percepciones_impuestos_municipales, 0, 15);

        return $afip_citi_importe_percepciones_impuestos_municipales;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiVentasCbteImporteImpuestosInternos($arr_tributo_full = false) {
        $afip_citi_importe_impuestos_internos = "0.00"; //revisar logica 

        $afip_citi_importe_impuestos_internos = round($afip_citi_importe_impuestos_internos, 2);
        $afip_citi_importe_impuestos_internos = Gral::completar_decimales($afip_citi_importe_impuestos_internos);

        $afip_citi_importe_impuestos_internos = str_replace(".", '', $afip_citi_importe_impuestos_internos);
        $afip_citi_importe_impuestos_internos = str_pad($afip_citi_importe_impuestos_internos, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_impuestos_internos = substr($afip_citi_importe_impuestos_internos, 0, 15);

        return $afip_citi_importe_impuestos_internos;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiVentasCbteImporteOtrosTributos($arr_tributo_full = false) {
        $afip_citi_importe_otros_tributos = "0.00"; //revisar logica.

        $afip_citi_importe_otros_tributos = round($afip_citi_importe_otros_tributos, 2);
        $afip_citi_importe_otros_tributos = Gral::completar_decimales($afip_citi_importe_otros_tributos);

        $afip_citi_importe_otros_tributos = str_replace(".", '', $afip_citi_importe_otros_tributos);
        $afip_citi_importe_otros_tributos = str_pad($afip_citi_importe_otros_tributos, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_otros_tributos = substr($afip_citi_importe_otros_tributos, 0, 15);

        return $afip_citi_importe_otros_tributos;
    }

    /*
     * @creado_por Esteban Martinez
     * @creado 10/10/2018
     */

    public function getAfipCitiVentasDenominacionComprador() {
        $denominacion_comprador = $this->getPersonaDescripcion();

        $find = array('/[^A-Za-z0-9\- <>]/');
        $repl = array('');
        $denominacion_comprador = preg_replace($find, $repl, $denominacion_comprador);

        //se rellena
        $denominacion_comprador = str_pad($denominacion_comprador, 30, " ", STR_PAD_RIGHT);
        //se corta
        $denominacion_comprador = substr($denominacion_comprador, 0, 30);
        return $denominacion_comprador;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 20/10/2018 21:53
     * Metodo que retorna una coleccion con las observaciones de AFIP para el comprobante
     */
    public function getWsFeOpeSolicitudRespuestaObservacions() {
        $ws_fe_ope_solicitud_respuesta_observacions_full = array();

        $ws_fe_ope_solicituds = $this->getWsFeOpeSolicitudsXVtaNotaCreditoWsFeOpeSolicitud();
        foreach ($ws_fe_ope_solicituds as $ws_fe_ope_solicitud) {
            $ws_fe_ope_solicitud_respuesta = $ws_fe_ope_solicitud->getWsFeOpeSolicitudRespuesta();
            if ($ws_fe_ope_solicitud_respuesta) {
                $ws_fe_ope_solicitud_respuesta_observacions = $ws_fe_ope_solicitud_respuesta->getWsFeOpeSolicitudRespuestaObservacions();
            }
            if (is_array($ws_fe_ope_solicitud_respuesta_observacions)) {
                $ws_fe_ope_solicitud_respuesta_observacions_full = array_merge($ws_fe_ope_solicitud_respuesta_observacions_full, $ws_fe_ope_solicitud_respuesta_observacions);
            }
        }

        return $ws_fe_ope_solicitud_respuesta_observacions_full;
    }

    /**
     * @creado_por Esteban Martinez, Pablo Rosenberger
     * @creado 21/11/2018
     */
    static function getVtaNotaCreditosSinCaeParaWidget($fecha_desde = "", $fecha_hasta = "") {
        $criterio = new Criterio();

        $criterio->setAmbiguo(false);
        $criterio->addDistinct(true);

        $criterio->addInicioSubconsulta();
        $criterio->add(VtaNotaCreditoTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL, false, '');
        $criterio->add(VtaNotaCreditoTipoEstado::GEN_ATTR_CODIGO, VtaNotaCreditoTipoEstado::TIPO_GENERADO, Criterio::IGUAL, false, Criterio::_OR);
        $criterio->add(VtaNotaCreditoTipoEstado::GEN_ATTR_CODIGO, VtaNotaCreditoTipoEstado::TIPO_RECHAZADO_AFIP, Criterio::IGUAL, false, Criterio::_OR);
        $criterio->add(VtaNotaCreditoTipoEstado::GEN_ATTR_CODIGO, VtaNotaCreditoTipoEstado::TIPO_OBSERVADO_AFIP, Criterio::IGUAL, false, Criterio::_OR);
        $criterio->add(VtaNotaCreditoTipoEstado::GEN_ATTR_CODIGO, VtaNotaCreditoTipoEstado::TIPO_IMPUTADO, Criterio::IGUAL, false, Criterio::_OR);
        $criterio->addFinSubconsulta();

        if ($fecha_desde != "") {
            $criterio->add(VtaNotaCredito::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL, 'fecha_desde');
        }

        if ($fecha_hasta != "") {
            $criterio->add(VtaNotaCredito::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL, 'fecha_hasta');
        }

        $criterio->add(VtaNotaCredito::GEN_ATTR_CAE, Criterio::VACIO, Criterio::IGUAL); // solo CAE vacio

        $criterio->addTabla(VtaNotaCredito::GEN_TABLA);
        $criterio->addRealJoin(VtaNotaCreditoTipoEstado::GEN_TABLA, VtaNotaCreditoTipoEstado::GEN_ATTR_ID, VtaNotaCredito::GEN_ATTR_VTA_NOTA_CREDITO_TIPO_ESTADO_ID);
        $criterio->setCriterios();

        $vta_nota_creditos = VtaNotaCredito::getVtaNotaCreditos($paginador = null, $criterio, $estado = null, $arr_ordens = false);
        return $vta_nota_creditos;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/12/2019
     * @modificado_por Esteban Martinez
     * @modificado 06/01/2019
     */
    public function getArrComprobantesParaAtender($fecha_desde, $fecha_hasta) {
        $vta_tipo_nota_creditos = VtaTipoNotaCredito::getVtaTipoNotaCreditos();
        $vta_punto_ventas = VtaPuntoVenta::getVtaPuntoVentas();
        $arr_nro_comprobantes_inexistentes = array();

        foreach ($vta_punto_ventas as $vta_punto_venta) {
            foreach ($vta_tipo_nota_creditos as $vta_tipo_nota_credito) {
                $arr_nro_comprobantes = array();
                $array_keys_arr_nro_comprobante = array();
                $vta_nota_creditos = self::getVtaNotaCreditosXVtaTipoNotaCreditoYFechaEmision($vta_punto_venta->getId(), $vta_tipo_nota_credito->getId(), $fecha_desde, $fecha_hasta);

                if (count($vta_nota_creditos) > 0) {
                    foreach ($vta_nota_creditos as $vta_nota_credito) {
                        if (array_key_exists($vta_nota_credito->getNumeroNotaCredito(), $arr_nro_comprobantes)) {
                            $mensaje = "Comprobante duplicado nro '" . $vta_nota_credito->getNumeroNotaCredito() . "' - " . $vta_tipo_nota_credito->getDescripcion() . " (" . $vta_punto_venta->getDescripcion() . ")";
                            $arr_nro_comprobantes_inexistentes[$i] = array('nro_comprobante' => $vta_nota_credito->getNumeroNotaCredito(), 'mensaje' => $mensaje);
                        }
                        $arr_nro_comprobantes[$vta_nota_credito->getNumeroNotaCredito()] = $vta_nota_credito;
                    }

                    $array_keys_arr_nro_comprobantes = array_keys($arr_nro_comprobantes);

                    $primer_nro_comprobante = $array_keys_arr_nro_comprobantes[0];
                    $ultimo_nro_comprobante = $array_keys_arr_nro_comprobantes[count($array_keys_arr_nro_comprobantes) - 1];

                    if ($primer_nro_comprobante != '' && $ultimo_nro_comprobante != '') {
                        for ($i = $primer_nro_comprobante; $i <= $ultimo_nro_comprobante; $i++) {
                            if (!in_array($i, $array_keys_arr_nro_comprobantes)) {
                                $mensaje = "No se encuentra el comprobante nro '" . $i . "' - " . $vta_tipo_nota_credito->getDescripcion() . " (" . $vta_punto_venta->getDescripcion() . ")";
                                $arr_nro_comprobantes_inexistentes[$i] = array('nro_comprobante' => $i, 'mensaje' => $mensaje);
                            }
                        }
                    } else {
                        $mensaje = "Hay comprobantes sin nro";
                        $arr_nro_comprobantes_inexistentes[$i] = array('nro_comprobante' => $i, 'mensaje' => $mensaje);
                    }
                }
            }
        }

        return $arr_nro_comprobantes_inexistentes;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/12/2019
     * @modificado_por Esteban Martinez
     * @modificado 06/01/2019
     */
    static function getVtaNotaCreditosXVtaTipoNotaCreditoYFechaEmision($vta_punto_venta_id, $vta_tipo_nota_credito_id, $fecha_desde, $fecha_hasta) {
        $vta_nota_creditos = array();
        if ($vta_tipo_nota_credito_id) {
            $criterio = new Criterio();
            if ($fecha_desde != '') {
                $criterio->add(VtaNotaCredito::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
            }

            if ($fecha_hasta != '') {
                $criterio->add(VtaNotaCredito::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);
            }

            $criterio->add(VtaNotaCredito::GEN_ATTR_VTA_TIPO_NOTA_CREDITO_ID, $vta_tipo_nota_credito_id, Criterio::IGUAL);
            $criterio->add(VtaNotaCredito::GEN_ATTR_VTA_PUNTO_VENTA_ID, $vta_punto_venta_id, Criterio::IGUAL);
            $criterio->add(VtaNotaCredito::GEN_ATTR_CAE, Criterio::VACIO, Criterio::DISTINTO);
            $criterio->addTabla(VtaNotaCredito::GEN_TABLA);
            $criterio->addOrden(VtaNotaCredito::GEN_ATTR_NUMERO_NOTA_CREDITO_COMPLETO, Criterio::_ASC);
            $criterio->setCriterios();

            $vta_nota_creditos = VtaNotaCredito::getVtaNotaCreditos($paginador = null, $criterio, $estado = null, $arr_ordens = false);
        }

        return $vta_nota_creditos;
    }

    /*
     * Metodo que verifica si la nota_credito tiene alguna solicitud con nro de comprobante asignado 
     * que fue autorizada en AFIP pero no registrada en sistema 
     */

    public function getWsFeOpeSolicitudConNroComprobanteAutorizadoEnAfip() {

        $wsaa = new WsAa($this->getGralEmpresa());

        // Controlo la fecha de expiracion del TA que tengo o genero uno nuevo.
        if ($wsaa->get_expiration() < date("c")) {
            // Genera el "Ticket de Acceso" (TA)
            if (!$wsaa->generar_TA()) { // Retorna False si hay algun error.
                $error['descripcion'] = "Error al obtener el Ticket de Acceso.";
                $errores[] = $error;
            }
        }

        $ws_afip = new WsAfip($this->getGralEmpresa()->getCuit());

        // Carga el archivo TA.xml
        $ws_afip->openTA();

        $ws_fe_ope_solicituds = $this->getWsFeOpeSolicitudsXVtaNotaCreditoWsFeOpeSolicitud();
        foreach ($ws_fe_ope_solicituds as $ws_fe_ope_solicitud) {

            $ws_fe_afip_punto_venta = $ws_fe_ope_solicitud->getWsFeAfipPuntoVenta();
            $ws_fe_afip_comprobante_desde = $ws_fe_ope_solicitud->getWsFeAfipComprobanteDesde();
            $ws_fe_afip_tipo_comprobante = $ws_fe_ope_solicitud->getWsFeAfipTipoComprobante();

            //Gral::pr($ws_fe_afip_punto_venta);
            //Gral::pr($ws_fe_afip_comprobante_desde);
            //Gral::pr($ws_fe_afip_tipo_comprobante);

            $datos[$ws_fe_ope_solicitud->getId()] = $ws_afip->FECompConsultar($ws_fe_afip_punto_venta, $ws_fe_afip_comprobante_desde, $ws_fe_afip_tipo_comprobante);
        }
        return $datos;
    }

    /**
     * 
     * @param type $nro_comprobante
     */
    public function setAfipAnomaliaDesvincularNroComprobante($nro_comprobante) {
        $ws_fe_ope_solicituds = $this->getWsFeOpeSolicitudsXVtaNotaCreditoWsFeOpeSolicitud();

        foreach ($ws_fe_ope_solicituds as $ws_fe_ope_solicitud) {
            $ws_fe_afip_comprobante_desde = $ws_fe_ope_solicitud->getWsFeAfipComprobanteDesde();

            if ($nro_comprobante == $ws_fe_afip_comprobante_desde) {
                $sql = "UPDATE ws_fe_ope_solicitud "
                        . "SET "
                        . "ws_fe_afip_comprobante_desde = '', "
                        . "ws_fe_afip_comprobante_hasta = '' "
                        . "WHERE id = " . $ws_fe_ope_solicitud->getId();
                //Gral::_echo($sql);
                $ejec = new Ejecucion();
                $ejec->setSql($sql);
                $ejec->execute();
            }
        }
    }

    /**
     * 
     * @param type $ws_fe_ope_solicitud
     */
    public function setAfipAnomaliaClonarNroComprobante($ws_fe_ope_solicitud) {

        $arr_comprobantes_afip = $this->getWsFeOpeSolicitudConNroComprobanteAutorizadoEnAfip();
        $arr_comprobante_afip = $arr_comprobantes_afip[$ws_fe_ope_solicitud->getId()];

        $afip_codigo_autorizacion = $arr_comprobante_afip['codigo_autorizacion'];
        $afip_fecha_vencimiento = $arr_comprobante_afip['fecha_vencimiento'];
        $afip_comprobante_desde = $arr_comprobante_afip['comprobante_desde'];
        $afip_comprobante_fecha = $arr_comprobante_afip['comprobante_fecha'];
        $afip_fecha_proceso = $arr_comprobante_afip['fecha_proceso'];
        $afip_tipo_documento = $arr_comprobante_afip['tipo_documento'];
        $afip_resultado = $arr_comprobante_afip['resultado'];
        $afip_concepto = $arr_comprobante_afip['concepto'];
        $afip_punto_venta = $arr_comprobante_afip['punto_venta'];
        $afip_numero_documento = $arr_comprobante_afip['numero_documento'];
        $afip_tipo_comprobante = $arr_comprobante_afip['tipo_comprobante'];

        $afip_numero_punto_venta = str_pad($afip_punto_venta, 4, 0, STR_PAD_LEFT);
        $afip_numero_comprobante_completo = str_pad($afip_punto_venta, 4, 0, STR_PAD_LEFT) . '-' . str_pad($afip_comprobante_desde, 8, 0, STR_PAD_LEFT);

        $ws_fe_ope_solicitud_respuesta = $ws_fe_ope_solicitud->getWsFeOpeSolicitudRespuesta();
        if (!$ws_fe_ope_solicitud_respuesta) {
            $ws_fe_ope_solicitud_respuesta = new WsFeOpeSolicitudRespuesta();
            $ws_fe_ope_solicitud_respuesta->setWsFeOpeSolicitudId($ws_fe_ope_solicitud->getId());
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipCae($afip_codigo_autorizacion);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipCaeFechaVencimiento($afip_fecha_vencimiento);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipComprobanteDesde($afip_comprobante_desde);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipComprobanteHasta($afip_comprobante_desde);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipComprobanteFecha($afip_comprobante_fecha);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipCuit($this->getGralEmpresa()->getCuit()); // cuit de la empresa emisora
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipFechaProceso($afip_fecha_proceso);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipTipoDocumento($afip_tipo_documento);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipNumeroDocumento($afip_numero_documento);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipPuntoVenta($afip_punto_venta);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipTipoComprobante($afip_tipo_comprobante);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipCantidadRegistro('1');
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipResultadoCabecera($afip_resultado);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipReproceso('N');
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipTipoConcepto($afip_concepto);
            $ws_fe_ope_solicitud_respuesta->setWsFeAfipResultadoDetalle($afip_resultado);
            $ws_fe_ope_solicitud_respuesta->setEstado(1);
            $ws_fe_ope_solicitud_respuesta->save();
        }
        //Gral::prr($ws_fe_ope_solicitud_respuesta);

        $vta_nota_credito_tipo_estado_actual = $this->getVtaNotaCreditoTipoEstado();
        if ($vta_nota_credito_tipo_estado_actual->getCodigo() == VtaNotaCreditoTipoEstado::TIPO_GENERADO) {
            $this->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_APROBADO_AFIP, $observacion = 'Datos clonados desde AFIP por conflicto en solicitud original de CAE');
            $this->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_PENDIENTE, $observacion = 'Datos clonados desde AFIP por conflicto en solicitud original de CAE');
        } else {
            $this->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_APROBADO_AFIP, $observacion = 'Datos clonados desde AFIP por conflicto en solicitud original de CAE');
            $this->setVtaNotaCreditoEstado($vta_nota_credito_tipo_estado_actual->getCodigo(), $observacion = 'Datos clonados desde AFIP por conflicto en solicitud original de CAE');
        }

        $sql = "UPDATE vta_nota_credito "
                . "SET "
                . "numero_nota_credito='" . $afip_comprobante_desde . "', "
                . "numero_nota_credito_completo='" . $afip_numero_comprobante_completo . "', "
                . "cae='" . $afip_codigo_autorizacion . "', "
                . "numero_punto_venta='" . $afip_numero_punto_venta . "' "
                . "WHERE id = " . $this->getId();
        //Gral::_echo($sql);
        $ejec = new Ejecucion();
        $ejec->setSql($sql);
        $ejec->execute();
    }

    /**
     * Arma la URL requerida por la AFIP con los datos del comprobante cifrado en base64
     * https://www.afip.gob.ar/fe/qr/especificaciones.asp
     * [getQRAfipComprobanteUrl description]
     * @return [string] [url cifrado en b64]
     */
    public function getAfipComprobanteUrlQR() {
        $comprobante_json = $this->getAfipComprobanteJsonQR();
        if ($comprobante_json) {
            $url = 'https://www.afip.gob.ar/fe/qr/?p=';
            $comprobante_json_b64 = base64_encode($comprobante_json);
            $url .= $comprobante_json_b64;

            return $url;
        }
        return false;
    }

    /**
     * Arma un json con los campos requeridos por la AFIP
     * https://www.afip.gob.ar/fe/qr/especificaciones.asp
     * [getQRAfipComprobanteJson description]
     * @return [array] [array de campos]
     */
    public function getAfipComprobanteJsonQR() {
        $ws_fe_ope_solicitud_respuesta = $this->getWsFeOpeSolicitudRespuestaAutorizada();
        if ($ws_fe_ope_solicitud_respuesta) {
            $ws_fe_ope_solicitud = $ws_fe_ope_solicitud_respuesta->getWsFeOpeSolicitud();
            if ($ws_fe_ope_solicitud) {
                $arr_campos = array();

                $ver = 1;
                $fecha = $this->getFechaEmision();
                $cuit = $ws_fe_ope_solicitud_respuesta->getWsFeAfipCuit();
                $punto_venta = $ws_fe_ope_solicitud->getWsFeAfipPuntoVenta();
                $tipo_comprobante = $ws_fe_ope_solicitud->getWsFeAfipTipoComprobante();
                $numero_comprobante = $ws_fe_ope_solicitud_respuesta->getWsFeAfipComprobanteDesde();
                $importe = $ws_fe_ope_solicitud->getWsFeAfipImporteTotal();
                $importe = number_format($importe, 2, '.', '');

                $moneda = $ws_fe_ope_solicitud->getWsFeAfipTipoMoneda();
                $cotizacion = 1;
                $tipo_documento_receptor = $ws_fe_ope_solicitud_respuesta->getWsFeAfipTipoDocumento();
                $numero_documento_receptor = $ws_fe_ope_solicitud_respuesta->getWsFeAfipNumeroDocumento();
                $tipo_codigo_autorizacion = 'E';
                $codigo_autorizacion = $ws_fe_ope_solicitud_respuesta->getWsFeAfipCae();

                $arr_campos['ver'] = $ver;
                $arr_campos['fecha'] = $fecha;
                $arr_campos['cuit'] = $cuit;
                $arr_campos['ptoVta'] = $punto_venta;
                $arr_campos['tipoCmp'] = $tipo_comprobante;
                $arr_campos['nroCmp'] = $numero_comprobante;
                $arr_campos['importe'] = $importe;
                $arr_campos['moneda'] = $moneda;
                $arr_campos['ctz'] = $cotizacion;
                $arr_campos['tipoDocRec'] = $tipo_documento_receptor;
                $arr_campos['nroDocRec'] = $numero_documento_receptor;
                $arr_campos['tipoCodAut'] = $tipo_codigo_autorizacion;
                $arr_campos['codAut'] = $codigo_autorizacion;

                //return $arr_campos;
                return json_encode($arr_campos);
            }
        }

        return false;
    }

    /**
     * [getWsFeOpeSolicitudRespuestaAutorizada description]
     * @return [coleccion] [La respuesta a la solicitud]
     */
    public function getWsFeOpeSolicitudRespuestaAutorizada() {
        $ws_fe_ope_solicituds = $this->getWsFeOpeSolicitudsXVtaNotaCreditoWsFeOpeSolicitud();
        foreach ($ws_fe_ope_solicituds as $ws_fe_ope_solicitud) {
            $ws_fe_ope_solicitud_respuesta = $ws_fe_ope_solicitud->getWsFeOpeSolicitudRespuesta();
            if ($ws_fe_ope_solicitud_respuesta) {
                $cae = $ws_fe_ope_solicitud_respuesta->getWsFeAfipCae();

                if (trim($cae) != '') {
                    return $ws_fe_ope_solicitud_respuesta;
                }
            }
        }
        return false;
    }

    public function getCodigoOpCliente(){
        return ''; // para evitar errores en vta_comprobante_gestion
    }

    /**
     * Actualiza el resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function setActualizarResumenComprobante() {
        $vta_nota_credito_importe = $this->getVtaNotaCreditoImporte();

        if (!$vta_nota_credito_importe) {
            $vta_nota_credito_importe = new VtaNotaCreditoImporte();
        }

        $importe_subtotal = $this->getVtaNotaCreditoSubtotal(false);
        $importe_iva = $this->getVtaNotaCreditoIva();
        $importe_tributo = $this->getVtaNotaCreditoTributo();
        $importe_total = $importe_subtotal + $importe_iva + $importe_tributo;

        $vta_nota_credito_importe->setDescripcion($this->getNumeroComprobanteCompleto());
        $vta_nota_credito_importe->setVtaNotaCreditoId($this->getId());
        $vta_nota_credito_importe->setImporteSubtotal($importe_subtotal);
        $vta_nota_credito_importe->setImporteIva($importe_iva);
        $vta_nota_credito_importe->setImporteTributo($importe_tributo);
        $vta_nota_credito_importe->setImporteTotal($importe_total);
        $vta_nota_credito_importe->setEstado(1);
        $vta_nota_credito_importe->save();

        return $vta_nota_credito_importe;
    }

    /**
     * Retorna un resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function getResumenComprobante() {
        $o = $this->getVtaNotaCreditoImporte();
        if ($o) {
            return $o;
        }
        
        return new VtaNotaCreditoImporte();
    }
    
    /**
     * donde se utilice el pdf agregar un parametro mas y enviar este hash.
     * despues donde se quiera acceder , instanciar objeto y llamar a este metodo, y comprar con hash y hash recibido
     */
    public function getHash() {
        return md5($this->getCreado());
    }
    
    /**
     * Metodo que retorna el ultimo numero de comprobante asignado
     * @return boolean
     */
    public function getUltimoNumeroComprobante(){
        $ultimo = 0;

        $c = new Criterio();
        $c->addSelect(self::GEN_ATTR_NUMERO_NOTA_CREDITO.'::INTEGER');
        $c->add(self::GEN_ATTR_VTA_TIPO_NOTA_CREDITO_ID, $this->getVtaTipoNotaCreditoId(), Criterio::IGUAL);
        $c->add(self::GEN_ATTR_VTA_PUNTO_VENTA_ID, $this->getVtaPuntoVentaId(), Criterio::IGUAL);
        $c->add(self::GEN_ATTR_NUMERO_NOTA_CREDITO, Criterio::VACIO, Criterio::DISTINTO);
        $c->addTabla(self::GEN_TABLA);
        $c->addOrden(self::GEN_ATTR_NUMERO_NOTA_CREDITO.'::INTEGER', Criterio::_DESC);
        $c->setCriterios();
        
        $p = new Paginador(1, 1);
        
        $vta_nota_creditos = VtaNotaCredito::getVtaNotaCreditos($p, $c);
        foreach($vta_nota_creditos as $vta_nota_credito){
            $numero_comprobante = $vta_nota_credito->getNumeroComprobante();
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
    public function setAutogenerarNumeroComprobante($asignar_cae = true){
        $vta_punto_venta = $this->getVtaPuntoVenta();
        $cae = $this->getCae();
        $numero_punto_venta = $this->getNumeroPuntoVenta();
        
        if($vta_punto_venta->getAutoincremental()){
            if(trim($cae) == ''){
                $numero_comprobante = $this->getProximoNumeroComprobante();
                $numero_comprobante_pad = str_pad($numero_comprobante, DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);
                $numero_comprobante_completo = $numero_punto_venta.'-'.$numero_comprobante_pad;
                $this->setNumeroNotaCredito($numero_comprobante_pad);
                $this->setNumeroNotaCreditoCompleto($numero_comprobante_completo);
                if($asignar_cae){
                    $this->setCae(ConfVariable::CODIGO_CAE_ALTERNATIVO);
                }
                $this->save();
                //Gral::prr($this);
                
                return true;
            }
        }
        return false;
    }
    
    /**
     * Autor: Baez Julian
     * Fecha: 24/06/2022 12:00
     * @param type $gral_tipo_iva_codigo
     * @return type
     */
    public function getImporteTotalPorTipoIVA($gral_tipo_iva_codigo){
        $importe_total = 0;
        
        $vta_nota_credito_vta_factura_vta_orden_ventas = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentas(null, null, true);
        foreach($vta_nota_credito_vta_factura_vta_orden_ventas as $vta_nota_credito_vta_factura_vta_orden_venta){
            $importe_total+=$vta_nota_credito_vta_factura_vta_orden_venta->getImporteTotalPorTipoIVA($gral_tipo_iva_codigo);
        }
        
        $vta_nota_credito_items = $this->getVtaNotaCreditoItems(null, null, true);
        foreach ($vta_nota_credito_items as $vta_nota_credito_item) {
            $importe_total+=$vta_nota_credito_item->getImporteTotalPorTipoIVA($gral_tipo_iva_codigo);
        }
        
        return $importe_total;
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 09/09/2022 15:30
     * Metodo que reasigna el numero de comprobante al registro, en el caso de 
     * posibles errores de impresion o danio del papel
     * @param type $nro_comprobante
     * @param type $nota_interna
     */
    public function setReasignarNumeroComprobante($nro_comprobante, $nota_interna){
        
        $numero_comprobante_actual = $this->getNumeroNotaCredito();
        $numero_comprobante_nuevo = $nro_comprobante;
        
        // ---------------------------------------------------------------------
        // se genera una nueva factura con estado de ANULADA con el numero que se modifico
        // ---------------------------------------------------------------------
        $vta_nota_credito = clone $this;
        $vta_nota_credito->setId(null, false);
        $vta_nota_credito->save();
        
        // --------------------------------------------------------------------
        // se setea el codigo de la factura
        // --------------------------------------------------------------------
        $vta_nota_credito->setCodigo(self::PREFIJO_NOTA_CREDITO . str_pad($vta_nota_credito->getId(), 8, 0, STR_PAD_LEFT));
        $vta_nota_credito->save();
        
        $vta_nota_credito->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_ANULADO_RENUMERADO, 'Reasignacion de Numero de Comprobante - Cambia '.$numero_comprobante_actual.' por '.$numero_comprobante_nuevo.' - '.$nota_interna);
        
        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_nota_credito->setActualizarResumenComprobante();
        
        // ---------------------------------------------------------------------
        // se reasigna el numero de factura
        // ---------------------------------------------------------------------
        $numero_sucursal = $this->getNumeroSucursal();
        $numero_punto_venta = $this->getNumeroPuntoVenta();
        $numero_comprobante_pad = str_pad($nro_comprobante, DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);
        $numero_comprobante_completo = $numero_sucursal.'-'.$numero_punto_venta.'-'.$numero_comprobante_pad;
        
        $this->setNumeroNotaCredito($numero_comprobante_pad);
        $this->setNumeroNotaCreditoCompleto($numero_comprobante_completo);
        $this->save();   

        $vta_nota_credito_tipo_estado_actual = $this->getVtaNotaCreditoTipoEstado();
        
        $this->setVtaNotaCreditoEstado($vta_nota_credito_tipo_estado_actual->getCodigo(), 'Reasignacion de Numero de Comprobante - Cambia '.$numero_comprobante_actual.' por '.$numero_comprobante_nuevo.' - Genero NotaCredito de Transicion '.$vta_nota_credito->getCodigo().' - '.$nota_interna);
        
    }
    
    /**
     * 
     * @return string
     */
    public function getCondicionVentaDescripcion(){
        switch ($this->getGralFpFormaPago()->getCodigo()){
            case GralFpFormaPago::TIPO_CUENTA_CORRIENTE:
                $texto = 'Credito';
                break;
            default:
                $texto = 'Contado';
        }
        return $texto;
    }
    
    /**
     * 
     */
    public function getArrItemsFormateadoParaSIFEN(){
        $arr_items = array();
        
        // ---------------------------------------------------------------------
        // NC de Anulacion de Facturas (con OV)
        // ---------------------------------------------------------------------
        $vta_nota_credito_vta_factura_vta_orden_ventas = $this->getVtaNotaCreditoVtaFacturaVtaOrdenVentasHabilitados();
        foreach($vta_nota_credito_vta_factura_vta_orden_ventas as $vta_nota_credito_vta_factura_vta_orden_venta){
            $vta_factura_vta_orden_venta = $vta_nota_credito_vta_factura_vta_orden_venta->getVtaFacturaVtaOrdenVenta();
            $vta_orden_venta = $vta_factura_vta_orden_venta->getVtaOrdenVenta();
            $ins_insumo = $vta_orden_venta->getInsInsumo();
            $gral_tipo_iva = $vta_nota_credito_vta_factura_vta_orden_venta->getGralTipoIva();
            $ins_unidad_medida = $ins_insumo->getInsUnidadMedida();

            // -----------------------------------------------------------------
            // relaciones codigos ekuatia
            // -----------------------------------------------------------------
            $eku_param_unidad_medida = $ins_unidad_medida->getEkuParamUnidadMedidaXEkuParamUnidadMedidaInsUnidadMedida();
            $eku_param_tipo_afectacion_tributaria = $gral_tipo_iva->getEkuParamTipoAfectacionTributariaXEkuParamTipoAfectacionTributariaGralTipoIva();
            
            
            /* ***------------------------------------------------------------------------------------------***** */ //$vta_nota_credito_vta_factura_vta_orden_venta = new VtaNotaCreditoVtaFacturaVtaOrdenVenta(); // ******
            
            
            $cantidad = $vta_nota_credito_vta_factura_vta_orden_venta->getCantidad();
            
            $importe_unitario_sin_descuento = $vta_orden_venta->getImporteUnitario();
            $importe_total_sin_descuento = $importe_unitario_sin_descuento * $cantidad;
            
            $importe_unitario = $vta_factura_vta_orden_venta->getImporteUnitario();
            $importe_total = $vta_factura_vta_orden_venta->getImporteTotal();
            $importe_total_con_iva = $vta_factura_vta_orden_venta->getImporteTotalConIva();
            
            $importe_unitario_sin_descuento_con_iva = $vta_orden_venta->getImporteUnitarioSinDescuentoConIva();
            $importe_total_sin_descuento_con_iva = $importe_unitario_sin_descuento_con_iva * $cantidad;            
            
            $descuento_unitario_porcentaje = $vta_orden_venta->getDescuento();
            $descuento_unitario_importe = $importe_unitario_sin_descuento_con_iva * ($descuento_unitario_porcentaje/100);
            $descuento_total_importe = $descuento_unitario_importe * $cantidad;

            $importe_total_con_descuento = $importe_total_sin_descuento - $descuento_total_importe;
            $importe_total_con_descuento_con_iva = $importe_total_con_iva;
            
            $importe_iva = $vta_factura_vta_orden_venta->getImporteIva();

            // ---------------------------------------------------------------------
            // se redondean los importes (se redondea y agregan 8 ceros)
            // ---------------------------------------------------------------------
            $importe_unitario = Gral::completar_decimales(Gral::rnd($importe_unitario, 4), 8);
            $importe_unitario_sin_descuento = Gral::completar_decimales(Gral::rnd($importe_unitario_sin_descuento, 4), 8);
            $importe_unitario_sin_descuento_con_iva = Gral::completar_decimales(Gral::rnd($importe_unitario_sin_descuento_con_iva, 4), 8);      
            
            $importe_total = Gral::completar_decimales(Gral::rnd($importe_total, 4), 8);
            $importe_total_sin_descuento = Gral::completar_decimales(Gral::rnd($importe_total_sin_descuento, 4), 8);
            $importe_total_sin_descuento_con_iva = Gral::completar_decimales(Gral::rnd($importe_total_sin_descuento_con_iva, 4), 8);
            $importe_total_con_descuento_con_iva = Gral::completar_decimales(Gral::rnd($importe_total_con_descuento_con_iva, 4), 8);
            
            $descuento_unitario_importe = Gral::completar_decimales(Gral::rnd($descuento_unitario_importe, 4), 8);
            $descuento_total_importe = Gral::completar_decimales(Gral::rnd($descuento_total_importe, 4), 8);   
            $importe_total_con_descuento = Gral::completar_decimales(Gral::rnd($importe_total_con_descuento, 4), 8);

            $importe_iva = Gral::completar_decimales(Gral::rnd($importe_iva, 4), 8);
            
            $arr_item = array(
                "id" => $vta_nota_credito_vta_factura_vta_orden_venta->getId(),
                "descripcion" => $vta_orden_venta->getDescripcion(),
                "codigo_interno" => $ins_insumo->getCodigoInterno(),
                "codigo_barra" => $ins_insumo->getCodigoBarra(),
                "ins_unidad_medida_id" => $ins_unidad_medida->getId(),
                "ins_unidad_medida_descripcion" => $ins_unidad_medida->getDescripcion(),
                "eku_param_unidad_medida_codigo" => $eku_param_unidad_medida->getCodigoEku(),
                "eku_param_unidad_medida_representacion" => $eku_param_unidad_medida->getRepresentacion(),
                "cantidad" => $cantidad,
                "importe_unitario" => $importe_unitario,
                "importe_unitario_sin_descuento" => $importe_unitario_sin_descuento,
                "importe_unitario_sin_descuento_con_iva" => $importe_unitario_sin_descuento_con_iva,
                "importe_total" => $importe_total,
                "importe_total_sin_descuento" => $importe_total_sin_descuento,
                "importe_total_sin_descuento_con_iva" => $importe_total_sin_descuento_con_iva,
                "importe_total_con_descuento" => $importe_total_con_descuento,
                "importe_total_con_descuento_con_iva" => $importe_total_con_descuento_con_iva,
                "proporcion_iva" => $ins_insumo->getProporcionIva(),
                "valor_iva" => $gral_tipo_iva->getValorIva(),
                "descuento_unitario_porcentaje" => $descuento_unitario_porcentaje,
                "descuento_unitario_importe" => $descuento_unitario_importe,
                "descuento_total_importe" => $descuento_total_importe,                
                "eku_param_tipo_afectacion_tributaria_codigo" => $eku_param_tipo_afectacion_tributaria->getCodigoEku(),
                "eku_param_tipo_afectacion_tributaria_descripcion" => $eku_param_tipo_afectacion_tributaria->getDescripcion(),
                "importe_iva" => $importe_iva,
            );
            
            $arr_items[] = $arr_item;
        }
    
            /* ***------------------------------------------------------------------------------------------***** */ //$vta_nota_credito_vta_factura_vta_orden_venta = new VtaNotaCreditoVtaFacturaVtaOrdenVenta(); // ******
        
        // ---------------------------------------------------------------------
        // NC de Items
        // ---------------------------------------------------------------------
        $vta_nota_credito_items = $this->getVtaNotaCreditoItemsHabilitados();
        foreach($vta_nota_credito_items as $vta_nota_credito_item){
            
            $vta_nota_credito_concepto = $vta_nota_credito_item->getVtaNotaCreditoConcepto();
            $ins_unidad_medida = InsUnidadMedida::getOxCodigo(InsUnidadMedida::TIPO_UNIDAD);            
            $gral_tipo_iva = $vta_nota_credito_item->getGralTipoIva();
    
            // -----------------------------------------------------------------
            // relaciones codigos ekuatia
            // -----------------------------------------------------------------
            $eku_param_unidad_medida = $ins_unidad_medida->getEkuParamUnidadMedidaXEkuParamUnidadMedidaInsUnidadMedida();
            $eku_param_tipo_afectacion_tributaria = $gral_tipo_iva->getEkuParamTipoAfectacionTributariaXEkuParamTipoAfectacionTributariaGralTipoIva();
            
            $cantidad = $vta_nota_credito_item->getCantidad();
            
            $importe_unitario = $vta_nota_credito_item->getImporteUnitario();
            $importe_unitario_sin_descuento = $vta_nota_credito_item->getImporteUnitarioSinDescuento();
            $importe_unitario_sin_descuento_con_iva = $vta_nota_credito_item->getImporteUnitarioSinDescuentoConIva();
            
            $importe_total = $vta_nota_credito_item->getImporteTotal();
            $importe_total_con_iva = $vta_nota_credito_item->getImporteTotalConIva();
            $importe_total_sin_descuento = $vta_nota_credito_item->getImporteTotalSinDescuento();
            $importe_total_sin_descuento_con_iva = $vta_nota_credito_item->getImporteTotalSinDescuentoConIva();
            $importe_total_con_descuento_con_iva = $vta_nota_credito_item->getImporteTotalSinDescuentoConIva();
            
            $descuento_unitario_porcentaje = $vta_nota_credito_item->getDescuento();
            $descuento_unitario_importe = $importe_unitario_sin_descuento_con_iva * ($descuento_unitario_porcentaje/100);
            $descuento_total_importe = $descuento_unitario_importe * $cantidad;
            
            $importe_total_con_descuento = $importe_total_sin_descuento - $descuento_total_importe;
            $importe_total_con_descuento_con_iva = $importe_total_con_iva;
                        
            $importe_iva = $vta_nota_credito_item->getImporteIva();
            
            // ---------------------------------------------------------------------
            // se redondean los importes (se redondea y agregan 8 ceros)
            // ---------------------------------------------------------------------
            $importe_unitario = Gral::completar_decimales(Gral::rnd($importe_unitario, 4), 8);
            $importe_unitario_sin_descuento = Gral::completar_decimales(Gral::rnd($importe_unitario_sin_descuento, 4), 8);
            $importe_unitario_sin_descuento_con_iva = Gral::completar_decimales(Gral::rnd($importe_unitario_sin_descuento_con_iva, 4), 8);      
            
            $importe_total = Gral::completar_decimales(Gral::rnd($importe_total, 4), 8);
            $importe_total_sin_descuento = Gral::completar_decimales(Gral::rnd($importe_total_sin_descuento, 4), 8);
            $importe_total_sin_descuento_con_iva = Gral::completar_decimales(Gral::rnd($importe_total_sin_descuento_con_iva, 4), 8);
            $importe_total_con_descuento_con_iva = Gral::completar_decimales(Gral::rnd($importe_total_con_descuento_con_iva, 4), 8);
            
            $descuento_unitario_importe = Gral::completar_decimales(Gral::rnd($descuento_unitario_importe, 4), 8);
            $descuento_total_importe = Gral::completar_decimales(Gral::rnd($descuento_total_importe, 4), 8);   
            $importe_total_con_descuento = Gral::completar_decimales(Gral::rnd($importe_total_con_descuento, 4), 8);

            $importe_iva = Gral::completar_decimales(Gral::rnd($importe_iva, 4), 8);
            
            $arr_item = array(
                "id" => $vta_nota_credito_item->getId(),
                "descripcion" => $vta_nota_credito_item->getDescripcion(),
                "codigo_interno" => $vta_nota_credito_item->getCodigo(),
                "codigo_barra" => "",
                "ins_unidad_medida_id" => $ins_unidad_medida->getId(),
                "ins_unidad_medida_descripcion" => $ins_unidad_medida->getDescripcion(),
                "eku_param_unidad_medida_codigo" => $eku_param_unidad_medida->getCodigoEku(),
                "eku_param_unidad_medida_representacion" => $eku_param_unidad_medida->getRepresentacion(),
                "cantidad" => $cantidad,
                "importe_unitario" => $importe_unitario,
                "importe_unitario_sin_descuento" => $importe_unitario_sin_descuento,
                "importe_unitario_sin_descuento_con_iva" => $importe_unitario_sin_descuento_con_iva,
                "importe_total" => $importe_total,
                "importe_total_sin_descuento" => $importe_total_sin_descuento,
                "importe_total_sin_descuento_con_iva" => $importe_total_sin_descuento_con_iva,
                "importe_total_con_descuento" => $importe_total_con_descuento,
                "importe_total_con_descuento_con_iva" => $importe_total_con_descuento_con_iva,
                "proporcion_iva" => 100,
                "valor_iva" => $gral_tipo_iva->getValorIva(),
                "descuento_unitario_porcentaje" => $descuento_unitario_porcentaje,
                "descuento_unitario_importe" => $descuento_unitario_importe,
                "descuento_total_importe" => $descuento_total_importe,                
                "eku_param_tipo_afectacion_tributaria_codigo" => $eku_param_tipo_afectacion_tributaria->getCodigoEku(),
                "eku_param_tipo_afectacion_tributaria_descripcion" => $eku_param_tipo_afectacion_tributaria->getDescripcion(),
                "importe_iva" => $importe_iva,
            );
            
            $arr_items[] = $arr_item;
        }        
        
        return $arr_items;
    }
    
    /**
     * 
     */
    public function getEkuDeActualDelComprobante(){
        
        $array = array(
            array('campo' => EkuDeVtaNotaCredito::GEN_ATTR_MIN_VTA_NOTA_CREDITO_ID, 'valor' => $this->getId()),
            array('campo' => EkuDeVtaNotaCredito::GEN_ATTR_MIN_ACTUAL, 'valor' => 1),
        );
        $eku_de_vta_nota_credito = EkuDeVtaNotaCredito::getOxArray($array);
        if($eku_de_vta_nota_credito){
            return $eku_de_vta_nota_credito->getEkuDe();
        }
        
        return false;
    }
    
    /**
     * 
     */
    public function getEkuDesDelComprobante(){
        
        $eku_des = $this->getEkuDesXEkuDeVtaNotaCredito();
        return $eku_des;
    }
    
    /**
     * 
     */
    public function getSIFEN_DTE_URL(){
        $url = "";
        
        $eku_de = $this->getEkuDeActualDelComprobante();
        $url = $eku_de->getSIFEN_DTE_URL();
        
        return $url;
    }    

    /**
     * 
     */
    public function getSIFEN_DTE_XML(){
        $xml = "";
        
        $eku_de = $this->getEkuDeActualDelComprobante();
        $xml = $eku_de->getSIFEN_DTE_XML();
        
        return $xml;
    }
    
    /**
     * 
     */
    public function setAutorizarDE_SIFEN(){
        return false;
        
        // ---------------------------------------------------------------------
        // se inicializa DE
        // ---------------------------------------------------------------------
        $eku_de = EkuDe::setInicializarDEDesdeComprobante(EkuParamTipoDe::TIPO_NOTA_DE_CREDITO_ELECTRONICA, $this);
        
        // ---------------------------------------------------------------------
        // se genera XML
        // ---------------------------------------------------------------------
        $xml_de = $eku_de->setGenerarXmlDE();
        //Gral::prr($xml_de);
        //echo $xml_de;

        // ---------------------------------------------------------------------
        // se firma XML
        // ---------------------------------------------------------------------
        $xml_de_firmado = $eku_de->setFirmarXmlDERobRichards($xml_de);
        //echo($xml_de_firmado);
        
        $eku_de->setInicializarDEGrupoJ001(); // Campos Fuera de la Firma

        // ---------------------------------------------------------------------
        // se agrega QR
        // ---------------------------------------------------------------------
        $xml_de_firmado_con_qr = $eku_de->setAgregarQrAlXmlDEFirmado($xml_de_firmado);

        // ---------------------------------------------------------------------
        // se envia al SIFEN
        // ---------------------------------------------------------------------
        $eku_de = EkuDeAsch01Req::setEkuatiaRecibeDe($eku_de->getId(), $xml_de_firmado_con_qr);

        // ---------------------------------------------------------------------
        // se procesa respuesta
        // ---------------------------------------------------------------------
        $eku_de_ope_tipo_estado = $eku_de->getEkuDeOpeTipoEstado();
        
        if($eku_de_ope_tipo_estado){
            $observacion = $eku_de->getDescripcionCompleta();
            
            switch($eku_de_ope_tipo_estado->getCodigo()){
                case EkuDeOpeTipoEstado::TIPO_APROBADO:
                        $this->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_APROBADO_AFIP, $observacion);
                        $this->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_PENDIENTE);

                        // -----------------------------------------------------
                        // se actualiza codigo de autorizacion
                        // -----------------------------------------------------
                        //$this->setCae(ConfVariable::CODIGO_CAE_AUTORIZADO);
                        $this->setCae($eku_de->getEkuA002IdCdc());
                        $this->save();
                    break;
                case EkuDeOpeTipoEstado::TIPO_APROBADO_CON_OBSERVACION:
                        $this->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_OBSERVADO_AFIP, $observacion);
                        $this->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_APROBADO_AFIP, $observacion);
                        $this->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_PENDIENTE);

                        // -----------------------------------------------------
                        // se actualiza codigo de autorizacion
                        // -----------------------------------------------------
                        //$this->setCae(ConfVariable::CODIGO_CAE_AUTORIZADO);
                        $this->setCae($eku_de->getEkuA002IdCdc());
                        $this->save();
                    break;
                case EkuDeOpeTipoEstado::TIPO_RECHAZADO:
                        $this->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_RECHAZADO_AFIP, $observacion);
                    break;
            }
        }
        
        return true;
    }
    
    /**
     * 
     */
    public function getConsultarEventosEnSIFEN(){
        $eku_de = $this->getEkuDeActualDelComprobante();
        if($eku_de){
            $array_eventos_sifen = $eku_de->getConsultarEventosEnSIFEN();            
            return $array_eventos_sifen;
        }
    }

    /**
     * 
     */
    public function setImportarEventosEnSIFEN(){
        $array_eventos_sifen = $this->getConsultarEventosEnSIFEN();
        
        if($array_eventos_sifen && $array_eventos_sifen['eventos']){
            foreach($array_eventos_sifen['eventos'] as $i => $array_datos_sifen_evento){ 
                $eku_de_id = $array_eventos_sifen['eku_de_id'];
                
                $eku_eve_tipo_evento_codigo = $array_datos_sifen_evento['eku_eve_tipo_evento_codigo'];
                $id = $array_datos_sifen_evento['id'];
                $mOtEve = $array_datos_sifen_evento['mOtEve'];
                $dFecFirma = $array_datos_sifen_evento['dFecFirma'];

                $eku_de = EkuDe::getOxId($eku_de_id);
                $eku_eve_tipo_evento = EkuEveTipoEvento::getOxCodigo($eku_eve_tipo_evento_codigo);
                
                // -------------------------------------------------------------
                // se importa evento
                // -------------------------------------------------------------
                $evu_eve = $eku_de->setImporteEventoEmisor($array_datos_sifen_evento);
                
                if($evu_eve){
                    switch ($eku_eve_tipo_evento->getCodigo()){
                        // ---------------------------------------------------------
                        // Evento Cancelacion
                        // ---------------------------------------------------------
                        case EkuEveTipoEvento::TIPO_CANCELACION:
                            $observacion = 'Comprobante Cancelado - ID Evento: '.$id.' - Motivo: '.$mOtEve.' - Fecha firma: '.$dFecFirma;
                            $this->setVtaNotaCreditoEstado(VtaNotaCreditoTipoEstado::TIPO_CANCELADO_SIFEN, $observacion);
                            break;
                    }
                }
            }
            
            return $array_eventos_sifen;
        }
        return false;
    }
    
    /**
     * 
     */
    public function setImporteEventoEmisorCancelacion(){
        
    }
    
    /**
     * 
     */
    public function setGenerarEventoEmisorCancelacion($observacion){
        $eku_de = $this->getEkuDeActualDelComprobante();
        if($eku_de){
            // ---------------------------------------------------------------------
            // se registra el evento
            // ---------------------------------------------------------------------
            $eku_eve_resp = EkuEve::setRegistrarEventoCancelacion($eku_de, $observacion);
            
            if($eku_eve_resp){
                // importar evento desde SIFEN ?
            }
            
            return $eku_eve_resp;
        }
        return false;
    }

    /**
     * 
     */
    public function setGenerarEventoEmisorInutilizacion($observacion){
        $eku_de = $this->getEkuDeActualDelComprobante();
        if($eku_de){
            // ---------------------------------------------------------------------
            // se registra el evento
            // ---------------------------------------------------------------------
            $eku_eve_resp = EkuEve::setRegistrarEventoInutilizacion($eku_de, $observacion); // ********** FALTA PROGRAMAR
            
            if($eku_eve_resp){
                // importar evento desde SIFEN ?
            }
            
            return $eku_eve_resp;
        }
        return false;
    }

}

?>