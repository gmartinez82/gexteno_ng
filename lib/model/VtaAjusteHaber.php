<?php

require_once "base/BVtaAjusteHaber.php";

class VtaAjusteHaber extends BVtaAjusteHaber {

    const PREFIJO_AJUSTE_HABER = 'AJH-';

    public function getTipoComprobanteSiglas() {
        return "AJT";
    }

    public function getDescripcion() {
        $descripcion = '#' . $this->getId() . ' - ' . $this->getPersonaDescripcion();
        return $descripcion;
    }

    /**
     * Metodo que retorna el numero completo del comprobante
     * @return string
     */
    public function getNumeroAjusteHaberCompletoFormateado() {
        $numero_punto_venta = str_pad($this->getVtaPuntoVenta()->getNumero(), 4, 0, STR_PAD_LEFT);
        $numero_ajuste_haber = str_pad($this->getNumeroAjusteHaber(), 8, 0, STR_PAD_LEFT);

        $numero_ajuste_completo = $numero_punto_venta . '-' . $numero_ajuste_haber;
        return $numero_ajuste_completo;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 05/03/2018 09:00 hs.
     * Metodo que genera un ajuste item.
     * @return Obj VtaAjusteHaber
     */
    static function setInicializarVtaAjusteHaberItem($cmb_vta_tipo_ajuste_haber_id, $cmb_vta_tipo_origen_ajuste_haber_id, $txt_fecha, $cmb_vta_preventista_id, $cmb_vta_ajuste_haber_condicion_pago_id, $cmb_vta_ajuste_haber_tipo_pago_id, $gral_empresa_id, $vta_punto_venta_id, $fnd_caja_id, $cli_cliente_id, $codigo_op_cliente, $nota_interna, $nota_publica, $var_sesion_random, $txt_cantidads, $txt_descripcions, $txt_referencias, $txt_importe_unitarios, $gral_tipo_iva_ids, $gral_forma_pago_ids, $vta_ajuste_haber_concepto_ids, $observacion = '') {

        // se determina el origen del comprobante
        //$vta_tipo_origen_ajuste_haber = VtaTipoOrigenAjusteHaber::getOxCodigo(VtaTipoOrigenAjusteHaber::ORIGEN_ITEM); // se toma por parametro
        
        $gral_tipo_documento_cuit = GralTipoDocumento::getOxCodigo(GralTipoDocumento::TIPO_CUIT);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));

        $cli_cliente = CliCliente::getOxId($cli_cliente_id);

        $vta_ajuste_haber = new VtaAjusteHaber();
        $vta_ajuste_haber->setVtaTipoAjusteHaberId($cmb_vta_tipo_ajuste_haber_id);
        //$vta_ajuste_haber->setVtaTipoOrigenAjusteHaberId($vta_tipo_origen_ajuste_haber->getId());
        $vta_ajuste_haber->setVtaTipoOrigenAjusteHaberId($cmb_vta_tipo_origen_ajuste_haber_id);
        $vta_ajuste_haber->setVtaPreventistaId($cmb_vta_preventista_id);
        $vta_ajuste_haber->setVtaAjusteHaberCondicionPagoId($cmb_vta_ajuste_haber_condicion_pago_id);
        $vta_ajuste_haber->setVtaAjusteHaberTipoPagoId($cmb_vta_ajuste_haber_tipo_pago_id);
        $vta_ajuste_haber->setGralEmpresaId($gral_empresa_id);
        $vta_ajuste_haber->setVtaPuntoVentaId($vta_punto_venta_id);
        $vta_ajuste_haber->setFndCajaId($fnd_caja_id);
        $vta_ajuste_haber->setFechaEmision($txt_fecha);
        $vta_ajuste_haber->setCodigoOpCliente($codigo_op_cliente);
        if ($gral_mes) {
            $vta_ajuste_haber->setGralMesId($gral_mes->getId());
        }
        $vta_ajuste_haber->setAnio(date('Y'));
        $vta_ajuste_haber->setNotaInterna($nota_interna);
        $vta_ajuste_haber->setNotaPublica($nota_publica);
        $vta_ajuste_haber->setObservacion($observacion);
        $vta_ajuste_haber->setEstado(1);
        $vta_ajuste_haber->save();

        // --------------------------------------------------------------------
        // se setea el codigo del ajuste
        // --------------------------------------------------------------------
        $vta_ajuste_haber->setCodigo(self::PREFIJO_AJUSTE_HABER . str_pad($vta_ajuste_haber->getId(), 8, 0, STR_PAD_LEFT));
        $vta_ajuste_haber->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial del ajuste
        // --------------------------------------------------------------------
        $vta_ajuste_haber_estado = $vta_ajuste_haber->setVtaAjusteHaberEstado(VtaAjusteHaberTipoEstado::TIPO_GENERADO, $observacion);
        $vta_ajuste_haber_estado = $vta_ajuste_haber->setVtaAjusteHaberEstado(VtaAjusteHaberTipoEstado::TIPO_PENDIENTE, $observacion = '');

