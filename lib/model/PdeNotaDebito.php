<?php

require_once "base/BPdeNotaDebito.php";

class PdeNotaDebito extends BPdeNotaDebito {

    const PREFIJO_NOTA_DEBITO = 'ND-';

    public function getTipoComprobanteSiglas() {
        return "NDE";
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 05/03/2018 09:00 hs.
     * Metodo que genera una nota de debito item.
     * @return Obj PdeNotaDebito
     */
    static function setInicializarPdeNotaDebitoItem($pde_tipo_nota_debito_id, $gral_actividad_id, $gral_escenario_id, $gral_fp_forma_pago_id, $gral_empresa_id, $pde_centro_pedido_id, $prv_proveedor_id, $txt_fecha, $cmb_gral_mes_id, $cmb_anio, $txt_nro_timbrado, $txt_nro_punto_venta, $txt_nro_comprobante, $txt_fecha_vencimiento, $txt_cantidads, $txt_descripcions, $txt_importe_unitarios, $cmb_gral_tipo_iva_ids, $cmb_pde_nota_debito_concepto_ids, $observacion = '', $txt_comprobante_tributos) {

        // se determina el origen del comprobante
        $pde_tipo_origen_nota_debito = PdeTipoOrigenNotaDebito::getOxCodigo(PdeTipoOrigenNotaDebito::ORIGEN_ITEM);

        $prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

        $pde_nota_debito = new PdeNotaDebito();

        $pde_nota_debito->setPdeTipoNotaDebitoId($pde_tipo_nota_debito_id);
        $pde_nota_debito->setPdeTipoOrigenNotaDebitoId($pde_tipo_origen_nota_debito->getId());
        $pde_nota_debito->setGralFpFormaPagoId($gral_fp_forma_pago_id);
        $pde_nota_debito->setGralActividadId($gral_actividad_id);
        $pde_nota_debito->setGralEscenarioId($gral_escenario_id);
        $pde_nota_debito->setGralEmpresaId($gral_empresa_id);
        $pde_nota_debito->setPdeCentroPedidoId($pde_centro_pedido_id);
        $pde_nota_debito->setFechaEmision($txt_fecha);
        $pde_nota_debito->setGralMesId($cmb_gral_mes_id);
        $pde_nota_debito->setAnio($cmb_anio);
        $pde_nota_debito->setNumeroTimbrado($txt_nro_timbrado);        
        $pde_nota_debito->setNumeroPuntoVenta($txt_nro_punto_venta);
        $pde_nota_debito->setNumeroNotaDebito($txt_nro_comprobante);
        $pde_nota_debito->setFechaVencimiento($txt_fecha_vencimiento);
        $pde_nota_debito->setNumeroNotaDebitoCompleto($pde_nota_debito->getNumeroNotaDebitoCompletoFormateado());
        $pde_nota_debito->setObservacion($observacion);
        $pde_nota_debito->setEstado(1);
        $pde_nota_debito->save();

        // --------------------------------------------------------------------
        // se setea el codigo de la nota de debito
        // --------------------------------------------------------------------
        $pde_nota_debito->setCodigo(self::PREFIJO_NOTA_DEBITO . str_pad($pde_nota_debito->getId(), 8, 0, STR_PAD_LEFT));
        $pde_nota_debito->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial de la nota de debito
        // --------------------------------------------------------------------
        $pde_nota_debito_estado = $pde_nota_debito->setPdeNotaDebitoEstado(PdeNotaDebitoTipoEstado::TIPO_GENERADO, $observacion);
        $pde_nota_debito_estado = $pde_nota_debito->setPdeNotaDebitoEstado(PdeNotaDebitoTipoEstado::TIPO_PENDIENTE, $observacion);


        // --------------------------------------------------------------------
        // se agregan los items a la nota de debito
        // --------------------------------------------------------------------
        if (!empty($pde_nota_debito->getId())) {
            // $txt_cantidads, $txt_descripcions, $txt_importe_unitarios, $cmb_gral_tipo_iva_ids

            foreach ($txt_descripcions as $key => $txt_descripcion) {

                $importe_unitario = $txt_importe_unitarios[$key];
                $importe_unitario = Gral::getImporteDesdePriceFormatToDB($importe_unitario);

                // Cargo el detalle de la ND
                $pde_nota_debito_item = new PdeNotaDebitoItem();

                $pde_nota_debito_item->setDescripcion($txt_descripcions[$key]);
                $pde_nota_debito_item->setPdeNotaDebitoId($pde_nota_debito->getId());
                $pde_nota_debito_item->setGralTipoIvaId($cmb_gral_tipo_iva_ids[$key]);
                $pde_nota_debito_item->setPdeNotaDebitoConceptoId($cmb_pde_nota_debito_concepto_ids[$key]);

                //$pde_nota_debito_item->setCantidad($txt_cantidads[$key]);
                $pde_nota_debito_item->setCantidad(1);
                $pde_nota_debito_item->setImporteUnitario($importe_unitario);
                $pde_nota_debito_item->setCodigo('');
                $pde_nota_debito_item->setObservacion('');
                $pde_nota_debito_item->setEstado(1);

                $pde_nota_debito_item->save();
            }
        }


        // --------------------------------------------------------------------
        // se vincula el proveedor a la NC
        // --------------------------------------------------------------------        
        $persona_descripcion = $prv_proveedor->getDescripcion();

        $pde_nota_debito->setPrvProveedorId($prv_proveedor->getId());
        $pde_nota_debito->setRazonSocial($prv_proveedor->getRazonSocial());
        $pde_nota_debito->setDomicilioLegal($prv_proveedor->getDomicilioLegal());
        $pde_nota_debito->setCuit($prv_proveedor->getCuit());
        $pde_nota_debito->setGralCondicionIvaId($prv_proveedor->getGralCondicionIvaId());
        $pde_nota_debito->setGralTipoPersoneriaId($prv_proveedor->getGralTipoPersoneriaId());
        $pde_nota_debito->setPersonaDescripcion($persona_descripcion);

        // --------------------------------------------------------------------
        // se determina el tipo de NC (Ya no es necesario porque se recibe por parametro el pde_tipo_nota_debito_id)
        // --------------------------------------------------------------------
        //$pde_tipo_nota_debito = self::getDeterminacionTipoNotaDebito($prv_proveedor_id);
        //$pde_nota_debito->setPdeTipoNotaDebitoId($pde_tipo_nota_debito->getId());
        $pde_nota_debito->save();

        // --------------------------------------------------------------------
        // se vinculan tributos a la ND
        // --------------------------------------------------------------------
        $pde_nota_debito->setAgregarTributos($txt_comprobante_tributos);

        /*
          // --------------------------------------------------------------------
          // se inicializan registros ws fe para solicitud en afip
          // --------------------------------------------------------------------
          $ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitudNotaDebitoItem($pde_nota_debito->getId());

          if (!$ws_fe_ope_solicitud->setEnviarWsFeOpeSolicitud()) {
          echo 'Error al enviar la nota de debito electronica. ';
          }
         */

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $pde_nota_debito->setActualizarResumenComprobante();

        return $pde_nota_debito;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 12/06/2018 09:00 hs.
     * Metodo que genera una nota de debito.
     * @return Obj PdeNotaCredito
     */
    static function setInicializarPdeNotaDebitoDesdeNotaCredito($pde_nota_credito_id, $observacion = '') {

        // se determina el origen del comprobante
        $pde_tipo_origen_nota_debito = PdeTipoOrigenNotaDebito::getOxCodigo(PdeTipoOrigenNotaDebito::ORIGEN_ANULACION_NC);

        $pde_nota_credito = PdeNotaCredito::getOxId($pde_nota_credito_id);
        //$pde_nota_credito = new PdeNotaCredito();

        $pde_nota_debito = new PdeNotaDebito();

        // --------------------------------------------------------------------
        // se vincula el proveedor a la ND
        // --------------------------------------------------------------------        
        $prv_proveedor_id = $pde_nota_credito->getPrvProveedorId();

        $pde_nota_debito->setPdeTipoOrigenNotaDebitoId($pde_tipo_origen_nota_debito->getId());
        $pde_nota_debito->setPrvProveedorId($prv_proveedor_id);
        $pde_nota_debito->setGralCondicionIvaId($pde_nota_credito->getGralCondicionIvaId());
        $pde_nota_debito->setGralTipoPersoneriaId($pde_nota_credito->getGralTipoPersoneriaId());
        $pde_nota_debito->setGralEmpresaId($pde_nota_credito->getGralEmpresaId());
        $pde_nota_debito->setPdeCentroPedidoId($pde_nota_credito->getPdeCentroPedidoId());
        $pde_nota_debito->setPersonaDescripcion($pde_nota_credito->getPersonaDescripcion());
        $pde_nota_debito->setRazonSocial($pde_nota_credito->getRazonSocial());
        $pde_nota_debito->setDomicilioLegal($pde_nota_credito->getDomicilioLegal());
        $pde_nota_debito->setCuit($pde_nota_credito->getCuit());
        $pde_nota_debito->setFechaVencimiento($pde_nota_credito->getFechaVencimiento());

        // --------------------------------------------------------------------
        // se determina el tipo de ND
        // --------------------------------------------------------------------
        $pde_tipo_nota_debito = self::getDeterminacionTipoNotaDebito($prv_proveedor_id);
        $pde_nota_debito->setPdeTipoNotaDebitoId($pde_tipo_nota_debito->getId());

        $pde_nota_debito->setFechaEmision(Gral::getFechaHoraActual());
        $pde_nota_debito->setObservacion($observacion);
        $pde_nota_debito->setEstado(1);
        $pde_nota_debito->save();

        // --------------------------------------------------------------------
        // se setea el codigo de la nota de debito
        // --------------------------------------------------------------------
        $pde_nota_debito->setCodigo(self::PREFIJO_NOTA_DEBITO . str_pad($pde_nota_debito->getId(), 8, 0, STR_PAD_LEFT));
        $pde_nota_debito->save();

        // --------------------------------------------------------------------
        // se agregan los items a la ND
        // --------------------------------------------------------------------
        $pde_nota_credito_items = $pde_nota_credito->getPdeNotaCreditoItems(null, null, true);
        $pde_nota_credito_pde_tributos = $pde_nota_credito->getPdeNotaCreditoPdeTributos(null, null, true);

        // --------------------------------------------------------------------
        // En el caso de que las NC sea de Items copio los items de NC a ND
        // --------------------------------------------------------------------
        foreach ($pde_nota_credito_items as $pde_nota_credito_item) {

            $pde_nota_debito_item = new PdeNotaDebitoItem();
            $pde_nota_debito_item->setDescripcion($pde_nota_credito_item->getDescripcion());
            $pde_nota_debito_item->setPdeNotaDebitoId($pde_nota_debito->getId());
            $pde_nota_debito_item->setGralTipoIvaId($pde_nota_credito_item->getGralTipoIvaId());
            $pde_nota_debito_item->setImporteUnitario($pde_nota_credito_item->getImporteUnitario());
            $pde_nota_debito_item->setCantidad($pde_nota_credito_item->getCantidad());
            $pde_nota_debito_item->setCodigo('');
            $pde_nota_debito_item->setObservacion('');
            $pde_nota_debito_item->setEstado(1);

            $pde_nota_debito_item->save();
        }

        // --------------------------------------------------------------------
        // se vinculan tributos a la nota de debito
        // --------------------------------------------------------------------
        foreach ($pde_nota_credito_pde_tributos as $pde_nota_credito_pde_tributo) {

            $pde_nota_debito_pde_tributo = new PdeNotaDebitoPdeTributo();

            $pde_nota_debito_pde_tributo->setDescripcion($pde_nota_credito_pde_tributo->getDescripcion());
            $pde_nota_debito_pde_tributo->setPdeNotaDebitoId($pde_nota_debito->getId());
            $pde_nota_debito_pde_tributo->setPdeTributoId($pde_nota_credito_pde_tributo->getPdeTributoId());
            $pde_nota_debito_pde_tributo->setImporteImponible($pde_nota_credito_pde_tributo->getImporteImponible());
            $pde_nota_debito_pde_tributo->setImporteTributo($pde_nota_credito_pde_tributo->getImporteTributo());
            $pde_nota_debito_pde_tributo->setAlicuotaPorcentual($pde_nota_credito_pde_tributo->getAlicuotaPorcentual());
            $pde_nota_debito_pde_tributo->setAlicuotaDecimal($pde_nota_credito_pde_tributo->getAlicuotaDecimal());
            $pde_nota_debito_pde_tributo->setCodigo('');
            $pde_nota_debito_pde_tributo->setObservacion('');
            $pde_nota_debito_pde_tributo->setEstado(1);

            $pde_nota_debito_pde_tributo->save();
        }

        // --------------------------------------------------------------------
        // se vinculan la nota de debito a la nota de credito con los importes
        // --------------------------------------------------------------------        
        $pde_nota_debito_importe_imponible = $pde_nota_debito->getPdeNotaDebitoSubtotal();
        $pde_nota_debito_importe_iva = $pde_nota_debito->getPdeNotaDebitoIva();
        $pde_nota_debito_importe_tributo = $pde_nota_debito->getPdeNotaDebitoTributo();

        $pde_nota_debito_importe_a_imputar = $pde_nota_debito_importe_imponible + $pde_nota_debito_importe_iva + $pde_nota_debito_importe_tributo;
        // Genero la relacion
        $pde_nota_debito_pde_nota_credito = new PdeNotaDebitoPdeNotaCredito();

        $pde_nota_debito_pde_nota_credito->setPdeNotaDebitoId($pde_nota_debito->getId());
        $pde_nota_debito_pde_nota_credito->setPdeNotaCreditoId($pde_nota_credito->getId());
        $pde_nota_debito_pde_nota_credito->setEstado(1);

        $pde_nota_debito_pde_nota_credito->setImporteAfectado($pde_nota_debito_importe_a_imputar);
        $pde_nota_debito_pde_nota_credito->save();

        // --------------------------------------------------------------------
        // se registra el estado de la nota de credito
        // --------------------------------------------------------------------
        $pde_nota_credito_estado = $pde_nota_credito->setPdeNotaCreditoEstado(PdeNotaCreditoTipoEstado::TIPO_ANULADO, '');

        // --------------------------------------------------------------------
        // se registra el estado inicial de la nota de debito
        // --------------------------------------------------------------------
        $pde_nota_debito_estado = $pde_nota_debito->setPdeNotaDebitoEstado(PdeNotaDebitoTipoEstado::TIPO_GENERADO, $observacion);

        // --------------------------------------------------------------------
        // se inicializan registros ws fe para solicitud en afip
        // --------------------------------------------------------------------
        $pde_nota_debito_id = $pde_nota_debito->getId();
        $ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitudNotaDebitoItem($pde_nota_debito_id);

        if (!$ws_fe_ope_solicitud->setEnviarWsFeOpeSolicitud()) {
            echo 'Error al enviar factura electronica. ';
        } else {
            $pde_nota_debito = PdeNotaDebito::getOxId($pde_nota_debito_id);
            // Cambio el estado de la ND
            $pde_nota_debito->setPdeNotaDebitoEstado(PdeNotaDebitoTipoEstado::TIPO_IMPUTADO, '');
        }

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $pde_nota_debito->setActualizarResumenComprobante();

        return $pde_nota_debito;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 24/09/2018 18:15 hs.
     * Metodo que modifica los datos basicos del comprobante
     * @return Obj PdeNotaDebito
     */
    public function setModificarDatosComprobante($pde_tipo_nota_debito_id, $prv_proveedor_id, $txt_fecha, $cmb_gral_mes_id, $cmb_anio, $txt_nro_timbrado, $txt_nro_punto_venta, $txt_nro_comprobante, $txt_fecha_vencimiento, $txa_observacion, $txt_comprobante_tributos) {
        $prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

        $this->setPdeTipoNotaDebitoId($pde_tipo_nota_debito_id);
        $this->setPrvProveedorId($prv_proveedor_id);
        $this->setFechaEmision($txt_fecha);
        $this->setGralMesId($cmb_gral_mes_id);
        $this->setAnio($cmb_anio);
        $this->setNumeroTimbrado($txt_nro_timbrado);        
        $this->setNumeroPuntoVenta($txt_nro_punto_venta);
        $this->setNumeroNotaDebito($txt_nro_comprobante);
        $this->setNumeroNotaDebitoCompleto($this->getNumeroNotaDebitoCompletoFormateado());
        $this->setFechaVencimiento($txt_fecha_vencimiento);
        $this->setObservacion($txa_observacion);

        if ($prv_proveedor) {
            $this->setRazonSocial($prv_proveedor->getRazonSocial());
            $this->setDomicilioLegal($prv_proveedor->getDomicilioLegal());
            $this->setCuit($prv_proveedor->getCuit());
            $this->setGralCondicionIvaId($prv_proveedor->getGralCondicionIvaId());
            $this->setGralTipoPersoneriaId($prv_proveedor->getGralTipoPersoneriaId());

            $this->setPersonaDescripcion($prv_proveedor->getRazonSocial());
        }

        // ---------------------------------------------------------------------
        // se confirman los tributos
        // ---------------------------------------------------------------------
        $this->setAgregarTributos($txt_comprobante_tributos);

        $this->save();
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 25/09/2018
     */
    public function getWsFeParamTipoComprobante() {
        $pde_tipo_nota_debito = $this->getPdeTipoNotaDebito();
        $ws_fe_param_tipo_comprobante = $pde_tipo_nota_debito->getWsFeParamTipoComprobanteXPdeTipoNotaDebitoWsFeParamTipoComprobante();
        return $ws_fe_param_tipo_comprobante;
    }

    /**
     * Metodo que retorna el numero completo del comprobante
     * @return string
     */
    public function getNumeroNotaDebitoCompletoFormateado() {
        $numero_punto_venta = str_pad($this->getNumeroPuntoVenta(), DbConfig::VARS_CANTIDAD_NRO_PUNTO_VENTA, 0, STR_PAD_LEFT);
        $numero_nota_debito = str_pad($this->getNumeroNotaDebito(), DbConfig::VARS_CANTIDAD_NRO_COMPROBANTE, 0, STR_PAD_LEFT);

        $numero_nota_debito_completo = $numero_punto_venta . '-' . $numero_nota_debito;
        return $numero_nota_debito_completo;
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
     * Metodo que registra un nuevo estado de la nota de debito.
     * @return Obj PdeNotaDebitoEstado
     */
    public function setPdeNotaDebitoEstado($codigo, $observacion = '') {
        $inicial = 1;
        $pde_nota_debito_estado = false;

        // se agrega el nuevo estado del factura
        $pde_nota_debito_tipo_estado = PdeNotaDebitoTipoEstado::getOxCodigo($codigo);

        if ($pde_nota_debito_tipo_estado) {
            foreach ($this->getPdeNotaDebitoEstados() as $pde_nota_debito_estado) {
                $pde_nota_debito_estado->setActual(0);
                $pde_nota_debito_estado->save();
                $inicial = 0;
            }


            $pde_nota_debito_estado = new PdeNotaDebitoEstado();
            $pde_nota_debito_estado->setPdeNotaDebitoId($this->getId());
            $pde_nota_debito_estado->setPdeNotaDebitoTipoEstadoId($pde_nota_debito_tipo_estado->getId());
            $pde_nota_debito_estado->setInicial($inicial);
            $pde_nota_debito_estado->setActual(1);
            $pde_nota_debito_estado->setObservacion($observacion);
            $pde_nota_debito_estado->save();

            // actualizamos el estado en pde_nota_debito      
            $this->setPdeNotaDebitoTipoEstadoId($pde_nota_debito_tipo_estado->getId());
            $this->save();
        }

        return $pde_nota_debito_estado;
    }

    /**
     * Registro de los movimientos contables de la operacion
     */
    public function setRegistrarContabilidad($cntb_periodo = false) {
        if ((int) $this->getCntbDiarioAsientoId() > 0) {
            return;
        }

        $pde_nota_debito_tipo_estado = $this->getPdeNotaDebitoTipoEstado();

        if ($pde_nota_debito_tipo_estado->getContabilizable()) {
            $prv_proveedor = $this->getPrvProveedor();
            $gral_empresa = $this->getGralEmpresa();
            $cntb_ejercicio = CntbEjercicio::getCntbEjercicioActual($gral_empresa);
            $cntb_tipo_asiento = CntbTipoAsiento::getOxCodigo(CntbTipoAsiento::TIPO_OPERATIVO);
            $cntb_tipo_origen = CntbTipoOrigen::getOxCodigo(CntbTipoOrigen::TIPO_AUTOMATICO);
            $cntb_tipo_movimiento = CntbTipoMovimiento::getOxCodigo(CntbTipoMovimiento::TIPO_COMPRAS);
            $descripcion = 'Asiento de PdeNotaDebito ' . $this->getId();

            $array_cuentas_debe = array();
            $array_cuentas_haber = array();

            $pde_tipo_origen_nota_debito = $this->getPdeTipoOrigenNotaDebito();
            $gral_actividad = $this->getGralActividad();
            //$gral_tipo_documento         = $this->getGralTipoDocumento();
            $gral_condicion_iva = $this->getGralCondicionIva();
            $gral_fp_forma_pago = $this->getGralFpFormaPago();
            $cntb_cuenta_compra_haber = $gral_fp_forma_pago->getCntbCuentaCompraObj();

            $importe_iva = $this->getPdeNotaDebitoIva();
            $importe_tributo = $this->getPdeNotaDebitoTributo();
            //$importe_subtotal          = $this->getVtaFacturaSubtotal();
            $importe_total = $this->getPdeNotaDebitoTotal();

            $pde_nota_debito_pde_tributos = $this->getPdeNotaDebitoPdeTributos(null, null, true);

            // -----------------------------------------------------------------
            // DEBE
            // -----------------------------------------------------------------            
            if ($pde_tipo_origen_nota_debito && $pde_tipo_origen_nota_debito->getCodigo() == PdeTipoOrigenNotaDebito::ORIGEN_ANULACION_NC) {
                // -----------------------------------------------------------------
                // si nace desde una ND por Anulacion de NC
                // -----------------------------------------------------------------           
                // 
            } elseif ($pde_tipo_origen_nota_debito && $pde_tipo_origen_nota_debito->getCodigo() == PdeTipoOrigenNotaDebito::ORIGEN_ITEM) {
                // -----------------------------------------------------------------
                // si nace desde una ND por Item
                // -----------------------------------------------------------------           
                //
                $pde_nota_debito_items = $this->getPdeNotaDebitoItems();
                foreach ($pde_nota_debito_items as $pde_nota_debito_item) {
                    $importe_total_item = $pde_nota_debito_item->getImporteTotal();
                    $pde_nota_debito_concepto = $pde_nota_debito_item->getPdeNotaDebitoConcepto();
                    $cntb_cuenta_venta_debe = $pde_nota_debito_concepto->getCntbCuenta();

                    if ($cntb_cuenta_venta_debe && $importe_total_item > 0) {
                        $array_cuentas_debe[] = array(
                            'cntb_cuenta' => $cntb_cuenta_venta_debe,
                            'codigo_comprobante' => $txt_comprobante = '',
                            'importe' => $importe_total_item,
                        );
                    }
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
                foreach ($pde_nota_debito_pde_tributos as $pde_nota_debito_pde_tributo) {
                    $pde_tributo = $pde_nota_debito_pde_tributo->getPdeTributo();
                    $importe_tributo_uno = $pde_nota_debito_pde_tributo->getImporteTributo();
                    $cntb_cuenta_tributo = $pde_tributo->getCntbCuenta();
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
            if ($cntb_cuenta_compra_haber) {
                $array_cuentas_haber[] = array(
                    //'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('11010101'), // CAJA ADMINISTRACION 
                    'cntb_cuenta' => $cntb_cuenta_compra_haber,
                    'codigo_comprobante' => $txt_comprobante = '',
                    'importe' => $importe_total,
                );
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
            $cntb_diario_asiento_pde_nota_debito = new CntbDiarioAsientoPdeNotaDebito();
            $cntb_diario_asiento_pde_nota_debito->setCntbDiarioAsientoId($cntb_diario_asiento->getId());
            $cntb_diario_asiento_pde_nota_debito->setPdeNotaDebitoId($this->getId());
            $cntb_diario_asiento_pde_nota_debito->save();

            $pde_tipo_nota_debito = $this->getPdeTipoNotaDebito();
            $pde_tipo_origen_nota_debito = $this->getPdeTipoOrigenNotaDebito();
            $gral_condicion_iva = $this->getGralCondicionIva();
            //$gral_tipo_documento  = $this->getGralTipoDocumento();
            //
            // --------------------------------------------------------------------------
            // se determina vinculo del comprobante
            // --------------------------------------------------------------------------
            $descripcion_vinculo = '';
            $pde_nota_credito = $this->getPdeNotaCreditoXPdeNotaDebitoPdeNotaCredito(null, null, true);
            if ($pde_nota_credito) {
                $descripcion_vinculo = ' - Vinculado a ' . $pde_nota_credito->getTipoComprobanteSiglas() . ' ' . $pde_nota_credito->getNumeroComprobanteCompleto();
            }

            // --------------------------------------------------------------------------
            // si fueron items
            // --------------------------------------------------------------------------
            $pde_nota_debito_items = $this->getPdeNotaDebitoItems();
            if (count($pde_nota_debito_items) > 0) {
                $cantidad_items = count($pde_nota_debito_items) . " Items";
            }

            $descripcion = $pde_tipo_nota_debito->getDescripcion() . " " . $this->getNumeroComprobanteCompleto() . ' - ' . $pde_tipo_origen_nota_debito->getDescripcion() . $descripcion_vinculo;
            $observacion = "Emitida por " . $gral_condicion_iva->getDescripcion() . " " . $this->getPersonaDescripcion() . " CUIT " . $this->getCuit() . " por " . $cantidad_items;

            // --------------------------------------------------------------------------
            // se actualiza la descripcion y observacion del asiento
            // --------------------------------------------------------------------------
            $cntb_diario_asiento->setDescripcion($descripcion);
            $cntb_diario_asiento->setObservacion($observacion);
            $cntb_diario_asiento->save();
        }
    }

    /**
     * Metodo que retorna el tipo de NC que tiene un proveedor.
     * @param type $prv_proveedor_id
     * @return type PdeTipoNotaDebito
     */
    static function getDeterminacionTipoNotaDebito($prv_proveedor_id) {
        $pde_tipo_nota_debito = PdeTipoNotaDebito::getOxCodigo(PdeTipoNotaDebito::TIPO_NOTA_DEBITO_B);

        $prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

        if ($prv_proveedor) {
            $gral_condicion_iva_id = $prv_proveedor->getGralCondicionIvaId();

            $gral_condicion_iva_pde_tipo_nota_debitos = GralCondicionIvaPdeTipoNotaDebito::getOsxGralCondicionIvaId($gral_condicion_iva_id);
            foreach ($gral_condicion_iva_pde_tipo_nota_debitos as $gral_condicion_iva_pde_tipo_nota_debito) {
                $pde_tipo_nota_debito = $gral_condicion_iva_pde_tipo_nota_debito->getPdeTipoNotaDebito();
                return $pde_tipo_nota_debito;
            }
        }
        return $pde_tipo_nota_debito;
    }

    /**
     * Metodo que retorna el valor de los tributos de la factura.
     * @return type float
     */
    public function getArrPdeTributosAplicados() {
        $pde_nota_debito_pde_tributos = $this->getPdeNotaDebitoPdeTributos(null, null, true);

        foreach ($pde_nota_debito_pde_tributos as $pde_nota_debito_pde_tributo) {
            $pde_tributo = $pde_nota_debito_pde_tributo->getPdeTributo();
            $importe_total_tributo = $pde_nota_debito_pde_tributo->getImporteTributo();

            $arr_tributos[$pde_tributo->getId()] = array(
                'pde_tributo_id' => $pde_tributo->getId(),
                'pde_tributo_descripcion' => $pde_tributo->getDescripcion(),
                'importe' => $importe_total_tributo,
            );
        }
        return $arr_tributos;
    }

    public function getArrTributoParaAfip() {
        $arr = array();

        $pde_nota_debito_pde_tributos = $this->getPdeNotaDebitoPdeTributos(null, null, true);

        foreach ($pde_nota_debito_pde_tributos as $pde_nota_debito_pde_tributo) {

            $importe_imponible = round($pde_nota_debito_pde_tributo->getImporteImponible(), 2);
            $importe_tributo = round($pde_nota_debito_pde_tributo->getImporteTributo(), 2);
            $pde_tributo = $pde_nota_debito_pde_tributo->getPdeTributo();
            $ws_fe_param_tipo_tributo = $pde_tributo->getWsFeParamTipoTributoXPdeTributoWsFeParamTipoTributo();

            $arr[$pde_nota_debito_pde_tributo->getPdeTributoId()]['WS_FE_PARAM_TIPO_TRIBUTO_ID'] = $ws_fe_param_tipo_tributo->getId();
            $arr[$pde_nota_debito_pde_tributo->getPdeTributoId()]['Id'] = $ws_fe_param_tipo_tributo->getCodigoAfip();
            $arr[$pde_nota_debito_pde_tributo->getPdeTributoId()]['Desc'] = $ws_fe_param_tipo_tributo->getDescripcion();
            $arr[$pde_nota_debito_pde_tributo->getPdeTributoId()]['BaseImp'] = $importe_imponible;
            $arr[$pde_nota_debito_pde_tributo->getPdeTributoId()]['Alic'] = $pde_nota_debito_pde_tributo->getAlicuotaPorcentual();
            $arr[$pde_nota_debito_pde_tributo->getPdeTributoId()]['Importe'] = $importe_tributo;
        }

        return $arr;
    }

    public function setAgregarTributos($txt_comprobante_tributos) {

        // ---------------------------------------------------------------------
        // se eliminan los tributos existentes para cargarlos nuevamente
        // ---------------------------------------------------------------------
        $this->deletePdeNotaDebitoPdeTributos();

        if (is_array($txt_comprobante_tributos)) {
            foreach ($txt_comprobante_tributos as $pde_tributo_id => $txt_comprobante_tributo) {

                $txt_comprobante_tributo = Gral::getImporteDesdePriceFormatToDB($txt_comprobante_tributo);

                if ($txt_comprobante_tributo != 0) {
                    $pde_tributo = PdeTributo::getOxId($pde_tributo_id);
                    $array = array(
                        array('campo' => 'pde_nota_debito_id', 'valor' => $this->getId()),
                        array('campo' => 'pde_tributo_id', 'valor' => $pde_tributo->getId()),
                    );
                    $pde_nota_debito_pde_tributo = PdeNotaDebitoPdeTributo::getOxArray($array);
                    if (!$pde_nota_debito_pde_tributo) {
                        $pde_nota_debito_pde_tributo = new PdeNotaDebitoPdeTributo();
                        $pde_nota_debito_pde_tributo->setPdeNotaDebitoId($this->getId());
                        $pde_nota_debito_pde_tributo->setPdeTributoId($pde_tributo->getId());
                    }

                    $importe_imponible = $this->getPdeNotaDebitoSubtotal();
                    $importe_tributo = $txt_comprobante_tributo;

                    $alicuota_porcentual = ($txt_comprobante_tributo / $importe_imponible) * 100;
                    $alicuota_decimal = ($txt_comprobante_tributo / $importe_imponible);

                    $pde_nota_debito_pde_tributo->setImporteImponible($importe_imponible);
                    $pde_nota_debito_pde_tributo->setImporteTributo($importe_tributo);
                    $pde_nota_debito_pde_tributo->setAlicuotaPorcentual($alicuota_porcentual);
                    $pde_nota_debito_pde_tributo->setAlicuotaDecimal($alicuota_decimal);
                    $pde_nota_debito_pde_tributo->setEstado(1);
                    $pde_nota_debito_pde_tributo->save();
                }
            }
        }

        return; // los tributos de PDE no se calculan, se excriben de manera explicita
        $pde_tributos_vigentes = $this->getTributosAAplicar();

        // ----------------------------------------------------------------
        // se agrega cada tributo que afecta a la ND
        // ----------------------------------------------------------------
        if (count($pde_tributos_vigentes) > 0) {
            foreach ($pde_tributos_vigentes as $pde_tributo) {

                $array = array(
                    array('campo' => 'pde_nota_debito_id', 'valor' => $this->getId()),
                    array('campo' => 'pde_tributo_id', 'valor' => $pde_tributo->getId()),
                );
                $pde_nota_debito_pde_tributo = PdeNotaDebitoPdeTributo::getOxArray($array);
                if (!$pde_nota_debito_pde_tributo) {
                    $pde_nota_debito_pde_tributo = new PdeNotaDebitoPdeTributo();
                    $pde_nota_debito_pde_tributo->setPdeNotaDebitoId($this->getId());
                    $pde_nota_debito_pde_tributo->setPdeTributoId($pde_tributo->getId());
                }

                $importe_imponible = $this->getPdeNotaDebitoItemSubtotal();
                $importe_tributo = $importe_imponible * $pde_tributo->getAlicuotaDecimal();

                $pde_nota_debito_pde_tributo->setImporteImponible($importe_imponible);
                $pde_nota_debito_pde_tributo->setImporteTributo($importe_tributo);
                $pde_nota_debito_pde_tributo->setAlicuotaPorcentual($pde_tributo->getAlicuotaPorcentual());
                $pde_nota_debito_pde_tributo->setAlicuotaDecimal($pde_tributo->getAlicuotaDecimal());
                $pde_nota_debito_pde_tributo->setEstado(1);
                $pde_nota_debito_pde_tributo->save();
            }
        }
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 23/04/2018 11:00 hs.
     * Metodo que retorna los tributos a aplicar.
     * @return PdeTributos
     */
    public function getTributosAAplicar() {
        $pde_tributos_vigentes = array();

        $pde_tributos = PdeTributo::getPdeTributos(null, null, true);

        foreach ($pde_tributos as $pde_tributo) {
            $pde_tributo_aplica = false;

            $formula = $pde_tributo->getFormula();

            eval($formula);

            if ($pde_tributo_aplica) {
                $pde_tributos_vigentes[] = $pde_tributo_aplica;
            }
        }
        return $pde_tributos_vigentes;
    }

    /**
     * Metodo que retorna el subtotal de los items de la ND sin iva.
     * @return type float
     */
    public function getPdeNotaDebitoItemSubtotal() {
        $pde_nota_debito_items = $this->getPdeNotaDebitoItems(null, null, true);

        foreach ($pde_nota_debito_items as $pde_nota_debito_item) {
            $importe_unitario = round($pde_nota_debito_item->getImporteUnitario(), 2);
            $cantidad = $pde_nota_debito_item->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }
        return $subtotal;
    }

    public function getPdeNotaDebitoSubtotalParaComprobante() {
        $pde_tipo_nota_debito = $this->getPdeTipoNotaDebito();

        switch ($pde_tipo_nota_debito->getCodigo()) {
            case PdeTipoNotaDebito::TIPO_NOTA_DEBITO_A:
                $importe = $this->getPdeNotaDebitoSubtotal();
                break;
            case PdeTipoNotaDebito::TIPO_NOTA_DEBITO_B:
                $importe = $this->getPdeNotaDebitoSubtotal() + $this->getPdeNotaDebitoIva();
                break;
            default:
                $importe = $this->getPdeNotaDebitoSubtotal();
        }

        return $importe;
    }

    /**
     * Metodo que retorna el iva de los items de la ND.
     * @return type float
     */
    public function getPdeNotaDebitoItemIva() {
        $pde_nota_debito_items = $this->getPdeNotaDebitoItems(null, null, true);

        foreach ($pde_nota_debito_items as $pde_nota_debito_item) {
            $gral_tipo_iva = $pde_nota_debito_item->getGralTipoIva();
            $valor_iva_coeficiente = $gral_tipo_iva->getValorIva() / 100;

            $importe_unitario = $pde_nota_debito_item->getImporteUnitario();
            $cantidad = $pde_nota_debito_item->getCantidad();
            $iva += $importe_unitario * $cantidad * $valor_iva_coeficiente;
        }
        return $iva;
    }

    /**
     * Metodo que retorna el valor de los tributos de la ND.
     * @return type float
     */
    public function getPdeNotaDebitoTributo() {
        $pde_nota_debito_pde_tributos = $this->getPdeNotaDebitoPdeTributos(null, null, true);
        $importe_total_tributo = 0;

        foreach ($pde_nota_debito_pde_tributos as $pde_nota_debito_pde_tributo) {
            $importe_total_tributo += $pde_nota_debito_pde_tributo->getImporteTributo();
        }

        return $importe_total_tributo;
    }

    /**
     * Metodo que retorna el iva de los items de la NC.
     * @return type float
     */
    public function getPdeNotaDebitoIva() {
        $pde_nota_debito_items = $this->getPdeNotaDebitoItems(null, null, true);

        foreach ($pde_nota_debito_items as $pde_nota_debito_item) {
            $gral_tipo_iva = $pde_nota_debito_item->getGralTipoIva();
            $valor_iva_coeficiente = $gral_tipo_iva->getValorIva() / 100;

            $importe_unitario = $pde_nota_debito_item->getImporteUnitario();
            $cantidad = $pde_nota_debito_item->getCantidad();
            $iva += $importe_unitario * $cantidad * $valor_iva_coeficiente;
        }
        return round($iva, 2);
    }

    /**
     * Metodo que retorna el subtotal de los items de la ND sin iva.
     * @return type float
     */
    public function getPdeNotaDebitoSubtotal($tipo_subtotal = false) {

        // ---------------------------------------------------------------------
        // se suman los items sueltos de la ND
        // ---------------------------------------------------------------------        
        $c = new Criterio();
        if ($tipo_subtotal == PdeComprobante::TIPO_SUBTOTAL_GRAVADO) {
            $c->add(GralTipoIva::GEN_ATTR_GRAVADO, 1, Criterio::IGUAL);
        }
        if ($tipo_subtotal == PdeComprobante::TIPO_SUBTOTAL_NO_GRAVADO) {
            $c->add(GralTipoIva::GEN_ATTR_CODIGO, GralTipoIva::TIPO_NO_GRAVADO, Criterio::IGUAL);
        }
        if ($tipo_subtotal == PdeComprobante::TIPO_SUBTOTAL_EXENTO) {
            $c->add(GralTipoIva::GEN_ATTR_CODIGO, GralTipoIva::TIPO_EXENTO, Criterio::IGUAL);
        }
        $c->addTabla(PdeNotaDebitoItem::GEN_TABLA);
        $c->addRealJoin(GralTipoIva::GEN_TABLA, GralTipoIva::GEN_ATTR_ID, PdeNotaDebitoItem::GEN_ATTR_GRAL_TIPO_IVA_ID);
        $c->setCriterios();

        $pde_nota_debito_items = $this->getPdeNotaDebitoItems(null, $c, true);
        foreach ($pde_nota_debito_items as $pde_nota_debito_item) {
            $importe_unitario = $pde_nota_debito_item->getImporteUnitario();
            $cantidad = $pde_nota_debito_item->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }

        return $subtotal;
    }

    /**
     * Metodo que retorna el total de la nd con iva.
     * @return type float
     */
    public function getPdeNotaDebitoTotal() {
        $total = $this->getPdeNotaDebitoSubtotal() + $this->getPdeNotaDebitoIva() + $this->getPdeNotaDebitoTributo();
        return $total;
    }

    /**
     * @creado_por Pablo Rosen
     * creado 15/08/2018
     */
    public function getArrIvaNotaDebitoFull() {
        $arr_iva = array();

        // se toman los datos desde item
        $pde_nota_debito_items = $this->getPdeNotaDebitoItems(null, null, true);

        foreach ($pde_nota_debito_items as $pde_nota_debito_item) {
            $gral_tipo_iva = $pde_nota_debito_item->getGralTipoIva();

            $importe_unitario = $pde_nota_debito_item->getImporteUnitario();
            $iva = ($pde_nota_debito_item->getGralTipoIva()->getValorIva() / 100) * $importe_unitario * $pde_nota_debito_item->getCantidad();

            $acu_importe_unitario[$pde_nota_debito_item->getGralTipoIva()->getCodigo()] += $importe_unitario * $pde_nota_debito_item->getCantidad();
            $acu_iva[$pde_nota_debito_item->getGralTipoIva()->getCodigo()] += $iva;

            $arr_iva[$pde_nota_debito_item->getGralTipoIva()->getCodigo()] = array(
                'id' => $pde_nota_debito_item->getGralTipoIvaId(),
                'descripcion' => $pde_nota_debito_item->getGralTipoIva()->getDescripcion(),
                'codigo' => $pde_nota_debito_item->getGralTipoIva()->getCodigo(),
                'base_imponible' => $acu_importe_unitario[$pde_nota_debito_item->getGralTipoIva()->getCodigo()],
                'importe_iva' => $acu_iva[$pde_nota_debito_item->getGralTipoIva()->getCodigo()],
            );
        }
        return $arr_iva;
    }

    /**
     * @creado_por Pablo Rosen
     * creado 15/08/2018
     */
    public function getArrIvaNotaDebitoParaCitiFull() {
        $arr_iva = array();

        // se toman los datos desde item
        $pde_nota_debito_items = $this->getPdeNotaDebitoItems(null, null, true);

        foreach ($pde_nota_debito_items as $pde_nota_debito_item) {
            $gral_tipo_iva = $pde_nota_debito_item->getGralTipoIva();

            if ($gral_tipo_iva && $gral_tipo_iva->getGravado()) { // solo se agrega al array de IVA las alicuotas que estan gravadas
                $importe_unitario = $pde_nota_debito_item->getImporteUnitario();
                $iva = ($pde_nota_debito_item->getGralTipoIva()->getValorIva() / 100) * $importe_unitario * $pde_nota_debito_item->getCantidad();

                $acu_importe_unitario[$pde_nota_debito_item->getGralTipoIva()->getCodigo()] += $importe_unitario * $pde_nota_debito_item->getCantidad();
                $acu_iva[$pde_nota_debito_item->getGralTipoIva()->getCodigo()] += $iva;

                $arr_iva[$pde_nota_debito_item->getGralTipoIva()->getCodigo()] = array(
                    'id' => $pde_nota_debito_item->getGralTipoIvaId(),
                    'descripcion' => $pde_nota_debito_item->getGralTipoIva()->getDescripcion(),
                    'codigo' => $pde_nota_debito_item->getGralTipoIva()->getCodigo(),
                    'base_imponible' => $acu_importe_unitario[$pde_nota_debito_item->getGralTipoIva()->getCodigo()],
                    'importe_iva' => $acu_iva[$pde_nota_debito_item->getGralTipoIva()->getCodigo()],
                );
            }
        }
        return $arr_iva;
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 15/08/2018
     */
    public function getArrTributoNotaDebitoFull() {
        $arr_tributo = array();
        $pde_nota_debito_pde_tributos = $this->getPdeNotaDebitoPdeTributos(null, null, true);

        foreach ($pde_nota_debito_pde_tributos as $pde_nota_debito_pde_tributo) {
            $importe_unitario = $pde_nota_debito_pde_tributo->getImporteImponible();
            //$importe_tributo = ($pde_nota_debito_pde_tributo->getPdeTributo()->getAlicuotaPorcentual() / 100) * $importe_unitario;
            $importe_tributo = ($pde_nota_debito_pde_tributo->getAlicuotaPorcentual() / 100) * $importe_unitario;

            $acu_importe_unitario[$pde_nota_debito_pde_tributo->getPdeTributo()->getCodigo()] += $importe_unitario;
            $acu_iva[$pde_nota_debito_pde_tributo->getPdeTributo()->getCodigo()] += $importe_tributo;

            $arr_tributo[$pde_nota_debito_pde_tributo->getPdeTributo()->getCodigo()] = array(
                'id' => $pde_nota_debito_pde_tributo->getPdeTributoId(),
                'descripcion' => $pde_nota_debito_pde_tributo->getPdeTributo()->getDescripcion(),
                'codigo' => $pde_nota_debito_pde_tributo->getPdeTributo()->getCodigo(),
                'base_imponible' => $acu_importe_unitario[$pde_nota_debito_pde_tributo->getPdeTributo()->getCodigo()],
                'importe_tributo' => $acu_iva[$pde_nota_debito_pde_tributo->getPdeTributo()->getCodigo()],
            );
        }
        return $arr_tributo;
    }

    /**
     * Metodo que retorna la cantidad de items que tiene una NC.
     * @return type float
     */
    public function getPdeNotaDebitoCantidadItems() {
        $pde_nota_debito_items = $this->getPdeNotaDebitoItems(null, null, true);
        $cantidad_items = count($pde_nota_debito_items);

        return $cantidad_items;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 20/03/2018 11:00 hs.
     * Metodo que envia el NC por email.
     * @return 
     */
    public function enviarNotaDebitoEmail($enviar = false, $destinatarios = false, $txa_observacion, $archivo_adjunto_urls = false) {
        if (!Mail::MAIL_ACTIVO)
            return false;

        $mail_asunto = Gral::getConfig('gral_cliente') . ' - Nota de Debito #' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios = str_replace(' ', '', $destinatarios);
        $destinatarios = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param = array(
            'pde_nota_debito_id' => $this->getId(),
            'observacion' => $txa_observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_pde_nota_debito.php";
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

        $pde_nota_debito_enviado = $this->inicializarPdeNotaDebitoEnviado($txa_observacion, $destinatarios, $mail_asunto, $msg, $strContenidoPdf);

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
                $pde_nota_debito_enviado->setConfirmarPdeNotaDebitoEnviado(1, PdeNotaDebitoEnviado::NOTA_DEBITO_ENVIADO_CORRECTAMENTE);
            } else {
                $pde_nota_debito_enviado->setConfirmarPdeNotaDebitoEnviado(0, $mail->ErrorInfo);
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
     * @return PdeNotaDebitoEnviado
     */
    public function inicializarPdeNotaDebitoEnviado($observacion, $destinatarios, $mail_asunto, $mail_contenido, $archivo_adjunto) {
        $pde_nota_debito_enviado = new PdeNotaDebitoEnviado();
        $pde_nota_debito_enviado->setDescripcion('');
        $pde_nota_debito_enviado->setPdeNotaDebitoId($this->getId());
        $pde_nota_debito_enviado->setAsunto($mail_asunto);
        $pde_nota_debito_enviado->setDestinatario($destinatarios);

        $pde_nota_debito_enviado->setCuerpo(addslashes($mail_contenido));
        $pde_nota_debito_enviado->setAdjunto(base64_encode($archivo_adjunto));

        $pde_nota_debito_enviado->setCodigoEnvio(0);
        $pde_nota_debito_enviado->setObservacion($observacion);
        $pde_nota_debito_enviado->setEstado(0);

        $pde_nota_debito_enviado->save();

        return $pde_nota_debito_enviado;
    }

    public function getNombreArchivoAdjuntoNotaDebito() {
        return Gral::getConfig('gral_cliente') . ' - Nota de Debito #' . $this->getCodigo() . '.pdf';
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 03/05/2018 11:00 hs.
     * Metodo que retorna el numero de comprobante formato "pto pde - num comp afip".
     * @return String
     */
    public function getNumeroComprobanteCompleto() {
        $pde_centro_pedido = $this->getPdeCentroPedido();

        //$numero_punto_venta = $pde_centro_pedido->getNumero();
        $numero_punto_venta = $this->getNumeroPuntoVenta();
        $numero_comprobante = $this->getNumeroNotaDebito();

        return str_pad($numero_punto_venta, 4, 0, STR_PAD_LEFT) . '-' . str_pad($numero_comprobante, 8, 0, STR_PAD_LEFT);
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
        $numero_comprobante = $this->getNumeroNotaDebito();
        $letra_tipo_comprobante = $this->getPdeTipoNotaDebito()->getCodigoMin();

        return $siglas_tipo_comprobante . ' ' . $letra_tipo_comprobante . ' ' . str_pad($numero_punto_venta, 4, 0, STR_PAD_LEFT) . '-' . str_pad($numero_comprobante, 8, 0, STR_PAD_LEFT);
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     */
    public function getNumeroComprobante() {
        $numero_comprobante = $this->getNumeroNotaDebito();
        return $numero_comprobante;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 04/01/2021 21:58 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna importe del comprobante.
     * El auxiliar se utiliza para cuando se llama al metodo desde modulos genericos, ya que PdeFactura tiene un parametro inicial no utilizado en ND
     * @return Float
     */
    public function getImporteSubtotalComprobante($aux = false, $tipo_subtotal = false) {
        return $this->getPdeNotaDebitoSubtotal($tipo_subtotal);
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 03/05/2018 11:00 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna importe del comprobante.
     * @return Float
     */
    public function getImporteTotalComprobante() {
        $pde_nota_debito_importe_total = 0;

        // Importes de la generacion de la ND a travez de los items
        $pde_nota_debito_item_subtotal = $this->getPdeNotaDebitoItemSubtotal();
        $pde_nota_debito_item_iva = $this->getPdeNotaDebitoItemIva();
        $pde_nota_debito_item_pde_tributo = $this->getPdeNotaDebitoItemImporteTributo();

        $pde_nota_debito_item_total = $pde_nota_debito_item_subtotal + $pde_nota_debito_item_iva + $pde_nota_debito_item_pde_tributo;

        return $pde_nota_debito_item_total;
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
        $importe_total_haber = $this->getImporteTotalComprobante();
        return $importe_total_haber;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImporteSubtotal($tipo_subtotal = false) {

        return $this->getPdeNotaDebitoSubtotal($tipo_subtotal);
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 16/08/2018
     */
    public function getArrIvaComprobanteFull() {
        return $this->getArrIvaNotaDebitoFull();
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 16/08/2018
     */
    public function getArrIvaParaCitiComprobanteFull() {
        return $this->getArrIvaNotaDebitoParaCitiFull();
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 16/08/2018
     */
    public function getArrTributoComprobanteFull() {
        return $this->getArrTributoNotaDebitoFull();
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 01/10/2018
     */
    public function getImporteIvaBaseImponible($codigo = false, $arr_iva_full = false) {
        if (!$arr_iva_full) {
            $arr_iva_full = $this->getArrIvaNotaDebitoFull();
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
            $arr_iva_full = $this->getArrIvaNotaDebitoFull();
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
            $arr_iva_full = $this->getArrIvaNotaDebitoFull();
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
            $arr_iva_full = $this->getArrIvaNotaDebitoFull();
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
            $arr_iva_full = $this->getArrIvaNotaDebitoFull();
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
            $arr_iva_full = $this->getArrIvaNotaDebitoFull();
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
            $arr_iva_full = $this->getArrIvaNotaDebitoFull();
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
            $arr_iva_full = $this->getArrIvaNotaDebitoFull();
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
            $arr_iva_full = $this->getArrIvaNotaDebitoFull();
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
            $arr_tributo_full = $this->getArrTributoNotaDebitoFull();
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
            $arr_tributo_full = $this->getArrTributoNotaDebitoFull();
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
     * @creado_por Pablo Rosen
     * @creado 02/10/2018
     */
    public function getImportePercepcionIIBBMnes($arr_tributo_full = false) {
        if (!$arr_tributo_full) {
            $arr_tributo_full = $this->getArrTributoNotaDebitoFull();
        }

        $arr_tributo = $arr_tributo_full[PERCEPCIONES_IIBB_MNES];

        return $arr_tributo['importe_tributo'];
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 02/10/2018
     */
    public function getImportePercepcionIIBBBsAs($arr_tributo_full = false) {
        if (!$arr_tributo_full) {
            $arr_tributo_full = $this->getArrTributoNotaDebitoFull();
        }

        $arr_tributo = $arr_tributo_full[PERCEPCIONES_IIBB_BSAS];

        return $arr_tributo['importe_tributo'];
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/08/2018
     */
    public function getImporteTotal() {
        return $this->getPdeNotaDebitoTotal();
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que retorna el importe total de los tributos de la ND generada por la carga de los Items.
     * @return Float
     */
    public function getPdeNotaDebitoItemImporteTributo() {
        $importe_tributo = 0;
        $pde_nota_debito_pde_tributos = $this->getPdeNotaDebitoPdeTributos(null, null, true);

        foreach ($pde_nota_debito_pde_tributos as $pde_nota_debito_pde_tributo) {
            $importe_tributo += round($pde_nota_debito_pde_tributo->getImporteTributo(), 2);
        }

        return $importe_tributo;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 03/05/2018 11:00 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna el tipo de comprobante si existe.
     * @return String
     */
    public function getTipoComprobante() {
        return $this->getPdeTipoNotaDebito()->getDescripcion();
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 28/07/2018 15:13 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna el tipo de comprobante si existe.
     * @return String
     */
    public function getTipoComprobanteMin() {
        return $this->getPdeTipoNotaDebito()->getCodigoMin();
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 28/07/2018 15:13 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna el tipo de comprobante si existe.
     * @return String
     */
    public function getTipoComprobanteCodigo() {
        return $this->getPdeTipoNotaDebito()->getCodigo();
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 03/05/2018 11:00 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna el tipo estado si existe.
     * @return String
     */
    public function getTipoEstadoComprobante() {
        $comprobante_tipo_estado = $this->getPdeNotaDebitoTipoEstado();
        $descripcion = $comprobante_tipo_estado->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 01/07/2020 18:32 hs.
     * Metodo generico que devuelve el origen del comprobante
     * @return String
     */
    public function getPdeTipoOrigenComprobanteDescripcion() {
        $descripcion = $this->getPdeTipoOrigenNotaDebito()->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 01/07/2020 18:32 hs.
     * Metodo generico que devuelve el tipo de comprobante
     * @return String
     */
    public function getPdeTipoComprobanteDescripcion() {
        $descripcion = $this->getPdeTipoNotaDebito()->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 15/05/2018 11:00 hs.
     * Metodo que retorna el importe disponible a imputar de una ND.
     * @return Float
     */
    public function getSaldoImputable() {
        $importe_total_comprobante_afectado = 0;

        // Busco el importe total de la ND
        $importe_total_comprobante = $this->getImporteTotalComprobante();

        // Busco el importe total ya imputado con Recibos
        $pde_nota_debito_pde_recibos = $this->getPdeNotaDebitoPdeRecibos(null, null, true);
        foreach ($pde_nota_debito_pde_recibos as $pde_nota_debito_pde_recibo) {
            $importe_total_comprobante_afectado += $pde_nota_debito_pde_recibo->getImporteAfectado();
        }

        // Busco el importe total ya imputado con Notas de Creditos
        $pde_nota_debito_pde_nota_creditos = $this->getPdeNotaDebitoPdeNotaCreditos(null, null, true);
        foreach ($pde_nota_debito_pde_nota_creditos as $pde_nota_debito_pde_nota_credito) {
            $importe_total_comprobante_afectado += $pde_nota_debito_pde_nota_credito->getImporteAfectado();
        }

        $importe_total_comprobante = round($importe_total_comprobante, 2);
        $importe_total_comprobante_afectado = round($importe_total_comprobante_afectado, 2);

        $importe_total_comprobante_disponible = $importe_total_comprobante - $importe_total_comprobante_afectado;
        return $importe_total_comprobante_disponible;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 03/11/208 21:34 hs.
     * Metodo que retorna el importe disponible a imputar de una ND.
     * @return Float
     */
    public function getSaldoImputado() {
        $importe_total_comprobante_afectado = 0;

        // Busco el importe total ya imputado con Recibos
        $pde_nota_debito_pde_recibos = $this->getPdeNotaDebitoPdeRecibos(null, null, true);
        foreach ($pde_nota_debito_pde_recibos as $pde_nota_debito_pde_recibo) {
            $importe_total_comprobante_afectado += $pde_nota_debito_pde_recibo->getImporteAfectado();
        }

        // Busco el importe total ya imputado con Notas de Creditos
        $pde_nota_debito_pde_nota_creditos = $this->getPdeNotaDebitoPdeNotaCreditos(null, null, true);
        foreach ($pde_nota_debito_pde_nota_creditos as $pde_nota_debito_pde_nota_credito) {
            $importe_total_comprobante_afectado += $pde_nota_debito_pde_nota_credito->getImporteAfectado();
        }

        $importe_total_comprobante_afectado = round($importe_total_comprobante_afectado, 2);

        $importe_total_comprobante_disponible = $importe_total_comprobante_afectado;
        return $importe_total_comprobante_disponible;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 15/05/2018 11:00 hs.
     * Metodo utilizado en la imputacion de comprobantes.
     * @return 
     */
    public function setImputarPdeComprobante_OLD($pde_nota_credito_ids = null, $pde_recibo_ids = null) {
        // Importe a imputar
        $pde_nota_debito_importe_total_a_imputar = $this->getSaldoImputable();

        // Agrupo todos los comprobantes para poder ordenarlos por fecha de emision
        foreach ($pde_recibo_ids as $pde_recibo_id) {
            $pde_recibo = PdeRecibo::getOxId($pde_recibo_id);
            $pde_comprobantes[] = $pde_recibo;
        }
        foreach ($pde_nota_credito_ids as $pde_nota_credito_id) {
            $pde_nota_credito = PdeNotaCredito::getOxId($pde_nota_credito_id);
            $pde_comprobantes[] = $pde_nota_credito;
        }

        // Ordeno los comprobantes
        usort($pde_comprobantes, array($this, 'getOrdenarColeccionComprobantes'));

        $pde_nota_debito_importe_a_imputar = $pde_nota_debito_importe_total_a_imputar;
        // Genero el vinculo con el comprobante correspondiente
        foreach ($pde_comprobantes as $pde_comprobante) {

            if ((int) ($pde_nota_debito_importe_a_imputar * 100) > 0) {
                $clase = get_class($pde_comprobante);

                if ($clase == 'PdeNotaCredito') {
                    $pde_nota_credito = PdeNotaCredito::getOxId($pde_comprobante->getId());
                    $pde_nota_credito_importe_disponible = $pde_nota_credito->getSaldoImputable();

                    // Genero la relacion
                    $pde_nota_debito_pde_nota_credito = new PdeNotaDebitoPdeNotaCredito();

                    $pde_nota_debito_pde_nota_credito->setPdeNotaDebitoId($this->getId());
                    $pde_nota_debito_pde_nota_credito->setPdeNotaCreditoId($pde_nota_credito->getId());
                    $pde_nota_debito_pde_nota_credito->setEstado(1);

                    // Monto de la nota_debito mayor o igual al de la NC
                    if ((int) ($pde_nota_debito_importe_a_imputar * 100) < (int) ($pde_nota_credito_importe_disponible * 100)) {

                        $pde_nota_debito_pde_nota_credito->setImporteAfectado($pde_nota_debito_importe_a_imputar);
                        // Cambio el estado de la NC
                        $pde_nota_credito->setPdeNotaCreditoEstado(PdeNotaCreditoTipoEstado::TIPO_IMPUTADO_PARCIAL, '');
//                        $pde_nota_debito_importe_a_imputar = 0;
                    } else {
                        $pde_nota_debito_pde_nota_credito->setImporteAfectado($pde_nota_credito_importe_disponible);

                        // Cambio el estado de la NC
                        $pde_nota_credito->setPdeNotaCreditoEstado(PdeNotaCreditoTipoEstado::TIPO_IMPUTADO, '');
//                        $pde_nota_debito_importe_a_imputar -= $pde_nota_credito_importe_disponible;
                    }
                    $pde_nota_debito_importe_a_imputar -= $pde_nota_credito_importe_disponible;
                    $pde_nota_debito_pde_nota_credito->save();
                } elseif ($clase == 'PdeRecibo') {
                    $pde_recibo = PdeRecibo::getOxId($pde_comprobante->getId());

                    $pde_recibo_importe_disponible = $pde_recibo->getSaldoImputable();

                    // Genero la relacion
                    $pde_nota_debito_pde_recibo = new PdeNotaDebitoPdeRecibo();

                    $pde_nota_debito_pde_recibo->setPdeNotaDebitoId($this->getId());
                    $pde_nota_debito_pde_recibo->setPdeReciboId($pde_recibo->getId());
                    $pde_nota_debito_pde_recibo->setEstado(1);

                    // Monto de la nota_debito mayor o igual al del Recibo
                    if ((int) ($pde_nota_debito_importe_a_imputar * 100) < (int) ($pde_recibo_importe_disponible * 100)) {

                        $pde_nota_debito_pde_recibo->setImporteAfectado($pde_nota_debito_importe_a_imputar);
                        // Cambio el estado del Recibo
                        $pde_recibo_tipo_estado = $pde_recibo->setPdeReciboEstado(PdeReciboTipoEstado::TIPO_IMPUTADO_PARCIAL, '');
//                        $pde_nota_debito_importe_a_imputar = 0;
                    } else {
                        $pde_nota_debito_pde_recibo->setImporteAfectado($pde_recibo_importe_disponible);

                        // Cambio el estado del Recibo
                        $pde_recibo_tipo_estado = $pde_recibo->setPdeReciboEstado(PdeReciboTipoEstado::TIPO_IMPUTADO, '');
//                        $pde_nota_debito_importe_a_imputar -= $pde_recibo_importe_disponible;
                    }
                    $pde_nota_debito_importe_a_imputar -= $pde_recibo_importe_disponible;
                    $pde_nota_debito_pde_recibo->save();
                }

                // Cambio el estado de la ND
                if ((int) ($pde_nota_debito_importe_a_imputar * 100) > 0) {
                    $this->setPdeNotaDebitoEstado(PdeNotaDebitoTipoEstado::TIPO_SALDADO_PARCIAL, '');
                } else {
                    $this->setPdeNotaDebitoEstado(PdeNotaDebitoTipoEstado::TIPO_SALDADO, '');
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
    public function setImputarPdeComprobante($pde_nota_credito_ids = null, $pde_recibo_ids = null) {
        // Importe a imputar
        $pde_nota_debito_importe_total_a_imputar = $this->getSaldoImputable();

        // Agrupo todos los comprobantes para poder ordenarlos por fecha de emision
        foreach ($pde_recibo_ids as $pde_recibo_id) {
            $pde_recibo = PdeRecibo::getOxId($pde_recibo_id);
            $pde_comprobantes[] = $pde_recibo;
        }
        foreach ($pde_nota_credito_ids as $pde_nota_credito_id) {
            $pde_nota_credito = PdeNotaCredito::getOxId($pde_nota_credito_id);
            $pde_comprobantes[] = $pde_nota_credito;
        }

        // Ordeno los comprobantes
        usort($pde_comprobantes, array($this, 'self::getOrdenarColeccionComprobantes'));

        $pde_nota_debito_importe_a_imputar = $pde_nota_debito_importe_total_a_imputar;
        // Genero el vinculo con el comprobante correspondiente
        foreach ($pde_comprobantes as $pde_comprobante) {

            if ((int) ($pde_nota_debito_importe_a_imputar * 100) > 0) {
                $clase = get_class($pde_comprobante);

                if ($clase == 'PdeNotaCredito') {
                    $pde_nota_credito = PdeNotaCredito::getOxId($pde_comprobante->getId());
                    $pde_nota_credito_importe_disponible = $pde_nota_credito->getSaldoImputable();

                    // Genero la relacion
                    $pde_nota_debito_pde_nota_credito = new PdeNotaDebitoPdeNotaCredito();

                    $pde_nota_debito_pde_nota_credito->setPdeNotaDebitoId($this->getId());
                    $pde_nota_debito_pde_nota_credito->setPdeNotaCreditoId($pde_nota_credito->getId());

                    // Monto de la nota_debito mayor o igual al de la NC
                    if ((int) ($pde_nota_debito_importe_a_imputar * 100) < (int) ($pde_nota_credito_importe_disponible * 100)) {
                        $pde_nota_debito_pde_nota_credito->setImporteAfectado($pde_nota_debito_importe_a_imputar);
                    } else {
                        $pde_nota_debito_pde_nota_credito->setImporteAfectado($pde_nota_credito_importe_disponible);
                    }
                    $pde_nota_debito_pde_nota_credito->setEstado(1);
                    $pde_nota_debito_pde_nota_credito->save();

                    $pde_nota_debito_importe_a_imputar -= $pde_nota_credito_importe_disponible;
                } elseif ($clase == 'PdeRecibo') {
                    $pde_recibo = PdeRecibo::getOxId($pde_comprobante->getId());

                    $pde_recibo_importe_disponible = $pde_recibo->getSaldoImputable();

                    // Genero la relacion
                    $pde_nota_debito_pde_recibo = new PdeNotaDebitoPdeRecibo();

                    $pde_nota_debito_pde_recibo->setPdeNotaDebitoId($this->getId());
                    $pde_nota_debito_pde_recibo->setPdeReciboId($pde_recibo->getId());

                    // Monto de la nota_debito mayor o igual al del Recibo
                    if ((int) ($pde_nota_debito_importe_a_imputar * 100) < (int) ($pde_recibo_importe_disponible * 100)) {
                        $pde_nota_debito_pde_recibo->setImporteAfectado($pde_nota_debito_importe_a_imputar);
                    } else {
                        $pde_nota_debito_pde_recibo->setImporteAfectado($pde_recibo_importe_disponible);
                    }
                    $pde_nota_debito_pde_recibo->setEstado(1);
                    $pde_nota_debito_pde_recibo->save();

                    $pde_nota_debito_importe_a_imputar -= $pde_recibo_importe_disponible;
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
     * @return Obj PdeNotaDebitoEstado
     */
    public function setRecalcularEstado($recursivo = false) {

        // Importe imputable del comprobante
        $importe_comprobante_total = $this->getImporteTotalComprobante();

        $importe_comprobante_saldo = $importe_comprobante_total;

        $pde_nota_debito_pde_recibos = $this->getPdeNotaDebitoPdeRecibos(null, null, true);
        $pde_nota_debito_pde_nota_creditos = $this->getPdeNotaDebitoPdeNotaCreditos(null, null, true);

        // ---------------------------------------------------------------------
        // se recorren los recibos vinculadas
        // ---------------------------------------------------------------------
        foreach ($pde_nota_debito_pde_recibos as $pde_nota_debito_pde_recibo) {
            $importe_afectado = $pde_nota_debito_pde_recibo->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $pde_nota_debito_pde_recibo->getPdeRecibo()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren las notas de credito vinculadas
        // ---------------------------------------------------------------------
        foreach ($pde_nota_debito_pde_nota_creditos as $pde_nota_debito_pde_nota_credito) {
            $importe_afectado = $pde_nota_debito_pde_nota_credito->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $pde_nota_debito_pde_nota_credito->getPdeNotaCredito()->setRecalcularEstado(false);
            }
        }

        if ((abs($importe_comprobante_saldo) >= 0) && (abs($importe_comprobante_saldo) <= 0.1)) {
            // -----------------------------------------------------------------
            // si tiene saldo cero el comprobante fue usado en su totalidad
            // -----------------------------------------------------------------
            $pde_nota_debito_estado = $this->setPdeNotaDebitoEstado(PdeNotaDebitoTipoEstado::TIPO_SALDADO, '');
        } elseif ($importe_comprobante_saldo > 0.1 && $importe_comprobante_saldo != $importe_comprobante_total) {
            // -----------------------------------------------------------------
            // si tiene saldo mayor a cero el comprobante fue usado parcialmente
            // -----------------------------------------------------------------
            $pde_nota_debito_estado = $this->setPdeNotaDebitoEstado(PdeNotaDebitoTipoEstado::TIPO_SALDADO_PARCIAL, '');
        } elseif ($importe_comprobante_saldo == $importe_comprobante_total) {
            // -----------------------------------------------------------------
            // si tiene saldo igual al total se encuentra pendiente de pago
            // -----------------------------------------------------------------
            $pde_nota_debito_estado = $this->setPdeNotaDebitoEstado(PdeNotaDebitoTipoEstado::TIPO_PENDIENTE, '');
        }

        return $pde_nota_debito_estado;
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

        $pde_nota_debito_pde_nota_creditos = $this->getPdeNotaDebitoPdeNotaCreditos(null, null, true);
        $pde_nota_debito_pde_recibos = $this->getPdeNotaDebitoPdeRecibos(null, null, true);

        // ---------------------------------------------------------------------
        // se recorren las notas de credito vinculadas
        // ---------------------------------------------------------------------
        foreach ($pde_nota_debito_pde_nota_creditos as $pde_nota_debito_pde_nota_credito) {
            $pde_nota_debito_pde_nota_credito->setEstado(0);
            $pde_nota_debito_pde_nota_credito->save();

            if ($recursivo) {
                $pde_nota_debito_pde_nota_credito->getPdeNotaCredito()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren los recibos vinculadas
        // ---------------------------------------------------------------------
        foreach ($pde_nota_debito_pde_recibos as $pde_nota_debito_pde_recibo) {
            $pde_nota_debito_pde_recibo->setEstado(0);
            $pde_nota_debito_pde_recibo->save();

            if ($recursivo) {
                $pde_nota_debito_pde_recibo->getPdeRecibo()->setRecalcularEstado(false);
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
     * Fecha: 16/05/2018 11:00 hs.
     * Metodo que retorna una coleccion de ND para imputar.
     * @return PdeNotaDebitos
     */
    static function getPdeNotaDebitosImputables($prv_proveedor_id, $gral_empresa_id) {

        $criterio = new Criterio(PdeNotaDebito::SES_CRITERIOS);
        $criterio->setAmbiguo(false);
        $criterio->addDistinct(true);

        $criterio->addInicioSubconsulta();
        $criterio->add('', 'true', '', false, "");

        $criterio->add(PdeNotaDebito::GEN_ATTR_PRV_PROVEEDOR_ID, $prv_proveedor_id, Criterio::IGUAL);
        $criterio->add(PdeNotaDebito::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
        $criterio->addFinSubconsulta();

        //----------------------------------------------
        // Aca va un inicio de subconsulta con el fin y despues los join
        //----------------------------------------------
        $criterio->addInicioSubconsulta();
        //$criterio->add('', 'true', '', false, "");
//        $criterio->add(PdeNotaDebitoTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $criterio->add(PdeNotaDebitoTipoEstado::GEN_ATTR_IMPUTABLE, 1, Criterio::IGUAL);
//        $criterio->add(PdeNotaDebitoTipoEstado::GEN_ATTR_TERMINAL, 0, Criterio::IGUAL);

        $criterio->addRealJoin(PdeNotaDebitoTipoEstado::GEN_TABLA, PdeNotaDebitoTipoEstado::GEN_ATTR_ID, PdeNotaDebito::GEN_ATTR_PDE_NOTA_DEBITO_TIPO_ESTADO_ID, 'LEFT JOIN');
        $criterio->addFinSubconsulta();

        $criterio->addTabla(PdeNotaDebito::GEN_TABLA);
        $criterio->setCriterios();

        $pde_nota_debitos = PdeNotaDebito::getPdeNotaDebitos(null, $criterio);

        return $pde_nota_debitos;
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

    public function getPdeComprobanteTipoEstado() {
        return $this->getPdeNotaDebitoTipoEstado();
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 21/09/2018 10:24
     * @return Float
     */
    public function getImporteDisponibleParaOrdenPago() {
        $importe_disponible = $this->getImporteTotal();
        $importe_saldado = $this->getSaldoImputado();

        $prv_descuento_financiero = $this->getPrvDescuentoFinanciero();
        $porcentaje_descuento_tentativo = $prv_descuento_financiero->getPorcentajeDescuento();

        $importe_disponible = $importe_disponible - ($importe_disponible * ($porcentaje_descuento_tentativo / 100));

        $pde_orden_pago_pde_nota_debitos = $this->getPdeOrdenPagoPdeNotaDebitosActivas();
        foreach ($pde_orden_pago_pde_nota_debitos as $pde_orden_pago_pde_nota_debito) {
            $importe_disponible -= $pde_orden_pago_pde_nota_debito->getImporteAfectado();
        }

        // se resta lo que ya esta pagado
        $importe_disponible = $importe_disponible - $importe_saldado;

        return round($importe_disponible, 2);
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 21/09/2018 10:24
     * @return Float
     */
    public function getImporteImponibleDisponibleParaOrdenPago($aplicar_df_tentativo = false) {

        return 0;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 05/01/2021 15:11
     * @return Float
     */
    public function getPorcentajeImponibleDecimal() {
        $importe_disponible = $this->getImporteTotal();
        $importe_imponible_disponible = $this->getImporteSubtotal(PdeComprobante::TIPO_SUBTOTAL_GRAVADO);

        $porcentaje_imponible_decimal = $importe_imponible_disponible / $importe_disponible;
        return $porcentaje_imponible_decimal;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 18/12/2019
     */
    public function getImporteDescuentoFinancieroAplicado() {
        $importe_afectado = 0;
        $pde_nota_debito_pde_nota_creditos = $this->getPdeNotaDebitoPdeNotaCreditos(null, null, true);
        foreach ($pde_nota_debito_pde_nota_creditos as $pde_nota_debito_pde_nota_credito) {
            $importe_afectado += $pde_nota_debito_pde_nota_credito->getImporteAfectado();
        }
        return $importe_afectado;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 18/12/2019
     */
    public function getImporteEnOtrasOP() {
        $importe = 0;
        $pde_factura_pde_recibos = $this->getPdeNotaDebitoPdeRecibos(null, null, true);
        foreach ($pde_factura_pde_recibos as $pde_factura_pde_recibo) {
            $importe_afectado += $pde_factura_pde_recibo->getImporteAfectado();
        }

        return $importe_afectado;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 10/10/2018 15:50
     * @return PdeOrdenPagoPdeNotaDebitos
     */
    public function getPdeOrdenPagoPdeNotaDebitosActivas() {
        $c = new Criterio();
        $c->addDistinct(false);
        $c->add(PdeOrdenPagoTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $c->addTabla(PdeOrdenPagoPdeNotaDebito::GEN_TABLA);
        $c->addRealJoin(PdeOrdenPago::GEN_TABLA, PdeOrdenPago::GEN_ATTR_ID, PdeOrdenPagoPdeNotaDebito::GEN_ATTR_PDE_ORDEN_PAGO_ID);
        $c->addRealJoin(PdeOrdenPagoTipoEstado::GEN_TABLA, PdeOrdenPagoTipoEstado::GEN_ATTR_ID, PdeOrdenPago::GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID);
        $c->addOrden(PdeOrdenPago::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $pde_orden_pago_pde_nota_debitos = $this->getPdeOrdenPagoPdeNotaDebitos(null, $c, true);
        return $pde_orden_pago_pde_nota_debitos;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 21/09/2018 10:24
     * @return Float
     */
    public function getImporteEnOrdenPago($pde_orden_pago = false) {
        $importe_en_orden_pago = 0;
        $criterio = new Criterio();
        $criterio->add(PdeOrdenPagoTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);

        if ($pde_orden_pago) {
            $criterio->add('pde_orden_pago_id', $pde_orden_pago->getId(), Criterio::IGUAL);
        }
        $criterio->addTabla(PdeOrdenPagoPdeNotaDebito::GEN_TABLA);
        $criterio->addRealJoin(PdeOrdenPago::GEN_TABLA, PdeOrdenPago::GEN_ATTR_ID, PdeOrdenPagoPdeNotaDebito::GEN_ATTR_PDE_ORDEN_PAGO_ID);
        $criterio->addRealJoin(PdeOrdenPagoTipoEstado::GEN_TABLA, PdeOrdenPagoTipoEstado::GEN_ATTR_ID, PdeOrdenPago::GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID);
        $criterio->setCriterios();

        $pde_orden_pago_pde_nota_debitos = $this->getPdeOrdenPagoPdeNotaDebitos(null, $criterio, true);

        foreach ($pde_orden_pago_pde_nota_debitos as $pde_orden_pago_pde_nota_debito) {
            $importe_en_orden_pago += $pde_orden_pago_pde_nota_debito->getImporteAfectado();
        }

        return $importe_en_orden_pago;
    }

    /* Método getInfoBtnVolver */

    static function getInfoBtnVolver($indice = false) {
        $array = array(
            'url' => 'pde_nota_debito_gestion.php',
            'label' => 'Volver al Listado',
        );

        return ($indice) ? $array[$indice] : $array;
    }

    /**
     * Metodo que retorna los comprobantes vinculados al comprobante por conciliacion
     */
    public function getPdeComprobantesVinculadosPorConciliacion() {
        $pde_nota_debito_pde_nota_creditos = $this->getPdeNotaDebitoPdeNotaCreditos(null, null, true);
        $pde_nota_debito_pde_recibos = $this->getPdeNotaDebitoPdeRecibos(null, null, true);

        $pde_nota_creditos = $this->getPdeNotaCreditosXPdeNotaDebitoPdeNotaCredito(null, null, true);
        $pde_recibos = $this->getPdeREcibosXPdeNotaDebitoPdeRecibo(null, null, true);

        $arr_comprobantes['INTERMEDIO'] = array_merge($pde_nota_debito_pde_nota_creditos, $pde_nota_debito_pde_recibos);
        $arr_comprobantes['EXTREMO'] = array_merge($pde_nota_creditos, $pde_recibos);

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
     * Metodo que retorna las ordenes de pago activas vinculadas
     */
    public function getPdeOrdenPagoPdeComprobanteActivas() {
        $pde_orden_pago_pde_nota_debitos = $this->getPdeOrdenPagoPdeNotaDebitosActivas();

        $arr_comprobantes['INTERMEDIO'] = $pde_orden_pago_pde_nota_debitos;

        return $arr_comprobantes;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiComprasCbteImporteTotalOperacion() {
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
      Se procedera a informar los importes que no integren el hecho imponible. Dicho importe podrá ser cero.
     */
    public function getAfipCitiComprasCbteImporteTotalConceptos() {
        $importe_base_imponible_no_gravado = $this->getImporteSubtotal(PdeComprobante::TIPO_SUBTOTAL_NO_GRAVADO);

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
    public function getAfipCitiComprasCbteImporteOperacionesExentas() {
        $importe_base_imponible_exento = $this->getImporteSubtotal(PdeComprobante::TIPO_SUBTOTAL_EXENTO);

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
    public function getAfipCitiComprasCbteImportePercepcionIva($arr_tributo_full = false) {
        $importe = $this->getImporteTributoImporte($codigo = PdeTributo::TRIBUTO_PERCEPCIONES_IVA, $arr_tributo_full);
        $afip_citi_importe_percepciones_iva = $importe;

        $afip_citi_importe_percepciones_iva = round($afip_citi_importe_percepciones_iva, 2);
        $afip_citi_importe_percepciones_iva = Gral::completar_decimales($afip_citi_importe_percepciones_iva);

        $afip_citi_importe_percepciones_iva = str_replace(".", '', $afip_citi_importe_percepciones_iva);
        $afip_citi_importe_percepciones_iva = str_pad($afip_citi_importe_percepciones_iva, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_percepciones_iva = substr($afip_citi_importe_percepciones_iva, 0, 15);

        return $afip_citi_importe_percepciones_iva;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiComprasCbteImportePercepcionesImpuestosNacionales($arr_tributo_full = false) {
        $importe_perc_impuestos_nacionales = $this->getImporteTributoImporte($codigo = PdeTributo::TRIBUTO_PERCEPCIONES_IMPUESTOS_NACIONALES, $arr_tributo_full);
        $importe_perc_ganancias = $this->getImporteTributoImporte($codigo = PdeTributo::TRIBUTO_PERCEPCIONES_GANANCIAS, $arr_tributo_full);
        $afip_citi_importe_percepciones_impuestos_nacionales = $importe_perc_impuestos_nacionales + $importe_perc_ganancias;

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
     * @modificado 02/10/2018
     */
    public function getAfipCitiComprasCbteImportePercepcionesIngresosBrutos($arr_tributo_full = false) {
        $afip_citi_importe_percepciones_ingresos_brutos_mnes = $this->getImportePercepcionIIBBMnes($arr_tributo_full);
        $afip_citi_importe_percepciones_ingresos_brutos_bsas = $this->getImportePercepcionIIBBBsAs($arr_tributo_full);

        $afip_citi_importe_percepciones_ingresos_brutos = $afip_citi_importe_percepciones_ingresos_brutos_mnes + $afip_citi_importe_percepciones_ingresos_brutos_bsas;

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
    public function getAfipCitiComprasCbteImportePercepcionesImpuestosMunicipales($arr_tributo_full = false) {
        $importe = $this->getImporteTributoImporte($codigo = PdeTributo::TRIBUTO_PERCEPCIONES_IMPUESTOS_MUNICIPALES, $arr_tributo_full);
        $afip_citi_importe_percepciones_impuestos_municipales = $importe;

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
    public function getAfipCitiComprasCbteImporteImpuestosInternos($arr_tributo_full = false) {
        $importe = $this->getImporteTributoImporte($codigo = PdeTributo::TRIBUTO_IMPUESTOS_INTERNOS, $arr_tributo_full);
        $afip_citi_importe_impuestos_internos = $importe;

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
    public function getAfipCitiComprasCbteImporteCfComputable() {
        $importe = $this->getImporteIvaImporte(); // si no se prrorratea debe indicarse el valor del IVA liquidado, aqui hay que analizar opciones de PRORRATEO del CF (Global o Por Comprobante)
        $afip_citi_importe_cf_computable = $importe;

        $afip_citi_importe_cf_computable = round($afip_citi_importe_cf_computable, 2);
        $afip_citi_importe_cf_computable = Gral::completar_decimales($afip_citi_importe_cf_computable);

        $afip_citi_importe_cf_computable = str_replace(".", '', $afip_citi_importe_cf_computable);
        $afip_citi_importe_cf_computable = str_pad($afip_citi_importe_cf_computable, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_cf_computable = substr($afip_citi_importe_cf_computable, 0, 15);

        return $afip_citi_importe_cf_computable;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiComprasCbteImporteOtrosTributos($arr_tributo_full = false) {
        $importe = $this->getImporteTributoImporte($codigo = PdeTributo::TRIBUTO_OTROS_TRIBUTOS, $arr_tributo_full);
        $afip_citi_importe_otros_tributos = $importe;

        $afip_citi_importe_otros_tributos = round($afip_citi_importe_otros_tributos, 2);
        $afip_citi_importe_otros_tributos = Gral::completar_decimales($afip_citi_importe_otros_tributos);

        $afip_citi_importe_otros_tributos = str_replace(".", '', $afip_citi_importe_otros_tributos);
        $afip_citi_importe_otros_tributos = str_pad($afip_citi_importe_otros_tributos, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_otros_tributos = substr($afip_citi_importe_otros_tributos, 0, 15);

        return $afip_citi_importe_otros_tributos;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 27/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 29/09/2018
     */
    public function getAfipCitiComprasCbteImporteIvaComision() {
        $afip_citi_importe_iva_comision = "0.00"; //revisar logica.

        $afip_citi_importe_iva_comision = round($afip_citi_importe_iva_comision, 2);
        $afip_citi_importe_iva_comision = Gral::completar_decimales($afip_citi_importe_iva_comision);

        $afip_citi_importe_iva_comision = str_replace(".", '', $afip_citi_importe_iva_comision);
        $afip_citi_importe_iva_comision = str_pad($afip_citi_importe_iva_comision, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_iva_comision = substr($afip_citi_importe_iva_comision, 0, 15);

        return $afip_citi_importe_iva_comision;
    }

    /*
     * @creado_por Esteban Martinez
     * @creado 10/10/2018
     */

    public function getAfipCitiVentasDenominacionVendedor() {
        $denominacion_vendedor = $this->getPersonaDescripcion();

        $find = array('/[^A-Za-z0-9\- <>]/');
        $repl = array('');
        $denominacion_vendedor = preg_replace($find, $repl, $denominacion_vendedor);

        //se rellena
        $denominacion_vendedor = str_pad($denominacion_vendedor, 30, " ", STR_PAD_RIGHT);
        //se corta
        $denominacion_vendedor = substr($denominacion_vendedor, 0, 30);
        return $denominacion_vendedor;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 05/12/2018 11:06
     * Metodo que verifica la existencia o no de un numero de comprobante para un mismo proveedor
     * @return PdeNotaDebito
     */
    static function getPdeNotaDebitoXProveedorYNumero($prv_proveedor_id, $numero_comprobante_completo) {
        $c = new Criterio();
        $c->add(PdeNotaDebitoTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL);
        $c->add(PrvProveedor::GEN_ATTR_ID, $prv_proveedor_id, Criterio::IGUAL);
        $c->add(PdeNotaDebito::GEN_ATTR_NUMERO_NOTA_DEBITO_COMPLETO, $numero_comprobante_completo, Criterio::IGUAL);
        $c->addTabla(PdeNotaDebito::GEN_TABLA);
        $c->addRealJoin(PdeNotaDebitoTipoEstado::GEN_TABLA, PdeNotaDebitoTipoEstado::GEN_ATTR_ID, PdeNotaDebito::GEN_ATTR_PDE_NOTA_DEBITO_TIPO_ESTADO_ID);
        $c->addRealJoin(PrvProveedor::GEN_TABLA, PrvProveedor::GEN_ATTR_ID, PdeNotaDebito::GEN_ATTR_PRV_PROVEEDOR_ID);
        $c->setCriterios();

        $p = new Paginador(1, 1);

        $pde_nota_debitos = PdeNotaDebito::getPdeNotaDebitos($p, $c);
        foreach ($pde_nota_debitos as $pde_nota_debito) {
            return $pde_nota_debito;
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 09/06/202023:42
     * Metodo que retorna un array con reclamos vinculados al comprobante
     */
    public function getArrReclamosComprobante() {
        $array_reclamos = array();
        return $array_reclamos;
    }

    /**
     * Actualiza el resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function setActualizarResumenComprobante() {
        $pde_nota_debito_importe = $this->getPdeNotaDebitoImporte();

        if (!$pde_nota_debito_importe) {
            $pde_nota_debito_importe = new PdeNotaDebitoImporte();
        }

        $importe_subtotal = $this->getPdeNotaDebitoSubtotal(false);
        $importe_iva = $this->getPdeNotaDebitoIva();
        $importe_tributo = $this->getPdeNotaDebitoTributo();
        $importe_total = $importe_subtotal + $importe_iva + $importe_tributo;

        $pde_nota_debito_importe->setDescripcion($this->getNumeroComprobanteCompleto());
        $pde_nota_debito_importe->setPdeNotaDebitoId($this->getId());
        $pde_nota_debito_importe->setImporteSubtotal($importe_subtotal);
        $pde_nota_debito_importe->setImporteIva($importe_iva);
        $pde_nota_debito_importe->setImporteTributo($importe_tributo);
        $pde_nota_debito_importe->setImporteTotal($importe_total);
        $pde_nota_debito_importe->setEstado(1);
        $pde_nota_debito_importe->save();

        return $pde_nota_debito_importe;
    }

    /**
     * Retorna un resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function getResumenComprobante() {
        $o = $this->getPdeNotaDebitoImporte();
        if ($o) {
            return $o;
        }        

        return new PdeNotaDebitoImporte();
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

}

?>