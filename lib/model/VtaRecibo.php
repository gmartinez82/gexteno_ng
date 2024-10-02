<?php

require_once "base/BVtaRecibo.php";

class VtaRecibo extends BVtaRecibo {

    const PREFIJO_RECIBO = 'RCB-';

    public function getTipoComprobanteSiglas() {
        return "RBO";
    }

    public function getDescripcion() {
        $descripcion = '#' . $this->getId() . ' - ' . $this->getPersonaDescripcion();
        return $descripcion;
    }

    /**
     * Metodo que retorna el numero completo del comprobante
     * @return string
     */
    public function getNumeroReciboCompletoFormateado() {
        $numero_punto_venta = str_pad($this->getVtaPuntoVenta()->getNumero(), 4, 0, STR_PAD_LEFT);
        $numero_recibo = str_pad($this->getNumeroRecibo(), 8, 0, STR_PAD_LEFT);

        $numero_recibo_completo = $numero_punto_venta . '-' . $numero_recibo;
        return $numero_recibo_completo;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 05/03/2018 09:00 hs.
     * Metodo que genera un recibo item.
     * @return Obj VtaRecibo
     */
    static function setInicializarVtaReciboItem($cmb_vta_preventista_id, $cmb_vta_recibo_condicion_pago_id, $cmb_vta_recibo_tipo_pago_id, $gral_empresa_id, $vta_punto_venta_id, $fnd_caja_id, $cli_cliente_id, $fecha, $codigo_op_cliente, $nota_interna, $nota_publica, $var_sesion_random, $txt_cantidads, $txt_descripcions, $txt_referencias, $txt_importe_unitarios, $gral_tipo_iva_ids, $gral_forma_pago_ids, $vta_recibo_concepto_ids, $observacion = '', $vta_nota_debito_ids, $vta_factura_ids) {

        // --------------------------------------------------------------------
        // se determina el origen del comprobante
        // --------------------------------------------------------------------
        $vta_tipo_origen_recibo = VtaTipoOrigenRecibo::getOxCodigo(VtaTipoOrigenRecibo::ORIGEN_ITEM);
        $gral_tipo_documento_cuit = GralTipoDocumento::getOxCodigo(GralTipoDocumento::TIPO_CUIT);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));

        $cli_cliente = CliCliente::getOxId($cli_cliente_id);

        $vta_recibo = new VtaRecibo();
        $vta_recibo->setVtaTipoOrigenReciboId($vta_tipo_origen_recibo->getId());
        $vta_recibo->setVtaPreventistaId($cmb_vta_preventista_id);
        $vta_recibo->setVtaReciboCondicionPagoId($cmb_vta_recibo_condicion_pago_id);
        $vta_recibo->setVtaReciboTipoPagoId($cmb_vta_recibo_tipo_pago_id);
        $vta_recibo->setGralEmpresaId($gral_empresa_id);
        $vta_recibo->setVtaPuntoVentaId($vta_punto_venta_id);
        $vta_recibo->setFndCajaId($fnd_caja_id);
        $vta_recibo->setFechaEmision($fecha);
        $vta_recibo->setCodigoOpCliente($codigo_op_cliente);
        if ($gral_mes) {
            $vta_recibo->setGralMesId($gral_mes->getId());
        }
        $vta_recibo->setAnio(date('Y'));
        $vta_recibo->setNotaInterna($nota_interna);
        $vta_recibo->setNotaPublica($nota_publica);
        $vta_recibo->setObservacion($observacion);
        $vta_recibo->setEstado(1);
        $vta_recibo->save();

        // --------------------------------------------------------------------
        // se setea el codigo del recibo
        // --------------------------------------------------------------------
        $vta_recibo->setCodigo(self::PREFIJO_RECIBO . str_pad($vta_recibo->getId(), 8, 0, STR_PAD_LEFT));
        $vta_recibo->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial del recibo
        // --------------------------------------------------------------------
        $vta_recibo_estado = $vta_recibo->setVtaReciboEstado(VtaReciboTipoEstado::TIPO_GENERADO, $observacion);
        $vta_recibo_estado = $vta_recibo->setVtaReciboEstado(VtaReciboTipoEstado::TIPO_PENDIENTE, $observacion = '');

        // --------------------------------------------------------------------
        // se agregan los items al recibo
        // --------------------------------------------------------------------
        if (!empty($vta_recibo->getId())) {
            foreach ($txt_descripcions as $key => $txt_descripcion) {
                $importe_unitario = $txt_importe_unitarios[$key];
                $importe_unitario = Gral::getImporteDesdePriceFormatToDB($importe_unitario);

                // -----------------------------------------------------------------
                // se determinan valores de moneda y tipo de cambio
                // por el momento esta hardcodeado solo para moneda base,
                // falta programar la logica en frontend
                // -----------------------------------------------------------------
                $gral_moneda_base = GralMoneda::getGralMonedaBase();
                $tipo_cambio = 1;
                $tipo_cambio_real = 1;
                $vta_recibo_gral_moneda_id = $gral_moneda_base->getId();
                $importe_unitario_real = $importe_unitario;
            
                // Cargo el detalle del Recibo
                $vta_recibo_item = new VtaReciboItem();

                $vta_recibo_item->setDescripcion($txt_descripcions[$key]);
                $vta_recibo_item->setVtaReciboId($vta_recibo->getId());
                $vta_recibo_item->setGralFpFormaPagoId($gral_forma_pago_ids[$key]);
                $vta_recibo_item->setVtaReciboConceptoId($vta_recibo_concepto_ids[$key]);
                $vta_recibo_item->setCantidad(1);

                $vta_recibo_item->setGralMonedaId($vta_recibo_gral_moneda_id);
                $vta_recibo_item->setImporteUnitarioReal($importe_unitario_real);
                $vta_recibo_item->setImporteUnitario($importe_unitario);
                $vta_recibo_item->setTipoCambio($tipo_cambio);
                $vta_recibo_item->setTipoCambioReal($tipo_cambio_real);
                
                $vta_recibo_item->setCodigo($txt_referencias[$key]);
                $vta_recibo_item->setObservacion('');
                $vta_recibo_item->setEstado(1);

                $vta_recibo_item->save();

                // -------------------------------------------------------------
                // Se registra el detalle del cheque si existe
                // -------------------------------------------------------------
                $arr_vta_recibo_cheque_infos = Gral::getSes('vta_recibo_cheque_info' . $var_sesion_random);

                if (!is_null($arr_vta_recibo_cheque_infos[$key])) {
                    $vta_recibo_item_cheque = new VtaReciboItemCheque();

                    $arr = $arr_vta_recibo_cheque_infos[$key];
                    $cheque_id = $arr['cheque_id'];

                    $vta_recibo_item_cheque->setVtaReciboId($vta_recibo->getId());
                    $vta_recibo_item_cheque->setVtaReciboItemId($vta_recibo_item->getId());
                    $vta_recibo_item_cheque->setGralBancoId($arr['gral_banco_id']);
                    $vta_recibo_item_cheque->setDescripcion($arr['descripcion']);
                    $vta_recibo_item_cheque->setEntregador($arr['entregador']);
                    $vta_recibo_item_cheque->setFirmante($arr['firmante']);
                    $vta_recibo_item_cheque->setNumeroCheque($arr['numero_cheque']);
                    $vta_recibo_item_cheque->setFechaCobro($arr['fecha_cobro']);
                    $vta_recibo_item_cheque->setFechaEmision($arr['fecha_emision']);
                    $vta_recibo_item_cheque->setEstado(1);

                    $vta_recibo_item_cheque->save();

                    // -------------------------------------------------------------
                    // inicializa cheque
                    // -------------------------------------------------------------
                    $fnd_chq_cheque = FndChqCheque::inicializarFndChqChequeDesdeVtaRecibo($cheque_id, $vta_recibo_item, $arr);
                }

                // -------------------------------------------------------------
                // Se registra el detalle de la retencion si existe
                // -------------------------------------------------------------
                $arr_vta_recibo_retencion_infos = Gral::getSes('vta_recibo_retencion_info' . $var_sesion_random);

                if (!is_null($arr_vta_recibo_retencion_infos[$key])) {
                    $vta_recibo_item_retencion = new VtaReciboItemRetencion();

                    $arr = $arr_vta_recibo_retencion_infos[$key];

                    $vta_recibo_item_retencion->setVtaReciboId($vta_recibo->getId());
                    $vta_recibo_item_retencion->setVtaReciboItemId($vta_recibo_item->getId());
                    $vta_recibo_item_retencion->setDescripcion($arr['descripcion']);
                    $vta_recibo_item_retencion->setNumeroComprobante($arr['numero_comprobante']);
                    $vta_recibo_item_retencion->setFechaEmision($arr['fecha_emision']);
                    $vta_recibo_item_retencion->setImporteBaseImponible($arr['importe_base_imponible']);
                    $vta_recibo_item_retencion->setImporteRetencion($importe_unitario);
                    $vta_recibo_item_retencion->setObservacion($arr['observacion']);
                    $vta_recibo_item_retencion->setEstado(1);

                    $vta_recibo_item_retencion->save();
                }
            }
        }

        // --------------------------------------------------------------------
        // se vincula el cliente al Recibo
        // --------------------------------------------------------------------        
        $vta_recibo->setCliClienteId($cli_cliente->getId());
        $vta_recibo->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
        $vta_recibo->setGralTipoPersoneriaId($cli_cliente->getGralTipoPersoneriaId());
        $vta_recibo->setPersonaDescripcion($cli_cliente->getDescripcion());
        if ($gral_tipo_documento_cuit) {
            $vta_recibo->setGralTipoDocumentoId($gral_tipo_documento_cuit->getId());
        }
        $vta_recibo->setPersonaDocumento($cli_cliente->getCuit());
        $vta_recibo->setPersonaEmail($cli_cliente->getEmail());
        $vta_recibo->setRazonSocial($cli_cliente->getRazonSocial());
        $vta_recibo->setDomicilioLegal($cli_cliente->getDomicilioLegal());
        $vta_recibo->setCuit($cli_cliente->getCuit());

        // --------------------------------------------------------------------
        // se determina el tipo de Recibo
        // --------------------------------------------------------------------
        $vta_tipo_recibo = self::getDeterminacionTipoRecibo($cli_cliente_id);
        $vta_recibo->setVtaTipoReciboId($vta_tipo_recibo->getId());
        $vta_recibo->save();

        // ---------------------------------------------------------------------
        // se generan vinculos con comprobantes afectados
        // ---------------------------------------------------------------------
        $vta_recibo->setImputarVtaComprobante($recalcular_estado = true, $vta_nota_debito_ids, $vta_factura_ids);

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_recibo->setActualizarResumenComprobante();