        // --------------------------------------------------------------------
        // se agregan los items al ajuste
        // --------------------------------------------------------------------
        if (!empty($vta_ajuste_haber->getId())) {
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
                
                // Cargo el detalle del Ajuste
                $vta_ajuste_haber_item = new VtaAjusteHaberItem();

                $vta_ajuste_haber_item->setDescripcion($txt_descripcions[$key]);
                $vta_ajuste_haber_item->setVtaAjusteHaberId($vta_ajuste_haber->getId());
                $vta_ajuste_haber_item->setGralFpFormaPagoId($gral_forma_pago_ids[$key]);
                $vta_ajuste_haber_item->setVtaAjusteHaberConceptoId($vta_ajuste_haber_concepto_ids[$key]);
                $vta_ajuste_haber_item->setCantidad(1);

                $vta_ajuste_haber_item->setGralMonedaId($vta_recibo_gral_moneda_id);
                $vta_ajuste_haber_item->setImporteUnitarioReal($importe_unitario_real);
                $vta_ajuste_haber_item->setImporteUnitario($importe_unitario);
                $vta_ajuste_haber_item->setTipoCambio($tipo_cambio);
                $vta_ajuste_haber_item->setTipoCambioReal($tipo_cambio_real);
                
                $vta_ajuste_haber_item->setCodigo($txt_referencias[$key]);
                $vta_ajuste_haber_item->setObservacion('');
                $vta_ajuste_haber_item->setEstado(1);

                $vta_ajuste_haber_item->save();

                // -------------------------------------------------------------
                // Se registra el detalle del cheque si existe
                // -------------------------------------------------------------
                $arr_vta_ajuste_haber_cheque_infos = Gral::getSes('vta_ajuste_haber_cheque_info' . $var_sesion_random);

                if (!is_null($arr_vta_ajuste_haber_cheque_infos[$key])) {
                    $vta_ajuste_haber_item_cheque = new VtaAjusteHaberItemCheque();

                    $arr = $arr_vta_ajuste_haber_cheque_infos[$key];
                    $cheque_id = $arr['cheque_id'];

                    $vta_ajuste_haber_item_cheque->setVtaAjusteHaberId($vta_ajuste_haber->getId());
                    $vta_ajuste_haber_item_cheque->setVtaAjusteHaberItemId($vta_ajuste_haber_item->getId());
                    $vta_ajuste_haber_item_cheque->setGralBancoId($arr['gral_banco_id']);
                    $vta_ajuste_haber_item_cheque->setDescripcion($arr['descripcion']);
                    $vta_ajuste_haber_item_cheque->setEntregador($arr['entregador']);
                    $vta_ajuste_haber_item_cheque->setFirmante($arr['firmante']);
                    $vta_ajuste_haber_item_cheque->setNumeroCheque($arr['numero_cheque']);
                    $vta_ajuste_haber_item_cheque->setFechaCobro($arr['fecha_cobro']);
                    $vta_ajuste_haber_item_cheque->setFechaEmision($arr['fecha_emision']);
                    $vta_ajuste_haber_item_cheque->setEstado(1);

                    $vta_ajuste_haber_item_cheque->save();

                    // -------------------------------------------------------------
                    // inicializa cheque
                    // -------------------------------------------------------------
                    $fnd_chq_cheque = FndChqCheque::inicializarFndChqChequeDesdeVtaAjusteHaber($cheque_id, $vta_ajuste_haber_item, $arr);
                }

                // -------------------------------------------------------------
                // Se registra el detalle de la retencion si existe
                // -------------------------------------------------------------
                $arr_vta_ajuste_haber_retencion_infos = Gral::getSes('vta_ajuste_haber_retencion_info' . $var_sesion_random);

                if (!is_null($arr_vta_ajuste_haber_retencion_infos[$key])) {
                    $vta_ajuste_haber_item_retencion = new VtaAjusteHaberItemRetencion();

                    $arr = $arr_vta_ajuste_haber_retencion_infos[$key];

                    $vta_ajuste_haber_item_retencion->setVtaAjusteHaberId($vta_ajuste_haber->getId());
                    $vta_ajuste_haber_item_retencion->setVtaAjusteHaberItemId($vta_ajuste_haber_item->getId());
                    $vta_ajuste_haber_item_retencion->setDescripcion($arr['descripcion']);
                    $vta_ajuste_haber_item_retencion->setNumeroComprobante($arr['numero_comprobante']);
                    $vta_ajuste_haber_item_retencion->setFechaEmision($arr['fecha_emision']);
                    $vta_ajuste_haber_item_retencion->setImporteBaseImponible($arr['importe_base_imponible']);
                    $vta_ajuste_haber_item_retencion->setImporteRetencion($importe_unitario);
                    $vta_ajuste_haber_item_retencion->setObservacion($arr['observacion']);
                    $vta_ajuste_haber_item_retencion->setEstado(1);

                    $vta_ajuste_haber_item_retencion->save();
                }
            }
        }

        // --------------------------------------------------------------------
        // se vincula el cliente al Ajuste
        // --------------------------------------------------------------------        
        $vta_ajuste_haber->setCliClienteId($cli_cliente->getId());
        $vta_ajuste_haber->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
        $vta_ajuste_haber->setGralTipoPersoneriaId($cli_cliente->getGralTipoPersoneriaId());
        $vta_ajuste_haber->setPersonaDescripcion($cli_cliente->getDescripcion());
        if ($gral_tipo_documento_cuit) {
            $vta_ajuste_haber->setGralTipoDocumentoId($gral_tipo_documento_cuit->getId());
        }
        $vta_ajuste_haber->setPersonaDocumento($cli_cliente->getCuit());
        $vta_ajuste_haber->setPersonaEmail($cli_cliente->getEmail());
        $vta_ajuste_haber->setRazonSocial($cli_cliente->getRazonSocial());
        $vta_ajuste_haber->setDomicilioLegal($cli_cliente->getDomicilioLegal());
        $vta_ajuste_haber->setCuit($cli_cliente->getCuit());
        $vta_ajuste_haber->save();

        // --------------------------------------------------------------------
        // se determina el tipo de Ajuste
        // --------------------------------------------------------------------
        //$vta_tipo_ajuste = self::getDeterminacionTipoAjuste($cli_cliente_id);
        //$vta_ajuste_haber->setVtaTipoAjusteId($vta_tipo_ajuste->getId());
        //$vta_ajuste_haber->save();
        
        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_ajuste_haber->setActualizarResumenComprobante();

        return $vta_ajuste_haber;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 01/02/2022 09:00 hs.
     * Metodo que genera una nota de credito (ajuste haber).
     * @return Obj VtaAjusteHaber
     */
    static function setInicializarVtaAjusteHaberDesdeAjusteDebe($vta_ajuste_debe, $vta_ajuste_debe_vta_orden_venta_ids, $vta_ajuste_debe_vta_orden_venta_cantidads, $observacion = '', $afectar_stock = 0, $pan_panol_id = 0) {

        // se determina el origen del comprobante
        $vta_tipo_origen_ajuste_haber = VtaTipoOrigenAjusteHaber::getOxCodigo(VtaTipoOrigenAjusteHaber::ORIGEN_ANULACION_AJUSTE_DEBE);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));
        ;
        $cli_cliente = $vta_ajuste_debe->getCliCliente();

        $vta_ajuste_haber = new VtaAjusteHaber();
        $vta_ajuste_haber->setVtaTipoOrigenAjusteHaberId($vta_tipo_origen_ajuste_haber->getId());

        if ($vta_ajuste_debe) {
            // se toman valores de la factura que da origen a la nc
            $vta_ajuste_haber->setGralCondicionIvaId($vta_ajuste_debe->getGralCondicionIvaId());
            $vta_ajuste_haber->setGralTipoPersoneriaId($vta_ajuste_debe->getGralTipoPersoneriaId());
            //$vta_ajuste_haber->setGralActividadId($vta_ajuste_debe->getGralActividadId());
            //$vta_ajuste_haber->setGralEscenarioId($vta_ajuste_debe->getGralEscenarioId());
            //$vta_ajuste_haber->setGralFpFormaPagoId($vta_ajuste_debe->getGralFpFormaPagoId());
            $vta_ajuste_haber->setVtaPreventistaId($vta_ajuste_debe->getVtaPreventistaId());
            $vta_ajuste_haber->setGralEmpresaId($vta_ajuste_debe->getGralEmpresaId());
            $vta_ajuste_haber->setVtaPuntoVentaId($vta_ajuste_debe->getVtaPuntoVentaId());

            $vta_ajuste_haber->setPersonaDescripcion($vta_ajuste_debe->getPersonaDescripcion());
            $vta_ajuste_haber->setGralTipoDocumentoId($vta_ajuste_debe->getGralTipoDocumentoId());
            $vta_ajuste_haber->setPersonaDocumento($vta_ajuste_debe->getPersonaDocumento());
            $vta_ajuste_haber->setPersonaEmail($vta_ajuste_debe->getPersonaEmail());

            $vta_ajuste_haber->setRazonSocial($vta_ajuste_debe->getRazonSocial());
            $vta_ajuste_haber->setDomicilioLegal($vta_ajuste_debe->getDomicilioLegal());
            $vta_ajuste_haber->setCuit($vta_ajuste_debe->getCuit());


            $vta_punto_venta = $vta_ajuste_debe->getVtaPuntoVenta();
            $vta_ajuste_haber->setNumeroPuntoVenta(str_pad($vta_punto_venta->getNumero(), 4, 0, STR_PAD_LEFT));
        }

        $vta_ajuste_haber->setCliClienteId($cli_cliente->getId());

        // --------------------------------------------------------------------
        // se determina el tipo de NC
        // --------------------------------------------------------------------
        $vta_tipo_ajuste_haber = self::getDeterminacionTipoAjusteHaber($cli_cliente->getId());
        $vta_ajuste_haber->setVtaTipoAjusteHaberId($vta_tipo_ajuste_haber->getId());

        $vta_ajuste_haber->setFechaEmision(Gral::getFechaActual());
        //$vta_ajuste_haber->setFechaVencimiento(Gral::getFechaActual());
        if ($gral_mes) {
            $vta_ajuste_haber->setGralMesId($gral_mes->getId());
        }
        $vta_ajuste_haber->setAnio(date('Y'));
        $vta_ajuste_haber->setObservacion($observacion);
        $vta_ajuste_haber->setEstado(1);
        $vta_ajuste_haber->save();

        // --------------------------------------------------------------------
        // se setea el codigo de la nota de credito (ajuste haber)
        // --------------------------------------------------------------------
        $vta_ajuste_haber->setCodigo(self::PREFIJO_AJUSTE_HABER . str_pad($vta_ajuste_haber->getId(), 8, 0, STR_PAD_LEFT));
        $vta_ajuste_haber->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial de la nota de credito (ajuste haber)
        // --------------------------------------------------------------------
        $vta_ajuste_haber_estado = $vta_ajuste_haber->setVtaAjusteHaberEstado(VtaAjusteHaberTipoEstado::TIPO_GENERADO, $observacion);
        $vta_ajuste_haber_estado = $vta_ajuste_haber->setVtaAjusteHaberEstado(VtaAjusteHaberTipoEstado::TIPO_PENDIENTE, $observacion);

        // --------------------------------------------------------------------
        // se agregan los items a la NC (ajuste haber)
        // --------------------------------------------------------------------
        if (!empty($vta_ajuste_haber->getId())) {
            foreach ($vta_ajuste_debe_vta_orden_venta_ids as $vta_ajuste_debe_vta_orden_venta_id) {

                $vta_ajuste_debe_vta_orden_venta = VtaAjusteDebeVtaOrdenVenta::getOxId($vta_ajuste_debe_vta_orden_venta_id);
                $vta_ajuste_debe = $vta_ajuste_debe_vta_orden_venta->getVtaAjusteDebe();

                $ins_insumo = $vta_ajuste_debe_vta_orden_venta->getInsInsumo();
                $ins_unidad_medida_id = $vta_ajuste_debe_vta_orden_venta->getInsUnidadMedidaId();
                $cantidad_a_debitar = $vta_ajuste_debe_vta_orden_venta_cantidads[$vta_ajuste_debe_vta_orden_venta->getId()];

                // Cargo el detalle de la NC
                $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta = new VtaAjusteHaberVtaAjusteDebeVtaOrdenVenta();

                $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->setDescripcion($ins_insumo->getDescripcion());
                $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->setVtaAjusteHaberId($vta_ajuste_haber->getId());
                $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->setVtaAjusteDebeVtaOrdenVentaId($vta_ajuste_debe_vta_orden_venta_id);
                $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->setInsInsumoId($vta_ajuste_debe_vta_orden_venta->getInsInsumoId());
                $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->setInsUnidadMedidaId($ins_unidad_medida_id);
                $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->setCantidad($cantidad_a_debitar);
                $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->setImporteUnitario($vta_ajuste_debe_vta_orden_venta->getImporteUnitario());
                $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->setCodigo('');
                $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->setObservacion('');
                $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->setEstado(1);
                $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->setGralTipoIvaId($vta_ajuste_debe_vta_orden_venta->getGralTipoIvaId());

                $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->save();

                $vta_ajuste_debe_vta_orden_venta_importe_iva = $vta_ajuste_debe_vta_orden_venta->getImporteIva($cantidad_a_debitar);
                $vta_ajuste_haber_importe_iva += $vta_ajuste_debe_vta_orden_venta_importe_iva;

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
                                        $ins_insumo->getId(), $panol_origen = $pan_panol_id, $panol_destino = $pan_panol_id, $cantidad_a_debitar, $observacion = 'Reingreso por devolucion con ' . $vta_ajuste_haber->getCodigo() . ' de Cliente ' . $cli_cliente->getDescripcion(), $ins_stock_tipo_movimiento_codigo
                        );
                        // ---------------------------------------------------------------------
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
                            $cantidad_composicion = $ins_insumo_composicion->getCantidad() * $cantidad_a_debitar;

                            // -------------------------------------------------------------
                            // se registra pedido para control y actualizacion de stock de la composicion
                            // -------------------------------------------------------------
                            $ins_stock_tipo_movimiento_codigo = InsStockTipoMovimiento::TIPO_MOV_REINGRESO;

                            $pdi_pedido = PdiPedido::setPdiPedidoPorDevolucionDeInsumoEnNC(
                                            $ins_insumo_hijo->getId(), $panol_origen = $pan_panol_id, $panol_destino = $pan_panol_id, $cantidad_composicion, $observacion = 'Reingreso por devolucion de '.$ins_insumo->getDescripcion().' (COMBO) con ' . $vta_ajuste_haber->getCodigo().' de Cliente '.$cli_cliente->getDescripcion(), $ins_stock_tipo_movimiento_codigo
                            );
                        }
                    }
                }
            }
        }

        // --------------------------------------------------------------------
        // se vinculan tributos a la nota de credito (vta_ajuste_haber_vta_ajuste_debe_vta_tributo)
        // --------------------------------------------------------------------
        $vta_ajuste_haber_importe_imponible = $vta_ajuste_haber->getVtaAjusteHaberSubtotal();
        $vta_ajuste_debe_vta_tributos = $vta_ajuste_debe->getVtaAjusteDebeVtaTributos();

        foreach ($vta_ajuste_debe_vta_tributos as $vta_ajuste_debe_vta_tributo) {

            $alicuota_decimal = $vta_ajuste_debe_vta_tributo->getAlicuotaDecimal();
            $vta_ajuste_haber_importe_tributo = round($vta_ajuste_haber_importe_imponible * $alicuota_decimal, 2);

            $vta_ajuste_haber_vta_ajuste_debe_vta_tributo = new VtaAjusteHaberVtaAjusteDebeVtaTributo();

            $vta_ajuste_haber_vta_ajuste_debe_vta_tributo->setVtaAjusteHaberId($vta_ajuste_haber->getId());
            $vta_ajuste_haber_vta_ajuste_debe_vta_tributo->setVtaAjusteDebeVtaTributoId($vta_ajuste_debe_vta_tributo->getId());
            $vta_ajuste_haber_vta_ajuste_debe_vta_tributo->setImporteImponible($vta_ajuste_haber_importe_imponible);
            $vta_ajuste_haber_vta_ajuste_debe_vta_tributo->setImporteTributo($vta_ajuste_haber_importe_tributo);
            $vta_ajuste_haber_vta_ajuste_debe_vta_tributo->setAlicuotaPorcentual($vta_ajuste_debe_vta_tributo->getAlicuotaPorcentual());
            $vta_ajuste_haber_vta_ajuste_debe_vta_tributo->setAlicuotaDecimal($vta_ajuste_debe_vta_tributo->getAlicuotaDecimal());
            $vta_ajuste_haber_vta_ajuste_debe_vta_tributo->setEstado(1);

            $vta_ajuste_haber_vta_ajuste_debe_vta_tributo->save();
        }

        // --------------------------------------------------------------------
        // se vinculan la nota de credito (ajuste haber) a la factura (ajuste debe)
        // --------------------------------------------------------------------
        $vta_ajuste_debe_importe_disponible = $vta_ajuste_debe->getSaldoImputable();

        $vta_ajuste_haber_importe_a_imputar = $vta_ajuste_haber_importe_imponible + $vta_ajuste_haber_importe_iva + $vta_ajuste_haber_importe_tributo;

        // Genero la relacion
        $vta_ajuste_debe_vta_ajuste_haber = new VtaAjusteDebeVtaAjusteHaber();

        $vta_ajuste_debe_vta_ajuste_haber->setVtaAjusteHaberId($vta_ajuste_haber->getId());
        $vta_ajuste_debe_vta_ajuste_haber->setVtaAjusteDebeId($vta_ajuste_debe->getId());
        $vta_ajuste_debe_vta_ajuste_haber->setEstado(1);

        // *********************************************************************
        // Buscar solucion a la comparacion. 
        // Por error de decimales carga mal los estados.
        // *********************************************************************

        if ((int) (round($vta_ajuste_haber_importe_a_imputar, 2) * 100) < (int) (round($vta_ajuste_debe_importe_disponible, 2) * 100)) {

            $vta_ajuste_debe_vta_ajuste_haber->setImporteAfectado($vta_ajuste_haber_importe_a_imputar);

            // Cambio el estado del Recibo
            $vta_ajuste_debe_tipo_estado = $vta_ajuste_debe->setVtaAjusteDebeEstado(VtaAjusteDebeTipoEstado::TIPO_ANULADO_PARCIAL, '');
        } else {
            $vta_ajuste_debe_vta_ajuste_haber->setImporteAfectado($vta_ajuste_debe_importe_disponible);

            // Cambio el estado del Recibo
            $vta_ajuste_debe_tipo_estado = $vta_ajuste_debe->setVtaAjusteDebeEstado(VtaAjusteDebeTipoEstado::TIPO_ANULADO, '');
        }
        $vta_ajuste_haber_importe_a_imputar -= $vta_ajuste_debe_importe_disponible;
        $vta_ajuste_debe_vta_ajuste_haber->save();


        //$vta_ajuste_haber = VtaAjusteHaber::getOxId($vta_ajuste_haber_id);

        // ----------------------------------------------------------------------
        // Cambio el estado de la ND
        // ----------------------------------------------------------------------
        if ((int) ($vta_ajuste_haber_importe_a_imputar * 100) > 0) {
            $vta_ajuste_haber->setVtaAjusteHaberEstado(VtaAjusteHaberTipoEstado::TIPO_IMPUTADO_PARCIAL, '');
        } else {
            $vta_ajuste_haber->setVtaAjusteHaberEstado(VtaAjusteHaberTipoEstado::TIPO_IMPUTADO, '');
        }

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_ajuste_haber->setActualizarResumenComprobante();

        return $vta_ajuste_haber;
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 26/08/2018 16:53 hs.
     * Metodo que genera un ajuste por una venta inmediata de contado.
     * @return Obj VtaAjusteHaber
     */
    static function setInicializarVtaAjusteHaberDesdeVentaInmediataContado($vta_presupuesto = false, $vta_ajuste_debe, $observacion = '') {

        $cli_cliente_id = $vta_ajuste_debe->getCliClienteId();
        $gral_empresa_id = $vta_ajuste_debe->getGralEmpresaId();
        $vta_punto_venta_id = $vta_ajuste_debe->getVtaPuntoVentaId();
        $gral_fp_forma_pago_id = $vta_ajuste_debe->getGralFpFormaPagoId();
        $importe_total = $vta_ajuste_debe->getSaldoImputable();
        $vta_preventista_id = $vta_ajuste_debe->getVtaPreventistaId();

        if ($cli_cliente_id != 'null') {
            $cli_cliente = CliCliente::getOxId($cli_cliente_id);
        }
        
        // ---------------------------------------------------------------------
        // se determina la condicion de pago
        // ---------------------------------------------------------------------
        $vta_ajuste_haber_condicion_pago = VtaAjusteHaberCondicionPago::getOxCodigo(VtaAjusteHaberCondicionPago::TIPO_EN_TERMINO);

        // ---------------------------------------------------------------------
        // se determina el tipo de pago
        // ---------------------------------------------------------------------
        $vta_ajuste_haber_tipo_pago = VtaAjusteHaberTipoPago::getOxCodigo(VtaAjusteHaberTipoPago::TIPO_COBRO_INMEDIATO);

        // ---------------------------------------------------------------------
        // se determina el origen del comprobante
        // ---------------------------------------------------------------------
        $vta_tipo_origen_ajuste_haber = VtaTipoOrigenAjusteHaber::getOxCodigo(VtaTipoOrigenAjusteHaber::ORIGEN_ITEM);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));

        $vta_ajuste_haber = new VtaAjusteHaber();
        $vta_ajuste_haber->setVtaTipoOrigenAjusteHaberId($vta_tipo_origen_ajuste_haber->getId());

        if ($vta_presupuesto) {
            $vta_ajuste_haber->setVtaPresupuestoId($vta_presupuesto->getId());
        }

        $vta_ajuste_haber->setVtaPreventistaId($vta_preventista_id);
        $vta_ajuste_haber->setVtaAjusteHaberCondicionPagoId($vta_ajuste_haber_condicion_pago->getId());
        $vta_ajuste_haber->setVtaAjusteHaberTipoPagoId($vta_ajuste_haber_tipo_pago->getId());
        $vta_ajuste_haber->setGralEmpresaId($gral_empresa_id);
        $vta_ajuste_haber->setVtaPuntoVentaId($vta_punto_venta_id);
        $vta_ajuste_haber->setFechaEmision(Gral::getFechaHoraActual());
        if ($gral_mes) {
            $vta_ajuste_haber->setGralMesId($gral_mes->getId());
        }
        $vta_ajuste_haber->setAnio(date('Y'));
        $vta_ajuste_haber->setObservacion($observacion);
        $vta_ajuste_haber->setEstado(1);

        if ($gral_tipo_documento_id) {
            $vta_ajuste_haber->setGralTipoDocumentoId($gral_tipo_documento_id);
        }

        $vta_ajuste_haber->save();

        // --------------------------------------------------------------------
        // se setea el codigo del ajuste
        // --------------------------------------------------------------------
        $vta_ajuste_haber->setCodigo(self::PREFIJO_AJUSTE_HABER . str_pad($vta_ajuste_haber->getId(), 8, 0, STR_PAD_LEFT));
        $vta_ajuste_haber->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial del ajuste
        // --------------------------------------------------------------------
        $vta_ajuste_haber_estado = $vta_ajuste_haber->setVtaAjusteHaberEstado(VtaAjusteHaberTipoEstado::TIPO_GENERADO, $observacion);
        $vta_ajuste_haber_estado = $vta_ajuste_haber->setVtaAjusteHaberEstado(VtaAjusteHaberTipoEstado::TIPO_PENDIENTE, $observacion = '');

        // --------------------------------------------------------------------
        // se agregan los items al ajuste
        // --------------------------------------------------------------------
        $vta_ajuste_haber_item = new VtaAjusteHaberItem();

        $vta_ajuste_haber_item->setDescripcion('');
        $vta_ajuste_haber_item->setVtaAjusteHaberId($vta_ajuste_haber->getId());
        $vta_ajuste_haber_item->setGralFpFormaPagoId($gral_fp_forma_pago_id);

        $vta_ajuste_haber_concepto = VtaAjusteHaberConcepto::getOxCodigo(VtaAjusteHaberConcepto::TIPO_COBRO_FACTURA);
        $vta_ajuste_haber_item->setVtaAjusteHaberConceptoId($vta_ajuste_haber_concepto->getId());
        $vta_ajuste_haber_item->setCantidad(1);
        $vta_ajuste_haber_item->setImporteUnitario($importe_total);
        $vta_ajuste_haber_item->setCodigo('');
        $vta_ajuste_haber_item->setObservacion($observacion);
        $vta_ajuste_haber_item->setEstado(1);

        $vta_ajuste_haber_item->save();

        // --------------------------------------------------------------------
        // se vincula el cliente al Ajuste
        // --------------------------------------------------------------------        
        if ($cli_cliente) {
            $persona_descripcion = $cli_cliente->getDescripcion();

            $vta_ajuste_haber->setCliClienteId($cli_cliente->getId());
            $vta_ajuste_haber->setRazonSocial($cli_cliente->getRazonSocial());
            $vta_ajuste_haber->setDomicilioLegal($cli_cliente->getDomicilioLegal());
            $vta_ajuste_haber->setCuit($cli_cliente->getCuit());
            $vta_ajuste_haber->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
            $vta_ajuste_haber->setGralTipoPersoneriaId($cli_cliente->getGralTipoPersoneriaId());
            $vta_ajuste_haber->setPersonaDescripcion($persona_descripcion);
        } else {
            $vta_ajuste_haber->setPersonaDescripcion($vta_ajuste_debe->getPersonaDescripcion());
            $vta_ajuste_haber->setGralTipoDocumentoId($vta_ajuste_debe->getGralTipoDocumentoId());
            $vta_ajuste_haber->setPersonaDocumento($vta_ajuste_debe->getPersonaDocumento());
            $vta_ajuste_haber->setPersonaEmail($vta_ajuste_debe->getPersonaEmail());
        }

        $vta_ajuste_haber->save();

        // --------------------------------------------------------------------
        // se determina el tipo de ajuste_haber
        // --------------------------------------------------------------------
        $vta_tipo_ajuste_haber = self::getDeterminacionTipoAjusteHaber($cli_cliente_id);
        $vta_tipo_ajuste_haber_id = $vta_tipo_ajuste_haber->getId();
        $vta_ajuste_haber->setVtaTipoAjusteHaberId($vta_tipo_ajuste_haber_id);
        $vta_ajuste_haber->save();
        
        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_ajuste_haber->setActualizarResumenComprobante();

        return $vta_ajuste_haber;
    }

    /**
     * [setInicializarVtaAjusteHaberMultiDesdeVentaInmediataContado description]
     * @param boolean $vta_presupuesto                   [description]
     * @param [type]  $vta_ajuste_debe                   [description]
     * @param [type]  $vta_recibo_concepto_ids           [description]
     * @param [type]  $vta_recibo_descripcions           [description]
     * @param [type]  $vta_recibo_referencias            [description]
     * @param [type]  $vta_recibo_importe_unitarios      [description]
     * @param [type]  $vta_recibo_gral_fp_forma_pago_ids [description]
     * @param [type]  $fnd_caja_id                       [description]
     * @param string  $observacion                       [description]
     */
    static function setInicializarVtaAjusteHaberMultiItemDesdeVentaInmediataContado(
    $vta_presupuesto = false, $vta_ajuste_debe, $vta_recibo_concepto_ids, $vta_recibo_descripcions, $vta_recibo_referencias, $vta_recibo_gral_moneda_ids, $vta_recibo_importe_unitario_reals, $vta_recibo_importe_unitarios, $vta_recibo_gral_fp_forma_pago_ids, $fnd_caja_id, $var_sesion_random, $observacion = ''
    ) {

        $cli_cliente_id = $vta_ajuste_debe->getCliClienteId();
        $gral_empresa_id = $vta_ajuste_debe->getGralEmpresaId();
        $vta_punto_venta_id = $vta_ajuste_debe->getVtaPuntoVentaId();
        $gral_fp_forma_pago_id = $vta_ajuste_debe->getGralFpFormaPagoId();
        $importe_total = $vta_ajuste_debe->getSaldoImputable();
        $vta_preventista_id = $vta_ajuste_debe->getVtaPreventistaId();

        if ($cli_cliente_id != 'null') {
            $cli_cliente = CliCliente::getOxId($cli_cliente_id);
        }
        // ---------------------------------------------------------------------
        // se determina la condicion de pago
        // ---------------------------------------------------------------------
        $vta_ajuste_haber_condicion_pago = VtaAjusteHaberCondicionPago::getOxCodigo(VtaAjusteHaberCondicionPago::TIPO_EN_TERMINO);

        // ---------------------------------------------------------------------
        // se determina el tipo de pago
        // ---------------------------------------------------------------------
        $vta_ajuste_haber_tipo_pago = VtaAjusteHaberTipoPago::getOxCodigo(VtaAjusteHaberTipoPago::TIPO_COBRO_INMEDIATO);

        // ---------------------------------------------------------------------
        // se determina el origen del comprobante
        // ---------------------------------------------------------------------
        $vta_tipo_origen_ajuste_haber = VtaTipoOrigenAjusteHaber::getOxCodigo(VtaTipoOrigenAjusteHaber::ORIGEN_ITEM);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));

        $vta_ajuste_haber = new VtaAjusteHaber();
        $vta_ajuste_haber->setVtaTipoOrigenAjusteHaberId($vta_tipo_origen_ajuste_haber->getId());

        if ($vta_presupuesto) {
            $vta_ajuste_haber->setVtaPresupuestoId($vta_presupuesto->getId());
        }

        $vta_ajuste_haber->setVtaPreventistaId($vta_preventista_id);
        $vta_ajuste_haber->setVtaAjusteHaberCondicionPagoId($vta_ajuste_haber_condicion_pago->getId());
        $vta_ajuste_haber->setVtaAjusteHaberTipoPagoId($vta_ajuste_haber_tipo_pago->getId());
        $vta_ajuste_haber->setGralEmpresaId($gral_empresa_id);
        $vta_ajuste_haber->setVtaPuntoVentaId($vta_punto_venta_id);
        $vta_ajuste_haber->setFechaEmision(Gral::getFechaHoraActual());
        if ($gral_mes) {
            $vta_ajuste_haber->setGralMesId($gral_mes->getId());
        }
        $vta_ajuste_haber->setFndCajaId($fnd_caja_id);
        $vta_ajuste_haber->setAnio(date('Y'));
        $vta_ajuste_haber->setObservacion($observacion);
        $vta_ajuste_haber->setEstado(1);

        if ($gral_tipo_documento_id) {
            $vta_ajuste_haber->setGralTipoDocumentoId($gral_tipo_documento_id);
        }

        $vta_ajuste_haber->save();

        // --------------------------------------------------------------------
        // se setea el codigo del ajuste
        // --------------------------------------------------------------------
        $vta_ajuste_haber->setCodigo(self::PREFIJO_AJUSTE_HABER . str_pad($vta_ajuste_haber->getId(), 8, 0, STR_PAD_LEFT));
        $vta_ajuste_haber->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial del ajuste
        // --------------------------------------------------------------------
        $vta_ajuste_haber_estado = $vta_ajuste_haber->setVtaAjusteHaberEstado(VtaAjusteHaberTipoEstado::TIPO_GENERADO, $observacion);
        $vta_ajuste_haber_estado = $vta_ajuste_haber->setVtaAjusteHaberEstado(VtaAjusteHaberTipoEstado::TIPO_PENDIENTE, $observacion = '');

        // --------------------------------------------------------------------
        // se agregan los items al ajuste
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
            
            $vta_ajuste_haber_item = new VtaAjusteHaberItem();
            $vta_ajuste_haber_item->setDescripcion($vta_recibo_descripcion);
            $vta_ajuste_haber_item->setVtaAjusteHaberId($vta_ajuste_haber->getId());
            $vta_ajuste_haber_item->setVtaAjusteHaberConceptoId($vta_recibo_concepto_id);
            $vta_ajuste_haber_item->setGralFpFormaPagoId($vta_recibo_gral_fp_forma_pago_id);
            $vta_ajuste_haber_item->setCantidad(1);
            $vta_ajuste_haber_item->setGralMonedaId($vta_recibo_gral_moneda_id);
            $vta_ajuste_haber_item->setImporteUnitarioReal($importe_unitario_real);
            $vta_ajuste_haber_item->setImporteUnitario($importe_unitario);
            $vta_ajuste_haber_item->setTipoCambio($tipo_cambio);
            $vta_ajuste_haber_item->setTipoCambioReal($tipo_cambio_real);
            $vta_ajuste_haber_item->setCodigo($vta_recibo_referencia);
            $vta_ajuste_haber_item->setObservacion('');
            $vta_ajuste_haber_item->setEstado(1);

            $vta_ajuste_haber_item->save();

            // -------------------------------------------------------------
            // Se registra el detalle del cheque si existe
            // -------------------------------------------------------------
            $arr_vta_ajuste_haber_cheque_infos = Gral::getSes('vta_recibo_item_generico_cheque_info' . $var_sesion_random);

            if (!is_null($arr_vta_ajuste_haber_cheque_infos[$key])) {
                $vta_ajuste_haber_item_cheque = new VtaAjusteHaberItemCheque();

                $arr = $arr_vta_ajuste_haber_cheque_infos[$key];
                $cheque_id = $arr['cheque_id'];

                $vta_ajuste_haber_item_cheque->setVtaAjusteHaberId($vta_ajuste_haber->getId());
                $vta_ajuste_haber_item_cheque->setVtaAjusteHaberItemId($vta_ajuste_haber_item->getId());
                $vta_ajuste_haber_item_cheque->setGralBancoId($arr['gral_banco_id']);
                $vta_ajuste_haber_item_cheque->setDescripcion($arr['descripcion']);
                $vta_ajuste_haber_item_cheque->setEntregador($arr['entregador']);
                $vta_ajuste_haber_item_cheque->setFirmante($arr['firmante']);
                $vta_ajuste_haber_item_cheque->setNumeroCheque($arr['numero_cheque']);
                $vta_ajuste_haber_item_cheque->setFechaCobro($arr['fecha_cobro']);
                $vta_ajuste_haber_item_cheque->setFechaEmision($arr['fecha_emision']);
                $vta_ajuste_haber_item_cheque->setEstado(1);

                $vta_ajuste_haber_item_cheque->save();

                // -------------------------------------------------------------
                // inicializa cheque
                // -------------------------------------------------------------
                $fnd_chq_cheque = FndChqCheque::inicializarFndChqChequeDesdeVtaAjusteHaber($cheque_id, $vta_ajuste_haber_item, $arr);
            }

            // -------------------------------------------------------------
            // Se registra el detalle de la retencion si existe
            // -------------------------------------------------------------
            $arr_vta_ajuste_haber_retencion_infos = Gral::getSes('vta_recibo_item_generico_retencion_info' . $var_sesion_random);

            if (!is_null($arr_vta_ajuste_haber_retencion_infos[$key])) {
                $vta_ajuste_haber_item_retencion = new VtaAjusteHaberItemRetencion();

                $arr = $arr_vta_ajuste_haber_retencion_infos[$key];

                $vta_ajuste_haber_item_retencion->setVtaAjusteHaberId($vta_ajuste_haber->getId());
                $vta_ajuste_haber_item_retencion->setVtaAjusteHaberItemId($vta_ajuste_haber_item->getId());
                $vta_ajuste_haber_item_retencion->setDescripcion($arr['descripcion']);
                $vta_ajuste_haber_item_retencion->setNumeroComprobante($arr['numero_comprobante']);
                $vta_ajuste_haber_item_retencion->setFechaEmision($arr['fecha_emision']);
                $vta_ajuste_haber_item_retencion->setImporteBaseImponible($arr['importe_base_imponible']);
                $vta_ajuste_haber_item_retencion->setImporteRetencion($importe_unitario);
                $vta_ajuste_haber_item_retencion->setObservacion($arr['observacion']);
                $vta_ajuste_haber_item_retencion->setEstado(1);

                $vta_ajuste_haber_item_retencion->save();
            }
        }


        // --------------------------------------------------------------------
        // se vincula el cliente al Ajuste
        // --------------------------------------------------------------------        
        if ($cli_cliente) {
            $persona_descripcion = $cli_cliente->getDescripcion();

            $vta_ajuste_haber->setCliClienteId($cli_cliente->getId());
            $vta_ajuste_haber->setRazonSocial($cli_cliente->getRazonSocial());
            $vta_ajuste_haber->setDomicilioLegal($cli_cliente->getDomicilioLegal());
            $vta_ajuste_haber->setCuit($cli_cliente->getCuit());
            $vta_ajuste_haber->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
            $vta_ajuste_haber->setGralTipoPersoneriaId($cli_cliente->getGralTipoPersoneriaId());
            $vta_ajuste_haber->setPersonaDescripcion($persona_descripcion);
        } else {
            $vta_ajuste_haber->setPersonaDescripcion($vta_ajuste_debe->getPersonaDescripcion());
            $vta_ajuste_haber->setGralTipoDocumentoId($vta_ajuste_debe->getGralTipoDocumentoId());
            $vta_ajuste_haber->setPersonaDocumento($vta_ajuste_debe->getPersonaDocumento());
            $vta_ajuste_haber->setPersonaEmail($vta_ajuste_debe->getPersonaEmail());
        }

        $vta_ajuste_haber->save();

        // --------------------------------------------------------------------
        // se determina el tipo de ajuste_haber
        // --------------------------------------------------------------------
        $vta_tipo_ajuste_haber = self::getDeterminacionTipoAjusteHaber($cli_cliente_id);
        $vta_tipo_ajuste_haber_id = $vta_tipo_ajuste_haber->getId();
        $vta_ajuste_haber->setVtaTipoAjusteHaberId($vta_tipo_ajuste_haber_id);
        $vta_ajuste_haber->save();
        
        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_ajuste_haber->setActualizarResumenComprobante();
        
        return $vta_ajuste_haber;
    }

    static function setInicializarVtaAjusteHaberDesdeDescuentoFinanciero($vta_factura_ids, $var_sesion_random, $descuento_financiero, $cmb_gral_fp_forma_pago_id, $txa_nota_publica, $observacion = '', $vta_ajuste_haber_concepto_ids, $txt_descripcions, $txt_referencias, $txt_importe_unitarios, $gral_forma_pago_ids) {
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
        $vta_ajuste_haber_condicion_pago = VtaAjusteHaberCondicionPago::getOxCodigo(VtaAjusteHaberCondicionPago::TIPO_EN_TERMINO);

        // ---------------------------------------------------------------------
        // se determina el tipo de pago
        // ---------------------------------------------------------------------
        $vta_ajuste_haber_tipo_pago = VtaAjusteHaberTipoPago::getOxCodigo(VtaAjusteHaberTipoPago::TIPO_COBRO_INMEDIATO);
        
        // ---------------------------------------------------------------------
        // se determina el origen del comprobante
        // ---------------------------------------------------------------------
        $vta_tipo_origen_ajuste_haber = VtaTipoOrigenAjusteHaber::getOxCodigo(VtaTipoOrigenAjusteHaber::ORIGEN_ITEM);
        $gral_tipo_documento_cuit = GralTipoDocumento::getOxCodigo(GralTipoDocumento::TIPO_CUIT);
        $gral_mes = GralMes::getOxCodigoNumero(date('m'));

        $cli_cliente = CliCliente::getOxId($cli_cliente_id);

        $vta_ajuste_haber = new VtaAjusteHaber();
        $vta_ajuste_haber->setVtaTipoOrigenAjusteHaberId($vta_tipo_origen_ajuste_haber->getId());
        $vta_ajuste_haber->setVtaAjusteHaberCondicionPagoId($vta_ajuste_haber_condicion_pago->getId());
        $vta_ajuste_haber->setVtaAjusteHaberTipoPagoId($vta_ajuste_haber_tipo_pago->getId());
        $vta_ajuste_haber->setGralEmpresaId($gral_empresa_id);
        //$vta_ajuste_haber->setVtaPuntoVentaId($vta_punto_venta_id);
        $vta_ajuste_haber->setFechaEmision(Gral::getFechaHoraActual());
        if ($gral_mes) {
            $vta_ajuste_haber->setGralMesId($gral_mes->getId());
        }
        $vta_ajuste_haber->setAnio(date('Y'));
        $vta_ajuste_haber->setObservacion($observacion);
        $vta_ajuste_haber->setEstado(1);
        $vta_ajuste_haber->save();

        // --------------------------------------------------------------------
        // se setea el codigo del ajuste
        // --------------------------------------------------------------------
        $vta_ajuste_haber->setCodigo(self::PREFIJO_AJUSTE_HABER . str_pad($vta_ajuste_haber->getId(), 8, 0, STR_PAD_LEFT));
        $vta_ajuste_haber->save();

        // --------------------------------------------------------------------
        // se registra el estado inicial del ajuste
        // --------------------------------------------------------------------
        $vta_ajuste_haber_estado = $vta_ajuste_haber->setVtaAjusteHaberEstado(VtaAjusteHaberTipoEstado::TIPO_GENERADO, $observacion);
        $vta_ajuste_haber_estado = $vta_ajuste_haber->setVtaAjusteHaberEstado(VtaAjusteHaberTipoEstado::TIPO_PENDIENTE, $observacion = ''); // Excepcional porque no interactua con AFIP

        /*
          $vta_ajuste_haber_concepto = VtaAjusteHaberConcepto::getOxCodigo(VtaAjusteHaberConcepto::TIPO_COBRO_FACTURA);
         * 
          // --------------------------------------------------------------------
          // se agregan los items al ajuste
          // --------------------------------------------------------------------
          // Cargo el detalle de Ajuste
          $vta_ajuste_haber_item = new VtaAjusteHaberItem();

          $vta_ajuste_haber_item->setDescripcion('Cancelacion y Descuento Financiero Aplicado');
          $vta_ajuste_haber_item->setVtaAjusteHaberId($vta_ajuste_haber->getId());
          $vta_ajuste_haber_item->setGralFpFormaPagoId($cmb_gral_fp_forma_pago_id);
          $vta_ajuste_haber_item->setVtaAjusteHaberConceptoId($vta_ajuste_haber_concepto->getId());
          //$vta_ajuste_haber_item->setGralTipoIvaId($gral_tipo_iva_ids[$key]);
          //$vta_ajuste_haber_item->setGralTipoIvaId(1);
          //$vta_ajuste_haber_item->setCantidad($txt_cantidads[$key]);
          $vta_ajuste_haber_item->setCantidad(1);

          $vta_ajuste_haber_item->setImporteUnitario($importe_total);
          $vta_ajuste_haber_item->setCodigo('');
          $vta_ajuste_haber_item->setObservacion('Cancelacion por DF de facturas ' . $string_numero_facturas);
          $vta_ajuste_haber_item->setEstado(1);

          $vta_ajuste_haber_item->save();
         */

        // --------------------------------------------------------------------
        // se agregan los items al ajuste
        // --------------------------------------------------------------------
        if (!empty($vta_ajuste_haber->getId())) {
            foreach ($txt_descripcions as $key => $txt_descripcion) {
                $importe_unitario = $txt_importe_unitarios[$key];
                $importe_unitario = Gral::getImporteDesdePriceFormatToDB($importe_unitario);

                // Cargo el detalle del Ajuste
                $vta_ajuste_haber_item = new VtaAjusteHaberItem();

                $vta_ajuste_haber_item->setDescripcion($txt_descripcions[$key]);
                $vta_ajuste_haber_item->setVtaAjusteHaberId($vta_ajuste_haber->getId());
                $vta_ajuste_haber_item->setGralFpFormaPagoId($gral_forma_pago_ids[$key]);
                $vta_ajuste_haber_item->setVtaAjusteHaberConceptoId($vta_ajuste_haber_concepto_ids[$key]);
                $vta_ajuste_haber_item->setCantidad(1);

                $vta_ajuste_haber_item->setImporteUnitario($importe_unitario);
                $vta_ajuste_haber_item->setCodigo($txt_referencias[$key]);
                $vta_ajuste_haber_item->setObservacion('');
                $vta_ajuste_haber_item->setEstado(1);

                $vta_ajuste_haber_item->save();

                // -------------------------------------------------------------
                // Se registra el detalle del cheque si existe
                // -------------------------------------------------------------
                $arr_vta_ajuste_haber_cheque_infos = Gral::getSes('vta_ajuste_haber_descuento_financiero_cheque_info' . $var_sesion_random);

                if (!is_null($arr_vta_ajuste_haber_cheque_infos[$key])) {
                    $vta_ajuste_haber_item_cheque = new VtaAjusteHaberItemCheque();

                    $arr = $arr_vta_ajuste_haber_cheque_infos[$key];
                    $cheque_id = $arr['cheque_id'];

                    $vta_ajuste_haber_item_cheque->setVtaAjusteHaberId($vta_ajuste_haber->getId());
                    $vta_ajuste_haber_item_cheque->setVtaAjusteHaberItemId($vta_ajuste_haber_item->getId());
                    $vta_ajuste_haber_item_cheque->setGralBancoId($arr['gral_banco_id']);
                    $vta_ajuste_haber_item_cheque->setDescripcion($arr['descripcion']);
                    $vta_ajuste_haber_item_cheque->setEntregador($arr['entregador']);
                    $vta_ajuste_haber_item_cheque->setFirmante($arr['firmante']);
                    $vta_ajuste_haber_item_cheque->setNumeroCheque($arr['numero_cheque']);
                    $vta_ajuste_haber_item_cheque->setFechaCobro($arr['fecha_cobro']);
                    $vta_ajuste_haber_item_cheque->setFechaEmision($arr['fecha_emision']);
                    $vta_ajuste_haber_item_cheque->setEstado(1);

                    $vta_ajuste_haber_item_cheque->save();

                    // -------------------------------------------------------------
                    // inicializa cheque
                    // -------------------------------------------------------------
                    $fnd_chq_cheque = FndChqCheque::inicializarFndChqChequeDesdeVtaAjusteHaber($cheque_id, $vta_ajuste_haber_item, $arr);
                }

                // -------------------------------------------------------------
                // Se registra el detalle de la retencion si existe
                // -------------------------------------------------------------
                $arr_vta_ajuste_haber_retencion_infos = Gral::getSes('vta_ajuste_haber_descuento_financiero_retencion_info' . $var_sesion_random);

                if (!is_null($arr_vta_ajuste_haber_retencion_infos[$key])) {
                    $vta_ajuste_haber_item_retencion = new VtaAjusteHaberItemRetencion();

                    $arr = $arr_vta_ajuste_haber_retencion_infos[$key];

                    $vta_ajuste_haber_item_retencion->setVtaAjusteHaberId($vta_ajuste_haber->getId());
                    $vta_ajuste_haber_item_retencion->setVtaAjusteHaberItemId($vta_ajuste_haber_item->getId());
                    $vta_ajuste_haber_item_retencion->setDescripcion($arr['descripcion']);
                    $vta_ajuste_haber_item_retencion->setNumeroComprobante($arr['numero_comprobante']);
                    $vta_ajuste_haber_item_retencion->setFechaEmision($arr['fecha_emision']);
                    $vta_ajuste_haber_item_retencion->setImporteBaseImponible($arr['importe_base_imponible']);
                    $vta_ajuste_haber_item_retencion->setImporteRetencion($importe_unitario);
                    $vta_ajuste_haber_item_retencion->setObservacion($arr['observacion']);
                    $vta_ajuste_haber_item_retencion->setEstado(1);

                    $vta_ajuste_haber_item_retencion->save();
                }
            }
        }

        // --------------------------------------------------------------------
        // se vincula el cliente al Ajuste
        // --------------------------------------------------------------------        
        $vta_ajuste_haber->setCliClienteId($cli_cliente->getId());
        $vta_ajuste_haber->setRazonSocial($cli_cliente->getRazonSocial());
        $vta_ajuste_haber->setDomicilioLegal($cli_cliente->getDomicilioLegal());
        $vta_ajuste_haber->setCuit($cli_cliente->getCuit());
        $vta_ajuste_haber->setGralCondicionIvaId($cli_cliente->getGralCondicionIvaId());
        $vta_ajuste_haber->setGralTipoPersoneriaId($cli_cliente->getGralTipoPersoneriaId());
        $vta_ajuste_haber->setPersonaDescripcion($cli_cliente->getDescripcion());
        if ($gral_tipo_documento_cuit) {
            $vta_ajuste_haber->setGralTipoDocumentoId($gral_tipo_documento_cuit->getId());
        }
        $vta_ajuste_haber->setPersonaDocumento($cli_cliente->getCuit());
        $vta_ajuste_haber->setPersonaEmail($cli_cliente->getEmail());

        $vta_ajuste_haber->save();
        // --------------------------------------------------------------------
        // se determina el tipo de Ajuste
        // --------------------------------------------------------------------
        //$vta_tipo_ajuste = self::getDeterminacionTipoAjuste($cli_cliente_id);
        //$vta_ajuste_haber->setVtaTipoAjusteId($vta_tipo_ajuste->getId());
        //$vta_ajuste_haber->save();
        // --------------------------------------------------------------------
        // se imputan los comprobantes
        // --------------------------------------------------------------------
        $vta_ajuste_haber->setImputarVtaComprobante($recalcular_estado = true, null, $vta_factura_ids);

        //---------------------------------------
        //se actualiza resumen (tabla de extension _importe)
        //---------------------------------------
        $vta_ajuste_haber->setActualizarResumenComprobante();
        
        return $vta_ajuste_haber;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 28/05/2019 14:50 hs.
     * Metodo que modifica los datos basicos del comprobante
     * @return Obj VtaFactura
     */
    public function setModificarDatosComprobante($vta_tipo_ajuste_haber_id, $vta_preventista_id, $vta_ajuste_haber_condicion_pago_id, $vta_ajuste_haber_tipo_pago_id, $cli_cliente_id, $txt_fecha, $txt_codigo_op_cliente, $txa_nota_interna, $txa_nota_publica, $txa_observacion) {
        $cli_cliente = CliCliente::getOxId($cli_cliente_id);

        $this->setVtaTipoAjusteHaberId($vta_tipo_ajuste_haber_id);
        
        $this->setVtaPreventistaId($vta_preventista_id);
        $this->setVtaAjusteHaberCondicionPagoId($vta_ajuste_haber_condicion_pago_id);
        $this->setVtaAjusteHaberTipoPagoId($vta_ajuste_haber_tipo_pago_id);

        //$this->setCliClienteId($cli_cliente_id);
        $this->setFechaEmision($txt_fecha);
        $this->setCodigoOpCliente($txt_codigo_op_cliente);
        $this->setNumeroAjusteHaberCompleto($this->getNumeroAjusteHaberCompletoFormateado());
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
     * Metodo que registra un nuevo estado del ajuste.
     * @return Obj VtaAjusteEstado
     */
    public function setVtaAjusteHaberEstado($codigo, $observacion = '') {
        $inicial = 1;
        $vta_ajuste_haber_estado = false;

        // se agrega el nuevo estado del factura
        $vta_ajuste_haber_tipo_estado = VtaAjusteHaberTipoEstado::getOxCodigo($codigo);

        if ($vta_ajuste_haber_tipo_estado) {
            foreach ($this->getVtaAjusteHaberEstados() as $vta_ajuste_haber_estado) {
                $vta_ajuste_haber_estado->setActual(0);
                $vta_ajuste_haber_estado->save();
                $inicial = 0;
            }


            $vta_ajuste_haber_estado = new VtaAjusteHaberEstado();
            $vta_ajuste_haber_estado->setVtaAjusteHaberId($this->getId());
            $vta_ajuste_haber_estado->setVtaAjusteHaberTipoEstadoId($vta_ajuste_haber_tipo_estado->getId());
            $vta_ajuste_haber_estado->setInicial($inicial);
            $vta_ajuste_haber_estado->setActual(1);
            $vta_ajuste_haber_estado->setObservacion($observacion);
            $vta_ajuste_haber_estado->save();

            // actualizamos el estado en vta_ajuste_haber      
            $this->setVtaAjusteHaberTipoEstadoId($vta_ajuste_haber_tipo_estado->getId());
            $this->save();
        }

        return $vta_ajuste_haber_estado;
    }

    /**
     * Registro de los movimientos contables de la operacion
     */
    public function setRegistrarContabilidad($cntb_periodo = false) {
        if ((int) $this->getCntbDiarioAsientoId() > 0) {
            return;
        }

        $vta_ajuste_haber_tipo_estado = $this->getVtaAjusteHaberTipoEstado();

        if ($vta_ajuste_haber_tipo_estado->getContabilizable()) {
            $cli_cliente = $this->getCliCliente();
            $gral_empresa = $this->getGralEmpresa();
            $cntb_ejercicio = CntbEjercicio::getCntbEjercicioActual($gral_empresa);
            $cntb_tipo_asiento = CntbTipoAsiento::getOxCodigo(CntbTipoAsiento::TIPO_OPERATIVO);
            $cntb_tipo_origen = CntbTipoOrigen::getOxCodigo(CntbTipoOrigen::TIPO_AUTOMATICO);
            $cntb_tipo_movimiento = CntbTipoMovimiento::getOxCodigo(CntbTipoMovimiento::TIPO_VENTAS);
            $descripcion = 'Asiento de VtaAjusteHaber';

            $array_cuentas_debe = array();
            $array_cuentas_haber = array();

            $vta_tipo_origen_ajuste_haber = $this->getVtaTipoOrigenAjusteHaber();
            $gral_actividad = $this->getGralActividad();
            $gral_tipo_documento = $this->getGralTipoDocumento();
            $gral_condicion_iva = $this->getGralCondicionIva();
            $gral_fp_forma_pago = $this->getGralFpFormaPago();
            $cntb_cuenta_venta_debe = $gral_fp_forma_pago->getCntbCuentaVentaObj();

            $importe_iva = $this->getVtaAjusteHaberIva();
            $importe_tributo = $this->getVtaAjusteHaberTributo();
            //$importe_subtotal = $this->getVtaFacturaSubtotal();
            $importe_total = $this->getVtaAjusteHaberTotal();
            /*
              // -----------------------------------------------------------------
              // DEBE
              // -----------------------------------------------------------------
              if ($cntb_cuenta_venta_debe)
              {
              $array_cuentas_debe[] = array(
              //'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('11010101'), // CAJA ADMINISTRACION
              'cntb_cuenta'        => $cntb_cuenta_venta_debe,
              'codigo_comprobante' => $txt_comprobante = '',
              'importe'            => $importe_total,
              );
              }

              // -----------------------------------------------------------------
              // HABER
              // -----------------------------------------------------------------
              if ($importe_iva > 0)
              {
              $array_cuentas_haber[] = array(
              'cntb_cuenta'        => $cntb_cuenta = CntbCuenta::getOxNumero('21030103'), // IVA DEBITO FISCAL
              'codigo_comprobante' => $txt_comprobante = '',
              'importe'            => $importe_iva,
              );
              }

              if ($importe_tributo > 0)
              {
              $array_cuentas_haber[] = array(
              'cntb_cuenta'        => $cntb_cuenta = CntbCuenta::getOxNumero('22050117'), // INGRESOS BRUTOS
              'codigo_comprobante' => $txt_comprobante = '',
              'importe'            => $importe_tributo,
              );
              }

              if ($vta_tipo_origen_factura && $vta_tipo_origen_factura->getCodigo() == VtaTipoOrigenFactura::ORIGEN_ITEM)
              {
              // -------------------------------------------------------------
              // si nace desde ITEM
              // -------------------------------------------------------------
              $vta_factura_items = $this->getVtaFacturaItems();
              //Gral::prr($vta_factura_items);
              foreach ($vta_factura_items as $vta_factura_item)
              {
              $importe_subtotal = $this->getVtaFacturaSubtotal();
              $vta_factura_concepto = $vta_factura_item->getVtaFacturaConcepto();
              $cntb_cuenta_venta_haber = $vta_factura_concepto->getCntbCuenta();
              //Gral::prr($cntb_cuenta_venta_haber);

              if ($cntb_cuenta_venta_haber && $importe_subtotal > 0)
              {
              $array_cuentas_haber[] = array(
              //'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('22010102'), // INGRESOS POR VENTA REPUESTOS
              'cntb_cuenta'        => $cntb_cuenta_venta_haber,
              'codigo_comprobante' => $txt_comprobante = '',
              'importe'            => $importe_subtotal,
              );
              }
              }
              }
              elseif ($vta_tipo_origen_factura && $vta_tipo_origen_factura->getCodigo() == VtaTipoOrigenFactura::ORIGEN_ORDEN_VENTA)
              {
              // -------------------------------------------------------------
              // si nace desde OV
              // -------------------------------------------------------------
              $ins_tipo_insumos = $this->getInsTipoInsumosVinculados();
              //Gral::prr($ins_tipo_insumos);
              foreach ($ins_tipo_insumos as $ins_tipo_insumo)
              {
              $importe_subtotal        = $this->getVtaFacturaSubtotal($ins_tipo_insumo);
              $cntb_cuenta_venta_haber = $ins_tipo_insumo->getCntbCuentaVentaObj();

              if ($cntb_cuenta_venta_haber && $importe_subtotal > 0)
              {
              $array_cuentas_haber[] = array(
              //'cntb_cuenta' => $cntb_cuenta = CntbCuenta::getOxNumero('22010102'), // INGRESOS POR VENTA REPUESTOS
              'cntb_cuenta'        => $cntb_cuenta_venta_haber,
              'codigo_comprobante' => $txt_comprobante = '',
              'importe'            => $importe_subtotal,
              );
              }
              }
              }
             */
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
            $cntb_diario_asiento_vta_ajuste = new CntbDiarioAsientoVtaAjuste();
            $cntb_diario_asiento_vta_ajuste->setCntbDiarioAsientoId($cntb_diario_asiento->getId());
            $cntb_diario_asiento_vta_ajuste->setVtaAjusteHaberId($this->getId());
            $cntb_diario_asiento_vta_ajuste->save();

            $vta_tipo_factura = $this->getVtaTipoFactura();
            $gral_condicion_iva = $this->getGralCondicionIva();
            $gral_tipo_documento = $this->getGralTipoDocumento();

            // si fueron ovs
            /* $vta_orden_ventas = $this->getVtaOrdenVentaXVtaAjusteVtaOrdenVenta();
              if (count($vta_orden_ventas) > 0)
              {
              $cantidad_items = count($vta_orden_ventas) . " OVs";
              } */

            // si fueron items
            $vta_ajuste_haber_items = $this->getVtaAjusteHaberItems();
            if (count($vta_ajuste_haber_items) > 0) {
                $cantidad_items = count($vta_ajuste_haber_items) . " Items";
            }

            $descripcion = $vta_tipo_factura->getDescripcion() . " " . $this->getNumeroComprobanteCompleto();
            $observacion = "Emitida a " . $gral_condicion_iva->getDescripcion() . " " . $this->getPersonaDescripcion() . " " . $gral_tipo_documento->getDescripcion() . " " . $this->getPersonaDocumento() . " por " . $cantidad_items;

            // se actualiza la descripcion y observacion del asiento
            $cntb_diario_asiento->setDescripcion($descripcion);
            $cntb_diario_asiento->setObservacion($observacion);
            $cntb_diario_asiento->save();
        }
    }

    /**
     * Metodo que retorna la cantidad de items que tiene un Ajuste.
     * @return type float
     */
    public function getVtaAjusteHaberCantidadItems() {
        $vta_ajuste_haber_items = $this->getVtaAjusteHaberItems(null, null, true);
        $vta_ajuste_haber_vta_ajuste_debe_vta_orden_ventas = $this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas(null, null, true);

        $cantidad_items = count($vta_ajuste_haber_items) +  count($vta_ajuste_haber_vta_ajuste_debe_vta_orden_ventas);

        return $cantidad_items;
    }

    /**
     * Metodo que retorna el tipo de ajuste que tiene un cliente.
     * @param type $cli_cliente_id
     * @return type VtaTipoAjuste
     */
    static function getDeterminacionTipoAjusteHaber($cli_cliente_id) {
        $vta_tipo_ajuste_haber = VtaTipoAjusteHaber::getOxCodigo(VtaTipoAjusteHaber::TIPO_AJUSTE_X_HABER);
        //return $vta_tipo_ajuste_haber;
        $cli_cliente = CliCliente::getOxId($cli_cliente_id);

        if ($cli_cliente) {
            $gral_condicion_iva_id = $cli_cliente->getGralCondicionIvaId();

            $gral_condicion_iva_vta_tipo_ajuste_habers = GralCondicionIvaVtaTipoAjusteHaber::getOsxGralCondicionIvaId($gral_condicion_iva_id);
            foreach ($gral_condicion_iva_vta_tipo_ajuste_habers as $gral_condicion_iva_vta_tipo_ajuste_haber) {
                $vta_tipo_ajuste_haber = $gral_condicion_iva_vta_tipo_ajuste_haber->getVtaTipoAjusteHaber();
                return $vta_tipo_ajuste_haber;
            }
        }
        return $vta_tipo_ajuste_haber;
    }

    /**
     * Metodo que retorna el iva de los items de la NC.
     * @return type float
     */
    public function getArrIvaParaAfipVtaAjusteHaberItem() {

        $arr = array();

        // items
        $vta_ajuste_haber_items = $this->getVtaAjusteHaberItems(null, null, true);

        foreach ($vta_ajuste_haber_items as $vta_ajuste_haber_item) {
            $gral_tipo_iva = $vta_ajuste_haber_item->getGralTipoIva();
            $ws_fe_param_tipo_iva = $gral_tipo_iva->getWsFeParamTipoIvaXGralTipoIvaWsFeParamTipoIva();

            $importe_total = round($vta_ajuste_haber_item->getImporteTotal(), 2);
            $importe_iva = round($vta_ajuste_haber_item->getImporteIva(), 2);

            $arr[$gral_tipo_iva->getCodigo()]['WS_FE_PARAM_TIPO_IVA_ID'] = $ws_fe_param_tipo_iva->getId();
            $arr[$gral_tipo_iva->getCodigo()]['Id'] = $ws_fe_param_tipo_iva->getCodigoAfip();
            $arr[$gral_tipo_iva->getCodigo()]['BaseImp'] = $arr[$gral_tipo_iva->getCodigo()]['BaseImp'] + $importe_total;
            $arr[$gral_tipo_iva->getCodigo()]['Importe'] = $arr[$gral_tipo_iva->getCodigo()]['Importe'] + $importe_iva;
        }
        
        // facturas (ajustes debe) anuladas
        $vta_ajuste_haber_vta_ajuste_debe_vta_orden_ventas = $this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas(null, null, true);
        foreach ($vta_ajuste_haber_vta_ajuste_debe_vta_orden_ventas as $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta) {
            $gral_tipo_iva = $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getGralTipoIva();

            if ($gral_tipo_iva && $gral_tipo_iva->getGravado()) { // solo se agrega al array de IVA las alicuotas que estan gravadas
                $ws_fe_param_tipo_iva = $gral_tipo_iva->getWsFeParamTipoIvaXGralTipoIvaWsFeParamTipoIva();

                $importe_total = round($vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getImporteTotal(), 2);
                $importe_iva = round($vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getImporteIva(), 2);

                $arr[$gral_tipo_iva->getCodigo()]['WS_FE_PARAM_TIPO_IVA_ID'] = $ws_fe_param_tipo_iva->getId();
                $arr[$gral_tipo_iva->getCodigo()]['Id'] = $ws_fe_param_tipo_iva->getCodigoAfip();
                $arr[$gral_tipo_iva->getCodigo()]['BaseImp'] = $arr[$gral_tipo_iva->getCodigo()]['BaseImp'] + $importe_total;
                $arr[$gral_tipo_iva->getCodigo()]['Importe'] = $arr[$gral_tipo_iva->getCodigo()]['Importe'] + $importe_iva;
            }
        }

        return $arr;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 20/03/2018 11:00 hs.
     * Metodo que envia el Ajuste por email.
     * @return 
     */
    public function enviarAjusteEmail($enviar = false, $destinatarios = false, $txa_observacion, $archivo_adjunto_urls = false) {
        if (!Mail::MAIL_ACTIVO)
            return false;

        $mail_asunto = Gral::getConfig('gral_cliente') . ' - Ajuste #' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios = str_replace(' ', '', $destinatarios);
        $destinatarios = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param = array(
            'vta_ajuste_id' => $this->getId(),
            'observacion' => $txa_observacion,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_vta_ajuste.php";
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

        $vta_ajuste_haber_enviado = $this->inicializarVtaAjusteHaberEnviado($txa_observacion, $destinatarios, $mail_asunto, $msg, $strContenidoPdf);

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
                $vta_ajuste_haber_enviado->setConfirmarVtaAjusteHaberEnviado(1, VtaAjusteHaberEnviado::AJUSTE_ENVIADO_CORRECTAMENTE);
            } else {
                $vta_ajuste_haber_enviado->setConfirmarVtaAjusteHaberEnviado(0, $mail->ErrorInfo);
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
     * Metodo que Inicializa el envio por mail del Ajuste.
     * @return VtaAjusteHaberEnviado
     */
    public function inicializarVtaAjusteHaberEnviado($observacion, $destinatarios, $mail_asunto, $mail_contenido, $archivo_adjunto) {
        $vta_ajuste_haber_enviado = new VtaAjusteHaberEnviado();
        $vta_ajuste_haber_enviado->setDescripcion('');
        $vta_ajuste_haber_enviado->setVtaAjusteHaberId($this->getId());
        $vta_ajuste_haber_enviado->setAsunto($mail_asunto);
        $vta_ajuste_haber_enviado->setDestinatario($destinatarios);

        $vta_ajuste_haber_enviado->setCuerpo(addslashes($mail_contenido));
        $vta_ajuste_haber_enviado->setAdjunto(base64_encode($archivo_adjunto));

        $vta_ajuste_haber_enviado->setCodigoEnvio(0);
        $vta_ajuste_haber_enviado->setObservacion($observacion);
        $vta_ajuste_haber_enviado->setEstado(0);

        $vta_ajuste_haber_enviado->save();

        return $vta_ajuste_haber_enviado;
    }

    public function getNombreArchivoAdjuntoAjusteHaber() {
        $nombre = Gral::getConfig('conf_proyecto_min') . '_AH_' . $this->getVtaTipoAjusteHaber()->getCodigoMin() . '_' . $this->getCodigo() . '_' . $this->getPersonaDescripcion();
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
        $numero_comprobante = $this->getNumeroAjusteHaber();
        $letra_tipo_comprobante = $this->getVtaTipoAjusteHaber()->getCodigoMin();

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
        return $this->getVtaTipoAjusteHaber()->getDescripcion();
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 28/07/2018 15:13 hs.
     * Metodo utilizado en la conciliacion de comprobantes retorna el tipo de comprobante si existe.
     * @return String
     */
    public function getTipoComprobanteMin() {
        return $this->getVtaTipoAjusteHaber()->getCodigoMin();
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que se utiliza en la pantalla de conciliacion de comprobantes.
     * Modulo vta_comprobante_gestion.
     * @return String
     */
    public function getTipoEstadoComprobante() {
        return $this->getVtaAjusteHaberTipoEstado()->getDescripcion();
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 12/08/2020 23:45 hs.
     * Metodo generico que devuelve el origen del comprobante
     * @return String
     */
    public function getVtaTipoOrigenComprobanteDescripcion() {
        $descripcion = $this->getVtaTipoOrigenAjusteHaber()->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 12/08/2020 23:45 hs.
     * Metodo generico que devuelve el tipo de comprobante
     * @return String
     */
    public function getVtaTipoComprobanteDescripcion() {
        $descripcion = $this->getVtaTipoAjusteHaber()->getDescripcion();

        return $descripcion;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que se utiliza en la pantalla de conciliacion de comprobantes.
     * Modulo vta_comprobante_gestion.
     * @todo Falta terminar el metodo con las clases de AFIP o terminar de definir el concepto de Ajustes.
     * @return String
     */
    public function getImporteTotalComprobante($resumen = false) {
        
        if($resumen){
            // -------------------------------------------------------------------------
            // se instancia la tabla de resumen
            // -------------------------------------------------------------------------
            $vta_ajuste_haber_importe = $this->getResumenComprobante();
            return $vta_ajuste_haber_importe->getImporteTotal();
        }
        
        $vta_ajuste_importe_total = 0;

        // Importes de la generacion del Ajuste a travez de los items
        $vta_ajuste_haber_item_subtotal = $this->getVtaAjusteHaberItemSubtotal();
        $vta_ajuste_haber_item_iva = $this->getVtaAjusteHaberItemIva();
        $vta_ajuste_haber_item_vta_tributo = $this->getVtaAjusteHaberItemImporteTributo();

        $vta_ajuste_importe_total = $vta_ajuste_haber_item_subtotal + $vta_ajuste_haber_item_iva + $vta_ajuste_haber_item_vta_tributo;

        return $vta_ajuste_importe_total;
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
     * Metodo que retorna el iva de los items del Ajuste.
     * @return type float
     */
    public function getVtaAjusteHaberItemIva() {
        $iva = 0;
        
        // items
        $vta_ajuste_haber_items = $this->getVtaAjusteHaberItems(null, null, true);

        foreach ($vta_ajuste_haber_items as $vta_ajuste_haber_item) {
            $gral_tipo_iva = $vta_ajuste_haber_item->getGralTipoIva();
            $valor_iva_coeficiente = $gral_tipo_iva->getValorIva() / 100;

            $importe_unitario = round($vta_ajuste_haber_item->getImporteUnitario(), 2);
            $cantidad = $vta_ajuste_haber_item->getCantidad();
            $iva += $importe_unitario * $cantidad * $valor_iva_coeficiente;
        }

        // anuladas
        $vta_ajuste_haber_vta_ajuste_debe_vta_orden_ventas = $this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas(null, null, true);

        foreach ($vta_ajuste_haber_vta_ajuste_debe_vta_orden_ventas as $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta) {
            $gral_tipo_iva = $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getGralTipoIva();
            $valor_iva_coeficiente = $gral_tipo_iva->getValorIva() / 100;

            $importe_unitario = round($vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getImporteUnitario(), 2);
            $cantidad = $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getCantidad();
            $iva += $importe_unitario * $cantidad * $valor_iva_coeficiente;
        }
        
        return $iva;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que retorna el importe total de los tributos del Ajuste generado por la carga de los Items.
     * @return Float
     */
    public function getVtaAjusteHaberItemImporteTributo() {
        $importe_tributo = 0;
        $vta_ajuste_haber_vta_tributos = $this->getVtaAjusteHaberVtaTributos(null, null, true);

        foreach ($vta_ajuste_haber_vta_tributos as $vta_ajuste_vta_tributo) {
            $importe_tributo += round($vta_ajuste_vta_tributo->getImporteTributo(), 2);
        }

        return $importe_tributo;
    }

    /**
     * Metodo que retorna el subtotal de los items del ajuste sin iva.
     * @return type float
     */
    public function getVtaAjusteHaberItemSubtotal() {
        // items
        $vta_ajuste_haber_items = $this->getVtaAjusteHaberItems(null, null, true);

        foreach ($vta_ajuste_haber_items as $vta_ajuste_haber_item) {
            $importe_unitario = round($vta_ajuste_haber_item->getImporteUnitario(), 2);
            $cantidad = $vta_ajuste_haber_item->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }
        
        // anuladas
        $vta_ajuste_haber_vta_ajuste_debe_vta_orden_ventas = $this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas(null, null, true);

        foreach ($vta_ajuste_haber_vta_ajuste_debe_vta_orden_ventas as $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta) {
            $importe_unitario = round($vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getImporteUnitario(), 2);
            $cantidad = $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }        
        return $subtotal;
    }

    /**
     * Metodo que retorna el subtotal de los items del ajuste sin iva.
     * @return type float
     */
    public function getVtaAjusteHaberSubtotal() {
        // items
        $vta_ajuste_haber_items = $this->getVtaAjusteHaberItems(null, null, true);

        foreach ($vta_ajuste_haber_items as $vta_ajuste_haber_item) {
            $importe_unitario = round($vta_ajuste_haber_item->getImporteUnitario(), 2);
            $cantidad = $vta_ajuste_haber_item->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }
        
        // anuladas
        $vta_ajuste_haber_vta_ajuste_debe_vta_orden_ventas = $this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas(null, null, true);

        foreach ($vta_ajuste_haber_vta_ajuste_debe_vta_orden_ventas as $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta) {
            $importe_unitario = round($vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getImporteUnitario(), 2);
            $cantidad = $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getCantidad();
            $subtotal += $importe_unitario * $cantidad;
        }        
        return $subtotal;
    }

    public function getVtaAjusteHaberSubtotalParaComprobante() {
        $vta_tipo_ajuste_haber = $this->getVtaTipoAjusteHaber();

        switch ($vta_tipo_ajuste_haber->getCodigo()) {
            case VtaTipoAjusteHaber::TIPO_AJUSTE_A:
                $importe = $this->getVtaAjusteSubtotal();
                break;
            case VtaTipoAjusteHaber::TIPO_AJUSTE_B:
                $importe = $this->getVtaAjusteHaberSubtotal() + $this->getVtaAjusteHaberIva();
                break;
            default:
                $importe = $this->getVtaAjusteHaberSubtotal() + $this->getVtaAjusteHaberIva();
        }

        return $importe;
    }

    /**
     * Metodo que retorna el iva de los items del Ajuste.
     * @return type float
     */
    public function getVtaAjusteHaberIva() {
        $iva = 0;
        
        // items
        $vta_ajuste_haber_items = $this->getVtaAjusteHaberItems(null, null, true);

        foreach ($vta_ajuste_haber_items as $vta_ajuste_haber_item) {
            $gral_tipo_iva = $vta_ajuste_haber_item->getGralTipoIva();
            $valor_iva_coeficiente = $gral_tipo_iva->getValorIva() / 100;

            $importe_unitario = round($vta_ajuste_haber_item->getImporteUnitario(), 2);
            $cantidad = $vta_ajuste_haber_item->getCantidad();
            $iva += $importe_unitario * $cantidad * $valor_iva_coeficiente;
        }

        // anuladas
        $vta_ajuste_haber_vta_ajuste_debe_vta_orden_ventas = $this->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas(null, null, true);

        foreach ($vta_ajuste_haber_vta_ajuste_debe_vta_orden_ventas as $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta) {
            $gral_tipo_iva = $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getGralTipoIva();
            $valor_iva_coeficiente = $gral_tipo_iva->getValorIva() / 100;

            $importe_unitario = round($vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getImporteUnitario(), 2);
            $cantidad = $vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta->getCantidad();
            $iva += $importe_unitario * $cantidad * $valor_iva_coeficiente;
        }
        
        return round($iva, 2);
    }

    /**
     * Metodo que retorna el valor de los tributos de la factura.
     * @return type float
     */
    public function getArrVtaTributosAplicados() {
        $vta_ajuste_haber_vta_tributos = $this->getVtaAjusteHaberVtaTributos(null, null, true);

        foreach ($vta_ajuste_haber_vta_tributos as $vta_ajuste_haber_vta_tributo) {
            $vta_tributo = $vta_ajuste_haber_vta_tributo->getVtaTributo();
            $importe_total_tributo = $vta_ajuste_haber_vta_tributo->getImporteTributo();

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
     * Metodo que retorna el importe total de los tributos del Ajuste generado por la carga de los Items.
     * @return Float
     */
    public function getVtaAjusteHaberTributo() {
        $importe_tributo = 0;
        return $importe_tributo;
        $vta_ajuste_haber_vta_tributos = $this->getVtaAjusteHaberVtaTributos(null, null, true);

        foreach ($vta_ajuste_haber_vta_tributos as $vta_ajuste_vta_tributo) {
            $importe_tributo += round($vta_ajuste_vta_tributo->getImporteTributo(), 2);
        }

        return $importe_tributo;
    }

    /**
     * Metodo que retorna el total del ajuste con iva y tributos.
     * @return type float
     */
    public function getVtaAjusteHaberTotal() {
        $total = $this->getVtaAjusteHaberSubtotal() + $this->getVtaAjusteHaberIva() + $this->getVtaAjusteHaberTributo();
        return $total;
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 09/05/2018 11:00 hs.
     * Metodo que retorna una coleccion de Ajustes para imputar en las ND y Facturas.
     * @return VtaAjustes
     */
    static function getVtaAjusteHabersImputables($cli_cliente_id, $gral_empresa_id, $vta_tipo_ajuste_haber_codigo = false) {

        $criterio = new Criterio(VtaAjusteHaber::SES_CRITERIOS);
        $criterio->setAmbiguo(false);
        $criterio->addDistinct(true);

        $criterio->addInicioSubconsulta();
        $criterio->add('', 'true', '', false, "");

        $criterio->add(VtaAjusteHaber::GEN_ATTR_CLI_CLIENTE_ID, $cli_cliente_id, Criterio::IGUAL);
        $criterio->add(VtaAjusteHaber::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa_id, Criterio::IGUAL);
        $criterio->addFinSubconsulta();

        //----------------------------------------------
        // Aca va un inicio de subconsulta con el fin y despues los join
        //----------------------------------------------
        $criterio->addInicioSubconsulta();
        //$criterio->add('', 'true', '', false, "");
        //$criterio->add(VtaAjusteHaberTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $criterio->add(VtaAjusteHaberTipoEstado::GEN_ATTR_IMPUTABLE, 1, Criterio::IGUAL);
        //$criterio->add(VtaAjusteHaberTipoEstado::GEN_ATTR_TERMINAL, 0, Criterio::IGUAL);
        if ($vta_tipo_ajuste_haber_codigo) {
            $criterio->add(VtaTipoAjusteHaber::GEN_ATTR_CODIGO, $vta_tipo_ajuste_haber_codigo, Criterio::IGUAL);
        }

        $criterio->addRealJoin(VtaAjusteHaberTipoEstado::GEN_TABLA, VtaAjusteHaberTipoEstado::GEN_ATTR_ID, VtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_TIPO_ESTADO_ID, 'LEFT JOIN');
        $criterio->addRealJoin(VtaTipoAjusteHaber::GEN_TABLA, VtaTipoAjusteHaber::GEN_ATTR_ID, VtaAjusteHaber::GEN_ATTR_VTA_TIPO_AJUSTE_HABER_ID, 'LEFT JOIN');
        $criterio->addFinSubconsulta();

        $criterio->addTabla(VtaAjusteHaber::GEN_TABLA);
        $criterio->setCriterios();

        $vta_ajustes = VtaAjusteHaber::getVtaAjusteHabers(null, $criterio, true);

        return $vta_ajustes;
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
     * Metodo que retorna el importe disponible a imputar de un Ajuste.
     * @return Float
     */
    public function getSaldoImputable() {
        $importe_total_comprobante_afectado = 0;

        // Busco el importe total de la Factura
        $importe_total_comprobante = $this->getImporteTotalComprobante($resumen = true);

        // Busco el importe total ya imputado con Facturas
        $vta_factura_vta_ajuste_habers = $this->getVtaFacturaVtaAjusteHabers(null, null, true);
        foreach ($vta_factura_vta_ajuste_habers as $vta_factura_vta_ajuste_haber) {
            $importe_total_comprobante_afectado += $vta_factura_vta_ajuste_haber->getImporteAfectado();
        }

        // Busco el importe total ya imputado con Notas de Debitos
        $vta_nota_debito_vta_ajuste_habers = $this->getVtaNotaDebitoVtaAjusteHabers(null, null, true);
        foreach ($vta_nota_debito_vta_ajuste_habers as $vta_nota_debito_vta_ajuste_haber) {
            $importe_total_comprobante_afectado += $vta_nota_debito_vta_ajuste_haber->getImporteAfectado();
        }

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
     * Autor: Pablo Rosen
     * Fecha: 03/11/2018 17:06 hs.
     * Metodo utilizado en la imputacion de comprobantes.
     * @return 
     */
    public function setImputarVtaComprobante($recalcular_estado, $vta_nota_debito_ids = null, $vta_factura_ids = null, $vta_ajuste_debe_ids = null) {
        // Importe a imputar
        $vta_ajuste_importe_total_a_imputar = $this->getSaldoImputable();

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


        $vta_ajuste_haber_importe_a_imputar = $vta_ajuste_importe_total_a_imputar;
        // Genero el vinculo con el comprobante correspondiente
        foreach ($vta_comprobantes as $vta_comprobante) {

            if ((int) ($vta_ajuste_haber_importe_a_imputar * 100) > 0) {
                $clase = get_class($vta_comprobante);

                if ($clase == 'VtaNotaDebito') {
                    $vta_nota_debito = VtaNotaDebito::getOxId($vta_comprobante->getId());
                    $vta_nota_debito_importe_disponible = $vta_nota_debito->getSaldoImputable();

                    // Genero la relacion
                    $vta_nota_debito_vta_ajuste_haber = new VtaNotaDebitoVtaAjusteHaber();

                    $vta_nota_debito_vta_ajuste_haber->setVtaNotaDebitoId($vta_nota_debito->getId());
                    $vta_nota_debito_vta_ajuste_haber->setVtaAjusteHaberId($this->getId());
                    $vta_nota_debito_vta_ajuste_haber->setEstado(1);

                    // Monto de la factura mayor o igual al de la NC
                    if ((int) ($vta_ajuste_haber_importe_a_imputar * 100) < (int) ($vta_nota_debito_importe_disponible * 100)) {

                        $vta_nota_debito_vta_ajuste_haber->setImporteAfectado($vta_ajuste_haber_importe_a_imputar);
                        // Cambio el estado de la NC
                        $vta_nota_debito->setVtaNotaDebitoEstado(VtaNotaDebitoTipoEstado::TIPO_SALDADO_PARCIAL, '');
                    } else {
                        $vta_nota_debito_vta_ajuste_haber->setImporteAfectado($vta_nota_debito_importe_disponible);

                        // Cambio el estado de la NC
                        $vta_nota_debito->setVtaNotaDebitoEstado(VtaNotaDebitoTipoEstado::TIPO_SALDADO, '');
                    }
                    $vta_ajuste_haber_importe_a_imputar -= $vta_nota_debito_importe_disponible;
                    $vta_nota_debito_vta_ajuste_haber->save();
                } elseif ($clase == 'VtaFactura') {
                    $vta_factura = VtaFactura::getOxId($vta_comprobante->getId());

                    $vta_factura_importe_disponible = $vta_factura->getSaldoImputable();

                    // Genero la relacion
                    $vta_factura_vta_ajuste_haber = new VtaFacturaVtaAjusteHaber();

                    $vta_factura_vta_ajuste_haber->setVtaFacturaId($vta_factura->getId());
                    $vta_factura_vta_ajuste_haber->setVtaAjusteHaberId($this->getId());
                    $vta_factura_vta_ajuste_haber->setEstado(1);

                    // Monto del Ajuste mayor o igual al de la factura
                    if ((int) ($vta_ajuste_haber_importe_a_imputar * 100) < (int) ($vta_factura_importe_disponible * 100)) {

                        $vta_factura_vta_ajuste_haber->setImporteAfectado($vta_ajuste_haber_importe_a_imputar);
                        // Cambio el estado de la Factura
                        $vta_factura_tipo_estado = $vta_factura->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_SALDADO_PARCIAL, '');
                        // $vta_ajuste_haber_importe_a_imputar = 0;
                    } else {
                        $vta_factura_vta_ajuste_haber->setImporteAfectado($vta_factura_importe_disponible);

                        // Cambio el estado del Ajuste
                        $vta_factura_tipo_estado = $vta_factura->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_SALDADO, '');
                        // $vta_ajuste_haber_importe_a_imputar -= $vta_factura_importe_disponible;
                    }
                    $vta_ajuste_haber_importe_a_imputar -= $vta_factura_importe_disponible;
                    $vta_factura_vta_ajuste_haber->save();
                } elseif ($clase == 'VtaAjusteDebe') {
                    $vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_comprobante->getId());

                    $vta_ajuste_importe_disponible = $vta_ajuste_debe->getSaldoImputable();

                    // Genero la relacion
                    $vta_ajuste_debe_vta_ajuste_haber = new VtaAjusteDebeVtaAjusteHaber();
                    $vta_ajuste_debe_vta_ajuste_haber->setVtaAjusteHaberId($this->getId());
                    $vta_ajuste_debe_vta_ajuste_haber->setVtaAjusteDebeId($vta_ajuste_debe->getId());

                    // Monto del Ajuste mayor o igual al de la factura
                    if ((int) ($vta_ajuste_haber_importe_a_imputar * 100) < (int) ($vta_ajuste_importe_disponible * 100)) {

                        $vta_ajuste_debe_vta_ajuste_haber->setImporteAfectado($vta_ajuste_haber_importe_a_imputar);
                    } else {
                        $vta_ajuste_debe_vta_ajuste_haber->setImporteAfectado($vta_ajuste_importe_disponible);
                    }
                    $vta_ajuste_debe_vta_ajuste_haber->setEstado(1);
                    $vta_ajuste_debe_vta_ajuste_haber->save();

                    $vta_ajuste_haber_importe_a_imputar -= $vta_ajuste_importe_disponible;
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
     * @return Obj VtaAjusteEstado
     */
    public function setRecalcularEstado($recursivo = false) {

        // Importe imputable del comprobante
        $importe_comprobante_total = $this->getImporteTotalComprobante();

        $importe_comprobante_saldo = $importe_comprobante_total;

        $vta_factura_vta_ajuste_habers = $this->getVtaFacturaVtaAjusteHabers(null, null, true);
        $vta_nota_debito_vta_ajuste_habers = $this->getVtaNotaDebitoVtaAjusteHabers(null, null, true);
        $vta_ajuste_debe_vta_ajuste_habers = $this->getVtaAjusteDebeVtaAjusteHabers(null, null, true);

        // ---------------------------------------------------------------------
        // se recorren las facturas vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_factura_vta_ajuste_habers as $vta_factura_vta_ajuste_haber) {
            $importe_afectado = $vta_factura_vta_ajuste_haber->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $vta_factura_vta_ajuste_haber->getVtaFactura()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren las notas de debito vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_nota_debito_vta_ajuste_habers as $vta_nota_debito_vta_ajuste) {
            $importe_afectado = $vta_nota_debito_vta_ajuste->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $vta_nota_debito_vta_ajuste->getVtaNotaDebito()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren los ajustes vinculados
        // ---------------------------------------------------------------------
        foreach ($vta_ajuste_debe_vta_ajuste_habers as $vta_ajuste_debe_vta_ajuste_haber) {
            $importe_afectado = $vta_ajuste_debe_vta_ajuste_haber->getImporteAfectado();
            $importe_comprobante_saldo -= $importe_afectado;

            if ($recursivo) {
                $vta_ajuste_debe_vta_ajuste_haber->getVtaAjusteDebe()->setRecalcularEstado(false);
            }
        }

        if ((abs($importe_comprobante_saldo) >= 0) && (abs($importe_comprobante_saldo) <= ConfVariable::getImporteMargenToleranciaConciliacionSaldado())) {
            // -----------------------------------------------------------------
            // si tiene saldo cero el comprobante fue usado en su totalidad
            // -----------------------------------------------------------------

            $vta_ajuste_haber_estado = $this->setVtaAjusteHaberEstado(VtaAjusteHaberTipoEstado::TIPO_IMPUTADO, '');
        } elseif ($importe_comprobante_saldo > ConfVariable::getImporteMargenToleranciaConciliacionSaldado() && $importe_comprobante_saldo != $importe_comprobante_total) {
            // -----------------------------------------------------------------
            // si tiene saldo mayor a cero el comprobante fue usado parcialmente
            // -----------------------------------------------------------------
            $vta_ajuste_haber_estado = $this->setVtaAjusteHaberEstado(VtaAjusteHaberTipoEstado::TIPO_IMPUTADO_PARCIAL, '');
        } elseif ($importe_comprobante_saldo == $importe_comprobante_total) {
            // -----------------------------------------------------------------
            // si tiene saldo igual al total se encuentra pendiente de pago
            // -----------------------------------------------------------------
            $vta_ajuste_haber_estado = $this->setVtaAjusteHaberEstado(VtaAjusteHaberTipoEstado::TIPO_PENDIENTE, '');
        }


        return $vta_ajuste_haber_estado;
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

        $vta_factura_vta_ajuste_habers = $this->getVtaFacturaVtaAjusteHabers(null, null, true);
        $vta_nota_debito_vta_ajuste_habers = $this->getVtaNotaDebitoVtaAjusteHabers(null, null, true);
        $vta_ajuste_debe_vta_ajuste_habers = $this->getVtaAjusteDebeVtaAjusteHabers(null, null, true);

        // ---------------------------------------------------------------------
        // se recorren las facturas vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_factura_vta_ajuste_habers as $vta_factura_vta_ajuste_haber) {
            $vta_factura_vta_ajuste_haber->setEstado(0);
            $vta_factura_vta_ajuste_haber->save();

            if ($recursivo) {
                $vta_factura_vta_ajuste_haber->getVtaFactura()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren las notas de debito vinculadas
        // ---------------------------------------------------------------------
        foreach ($vta_nota_debito_vta_ajuste_habers as $vta_nota_debito_vta_ajuste) {
            $vta_nota_debito_vta_ajuste->setEstado(0);
            $vta_nota_debito_vta_ajuste->save();

            if ($recursivo) {
                $vta_nota_debito_vta_ajuste->getVtaNotaDebito()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recorren los ajustes vinculados
        // ---------------------------------------------------------------------
        foreach ($vta_ajuste_debe_vta_ajuste_habers as $vta_ajuste_debe_vta_ajuste_haber) {
            $vta_ajuste_debe_vta_ajuste_haber->setEstado(0);
            $vta_ajuste_debe_vta_ajuste_haber->save();

            if ($recursivo) {
                $vta_ajuste_debe_vta_ajuste_haber->getVtaAjusteDebe()->setRecalcularEstado(false);
            }
        }

        // ---------------------------------------------------------------------
        // se recalcula estado del comprobante
        // ---------------------------------------------------------------------        
        $this->setRecalcularEstado(false);

        return true;
    }

    public function getVtaComprobanteTipoEstado() {
        return $this->getVtaAjusteHaberTipoEstado();
    }

    /**
     * Metodo que retorna los comprobantes vinculados al comprobante por conciliacion
     */
    public function getVtaComprobantesVinculadosPorConciliacion() {

        $vta_factura_vta_ajuste_habers = $this->getVtaFacturaVtaAjusteHabers(null, null, true);
        $vta_nota_debito_vta_ajuste_habers = $this->getVtaNotaDebitoVtaAjusteHabers(null, null, true);
        $vta_ajuste_debe_vta_ajuste_habers = $this->getVtaAjusteDebeVtaAjusteHabers(null, null, true);

        $vta_facturas = $this->getVtaFacturasXVtaFacturaVtaAjusteHaber(null, null, true);
        $vta_nota_debitos = $this->getVtaNotaDebitosXVtaNotaDebitoVtaAjusteHaber(null, null, true);
        $vta_ajuste_debes = $this->getVtaAjusteDebesXVtaAjusteDebeVtaAjusteHaber(null, null, true);

        $arr_comprobantes['INTERMEDIO'] = array_merge($vta_factura_vta_ajuste_habers, $vta_nota_debito_vta_ajuste_habers, $vta_ajuste_debe_vta_ajuste_habers);
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
        //Solo en VtaAjusteHaber hacer criterio
        return true;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 11/05/2019
     */
    public function setVtaAjusteHaberAnular($observacion = '') {
        $vta_ajuste_haber_estado = $this->setVtaAjusteHaberEstado(VtaAjusteHaberTipoEstado::TIPO_ANULADO, $observacion);
        //return;
        $vta_ajuste_haber_items = $this->getVtaAjusteHaberItems();
        foreach ($vta_ajuste_haber_items as $vta_ajuste_haber_item) {
            $fnd_chq_cheque = $vta_ajuste_haber_item->getFndChqCheque();
            if ($fnd_chq_cheque) {
                $fnd_chq_cheque->setRetrotraerFndChqChequeTipoEstado('Ajuste Haber de Venta Anulado: ' . $observacion);
            }
        }

        return $vta_ajuste_haber_estado;
    }

    /**
     * Actualiza el resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function setActualizarResumenComprobante() {
        $vta_ajuste_haber_importe = $this->getVtaAjusteHaberImporte();

        if (!$vta_ajuste_haber_importe) {
            $vta_ajuste_haber_importe = new VtaAjusteHaberImporte();
        }

        $importe_subtotal = $this->getVtaAjusteHaberSubtotal(false, false);
        $importe_iva = $this->getVtaAjusteHaberIva(false);
        $importe_tributo = $this->getVtaAjusteHaberTributo();
        $importe_total = $importe_subtotal + $importe_iva + $importe_tributo;

        $vta_ajuste_haber_importe->setDescripcion($this->getNumeroComprobanteCompleto());
        $vta_ajuste_haber_importe->setVtaAjusteHaberId($this->getId());
        $vta_ajuste_haber_importe->setImporteSubtotal($importe_subtotal);
        $vta_ajuste_haber_importe->setImporteIva($importe_iva);
        $vta_ajuste_haber_importe->setImporteTributo($importe_tributo);
        $vta_ajuste_haber_importe->setImporteTotal($importe_total);
        $vta_ajuste_haber_importe->setEstado(1);
        $vta_ajuste_haber_importe->save();

        return $vta_ajuste_haber_importe;
    }

    /**
     * Retorna un resumen de comprobante (su extension importe)
     * @return [Object] [Objeto Comprobante Importe]
     */
    public function getResumenComprobante() {
        if ($this->getVtaAjusteHaberImporte()) {
            return $this->getVtaAjusteHaberImporte();
        }

        return new VtaAjusteHaberImporte();
    }

}

?>
