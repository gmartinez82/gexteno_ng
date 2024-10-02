<?php

require_once "base/BVtaAjusteDebe.php";

class VtaAjusteDebe extends BVtaAjusteDebe {

    const PREFIJO_AJUSTE_DEBE = 'AJD-';

    public function getTipoComprobanteSiglas() {
        return "AJT";
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 09:00 hs.
     * Metodo que genera una ajuste_debe.
     * @return Obj VtaAjusteDebe
     */
    static function setInicializarVtaAjusteDebeOrdenVenta($vta_presupuesto = false, $cmb_vta_preventista_id, $cmb_vta_comprador_id, $cmb_vta_vendedor_id, $vta_orden_venta_ids, $vta_orden_venta_cantidads, $cli_cliente_id = 0, $txt_persona_descripcion, $cmb_gral_tipo_documento_id, $txt_persona_documento, $txt_persona_email, $gral_empresa_id, $vta_punto_venta_id, $gral_fp_forma_pago_id, $gral_fp_cuota_id, $txt_fecha_vencimiento, $txt_fecha_emision, $gral_actividad_id, $gral_escenario_id, $vta_tipo_ajuste_debe_id = 0, $ws_fe_param_tipo_concepto_id = 1, $txa_nota_publica = '', $observacion = '', $porcentaje_iva = 0) {
        // se determina el origen del comprobante
        $vta_tipo_origen_ajuste_debe = VtaTipoOrigenAjusteDebe::getOxCodigo(VtaTipoOrigenAjusteDebe::ORIGEN_ORDEN_VENTA);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));
        $vta_punto_venta = VtaPuntoVenta::getOxId($vta_punto_venta_id);

        $vta_ajuste_debe = new VtaAjusteDebe();

        $vta_ajuste_debe->setVtaTipoOrigenAjusteDebeId($vta_tipo_origen_ajuste_debe->getId());

        if ($vta_presupuesto) {
            $vta_ajuste_debe->setVtaPresupuestoId($vta_presupuesto->getId());
            $vta_ajuste_debe->setGralSucursalId($vta_presupuesto->getGralSucursalId());
        }

        $vta_ajuste_debe->setVtaPreventistaId($cmb_vta_preventista_id);
        $vta_ajuste_debe->setVtaCompradorId($cmb_vta_comprador_id);
        $vta_ajuste_debe->setVtaVendedorId($cmb_vta_vendedor_id);
        $vta_ajuste_debe->setGralEmpresaId($gral_empresa_id);
        $vta_ajuste_debe->setVtaPuntoVentaId($vta_punto_venta_id);
        $vta_ajuste_debe->setNumeroPuntoVenta(str_pad($vta_punto_venta->getNumero(), 4, 0, STR_PAD_LEFT));
        $vta_ajuste_debe->setGralFpFormaPagoId($gral_fp_forma_pago_id);
        $vta_ajuste_debe->setGralFpCuotaId($gral_fp_cuota_id);
        $vta_ajuste_debe->setGralActividadId($gral_actividad_id);
        $vta_ajuste_debe->setGralEscenarioId($gral_escenario_id);
        $vta_ajuste_debe->setFechaEmision($txt_fecha_emision);
        $vta_ajuste_debe->setFechaVencimiento($txt_fecha_vencimiento);
        if ($gral_mes) {
            $vta_ajuste_debe->setGralMesId($gral_mes->getId());
        }
        $vta_ajuste_debe->setAnio(date('Y'));
        $vta_ajuste_debe->setNotaPublica($txa_nota_publica);
        $vta_ajuste_debe->setObservacion($observacion);

        $vta_ajuste_debe->setPorcentaje($porcentaje_iva);

        $vta_ajuste_debe->setEstado(1);
        $vta_ajuste_debe->save();

        // --------------------------------------------------------------------
        // se setea el codigo de la ajuste_debe
        // --------------------------------------------------------------------
        $vta_ajuste_debe->setCodigo(self::PREFIJO_AJUSTE_DEBE . str_pad($vta_ajuste_debe->getId(), 8, 0, STR_PAD_LEFT));
        $vta_ajuste_debe->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial de la ajuste_debe
        // --------------------------------------------------------------------
        $vta_ajuste_debe_estado = $vta_ajuste_debe->setVtaAjusteDebeEstado(VtaAjusteDebeTipoEstado::TIPO_GENERADO, $observacion);


        // --------------------------------------------------------------------
        // se agregan los items a la ajuste_debe
        // --------------------------------------------------------------------
        if (!empty($vta_ajuste_debe->getId())) {
            foreach ($vta_orden_venta_ids as $vta_orden_venta_id) {
                $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
                $ins_insumo = $vta_orden_venta->getInsInsumo();
                $ins_unidad_medida_id = $ins_insumo->getInsUnidadMedidaId();
                $cantidad_a_ajustar_debe = $vta_orden_venta_cantidads[$vta_orden_venta->getId()];

                // Si no hay no trae el id de cliente busco en el presupuesto
                if ($cli_cliente_id == 0) {
                    $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
                    $cli_cliente_id = $vta_presupuesto->getCliClienteId();

                    $persona_descripcion = $vta_presupuesto->getPersonaDescripcion();
                    $gral_tipo_documento_id = $vta_presupuesto->getGralTipoDocumentoId();
                    $persona_documento = $vta_presupuesto->getPersonaDocumento();
                    $persona_email = $vta_presupuesto->getPersonaEmail();

                    $persona_descripcion = $txt_persona_descripcion;
                    $gral_tipo_documento_id = $cmb_gral_tipo_documento_id;
                    $persona_documento = $txt_persona_documento;
                    $persona_email = $txt_persona_email;
                } else {
                    $cli_cliente = CliCliente::getOxId($cli_cliente_id);
                    if ($cli_cliente) {
                        $persona_descripcion = $cli_cliente->getRazonSocial();
                        $gral_tipo_documento_id = 1;
                        $persona_documento = $cli_cliente->getCuit();
                        $persona_email = $cli_cliente->getEmail();
                    }
                }

                // --------------------------------------------------------------------------------------------
                // cambio el estado en el caso de ajuste_debe parcial o total
                // --------------------------------------------------------------------------------------------
                if ($vta_orden_venta->getCantidadDisponibleEnAjusteDebe() == $cantidad_a_ajustar_debe) {
                    $vta_orden_venta->setVtaOrdenVentaEstadoFacturacion(VtaOrdenVentaTipoEstadoFacturacion::TIPO_AJUSTE_TOTAL);
                    ////$vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_EN_AJUSTE);
                } else {
                    $vta_orden_venta->setVtaOrdenVentaEstadoFacturacion(VtaOrdenVentaTipoEstadoFacturacion::TIPO_AJUSTE_PARCIAL);
                    //$vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_EN_AJUSTE);
                }


                // --------------------------------------------------------------------------------------------
                // realiza el ajuste de stock
                // --------------------------------------------------------------------------------------------
                //$pan_panol = PanPanol::getOxId(1);
                //$observacion = 'Afectado por ajuste debe '.$vta_ajuste_debe->getCodigo();
                //$vta_orden_venta->setVtaOrdenVentaAjusteStockPorAjusteDebe($pan_panol, $cantidad_a_ajustar_debe, $observacion);


                $vta_ajuste_debe_vta_orden_venta = new VtaAjusteDebeVtaOrdenVenta();
                $vta_ajuste_debe_vta_orden_venta->setDescripcion($vta_orden_venta->getDescripcion());
                $vta_ajuste_debe_vta_orden_venta->setVtaAjusteDebeId($vta_ajuste_debe->getId());
                $vta_ajuste_debe_vta_orden_venta->setVtaOrdenVentaId($vta_orden_venta->getId());
                $vta_ajuste_debe_vta_orden_venta->setInsInsumoId($vta_orden_venta->getInsInsumoId());
                $vta_ajuste_debe_vta_orden_venta->setInsUnidadMedidaId($ins_unidad_medida_id);
                $vta_ajuste_debe_vta_orden_venta->setCantidad($cantidad_a_ajustar_debe);
                $vta_ajuste_debe_vta_orden_venta->setImporteUnitario($vta_orden_venta->getImporteUnitarioConDescuento());
                $vta_ajuste_debe_vta_orden_venta->setCodigo('');
                $vta_ajuste_debe_vta_orden_venta->setObservacion('');
                $vta_ajuste_debe_vta_orden_venta->setEstado(1);
                $vta_ajuste_debe_vta_orden_venta->setGralTipoIvaId($vta_orden_venta->getGralTipoIvaId());

                $vta_ajuste_debe_vta_orden_venta->save();
            }
        }

        // --------------------------------------------------------------------
        // se vincula el cliente a la ajuste_debe, si hubiese cliente
        // --------------------------------------------------------------------  
        // Si viene como parametro (!=0) o si lo toma del presupuesto (!is_null)
        if ($cli_cliente_id != 0 && !is_null($cli_cliente_id)) {
            $cli_cliente = CliCliente::getOxId($cli_cliente_id);
            $persona_descripcion = $cli_cliente->getRazonSocial();

            if ($cli_cliente) {
                $vta_ajuste_debe->setCliClienteId($cli_cliente->getId());
                $vta_ajuste_debe->setRazonSocial($cli_cliente->getRazonSocial());
                $vta_ajuste_debe->setDomicilioLegal($cli_cliente->getDomicilioLegal());
                $vta_ajuste_debe->setCuit($cli_cliente->getCuit());
                $vta_ajuste_debe->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
                $vta_ajuste_debe->setGralTipoPersoneriaId($cli_cliente->getGralTipoPersoneriaId());
            }
        }

        // --------------------------------------------------------------------
        // se determina la condicion de iva de la ajuste_debe
        // --------------------------------------------------------------------
        $gral_condicion_iva = self::getDeterminacionGralCondicionIva($cli_cliente_id);
        $vta_ajuste_debe->setGralCondicionIvaId($gral_condicion_iva->getId());

        // --------------------------------------------------------------------
        // se determina el tipo de ajuste_debe
        // --------------------------------------------------------------------
        $vta_tipo_ajuste_debe = self::getDeterminacionTipoAjusteDebe($cli_cliente_id);
        $vta_tipo_ajuste_debe_id = $vta_tipo_ajuste_debe->getId();
        $vta_ajuste_debe->setVtaTipoAjusteDebeId($vta_tipo_ajuste_debe->getId());

        $vta_ajuste_debe->setPersonaDescripcion($persona_descripcion);
        if ($gral_tipo_documento_id) {
            $vta_ajuste_debe->setGralTipoDocumentoId($gral_tipo_documento_id);
        }
        $vta_ajuste_debe->setPersonaDocumento($persona_documento);
        $vta_ajuste_debe->setPersonaEmail($persona_email);
        $vta_ajuste_debe->save();

        // --------------------------------------------------------------------
        // se registra el estado pendiente del ajuste debe 
        // --------------------------------------------------------------------
        $vta_ajuste_debe_estado = $vta_ajuste_debe->setVtaAjusteDebeEstado(VtaAjusteDebeTipoEstado::TIPO_PENDIENTE, $observacion);

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_ajuste_debe->setActualizarResumenComprobante();
        