        return $vta_recibo;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/08/2018 16:53 hs.
     * Metodo que genera un recibo por una venta inmediata de contado.
     * @return Obj VtaRecibo
     */
    static function setInicializarVtaReciboDesdeVentaInmediataContado_OLD($vta_presupuesto = false, $vta_factura, $observacion = '') {

        $cli_cliente_id = $vta_factura->getCliClienteId();
        $gral_empresa_id = $vta_factura->getGralEmpresaId();
        $vta_punto_venta_id = $vta_factura->getVtaPuntoVentaId();
        $gral_fp_forma_pago_id = $vta_factura->getGralFpFormaPagoId();
        $importe_total = $vta_factura->getSaldoImputable();
        $vta_preventista_id = $vta_factura->getVtaPreventistaId();

        if ($cli_cliente_id != 'null') {
            $cli_cliente = CliCliente::getOxId($cli_cliente_id);
        }

        // ---------------------------------------------------------------------
        // se determina la condicion de pago
        // ---------------------------------------------------------------------
        $vta_recibo_condicion_pago = VtaReciboCondicionPago::getOxCodigo(VtaReciboCondicionPago::TIPO_EN_TERMINO);

        // ---------------------------------------------------------------------
        // se determina el tipo de pago
        // ---------------------------------------------------------------------
        $vta_recibo_tipo_pago = VtaReciboTipoPago::getOxCodigo(VtaReciboTipoPago::TIPO_COBRO_INMEDIATO);

        // ---------------------------------------------------------------------
        // se determina el origen del comprobante
        // ---------------------------------------------------------------------
        $vta_tipo_origen_recibo = VtaTipoOrigenRecibo::getOxCodigo(VtaTipoOrigenRecibo::ORIGEN_ITEM);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));

        $vta_recibo = new VtaRecibo();
        $vta_recibo->setVtaTipoOrigenReciboId($vta_tipo_origen_recibo->getId());

        if ($vta_presupuesto) {
            $vta_recibo->setVtaPresupuestoId($vta_presupuesto->getId());
        }

        $vta_recibo->setVtaPreventistaId($vta_preventista_id);
        $vta_recibo->setVtaReciboCondicionPagoId($vta_recibo_condicion_pago->getId());
        $vta_recibo->setVtaReciboTipoPagoId($vta_recibo_tipo_pago->getId());
        $vta_recibo->setGralEmpresaId($gral_empresa_id);
        $vta_recibo->setVtaPuntoVentaId($vta_punto_venta_id);
        $vta_recibo->setFechaEmision(Gral::getFechaHoraActual());
        if ($gral_mes) {
            $vta_recibo->setGralMesId($gral_mes->getId());
        }
        $vta_recibo->setAnio(date('Y'));
        $vta_recibo->setObservacion($observacion);
        $vta_recibo->setEstado(1);
        $vta_recibo->save();

        // --------------------------------------------------------------------
        // se setea el codigo del recibo
        // --------------------------------------------------------------------
        $vta_recibo->setCodigo(self::PREFIJO_RECIBO . str_pad($vta_recibo->getId(), 8, 0, STR_PAD_LEFT));
        $vta_recibo->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial del recibo
        // --------------------------------------------------------------------
        $vta_recibo_estado = $vta_recibo->setVtaReciboEstado(VtaReciboTipoEstado::TIPO_GENERADO, $observacion);
        $vta_recibo_estado = $vta_recibo->setVtaReciboEstado(VtaReciboTipoEstado::TIPO_PENDIENTE, $observacion = '');

        // --------------------------------------------------------------------
        // se agregan los items al recibo
        // --------------------------------------------------------------------
        $vta_recibo_item = new VtaReciboItem();

        $vta_recibo_item->setDescripcion('');
        $vta_recibo_item->setVtaReciboId($vta_recibo->getId());
        $vta_recibo_item->setGralFpFormaPagoId($gral_fp_forma_pago_id);

        $vta_recibo_concepto = VtaReciboConcepto::getOxCodigo(VtaReciboConcepto::TIPO_COBRO_FACTURA);
        $vta_recibo_item->setVtaReciboConceptoId($vta_recibo_concepto->getId());
        $vta_recibo_item->setCantidad(1);
        $vta_recibo_item->setImporteUnitario($importe_total);
        $vta_recibo_item->setCodigo('');
        $vta_recibo_item->setObservacion($observacion);
        $vta_recibo_item->setEstado(1);

        $vta_recibo_item->save();

        // --------------------------------------------------------------------
        // se vincula el cliente al Recibo
        // --------------------------------------------------------------------        
        if ($cli_cliente) {
            $persona_descripcion = $cli_cliente->getDescripcion();

            $vta_recibo->setCliClienteId($cli_cliente->getId());
            $vta_recibo->setRazonSocial($cli_cliente->getRazonSocial());
            $vta_recibo->setDomicilioLegal($cli_cliente->getDomicilioLegal());
            $vta_recibo->setCuit($cli_cliente->getCuit());
            $vta_recibo->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
            $vta_recibo->setGralTipoPersoneriaId($cli_cliente->getGralTipoPersoneriaId());
            $vta_recibo->setPersonaDescripcion($persona_descripcion);
        } else {
            $vta_recibo->setGralCondicionIvaId($vta_factura->getGralCondicionIvaId());
            $vta_recibo->setPersonaDescripcion($vta_factura->getPersonaDescripcion());
            $vta_recibo->setGralTipoDocumentoId($vta_factura->getGralTipoDocumentoId());
            $vta_recibo->setPersonaDocumento($vta_factura->getPersonaDocumento());
            $vta_recibo->setPersonaEmail($vta_factura->getPersonaEmail());
        }

        // --------------------------------------------------------------------
        // se determina el tipo de Recibo
        // --------------------------------------------------------------------
        $vta_tipo_recibo = self::getDeterminacionTipoRecibo($cli_cliente_id);
        $vta_recibo->setVtaTipoReciboId($vta_tipo_recibo->getId());
        $vta_recibo->save();

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_recibo->setActualizarResumenComprobante();

        return $vta_recibo;
    }

    /**
     * Autor: Esteban Martinez
     * Fecha: Enero 2021
     * Metodo que genera un recibo multiitem por una venta inmediata de contado.
     * @return Obj VtaRecibo
     */
    static function setInicializarVtaReciboMultiItemDesdeVentaInmediataContado(
    $vta_presupuesto = false, $vta_factura, $vta_recibo_concepto_ids, $vta_recibo_descripcions, $vta_recibo_referencias, $vta_recibo_gral_moneda_ids, $vta_recibo_importe_unitario_reals, $vta_recibo_importe_unitarios, $vta_recibo_gral_fp_forma_pago_ids, $fnd_caja_id, $var_sesion_random, $observacion = ''
    ) {
        $cli_cliente_id = $vta_factura->getCliClienteId();
        $gral_empresa_id = $vta_factura->getGralEmpresaId();
        $vta_punto_venta_id = $vta_factura->getVtaPuntoVentaId();
        $gral_fp_forma_pago_id = $vta_factura->getGralFpFormaPagoId();
        $importe_total = $vta_factura->getSaldoImputable();
        $vta_preventista_id = $vta_factura->getVtaPreventistaId();

        if ($cli_cliente_id != 'null') {
            $cli_cliente = CliCliente::getOxId($cli_cliente_id);
        }

        // ---------------------------------------------------------------------
        // se determina la condicion de pago
        // ---------------------------------------------------------------------
        $vta_recibo_condicion_pago = VtaReciboCondicionPago::getOxCodigo(VtaReciboCondicionPago::TIPO_EN_TERMINO);

        // ---------------------------------------------------------------------
        // se determina el tipo de pago
        // ---------------------------------------------------------------------
        $vta_recibo_tipo_pago = VtaReciboTipoPago::getOxCodigo(VtaReciboTipoPago::TIPO_COBRO_INMEDIATO);

        // ---------------------------------------------------------------------        
        // se determina el origen del comprobante
        // ---------------------------------------------------------------------        
        $vta_tipo_origen_recibo = VtaTipoOrigenRecibo::getOxCodigo(VtaTipoOrigenRecibo::ORIGEN_ITEM);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));

        $vta_recibo = new VtaRecibo();
        $vta_recibo->setVtaTipoOrigenReciboId($vta_tipo_origen_recibo->getId());

        if ($vta_presupuesto) {
            $vta_recibo->setVtaPresupuestoId($vta_presupuesto->getId());
        }

        $vta_recibo->setFndCajaId($fnd_caja_id);
        $vta_recibo->setVtaPreventistaId($vta_preventista_id);
        $vta_recibo->setVtaReciboCondicionPagoId($vta_recibo_condicion_pago->getId());
        $vta_recibo->setVtaReciboTipoPagoId($vta_recibo_tipo_pago->getId());
        $vta_recibo->setGralEmpresaId($gral_empresa_id);
        $vta_recibo->setVtaPuntoVentaId($vta_punto_venta_id);
        $vta_recibo->setFechaEmision(Gral::getFechaHoraActual());
        if ($gral_mes) {
            $vta_recibo->setGralMesId($gral_mes->getId());
        }
        $vta_recibo->setAnio(date('Y'));
        $vta_recibo->setObservacion($observacion);
        $vta_recibo->setEstado(1);
        $vta_recibo->save();

        // --------------------------------------------------------------------
        // se setea el codigo del recibo
        // --------------------------------------------------------------------
        $vta_recibo->setCodigo(self::PREFIJO_RECIBO . str_pad($vta_recibo->getId(), 8, 0, STR_PAD_LEFT));
        $vta_recibo->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial del recibo
        // --------------------------------------------------------------------
        $vta_recibo_estado = $vta_recibo->setVtaReciboEstado(VtaReciboTipoEstado::TIPO_GENERADO, $observacion);
        $vta_recibo_estado = $vta_recibo->setVtaReciboEstado(VtaReciboTipoEstado::TIPO_PENDIENTE, $observacion = '');

        // --------------------------------------------------------------------
        // se agregan los items al recibo
        // --------------------------------------------------------------------
        foreach ($vta_recibo_concepto_ids as $key => $vta_recibo_concepto_id) {
            $vta_recibo_descripcion = $vta_recibo_descripcions[$key];
            $vta_recibo_referencia = $vta_recibo_referencias[$key];
            $vta_recibo_gral_moneda_id = $vta_recibo_gral_moneda_ids[$key];
            $vta_recibo_importe_unitario_real = $vta_recibo_importe_unitario_reals[$key];
            $vta_recibo_importe_unitario = $vta_recibo_importe_unitarios[$key];
            $vta_recibo_gral_fp_forma_pago_id = $vta_recibo_gral_fp_forma_pago_ids[$key];

            $importe_unitario_real = Gral::getImporteDesdePriceFormatToDB($vta_recibo_importe_unitario_real);
            $importe_unitario = Gral::getImporteDesdePriceFormatToDB($vta_recibo_importe_unitario);

            // -----------------------------------------------------------------
            // se determinan valores de moneda y tipo de cambio
            // -----------------------------------------------------------------
            $gral_moneda_base = GralMoneda::getGralMonedaBase();
            if($vta_recibo_gral_moneda_id != ''){
                $gral_moneda_comparada = GralMoneda::getOxId($vta_recibo_gral_moneda_id);
                $gral_moneda_tipo_cambio = $gral_moneda_base->getGralMonedaTipoCambioActual($gral_moneda_comparada);
                
                if($gral_moneda_tipo_cambio){
                    $tipo_cambio = $gral_moneda_tipo_cambio->getTipoCambio();
                    $tipo_cambio_real = $gral_moneda_tipo_cambio->getTipoCambioReal();
                }
            }else{
                $tipo_cambio = 1;
                $tipo_cambio_real = 1;
                $vta_recibo_gral_moneda_id = $gral_moneda_base->getId();
                $importe_unitario_real = $importe_unitario;
            }
            
            $vta_recibo_item = new VtaReciboItem();
            $vta_recibo_item->setDescripcion($vta_recibo_descripcion);
            $vta_recibo_item->setVtaReciboId($vta_recibo->getId());
            $vta_recibo_item->setGralFpFormaPagoId($vta_recibo_gral_fp_forma_pago_id);
            $vta_recibo_item->setVtaReciboConceptoId($vta_recibo_concepto_id);
            $vta_recibo_item->setCantidad(1);
            $vta_recibo_item->setGralMonedaId($vta_recibo_gral_moneda_id);
            $vta_recibo_item->setImporteUnitarioReal($importe_unitario_real);
            $vta_recibo_item->setImporteUnitario($importe_unitario);
            $vta_recibo_item->setTipoCambio($tipo_cambio);
            $vta_recibo_item->setTipoCambioReal($tipo_cambio_real);
            $vta_recibo_item->setCodigo($vta_recibo_referencia);
            $vta_recibo_item->setObservacion($observacion);
            $vta_recibo_item->setEstado(1);

            $vta_recibo_item->save();

            // -------------------------------------------------------------
            // Se registra el detalle del cheque si existe
            // -------------------------------------------------------------
            $arr_vta_recibo_cheque_infos = Gral::getSes('vta_recibo_item_generico_cheque_info' . $var_sesion_random);

            if (!is_null($arr_vta_recibo_cheque_infos[$key])) {
                $vta_recibo_item_cheque = new VtaReciboItemCheque();

                $arr = $arr_vta_recibo_cheque_infos[$key];
                $cheque_id = $arr['cheque_id'];

                $vta_recibo_item_cheque->setVtaReciboId($vta_recibo->getId());
                $vta_recibo_item_cheque->setVtaReciboItemId($vta_recibo_item->getId());
                $vta_recibo_item_cheque->setGralBancoId($arr['gral_banco_id']);
                $vta_recibo_item_cheque->setDescripcion($arr['descripcion']);
                $vta_recibo_item_cheque->setEntregador($arr['entregador']);
                $vta_recibo_item_cheque->setFirmante($arr['firmante']);
                $vta_recibo_item_cheque->setNumeroCheque($arr['numero_cheque']);
                $vta_recibo_item_cheque->setFechaCobro($arr['fecha_cobro']);
                $vta_recibo_item_cheque->setFechaEmision($arr['fecha_emision']);
                $vta_recibo_item_cheque->setEstado(1);

                $vta_recibo_item_cheque->save();

                // -------------------------------------------------------------
                // inicializa cheque
                // -------------------------------------------------------------
                $fnd_chq_cheque = FndChqCheque::inicializarFndChqChequeDesdeVtaRecibo($cheque_id, $vta_recibo_item, $arr);
            }

            // -------------------------------------------------------------
            // Se registra el detalle de la retencion si existe
            // -------------------------------------------------------------
            $arr_vta_recibo_retencion_infos = Gral::getSes('vta_recibo_item_generico_retencion_info' . $var_sesion_random);

            if (!is_null($arr_vta_recibo_retencion_infos[$key])) {
                $vta_recibo_item_retencion = new VtaReciboItemRetencion();

                $arr = $arr_vta_recibo_retencion_infos[$key];

                $vta_recibo_item_retencion->setVtaReciboId($vta_recibo->getId());
                $vta_recibo_item_retencion->setVtaReciboItemId($vta_recibo_item->getId());
                $vta_recibo_item_retencion->setDescripcion($arr['descripcion']);
                $vta_recibo_item_retencion->setNumeroComprobante($arr['numero_comprobante']);
                $vta_recibo_item_retencion->setFechaEmision($arr['fecha_emision']);
                $vta_recibo_item_retencion->setImporteBaseImponible($arr['importe_base_imponible']);
                $vta_recibo_item_retencion->setImporteRetencion($importe_unitario);
                $vta_recibo_item_retencion->setObservacion($arr['observacion']);
                $vta_recibo_item_retencion->setEstado(1);

                $vta_recibo_item_retencion->save();
            }
        }

        // --------------------------------------------------------------------
        // se vincula el cliente al Recibo
        // --------------------------------------------------------------------        
        if ($cli_cliente) {
            $persona_descripcion = $cli_cliente->getDescripcion();

            $vta_recibo->setCliClienteId($cli_cliente->getId());
            $vta_recibo->setRazonSocial($cli_cliente->getRazonSocial());
            $vta_recibo->setDomicilioLegal($cli_cliente->getDomicilioLegal());
            $vta_recibo->setCuit($cli_cliente->getCuit());
            $vta_recibo->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
            $vta_recibo->setGralTipoPersoneriaId($cli_cliente->getGralTipoPersoneriaId());
            $vta_recibo->setPersonaDescripcion($persona_descripcion);
        } else {
            $vta_recibo->setGralCondicionIvaId($vta_factura->getGralCondicionIvaId());
            $vta_recibo->setPersonaDescripcion($vta_factura->getPersonaDescripcion());
            $vta_recibo->setGralTipoDocumentoId($vta_factura->getGralTipoDocumentoId());
            $vta_recibo->setPersonaDocumento($vta_factura->getPersonaDocumento());
            $vta_recibo->setPersonaEmail($vta_factura->getPersonaEmail());
        }

        // --------------------------------------------------------------------
        // se determina el tipo de Recibo
        // --------------------------------------------------------------------
        $vta_tipo_recibo = self::getDeterminacionTipoRecibo($cli_cliente_id);
        $vta_recibo->setVtaTipoReciboId($vta_tipo_recibo->getId());
        $vta_recibo->save();

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_recibo->setActualizarResumenComprobante();

        return $vta_recibo;
    }

    /**
     * Autor: Esteban Martinez
     * Fecha: Enero 2021
     * Metodo que genera un recibo multiitem desde factura.
     * @return Obj VtaRecibo
     */
    static function setInicializarVtaReciboMultiItemDesdeFactura(
    $vta_factura, $fecha, $fnd_caja_id, $observacion, $vta_recibo_concepto_ids, $vta_recibo_descripcions, $vta_recibo_referencias, $vta_recibo_importe_unitarios, $vta_recibo_gral_fp_forma_pago_ids, $var_sesion_random
    ) {
        $cli_cliente_id = $vta_factura->getCliClienteId();
        $gral_empresa_id = $vta_factura->getGralEmpresaId();
        $vta_punto_venta_id = $vta_factura->getVtaPuntoVentaId();
        $vta_preventista_id = $vta_factura->getVtaPreventistaId();

        if ($cli_cliente_id != 'null') {
            $cli_cliente = CliCliente::getOxId($cli_cliente_id);
        }

        // ---------------------------------------------------------------------
        // se determina la condicion de pago
        // ---------------------------------------------------------------------
        $vta_recibo_condicion_pago = VtaReciboCondicionPago::getOxCodigo(VtaReciboCondicionPago::TIPO_EN_TERMINO);

        // ---------------------------------------------------------------------
        // se determina el tipo de pago
        // ---------------------------------------------------------------------
        $vta_recibo_tipo_pago = VtaReciboTipoPago::getOxCodigo(VtaReciboTipoPago::TIPO_COBRO_INMEDIATO);

        // ---------------------------------------------------------------------
        // se determina el origen del comprobante
        // ---------------------------------------------------------------------
        $vta_tipo_origen_recibo = VtaTipoOrigenRecibo::getOxCodigo(VtaTipoOrigenRecibo::ORIGEN_ITEM);

        $gral_mes = GralMes::getOxCodigoNumero(date('m'));

        $vta_recibo = new VtaRecibo();
        $vta_recibo->setVtaTipoOrigenReciboId($vta_tipo_origen_recibo->getId());

        $vta_recibo->setFndCajaId($fnd_caja_id);
        $vta_recibo->setVtaPreventistaId($vta_preventista_id);
        $vta_recibo->setVtaReciboCondicionPagoId($vta_recibo_condicion_pago->getId());
        $vta_recibo->setVtaReciboTipoPagoId($vta_recibo_tipo_pago->getId());
        $vta_recibo->setGralEmpresaId($gral_empresa_id);
        $vta_recibo->setVtaPuntoVentaId($vta_punto_venta_id);
        $vta_recibo->setFechaEmision($fecha);
        if ($gral_mes) {
            $vta_recibo->setGralMesId($gral_mes->getId());
        }
        $vta_recibo->setAnio(date('Y'));
        $vta_recibo->setObservacion($observacion);
        $vta_recibo->setEstado(1);
        $vta_recibo->save();

        // --------------------------------------------------------------------
        // se setea el codigo del recibo
        // --------------------------------------------------------------------
        $vta_recibo->setCodigo(self::PREFIJO_RECIBO . str_pad($vta_recibo->getId(), 8, 0, STR_PAD_LEFT));
        $vta_recibo->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial del recibo
        // --------------------------------------------------------------------
        $vta_recibo_estado = $vta_recibo->setVtaReciboEstado(VtaReciboTipoEstado::TIPO_GENERADO, $observacion);
        $vta_recibo_estado = $vta_recibo->setVtaReciboEstado(VtaReciboTipoEstado::TIPO_PENDIENTE, $observacion = ''); // Excepcional porque no interactua con AFIP
        // --------------------------------------------------------------------
        // se agregan los items al recibo
        // --------------------------------------------------------------------
        foreach ($vta_recibo_concepto_ids as $key => $vta_recibo_concepto_id) {
            $vta_recibo_descripcion = $vta_recibo_descripcions[$key];
            $vta_recibo_referencia = $vta_recibo_referencias[$key];
            $vta_recibo_importe_unitario = $vta_recibo_importe_unitarios[$key];
            $vta_recibo_gral_fp_forma_pago_id = $vta_recibo_gral_fp_forma_pago_ids[$key];

            $importe_unitario = Gral::getImporteDesdePriceFormatToDB($vta_recibo_importe_unitario);

            // -----------------------------------------------------------------
            // se determinan valores de moneda y tipo de cambio
            // por el momento esta hardcodeado solo para moneda base,
            // falta programar la logica en frontend
            // -----------------------------------------------------------------
            $gral_moneda_base = GralMoneda::getGralMonedaBase();
            $tipo_cambio = 1;
            $tipo_cambio_real = 1;
            $vta_recibo_gral_moneda_id = $gral_moneda_base->getId();
            $importe_unitario_real = $importe_unitario;
            
            $vta_recibo_item = new VtaReciboItem();
            $vta_recibo_item->setDescripcion($vta_recibo_descripcion);
            $vta_recibo_item->setVtaReciboId($vta_recibo->getId());
            $vta_recibo_item->setGralFpFormaPagoId($vta_recibo_gral_fp_forma_pago_id);
            $vta_recibo_item->setVtaReciboConceptoId($vta_recibo_concepto_id);
            $vta_recibo_item->setCantidad(1);

            $vta_recibo_item->setGralMonedaId($vta_recibo_gral_moneda_id);
            $vta_recibo_item->setImporteUnitarioReal($importe_unitario_real);
            $vta_recibo_item->setImporteUnitario($importe_unitario);
            $vta_recibo_item->setTipoCambio($tipo_cambio);
            $vta_recibo_item->setTipoCambioReal($tipo_cambio_real);
            
            $vta_recibo_item->setCodigo($vta_recibo_referencia);
            $vta_recibo_item->setObservacion('');
            $vta_recibo_item->setEstado(1);

            $vta_recibo_item->save();


            // -------------------------------------------------------------
            // Se registra el detalle del cheque si existe
            // -------------------------------------------------------------
            $arr_vta_recibo_cheque_infos = Gral::getSes('vta_recibo_item_generico_cheque_info' . $var_sesion_random);

            if (!is_null($arr_vta_recibo_cheque_infos[$key])) {
                $vta_recibo_item_cheque = new VtaReciboItemCheque();

                $arr = $arr_vta_recibo_cheque_infos[$key];
                $cheque_id = $arr['cheque_id'];

                $vta_recibo_item_cheque->setVtaReciboId($vta_recibo->getId());
                $vta_recibo_item_cheque->setVtaReciboItemId($vta_recibo_item->getId());
                $vta_recibo_item_cheque->setGralBancoId($arr['gral_banco_id']);
                $vta_recibo_item_cheque->setDescripcion($arr['descripcion']);
                $vta_recibo_item_cheque->setEntregador($arr['entregador']);
                $vta_recibo_item_cheque->setFirmante($arr['firmante']);
                $vta_recibo_item_cheque->setNumeroCheque($arr['numero_cheque']);
                $vta_recibo_item_cheque->setFechaCobro($arr['fecha_cobro']);
                $vta_recibo_item_cheque->setFechaEmision($arr['fecha_emision']);
                $vta_recibo_item_cheque->setEstado(1);

                $vta_recibo_item_cheque->save();

                // -------------------------------------------------------------
                // inicializa cheque
                // -------------------------------------------------------------
                $fnd_chq_cheque = FndChqCheque::inicializarFndChqChequeDesdeVtaRecibo($cheque_id, $vta_recibo_item, $arr);
            }

            // -------------------------------------------------------------
            // Se registra el detalle de la retencion si existe
            // -------------------------------------------------------------
            $arr_vta_recibo_retencion_infos = Gral::getSes('vta_recibo_item_generico_retencion_info' . $var_sesion_random);

            if (!is_null($arr_vta_recibo_retencion_infos[$key])) {
                $vta_recibo_item_retencion = new VtaReciboItemRetencion();

                $arr = $arr_vta_recibo_retencion_infos[$key];

                $vta_recibo_item_retencion->setVtaReciboId($vta_recibo->getId());
                $vta_recibo_item_retencion->setVtaReciboItemId($vta_recibo_item->getId());
                $vta_recibo_item_retencion->setDescripcion($arr['descripcion']);
                $vta_recibo_item_retencion->setNumeroComprobante($arr['numero_comprobante']);
                $vta_recibo_item_retencion->setFechaEmision($arr['fecha_emision']);
                $vta_recibo_item_retencion->setImporteBaseImponible($arr['importe_base_imponible']);
                $vta_recibo_item_retencion->setImporteRetencion($importe_unitario);
                $vta_recibo_item_retencion->setObservacion($arr['observacion']);
                $vta_recibo_item_retencion->setEstado(1);

                $vta_recibo_item_retencion->save();
            }
        }

        // --------------------------------------------------------------------
        // se vincula el cliente al Recibo
        // --------------------------------------------------------------------        
        if ($cli_cliente) {
            $persona_descripcion = $cli_cliente->getDescripcion();
            //$vta_recibo->setGralTipoDocumentoId($cli_cliente->getGralTipoDocumentoId());

            $vta_recibo->setCliClienteId($cli_cliente->getId());
            $vta_recibo->setRazonSocial($cli_cliente->getRazonSocial());
            $vta_recibo->setDomicilioLegal($cli_cliente->getDomicilioLegal());
            $vta_recibo->setCuit($cli_cliente->getCuit());
            $vta_recibo->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
            $vta_recibo->setGralTipoPersoneriaId($cli_cliente->getGralTipoPersoneriaId());
            $vta_recibo->setPersonaDocumento($cli_cliente->getCuit());
            $vta_recibo->setPersonaDescripcion($persona_descripcion);
            $vta_recibo->setPersonaEmail($cli_cliente->getEmail());
        } else {
            $vta_recibo->setPersonaDescripcion($vta_factura->getPersonaDescripcion());
            $vta_recibo->setGralTipoDocumentoId($vta_factura->getGralTipoDocumentoId());
            $vta_recibo->setPersonaDocumento($vta_factura->getPersonaDocumento());
            $vta_recibo->setPersonaEmail($vta_factura->getPersonaEmail());
        }

        // --------------------------------------------------------------------
        // se determina el tipo de Recibo
        // --------------------------------------------------------------------
        $vta_tipo_recibo = self::getDeterminacionTipoRecibo($cli_cliente_id);
        $vta_recibo->setVtaTipoReciboId($vta_tipo_recibo->getId());
        $vta_recibo->save();

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_recibo->setActualizarResumenComprobante();

        return $vta_recibo;
    }

    static function setInicializarVtaReciboDesdeDescuentoFinanciero($vta_factura_ids, $var_sesion_random, $descuento_financiero, $cmb_fnd_caja_id, $cmb_gral_fp_forma_pago_id, $txa_nota_publica, $observacion = '', $vta_recibo_concepto_ids, $txt_descripcions, $txt_referencias, $txt_importe_unitarios, $gral_forma_pago_ids) {
        $descuento_financiero_decimal = $descuento_financiero / 100;
        foreach ($vta_factura_ids as $vta_factura_id) {
            $vta_factura = VtaFactura::getOxId($vta_factura_id);

            $cli_cliente_id = $vta_factura->getCliClienteId();
            $gral_empresa_id = $vta_factura->getGralEmpresaId();
            $importe_total += $vta_factura->getSaldoImputable();

            $string_numero_facturas .= $vta_factura->getNumeroFacturaCompleto() . ' / ';
        }

        // ---------------------------------------------------------------------
        // se determina la condicion de pago
        // ---------------------------------------------------------------------
        $vta_recibo_condicion_pago = VtaReciboCondicionPago::getOxCodigo(VtaReciboCondicionPago::TIPO_EN_TERMINO);

        // ---------------------------------------------------------------------
        // se determina el tipo de pago
        // ---------------------------------------------------------------------
        $vta_recibo_tipo_pago = VtaReciboTipoPago::getOxCodigo(VtaReciboTipoPago::TIPO_COBRO_CUENTA_CORRIENTE);

        // ---------------------------------------------------------------------        
        // se determina el origen del comprobante
        // ---------------------------------------------------------------------        
        $vta_tipo_origen_recibo = VtaTipoOrigenRecibo::getOxCodigo(VtaTipoOrigenRecibo::ORIGEN_ITEM);

        $gral_tipo_documento_cuit = GralTipoDocumento::getOxCodigo(GralTipoDocumento::TIPO_CUIT);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));

        $cli_cliente = CliCliente::getOxId($cli_cliente_id);

        $vta_recibo = new VtaRecibo();
        $vta_recibo->setVtaTipoOrigenReciboId($vta_tipo_origen_recibo->getId());
        $vta_recibo->setVtaReciboCondicionPagoId($vta_recibo_condicion_pago->getId());
        $vta_recibo->setVtaReciboTipoPagoId($vta_recibo_tipo_pago->getId());
        $vta_recibo->setGralEmpresaId($gral_empresa_id);
        $vta_recibo->setFndCajaId($cmb_fnd_caja_id);
        //$vta_recibo->setVtaPuntoVentaId($vta_punto_venta_id);
        $vta_recibo->setFechaEmision(Gral::getFechaHoraActual());
        if ($gral_mes) {
            $vta_recibo->setGralMesId($gral_mes->getId());
        }
        $vta_recibo->setAnio(date('Y'));
        $vta_recibo->setObservacion($observacion);
        $vta_recibo->setEstado(1);
        $vta_recibo->save();

        // --------------------------------------------------------------------
        // se setea el codigo del recibo
        // --------------------------------------------------------------------
        $vta_recibo->setCodigo(self::PREFIJO_RECIBO . str_pad($vta_recibo->getId(), 8, 0, STR_PAD_LEFT));
        $vta_recibo->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial del recibo
        // --------------------------------------------------------------------
        $vta_recibo_estado = $vta_recibo->setVtaReciboEstado(VtaReciboTipoEstado::TIPO_GENERADO, $observacion);
        $vta_recibo_estado = $vta_recibo->setVtaReciboEstado(VtaReciboTipoEstado::TIPO_PENDIENTE, $observacion = ''); // Excepcional porque no interactua con AFIP

        // --------------------------------------------------------------------
        // se agregan los items al recibo
        // --------------------------------------------------------------------
        if (!empty($vta_recibo->getId())) {
            foreach ($txt_descripcions as $key => $txt_descripcion) {
                $importe_unitario = $txt_importe_unitarios[$key];
                $importe_unitario = Gral::getImporteDesdePriceFormatToDB($importe_unitario);

                // Cargo el detalle del Recibo
                $vta_recibo_item = new VtaReciboItem();

                $vta_recibo_item->setDescripcion($txt_descripcions[$key]);
                $vta_recibo_item->setVtaReciboId($vta_recibo->getId());
                $vta_recibo_item->setGralFpFormaPagoId($gral_forma_pago_ids[$key]);
                $vta_recibo_item->setVtaReciboConceptoId($vta_recibo_concepto_ids[$key]);
                $vta_recibo_item->setCantidad(1);

                $vta_recibo_item->setImporteUnitario($importe_unitario);
                $vta_recibo_item->setCodigo($txt_referencias[$key]);
                $vta_recibo_item->setObservacion('');
                $vta_recibo_item->setEstado(1);

                $vta_recibo_item->save();

                // -------------------------------------------------------------
                // Se registra el detalle del cheque si existe
                // -------------------------------------------------------------
                $arr_vta_recibo_cheque_infos = Gral::getSes('vta_recibo_descuento_financiero_cheque_info' . $var_sesion_random);

                if (!is_null($arr_vta_recibo_cheque_infos[$key])) {
                    $vta_recibo_item_cheque = new VtaReciboItemCheque();

                    $arr = $arr_vta_recibo_cheque_infos[$key];
                    $cheque_id = $arr['cheque_id'];

                    $vta_recibo_item_cheque->setVtaReciboId($vta_recibo->getId());
                    $vta_recibo_item_cheque->setVtaReciboItemId($vta_recibo_item->getId());
                    $vta_recibo_item_cheque->setGralBancoId($arr['gral_banco_id']);
                    $vta_recibo_item_cheque->setDescripcion($arr['descripcion']);
                    $vta_recibo_item_cheque->setEntregador($arr['entregador']);
                    $vta_recibo_item_cheque->setFirmante($arr['firmante']);
                    $vta_recibo_item_cheque->setNumeroCheque($arr['numero_cheque']);
                    $vta_recibo_item_cheque->setFechaCobro($arr['fecha_cobro']);
                    $vta_recibo_item_cheque->setFechaEmision($arr['fecha_emision']);
                    $vta_recibo_item_cheque->setEstado(1);

                    $vta_recibo_item_cheque->save();

                    // -------------------------------------------------------------
                    // inicializa cheque
                    // -------------------------------------------------------------
                    $fnd_chq_cheque = FndChqCheque::inicializarFndChqChequeDesdeVtaRecibo($cheque_id, $vta_recibo_item, $arr);
                }

                // -------------------------------------------------------------
                // Se registra el detalle de la retencion si existe
                // -------------------------------------------------------------
                $arr_vta_recibo_retencion_infos = Gral::getSes('vta_recibo_descuento_financiero_retencion_info' . $var_sesion_random);

                if (!is_null($arr_vta_recibo_retencion_infos[$key])) {
                    $vta_recibo_item_retencion = new VtaReciboItemRetencion();

                    $arr = $arr_vta_recibo_retencion_infos[$key];

                    $vta_recibo_item_retencion->setVtaReciboId($vta_recibo->getId());
                    $vta_recibo_item_retencion->setVtaReciboItemId($vta_recibo_item->getId());
                    $vta_recibo_item_retencion->setDescripcion($arr['descripcion']);
                    $vta_recibo_item_retencion->setNumeroComprobante($arr['numero_comprobante']);
                    $vta_recibo_item_retencion->setFechaEmision($arr['fecha_emision']);
                    $vta_recibo_item_retencion->setImporteBaseImponible($arr['importe_base_imponible']);
                    $vta_recibo_item_retencion->setImporteRetencion($importe_unitario);
                    $vta_recibo_item_retencion->setObservacion($arr['observacion']);
                    $vta_recibo_item_retencion->setEstado(1);

                    $vta_recibo_item_retencion->save();
                }
            }
        }

        // --------------------------------------------------------------------
        // se vincula el cliente al Recibo
        // --------------------------------------------------------------------        
        $vta_recibo->setCliClienteId($cli_cliente->getId());
        $vta_recibo->setRazonSocial($cli_cliente->getRazonSocial());
        $vta_recibo->setDomicilioLegal($cli_cliente->getDomicilioLegal());
        $vta_recibo->setCuit($cli_cliente->getCuit());
        $vta_recibo->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
        $vta_recibo->setGralTipoPersoneriaId($cli_cliente->getGralTipoPersoneriaId());
        $vta_recibo->setPersonaDescripcion($cli_cliente->getDescripcion());
        if ($gral_tipo_documento_cuit) {
            $vta_recibo->setGralTipoDocumentoId($gral_tipo_documento_cuit->getId());
        }
        $vta_recibo->setPersonaDocumento($cli_cliente->getCuit());
        $vta_recibo->setPersonaEmail($cli_cliente->getEmail());

        // --------------------------------------------------------------------
        // se determina el tipo de Recibo
        // --------------------------------------------------------------------
        $vta_tipo_recibo = self::getDeterminacionTipoRecibo($cli_cliente_id);
        $vta_recibo->setVtaTipoReciboId($vta_tipo_recibo->getId());
        $vta_recibo->save();

        // --------------------------------------------------------------------
        // se imputan los comprobantes
        // --------------------------------------------------------------------
        $vta_recibo->setImputarVtaComprobante($recalcular_estado = true, null, $vta_factura_ids);

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_recibo->setActualizarResumenComprobante();

        return $vta_recibo;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 28/05/2019 14:50 hs.
     * Metodo que modifica los datos basicos del comprobante
     * @return Obj VtaFactura
     */
    public function setModificarDatosComprobante($vta_tipo_recibo_id, $vta_preventista_id, $vta_recibo_condicion_pago_id, $vta_recibo_tipo_pago_id, $cli_cliente_id, $txt_fecha, $txt_codigo_op_cliente, $txa_nota_interna, $txa_nota_publica, $txa_observacion) {
        $cli_cliente = CliCliente::getOxId($cli_cliente_id);

        $this->setVtaTipoReciboId($vta_tipo_recibo_id);

        $this->setVtaPreventistaId($vta_preventista_id);
        $this->setVtaReciboCondicionPagoId($vta_recibo_condicion_pago_id);
        $this->setVtaReciboTipoPagoId($vta_recibo_tipo_pago_id);

        //$this->setCliClienteId($cli_cliente_id); // no se reemplaza mas el cliente
        $this->setFechaEmision($txt_fecha);
        $this->setCodigoOpCliente($txt_codigo_op_cliente);
        $this->setNumeroReciboCompleto($this->getNumeroReciboCompletoFormateado());
        $this->setNotaInterna($txa_nota_interna);
        $this->setNotaPublica($txa_nota_publica);
        $this->setObservacion($txa_observacion);

        /*
          if ($cli_cliente) {
          $this->setRazonSocial($cli_cliente->getRazonSocial());
          $this->setDomicilioLegal($cli_cliente->getDomicilioLegal());
          $this->setCuit($cli_cliente->getCuit());
          $this->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
          $this->setGralTipoPersoneriaId($cli_cliente->getGralTipoPersoneriaId());

          $this->setPersonaDescripcion($cli_cliente->getRazonSocial());
          }
         */
        $this->save();
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
     * Metodo que registra un nuevo estado del recibo.
     * @return Obj VtaReciboEstado
     */
    public function setVtaReciboEstado($codigo, $observacion = '') {
        $inicial = 1;
        $vta_recibo_estado = false;

        // se agrega el nuevo estado del factura
        $vta_recibo_tipo_estado = VtaReciboTipoEstado::getOxCodigo($codigo);

        if ($vta_recibo_tipo_estado) {
            foreach ($this->getVtaReciboEstados() as $vta_recibo_estado) {
                $vta_recibo_estado->setActual(0);
                $vta_recibo_estado->save();
                $inicial = 0;
            }


            $vta_recibo_estado = new VtaReciboEstado();
            $vta_recibo_estado->setVtaReciboId($this->getId());
            $vta_recibo_estado->setVtaReciboTipoEstadoId($vta_recibo_tipo_estado->getId());
            $vta_recibo_estado->setInicial($inicial);
            $vta_recibo_estado->setActual(1);
            $vta_recibo_estado->setObservacion($observacion);
            $vta_recibo_estado->save();

            // actualizamos el estado en vta_recibo      
            $this->setVtaReciboTipoEstadoId($vta_recibo_tipo_estado->getId());
            $this->save();
        }

        return $vta_recibo_estado;
    }

    /**
     * Registro de los movimientos contables de la operacion
     */
    public function setRegistrarContabilidad($cntb_periodo = false) {
        if ((int) $this->getCntbDiarioAsientoId() > 0) {
            return;
        }

        $vta_recibo_tipo_estado = $this->getVtaReciboTipoEstado();

        if ($vta_recibo_tipo_estado->getContabilizable()) {
            $cli_cliente = $this->getCliCliente();
            $gral_empresa = $this->getGralEmpresa();
            $cntb_ejercicio = CntbEjercicio::getCntbEjercicioActual($gral_empresa);
            $cntb_tipo_asiento = CntbTipoAsiento::getOxCodigo(CntbTipoAsiento::TIPO_OPERATIVO);
            $cntb_tipo_origen = CntbTipoOrigen::getOxCodigo(CntbTipoOrigen::TIPO_AUTOMATICO);
            $cntb_tipo_movimiento = CntbTipoMovimiento::getOxCodigo(CntbTipoMovimiento::TIPO_VENTAS);
            $descripcion = 'Asiento de VtaRecibo ' . $this->getId();

            $array_cuentas_debe = array();
            $array_cuentas_haber = array();

            $vta_tipo_origen_recibo = $this->getVtaTipoOrigenRecibo();
            $gral_actividad = $this->getGralActividad();
            $gral_tipo_documento = $this->getGralTipoDocumento();
            $gral_condicion_iva = $this->getGralCondicionIva();
            $gral_fp_forma_pago = $this->getGralFpFormaPago();
            $cntb_cuenta_venta_debe = $gral_fp_forma_pago->getCntbCuentaVentaObj();

            $importe_iva = $this->getVtaReciboIva();
            $importe_tributo = $this->getVtaReciboTributo();
            //$importe_subtotal = $this->getVtaFacturaSubtotal();
            $importe_total = $this->getVtaReciboTotal();


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
            $cntb_diario_asiento_vta_recibo = new CntbDiarioAsientoVtaRecibo();
            $cntb_diario_asiento_vta_recibo->setCntbDiarioAsientoId($cntb_diario_asiento->getId());
            $cntb_diario_asiento_vta_recibo->setVtaReciboId($this->getId());
            $cntb_diario_asiento_vta_recibo->save();

            $vta_tipo_factura = $this->getVtaTipoFactura();
            $vta_tipo_origen_recibo = $this->getVtaTipoOrigenRecibo();
            $gral_condicion_iva = $this->getGralCondicionIva();
            $gral_tipo_documento = $this->getGralTipoDocumento();


            // --------------------------------------------------------------------------
            // se determina vinculo del comprobante
            // --------------------------------------------------------------------------
            $descripcion_vinculo = '';
            $vta_factura = $this->getVtaFacturaXVtaFacturaVtaRecibo(null, null, true);
            $vta_nota_debito = $this->getVtaNotaDebitoXVtaNotaDebitoVtaRecibo(null, null, true);
            if ($vta_factura) {
                $descripcion_vinculo = ' - Vinculado a ' . $vta_factura->getTipoComprobanteSiglas() . ' ' . $vta_factura->getNumeroComprobanteCompleto();
            } elseif ($vta_nota_debito) {
                $descripcion_vinculo = ' - Vinculado a ' . $vta_nota_debito->getTipoComprobanteSiglas() . ' ' . $vta_nota_debito->getNumeroComprobanteCompleto();
            }

            // --------------------------------------------------------------------------
            // si fueron items
            // --------------------------------------------------------------------------
            $vta_recibo_items = $this->getVtaReciboItems();
            if (count($vta_recibo_items) > 0) {
                $cantidad_items = count($vta_recibo_items) . " Items";
            }

            $descripcion = $vta_tipo_factura->getDescripcion() . " " . $this->getNumeroComprobanteCompleto() . ' - ' . $vta_tipo_origen_recibo->getDescripcion() . $descripcion_vinculo;
            ;
            $observacion = "Emitido a " . $gral_condicion_iva->getDescripcion() . " " . $this->getPersonaDescripcion() . " " . $gral_tipo_documento->getDescripcion() . " " . $this->getPersonaDocumento() . " por " . $cantidad_items;

            // --------------------------------------------------------------------------
            // se actualiza la descripcion y observacion del asiento
            // --------------------------------------------------------------------------
            $cntb_diario_asiento->setDescripcion($descripcion);
            $cntb_diario_asiento->setObservacion($observacion);
            $cntb_diario_asiento->save();
        }
    }

    /**
     * Metodo que retorna la cantidad de items que tiene un Recibo.
     * @return type float
     */
    public function getVtaReciboCantidadItems() {
        $vta_recibo_items = $this->getVtaReciboItems(null, null, true);
        $cantidad_items = count($vta_recibo_items);

        return $cantidad_items;
    }

    /**
     * Metodo que retorna el tipo de recibo que tiene un cliente.
     * @param type $cli_cliente_id
     * @return type VtaTipoRecibo
     */
    static function getDeterminacionTipoRecibo($cli_cliente_id) {
        $vta_tipo_recibo = VtaTipoRecibo::getOxCodigo(VtaTipoRecibo::TIPO_RECIBO_X);

        $cli_cliente = CliCliente::getOxId($cli_cliente_id);

        if ($cli_cliente) {
            $gral_condicion_iva_id = $cli_cliente->getGralCondicionIvaId();

            $gral_condicion_iva_vta_tipo_recibos = GralCondicionIvaVtaTipoRecibo::getOsxGralCondicionIvaId($gral_condicion_iva_id);
            foreach ($gral_condicion_iva_vta_tipo_recibos as $gral_condicion_iva_vta_tipo_recibo) {
                $vta_tipo_recibo = $gral_condicion_iva_vta_tipo_recibo->getVtaTipoRecibo();
                return $vta_tipo_recibo;
            }
        }
        return $vta_tipo_recibo;
    }

    /**
     * Metodo que retorna el iva de los items de la NC.
     * @return type float
     */
    public function getArrIvaParaAfipVtaReciboItem() {

        $arr = array();

        $vta_recibo_items = $this->getVtaReciboItems(null, null, true);

        foreach ($vta_recibo_items as $vta_recibo_item) {
            $gral_tipo_iva = $vta_recibo_item->getGralTipoIva();
            $ws_fe_param_tipo_iva = $gral_tipo_iva->getWsFeParamTipoIvaXGralTipoIvaWsFeParamTipoIva();

            $importe_total = round($vta_recibo_item->getImporteTotal(), 2);
            $importe_iva = round($vta_recibo_item->getImporteIva(), 2);

            $arr[$gral_tipo_iva->getCodigo()]['WS_FE_PARAM_TIPO_IVA_ID'] = $ws_fe_param_tipo_iva->getId();
            $arr[$gral_tipo_iva->getCodigo()]['Id'] = $ws_fe_param_tipo_iva->getCodigoAfip();
            $arr[$gral_tipo_iva->getCodigo()]['BaseImp'] = $arr[$gral_tipo_iva->getCodigo()]['BaseImp'] + $importe_total;
            $arr[$gral_tipo_iva->getCodigo()]['Importe'] = $arr[$gral_tipo_iva->getCodigo()]['Importe'] + $importe_iva;
        }

        return $arr;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 20/03/2018 11:00 hs.
     * Metodo que envia el Recibo por email.
     * @return 
     */
    public function enviarReciboEmail($enviar = false, $destinatarios = false, $txa_observacion, $archivo_adjunto_urls = false) {
        if (!Mail::MAIL_ACTIVO)
            return false;

        $mail_asunto = Gral::getConfig('gral_cliente') . ' - Recibo #' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios = str_replace(' ', '', $destinatarios);
        $destinatarios = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param = array(
            'vta_recibo_id' => $this->getId(),
            'observacion' => $txa_observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_vta_recibo.php";
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

        $vta_recibo_enviado = $this->inicializarVtaReciboEnviado($txa_observacion, $destinatarios, $mail_asunto, $msg, $strContenidoPdf);

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
                $vta_recibo_enviado->setConfirmarVtaReciboEnviado(1, VtaReciboEnviado::RECIBO_ENVIADO_CORRECTAMENTE);
            } else {
                $vta_recibo_enviado->setConfirmarVtaReciboEnviado(0, $mail->ErrorInfo);
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
     * Metodo que Inicializa el envio por mail del Recibo.
     * @return VtaReciboEnviado
     */
    public function inicializarVtaReciboEnviado($observacion, $destinatarios, $mail_asunto, $mail_contenido, $archivo_adjunto) {
        $vta_recibo_enviado = new VtaReciboEnviado();
        $vta_recibo_enviado->setDescripcion('');
        $vta_recibo_enviado->setVtaReciboId($this->getId());
        $vta_recibo_enviado->setAsunto($mail_asunto);
        $vta_recibo_enviado->setDestinatario($destinatarios);

        $vta_recibo_enviado->setCuerpo(addslashes($mail_contenido));
        $vta_recibo_enviado->setAdjunto(base64_encode($archivo_adjunto));

        $vta_recibo_enviado->setCodigoEnvio(0);
        $vta_recibo_enviado->setObservacion($observacion);
        $vta_recibo_enviado->setEstado(0);

        $vta_recibo_enviado->save();

        return $vta_recibo_enviado;
    }

    public function getNombreArchivoAdjuntoRecibo() {
        $nombre = Gral::getConfig('conf_proyecto_min') . '_RBO_' . $this->getVtaTipoRecibo()->getCodigoMin() . '_' . $this->getCodigo() . '_' . $this->getPersonaDescripcion();
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
        $numero_comprobante = $this->getNumeroRecibo();
        $letra_tipo_comprobante = $this->getVtaTipoRecibo()->getCodigoMin();

        return $siglas_tipo_comprobante . ' ' . $letra_tipo_comprobante . ' ' . str_pad($numero_punto_venta, 4, 0, STR_PAD_LEFT) . '-' . str_pad($numero_comprobante, 8, 0, STR_PAD_LEFT);
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que se utiliza en la pantalla de conciliacion de comprobantes.
     * Modulo vta_comprobante_gestion.
     * @return String
     */
    public function getTipoComprobante() {
        return $this->getVtaTipoRecibo()->getDescripcion();
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 28/07/2018 15:13 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna el tipo de comprobante si existe.
     * @return String
     */
    public function getTipoComprobanteMin() {
        return $this->getVtaTipoRecibo()->getCodigoMin();
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que se utiliza en la pantalla de conciliacion de comprobantes.
     * Modulo vta_comprobante_gestion.
     * @return String
     */
    public function getTipoEstadoComprobante() {
        return $this->getVtaReciboTipoEstado()->getDescripcion();
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 01/07/2020 18:32 hs.
     * Metodo generico que devuelve el origen del comprobante
     * @return String
     */
    public function getVtaTipoOrigenComprobanteDescripcion() {
        $descripcion = $this->getVtaTipoOrigenRecibo()->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 01/07/2020 18:32 hs.
     * Metodo generico que devuelve el tipo de comprobante
     * @return String
     */
    public function getVtaTipoComprobanteDescripcion() {
        $descripcion = $this->getVtaTipoRecibo()->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que se utiliza en la pantalla de conciliacion de comprobantes.
     * Modulo vta_comprobante_gestion.
     * @todo Falta terminar el metodo con las clases de AFIP o terminar de definir el concepto de Recibos.
     * @return String
     */
    public function getImporteTotalComprobante($resumen = false) {

        if($resumen){
            // -------------------------------------------------------------------------
            // se instancia la tabla de resumen
            // -------------------------------------------------------------------------
            $vta_recibo_importe = $this->getResumenComprobante();
            return $vta_recibo_importe->getImporteTotal();
        }
        
        $vta_recibo_importe_total = 0;

        // Importes de la generacion del Recibo a travez de los items
        $vta_recibo_item_subtotal = $this->getVtaReciboItemSubtotal();
        $vta_recibo_item_iva = $this->getVtaReciboItemIva();
        $vta_recibo_item_vta_tributo = $this->getVtaReciboItemImporteTributo();

        $vta_recibo_importe_total = $vta_recibo_item_subtotal + $vta_recibo_item_iva + $vta_recibo_item_vta_tributo;

        return $vta_recibo_importe_total;
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
     * Metodo que retorna el iva de los items del Recibo.
     * @return type float
     */
    public function getVtaReciboItemIva() {
        $iva = 0;
        $vta_recibo_items = $this->getVtaReciboItems(null, null, true);

        foreach ($vta_recibo_items as $vta_recibo_item) {
            $gral_tipo_iva = $vta_recibo_item->getGralTipoIva();
            $valor_iva_coeficiente = $gral_tipo_iva->getValorIva() / 100;

            $importe_unitario = round($vta_recibo_item->getImporteUnitario(), 2);
            $cantidad = $vta_recibo_item->getCantidad();
            $iva += $importe_unitario * $cantidad * $valor_iva_coeficiente;
        }
        return $iva;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que retorna el importe total de los tributos del Recibo generado por la carga de los Items.
     * @return Float
     */
    public function getVtaReciboItemImporteTributo() {
        $importe_tributo = 0;
        $vta_recibo_vta_tributos = $this->getVtaReciboVtaTributos(null, null, true);

        foreach ($vta_recibo_vta_tributos as $vta_recibo_vta_tributo) {
            $importe_tributo += round($vta_recibo_vta_tributo->getImporteTributo(), 2);
        }

        return $importe_tributo;
    }

    /**
     * Metodo que retorna el subtotal de los items del recibo sin iva.
     * @return type float
     */
    public function getVtaReciboItemSubtotal() {
        $vta_recibo_items = $this->getVtaReciboItems(null, null, true);

        foreach ($vta_recibo_items as $vta_recibo_item) {
            $importe_unitario = round($vta_recibo_item->getImporteUnitario(), 2);
            $cantidad = $vta_recibo_item->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }
        return $subtotal;
    }

    /**
     * Metodo que retorna el subtotal de los items del recibo sin iva.
     * @return type float
     */
    public function getVtaReciboSubtotal() {
        $vta_recibo_items = $this->getVtaReciboItems(null, null, true);

        foreach ($vta_recibo_items as $vta_recibo_item) {
            $importe_unitario = round($vta_recibo_item->getImporteUnitario(), 2);
            $cantidad = $vta_recibo_item->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }
        return $subtotal;
    }

    public function getVtaReciboSubtotalParaComprobante() {
        $vta_tipo_recibo = $this->getVtaTipoRecibo();

        switch ($vta_tipo_recibo->getCodigo()) {
            case VtaTipoRecibo::TIPO_RECIBO_A:
                $importe = $this->getVtaReciboSubtotal();
                break;
            case VtaTipoRecibo::TIPO_RECIBO_B:
                $importe = $this->getVtaReciboSubtotal() + $this->getVtaReciboIva();
                break;
            default:
                $importe = $this->getVtaReciboSubtotal() + $this->getVtaReciboIva();
        }

        return $importe;
    }

    /**
     * Metodo que retorna el iva de los items del Recibo.
     * @return type float
     */
    public function getVtaReciboIva() {
        $iva = 0;
        $vta_recibo_items = $this->getVtaReciboItems(null, null, true);

        foreach ($vta_recibo_items as $vta_recibo_item) {
            $gral_tipo_iva = $vta_recibo_item->getGralTipoIva();
            $valor_iva_coeficiente = $gral_tipo_iva->getValorIva() / 100;

            $importe_unitario = round($vta_recibo_item->getImporteUnitario(), 2);
            $cantidad = $vta_recibo_item->getCantidad();
            $iva += $importe_unitario * $cantidad * $valor_iva_coeficiente;
        }
        return round($iva, 2);
    }

    /**
     * Metodo que retorna el valor de los tributos de la factura.
     * @return type float
     */
    public function getArrVtaTributosAplicados() {
        $vta_recibo_vta_tributos = $this->getVtaReciboVtaTributos(null, null, true);

        foreach ($vta_recibo_vta_tributos as $vta_recibo_vta_tributo) {
            $vta_tributo = $vta_recibo_vta_tributo->getVtaTributo();
            $importe_total_tributo = $vta_recibo_vta_tributo->getImporteTributo();

            $arr_tributos[$vta_tributo->getId()] = array(
                'vta_tributo_id' => $vta_tributo->getId(),
                'vta_tributo_descripcion' => $vta_tributo->getDescripcion(),
                'importe' => $importe_total_tributo,
            );
        }
        return $arr_tributos;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que retorna el importe total de los tributos del Recibo generado por la carga de los Items.
     * @return Float
     */
    public function getVtaReciboTributo() {
        $importe_tributo = 0;
        $vta_recibo_vta_tributos = $this->getVtaReciboVtaTributos(null, null, true);

        foreach ($vta_recibo_vta_tributos as $vta_recibo_vta_tributo) {
            $importe_tributo += round($vta_recibo_vta_tributo->getImporteTributo(), 2);
        }

        return $importe_tributo;
    }

    /**
     * Metodo que retorna el total del recibo con iva y tributos.
     * @return type float
     */
    public function getVtaReciboTotal() {
        $total = $this->getVtaReciboSubtotal() + $this->getVtaReciboIva() + $this->getVtaReciboTributo();
        return $total;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que retorna una coleccion de Recibos para imputar en las ND y Facturas.
     * @return VtaRecibos
     */
    static function getVtaRecibosImputables($cli_cliente_id, $gral_empresa_id = null, $vta_comprobante_seleccionado = false) {
        $criterio = new Criterio(VtaRecibo::SES_CRITERIOS);
        $criterio->setAmbiguo(false);
        $criterio->addDistinct(true);

        $criterio->addInicioSubconsulta();
        $criterio->add('', 'true', '', false, "");

        if ($cli_cliente_id != 'null') {
            $criterio->add(VtaRecibo::GEN_ATTR_CLI_CLIENTE_ID, $cli_cliente_id, Criterio::IGUAL);
        } elseif ($vta_comprobante_seleccionado) {
            $criterio->add(VtaRecibo::GEN_ATTR_PERSONA_DESCRIPCION, $vta_comprobante_seleccionado->getPersonaDescripcion(), Criterio::IGUAL);
        }

        if ($gral_empresa_id != 'null') {
            $criterio->add(VtaRecibo::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
        }
        $criterio->addFinSubconsulta();

        //----------------------------------------------
        // Aca va un inicio de subconsulta con el fin y despues los join
        //----------------------------------------------
        $criterio->addInicioSubconsulta();
        $criterio->add(VtaReciboTipoEstado::GEN_ATTR_IMPUTABLE, 1, Criterio::IGUAL);

        $criterio->addRealJoin(VtaReciboTipoEstado::GEN_TABLA, VtaReciboTipoEstado::GEN_ATTR_ID, VtaRecibo::GEN_ATTR_VTA_RECIBO_TIPO_ESTADO_ID, 'LEFT JOIN');
        $criterio->addFinSubconsulta();

        $criterio->addTabla(VtaRecibo::GEN_TABLA);
        $criterio->setCriterios();

        $vta_recibos = VtaRecibo::getVtaRecibos(null, $criterio, true);

        return $vta_recibos;
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
     * Metodo que retorna el importe disponible a imputar de un Recibo.
     * @return Float
     */
    public function getSaldoImputable() {
        $importe_total_comprobante_afectado = 0;

        // Busco el importe total de la Factura
        $importe_total_comprobante = $this->getImporteTotalComprobante();

        // Busco el importe total ya imputado con Facturas
        $vta_factura_vta_recibos = $this->getVtaFacturaVtaRecibos(null, null, true);
        foreach ($vta_factura_vta_recibos as $vta_factura_vta_recibo) {
            $importe_total_comprobante_afectado += $vta_factura_vta_recibo->getImporteAfectado();
        }

        // Busco el importe total ya imputado con Notas de Debitos
        $vta_nota_debito_vta_recibos = $this->getVtaNotaDebitoVtaRecibos(null, null, true);
        foreach ($vta_nota_debito_vta_recibos as $vta_nota_debito_vta_recibo) {
            $importe_total_comprobante_afectado += $vta_nota_debito_vta_recibo->getImporteAfectado();
        }

        // Busco el importe total ya imputado con Ajustes
        $vta_ajuste_debe_vta_recibos = $this->getVtaAjusteDebeVtaRecibos(null, null, true);
        foreach ($vta_ajuste_debe_vta_recibos as $vta_ajuste_debe_vta_recibo) {
            $importe_total_comprobante_afectado += $vta_ajuste_debe_vta_recibo->getImporteAfectado();
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
        $vta_recibo_importe_total_a_imputar = $this->getSaldoImputable();

        // Agrupo todos los comprobantes para poder ordenarlos por fecha de emision
        foreach ($vta_factura_ids as $vta_factura_id) {
            $vta_fatura = VtaFactura::getOxId($vta_factura_id);
            $vta_comprobantes[] = $vta_fatura;
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


        $vta_recibo_importe_a_imputar = $vta_recibo_importe_total_a_imputar;
        // Genero el vinculo con el comprobante correspondiente
        foreach ($vta_comprobantes as $vta_comprobante) {

            if ((int) ($vta_recibo_importe_a_imputar * 100) > 0) {
                $clase = get_class($vta_comprobante);

                if ($clase == 'VtaNotaDebito') {
                    $vta_nota_debito = VtaNotaDebito::getOxId($vta_comprobante->getId());
                    $vta_nota_debito_importe_disponible = $vta_nota_debito->getSaldoImputable();

                    // Genero la relacion
                    $vta_nota_debito_vta_recibo = new VtaNotaDebitoVtaRecibo();

                    $vta_nota_debito_vta_recibo->setVtaReciboId($this->getId());
                    $vta_nota_debito_vta_recibo->setVtaNotaDebitoId($vta_nota_debito->getId());

                    // Monto de la factura mayor o igual al de la NC
                    if ((int) ($vta_recibo_importe_a_imputar * 100) < (int) ($vta_nota_debito_importe_disponible * 100)) {

                        $vta_nota_debito_vta_recibo->setImporteAfectado($vta_recibo_importe_a_imputar);
                    } else {
                        $vta_nota_debito_vta_recibo->setImporteAfectado($vta_nota_debito_importe_disponible);
                    }
                    $vta_nota_debito_vta_recibo->setEstado(1);
                    $vta_nota_debito_vta_recibo->save();

                    $vta_recibo_importe_a_imputar -= $vta_nota_debito_importe_disponible;
                } elseif ($clase == 'VtaFactura') {
                    $vta_factura = VtaFactura::getOxId($vta_comprobante->getId());

                    $vta_factura_importe_disponible = $vta_factura->getSaldoImputable();

                    // Genero la relacion
                    $vta_factura_vta_recibo = new VtaFacturaVtaRecibo();

                    $vta_factura_vta_recibo->setVtaFacturaId($vta_factura->getId());
                    $vta_factura_vta_recibo->setVtaReciboId($this->getId());

                    // Monto del Recibo mayor o igual al de la factura
                    if ((int) ($vta_recibo_importe_a_imputar * 100) < (int) ($vta_factura_importe_disponible * 100)) {

                        $vta_factura_vta_recibo->setImporteAfectado($vta_recibo_importe_a_imputar);
                    } else {
                        $vta_factura_vta_recibo->setImporteAfectado($vta_factura_importe_disponible);
                    }
                    $vta_factura_vta_recibo->setEstado(1);
                    $vta_factura_vta_recibo->save();

                    $vta_recibo_importe_a_imputar -= $vta_factura_importe_disponible;
                } elseif ($clase == 'VtaAjusteDebe') {
                    $vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_comprobante->getId());

                    $vta_ajuste_debe_importe_disponible = $vta_ajuste_debe->getSaldoImputable();

                    // Genero la relacion
                    $vta_ajuste_debe_vta_recibo = new VtaAjusteDebeVtaRecibo();
                    $vta_ajuste_debe_vta_recibo->setVtaReciboId($this->getId());
                    $vta_ajuste_debe_vta_recibo->setVtaAjusteDebeId($vta_ajuste_debe->getId());

                    // Monto de la factura mayor o igual al del Ajuste
                    if ((int) ($vta_recibo_importe_a_imputar * 100) < (int) ($vta_ajuste_debe_importe_disponible * 100)) {
                        $vta_ajuste_debe_vta_recibo->setImporteAfectado($vta_recibo_importe_a_imputar);
                    } else {
                        $vta_ajuste_debe_vta_recibo->setImporteAfectado($vta_ajuste_debe_importe_disponible);
                    }
                    $vta_ajuste_debe_vta_recibo->setEstado(1);
                    $vta_ajuste_debe_vta_recibo->save();

                    $vta_recibo_importe_a_imputar -= $vta_ajuste_debe_importe_disponible;
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
     * @return Obj VtaReciboEstado
     */
    public function setRecalcularEstado($recursivo = false) {

        // Importe imputable del comprobante
        $importe_comprobante_total = $this->getImporteTotalComprobante();

        $importe_comprobante_saldo = $importe_comprobante_total;

        $vta_factura_vta_recibos = $this->getVtaFacturaVtaRecibos(null, null, true);
        $vta_nota_debito_vta_recibos = $this->getVtaNotaDebitoVtaRecibos(null, null, true);
        $vta_ajuste_debe_vta_recibos = $this->getVtaAjusteDebeVtaRecibos(null, null, true);

        // ---------------------------------------------------------------------
        // se recorren las facturas vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_factura_vta_recibos as $vta_factura_vta_recibo) {
            $importe_afectado = $vta_factura_vta_recibo->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $vta_factura_vta_recibo->getVtaFactura()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren las notas de debito vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_nota_debito_vta_recibos as $vta_nota_debito_vta_recibo) {
            $importe_afectado = $vta_nota_debito_vta_recibo->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $vta_nota_debito_vta_recibo->getVtaNotaDebito()->setRecalcularEstado(false);
            }
        }


        // ---------------------------------------------------------------------
        // se recorren las ajustes vinculados
        // ---------------------------------------------------------------------
        foreach ($vta_ajuste_debe_vta_recibos as $vta_ajuste_debe_vta_recibo) {
            $importe_afectado = $vta_ajuste_debe_vta_recibo->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $vta_ajuste_debe_vta_recibo->getVtaAjusteDebe()->setRecalcularEstado(false);
            }
        }

        if ((abs($importe_comprobante_saldo) >= 0) && (abs($importe_comprobante_saldo) <= ConfVariable::getImporteMargenToleranciaConciliacionSaldado())) {
            // -----------------------------------------------------------------
            // si tiene saldo cero el comprobante fue usado en su totalidad
            // -----------------------------------------------------------------
            $vta_recibo_estado = $this->setVtaReciboEstado(VtaReciboTipoEstado::TIPO_IMPUTADO, '');
        } elseif ($importe_comprobante_saldo > ConfVariable::getImporteMargenToleranciaConciliacionSaldado() && $importe_comprobante_saldo != $importe_comprobante_total) {
            // -----------------------------------------------------------------
            // si tiene saldo mayor a cero el comprobante fue usado parcialmente
            // -----------------------------------------------------------------
            $vta_recibo_estado = $this->setVtaReciboEstado(VtaReciboTipoEstado::TIPO_IMPUTADO_PARCIAL, '');
        } elseif ($importe_comprobante_saldo == $importe_comprobante_total) {
            // -----------------------------------------------------------------
            // si tiene saldo igual al total se encuentra pendiente de pago
            // -----------------------------------------------------------------
            $vta_recibo_estado = $this->setVtaReciboEstado(VtaReciboTipoEstado::TIPO_PENDIENTE, '');
        }

        return $vta_recibo_estado;
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

        $vta_factura_vta_recibos = $this->getVtaFacturaVtaRecibos(null, null, true);
        $vta_nota_debito_vta_recibos = $this->getVtaNotaDebitoVtaRecibos(null, null, true);
        $vta_ajuste_debes_vta_recibos = $this->getVtaAjusteDebeVtaRecibos(null, null, true);

        // ---------------------------------------------------------------------
        // se recorren las facturas vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_factura_vta_recibos as $vta_factura_vta_recibo) {
            $vta_factura_vta_recibo->setEstado(0);
            $vta_factura_vta_recibo->save();

            if ($recursivo) {
                $vta_factura_vta_recibo->getVtaFactura()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren las notas de debito vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_nota_debito_vta_recibos as $vta_nota_debito_vta_recibo) {
            $vta_nota_debito_vta_recibo->setEstado(0);
            $vta_nota_debito_vta_recibo->save();

            if ($recursivo) {
                $vta_nota_debito_vta_recibo->getVtaNotaDebito()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren los ajustos vinculados
        // ---------------------------------------------------------------------
        foreach ($vta_ajuste_debes_vta_recibos as $vta_ajuste_debes_vta_recibo) {
            $vta_ajuste_debes_vta_recibo->setEstado(0);
            $vta_ajuste_debes_vta_recibo->save();

            if ($recursivo) {
                $vta_ajuste_debes_vta_recibo->getVtaAjusteDebe()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recalcula estado del comprobante
        // ---------------------------------------------------------------------        
        $this->setRecalcularEstado(false);

        return true;
    }

    public function getVtaComprobanteTipoEstado() {
        return $this->getVtaReciboTipoEstado();
    }

    /**
     * Metodo que retorna los comprobantes vinculados al comprobante por conciliacion
     */
    public function getVtaComprobantesVinculadosPorConciliacion() {
        $vta_factura_vta_recibos = $this->getVtaFacturaVtaRecibos(null, null, true);
        $vta_nota_debito_vta_recibos = $this->getVtaNotaDebitoVtaRecibos(null, null, true);
        $vta_ajuste_debe_vta_recibos = $this->getVtaAjusteDebeVtaRecibos(null, null, true);

        $vta_facturas = $this->getVtaFacturasXVtaFacturaVtaRecibo(null, null, true);
        $vta_nota_debitos = $this->getVtaNotaDebitosXVtaNotaDebitoVtaRecibo(null, null, true);
        $vta_ajuste_debes = $this->getVtaAjusteDebesXVtaAjusteDebeVtaRecibo(null, null, true);

        $arr_comprobantes['INTERMEDIO'] = array_merge($vta_factura_vta_recibos, $vta_nota_debito_vta_recibos, $vta_ajuste_debe_vta_recibos);
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
        $c->add(VtaFacturaVtaRecibo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(VtaComisionVtaFactura::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(VtaComisionTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL);
        $c->addTabla(VtaFacturaVtaRecibo::GEN_TABLA);
        $c->addRealJoin(VtaFactura::GEN_TABLA, VtaFactura::GEN_ATTR_ID, VtaFacturaVtaRecibo::GEN_ATTR_VTA_FACTURA_ID);
        $c->addRealJoin(VtaComisionVtaFactura::GEN_TABLA, VtaComisionVtaFactura::GEN_ATTR_VTA_FACTURA_ID, VtaFactura::GEN_ATTR_ID);
        $c->addRealJoin(VtaComision::GEN_TABLA, VtaComision::GEN_ATTR_ID, VtaComisionVtaFactura::GEN_ATTR_VTA_COMISION_ID);
        $c->addRealJoin(VtaComisionTipoEstado::GEN_TABLA, VtaComisionTipoEstado::GEN_ATTR_ID, VtaComision::GEN_ATTR_VTA_COMISION_TIPO_ESTADO_ID);
        $c->setCriterios();

        $vta_factura_vta_recibos = $this->getVtaFacturaVtaRecibos(null, $c);
        if (count($vta_factura_vta_recibos) > 0) {
            return false;
        }
        return true;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 11/05/2019
     */
    public function setVtaReciboAnular($observacion = '') {
        $vta_recibo_estado = $this->setVtaReciboEstado(VtaReciboTipoEstado::TIPO_ANULADO, $observacion);

        $vta_recibo_items = $this->getVtaReciboItems();
        foreach ($vta_recibo_items as $vta_recibo_item) {
            $fnd_chq_cheque = $vta_recibo_item->getFndChqCheque();
            if ($fnd_chq_cheque) {
                $fnd_chq_cheque->setRetrotraerFndChqChequeTipoEstado('Recibo de Compra Anulado: ' . $observacion);
            }
        }

        return $vta_recibo_estado;
    }

    /**
     * Actualiza el resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function setActualizarResumenComprobante() {
        $vta_recibo_importe = $this->getVtaReciboImporte();

        if (!$vta_recibo_importe) {
            $vta_recibo_importe = new VtaReciboImporte();
        }

        $importe_subtotal = $this->getVtaReciboSubtotal();
        $importe_iva = $this->getVtaReciboIva();
        $importe_tributo = $this->getVtaReciboTributo();
        $importe_total = $importe_subtotal + $importe_iva + $importe_tributo;

        $vta_recibo_importe->setDescripcion($this->getNumeroComprobanteCompleto());
        $vta_recibo_importe->setVtaReciboId($this->getId());
        $vta_recibo_importe->setImporteSubtotal($importe_subtotal);
        $vta_recibo_importe->setImporteIva($importe_iva);
        $vta_recibo_importe->setImporteTributo($importe_tributo);
        $vta_recibo_importe->setImporteTotal($importe_total);
        $vta_recibo_importe->setEstado(1);
        $vta_recibo_importe->save();

        return $vta_recibo_importe;
    }

    /**
     * Retorna un resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function getResumenComprobante() {
        $o = $this->getVtaReciboImporte();
        if ($o) {
            return $o;
        }

        return new VtaReciboImporte();
    }
    
    /**
     * donde se utilice el pdf agregar un parametro mas y enviar este hash.
     * despues donde se quiera acceder , instanciar objeto y llamar a este metodo, y comprar con hash y hash recibido
     */
    public function getHash() {
        return md5($this->getCreado());
    }
    

}

?>
