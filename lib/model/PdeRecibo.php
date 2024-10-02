<?php

require_once "base/BPdeRecibo.php";

class PdeRecibo extends BPdeRecibo {

    const PREFIJO_RECIBO = 'RCB-';

    public function getTipoComprobanteSiglas() {
        return "RBO";
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 05/03/2018 09:00 hs.
     * Metodo que genera un recibo item.
     * @return Obj PdeRecibo
     */
    static function setInicializarPdeReciboItem($gral_empresa_id, $pde_centro_pedido_id, $fnd_caja_id, $prv_proveedor_id, $pde_recibo_condicion_pago_id, $pde_recibo_tipo_pago_id, $var_sesion_random, $txt_fecha, $txt_nro_punto_venta, $txt_nro_comprobante, $txt_cantidads, $txt_descripcions, $txt_referencias, $txt_importe_unitarios, $gral_tipo_iva_ids, $gral_forma_pago_ids, $pde_recibo_concepto_ids, $observacion = '') {

        // --------------------------------------------------------------------
        // se determina el origen del comprobante
        // --------------------------------------------------------------------
        $pde_tipo_origen_recibo = PdeTipoOrigenRecibo::getOxCodigo(PdeTipoOrigenRecibo::ORIGEN_ITEM);

        $prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

        $pde_recibo = new PdeRecibo();

        $pde_recibo->setPdeReciboCondicionPagoId($pde_recibo_condicion_pago_id);
        $pde_recibo->setPdeReciboTipoPagoId($pde_recibo_tipo_pago_id);
        $pde_recibo->setPdeTipoOrigenReciboId($pde_tipo_origen_recibo->getId());
        $pde_recibo->setGralEmpresaId($gral_empresa_id);
        $pde_recibo->setPdeCentroPedidoId($pde_centro_pedido_id);
        $pde_recibo->setFndCajaId($fnd_caja_id);
        $pde_recibo->setFechaEmision($txt_fecha);
        $pde_recibo->setNumeroPuntoVenta($txt_nro_punto_venta);
        $pde_recibo->setNumeroRecibo($txt_nro_comprobante);
        $pde_recibo->setNumeroReciboCompleto($pde_recibo->getNumeroReciboCompletoFormateado());
        $pde_recibo->setObservacion($observacion);
        $pde_recibo->setEstado(1);
        $pde_recibo->save();

        // --------------------------------------------------------------------
        // se setea el codigo del recibo
        // --------------------------------------------------------------------
        $pde_recibo->setCodigo(self::PREFIJO_RECIBO . str_pad($pde_recibo->getId(), 8, 0, STR_PAD_LEFT));
        $pde_recibo->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial del recibo
        // --------------------------------------------------------------------
        $pde_recibo_estado = $pde_recibo->setPdeReciboEstado(PdeReciboTipoEstado::TIPO_GENERADO, $observacion);
        $pde_recibo_estado = $pde_recibo->setPdeReciboEstado(PdeReciboTipoEstado::TIPO_PENDIENTE, $observacion = '');

        // --------------------------------------------------------------------
        // se agregan los items al recibo
        // --------------------------------------------------------------------
        if (!empty($pde_recibo->getId())) {
            // $txt_cantidads, $txt_descripcions, $txt_importe_unitarios, $cmb_gral_forma_pago_ids

            foreach ($txt_descripcions as $key => $txt_descripcion) {

                $importe_unitario = $txt_importe_unitarios[$key];
                $importe_unitario = Gral::getImporteDesdePriceFormatToDB($importe_unitario);

                // Cargo el detalle del Recibo
                $pde_recibo_item = new PdeReciboItem();

                $pde_recibo_item->setDescripcion($txt_descripcions[$key]);
                $pde_recibo_item->setPdeReciboId($pde_recibo->getId());
                $pde_recibo_item->setGralFpFormaPagoId($gral_forma_pago_ids[$key]);
                $pde_recibo_item->setPdeReciboConceptoId($pde_recibo_concepto_ids[$key]);
                $pde_recibo_item->setCantidad(1);

                $pde_recibo_item->setImporteUnitario($importe_unitario);
                $pde_recibo_item->setCodigo($txt_referencias[$key]);
                $pde_recibo_item->setObservacion('');
                $pde_recibo_item->setEstado(1);

                $pde_recibo_item->save();

                // -------------------------------------------------------------
                // Se registra el detalle del cheque si existe
                // -------------------------------------------------------------
                $arr_pde_recibo_cheque_infos = Gral::getSes('pde_recibo_cheque_info' . $var_sesion_random);

                if (!is_null($arr_pde_recibo_cheque_infos[$key])) {
                    $pde_recibo_item_cheque = new PdeReciboItemCheque();

                    $arr = $arr_pde_recibo_cheque_infos[$key];
                    $cheque_id = $arr['cheque_id'];

                    $pde_recibo_item_cheque->setPdeReciboId($pde_recibo->getId());
                    $pde_recibo_item_cheque->setPdeReciboItemId($pde_recibo_item->getId());
                    $pde_recibo_item_cheque->setGralBancoId($arr['gral_banco_id']);
                    $pde_recibo_item_cheque->setDescripcion($arr['descripcion']);
                    $pde_recibo_item_cheque->setEntregador($arr['entregador']);
                    $pde_recibo_item_cheque->setFirmante($arr['firmante']);
                    $pde_recibo_item_cheque->setNumeroCheque($arr['numero_cheque']);
                    $pde_recibo_item_cheque->setFechaCobro($arr['fecha_cobro']);
                    $pde_recibo_item_cheque->setFechaEmision($arr['fecha_emision']);
                    $pde_recibo_item_cheque->setEstado(1);

                    $pde_recibo_item_cheque->save();

                    // -------------------------------------------------------------
                    // inicializa cheque
                    // -------------------------------------------------------------
                    $fnd_chq_cheque = FndChqCheque::inicializarFndChqChequeDesdePdeRecibo($cheque_id, $pde_recibo_item, $arr);
                }
            }
        }

        // --------------------------------------------------------------------
        // se vincula el proveedor al Recibo
        // --------------------------------------------------------------------        
        $persona_descripcion = $prv_proveedor->getDescripcion();

        $pde_recibo->setPrvProveedorId($prv_proveedor->getId());
        $pde_recibo->setRazonSocial($prv_proveedor->getRazonSocial());
        $pde_recibo->setDomicilioLegal($prv_proveedor->getDomicilioLegal());
        $pde_recibo->setCuit($prv_proveedor->getCuit());
        $pde_recibo->setGralCondicionIvaId($prv_proveedor->getGralCondicionIvaId());
        $pde_recibo->setGralTipoPersoneriaId($prv_proveedor->getGralTipoPersoneriaId());
        $pde_recibo->setPersonaDescripcion($persona_descripcion);

        // --------------------------------------------------------------------
        // se determina el tipo de Recibo
        // --------------------------------------------------------------------
        $pde_tipo_recibo = self::getDeterminacionTipoRecibo($prv_proveedor_id);
        $pde_recibo->setPdeTipoReciboId($pde_tipo_recibo->getId());
        $pde_recibo->save();

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $pde_recibo->setActualizarResumenComprobante();

        return $pde_recibo;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 03/11/2018 16:55 hs.
     * Metodo que genera un recibo item a partir de una orden de pago.
     * @return Obj PdeRecibo
     */
    static function setInicializarPdeReciboXPdeOrdenPago($pde_orden_pago_id, $pde_recibo_condicion_pago_id, $pde_recibo_tipo_pago_id, $txt_fecha, $txt_nro_punto_venta, $txt_nro_comprobante, $observacion = '') {

        // --------------------------------------------------------------------
        // se determina el origen del comprobante
        // --------------------------------------------------------------------
        $pde_tipo_origen_recibo = PdeTipoOrigenRecibo::getOxCodigo(PdeTipoOrigenRecibo::ORIGEN_ORDEN_PAGO);
        $pde_recibo_concepto = PdeReciboConcepto::getOxCodigo(PdeReciboConcepto::CONCEPTO_PAGO_FACTURA);

        $pde_orden_pago = PdeOrdenPago::getOxId($pde_orden_pago_id);
        $pde_orden_pago_gral_fp_forma_pagos = $pde_orden_pago->getPdeOrdenPagoGralFpFormaPagos();
        $pde_orden_pago_pde_facturas = $pde_orden_pago->getPdeOrdenPagoPdeFacturas();
        $pde_orden_pago_pde_nota_debitos = $pde_orden_pago->getPdeOrdenPagoPdeNotaDebitos();
        $pde_orden_pago_pde_tributos = $pde_orden_pago->getPdeOrdenPagoPdeTributos();

        $prv_proveedor = $pde_orden_pago->getPrvProveedor();
        $gral_empresa = $pde_orden_pago->getGralEmpresa();
        $pde_centro_pedido = $pde_orden_pago->getPdeCentroPedido();

        $pde_recibo = new PdeRecibo();

        $pde_recibo->setPdeReciboCondicionPagoId($pde_recibo_condicion_pago_id);
        $pde_recibo->setPdeReciboTipoPagoId($pde_recibo_tipo_pago_id);
        $pde_recibo->setPdeOrdenPagoId($pde_orden_pago->getId()); // se vincula recibo a orden de pago
        $pde_recibo->setPdeTipoOrigenReciboId($pde_tipo_origen_recibo->getId());
        $pde_recibo->setGralEmpresaId($gral_empresa->getId());
        $pde_recibo->setPdeCentroPedidoId($pde_centro_pedido->getId());
        $pde_recibo->setFechaEmision($txt_fecha);
        $pde_recibo->setNumeroPuntoVenta($txt_nro_punto_venta);
        $pde_recibo->setNumeroRecibo($txt_nro_comprobante);
        $pde_recibo->setNumeroReciboCompleto($pde_recibo->getNumeroReciboCompletoFormateado());
        $pde_recibo->setObservacion($observacion);
        $pde_recibo->setEstado(1);
        $pde_recibo->save();

        // --------------------------------------------------------------------
        // se setea el codigo del recibo
        // --------------------------------------------------------------------
        $pde_recibo->setCodigo(self::PREFIJO_RECIBO . str_pad($pde_recibo->getId(), 8, 0, STR_PAD_LEFT));
        $pde_recibo->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial del recibo
        // --------------------------------------------------------------------
        $pde_recibo_estado = $pde_recibo->setPdeReciboEstado(PdeReciboTipoEstado::TIPO_GENERADO, $observacion);
        $pde_recibo_estado = $pde_recibo->setPdeReciboEstado(PdeReciboTipoEstado::TIPO_PENDIENTE, $observacion = '');

        // --------------------------------------------------------------------
        // se agregan los items al recibo
        // --------------------------------------------------------------------
        if (!empty($pde_recibo->getId())) {

            foreach ($pde_orden_pago_gral_fp_forma_pagos as $pde_orden_pago_gral_fp_forma_pago) {

                $importe_afectado = $pde_orden_pago_gral_fp_forma_pago->getImporteAfectado();
                $descripcion = $pde_orden_pago_gral_fp_forma_pago->getDescripcion();
                $gral_fp_forma_pago = $pde_orden_pago_gral_fp_forma_pago->getGralFpFormaPago();

                // Cargo el detalle del Recibo
                $pde_recibo_item = new PdeReciboItem();

                $pde_recibo_item->setDescripcion($descripcion);
                $pde_recibo_item->setPdeReciboId($pde_recibo->getId());
                $pde_recibo_item->setGralFpFormaPagoId($gral_fp_forma_pago->getId());
                $pde_recibo_item->setPdeReciboConceptoId($pde_recibo_concepto->getId());
                $pde_recibo_item->setCantidad(1);

                $pde_recibo_item->setImporteUnitario($importe_afectado);
                $pde_recibo_item->setCodigo('');
                $pde_recibo_item->setObservacion('');
                $pde_recibo_item->setEstado(1);

                $pde_recibo_item->save();

                // --------------------------------------------------------------------
                // si la forma de pago es cheque, se pasan los datos del mismo
                // --------------------------------------------------------------------
                foreach ($pde_orden_pago_gral_fp_forma_pago->getPdeOrdenPagoGralFpFormaPagoCheques() as $pde_orden_pago_gral_fp_forma_pago_cheque) {
                    $pde_recibo_item_cheque = new PdeReciboItemCheque();
                    $pde_recibo_item_cheque->setPdeReciboId($pde_recibo->getId());
                    $pde_recibo_item_cheque->setPdeReciboItemId($pde_recibo_item->getId());
                    $pde_recibo_item_cheque->setDescripcion($pde_orden_pago_gral_fp_forma_pago_cheque->getDescripcion());
                    $pde_recibo_item_cheque->setGralBancoId($pde_orden_pago_gral_fp_forma_pago_cheque->getGralBancoId());
                    $pde_recibo_item_cheque->setNumeroCheque($pde_orden_pago_gral_fp_forma_pago_cheque->getNumeroCheque());
                    $pde_recibo_item_cheque->setFechaEmision($pde_orden_pago_gral_fp_forma_pago_cheque->getFechaEmision());
                    $pde_recibo_item_cheque->setFechaCobro($pde_orden_pago_gral_fp_forma_pago_cheque->getFechaCobro());
                    $pde_recibo_item_cheque->setFirmante($pde_orden_pago_gral_fp_forma_pago_cheque->getFirmante());
                    $pde_recibo_item_cheque->setEntregador($pde_orden_pago_gral_fp_forma_pago_cheque->getEntregador());
                    $pde_recibo_item_cheque->setObservacion($pde_orden_pago_gral_fp_forma_pago_cheque->getObservacion());
                    $pde_recibo_item_cheque->setEstado($pde_orden_pago_gral_fp_forma_pago_cheque->getEstado());
                    $pde_recibo_item_cheque->save();
                }
            }
        }

        // --------------------------------------------------------------------
        // se agregan los tributos al recibo
        // --------------------------------------------------------------------
        if (!empty($pde_recibo->getId())) {

            foreach ($pde_orden_pago_pde_tributos as $pde_orden_pago_pde_tributo) {

                // se registra el tributo vinculado al recibo
                $pde_recibo_pde_tributo = new PdeReciboPdeTributo();

                $pde_recibo_pde_tributo->setDescripcion($pde_orden_pago_pde_tributo->getDescripcion());
                $pde_recibo_pde_tributo->setPdeReciboId($pde_recibo->getId());
                $pde_recibo_pde_tributo->setPdeTributoId($pde_orden_pago_pde_tributo->getPdeTributoId());
                $pde_recibo_pde_tributo->setImporteImponible($pde_orden_pago_pde_tributo->getImporteImponible());
                $pde_recibo_pde_tributo->setImporteTributo($pde_orden_pago_pde_tributo->getImporteTributo());
                $pde_recibo_pde_tributo->setAlicuotaPorcentual($pde_orden_pago_pde_tributo->getAlicuotaPorcentual());
                $pde_recibo_pde_tributo->setAlicuotaDecimal($pde_orden_pago_pde_tributo->getAlicuotaDecimal());
                $pde_recibo_pde_tributo->setEstado(1);

                $pde_recibo_pde_tributo->save();
            }
        }

        // --------------------------------------------------------------------
        // se vincula el proveedor al Recibo
        // --------------------------------------------------------------------        
        $persona_descripcion = $prv_proveedor->getDescripcion();

        $pde_recibo->setPrvProveedorId($prv_proveedor->getId());
        $pde_recibo->setRazonSocial($prv_proveedor->getRazonSocial());
        $pde_recibo->setDomicilioLegal($prv_proveedor->getDomicilioLegal());
        $pde_recibo->setCuit($prv_proveedor->getCuit());
        $pde_recibo->setGralCondicionIvaId($prv_proveedor->getGralCondicionIvaId());
        $pde_recibo->setGralTipoPersoneriaId($prv_proveedor->getGralTipoPersoneriaId());
        $pde_recibo->setPersonaDescripcion($persona_descripcion);

        // --------------------------------------------------------------------
        // se determina el tipo de Recibo
        // --------------------------------------------------------------------
        $pde_tipo_recibo = self::getDeterminacionTipoRecibo($prv_proveedor->getId());
        $pde_recibo->setPdeTipoReciboId($pde_tipo_recibo->getId());
        $pde_recibo->save();

        // --------------------------------------------------------------------
        // se vincula el recibo a facturas
        // --------------------------------------------------------------------        
        foreach ($pde_orden_pago_pde_facturas as $pde_orden_pago_pde_factura) {
            $pde_factura_pde_recibo = new PdeFacturaPdeRecibo();
            $pde_factura_pde_recibo->setPdeReciboId($pde_recibo->getId());
            $pde_factura_pde_recibo->setPdeFacturaId($pde_orden_pago_pde_factura->getPdeFacturaId());
            $pde_factura_pde_recibo->setImporteAfectado($pde_orden_pago_pde_factura->getImporteAfectado());
            $pde_factura_pde_recibo->setEstado(1);
            $pde_factura_pde_recibo->save();
        }

        // --------------------------------------------------------------------
        // se vincula el recibo a notas de debito
        // --------------------------------------------------------------------        
        foreach ($pde_orden_pago_pde_nota_debitos as $pde_orden_pago_pde_nota_debito) {
            $pde_nota_debito_pde_recibo = new PdeNotaDebitoPdeRecibo();
            $pde_nota_debito_pde_recibo->setPdeReciboId($pde_recibo->getId());
            $pde_nota_debito_pde_recibo->setPdeNotaDebitoId($pde_orden_pago_pde_nota_debito->getPdeNotaDebitoId());
            $pde_nota_debito_pde_recibo->setImporteAfectado($pde_orden_pago_pde_nota_debito->getImporteAfectado());
            $pde_nota_debito_pde_recibo->setEstado(1);
            $pde_nota_debito_pde_recibo->save();
        }

        // --------------------------------------------------------------------
        // se redefine el estado actual del recibo segun conciliacion
        // --------------------------------------------------------------------
        $pde_recibo->setRecalcularEstado();

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $pde_recibo->setActualizarResumenComprobante();

        return $pde_recibo;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 24/09/2018 18:15 hs.
     * Metodo que modifica los datos basicos del comprobante
     * @return Obj PdeFactura
     */
    public function setModificarDatosComprobante($pde_tipo_recibo_id, $prv_proveedor_id, $pde_recibo_condicion_pago_id, $pde_recibo_tipo_pago_id, $txt_fecha, $txt_nro_punto_venta, $txt_nro_comprobante, $txa_observacion) {
        $prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

        $this->setPdeTipoReciboId($pde_tipo_recibo_id);
        $this->setPrvProveedorId($prv_proveedor_id);
        $this->setPdeReciboCondicionPagoId($pde_recibo_condicion_pago_id);
        $this->setPdeReciboTipoPagoId($pde_recibo_tipo_pago_id);
        $this->setFechaEmision($txt_fecha);
        $this->setNumeroPuntoVenta($txt_nro_punto_venta);
        $this->setNumeroRecibo($txt_nro_comprobante);
        $this->setNumeroReciboCompleto($this->getNumeroReciboCompletoFormateado());
        $this->setObservacion($txa_observacion);

        if ($prv_proveedor) {
            $this->setRazonSocial($prv_proveedor->getRazonSocial());
            $this->setDomicilioLegal($prv_proveedor->getDomicilioLegal());
            $this->setCuit($prv_proveedor->getCuit());
            $this->setGralCondicionIvaId($prv_proveedor->getGralCondicionIvaId());
            $this->setGralTipoPersoneriaId($prv_proveedor->getGralTipoPersoneriaId());

            $this->setPersonaDescripcion($prv_proveedor->getRazonSocial());
        }
        $this->save();
    }

    /**
     * Metodo que retorna el numero completo del comprobante
     * @return string
     */
    public function getNumeroReciboCompletoFormateado() {
        $numero_punto_venta = str_pad($this->getNumeroPuntoVenta(), DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA, 0, STR_PAD_LEFT);
        $numero_recibo = str_pad($this->getNumeroRecibo(), DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);

        $numero_recibo_completo = $numero_punto_venta . '-' . $numero_recibo;
        return $numero_recibo_completo;
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
     * @return Obj PdeReciboEstado
     */
    public function setPdeReciboEstado($codigo, $observacion = '') {
        $inicial = 1;
        $pde_recibo_estado = false;

        // se agrega el nuevo estado del factura
        $pde_recibo_tipo_estado = PdeReciboTipoEstado::getOxCodigo($codigo);

        if ($pde_recibo_tipo_estado) {
            foreach ($this->getPdeReciboEstados() as $pde_recibo_estado) {
                $pde_recibo_estado->setActual(0);
                $pde_recibo_estado->save();
                $inicial = 0;
            }


            $pde_recibo_estado = new PdeReciboEstado();
            $pde_recibo_estado->setPdeReciboId($this->getId());
            $pde_recibo_estado->setPdeReciboTipoEstadoId($pde_recibo_tipo_estado->getId());
            $pde_recibo_estado->setInicial($inicial);
            $pde_recibo_estado->setActual(1);
            $pde_recibo_estado->setObservacion($observacion);
            $pde_recibo_estado->save();

            // actualizamos el estado en pde_recibo      
            $this->setPdeReciboTipoEstadoId($pde_recibo_tipo_estado->getId());
            $this->save();
        }

        return $pde_recibo_estado;
    }

    /**
     * Registro de los movimientos contables de la operacion
     */
    public function setRegistrarContabilidad($cntb_periodo = false) {
        if ((int) $this->getCntbDiarioAsientoId() > 0) {
            return;
        }

        $pde_recibo_tipo_estado = $this->getPdeReciboTipoEstado();

        if ($pde_recibo_tipo_estado->getContabilizable()) {
            $prv_proveedor = $this->getPrvProveedor();
            $gral_empresa = $this->getGralEmpresa();
            $cntb_ejercicio = CntbEjercicio::getCntbEjercicioActual($gral_empresa);
            $cntb_tipo_asiento = CntbTipoAsiento::getOxCodigo(CntbTipoAsiento::TIPO_OPERATIVO);
            $cntb_tipo_origen = CntbTipoOrigen::getOxCodigo(CntbTipoOrigen::TIPO_AUTOMATICO);
            $cntb_tipo_movimiento = CntbTipoMovimiento::getOxCodigo(CntbTipoMovimiento::TIPO_COMPRAS);
            $descripcion = 'Asiento de PdeRecibo ' . $this->getId();

            $array_cuentas_debe = array();
            $array_cuentas_haber = array();

            $pde_tipo_origen_recibo = $this->getPdeTipoOrigenRecibo();
            $gral_actividad = $this->getGralActividad();
            //$gral_tipo_documento    = $this->getGralTipoDocumento();
            $gral_condicion_iva = $this->getGralCondicionIva();
            $gral_fp_forma_pago = $this->getGralFpFormaPago();
            $cntb_cuenta_compra_debe = $gral_fp_forma_pago->getCntbCuentaCompraObj();

            $importe_iva = $this->getPdeReciboIva();
            $importe_tributo = $this->getPdeReciboTributo();
            //$importe_subtotal = $this->getVtaFacturaSubtotal();
            $importe_total = $this->getPdeReciboTotal();

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
            $cntb_diario_asiento_pde_recibo = new CntbDiarioAsientoPdeRecibo();
            $cntb_diario_asiento_pde_recibo->setCntbDiarioAsientoId($cntb_diario_asiento->getId());
            $cntb_diario_asiento_pde_recibo->setPdeReciboId($this->getId());
            $cntb_diario_asiento_pde_recibo->save();

            $pde_tipo_factura = $this->getPdeTipoFactura();
            $gral_condicion_iva = $this->getGralCondicionIva();
            //$gral_tipo_documento = $this->getGralTipoDocumento();
            //
            // --------------------------------------------------------------------------
            // si fueron ovs
            // --------------------------------------------------------------------------
            /* $vta_orden_ventas = $this->getVtaOrdenVentaXVtaReciboVtaOrdenVenta();
              if (count($vta_orden_ventas) > 0)
              {
              $cantidad_items = count($vta_orden_ventas) . " OVs";
              } */

            // --------------------------------------------------------------------------
            // si fueron items
            // --------------------------------------------------------------------------
            $pde_recibo_items = $this->getPdeReciboItems();
            if (count($pde_recibo_items) > 0) {
                $cantidad_items = count($pde_recibo_items) . " Items";
            }

            $descripcion = $pde_tipo_factura->getDescripcion() . " " . $this->getNumeroComprobanteCompleto();
            $observacion = "Emitido por " . $gral_condicion_iva->getDescripcion() . " " . $this->getPersonaDescripcion() . " CUIT " . $this->getCuit() . " por " . $cantidad_items;

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
    public function getPdeReciboCantidadItems() {
        $pde_recibo_items = $this->getPdeReciboItems(null, null, true);
        $cantidad_items = count($pde_recibo_items);

        return $cantidad_items;
    }

    /**
     * Metodo que retorna el tipo de recibo que tiene un proveedor.
     * @param type $prv_proveedor_id
     * @return type PdeTipoRecibo
     */
    static function getDeterminacionTipoRecibo($prv_proveedor_id) {
        $pde_tipo_recibo = PdeTipoRecibo::getOxCodigo('RECIBO_X');

        $prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

        if ($prv_proveedor) {
            $gral_condicion_iva_id = $prv_proveedor->getGralCondicionIvaId();

            $gral_condicion_iva_pde_tipo_recibos = GralCondicionIvaPdeTipoRecibo::getOsxGralCondicionIvaId($gral_condicion_iva_id);
            foreach ($gral_condicion_iva_pde_tipo_recibos as $gral_condicion_iva_pde_tipo_recibo) {
                $pde_tipo_recibo = $gral_condicion_iva_pde_tipo_recibo->getPdeTipoRecibo();
                return $pde_tipo_recibo;
            }
        }
        return $pde_tipo_recibo;
    }

    /**
     * Metodo que retorna el iva de los items de la NC.
     * @return type float
     */
    public function getArrIvaParaAfipPdeReciboItem() {

        $arr = array();

        $pde_recibo_items = $this->getPdeReciboItems(null, null, true);

        foreach ($pde_recibo_items as $pde_recibo_item) {
            $gral_tipo_iva = $pde_recibo_item->getGralTipoIva();
            $ws_fe_param_tipo_iva = $gral_tipo_iva->getWsFeParamTipoIvaXGralTipoIvaWsFeParamTipoIva();

            $importe_total = round($pde_recibo_item->getImporteTotal(), 2);
            $importe_iva = round($pde_recibo_item->getImporteIva(), 2);

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
            'pde_recibo_id' => $this->getId(),
            'observacion' => $txa_observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_pde_recibo.php";
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

        $pde_recibo_enviado = $this->inicializarPdeReciboEnviado($txa_observacion, $destinatarios, $mail_asunto, $msg, $strContenidoPdf);

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
                $pde_recibo_enviado->setConfirmarPdeReciboEnviado(1, PdeReciboEnviado::RECIBO_ENVIADO_CORRECTAMENTE);
            } else {
                $pde_recibo_enviado->setConfirmarPdeReciboEnviado(0, $mail->ErrorInfo);
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
     * @return PdeReciboEnviado
     */
    public function inicializarPdeReciboEnviado($observacion, $destinatarios, $mail_asunto, $mail_contenido, $archivo_adjunto) {
        $pde_recibo_enviado = new PdeReciboEnviado();
        $pde_recibo_enviado->setDescripcion('');
        $pde_recibo_enviado->setPdeReciboId($this->getId());
        $pde_recibo_enviado->setAsunto($mail_asunto);
        $pde_recibo_enviado->setDestinatario($destinatarios);

        $pde_recibo_enviado->setCuerpo(addslashes($mail_contenido));
        $pde_recibo_enviado->setAdjunto(base64_encode($archivo_adjunto));

        $pde_recibo_enviado->setCodigoEnvio(0);
        $pde_recibo_enviado->setObservacion($observacion);
        $pde_recibo_enviado->setEstado(0);

        $pde_recibo_enviado->save();

        return $pde_recibo_enviado;
    }

    public function getNombreArchivoAdjuntoRecibo() {
        return Gral::getConfig('gral_cliente') . ' - Recibo #' . $this->getCodigo() . '.pdf';
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 03/05/2018 11:00 hs.
     * Metodo que retorna el numero de comprobante formato "pto pde - num comp afip".
     * @return String
     */
    public function getNumeroComprobanteCompleto() {
        return $this->getNumeroPuntoVenta() . '-' . $this->getNumeroRecibo();
        return $this->getCodigo();
    }

    /**
     * Metodo que retorna el numero de comprobante formato "siglas - letra - pto-vta - num-comp-afip". 
     * @creado_por Esteban Martinez
     * @creado 10/02/2019
     * @return String
     */
    public function getNumeroComprobanteCompletoFull() {
        $numero_punto_venta = $this->getNumeroPuntoVenta();
        $siglas_tipo_comprobante = $this->getTipoComprobanteSiglas();
        $numero_comprobante = $this->getNumeroRecibo();
        $letra_tipo_comprobante = $this->getPdeTipoRecibo()->getCodigoMin();

        return $siglas_tipo_comprobante . ' ' . $letra_tipo_comprobante . ' ' . str_pad($numero_punto_venta, DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA, 0, STR_PAD_LEFT) . '-' . str_pad($numero_comprobante, DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que se utiliza en la pantalla de conciliacion de comprobantes.
     * Modulo pde_comprobante_gestion.
     * @return String
     */
    public function getTipoComprobante() {
        return $this->getPdeTipoRecibo()->getDescripcion();
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 28/07/2018 15:13 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna el tipo de comprobante si existe.
     * @return String
     */
    public function getTipoComprobanteMin() {
        return $this->getPdeTipoRecibo()->getCodigoMin();
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que se utiliza en la pantalla de conciliacion de comprobantes.
     * Modulo pde_comprobante_gestion.
     * @return String
     */
    public function getTipoEstadoComprobante() {
        return $this->getPdeReciboTipoEstado()->getDescripcion();
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 01/07/2020 18:32 hs.
     * Metodo generico que devuelve el origen del comprobante
     * @return String
     */
    public function getPdeTipoOrigenComprobanteDescripcion() {
        $descripcion = $this->getPdeTipoOrigenRecibo()->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 01/07/2020 18:32 hs.
     * Metodo generico que devuelve el tipo de comprobante
     * @return String
     */
    public function getPdeTipoComprobanteDescripcion() {
        $descripcion = $this->getPdeTipoRecibo()->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que se utiliza en la pantalla de conciliacion de comprobantes.
     * Modulo pde_comprobante_gestion.
     * @todo Falta terminar el metodo con las clases de AFIP o terminar de definir el concepto de Recibos.
     * @return String
     */
    public function getImporteTotalComprobante() {
        $pde_recibo_importe_total = 0;

        // Importes de la generacion del Recibo a travez de los items
        $pde_recibo_item_subtotal = $this->getPdeReciboItemSubtotal();
        $pde_recibo_item_iva = $this->getPdeReciboItemIva();
        $pde_recibo_item_pde_tributo = $this->getPdeReciboItemImporteTributo();

        $pde_recibo_importe_total = $pde_recibo_item_subtotal + $pde_recibo_item_iva + $pde_recibo_item_pde_tributo;

        return $pde_recibo_importe_total;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/08/2018 22:13 hs.
     * Metodo que retorna el importe total del DEBE del comprobante
     * @return Double
     */
    public function getImporteTotalComprobanteDebe() {
        $importe_total_debe = $this->getImporteTotalComprobante();
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
     * Metodo que retorna el iva de los items del Recibo.
     * @return type float
     */
    public function getPdeReciboItemIva() {
        $iva = 0;
        $pde_recibo_items = $this->getPdeReciboItems(null, null, true);

        foreach ($pde_recibo_items as $pde_recibo_item) {
            $gral_tipo_iva = $pde_recibo_item->getGralTipoIva();
            $valor_iva_coeficiente = $gral_tipo_iva->getValorIva() / 100;

            $importe_unitario = round($pde_recibo_item->getImporteUnitario(), 2);
            $cantidad = $pde_recibo_item->getCantidad();
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
    public function getPdeReciboItemImporteTributo() {
        $importe_tributo = 0;
        $pde_recibo_pde_tributos = $this->getPdeReciboPdeTributos(null, null, true);

        foreach ($pde_recibo_pde_tributos as $pde_recibo_pde_tributo) {
            $importe_tributo += round($pde_recibo_pde_tributo->getImporteTributo(), 2);
        }

        return $importe_tributo;
    }

    /**
     * Metodo que retorna el subtotal de los items del recibo sin iva.
     * @return type float
     */
    public function getPdeReciboItemSubtotal() {
        $pde_recibo_items = $this->getPdeReciboItems(null, null, true);

        foreach ($pde_recibo_items as $pde_recibo_item) {
            $importe_unitario = round($pde_recibo_item->getImporteUnitario(), 2);
            $cantidad = $pde_recibo_item->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }
        return $subtotal;
    }

    /**
     * Metodo que retorna el subtotal de los items del recibo sin iva.
     * @return type float
     */
    public function getPdeReciboSubtotal() {
        $pde_recibo_items = $this->getPdeReciboItems(null, null, true);

        foreach ($pde_recibo_items as $pde_recibo_item) {
            $importe_unitario = round($pde_recibo_item->getImporteUnitario(), 2);
            $cantidad = $pde_recibo_item->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }
        return $subtotal;
    }

    public function getPdeReciboSubtotalParaComprobante() {
        $pde_tipo_recibo = $this->getPdeTipoRecibo();

        switch ($pde_tipo_recibo->getCodigo()) {
            case PdeTipoRecibo::TIPO_RECIBO_A:
                $importe = $this->getPdeReciboSubtotal();
                break;
            case PdeTipoRecibo::TIPO_RECIBO_B:
                $importe = $this->getPdeReciboSubtotal() + $this->getPdeReciboIva();
                break;
            default:
                $importe = $this->getPdeReciboSubtotal() + $this->getPdeReciboIva();
        }

        return $importe;
    }

    /**
     * Metodo que retorna el iva de los items del Recibo.
     * @return type float
     */
    public function getPdeReciboIva() {
        $iva = 0;
        $pde_recibo_items = $this->getPdeReciboItems(null, null, true);

        foreach ($pde_recibo_items as $pde_recibo_item) {
            $gral_tipo_iva = $pde_recibo_item->getGralTipoIva();
            $valor_iva_coeficiente = $gral_tipo_iva->getValorIva() / 100;

            $importe_unitario = round($pde_recibo_item->getImporteUnitario(), 2);
            $cantidad = $pde_recibo_item->getCantidad();
            $iva += $importe_unitario * $cantidad * $valor_iva_coeficiente;
        }
        return round($iva, 2);
    }

    /**
     * Metodo que retorna el valor de los tributos de la factura.
     * @return type float
     */
    public function getArrPdeTributosAplicados() {
        $pde_recibo_pde_tributos = $this->getPdeReciboPdeTributos(null, null, true);

        foreach ($pde_recibo_pde_tributos as $pde_recibo_pde_tributo) {
            $pde_tributo = $pde_recibo_pde_tributo->getPdeTributo();
            $importe_total_tributo = $pde_recibo_pde_tributo->getImporteTributo();

            $arr_tributos[$pde_tributo->getId()] = array(
                'pde_tributo_id' => $pde_tributo->getId(),
                'pde_tributo_descripcion' => $pde_tributo->getDescripcion(),
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
    public function getPdeReciboTributo() {
        $importe_tributo = 0;
        $pde_recibo_pde_tributos = $this->getPdeReciboPdeTributos(null, null, true);

        foreach ($pde_recibo_pde_tributos as $pde_recibo_pde_tributo) {
            $importe_tributo += round($pde_recibo_pde_tributo->getImporteTributo(), 2);
        }

        return $importe_tributo;
    }

    /**
     * Metodo que retorna el total del recibo con iva y tributos.
     * @return type float
     */
    public function getPdeReciboTotal() {
        $total = $this->getPdeReciboSubtotal() + $this->getPdeReciboIva() + $this->getPdeReciboTributo();
        return $total;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que retorna una coleccion de Recibos para imputar en las ND y Facturas.
     * @return PdeRecibos
     */
    static function getPdeRecibosImputables($prv_proveedor_id, $gral_empresa_id) {
        $criterio = new Criterio(PdeRecibo::SES_CRITERIOS);
        $criterio->setAmbiguo(false);
        $criterio->addDistinct(true);

        $criterio->addInicioSubconsulta();
        $criterio->add('', 'true', '', false, "");

        $criterio->add(PdeRecibo::GEN_ATTR_PRV_PROVEEDOR_ID, $prv_proveedor_id, Criterio::IGUAL);
        $criterio->add(PdeRecibo::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
        $criterio->addFinSubconsulta();

        //----------------------------------------------
        // Aca va un inicio de subconsulta con el fin y despues los join
        //----------------------------------------------
        $criterio->addInicioSubconsulta();
        //$criterio->add('', 'true', '', false, "");
//        $criterio->add(PdeReciboTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $criterio->add(PdeReciboTipoEstado::GEN_ATTR_IMPUTABLE, 1, Criterio::IGUAL);
//        $criterio->add(PdeReciboTipoEstado::GEN_ATTR_TERMINAL, 0, Criterio::IGUAL);

        $criterio->addRealJoin(PdeReciboTipoEstado::GEN_TABLA, PdeReciboTipoEstado::GEN_ATTR_ID, PdeRecibo::GEN_ATTR_PDE_RECIBO_TIPO_ESTADO_ID, 'LEFT JOIN');
        $criterio->addFinSubconsulta();

        $criterio->addTabla(PdeRecibo::GEN_TABLA);
        $criterio->setCriterios();

        $pde_recibos = PdeRecibo::getPdeRecibos(null, $criterio, true);

        return $pde_recibos;
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
        $pde_factura_pde_recibos = $this->getPdeFacturaPdeRecibos(null, null, true);
        foreach ($pde_factura_pde_recibos as $pde_factura_pde_recibo) {
            $importe_total_comprobante_afectado += $pde_factura_pde_recibo->getImporteAfectado();
        }

        // Busco el importe total ya imputado con Notas de Debitos
        $pde_nota_debito_pde_recibos = $this->getPdeNotaDebitoPdeRecibos(null, null, true);
        foreach ($pde_nota_debito_pde_recibos as $pde_nota_debito_pde_recibo) {
            $importe_total_comprobante_afectado += $pde_nota_debito_pde_recibo->getImporteAfectado();
        }

        $importe_total_comprobante = round($importe_total_comprobante, 2);
        $importe_total_comprobante_afectado = round($importe_total_comprobante_afectado, 2);

        $importe_total_comprobante_disponible = $importe_total_comprobante - $importe_total_comprobante_afectado;
        return $importe_total_comprobante_disponible;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 15/05/2018 11:00 hs.
     * Metodo utilizado en la imputacion de comprobantes.
     * @return 
     */
    public function setImputarPdeComprobante_OLD($pde_nota_debito_ids = null, $pde_factura_ids = null) {
        // Importe a imputar
        $pde_recibo_importe_total_a_imputar = $this->getSaldoImputable();

        // Agrupo todos los comprobantes para poder ordenarlos por fecha de emision
        foreach ($pde_factura_ids as $pde_factura_id) {
            $pde_fatura = PdeFactura::getOxId($pde_factura_id);
            $pde_comprobantes[] = $pde_fatura;
        }
        foreach ($pde_nota_debito_ids as $pde_nota_debito_id) {
            $pde_nota_debito = PdeNotaDebito::getOxId($pde_nota_debito_id);
            $pde_comprobantes[] = $pde_nota_debito;
        }

        // Ordeno los comprobantes
        usort($pde_comprobantes, array($this, 'self::getOrdenarColeccionComprobantes'));

        $pde_recibo_importe_a_imputar = $pde_recibo_importe_total_a_imputar;
        // Genero el vinculo con el comprobante correspondiente
        foreach ($pde_comprobantes as $pde_comprobante) {

            if ((int) ($pde_recibo_importe_a_imputar * 100) > 0) {
                $clase = get_class($pde_comprobante);

                if ($clase == 'PdeNotaDebito') {
                    $pde_nota_debito = PdeNotaDebito::getOxId($pde_comprobante->getId());
                    $pde_nota_debito_importe_disponible = $pde_nota_debito->getSaldoImputable();

                    // Genero la relacion
                    $pde_nota_debito_pde_recibo = new PdeNotaDebitoPdeRecibo();

                    $pde_nota_debito_pde_recibo->setPdeReciboId($this->getId());
                    $pde_nota_debito_pde_recibo->setPdeNotaDebitoId($pde_nota_debito->getId());
                    $pde_nota_debito_pde_recibo->setEstado(1);

                    // Monto de la factura mayor o igual al de la NC
                    if ((int) ($pde_recibo_importe_a_imputar * 100) < (int) ($pde_nota_debito_importe_disponible * 100)) {

                        $pde_nota_debito_pde_recibo->setImporteAfectado($pde_recibo_importe_a_imputar);
                        // Cambio el estado de la NC
                        $pde_nota_debito->setPdeNotaDebitoEstado(PdeNotaDebitoTipoEstado::TIPO_SALDADO_PARCIAL, '');
//                        $pde_recibo_importe_a_imputar = 0;
                    } else {
                        $pde_nota_debito_pde_recibo->setImporteAfectado($pde_nota_debito_importe_disponible);

                        // Cambio el estado de la NC
                        $pde_nota_debito->setPdeNotaDebitoEstado(PdeNotaDebitoTipoEstado::TIPO_SALDADO, '');
//                        $pde_recibo_importe_a_imputar -= $pde_nota_debito_importe_disponible;
                    }
                    $pde_recibo_importe_a_imputar -= $pde_nota_debito_importe_disponible;
                    $pde_nota_debito_pde_recibo->save();
                } elseif ($clase == 'PdeFactura') {
                    $pde_factura = PdeFactura::getOxId($pde_comprobante->getId());

                    $pde_factura_importe_disponible = $pde_factura->getSaldoImputable();

                    // Genero la relacion
                    $pde_factura_pde_recibo = new PdeFacturaPdeRecibo();

                    $pde_factura_pde_recibo->setPdeFacturaId($pde_factura->getId());
                    $pde_factura_pde_recibo->setPdeReciboId($this->getId());
                    $pde_factura_pde_recibo->setEstado(1);

                    // Monto del Recibo mayor o igual al de la factura
                    if ((int) ($pde_recibo_importe_a_imputar * 100) < (int) ($pde_factura_importe_disponible * 100)) {

                        $pde_factura_pde_recibo->setImporteAfectado($pde_recibo_importe_a_imputar);
                        // Cambio el estado de la Factura
                        $pde_factura_tipo_estado = $pde_factura->setPdeFacturaEstado(PdeFacturaTipoEstado::TIPO_SALDADO_PARCIAL, '');
//                        $pde_recibo_importe_a_imputar = 0;
                    } else {
                        $pde_factura_pde_recibo->setImporteAfectado($pde_factura_importe_disponible);

                        // Cambio el estado del Recibo
                        $pde_factura_tipo_estado = $pde_factura->setPdeFacturaEstado(PdeFacturaTipoEstado::TIPO_SALDADO, '');
//                        $pde_recibo_importe_a_imputar -= $pde_factura_importe_disponible;
                    }
                    $pde_recibo_importe_a_imputar -= $pde_factura_importe_disponible;
                    $pde_factura_pde_recibo->save();
                }

                // Cambio el estado de la Factura
                if ((int) ($pde_recibo_importe_a_imputar * 100) > 0) {
                    $this->setPdeReciboEstado(PdeReciboTipoEstado::TIPO_IMPUTADO_PARCIAL, '');
                } else {
                    $this->setPdeReciboEstado(PdeReciboTipoEstado::TIPO_IMPUTADO, '');
                }
            }
        }

        return $this;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 03/11/2018 17:06 hs.
     * Metodo utilizado en la imputacion de comprobantes.
     * @return 
     */
    public function setImputarPdeComprobante($pde_nota_debito_ids = null, $pde_factura_ids = null) {
        // Importe a imputar
        $pde_recibo_importe_total_a_imputar = $this->getSaldoImputable();

        // Agrupo todos los comprobantes para poder ordenarlos por fecha de emision
        foreach ($pde_factura_ids as $pde_factura_id) {
            $pde_fatura = PdeFactura::getOxId($pde_factura_id);
            $pde_comprobantes[] = $pde_fatura;
        }
        foreach ($pde_nota_debito_ids as $pde_nota_debito_id) {
            $pde_nota_debito = PdeNotaDebito::getOxId($pde_nota_debito_id);
            $pde_comprobantes[] = $pde_nota_debito;
        }

        // Ordeno los comprobantes
        usort($pde_comprobantes, array($this, 'self::getOrdenarColeccionComprobantes'));

        $pde_recibo_importe_a_imputar = $pde_recibo_importe_total_a_imputar;
        // Genero el vinculo con el comprobante correspondiente
        foreach ($pde_comprobantes as $pde_comprobante) {

            if ((int) ($pde_recibo_importe_a_imputar * 100) > 0) {
                $clase = get_class($pde_comprobante);

                if ($clase == 'PdeNotaDebito') {
                    $pde_nota_debito = PdeNotaDebito::getOxId($pde_comprobante->getId());
                    $pde_nota_debito_importe_disponible = $pde_nota_debito->getSaldoImputable();

                    // Genero la relacion
                    $pde_nota_debito_pde_recibo = new PdeNotaDebitoPdeRecibo();
                    $pde_nota_debito_pde_recibo->setPdeReciboId($this->getId());
                    $pde_nota_debito_pde_recibo->setPdeNotaDebitoId($pde_nota_debito->getId());

                    // Monto de la factura mayor o igual al de la NC
                    if ((int) ($pde_recibo_importe_a_imputar * 100) < (int) ($pde_nota_debito_importe_disponible * 100)) {
                        $pde_nota_debito_pde_recibo->setImporteAfectado($pde_recibo_importe_a_imputar);
                    } else {
                        $pde_nota_debito_pde_recibo->setImporteAfectado($pde_nota_debito_importe_disponible);
                    }
                    $pde_nota_debito_pde_recibo->setEstado(1);
                    $pde_nota_debito_pde_recibo->save();

                    // se consume importe a imputar
                    $pde_recibo_importe_a_imputar -= $pde_nota_debito_importe_disponible;
                } elseif ($clase == 'PdeFactura') {
                    $pde_factura = PdeFactura::getOxId($pde_comprobante->getId());

                    $pde_factura_importe_disponible = $pde_factura->getSaldoImputable();

                    // Genero la relacion
                    $pde_factura_pde_recibo = new PdeFacturaPdeRecibo();
                    $pde_factura_pde_recibo->setPdeFacturaId($pde_factura->getId());
                    $pde_factura_pde_recibo->setPdeReciboId($this->getId());

                    // Monto del Recibo mayor o igual al de la factura
                    if ((int) ($pde_recibo_importe_a_imputar * 100) < (int) ($pde_factura_importe_disponible * 100)) {
                        $pde_factura_pde_recibo->setImporteAfectado($pde_recibo_importe_a_imputar);
                    } else {
                        $pde_factura_pde_recibo->setImporteAfectado($pde_factura_importe_disponible);
                    }
                    $pde_factura_pde_recibo->setEstado(1);
                    $pde_factura_pde_recibo->save();

                    // se consume importe a imputar
                    $pde_recibo_importe_a_imputar -= $pde_factura_importe_disponible;
                }
            }
        }

        // ---------------------------------------------------------------------
        // se recalcula estado de los comprobantes vinculados
        // ---------------------------------------------------------------------        
        $this->setRecalcularEstado($recursivo = true);

        return $this;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 03/11/2018 17:06 hs.
     * Metodo que redefine el estado del comprobante de acuerdo a sus conciliaciones actuales
     * @return Obj PdeReciboEstado
     */
    public function setRecalcularEstado($recursivo = false) {

        // Importe imputable del comprobante
        $importe_comprobante_total = $this->getImporteTotalComprobante();

        $importe_comprobante_saldo = $importe_comprobante_total;

        $pde_factura_pde_recibos = $this->getPdeFacturaPdeRecibos(null, null, true);
        $pde_nota_debito_pde_recibos = $this->getPdeNotaDebitoPdeRecibos(null, null, true);

        // ---------------------------------------------------------------------
        // se recorren las facturas vinculadas
        // ---------------------------------------------------------------------
        foreach ($pde_factura_pde_recibos as $pde_factura_pde_recibo) {
            $importe_afectado = $pde_factura_pde_recibo->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $pde_factura_pde_recibo->getPdeFactura()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren las notas de debito vinculadas
        // ---------------------------------------------------------------------
        foreach ($pde_nota_debito_pde_recibos as $pde_nota_debito_pde_recibo) {
            $importe_afectado = $pde_nota_debito_pde_recibo->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $pde_nota_debito_pde_recibo->getPdeNotaDebito()->setRecalcularEstado(false);
            }
        }

        if ((abs($importe_comprobante_saldo) >= 0) && (abs($importe_comprobante_saldo) <= 0.1)) {
            // -----------------------------------------------------------------
            // si tiene saldo cero el comprobante fue usado en su totalidad
            // -----------------------------------------------------------------
            $pde_recibo_estado = $this->setPdeReciboEstado(PdeReciboTipoEstado::TIPO_IMPUTADO, '');
        } elseif ($importe_comprobante_saldo > 0.1 && $importe_comprobante_saldo != $importe_comprobante_total) {
            // -----------------------------------------------------------------
            // si tiene saldo mayor a cero el comprobante fue usado parcialmente
            // -----------------------------------------------------------------
            $pde_recibo_estado = $this->setPdeReciboEstado(PdeReciboTipoEstado::TIPO_IMPUTADO_PARCIAL, '');
        } elseif ($importe_comprobante_saldo == $importe_comprobante_total) {
            // -----------------------------------------------------------------
            // si tiene saldo igual al total se encuentra pendiente de pago
            // -----------------------------------------------------------------
            $pde_recibo_estado = $this->setPdeReciboEstado(PdeReciboTipoEstado::TIPO_PENDIENTE, '');
        }

        return $pde_recibo_estado;
    }

    static function getOrdenarColeccionComprobantes($pde_comprobante, $pde_comprobante_comparacion) {
        $fecha_emision = strtotime(date($pde_comprobante->getFechaEmision()));
        $fecha_emision_comparacion = strtotime(date($pde_comprobante_comparacion->getFechaEmision()));

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

        $pde_factura_pde_recibos = $this->getPdeFacturaPdeRecibos(null, null, true);
        $pde_nota_debito_pde_recibos = $this->getPdeNotaDebitoPdeRecibos(null, null, true);

        // ---------------------------------------------------------------------
        // se recorren las facturas vinculadas
        // ---------------------------------------------------------------------
        foreach ($pde_factura_pde_recibos as $pde_factura_pde_recibo) {
            $pde_factura_pde_recibo->setEstado(0);
            $pde_factura_pde_recibo->save();

            if ($recursivo) {
                $pde_factura_pde_recibo->getPdeFactura()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren las notas de debito vinculadas
        // ---------------------------------------------------------------------
        foreach ($pde_nota_debito_pde_recibos as $pde_nota_debito_pde_recibo) {
            $pde_nota_debito_pde_recibo->setEstado(0);
            $pde_nota_debito_pde_recibo->save();

            if ($recursivo) {
                $pde_nota_debito_pde_recibo->getPdeNotaDebito()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recalcula estado del comprobante
        // ---------------------------------------------------------------------        
        $this->setRecalcularEstado(false);

        return true;
    }

    public function getPdeComprobanteTipoEstado() {
        return $this->getPdeReciboTipoEstado();
    }

    /* Método getInfoBtnVolver */

    static function getInfoBtnVolver($indice = false) {
        $array = array(
            'url' => 'pde_recibo_gestion.php',
            'label' => 'Volver al Listado',
        );

        return ($indice) ? $array[$indice] : $array;
    }

    /**
     * Metodo que retorna los comprobantes vinculados al comprobante por conciliacion
     */
    public function getPdeComprobantesVinculadosPorConciliacion() {
        $pde_factura_pde_recibos = $this->getPdeFacturaPdeRecibos(null, null, true);
        $pde_nota_debito_pde_recibos = $this->getPdeNotaDebitoPdeRecibos(null, null, true);

        $pde_facturas = $this->getPdeFacturasXPdeFacturaPdeRecibo(null, null, true);
        $pde_nota_debitos = $this->getPdeNotaDebitosXPdeNotaDebitoPdeRecibo(null, null, true);

        $arr_comprobantes['INTERMEDIO'] = array_merge($pde_factura_pde_recibos, $pde_nota_debito_pde_recibos);
        $arr_comprobantes['EXTREMO'] = array_merge($pde_facturas, $pde_nota_debitos);

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
     * Fecha: 05/12/2018 11:06
     * Metodo que verifica la existencia o no de un numero de comprobante para un mismo proveedor
     * @return PdeRecibo
     */
    static function getPdeReciboXProveedorYNumero($prv_proveedor_id, $numero_comprobante_completo) {
        $c = new Criterio();
        $c->add(PdeReciboTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL);
        $c->add(PrvProveedor::GEN_ATTR_ID, $prv_proveedor_id, Criterio::IGUAL);
        $c->add(PdeRecibo::GEN_ATTR_NUMERO_RECIBO_COMPLETO, $numero_comprobante_completo, Criterio::IGUAL);
        $c->add(PdeRecibo::GEN_ATTR_NUMERO_RECIBO_COMPLETO, '0000-00000000', Criterio::DISTINTO); // excepcion para ordenes de pago sin recibo
        $c->addTabla(PdeRecibo::GEN_TABLA);
        $c->addRealJoin(PdeReciboTipoEstado::GEN_TABLA, PdeReciboTipoEstado::GEN_ATTR_ID, PdeRecibo::GEN_ATTR_PDE_RECIBO_TIPO_ESTADO_ID);
        $c->addRealJoin(PrvProveedor::GEN_TABLA, PrvProveedor::GEN_ATTR_ID, PdeRecibo::GEN_ATTR_PRV_PROVEEDOR_ID);
        $c->setCriterios();

        $p = new Paginador(1, 1);

        $pde_recibos = PdeRecibo::getPdeRecibos($p, $c);
        foreach ($pde_recibos as $pde_recibo) {
            return $pde_recibo;
        }
        return false;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 07/05/2019
     */
    public function setPdeReciboAnular($observacion = '') {
        $pde_recibo_estado = $this->setPdeReciboEstado(PdeReciboTipoEstado::TIPO_ANULADO, $observacion);

        $pde_recibo_items = $this->getPdeReciboItems();
        foreach ($pde_recibo_items as $pde_recibo_item) {
            $fnd_chq_cheque = $pde_recibo_item->getFndChqCheque();
            if ($fnd_chq_cheque) {
                $fnd_chq_cheque->setRetrotraerFndChqChequeTipoEstado('Recibo de Venta Anulado: ' . $observacion);
            }
        }

        return $pde_recibo_estado;
    }

    /**
     * Actualiza el resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function setActualizarResumenComprobante() {
        $pde_recibo_importe = $this->getPdeReciboImporte();

        if (!$pde_recibo_importe) {
            $pde_recibo_importe = new PdeReciboImporte();
        }

        $importe_subtotal = $this->getPdeReciboSubtotal();
        $importe_iva = $this->getPdeReciboIva();
        $importe_tributo = $this->getPdeReciboTributo();
        $importe_total = $importe_subtotal + $importe_iva + $importe_tributo;

        $pde_recibo_importe->setDescripcion($this->getNumeroComprobanteCompleto());
        $pde_recibo_importe->setPdeReciboId($this->getId());
        $pde_recibo_importe->setImporteSubtotal($importe_subtotal);
        $pde_recibo_importe->setImporteIva($importe_iva);
        $pde_recibo_importe->setImporteTributo($importe_tributo);
        $pde_recibo_importe->setImporteTotal($importe_total);
        $pde_recibo_importe->setEstado(1);
        $pde_recibo_importe->save();

        return $pde_recibo_importe;
    }

    /**
     * Retorna un resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function getResumenComprobante() {
        $o = $this->getPdeReciboImporte();
        if ($o) {
            return $o;
        }

        return new PdeReciboImporte();
    }

}

?>