        return $vta_ajuste_debe;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 08/08/2018 14:25 hs.
     * Metodo que genera una ajuste_debe de items.
     * @return Obj VtaAjusteDebe
     */
    static function setInicializarVtaAjusteDebeItem($cmb_vta_preventista_id, $cmb_vta_comprador_id, $cmb_vta_vendedor_id, $gral_empresa_id, $vta_punto_venta_id, $gral_fp_forma_pago_id, $gral_fp_cuota_id, $txt_fecha_vencimiento, $txt_fecha_emision, $gral_actividad_id, $gral_escenario_id, $cli_cliente_id, $txt_cantidads, $txt_descripcions, $txt_importe_unitarios, $cmb_gral_tipo_iva_ids, $cmb_vta_ajuste_debe_concepto_ids, $txa_nota_publica = '', $observacion = '') {

        // se determina el origen del comprobante       
        $vta_tipo_origen_ajuste_debe = VtaTipoOrigenAjusteDebe::getOxCodigo(VtaTipoOrigenAjusteDebe::ORIGEN_ITEM);
        $gral_tipo_documento_cuit = GralTipoDocumento::getOxCodigo(GralTipoDocumento::TIPO_CUIT);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));
        $vta_punto_venta = VtaPuntoVenta::getOxId($vta_punto_venta_id);

        $cli_cliente = CliCliente::getOxId($cli_cliente_id);

        $vta_ajuste_debe = new VtaAjusteDebe();

        $vta_ajuste_debe->setVtaTipoOrigenAjusteDebeId($vta_tipo_origen_ajuste_debe->getId());
        $vta_ajuste_debe->setVtaPreventistaId($cmb_vta_preventista_id);
        $vta_ajuste_debe->setVtaCompradorId($cmb_vta_comprador_id);
        $vta_ajuste_debe->setVtaVendedorId($cmb_vta_vendedor_id);
        $vta_ajuste_debe->setGralEmpresaId($gral_empresa_id);
        $vta_ajuste_debe->setVtaPuntoVentaId($vta_punto_venta_id);
        $vta_ajuste_debe->setNumeroPuntoVenta(str_pad($vta_punto_venta->getNumero(), 4, 0, STR_PAD_LEFT));
        $vta_ajuste_debe->setGralFpFormaPagoId($gral_fp_forma_pago_id);
        $vta_ajuste_debe->setGralFpCuotaId($gral_fp_cuota_id);
        $vta_ajuste_debe->setGralActividadId($gral_actividad_id);
        $vta_ajuste_debe->setGralEscenarioId($gral_escenario_id);
        $vta_ajuste_debe->setFechaEmision($txt_fecha_emision);
        $vta_ajuste_debe->setFechaVencimiento($txt_fecha_vencimiento);
        $vta_ajuste_debe->setPorcentaje($porcentaje_iva);

        if ($gral_mes) {
            $vta_ajuste_debe->setGralMesId($gral_mes->getId());
        }
        $vta_ajuste_debe->setAnio(date('Y'));
        $vta_ajuste_debe->setNotaPublica($txa_nota_publica);
        $vta_ajuste_debe->setObservacion($observacion);
        $vta_ajuste_debe->setEstado(1);

        $vta_ajuste_debe->save();

        // --------------------------------------------------------------------
        // se setea el codigo de la ajuste_debe
        // --------------------------------------------------------------------
        $vta_ajuste_debe->setCodigo(self::PREFIJO_AJUSTE_DEBE . str_pad($vta_ajuste_debe->getId(), 8, 0, STR_PAD_LEFT));
        $vta_ajuste_debe->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial de la ajuste_debe
        // --------------------------------------------------------------------
        $vta_ajuste_debe_estado = $vta_ajuste_debe->setVtaAjusteDebeEstado(VtaAjusteDebeTipoEstado::TIPO_GENERADO, $observacion);

        // --------------------------------------------------------------------
        // se agregan los items a la ajuste_debe
        // --------------------------------------------------------------------
        if (!empty($vta_ajuste_debe->getId())) {

            foreach ($txt_descripcions as $key => $txt_descripcion) {

                $importe_unitario = $txt_importe_unitarios[$key];
                $importe_unitario = Gral::getImporteDesdePriceFormatToDB($importe_unitario);

                // Cargo el detalle de la NC
                $vta_ajuste_debe_item = new VtaAjusteDebeItem();

                $vta_ajuste_debe_item->setDescripcion($txt_descripcions[$key]);
                $vta_ajuste_debe_item->setVtaAjusteDebeId($vta_ajuste_debe->getId());
                $vta_ajuste_debe_item->setGralTipoIvaId($cmb_gral_tipo_iva_ids[$key]);
                $vta_ajuste_debe_item->setVtaAjusteDebeConceptoId($cmb_vta_ajuste_debe_concepto_ids[$key]);

                //$vta_ajuste_debe_item->setCantidad($txt_cantidads[$key]);
                $vta_ajuste_debe_item->setCantidad(1);
                $vta_ajuste_debe_item->setImporteUnitario($importe_unitario);
                $vta_ajuste_debe_item->setCodigo('');
                $vta_ajuste_debe_item->setObservacion('');
                $vta_ajuste_debe_item->setEstado(1);

                $vta_ajuste_debe_item->save();
            }
        }

        // --------------------------------------------------------------------
        // se vincula el cliente a la NC
        // --------------------------------------------------------------------        
        $vta_ajuste_debe->setCliClienteId($cli_cliente->getId());
        $vta_ajuste_debe->setRazonSocial($cli_cliente->getRazonSocial());
        $vta_ajuste_debe->setDomicilioLegal($cli_cliente->getDomicilioLegal());
        $vta_ajuste_debe->setCuit($cli_cliente->getCuit());
        $vta_ajuste_debe->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
        $vta_ajuste_debe->setGralTipoPersoneriaId($cli_cliente->getGralTipoPersoneriaId());
        $vta_ajuste_debe->setPersonaDescripcion($cli_cliente->getDescripcion());
        if ($gral_tipo_documento_cuit) {
            $vta_ajuste_debe->setGralTipoDocumentoId($gral_tipo_documento_cuit->getId());
        }
        $vta_ajuste_debe->setPersonaDocumento($cli_cliente->getCuit());
        $vta_ajuste_debe->setPersonaEmail($cli_cliente->getEmail());

        // --------------------------------------------------------------------
        // se determina el tipo de AjusteDebe
        // --------------------------------------------------------------------
        $vta_tipo_ajuste_debe = self::getDeterminacionTipoAjusteDebe($cli_cliente_id);
        $vta_ajuste_debe->setVtaTipoAjusteDebeId($vta_tipo_ajuste_debe->getId());
        $vta_ajuste_debe->save();


        // --------------------------------------------------------------------
        // se registra el estado pendiente del ajuste debe 
        // --------------------------------------------------------------------
        $vta_ajuste_debe_estado = $vta_ajuste_debe->setVtaAjusteDebeEstado(VtaAjusteDebeTipoEstado::TIPO_PENDIENTE, $observacion);

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_ajuste_debe->setActualizarResumenComprobante();
        
        return $vta_ajuste_debe;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 09:00 hs.
     * Metodo que genera una ajuste_debe.
     * @return Obj VtaAjusteDebe
     */
    static function setInicializarVtaAjusteDebeDesdeVentaInmediataContado($vta_presupuesto = false, $cmb_confirmacion_vta_preventista_id, $vta_orden_venta_ids, $vta_orden_venta_cantidads, $cli_cliente_id = 0, $txt_confirmacion_persona_descripcion, $cmb_confirmacion_gral_tipo_documento_id, $txt_confirmacion_persona_documento, $txt_confirmacion_persona_email, $gral_empresa_id, $vta_punto_venta_id, $gral_fp_forma_pago_id, $gral_fp_cuota_id, $gral_actividad_id, $gral_escenario_id, $vta_tipo_ajuste_debe_id = 0, $ws_fe_param_tipo_concepto_id = 1, $txa_nota_publica = '', $observacion = '') {

        // se determina el origen del comprobante
        $vta_tipo_origen_ajuste_debe = VtaTipoOrigenAjusteDebe::getOxCodigo(VtaTipoOrigenAjusteDebe::ORIGEN_ORDEN_VENTA);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));
        $vta_punto_venta = VtaPuntoVenta::getOxId($vta_punto_venta_id);

        $vta_ajuste_debe = new VtaAjusteDebe();

        $vta_ajuste_debe->setVtaTipoOrigenAjusteDebeId($vta_tipo_origen_ajuste_debe->getId());

        if ($vta_presupuesto) {
            $vta_ajuste_debe->setVtaPresupuestoId($vta_presupuesto->getId());
            $vta_ajuste_debe->setVtaVendedorId($vta_presupuesto->getVtaVendedorId());
            $vta_ajuste_debe->setVtaCompradorId($vta_presupuesto->getVtaCompradorId());
            $vta_ajuste_debe->setVtaPreventistaId($vta_presupuesto->getVtaPreventistaId());
            $vta_ajuste_debe->setGralSucursalId($vta_presupuesto->getGralSucursalId());
        }

        $vta_ajuste_debe->setVtaPreventistaId($cmb_confirmacion_vta_preventista_id);
        $vta_ajuste_debe->setGralEmpresaId($gral_empresa_id);
        $vta_ajuste_debe->setVtaPuntoVentaId($vta_punto_venta_id);
        $vta_ajuste_debe->setNumeroPuntoVenta(str_pad($vta_punto_venta->getNumero(), 4, 0, STR_PAD_LEFT));
        $vta_ajuste_debe->setGralFpFormaPagoId($gral_fp_forma_pago_id);
        $vta_ajuste_debe->setGralFpCuotaId($gral_fp_cuota_id);
        $vta_ajuste_debe->setGralActividadId($gral_actividad_id);
        $vta_ajuste_debe->setPorcentaje($vta_presupuesto->getPorcentaje()); // se registra el porcentaje de IVA
        $vta_ajuste_debe->setGralEscenarioId($gral_escenario_id);
        $vta_ajuste_debe->setFechaEmision(Gral::getFechaActual());
        $vta_ajuste_debe->setFechaVencimiento(Gral::getFechaActual());
        if ($gral_mes) {
            $vta_ajuste_debe->setGralMesId($gral_mes->getId());
        }
        $vta_ajuste_debe->setAnio(date('Y'));
        $vta_ajuste_debe->setNotaPublica($txa_nota_publica);
        $vta_ajuste_debe->setObservacion($observacion);
        $vta_ajuste_debe->setEstado(1);
        $vta_ajuste_debe->save();

        // --------------------------------------------------------------------
        // se setea el codigo de la ajuste_debe
        // --------------------------------------------------------------------
        $vta_ajuste_debe->setCodigo(self::PREFIJO_AJUSTE_DEBE . str_pad($vta_ajuste_debe->getId(), 8, 0, STR_PAD_LEFT));
        $vta_ajuste_debe->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial de la ajuste_debe
        // --------------------------------------------------------------------
        $vta_ajuste_debe_estado = $vta_ajuste_debe->setVtaAjusteDebeEstado(VtaAjusteDebeTipoEstado::TIPO_GENERADO, $observacion);
        $vta_ajuste_debe_estado = $vta_ajuste_debe->setVtaAjusteDebeEstado(VtaAjusteDebeTipoEstado::TIPO_PENDIENTE, $observacion);

        // --------------------------------------------------------------------
        // se agregan los items a la ajuste_debe
        // --------------------------------------------------------------------
        if (!empty($vta_ajuste_debe->getId())) {
            foreach ($vta_orden_venta_ids as $vta_orden_venta_id) {
                $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
                $ins_insumo = $vta_orden_venta->getInsInsumo();
                $ins_unidad_medida_id = $ins_insumo->getInsUnidadMedidaId();
                $cantidad_a_ajustar_debe = $vta_orden_venta_cantidads[$vta_orden_venta->getId()];

                // Si no hay no trae el id de cliente busco en el presupuesto
                if ($cli_cliente_id == 0) {
                    $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
                    $cli_cliente_id = $vta_presupuesto->getCliClienteId();

                    $persona_descripcion = $vta_presupuesto->getPersonaDescripcion();
                    $gral_tipo_documento_id = $vta_presupuesto->getGralTipoDocumentoId();
                    $persona_documento = $vta_presupuesto->getPersonaDocumento();
                    $persona_email = $vta_presupuesto->getPersonaEmail();

                    $persona_descripcion = $txt_confirmacion_persona_descripcion;
                    $gral_tipo_documento_id = $cmb_confirmacion_gral_tipo_documento_id;
                    $persona_documento = $txt_confirmacion_persona_documento;
                    $persona_email = $txt_confirmacion_persona_email;
                } else {
                    $cli_cliente = CliCliente::getOxId($cli_cliente_id);
                    if ($cli_cliente) {
                        $persona_descripcion = $cli_cliente->getRazonSocial();
                        $gral_tipo_documento_id = 1;
                        $persona_documento = $cli_cliente->getCuit();
                        $persona_email = $cli_cliente->getEmail();
                    }
                }

                // cambio el estado en el caso de ajuste_debe parcial o total
                if ($vta_orden_venta->getCantidadDisponibleEnAjusteDebe() == $cantidad_a_ajustar_debe) {
                    $vta_orden_venta->setVtaOrdenVentaEstadoFacturacion(VtaOrdenVentaTipoEstadoFacturacion::TIPO_AJUSTE_TOTAL);
                } else {
                    $vta_orden_venta->setVtaOrdenVentaEstadoFacturacion(VtaOrdenVentaTipoEstadoFacturacion::TIPO_AJUSTE_PARCIAL);
                }

                $vta_ajuste_debe_vta_orden_venta = new VtaAjusteDebeVtaOrdenVenta();
                $vta_ajuste_debe_vta_orden_venta->setDescripcion($vta_orden_venta->getDescripcion());
                $vta_ajuste_debe_vta_orden_venta->setVtaAjusteDebeId($vta_ajuste_debe->getId());
                $vta_ajuste_debe_vta_orden_venta->setVtaOrdenVentaId($vta_orden_venta->getId());
                $vta_ajuste_debe_vta_orden_venta->setInsInsumoId($vta_orden_venta->getInsInsumoId());
                $vta_ajuste_debe_vta_orden_venta->setInsUnidadMedidaId($ins_unidad_medida_id);
                $vta_ajuste_debe_vta_orden_venta->setCantidad($cantidad_a_ajustar_debe);
                $vta_ajuste_debe_vta_orden_venta->setImporteUnitario($vta_orden_venta->getImporteUnitarioConDescuento());
                $vta_ajuste_debe_vta_orden_venta->setCodigo('');
                $vta_ajuste_debe_vta_orden_venta->setObservacion('');
                $vta_ajuste_debe_vta_orden_venta->setEstado(1);
                $vta_ajuste_debe_vta_orden_venta->setGralTipoIvaId($vta_orden_venta->getGralTipoIvaId());
                $vta_ajuste_debe_vta_orden_venta->save();
            }
        }

        // --------------------------------------------------------------------
        // se vincula el cliente a la ajuste_debe, si hubiese cliente
        // --------------------------------------------------------------------  
        // Si viene como parametro (!=0) o si lo toma del presupuesto (!is_null)
        if ($cli_cliente_id != 0 && !is_null($cli_cliente_id)) {
            $cli_cliente = CliCliente::getOxId($cli_cliente_id);
            $persona_descripcion = $cli_cliente->getRazonSocial();

            if ($cli_cliente) {
                $vta_ajuste_debe->setCliClienteId($cli_cliente->getId());
                $vta_ajuste_debe->setRazonSocial($cli_cliente->getRazonSocial());
                $vta_ajuste_debe->setDomicilioLegal($cli_cliente->getDomicilioLegal());
                $vta_ajuste_debe->setCuit($cli_cliente->getCuit());
                $vta_ajuste_debe->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
                $vta_ajuste_debe->setGralTipoPersoneriaId($cli_cliente->getGralTipoPersoneriaId());
            }
        }

        // --------------------------------------------------------------------
        // se determina la condicion de iva de la ajuste_debe
        // --------------------------------------------------------------------
        $gral_condicion_iva = self::getDeterminacionGralCondicionIva($cli_cliente_id);
        $vta_ajuste_debe->setGralCondicionIvaId($gral_condicion_iva->getId());

        // --------------------------------------------------------------------
        // se determina el tipo de ajuste_debe
        // --------------------------------------------------------------------
        $vta_tipo_ajuste_debe = self::getDeterminacionTipoAjusteDebe($cli_cliente_id);
        $vta_tipo_ajuste_debe_id = $vta_tipo_ajuste_debe->getId();
        $vta_ajuste_debe->setVtaTipoAjusteDebeId($vta_tipo_ajuste_debe->getId());

        $vta_ajuste_debe->setPersonaDescripcion($persona_descripcion);
        if ($gral_tipo_documento_id) {
            $vta_ajuste_debe->setGralTipoDocumentoId($gral_tipo_documento_id);
        }
        $vta_ajuste_debe->setPersonaDocumento($persona_documento);
        $vta_ajuste_debe->setPersonaEmail($persona_email);
        $vta_ajuste_debe->save();

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_ajuste_debe->setActualizarResumenComprobante();
        
        return $vta_ajuste_debe;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 18/01/2019 15:36 hs.
     * Metodo que modifica los datos basicos del comprobante
     * @return Obj VtaAjusteDebe
     */
    public function setModificarDatosComprobante($vta_preventista_id, $vta_comprador_id, $vta_vendedor_id, $txt_fecha_vencimiento, $porcentaje_iva, $txa_observacion) {

        $this->setVtaPreventistaId($vta_preventista_id);
        $this->setVtaCompradorId($vta_comprador_id);
        $this->setVtaVendedorId($vta_vendedor_id);
        $this->setFechaVencimiento($txt_fecha_vencimiento);
        $this->setPorcentaje($porcentaje_iva);
        $this->setObservacion($txa_observacion);
        $this->save();
        //Gral::prr($this);
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 02/08/2018 09:00 hs.
     * Metodo que genera una ajuste_debe.
     * @return Obj VtaAjusteDebe
     */
    static function setRegistrarDescuentoFinanciero($vta_ajuste_debe_ids, $var_sesion_random, $descuento_financiero, $cmb_generar_recibo, $cmb_gral_fp_forma_pago_id, $txa_nota_publica, $observacion, $vta_recibo_concepto_ids, $txt_descripcions, $txt_referencias, $txt_importe_unitarios, $gral_forma_pago_ids) {
        foreach ($vta_ajuste_debe_ids as $vta_ajuste_debe_id) {
            $vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_ajuste_debe_id);
            $vta_nota_credito = VtaNotaCredito::setInicializarVtaNotaCreditoDesdeDescuentoFinanciero($vta_ajuste_debe, $descuento_financiero, $txa_nota_publica, $observacion);
        }

        if ($cmb_generar_recibo == 1) {
            $vta_recibo = VtaRecibo::setInicializarVtaReciboDesdeDescuentoFinanciero($vta_ajuste_debe_ids, $var_sesion_random, $descuento_financiero, $cmb_gral_fp_forma_pago_id, $txa_nota_publica, $observacion, $vta_recibo_concepto_ids, $txt_descripcions, $txt_referencias, $txt_importe_unitarios, $gral_forma_pago_ids);
        }

        return true;
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 15/09/2018
     */
    public function getWsFeParamTipoComprobante() {
        $vta_tipo_ajuste_debe = $this->getVtaTipoAjusteDebe();
        $ws_fe_param_tipo_comprobante = $vta_tipo_ajuste_debe->getWsFeParamTipoComprobanteXVtaTipoAjusteDebeWsFeParamTipoComprobante();
        return $ws_fe_param_tipo_comprobante;
    }

    /**
     * Metodo que retorna el numero completo del comprobante
     * @return string
     */
    public function getNumeroAjusteDebeCompletoFormateado() {
        return '';
        $numero_punto_venta = str_pad($this->getVtaPuntoVenta()->getNumero(), 4, 0, STR_PAD_LEFT);
        $numero_ajuste_debe = str_pad($this->getNumeroAjusteDebe(), 8, 0, STR_PAD_LEFT);

        $numero_ajuste_debe_completo = $numero_punto_venta . '-' . $numero_ajuste_debe;
        return $numero_ajuste_debe_completo;
    }

    /**
     * Metodo que retorna el codigo numerico para el barcode de afip
     */
    public function getBarcodeAFIPParaComprobante() {
        $barcode = "";
        return $barcode;
    }

    /**
     * Metodo que retorna la fecha de vencimiento del CAE obtenida desde RESPUESTA AFIP
     * @return string
     */
    public function getCaeVencimiento() {
        $fecha_vencimiento_cae = "";
        return $fecha_vencimiento_cae;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 13/12/2017 08:00 hs.
     * Metodo que registra un nuevo estado de la ajuste_debe.
     * @return Obj VtaAjusteDebeEstado
     */
    public function setVtaAjusteDebeEstado($codigo, $observacion = '') {
        $inicial = 1;
        $vta_ajuste_debe_estado = false;

        // se agrega el nuevo estado del ajuste_debe
        $vta_ajuste_debe_tipo_estado = VtaAjusteDebeTipoEstado::getOxCodigo($codigo);

        if ($vta_ajuste_debe_tipo_estado) {
            foreach ($this->getVtaAjusteDebeEstados() as $vta_ajuste_debe_estado) {
                $vta_ajuste_debe_estado->setActual(0);
                $vta_ajuste_debe_estado->save();
                $inicial = 0;
            }

            $vta_ajuste_debe_estado = new VtaAjusteDebeEstado();
            $vta_ajuste_debe_estado->setVtaAjusteDebeId($this->getId());
            $vta_ajuste_debe_estado->setVtaAjusteDebeTipoEstadoId($vta_ajuste_debe_tipo_estado->getId());
            $vta_ajuste_debe_estado->setInicial($inicial);
            $vta_ajuste_debe_estado->setActual(1);
            $vta_ajuste_debe_estado->setObservacion($observacion);
            $vta_ajuste_debe_estado->save();

            // actualizamos el estado en vta_ajuste_debe      
            $this->setVtaAjusteDebeTipoEstadoId($vta_ajuste_debe_tipo_estado->getId());
            $this->save();
        }

        // ---------------------------------------------------------------------
        // se registran los movimientos contables, si lo requiere
        // ---------------------------------------------------------------------
        //$this->setRegistrarContabilidad();
        // ---------------------------------------------------------------------

        return $vta_ajuste_debe_estado;
    }

    /**
     * Registro de los movimientos contables de la operacion
     */
    public function setRegistrarContabilidad($cntb_periodo = false) {
        if ((int) $this->getCntbDiarioAsientoId() > 0) {
            return;
        }

        $vta_ajuste_debe_tipo_estado = $this->getVtaAjusteDebeTipoEstado();

        if ($vta_ajuste_debe_tipo_estado->getContabilizable()) {
            $cli_cliente = $this->getCliCliente();
            $gral_empresa = $this->getGralEmpresa();
            $cntb_ejercicio = CntbEjercicio::getCntbEjercicioActual($gral_empresa);
            $cntb_tipo_asiento = CntbTipoAsiento::getOxCodigo(CntbTipoAsiento::TIPO_OPERATIVO);
            $cntb_tipo_origen = CntbTipoOrigen::getOxCodigo(CntbTipoOrigen::TIPO_AUTOMATICO);
            $cntb_tipo_movimiento = CntbTipoMovimiento::getOxCodigo(CntbTipoMovimiento::TIPO_VENTAS);
            $descripcion = 'Asiento de VtaAjusteDebe';

            $array_cuentas_debe = array();
            $array_cuentas_haber = array();

            $vta_tipo_origen_ajuste_debe = $this->getVtaTipoOrigenAjusteDebe();
            $gral_actividad = $this->getGralActividad();
            $gral_tipo_documento = $this->getGralTipoDocumento();
            $gral_condicion_iva = $this->getGralCondicionIva();
            $gral_fp_forma_pago = $this->getGralFpFormaPago();
            $cntb_cuenta_venta_debe = $gral_fp_forma_pago->getCntbCuentaVentaObj();

            $importe_iva = $this->getVtaAjusteDebeIva();
            $importe_tributo = $this->getVtaAjusteDebeTributo();
            //$importe_subtotal = $this->getVtaAjusteDebeSubtotal();
            $importe_total = $this->getVtaAjusteDebeTotal();

            // -----------------------------------------------------------------
            // DEBE
            // -----------------------------------------------------------------
            if ($cntb_cuenta_venta_debe) {
                $array_cuentas_debe[] = array(
                    //'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('11010101'), // CAJA ADMINISTRACION 
                    'cntb_cuenta' => $cntb_cuenta_venta_debe,
                    'codigo_comprobante' => $txt_comprobante = '',
                    'importe' => $importe_total,
                );
            }

            // -----------------------------------------------------------------
            // HABER
            // -----------------------------------------------------------------
            if ($importe_iva > 0) {
                $array_cuentas_haber[] = array(
                    'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('21030103'), // IVA DEBITO FISCAL 
                    'codigo_comprobante' => $txt_comprobante = '',
                    'importe' => $importe_iva,
                );
            }

            if ($importe_tributo > 0) {
                $array_cuentas_haber[] = array(
                    'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('22050117'), // INGRESOS BRUTOS 
                    'codigo_comprobante' => $txt_comprobante = '',
                    'importe' => $importe_tributo,
                );
            }

            if ($vta_tipo_origen_ajuste_debe && $vta_tipo_origen_ajuste_debe->getCodigo() == VtaTipoOrigenAjusteDebe::ORIGEN_ITEM) {
                // -------------------------------------------------------------
                // si nace desde ITEM
                // -------------------------------------------------------------
                $vta_ajuste_debe_items = $this->getVtaAjusteDebeItems();
                //Gral::prr($vta_ajuste_debe_items);
                foreach ($vta_ajuste_debe_items as $vta_ajuste_debe_item) {
                    $importe_subtotal = $this->getVtaAjusteDebeSubtotal();
                    $vta_ajuste_debe_concepto = $vta_ajuste_debe_item->getVtaAjusteDebeConcepto();
                    $cntb_cuenta_venta_haber = $vta_ajuste_debe_concepto->getCntbCuenta();
                    //Gral::prr($cntb_cuenta_venta_haber);

                    if ($cntb_cuenta_venta_haber && $importe_subtotal > 0) {
                        $array_cuentas_haber[] = array(
                            //'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('22010102'), // INGRESOS POR VENTA REPUESTOS
                            'cntb_cuenta' => $cntb_cuenta_venta_haber,
                            'codigo_comprobante' => $txt_comprobante = '',
                            'importe' => $importe_subtotal,
                        );
                    }
                }
            } elseif ($vta_tipo_origen_ajuste_debe && $vta_tipo_origen_ajuste_debe->getCodigo() == VtaTipoOrigenAjusteDebe::ORIGEN_ORDEN_VENTA) {
                // -------------------------------------------------------------
                // si nace desde OV
                // -------------------------------------------------------------
                $ins_tipo_insumos = $this->getInsTipoInsumosVinculados();
                //Gral::prr($ins_tipo_insumos);
                foreach ($ins_tipo_insumos as $ins_tipo_insumo) {
                    $importe_subtotal = $this->getVtaAjusteDebeSubtotal($ins_tipo_insumo);
                    $cntb_cuenta_venta_haber = $ins_tipo_insumo->getCntbCuentaVentaObj();

                    if ($cntb_cuenta_venta_haber && $importe_subtotal > 0) {
                        $array_cuentas_haber[] = array(
                            //'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('22010102'), // INGRESOS POR VENTA REPUESTOS
                            'cntb_cuenta' => $cntb_cuenta_venta_haber,
                            'codigo_comprobante' => $txt_comprobante = '',
                            'importe' => $importe_subtotal,
                        );
                    }
                }
            }

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
            $cntb_diario_asiento_vta_ajuste_debe = new CntbDiarioAsientoVtaAjusteDebe();
            $cntb_diario_asiento_vta_ajuste_debe->setCntbDiarioAsientoId($cntb_diario_asiento->getId());
            $cntb_diario_asiento_vta_ajuste_debe->setVtaAjusteDebeId($this->getId());
            $cntb_diario_asiento_vta_ajuste_debe->save();

            $vta_tipo_ajuste_debe = $this->getVtaTipoAjusteDebe();
            $gral_condicion_iva = $this->getGralCondicionIva();
            $gral_tipo_documento = $this->getGralTipoDocumento();

            // si fueron ovs
            $vta_orden_ventas = $this->getVtaOrdenVentaXVtaAjusteDebeVtaOrdenVenta();
            if (count($vta_orden_ventas) > 0) {
                $cantidad_items = count($vta_orden_ventas) . " OVs";
            }

            // si fueron items
            $vta_ajuste_debe_items = $this->getVtaAjusteDebeItems();
            if (count($vta_ajuste_debe_items) > 0) {
                $cantidad_items = count($vta_ajuste_debe_items) . " Items";
            }

            $descripcion = $vta_tipo_ajuste_debe->getDescripcion() . " " . $this->getNumeroComprobanteCompleto();
            $observacion = "Emitida a " . $gral_condicion_iva->getDescripcion() . " " . $this->getPersonaDescripcion() . " " . $gral_tipo_documento->getDescripcion() . " " . $this->getPersonaDocumento() . " por " . $cantidad_items;

            // se actualiza la descripcion y observacion del asiento
            $cntb_diario_asiento->setDescripcion($descripcion);
            $cntb_diario_asiento->setObservacion($observacion);
            $cntb_diario_asiento->save();
        }
    }

    public function getInsTipoInsumosVinculados() { // -------------------- TEMPORAL
        $ins_tipo_insumos = array();

        $vta_ajuste_debe_vta_orden_ventas = $this->getVtaAjusteDebeVtaOrdenVentas(null, null, true);
        foreach ($vta_ajuste_debe_vta_orden_ventas as $vta_ajuste_debe_vta_orden_venta) {
            $ins_insumo = $vta_ajuste_debe_vta_orden_venta->getInsInsumo();
            $ins_tipo_insumo = $ins_insumo->getInsTipoInsumo();
            $ins_tipo_insumos[$ins_tipo_insumo->getId()] = $ins_tipo_insumo;
        }

        return $ins_tipo_insumos;
    }

    /**
     * Metodo que retorna el tipo de ajuste_debe que tiene un cliente.
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
     * Metodo que retorna el tipo de ajuste_debe que tiene un cliente.
     * @param type $cli_cliente_id
     * @return type VtaTipoAjusteDebe
     */
    static function getDeterminacionTipoAjusteDebe($cli_cliente_id) {
        $vta_tipo_ajuste_debe = VtaTipoAjusteDebe::getOxCodigo(VtaTipoAjusteDebe::TIPO_AJUSTE_X_DEBE);

        $cli_cliente = CliCliente::getOxId($cli_cliente_id);

        if ($cli_cliente) {
            $gra_condicion_iva_id = $cli_cliente->getGralCondicionIvaId();

            $gra_condicion_iva_vta_tipo_ajuste_debes = GralCondicionIvaVtaTipoAjusteDebe::getOsxGralCondicionIvaId($gra_condicion_iva_id);
            foreach ($gra_condicion_iva_vta_tipo_ajuste_debes as $gra_condicion_iva_vta_tipo_ajuste_debe) {
                $vta_tipo_ajuste_debe = $gra_condicion_iva_vta_tipo_ajuste_debe->getVtaTipoAjusteDebe();
                return $vta_tipo_ajuste_debe;
            }
        }
        return $vta_tipo_ajuste_debe;
    }

    /**
     * Metodo que retorna el valor del iva de la ajuste_debe.
     * @return type float
     */
    public function getVtaAjusteDebeIva($ins_tipo_insumo = false) {
        $iva = 0;

        if ($ins_tipo_insumo) {
            $c = new Criterio();
            $c->add(InsTipoInsumo::GEN_ATTR_ID, $ins_tipo_insumo->getId(), Criterio::IGUAL);
            $c->addTabla(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
            $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID);
            $c->addRealJoin(InsTipoInsumo::GEN_TABLA, InsTipoInsumo::GEN_ATTR_ID, InsInsumo::GEN_ATTR_INS_TIPO_INSUMO_ID);
            $c->setCriterios();
            $vta_ajuste_debe_vta_orden_ventas = $this->getVtaAjusteDebeVtaOrdenVentas(null, $c, true);
        } else {
            $vta_ajuste_debe_vta_orden_ventas = $this->getVtaAjusteDebeVtaOrdenVentas(null, null, true);
        }

        foreach ($vta_ajuste_debe_vta_orden_ventas as $vta_ajuste_debe_vta_orden_venta) {
            $importe_unitario = $vta_ajuste_debe_vta_orden_venta->getImporteUnitario();
            $cantidad = $vta_ajuste_debe_vta_orden_venta->getCantidad();
            $gral_tipo_iva = $vta_ajuste_debe_vta_orden_venta->getGralTipoIva();
            $valor_iva = $gral_tipo_iva->getValorIva();
            $iva += ($importe_unitario * $cantidad) * ($valor_iva / 100) * ($this->getPorcentaje() / 100);
        }

        // se suman los items sueltos de la ajuste_debe
        $vta_ajuste_debe_items = $this->getVtaAjusteDebeItems(null, null, true);
        foreach ($vta_ajuste_debe_items as $vta_ajuste_debe_item) {
            $gral_tipo_iva = $vta_ajuste_debe_item->getGralTipoIva();
            $valor_iva_coeficiente = $gral_tipo_iva->getValorIva() / 100;

            $importe_unitario = round($vta_ajuste_debe_item->getImporteUnitario(), 2);
            $cantidad = $vta_ajuste_debe_item->getCantidad();
            $iva += $importe_unitario * $cantidad * $valor_iva_coeficiente * ($this->getPorcentaje() / 100);
        }

        return round($iva, 2);
    }

    public function getVtaComprobanteIva($ins_tipo_insumo = false) {
        return $this->getVtaAjusteDebeIva($ins_tipo_insumo);
    }

    /**
     * Metodo que retorna el valor de los tributos de la ajuste_debe.
     * @return type float
     */
    public function getVtaAjusteDebeTributo() {
        $vta_ajuste_debe_vta_tributos = $this->getVtaAjusteDebeVtaTributos(null, null, true);
        $importe_total_tributo = 0;

        foreach ($vta_ajuste_debe_vta_tributos as $vta_ajuste_debe_vta_tributo) {
            $importe_total_tributo += $vta_ajuste_debe_vta_tributo->getImporteTributo();
        }

        return $importe_total_tributo;
    }

    public function getVtaComprobanteTributo($ins_tipo_insumo = false) {
        return $this->getVtaAjusteDebeTributo($ins_tipo_insumo);
    }

    /**
     * Metodo que retorna el subtotal de la ajuste_debe sin iva.
     * @return type float
     */
    public function getVtaAjusteDebeSubtotal($ins_tipo_insumo = false, $tipo_subtotal = false) {

        // ---------------------------------------------------------------------
        // se suman las ordenes de venta
        // ---------------------------------------------------------------------        
        $c = new Criterio();
        if ($ins_tipo_insumo) {
            $c->add(InsTipoInsumo::GEN_ATTR_ID, $ins_tipo_insumo->getId(), Criterio::IGUAL);
        }
        if ($tipo_subtotal == VtaComprobante::TIPO_SUBTOTAL_GRAVADO) {
            $c->add(GralTipoIva::GEN_ATTR_GRAVADO, 1, Criterio::IGUAL);
        }
        if ($tipo_subtotal == VtaComprobante::TIPO_SUBTOTAL_NO_GRAVADO) {
            $c->add(GralTipoIva::GEN_ATTR_CODIGO, GralTipoIva::TIPO_NO_GRAVADO, Criterio::IGUAL);
        }
        if ($tipo_subtotal == VtaComprobante::TIPO_SUBTOTAL_EXENTO) {
            $c->add(GralTipoIva::GEN_ATTR_CODIGO, GralTipoIva::TIPO_EXENTO, Criterio::IGUAL);
        }
        $c->addTabla(VtaAjusteDebeVtaOrdenVenta::GEN_TABLA);
        $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID, 'LEFT JOIN');
        //$c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID);
        $c->addRealJoin(InsTipoInsumo::GEN_TABLA, InsTipoInsumo::GEN_ATTR_ID, InsInsumo::GEN_ATTR_INS_TIPO_INSUMO_ID, 'LEFT JOIN');
        $c->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, VtaAjusteDebeVtaOrdenVenta::GEN_ATTR_GRAL_TIPO_IVA_ID);
        $c->setCriterios();
        $vta_ajuste_debe_vta_orden_ventas = $this->getVtaAjusteDebeVtaOrdenVentas(null, $c, true);

        foreach ($vta_ajuste_debe_vta_orden_ventas as $vta_ajuste_debe_vta_orden_venta) {
            $importe_unitario = $vta_ajuste_debe_vta_orden_venta->getImporteUnitario();
            $cantidad = $vta_ajuste_debe_vta_orden_venta->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }

        // ---------------------------------------------------------------------
        // se suman los items sueltos de la ajuste_debe
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
        $c->addTabla(VtaAjusteDebeItem::GEN_TABLA);
        $c->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, VtaAjusteDebeItem::GEN_ATTR_GRAL_TIPO_IVA_ID);
        $c->setCriterios();

        $vta_ajuste_debe_items = $this->getVtaAjusteDebeItems(null, $c, true);
        foreach ($vta_ajuste_debe_items as $vta_ajuste_debe_item) {
            $importe_unitario = $vta_ajuste_debe_item->getImporteUnitario();
            $cantidad = $vta_ajuste_debe_item->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }

        return $subtotal;
    }

    public function getVtaComprobanteSubtotal($ins_tipo_insumo = false, $tipo_subtotal = false) {
        return $this->getVtaAjusteDebeSubtotal($ins_tipo_insumo, $tipo_subtotal);
    }

    public function getVtaAjusteDebeSubtotalParaComprobante() {
        $vta_tipo_ajuste_debe = $this->getVtaTipoAjusteDebe();

        switch ($vta_tipo_ajuste_debe->getCodigo()) {
            default:
                $importe = $this->getVtaAjusteDebeSubtotal() + $this->getVtaAjusteDebeIva();
        }

        return $importe;
    }

    /**
     * Metodo que retorna el subtotal de los items de la NC sin iva.
     * @return type float
     */
    public function getVtaAjusteDebeItemSubtotal() {

        // proximamente discontinuado!
        $vta_ajuste_debe_items = $this->getVtaAjusteDebeItems(null, null, true);

        foreach ($vta_ajuste_debe_items as $vta_ajuste_debe_item) {
            $importe_unitario = round($vta_ajuste_debe_item->getImporteUnitario(), 2);
            $cantidad = $vta_ajuste_debe_item->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }
        return $subtotal;
    }

    /**
     * Metodo que retorna el valor de los tributos de la ajuste_debe.
     * @return type float
     */
    public function getArrVtaTributosAplicados() {
        $vta_ajuste_debe_vta_tributos = $this->getVtaAjusteDebeVtaTributos(null, null, true);

        foreach ($vta_ajuste_debe_vta_tributos as $vta_ajuste_debe_vta_tributo) {
            $vta_tributo = $vta_ajuste_debe_vta_tributo->getVtaTributo();
            $importe_total_tributo = $vta_ajuste_debe_vta_tributo->getImporteTributo();

            $arr_tributos[$vta_tributo->getId()] = array(
                'vta_tributo_id' => $vta_tributo->getId(),
                'vta_tributo_descripcion' => $vta_tributo->getDescripcion(),
                'importe' => $importe_total_tributo,
            );
        }
        return $arr_tributos;
    }

    /**
     * Metodo que retorna el total de la ajuste_debe con iva.
     * @return type float
     */
    public function getVtaAjusteDebeTotal($ins_tipo_insumo = false) {
        $total = $this->getVtaAjusteDebeSubtotal($ins_tipo_insumo) +
                $this->getVtaAjusteDebeIva($ins_tipo_insumo) +
                $this->getVtaAjusteDebeTributo()
        ;
        // $total = round($total, 2);
        return $total;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 20/12/2017 11:00 hs.
     * Metodo que envia el ajuste_debe por email.
     * @return 
     */
    public function enviarAjusteDebeEmail($enviar = false, $destinatarios = false, $txa_observacion, $archivo_adjunto_urls = false) {
        if (!Mail::MAIL_ACTIVO)
            return false;

        $mail_asunto = Gral::getConfig('gral_cliente') . ' - AjusteDebe #' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios = str_replace(' ', '', $destinatarios);
        $destinatarios = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param = array(
            'vta_ajuste_debe_id' => $this->getId(),
            'observacion' => $txa_observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_vta_ajuste_debe.php";
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

        $vta_ajuste_debe_enviado = $this->inicializarVtaAjusteDebeEnviado($txa_observacion, $destinatarios, $mail_asunto, $msg, $strContenidoPdf);

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
                $vta_ajuste_debe_enviado->setConfirmarVtaAjusteDebeEnviado(1, VtaAjusteDebeEnviado::AJUSTE_DEBE_ENVIADO_CORRECTAMENTE);
            } else {
                $vta_ajuste_debe_enviado->setConfirmarVtaAjusteDebeEnviado(0, $mail->ErrorInfo);
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
     * Metodo que Inicializa el envio por mail del ajuste_debe.
     * @return VtaAjusteDebeEnviado
     */
    public function inicializarVtaAjusteDebeEnviado($observacion, $destinatarios, $mail_asunto, $mail_contenido, $archivo_adjunto) {
        $vta_ajuste_debe_enviado = new VtaAjusteDebeEnviado();
        $vta_ajuste_debe_enviado->setDescripcion('');
        $vta_ajuste_debe_enviado->setVtaAjusteDebeId($this->getId());
        $vta_ajuste_debe_enviado->setAsunto($mail_asunto);
        $vta_ajuste_debe_enviado->setDestinatario($destinatarios);

        $vta_ajuste_debe_enviado->setCuerpo(addslashes($mail_contenido));
        $vta_ajuste_debe_enviado->setAdjunto(base64_encode($archivo_adjunto));

        $vta_ajuste_debe_enviado->setCodigoEnvio(0);
        $vta_ajuste_debe_enviado->setObservacion($observacion);
        $vta_ajuste_debe_enviado->setEstado(0);

        $vta_ajuste_debe_enviado->save();

        return $vta_ajuste_debe_enviado;
    }

    public function getNombreArchivoAdjuntoAjusteDebe() {
        $nombre = Gral::getConfig('conf_proyecto_min') . '_AD_' . $this->getVtaTipoAjusteDebe()->getCodigoMin() . '_' . $this->getNumeroComprobanteCompleto() . '_' . $this->getPersonaDescripcion();
        $nombre = str_replace('.', '', $nombre);
        $nombre = str_replace('-', '_', $nombre);
        $nombre = str_replace(' ', '_', $nombre);
        return $nombre . '.pdf';
    }

    /**
     * Autor: Romo Gustavo.
     * Fecha: 02/08/2018 16:32 hs.
     * Metodo que retorna un array full con los valores de iva del presupuestos.
     * @return Float
     */
    public function getArrIvaAjusteDebeFull() {
        $arr_iva = array();

        // se suman las ordenes de venta
        $vta_ajuste_debe_vta_orden_ventas = $this->getVtaAjusteDebeVtaOrdenVentas(null, null, true);
        foreach ($vta_ajuste_debe_vta_orden_ventas as $vta_ajuste_debe_vta_orden_venta) {
            $gral_tipo_iva = $vta_ajuste_debe_vta_orden_venta->getGralTipoIva();

            $importe_unitario = $vta_ajuste_debe_vta_orden_venta->getImporteUnitario();
            $iva = ($gral_tipo_iva->getValorIva() / 100) * $importe_unitario * $vta_ajuste_debe_vta_orden_venta->getCantidad();

            $acu_importe_unitario[$vta_ajuste_debe_vta_orden_venta->getGralTipoIva()->getCodigo()] += $importe_unitario * $vta_ajuste_debe_vta_orden_venta->getCantidad();
            $acu_iva[$gral_tipo_iva->getCodigo()] += $iva;

            $arr_iva[$gral_tipo_iva->getCodigo()] = array(
                'id' => $vta_ajuste_debe_vta_orden_venta->getGralTipoIvaId(),
                'descripcion' => $gral_tipo_iva->getDescripcion(),
                'codigo' => $gral_tipo_iva->getCodigo(),
                'base_imponible' => $acu_importe_unitario[$gral_tipo_iva->getCodigo()],
                'importe_iva' => $acu_iva[$gral_tipo_iva->getCodigo()],
            );
        }

        // se suman los items sueltos de la ajuste_debe
        $vta_ajuste_debe_items = $this->getVtaAjusteDebeItems(null, null, true);
        foreach ($vta_ajuste_debe_items as $vta_ajuste_debe_item) {
            $gral_tipo_iva = $vta_ajuste_debe_item->getGralTipoIva();

            $importe_unitario = $vta_ajuste_debe_item->getImporteUnitario();
            $iva = ($gral_tipo_iva->getValorIva() / 100) * $importe_unitario * $vta_ajuste_debe_item->getCantidad();

            $acu_importe_unitario[$gral_tipo_iva->getCodigo()] += $importe_unitario * $vta_ajuste_debe_item->getCantidad();
            $acu_iva[$gral_tipo_iva->getCodigo()] += $iva;

            $arr_iva[$gral_tipo_iva->getCodigo()] = array(
                'id' => $vta_ajuste_debe_item->getGralTipoIvaId(),
                'descripcion' => $gral_tipo_iva->getDescripcion(),
                'codigo' => $gral_tipo_iva->getCodigo(),
                'base_imponible' => $acu_importe_unitario[$gral_tipo_iva->getCodigo()],
                'importe_iva' => $acu_iva[$gral_tipo_iva->getCodigo()],
            );
        }

        return $arr_iva;
    }

    /**
     * Autor: Romo Gustavo.
     * Fecha: 02/08/2018 16:32 hs.
     * Metodo que retorna un array full con los valores de iva del presupuestos.
     * @return Float
     */
    public function getArrIvaParaCitiAjusteDebeFull() {
        $arr_iva = array();

        // se suman las ordenes de venta
        $vta_ajuste_debe_vta_orden_ventas = $this->getVtaAjusteDebeVtaOrdenVentas(null, null, true);
        foreach ($vta_ajuste_debe_vta_orden_ventas as $vta_ajuste_debe_vta_orden_venta) {
            $gral_tipo_iva = $vta_ajuste_debe_vta_orden_venta->getGralTipoIva();

            if ($gral_tipo_iva && $gral_tipo_iva->getGravado()) { // solo se agrega al array de IVA las alicuotas que estan gravadas
                $importe_unitario = $vta_ajuste_debe_vta_orden_venta->getImporteUnitario();
                $iva = ($gral_tipo_iva->getValorIva() / 100) * $importe_unitario * $vta_ajuste_debe_vta_orden_venta->getCantidad();

                $acu_importe_unitario[$vta_ajuste_debe_vta_orden_venta->getGralTipoIva()->getCodigo()] += $importe_unitario * $vta_ajuste_debe_vta_orden_venta->getCantidad();
                $acu_iva[$gral_tipo_iva->getCodigo()] += $iva;

                $arr_iva[$gral_tipo_iva->getCodigo()] = array(
                    'id' => $vta_ajuste_debe_vta_orden_venta->getGralTipoIvaId(),
                    'descripcion' => $gral_tipo_iva->getDescripcion(),
                    'codigo' => $gral_tipo_iva->getCodigo(),
                    'base_imponible' => $acu_importe_unitario[$gral_tipo_iva->getCodigo()],
                    'importe_iva' => $acu_iva[$gral_tipo_iva->getCodigo()],
                );
            }
        }

        // se suman los items sueltos de la ajuste_debe
        $vta_ajuste_debe_items = $this->getVtaAjusteDebeItems(null, null, true);
        foreach ($vta_ajuste_debe_items as $vta_ajuste_debe_item) {
            $gral_tipo_iva = $vta_ajuste_debe_item->getGralTipoIva();

            if ($gral_tipo_iva && $gral_tipo_iva->getGravado()) { // solo se agrega al array de IVA las alicuotas que estan gravadas
                $importe_unitario = $vta_ajuste_debe_item->getImporteUnitario();
                $iva = ($gral_tipo_iva->getValorIva() / 100) * $importe_unitario * $vta_ajuste_debe_item->getCantidad();

                $acu_importe_unitario[$gral_tipo_iva->getCodigo()] += $importe_unitario * $vta_ajuste_debe_item->getCantidad();
                $acu_iva[$gral_tipo_iva->getCodigo()] += $iva;

                $arr_iva[$gral_tipo_iva->getCodigo()] = array(
                    'id' => $vta_ajuste_debe_item->getGralTipoIvaId(),
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

        // se suman las ordenes de venta
        $vta_ajuste_debe_vta_orden_ventas = $this->getVtaAjusteDebeVtaOrdenVentas(null, null, true);
        foreach ($vta_ajuste_debe_vta_orden_ventas as $vta_ajuste_debe_vta_orden_venta) {
            $gral_tipo_iva = $vta_ajuste_debe_vta_orden_venta->getGralTipoIva();

            if ($gral_tipo_iva && $gral_tipo_iva->getGravado()) { // solo se agrega al array de IVA las alicuotas que estan gravadas
                $ws_fe_param_tipo_iva = $gral_tipo_iva->getWsFeParamTipoIvaXGralTipoIvaWsFeParamTipoIva();

                $importe_total = round($vta_ajuste_debe_vta_orden_venta->getImporteTotal(), 3);
                $importe_iva = round($vta_ajuste_debe_vta_orden_venta->getImporteIva(), 3);

                $arr[$gral_tipo_iva->getCodigo()]['WS_FE_PARAM_TIPO_IVA_ID'] = $ws_fe_param_tipo_iva->getId();
                $arr[$gral_tipo_iva->getCodigo()]['Id'] = $ws_fe_param_tipo_iva->getCodigoAfip();
                $arr[$gral_tipo_iva->getCodigo()]['BaseImp'] = $arr[$gral_tipo_iva->getCodigo()]['BaseImp'] + $importe_total;
                $arr[$gral_tipo_iva->getCodigo()]['Importe'] = $arr[$gral_tipo_iva->getCodigo()]['Importe'] + $importe_iva;
            }
        }

        // se suman los items sueltos de la ajuste_debe
        $vta_ajuste_debe_items = $this->getVtaAjusteDebeItems(null, null, true);
        foreach ($vta_ajuste_debe_items as $vta_ajuste_debe_item) {
            $gral_tipo_iva = $vta_ajuste_debe_item->getGralTipoIva();

            if ($gral_tipo_iva && $gral_tipo_iva->getGravado()) { // solo se agrega al array de IVA las alicuotas que estan gravadas
                $ws_fe_param_tipo_iva = $gral_tipo_iva->getWsFeParamTipoIvaXGralTipoIvaWsFeParamTipoIva();

                $importe_total = round($vta_ajuste_debe_item->getImporteTotal(), 3);
                $importe_iva = round($vta_ajuste_debe_item->getImporteIva(), 3);

                $arr[$gral_tipo_iva->getCodigo()]['WS_FE_PARAM_TIPO_IVA_ID'] = $ws_fe_param_tipo_iva->getId();
                $arr[$gral_tipo_iva->getCodigo()]['Id'] = $ws_fe_param_tipo_iva->getCodigoAfip();
                $arr[$gral_tipo_iva->getCodigo()]['BaseImp'] = $arr[$gral_tipo_iva->getCodigo()]['BaseImp'] + $importe_total;
                $arr[$gral_tipo_iva->getCodigo()]['Importe'] = $arr[$gral_tipo_iva->getCodigo()]['Importe'] + $importe_iva;
            }
        }

        return $arr;
    }

    /**
     * @creado_por Pablo Rosenperger
     * @creado 15/08/2018
     */
    public function getArrTributoAjusteDebeFull() {
        $arr_tributo = array();
        $vta_ajuste_debe_vta_tributos = $this->getVtaAjusteDebeVtaTributos(null, null, true);

        foreach ($vta_ajuste_debe_vta_tributos as $vta_ajuste_debe_vta_tributo) {
            $importe_unitario = $vta_ajuste_debe_vta_tributo->getImporteImponible();
            $importe_tributo = ($vta_ajuste_debe_vta_tributo->getVtaTributo()->getAlicuotaPorcentual() / 100) * $importe_unitario;

            $acu_importe_unitario[$vta_ajuste_debe_vta_tributo->getVtaTributo()->getCodigo()] += $importe_unitario;
            $acu_iva[$vta_ajuste_debe_vta_tributo->getVtaTributo()->getCodigo()] += $importe_tributo;

            $arr_tributo[$vta_ajuste_debe_vta_tributo->getVtaTributo()->getCodigo()] = array(
                'id' => $vta_ajuste_debe_vta_tributo->getVtaTributoId(),
                'descripcion' => $vta_ajuste_debe_vta_tributo->getVtaTributo()->getDescripcion(),
                'codigo' => $vta_ajuste_debe_vta_tributo->getVtaTributo()->getCodigo(),
                'base_imponible' => $acu_importe_unitario[$vta_ajuste_debe_vta_tributo->getVtaTributo()->getCodigo()],
                'importe_tributo' => $acu_iva[$vta_ajuste_debe_vta_tributo->getVtaTributo()->getCodigo()],
            );
        }
        return $arr_tributo;
    }

    public function getArrTributoParaAfip() {
        $arr = array();

        $vta_ajuste_debe_vta_tributos = $this->getVtaAjusteDebeVtaTributos(null, null, true);

        foreach ($vta_ajuste_debe_vta_tributos as $vta_ajuste_debe_vta_tributo) {

            $importe_imponible = round($vta_ajuste_debe_vta_tributo->getImporteImponible(), 2);
            $importe_tributo = round($vta_ajuste_debe_vta_tributo->getImporteTributo(), 2);
            $vta_tributo = $vta_ajuste_debe_vta_tributo->getVtaTributo();
            $ws_fe_param_tipo_tributo = $vta_tributo->getWsFeParamTipoTributoXVtaTributoWsFeParamTipoTributo();

            $arr[$vta_ajuste_debe_vta_tributo->getVtaTributoId()]['WS_FE_PARAM_TIPO_TRIBUTO_ID'] = $ws_fe_param_tipo_tributo->getId();
            $arr[$vta_ajuste_debe_vta_tributo->getVtaTributoId()]['Id'] = $ws_fe_param_tipo_tributo->getCodigoAfip();
            $arr[$vta_ajuste_debe_vta_tributo->getVtaTributoId()]['Desc'] = $ws_fe_param_tipo_tributo->getDescripcion();
            $arr[$vta_ajuste_debe_vta_tributo->getVtaTributoId()]['BaseImp'] = $importe_imponible;
            $arr[$vta_ajuste_debe_vta_tributo->getVtaTributoId()]['Alic'] = $vta_ajuste_debe_vta_tributo->getAlicuotaPorcentual();
            $arr[$vta_ajuste_debe_vta_tributo->getVtaTributoId()]['Importe'] = $importe_tributo;
        }

        return $arr;
    }

    public function getArrTributoParaAfipVtaAjusteDebeItems() {
        $arr = array();

        $vta_ajuste_debe_vta_tributos = $this->getVtaAjusteDebeVtaTributos(null, null, true);

        foreach ($vta_ajuste_debe_vta_tributos as $vta_ajuste_debe_vta_tributo) {

            $importe_imponible = round($vta_ajuste_debe_vta_tributo->getImporteImponible(), 2);
            $importe_tributo = round($vta_ajuste_debe_vta_tributo->getImporteTributo(), 2);
            $vta_tributo = $vta_ajuste_debe_vta_tributo->getVtaTributo();
            $ws_fe_param_tipo_tributo = $vta_tributo->getWsFeParamTipoTributoXVtaTributoWsFeParamTipoTributo();

            $arr[$vta_ajuste_debe_vta_tributo->getVtaTributoId()]['WS_FE_PARAM_TIPO_TRIBUTO_ID'] = $ws_fe_param_tipo_tributo->getId();
            $arr[$vta_ajuste_debe_vta_tributo->getVtaTributoId()]['Id'] = $ws_fe_param_tipo_tributo->getCodigoAfip();
            $arr[$vta_ajuste_debe_vta_tributo->getVtaTributoId()]['Desc'] = $ws_fe_param_tipo_tributo->getDescripcion();
            $arr[$vta_ajuste_debe_vta_tributo->getVtaTributoId()]['BaseImp'] = $importe_imponible;
            $arr[$vta_ajuste_debe_vta_tributo->getVtaTributoId()]['Alic'] = $vta_ajuste_debe_vta_tributo->getAlicuotaPorcentual();
            $arr[$vta_ajuste_debe_vta_tributo->getVtaTributoId()]['Importe'] = $importe_tributo;
        }

        return $arr;
    }

    public function setAgregarTributos($subtotal_calculado) {

        $arr_vta_tributos_vigentes = $this->getTributosAAplicar($subtotal_calculado);

        // ----------------------------------------------------------------
        // se agrega cada tributo que afecta a la ajuste_debe
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
                        array('campo' => 'vta_ajuste_debe_id', 'valor' => $this->getId()),
                        array('campo' => 'vta_tributo_id', 'valor' => $vta_tributo->getId()),
                    );
                    $vta_ajuste_debe_vta_tributo = VtaAjusteDebeVtaTributo::getOxArray($array);
                    if (!$vta_ajuste_debe_vta_tributo) {
                        $vta_ajuste_debe_vta_tributo = new VtaAjusteDebeVtaTributo();
                        $vta_ajuste_debe_vta_tributo->setVtaAjusteDebeId($this->getId());
                        $vta_ajuste_debe_vta_tributo->setVtaTributoId($vta_tributo->getId());
                    }

                    $importe_neto_gravado = $this->getVtaAjusteDebeSubtotal(false, VtaComprobante::TIPO_SUBTOTAL_GRAVADO);
                    $importe_tributo = $importe_neto_gravado * $vta_tributo->getAlicuotaDecimal();

                    $vta_ajuste_debe_vta_tributo->setImporteImponible($importe_neto_gravado);
                    $vta_ajuste_debe_vta_tributo->setImporteTributo($importe_tributo);
                    $vta_ajuste_debe_vta_tributo->setAlicuotaPorcentual($vta_tributo->getAlicuotaPorcentual());
                    $vta_ajuste_debe_vta_tributo->setAlicuotaDecimal($vta_tributo->getAlicuotaDecimal());
                    $vta_ajuste_debe_vta_tributo->setEstado(1);
                    $vta_ajuste_debe_vta_tributo->save();
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
    public function getTributosAAplicar($subtotal_calculado) {
        $arr_vta_tributos_vigentes = array();

        $vta_tributos = VtaTributo::getVtaTributos(null, null, true);

        foreach ($vta_tributos as $vta_tributo) {
            $vta_tributo_aplica = false;
            $vta_tributo_aplica = $vta_tributo->getVtaTributoAplica($this, $subtotal_calculado);

            if ($vta_tributo_aplica) {
                $arr_vta_tributos_vigentes[] = $vta_tributo_aplica;
            }
        }
        return $arr_vta_tributos_vigentes;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 03/05/2018 11:00 hs.
     * Metodo que retorna el numero de comprobante formato "pto vta - num comp afip".
     * @return String
     */
    public function getNumeroComprobanteCompleto() {
        return $this->getCodigo();
    }

    /**
     * Metodo que retorna el numero de comprobante formato "siglas - letra - pto-vta - num-comp-afip". 
     * @creado_por Esteban Martinez
     * @creado 10/02/2019
     * @return String
     */
    public function getNumeroComprobanteCompletoFull() {
        $vta_punto_venta = $this->getVtaPuntoVenta();
        $numero_punto_venta = $vta_punto_venta->getNumero();
        $siglas_tipo_comprobante = $this->getTipoComprobanteSiglas();
        $numero_comprobante = $this->getCodigo();
        $letra_tipo_comprobante = $this->getVtaTipoAjusteDebe()->getCodigoMin();

        return $siglas_tipo_comprobante . ' ' . $letra_tipo_comprobante . ' ' . str_pad($numero_punto_venta, 4, 0, STR_PAD_LEFT) . '-' . str_pad($numero_comprobante, 8, 0, STR_PAD_LEFT);
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     */
    public function getNumeroComprobante() {
        $numero_comprobante = $this->getNumeroAjusteDebe();
        return $numero_comprobante;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 16/08/2018
     */
    public function getArrIvaComprobanteFull() {
        return $this->getArrIvaAjusteDebeFull();
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 22/10/2018
     */
    public function getArrIvaParaCitiComprobanteFull() {
        return $this->getArrIvaParaCitiAjusteDebeFull();
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 16/08/2018
     */
    public function getArrTributoComprobanteFull() {
        return $this->getArrTributoAjusteDebeFull();
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 03/05/2018 11:00 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna importe del comprobante.
     * @return Float
     */
    public function getImporteTotalComprobante($resumen = false) {

        if($resumen){
            // -------------------------------------------------------------------------
            // se instancia la tabla de resumen
            // -------------------------------------------------------------------------
            $vta_ajuste_debe_importe = $this->getResumenComprobante();
            return $vta_ajuste_debe_importe->getImporteTotal();
        }
        
        return $this->getVtaAjusteDebeTotal();
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/08/2018 22:13 hs.
     * Metodo que retorna el importe total del DEBE del comprobante
     * @return Double
     */
    public function getImporteTotalComprobanteDebe() {
        $importe_total_debe = $this->getImporteTotalComprobante($resumen = true);
        return $importe_total_debe;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/08/2018 22:13 hs.
     * Metodo que retorna el importe total del DEBE del comprobante
     * @return Double
     */
    public function getImporteTotalComprobanteHaber() {
        $importe_total_haber = 0;
        return $importe_total_haber;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImporteSubtotal($tipo_subtotal = false) {

        return $this->getVtaAjusteDebeSubtotal(false, $tipo_subtotal);
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 01/10/2018
     */
    public function getImporteIvaBaseImponible($codigo = false, $arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaAjusteDebeFull();
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
            $arr_iva_full = $this->getArrIvaAjusteDebeFull();
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
            $arr_iva_full = $this->getArrIvaAjusteDebeFull();
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
            $arr_iva_full = $this->getArrIvaAjusteDebeFull();
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
            $arr_iva_full = $this->getArrIvaAjusteDebeFull();
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
            $arr_iva_full = $this->getArrIvaAjusteDebeFull();
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
            $arr_iva_full = $this->getArrIvaAjusteDebeFull();
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
            $arr_iva_full = $this->getArrIvaAjusteDebeFull();
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
            $arr_iva_full = $this->getArrIvaAjusteDebeFull();
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
            $arr_tributo_full = $this->getArrTributoAjusteDebeFull();
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
            $arr_tributo_full = $this->getArrTributoAjusteDebeFull();
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
            $arr_tributo_full = $this->getArrTributoAjusteDebeFull();
        }

        $arr_tributo = $arr_tributo_full[PERCEPCIONES_IIBB];

        return $arr_tributo['importe_tributo'];
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImporteTotal() {
        return $this->getVtaAjusteDebeTotal();
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 03/05/2018 11:00 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna la forma de pago si existe.
     * @return String
     */
    public function getFormaPagoComprobante() {
        $gral_fp_forma_pago = $this->getGralFpFormaPago();
        $descripcion = $gral_fp_forma_pago->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 03/05/2018 11:00 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna el tipo de comprobante si existe.
     * @return String
     */
    public function getTipoComprobante() {
        $tipo_comprobante = $this->getVtaTipoAjusteDebe();
        $descripcion = $tipo_comprobante->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 28/07/2018 15:13 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna el tipo de comprobante si existe.
     * @return String
     */
    public function getTipoComprobanteMin() {
        $tipo_comprobante = $this->getVtaTipoAjusteDebe();
        $descripcion = $tipo_comprobante->getCodigoMin();

        return $descripcion;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 03/05/2018 11:00 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna el tipo estado si existe.
     * @return String
     */
    public function getTipoEstadoComprobante() {
        $comprobante_tipo_estado = $this->getVtaAjusteDebeTipoEstado();
        $descripcion = $comprobante_tipo_estado->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 12/08/2020 23:45 hs.
     * Metodo generico que devuelve el origen del comprobante
     * @return String
     */
    public function getVtaTipoOrigenComprobanteDescripcion() {
        $descripcion = $this->getVtaTipoOrigenAjusteDebe()->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 12/08/2020 23:45 hs.
     * Metodo generico que devuelve el tipo de comprobante
     * @return String
     */
    public function getVtaTipoComprobanteDescripcion() {
        $descripcion = $this->getVtaTipoAjusteDebe()->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 03/11/2018 17:06 hs.
     * Metodo utilizado en la imputacion de comprobantes.
     * @return 
     */
    public function setImputarVtaComprobante($recalcular_estado, $vta_nota_credito_ids = null, $vta_recibo_ids = null, $vta_ajuste_haber_ids = null) {
        // Importe a imputar
        $vta_ajuste_debe_importe_total_a_imputar = $this->getSaldoImputable();

        // Agrupo todos los comprobantes para poder ordenarlos por fecha de emision
        foreach ($vta_recibo_ids as $vta_recibo_id) {
            $vta_recibo = VtaRecibo::getOxId($vta_recibo_id);
            $vta_comprobantes[] = $vta_recibo;
        }
        foreach ($vta_nota_credito_ids as $vta_nota_credito_id) {
            $vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);
            $vta_comprobantes[] = $vta_nota_credito;
        }

        foreach ($vta_ajuste_haber_ids as $vta_ajuste_haber_id) {
            $vta_ajuste_haber = VtaAjusteHaber::getOxId($vta_ajuste_haber_id);
            $vta_comprobantes[] = $vta_ajuste_haber;
        }

        // Ordeno los comprobantes
        usort($vta_comprobantes, array($this, 'self::getOrdenarColeccionComprobantes'));

        $vta_ajuste_debe_importe_a_imputar = $vta_ajuste_debe_importe_total_a_imputar;
        // Genero el vinculo con el comprobante correspondiente
        foreach ($vta_comprobantes as $vta_comprobante) {

            if ((int) ($vta_ajuste_debe_importe_a_imputar * 100) > 0) {
                $clase = get_class($vta_comprobante);

                if ($clase == 'VtaNotaCredito') {
                    $vta_nota_credito = VtaNotaCredito::getOxId($vta_comprobante->getId());
                    $vta_nota_credito_importe_disponible = $vta_nota_credito->getSaldoImputable();

                    // Genero la relacion
                    $vta_ajuste_debe_vta_nota_credito = new VtaAjusteDebeVtaNotaCredito();
                    $vta_ajuste_debe_vta_nota_credito->setVtaAjusteDebeId($this->getId());
                    $vta_ajuste_debe_vta_nota_credito->setVtaNotaCreditoId($vta_nota_credito->getId());

                    // Monto de la ajuste_debe mayor o igual al de la NC
                    if ((int) ($vta_ajuste_debe_importe_a_imputar * 100) < (int) ($vta_nota_credito_importe_disponible * 100)) {

                        $vta_ajuste_debe_vta_nota_credito->setImporteAfectado($vta_ajuste_debe_importe_a_imputar);
                    } else {
                        $vta_ajuste_debe_vta_nota_credito->setImporteAfectado($vta_nota_credito_importe_disponible);
                    }
                    $vta_ajuste_debe_vta_nota_credito->setEstado(1);
                    $vta_ajuste_debe_vta_nota_credito->save();

                    $vta_ajuste_debe_importe_a_imputar -= $vta_nota_credito_importe_disponible;
                } elseif ($clase == 'VtaRecibo') {
                    $vta_recibo = VtaRecibo::getOxId($vta_comprobante->getId());

                    $vta_recibo_importe_disponible = $vta_recibo->getSaldoImputable();

                    // Genero la relacion
                    $vta_ajuste_debe_vta_recibo = new VtaAjusteDebeVtaRecibo();
                    $vta_ajuste_debe_vta_recibo->setVtaAjusteDebeId($this->getId());
                    $vta_ajuste_debe_vta_recibo->setVtaReciboId($vta_recibo->getId());

                    // Monto de la ajuste_debe mayor o igual al del Recibo
                    if ((int) ($vta_ajuste_debe_importe_a_imputar * 100) < (int) ($vta_recibo_importe_disponible * 100)) {
                        $vta_ajuste_debe_vta_recibo->setImporteAfectado($vta_ajuste_debe_importe_a_imputar);
                    } else {
                        $vta_ajuste_debe_vta_recibo->setImporteAfectado($vta_recibo_importe_disponible);
                    }
                    $vta_ajuste_debe_vta_recibo->setEstado(1);
                    $vta_ajuste_debe_vta_recibo->save();

                    $vta_ajuste_debe_importe_a_imputar -= $vta_recibo_importe_disponible;
                } elseif ($clase == 'VtaAjusteHaber') {
                    $vta_ajuste_haber = VtaAjusteHaber::getOxId($vta_comprobante->getId());

                    $vta_ajuste_haber_importe_disponible = $vta_ajuste_haber->getSaldoImputable();

                    // Genero la relacion
                    $vta_ajuste_debe_vta_ajuste_haber = new VtaAjusteDebeVtaAjusteHaber();
                    $vta_ajuste_debe_vta_ajuste_haber->setVtaAjusteDebeId($this->getId());
                    $vta_ajuste_debe_vta_ajuste_haber->setVtaAjusteHaberId($vta_ajuste_haber->getId());

                    // Monto de la ajuste_debe mayor o igual al del Ajuste
                    if ((int) ($vta_ajuste_debe_importe_a_imputar * 100) < (int) ($vta_ajuste_haber_importe_disponible * 100)) {
                        $vta_ajuste_debe_vta_ajuste_haber->setImporteAfectado($vta_ajuste_debe_importe_a_imputar);
                    } else {
                        $vta_ajuste_debe_vta_ajuste_haber->setImporteAfectado($vta_ajuste_haber_importe_disponible);
                    }
                    $vta_ajuste_debe_vta_ajuste_haber->setEstado(1);
                    $vta_ajuste_debe_vta_ajuste_haber->save();

                    $vta_ajuste_debe_importe_a_imputar -= $vta_ajuste_haber_importe_disponible;
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
     * @return Obj VtaAjusteDebeEstado
     */
    public function setRecalcularEstado($recursivo = false) {

        // Importe imputable del comprobante
        $importe_comprobante_total = $this->getImporteTotalComprobante();

        $importe_comprobante_saldo = $importe_comprobante_total;

        $vta_ajuste_debe_vta_recibos = $this->getVtaAjusteDebeVtaRecibos(null, null, true);
        $vta_ajuste_debe_vta_nota_creditos = $this->getVtaAjusteDebeVtaNotaCreditos(null, null, true);
        $vta_ajuste_debe_vta_ajuste_habers = $this->getVtaAjusteDebeVtaAjusteHabers(null, null, true);

        // ---------------------------------------------------------------------
        // se recorren los recibos vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_ajuste_debe_vta_recibos as $vta_ajuste_debe_vta_recibo) {
            $importe_afectado = $vta_ajuste_debe_vta_recibo->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $vta_ajuste_debe_vta_recibo->getVtaRecibo()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren las notas de credito vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_ajuste_debe_vta_nota_creditos as $vta_ajuste_debe_vta_nota_credito) {
            $importe_afectado = $vta_ajuste_debe_vta_nota_credito->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $vta_ajuste_debe_vta_nota_credito->getVtaNotaCredito()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren las ajustes vinculados
        // ---------------------------------------------------------------------
        foreach ($vta_ajuste_debe_vta_ajuste_habers as $vta_ajuste_debe_vta_ajuste_haber) {
            $importe_afectado = $vta_ajuste_debe_vta_ajuste_haber->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $vta_ajuste_debe_vta_ajuste_haber->getVtaAjusteHaber()->setRecalcularEstado(false);
            }
        }

        if ((abs($importe_comprobante_saldo) >= 0) && (abs($importe_comprobante_saldo) <= ConfVariable::getImporteMargenToleranciaConciliacionSaldado())) {
            // -----------------------------------------------------------------
            // si tiene saldo cero el comprobante fue usado en su totalidad
            // -----------------------------------------------------------------
            $vta_ajuste_debe_estado = $this->setVtaAjusteDebeEstado(VtaAjusteDebeTipoEstado::TIPO_SALDADO, '' . $importe_comprobante_saldo);
        } elseif ($importe_comprobante_saldo > ConfVariable::getImporteMargenToleranciaConciliacionSaldado() && $importe_comprobante_saldo != $importe_comprobante_total) {
            // -----------------------------------------------------------------
            // si tiene saldo mayor a cero el comprobante fue usado parcialmente
            // -----------------------------------------------------------------
            $vta_ajuste_debe_estado = $this->setVtaAjusteDebeEstado(VtaAjusteDebeTipoEstado::TIPO_SALDADO_PARCIAL, '');
        } elseif ($importe_comprobante_saldo == $importe_comprobante_total) {
            // -----------------------------------------------------------------
            // si tiene saldo igual al total se encuentra pendiente de pago
            // -----------------------------------------------------------------
            $vta_ajuste_debe_estado = $this->setVtaAjusteDebeEstado(VtaAjusteDebeTipoEstado::TIPO_PENDIENTE, '');
        }

        return $vta_ajuste_debe_estado;
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

        $vta_ajuste_debe_vta_nota_creditos = $this->getVtaAjusteDebeVtaNotaCreditos(null, null, true);
        $vta_ajuste_debe_vta_recibos = $this->getVtaAjusteDebeVtaRecibos(null, null, true);
        $vta_ajuste_debe_vta_ajuste_habers = $this->getVtaAjusteDebeVtaAjusteHabers(null, null, true);

        // ---------------------------------------------------------------------
        // se recorren las notas de credito vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_ajuste_debe_vta_nota_creditos as $vta_ajuste_debe_vta_nota_credito) {
            $vta_ajuste_debe_vta_nota_credito->setEstado(0);
            $vta_ajuste_debe_vta_nota_credito->save();

            if ($recursivo) {
                $vta_ajuste_debe_vta_nota_credito->getVtaNotaCredito()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren los recibos vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_ajuste_debe_vta_recibos as $vta_ajuste_debe_vta_recibo) {
            $vta_ajuste_debe_vta_recibo->setEstado(0);
            $vta_ajuste_debe_vta_recibo->save();

            if ($recursivo) {
                $vta_ajuste_debe_vta_recibo->getVtaRecibo()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren los ajustes vinculados
        // ---------------------------------------------------------------------
        foreach ($vta_ajuste_debe_vta_ajuste_habers as $vta_ajuste_debe_vta_ajuste_haber) {
            $vta_ajuste_debe_vta_ajuste_haber->setEstado(0);
            $vta_ajuste_debe_vta_ajuste_haber->save();

            if ($recursivo) {
                $vta_ajuste_debe_vta_ajuste_haber->getVtaAjusteHaber()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recalcula estado del comprobante
        // ---------------------------------------------------------------------        
        $this->setRecalcularEstado(false);

        return true;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 15/05/2018 11:00 hs.
     * Metodo que retorna el importe disponible a imputar de una AjusteDebe.
     * @return Float
     */
    public function getSaldoImputable() {
        $importe_total_comprobante_afectado = 0;

        // Busco el importe total de la AjusteDebe
        $importe_total_comprobante = $this->getImporteTotalComprobante($resumen = true);

        // Busco el importe total ya imputado con Recibos
        $vta_ajuste_debe_vta_recibos = $this->getVtaAjusteDebeVtaRecibos(null, null, true);
        foreach ($vta_ajuste_debe_vta_recibos as $vta_ajuste_debe_vta_recibo) {
            $importe_total_comprobante_afectado += $vta_ajuste_debe_vta_recibo->getImporteAfectado();
        }

        // Busco el importe total ya imputado con Notas de Creditos
        $vta_ajuste_debe_vta_nota_creditos = $this->getVtaAjusteDebeVtaNotaCreditos(null, null, true);
        foreach ($vta_ajuste_debe_vta_nota_creditos as $vta_ajuste_debe_vta_nota_credito) {
            $importe_total_comprobante_afectado += $vta_ajuste_debe_vta_nota_credito->getImporteAfectado();
        }

        // Busco el importe total ya imputado con Ajustes
        $vta_ajuste_debe_vta_ajuste_habers = $this->getVtaAjusteDebeVtaAjusteHabers(null, null, true);
        foreach ($vta_ajuste_debe_vta_ajuste_habers as $vta_ajuste_debe_vta_ajuste_haber) {
            $importe_total_comprobante_afectado += $vta_ajuste_debe_vta_ajuste_haber->getImporteAfectado();
        }

        $importe_total_comprobante = round($importe_total_comprobante, 2);
        $importe_total_comprobante_afectado = round($importe_total_comprobante_afectado, 2);

        $importe_total_comprobante_disponible = $importe_total_comprobante - $importe_total_comprobante_afectado;

        return $importe_total_comprobante_disponible;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que retorna una coleccion de AjusteDebes para imputar en las NC y Recibos.
     * @return VtaAjusteDebes
     */
    static function getVtaAjusteDebesImputables($cli_cliente_id, $gral_empresa_id) {
        $criterio = new Criterio(VtaAjusteDebe::SES_CRITERIOS);
        $criterio->setAmbiguo(false);
        $criterio->addDistinct(true);

        $criterio->addInicioSubconsulta();
        $criterio->add('', 'true', '', false, "");

        $criterio->add(VtaAjusteDebe::GEN_ATTR_CLI_CLIENTE_ID, $cli_cliente_id, Criterio::IGUAL);
        $criterio->add(VtaAjusteDebe::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
        $criterio->addFinSubconsulta();

        //----------------------------------------------
        // Aca va un inicio de subconsulta con el fin y despues los join
        //----------------------------------------------
        $criterio->addInicioSubconsulta();
        //$criterio->add('', 'true', '', false, "");
        //$criterio->add(VtaAjusteDebeTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $criterio->add(VtaAjusteDebeTipoEstado::GEN_ATTR_IMPUTABLE, 1, Criterio::IGUAL);
        //$criterio->add(VtaAjusteDebeTipoEstado::GEN_ATTR_TERMINAL, 0, Criterio::IGUAL);

        $criterio->addRealJoin(VtaAjusteDebeTipoEstado::GEN_TABLA, VtaAjusteDebeTipoEstado::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, 'LEFT JOIN');
        $criterio->addFinSubconsulta();

        $criterio->addTabla(VtaAjusteDebe::GEN_TABLA);
        $criterio->setCriterios();

        $vta_ajuste_debes = VtaAjusteDebe::getVtaAjusteDebes(null, $criterio, true);

        return $vta_ajuste_debes;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que retorna el importe disponible para ser imputado en un Recibo o una Nota de Credito.
     * @return Float
     */
    public function getImporteDisponibleComprobante() {
        return $this->getImporteTotalComprobante();
    }

    public function getVtaComprobanteTipoEstado() {
        return $this->getVtaAjusteDebeTipoEstado();
    }

    /**
     * Metodo que retorna los comprobantes vinculados al comprobante por conciliacion
     */
    public function getVtaComprobantesVinculadosPorConciliacion() {
        $vta_ajuste_debe_vta_nota_creditos = $this->getVtaAjusteDebeVtaNotaCreditos(null, null, true);
        $vta_ajuste_debe_vta_recibos = $this->getVtaAjusteDebeVtaRecibos(null, null, true);
        $vta_ajuste_debe_vta_ajuste_habers = $this->getVtaAjusteDebeVtaAjusteHabers(null, null, true);

        $vta_nota_creditos = $this->getVtaNotaCreditosXVtaAjusteDebeVtaNotaCredito(null, null, true);
        $vta_recibos = $this->getVtaRecibosXVtaAjusteDebeVtaRecibo(null, null, true);
        $vta_ajuste_habers = $this->getVtaAjusteHabersXVtaAjusteDebeVtaAjusteHaber(null, null, true);

        $arr_comprobantes['INTERMEDIO'] = array_merge($vta_ajuste_debe_vta_nota_creditos, $vta_ajuste_debe_vta_recibos, $vta_ajuste_debe_vta_ajuste_habers);
        $arr_comprobantes['EXTREMO'] = array_merge($vta_nota_creditos, $vta_recibos, $vta_ajuste_habers);

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
        // se verifica que el comprobante no este vinculado a ninguna comision
        // ---------------------------------------------------------------------
        $c = new Criterio();
        $c->add(VtaComisionVtaAjusteDebe::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(VtaComisionTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL);
        $c->addTabla(VtaComisionVtaAjusteDebe::GEN_TABLA);
        $c->addRealJoin(VtaComision::GEN_TABLA, VtaComision::GEN_ATTR_ID, VtaComisionVtaAjusteDebe::GEN_ATTR_VTA_COMISION_ID);
        $c->addRealJoin(VtaComisionTipoEstado::GEN_TABLA, VtaComisionTipoEstado::GEN_ATTR_ID, VtaComision::GEN_ATTR_VTA_COMISION_TIPO_ESTADO_ID);
        $c->setCriterios();

        $vta_comision_vta_ajuste_debes = $this->getVtaComisionVtaAjusteDebes(null, $c);
        if (count($vta_comision_vta_ajuste_debes) > 0) {
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

        $ws_fe_ope_solicituds = $this->getWsFeOpeSolicitudsXVtaAjusteDebeWsFeOpeSolicitud();
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
    static function getVtaAjusteDebesSinCaeParaWidget($fecha_desde = "", $fecha_hasta = "") {
        $criterio = new Criterio();

        $criterio->setAmbiguo(false);
        $criterio->addDistinct(true);

        $criterio->addInicioSubconsulta();
        $criterio->add(VtaAjusteDebeTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL, false, '');
        $criterio->add(VtaAjusteDebeTipoEstado::GEN_ATTR_CODIGO, VtaAjusteDebeTipoEstado::TIPO_GENERADO, Criterio::IGUAL, false, Criterio::_OR);
        $criterio->add(VtaAjusteDebeTipoEstado::GEN_ATTR_CODIGO, VtaAjusteDebeTipoEstado::TIPO_RECHAZADO_AFIP, Criterio::IGUAL, false, Criterio::_OR);
        $criterio->add(VtaAjusteDebeTipoEstado::GEN_ATTR_CODIGO, VtaAjusteDebeTipoEstado::TIPO_OBSERVADO_AFIP, Criterio::IGUAL, false, Criterio::_OR);
        $criterio->addFinSubconsulta();

        if ($fecha_desde != "") {
            $criterio->add(VtaAjusteDebe::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL, 'fecha_desde');
        }

        if ($fecha_hasta != "") {
            $criterio->add(VtaAjusteDebe::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL, 'fecha_hasta');
        }

        $criterio->add(VtaAjusteDebe::GEN_ATTR_CAE, Criterio::VACIO, Criterio::IGUAL); // CAE vacio

        $criterio->addTabla(VtaAjusteDebe::GEN_TABLA);
        $criterio->addRealJoin(VtaAjusteDebeTipoEstado::GEN_TABLA, VtaAjusteDebeTipoEstado::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID);
        $criterio->setCriterios();

        $vta_ajuste_debes = VtaAjusteDebe::getVtaAjusteDebes($paginador = null, $criterio, $estado = null, $arr_ordens = false);
        return $vta_ajuste_debes;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 08/01/2019
     * @modificado_por Esteban Martinez
     * @modificado 10/01/2019
     */
    public function getArrComprobantesParaAtender($fecha_desde, $fecha_hasta) {
        $vta_tipo_ajuste_debes = VtaTipoAjusteDebe::getVtaTipoAjusteDebes();
        $vta_punto_ventas = VtaPuntoVenta::getVtaPuntoVentas();
        $arr_nro_comprobantes_inexistentes = array();

        foreach ($vta_punto_ventas as $vta_punto_venta) {
            foreach ($vta_tipo_ajuste_debes as $vta_tipo_ajuste_debe) {
                $arr_nro_comprobantes = array();
                $array_keys_arr_nro_comprobante = array();
                $vta_ajuste_debes = self::getVtaAjusteDebesXVtaTipoAjusteDebeYFechaEmision($vta_punto_venta->getId(), $vta_tipo_ajuste_debe->getId(), $fecha_desde, $fecha_hasta);
                if (count($vta_ajuste_debes) > 0) {
                    foreach ($vta_ajuste_debes as $vta_ajuste_debe) {
                        if (array_key_exists($vta_ajuste_debe->getNumeroAjusteDebe(), $arr_nro_comprobantes)) {
                            $mensaje = "Comprobante duplicado nro '" . $vta_ajuste_debe->getNumeroAjusteDebe() . "' - " . $vta_tipo_ajuste_debe->getDescripcion() . " (" . $vta_punto_venta->getDescripcion() . ")";
                            $arr_nro_comprobantes_inexistentes[$i] = array('nro_comprobante' => $vta_ajuste_debe->getNumeroAjusteDebe(), 'mensaje' => $mensaje);
                        }
                        $arr_nro_comprobantes[$vta_ajuste_debe->getNumeroAjusteDebe()] = $vta_ajuste_debe;
                    }

                    if ($vta_ajuste_debes) {
                        $array_keys_arr_nro_comprobantes = array_keys($arr_nro_comprobantes);

                        $primer_nro_comprobante = $array_keys_arr_nro_comprobantes[0];
                        $ultimo_nro_comprobante = $array_keys_arr_nro_comprobantes[count($array_keys_arr_nro_comprobantes) - 1];

                        if ($primer_nro_comprobante != '' && $ultimo_nro_comprobante != '') {
                            for ($i = $primer_nro_comprobante; $i <= $ultimo_nro_comprobante; $i++) {
                                if (!in_array($i, $array_keys_arr_nro_comprobantes)) {
                                    $mensaje = "No se encuentra el comprobante nro '" . $i . "' - " . $vta_tipo_ajuste_debe->getDescripcion() . " (" . $vta_punto_venta->getDescripcion() . ")";
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
        }

        return $arr_nro_comprobantes_inexistentes;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 08/01/2020
     */
    static function getVtaAjusteDebesXVtaTipoAjusteDebeYFechaEmision($vta_punto_venta_id, $vta_tipo_ajuste_debe_id, $fecha_desde, $fecha_hasta) {
        $vta_ajuste_debes = array();
        if ($vta_tipo_ajuste_debe_id) {
            $criterio = new Criterio();
            if ($fecha_desde != '') {
                $criterio->add(VtaAjusteDebe::GEN_ATTR_FECHA_EMISION, $fecha_desde, Criterio::MAYORIGUAL);
            }

            if ($fecha_hasta != '') {
                $criterio->add(VtaAjusteDebe::GEN_ATTR_FECHA_EMISION, $fecha_hasta, Criterio::MENORIGUAL);
            }

            $criterio->add(VtaAjusteDebe::GEN_ATTR_VTA_TIPO_AJUSTE_DEBE_ID, $vta_tipo_ajuste_debe_id, Criterio::IGUAL);
            $criterio->add(VtaAjusteDebe::GEN_ATTR_VTA_PUNTO_VENTA_ID, $vta_punto_venta_id, Criterio::IGUAL);
            $criterio->add(VtaAjusteDebe::GEN_ATTR_CAE, Criterio::VACIO, Criterio::DISTINTO);
            $criterio->addTabla(VtaAjusteDebe::GEN_TABLA);
            $criterio->addOrden(VtaAjusteDebe::GEN_ATTR_NUMERO_AJUSTE_DEBE_COMPLETO, Criterio::_ASC);
            $criterio->setCriterios();

            $vta_ajuste_debes = VtaAjusteDebe::getVtaAjusteDebes($paginador = null, $criterio, $estado = null, $arr_ordens = false);
        }

        return $vta_ajuste_debes;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 24/01/2019 18:48
     * Metodo que retorna una comision activa de la ajuste_debe
     */
    public function getVtaComisionActiva($vta_preventista_id = false, $vta_comprador_id = false, $vta_vendedor_id = false) {

        // ---------------------------------------------------------------------
        // se consultan las ajuste_debes comisionadas de un comisionista
        // ---------------------------------------------------------------------
        $c = new Criterio();
        $c->add(VtaAjusteDebe::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaComisionTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL); // comision no anulada

        if ($vta_preventista_id) {
            $c->add(VtaComision::GEN_ATTR_VTA_PREVENTISTA_ID, $vta_preventista_id, Criterio::IGUAL);
        }
        if ($vta_comprador_id) {
            $c->add(VtaComision::GEN_ATTR_VTA_COMPRADOR_ID, $vta_comprador_id, Criterio::IGUAL);
        }
        if ($vta_vendedor_id) {
            $c->add(VtaComision::GEN_ATTR_VTA_VENDEDOR_ID, $vta_vendedor_id, Criterio::IGUAL);
        }

        $c->addTabla(VtaComision::GEN_TABLA);
        $c->addRealJoin(VtaComisionTipoEstado::GEN_TABLA, VtaComisionTipoEstado::GEN_ATTR_ID, VtaComision::GEN_ATTR_VTA_COMISION_TIPO_ESTADO_ID);
        $c->addRealJoin(VtaComisionVtaAjusteDebe::GEN_TABLA, VtaComisionVtaAjusteDebe::GEN_ATTR_VTA_COMISION_ID, VtaComision::GEN_ATTR_ID);
        $c->addRealJoin(VtaAjusteDebe::GEN_TABLA, VtaAjusteDebe::GEN_ATTR_ID, VtaComisionVtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_ID);
        $c->addRealJoin(VtaAjusteDebeTipoEstado::GEN_TABLA, VtaAjusteDebeTipoEstado::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID);
        $c->addOrden(VtaComision::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        //$p = new Paginador(5, 1);
        $p = null;

        $vta_comisions = VtaComision::getVtaComisions($p, $c);
        foreach ($vta_comisions as $vta_comision) {
            return $vta_comision;
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/01/2019 10:40
     * Metodo que calcula el importe base comisionable de una ajuste_debe
     * @return type
     */
    public function getImporteBaseComisionable($vta_ajuste_debe_vta_ajuste_habers = false) {
        $vta_presupuesto = $this->getVtaPresupuesto();
        
        $importe_total_comprobante = $this->getImporteTotalComprobante();
        //$importe_subtotal_comprobante = $this->getImporteSubtotal();
        $importe_subtotal_comprobante = $this->getImporteTotal(); // Excepcion en el caso de AJUSTESBaseCom DEBE se comisiona por todo el comprobante
        $importe_logistica = $vta_presupuesto->getImporteLogistica();

        $importe_subtotal_comprobante = $importe_subtotal_comprobante - $importe_logistica;
                
        //if (!$vta_ajuste_debe_vta_ajuste_habers) {
        //    $vta_ajuste_debe_vta_ajuste_habers = $this->getVtaAjusteDebeVtaAjusteHabers(null, null, true);
        //}

        foreach ($vta_ajuste_debe_vta_ajuste_habers as $vta_ajuste_debe_vta_ajuste_haber) {
            $importe_nota_credito_afectado = $vta_ajuste_debe_vta_ajuste_haber->getImporteAfectado();

            // se calcula el porcentaje sin impuestos de la ajuste_debe            
            $porcentaje_ajuste_debe_sin_impuestos = $importe_subtotal_comprobante / $importe_total_comprobante;

            // se determina el importe afectado menos impuestos
            $importe_nota_credito_afectado_sin_impuestos = $importe_nota_credito_afectado * $porcentaje_ajuste_debe_sin_impuestos;

            // se suman todos los valores afectados sin impuesto
            $importe_notas_credito_vinculados += $importe_nota_credito_afectado_sin_impuestos;
        }

        // la base comisionable es el importe subtotal de la ajuste_debe (no incluye impuestos) menos las NC vinculadas sin impuestos
        $importe_base_comisionable = $importe_subtotal_comprobante - $importe_notas_credito_vinculados;
        return $importe_base_comisionable;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 12/11/2019 07:45
     * Metodo que registra la anulacion del comprobante
     */
    public function setAnularComprobanteSinCAE($observacion) {
        // ---------------------------------------------------------------------
        // se registra nuevo estado de anulado
        // ---------------------------------------------------------------------
        $vta_ajuste_debe_estado = $this->setVtaAjusteDebeEstado(
                VtaAjusteDebeTipoEstado::TIPO_ANULADO, $observacion
        );

        foreach ($this->getVtaAjusteDebeVtaOrdenVentas() as $vta_ajuste_debe_vta_orden_venta) {

            $vta_ajuste_debe_vta_orden_venta->setEstado(0);
            $vta_ajuste_debe_vta_orden_venta->save();

            $vta_orden_venta = $vta_ajuste_debe_vta_orden_venta->getVtaOrdenVenta();
            $vta_orden_venta->setRetrotraerVtaOrdenVentaTipoEstadoFacturacion($observacion = 'Se retrotrae estado por anulacion de AjusteDebe ' . $this->getNumeroComprobanteCompleto());
        }

        return $vta_ajuste_debe_estado;
    }

    /*
     * Metodo que verifica si la ajuste_debe tiene alguna solicitud con nro de comprobante asignado 
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

        $ws_fe_ope_solicituds = $this->getWsFeOpeSolicitudsXVtaAjusteDebeWsFeOpeSolicitud();
        foreach ($ws_fe_ope_solicituds as $ws_fe_ope_solicitud) {

            $ws_fe_afip_punto_venta = $ws_fe_ope_solicitud->getWsFeAfipPuntoVenta();
            $ws_fe_afip_comprobante_desde = $ws_fe_ope_solicitud->getWsFeAfipComprobanteDesde();
            $ws_fe_afip_tipo_comprobante = $ws_fe_ope_solicitud->getWsFeAfipTipoComprobante();

            //Gral::pr($ws_fe_afip_punto_venta);
            //Gral::pr($ws_fe_afip_comprobante_desde);
            //Gral::pr($ws_fe_afip_tipo_comprobante);

            $datos[] = $ws_afip->FECompConsultar($ws_fe_afip_punto_venta, $ws_fe_afip_comprobante_desde, $ws_fe_afip_tipo_comprobante);
        }
        return $datos;
    }
    
    public function getCodigoOpCliente(){
        return ''; // para evitar errores en vta_comprobante_gestion
    }
    
    /**
     * Actualiza el resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function setActualizarResumenComprobante() {
        $vta_ajuste_debe_importe = $this->getVtaAjusteDebeImporte();

        if (!$vta_ajuste_debe_importe) {
            $vta_ajuste_debe_importe = new VtaAjusteDebeImporte();
        }

        $importe_subtotal = $this->getVtaAjusteDebeSubtotal(false, false);
        $importe_iva = $this->getVtaAjusteDebeIva(false);
        $importe_tributo = $this->getVtaAjusteDebeTributo();
        $importe_total = $importe_subtotal + $importe_iva + $importe_tributo;

        $vta_ajuste_debe_importe->setDescripcion($this->getNumeroComprobanteCompleto());
        $vta_ajuste_debe_importe->setVtaAjusteDebeId($this->getId());
        $vta_ajuste_debe_importe->setImporteSubtotal($importe_subtotal);
        $vta_ajuste_debe_importe->setImporteIva($importe_iva);
        $vta_ajuste_debe_importe->setImporteTributo($importe_tributo);
        $vta_ajuste_debe_importe->setImporteTotal($importe_total);
        $vta_ajuste_debe_importe->setEstado(1);
        $vta_ajuste_debe_importe->save();

        return $vta_ajuste_debe_importe;
    }

    /**
     * Retorna un resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function getResumenComprobante() {
        if ($this->getVtaAjusteDebeImporte()) {
            return $this->getVtaAjusteDebeImporte();
        }

        return new VtaAjusteDebeImporte();
    }
    
    /**
     * Autor: Baez Julian
     * Fecha: 09/08/2022 13:00
     * @return type
     */
    public function getVtaRemitoAjustesVinculados(){
        $vta_remito_ajustes_vinculados = array();
        
        $vta_orden_ventas = $this->getVtaOrdenVentasXVtaAjusteDebeVtaOrdenVenta();
        foreach($vta_orden_ventas as $vta_orden_venta){
            $vta_remito_ajustes = $vta_orden_venta->getVtaRemitoAjustesXVtaRemitoAjusteVtaOrdenVenta();
            foreach($vta_remito_ajustes as $vta_remito_ajuste){
                $vta_remito_ajustes_vinculados[$vta_remito_ajuste->getId()] = $vta_remito_ajuste;
            }
        }
        
        return $vta_remito_ajustes_vinculados;
    }
    
    /**
     * Autor: Baez Julian
     * Fecha: 09/08/2022 13:00
     * @param type $gral_tipo_iva_codigo
     * @return type
     */
    public function getImporteTotalPorTipoIVA($gral_tipo_iva_codigo){
        $importe_total = 0;
        
        $vta_ajuste_debe_vta_orden_ventas = $this->getVtaAjusteDebeVtaOrdenVentas(null, null, true);
        foreach($vta_ajuste_debe_vta_orden_ventas as $vta_ajuste_debe_vta_orden_venta){
            $importe_total+=$vta_ajuste_debe_vta_orden_venta->getImporteTotalPorTipoIVA($gral_tipo_iva_codigo);
        }
        
        $vta_ajuste_debe_items = $this->getVtaAjusteDebeItems(null, null, true);
        foreach ($vta_ajuste_debe_items as $vta_ajuste_debe_item) {
            $importe_total+=$vta_ajuste_debe_item->getImporteTotalPorTipoIVA($gral_tipo_iva_codigo);
        }
        
        return $importe_total;
    }
    
    /**
     * 
     * @param type $solo_productos
     * @return type
     */
    public function getCantidadItems($solo_productos = false){
        $vta_ajuste_debe_vta_orden_ventas = $this->getVtaAjusteDebeVtaOrdenVentas();
        $vta_ajuste_debe_items = $this->getVtaAjusteDebeItems();
        $cantidad_items = count($vta_ajuste_debe_vta_orden_ventas) + count($vta_ajuste_debe_items);
        
        if($solo_productos){
            // restar OVs que no sean productos
        }

        return $cantidad_items;        
    }
    
    /**
     *
     *
     */
    public function getVtaComisionVtaAjusteDebeXComisionista($vta_vendedor_id = 0, $vta_preventista_id = 0, $vta_comprador_id = 0) {
        $c = new Criterio();
        $c->addDistinct(true);
        VtaComisionVtaAjusteDebe::setAplicarFiltrosDeAlcance($c);
        $c->add(VtaAjusteDebe::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaComisionTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL); // comision no anulada
        
        if ($vta_vendedor_id != 0) {
            $c->add(VtaComision::GEN_ATTR_VTA_VENDEDOR_ID, $vta_vendedor_id, Criterio::IGUAL);
        }
        if ($vta_preventista_id != 0) {
            $c->add(VtaComision::GEN_ATTR_VTA_PREVENTISTA_ID, $vta_preventista_id, Criterio::IGUAL);
        }
        if ($vta_comprador_id != 0) {
            $c->add(VtaComision::GEN_ATTR_VTA_COMPRADOR_ID, $vta_comprador_id, Criterio::IGUAL);
        }
        
        $c->addTabla(VtaComisionVtaAjusteDebe::GEN_TABLA);
        $c->addRealJoin(VtaComision::GEN_TABLA, VtaComision::GEN_ATTR_ID, VtaComisionVtaAjusteDebe::GEN_ATTR_VTA_COMISION_ID, 'LEFT JOIN');
        $c->addRealJoin(VtaComisionTipoEstado::GEN_TABLA, VtaComisionTipoEstado::GEN_ATTR_ID, VtaComision::GEN_ATTR_VTA_COMISION_TIPO_ESTADO_ID, 'LEFT JOIN');
        $c->addRealJoin(VtaAjusteDebe::GEN_TABLA, VtaAjusteDebe::GEN_ATTR_ID, VtaComisionVtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_ID, 'LEFT JOIN');
        $c->addRealJoin(VtaAjusteDebeTipoEstado::GEN_TABLA, VtaAjusteDebeTipoEstado::GEN_ATTR_ID, VtaAjusteDebe::GEN_ATTR_VTA_AJUSTE_DEBE_TIPO_ESTADO_ID, 'LEFT JOIN');
        $c->addOrden(VtaComisionVtaAjusteDebe::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        //$p = new Paginador(5, 1);
        $p = null;

        $vta_comision_vta_ajuste_debes = VtaComisionVtaAjusteDebe::getVtaComisionVtaAjusteDebes($p, $c);
        foreach ($vta_comision_vta_ajuste_debes as $vta_comision_vta_ajuste_debe) {
            return $vta_comision_vta_ajuste_debe;
        }
        return false;
    }

}

?>