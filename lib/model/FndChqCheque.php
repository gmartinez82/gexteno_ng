<?php

require_once "base/BFndChqCheque.php";

class FndChqCheque extends BFndChqCheque {

    /**
     * @creado_por Esteban Martinez
     * @creado 23/03/2019
     */
    public function getDescripcionCompleta() {
        if ($this->getFndChqTipoEmisor()->getCodigo() == FndChqTipoEmisor::TIPO_PROPIO) {
            $descripcion_completa = $this->getFndChqChequera()->getDescripcion() . ' - ';
        }
        $descripcion_completa = $this->getNumero() . ' - ' . Gral::getFechaToWEB($this->getFechaCobro()) . ' - ' . Gral::_echoImp($this->getImporte(), false, true);
        return $descripcion_completa;
    }
    
    public function getPersonaDescripcion() {
        $texto = '';
        if($this->getVtaReciboId() != 'null'){
            $texto = $this->getVtaRecibo()->getPersonaDescripcion();
        }
        if($this->getVtaAjusteHaberId() != 'null'){
            $texto = $this->getVtaAjusteHaber()->getPersonaDescripcion();
        }
        return $texto;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 08/03/2019
     */
    static function inicializarFndChqCheque($fnd_chq_cheque_id, $chq_chequera_id, $gral_banco_id, $chq_numero_cheque, $chq_importe, $chq_codigo_sucursal, $chq_descripcion, $chq_fecha_emision, $chq_fecha_cobro, $chq_entregador, $chq_firmante, $chq_tipo_emisor_id, $chq_tipo_emision_id, $chq_tipo_pago_id, $chq_cruzado, $chq_observacion) {
        //Es nuevo
        if ($fnd_chq_cheque_id == 0) {
            $fnd_chq_cheque = new FndChqCheque();

            $chq_fecha_emision = Gral::getFechaToDB($chq_fecha_emision);
            $chq_fecha_cobro = Gral::getFechaToDB($chq_fecha_cobro);

            $chq_fecha_acreditacion = Date::sumarDias($chq_fecha_cobro, 1);
            $chq_fecha_vencimiento = Date::sumarDias($chq_fecha_cobro, 30);

            $fnd_chq_cheque->setDescripcion($chq_descripcion);
            $fnd_chq_cheque->setGralBancoId($gral_banco_id);
            $fnd_chq_cheque->setCodigoSucursal($chq_codigo_sucursal);
            $fnd_chq_cheque->setNumero($chq_numero_cheque);
            $fnd_chq_cheque->setImporte($chq_importe);
            $fnd_chq_cheque->setFechaEmision($chq_fecha_emision);
            $fnd_chq_cheque->setFechaCobro($chq_fecha_cobro);
            $fnd_chq_cheque->setFechaAcreditacion($chq_fecha_acreditacion);
            $fnd_chq_cheque->setFechaVencimiento($chq_fecha_vencimiento);
            $fnd_chq_cheque->setFirmante($chq_firmante);
            $fnd_chq_cheque->setEntregador($chq_entregador);
            $fnd_chq_cheque->setCruzado($chq_cruzado);
            $fnd_chq_cheque->setFndChqTipoEmisorId($chq_tipo_emisor_id);
            $fnd_chq_cheque->setFndChqTipoEmisionId($chq_tipo_emision_id);
            $fnd_chq_cheque->setFndChqTipoPagoId($chq_tipo_pago_id);
            $fnd_chq_cheque->setEstado(1);
            $fnd_chq_cheque->setObservacion($chq_observacion);

            if ($fnd_chq_cheque->getFndChqTipoEmisor()->getCodigo() == FndChqTipoEmisor::TIPO_PROPIO) {
                $fnd_chq_cheque->setFndChqChequeraId($chq_chequera_id); // solo si es propio
            }

            $fnd_chq_cheque->save();

            $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_GENERADO, $chq_observacion);
        }//es editar
        elseif ($fnd_chq_cheque_id != 0) {

            // se inicializa objeto de cheque a partir del ID recibido 
            $fnd_chq_cheque = FndChqCheque::getOxId($fnd_chq_cheque_id);

            if ($fnd_chq_cheque) {
                $chq_fecha_emision = Gral::getFechaToDB($chq_fecha_emision);
                $chq_fecha_cobro = Gral::getFechaToDB($chq_fecha_cobro);
                $chq_fecha_acreditacion = Date::sumarDias($chq_fecha_cobro, 1);
                $chq_fecha_vencimiento = Date::sumarDias($chq_fecha_cobro, 30);

                $fnd_chq_cheque->setDescripcion($chq_descripcion);
                $fnd_chq_cheque->setGralBancoId($gral_banco_id);
                $fnd_chq_cheque->setCodigoSucursal($chq_codigo_sucursal);
                $fnd_chq_cheque->setNumero($chq_numero_cheque);
                $fnd_chq_cheque->setImporte($chq_importe);
                $fnd_chq_cheque->setFechaEmision($chq_fecha_emision);
                $fnd_chq_cheque->setFechaCobro($chq_fecha_cobro);
                $fnd_chq_cheque->setFechaAcreditacion($chq_fecha_acreditacion);
                $fnd_chq_cheque->setFechaVencimiento($chq_fecha_vencimiento);
                $fnd_chq_cheque->setFirmante($chq_firmante);
                $fnd_chq_cheque->setEntregador($chq_entregador);
                $fnd_chq_cheque->setCruzado($chq_cruzado);
                $fnd_chq_cheque->setFndChqTipoEmisorId($chq_tipo_emisor_id);
                $fnd_chq_cheque->setFndChqTipoEmisionId($chq_tipo_emision_id);
                $fnd_chq_cheque->setFndChqTipoPagoId($chq_tipo_pago_id);
                $fnd_chq_cheque->setObservacion($chq_observacion);

                if ($fnd_chq_cheque->getFndChqTipoEmisor()->getCodigo() == FndChqTipoEmisor::TIPO_PROPIO) {
                    $fnd_chq_cheque->setFndChqChequeraId($chq_chequera_id); // solo si es propio
                } else {
                    $fnd_chq_cheque->setFndChqChequeraId('null');
                }

                //Gral::prr($fnd_chq_cheque);
                $fnd_chq_cheque->save();

                // ---------------------------------------------------------------------
                // se fuerza control de estado de cheque
                // ---------------------------------------------------------------------
                $fnd_chq_cheque->setAfectarComprobantesVinculadosAlCheque();
            }
        }

        // ---------------------------------------------------------------------
        // se fuerza control de estado de cheque
        // ---------------------------------------------------------------------
        if ($fnd_chq_cheque) {
            $fnd_chq_cheque->controlEstadoDeCheque();
        }
        // ---------------------------------------------------------------------

        return $fnd_chq_cheque;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 06/6/2019
     */
    public function setAfectarComprobantesVinculadosAlCheque() {
        if ($this->getVtaReciboItemId() != 'null') {
            $vta_recibo_item = VtaReciboItem::getOxId($this->getVtaReciboItemId());

            if ($vta_recibo_item) {
                $vta_recibo_item->setDescripcion($this->getDescripcionCompleta());
                $vta_recibo_item->setImporteUnitario($this->getImporte());
                $vta_recibo_item->save();

                //$vta_recibo_item_cheque = new VtaReciboItemCheque();
                $vta_recibo_item_cheque = $vta_recibo_item->getVtaReciboItemCheque();
                if ($vta_recibo_item_cheque) {
                    $vta_recibo_item_cheque->setDescripcion($this->getDescripcionCompleta());
                    $vta_recibo_item_cheque->setGralBancoId($this->getGralBancoId());
                    $vta_recibo_item_cheque->setNumeroCheque($this->getNumero());
                    $vta_recibo_item_cheque->setFechaEmision($this->getFechaEmision());
                    $vta_recibo_item_cheque->setFechaCobro($this->getFechaCobro());
                    $vta_recibo_item_cheque->setFirmante($this->getFirmante());
                    $vta_recibo_item_cheque->setEntregador($this->getEntregador());
                    $vta_recibo_item_cheque->save();
                }

                // -------------------------------------------------------------
                // se recalcula estado del recibo de venta
                // -------------------------------------------------------------
                $vta_recibo = $vta_recibo_item->getVtaRecibo();
                if ($vta_recibo) {
                    $vta_recibo->setRecalcularEstado($recursivo = true);
                }
            }
        }
    }

    /**
     * Tuvo que codificarse nuevamente porque se habia perdido el codigo
     * @creado_por Esteban Martinez
     * @creado 08/03/2019
     */
    static function inicializarFndChqChequeDesdePdeRecibo($fnd_chq_cheque_id, $pde_recibo_item, $arr_sesion) {
        if (!empty($arr_sesion)) {
            if ($pde_recibo_item) {
                $gral_banco_id = $arr_sesion['gral_banco_id'];
                $fnd_chq_codigo_sucursal = $arr_sesion['codigo_sucursal'];
                $fnd_chq_descripcion = $arr_sesion['descripcion'];
                $fnd_chq_entregador = $arr_sesion['entregador'];
                $fnd_chq_firmante = $arr_sesion['firmante'];
                $fnd_chq_numero_cheque = $arr_sesion['numero_cheque'];
                $fnd_chq_fecha_emision = $arr_sesion['fecha_emision'];
                $fnd_chq_fecha_cobro = $arr_sesion['fecha_cobro'];

                $fnd_chq_fecha_acreditacion = Date::sumarDias($fnd_chq_fecha_cobro, 1);
                $fnd_chq_fecha_vencimiento = Date::sumarDias($fnd_chq_fecha_cobro, 30);

                $fnd_chq_chequera_id = $arr_sesion['fnd_chq_chequera_id'];
                $fnd_chq_tipo_emisor_id = $arr_sesion['fnd_chq_tipo_emisor_id'];
                $fnd_chq_tipo_emision_id = $arr_sesion['fnd_chq_tipo_emision_id'];
                $fnd_chq_tipo_pago_id = $arr_sesion['fnd_chq_tipo_pago_id'];
                $fnd_chq_cruzado = $arr_sesion['fnd_chq_cruzado'];
                $fnd_chq_observacion = $arr_sesion['fnd_chq_observacion'];

                $fnd_chq_importe = $pde_recibo_item->getImporteUnitario();
                $pde_recibo_item_id = $pde_recibo_item->getId();
                $pde_recibo_id = $pde_recibo_item->getPdeReciboId();
                $pde_recibo = $pde_recibo_item->getPdeRecibo();

                if ($fnd_chq_cheque_id == 0) {
                    $fnd_chq_cheque = new FndChqCheque();
                    $fnd_chq_cheque->setDescripcion($fnd_chq_descripcion);
                    $fnd_chq_cheque->setFndChqChequeraId($fnd_chq_chequera_id);
                    $fnd_chq_cheque->setGralBancoId($gral_banco_id);
                    $fnd_chq_cheque->setCodigoSucursal($fnd_chq_codigo_sucursal);
                    $fnd_chq_cheque->setNumero($fnd_chq_numero_cheque);
                    $fnd_chq_cheque->setImporte($fnd_chq_importe);
                    $fnd_chq_cheque->setFechaEmision($fnd_chq_fecha_emision);
                    $fnd_chq_cheque->setFechaCobro($fnd_chq_fecha_cobro);
                    $fnd_chq_cheque->setFechaAcreditacion($fnd_chq_fecha_acreditacion);
                    $fnd_chq_cheque->setFechaVencimiento($fnd_chq_fecha_vencimiento);
                    $fnd_chq_cheque->setFirmante($fnd_chq_firmante);
                    $fnd_chq_cheque->setEntregador($fnd_chq_entregador);
                    $fnd_chq_cheque->setCruzado($fnd_chq_cruzado);
                    $fnd_chq_cheque->setFndChqTipoEmisorId($fnd_chq_tipo_emisor_id);
                    $fnd_chq_cheque->setFndChqTipoEmisionId($fnd_chq_tipo_emision_id);
                    $fnd_chq_cheque->setFndChqTipoPagoId($fnd_chq_tipo_pago_id);

                    $fnd_chq_cheque->setPdeReciboId($pde_recibo_id);
                    $fnd_chq_cheque->setPdeReciboItemId($pde_recibo_item_id);

                    $fnd_chq_cheque->setObservacion($fnd_chq_observacion);
                    $fnd_chq_cheque->setEstado(1);
                    $fnd_chq_cheque->save();

                    $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_GENERADO, $observacion = 'Cheque generado desde Recibo de Compra');
                    $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_ENTREGADO, $observacion = 'Cheque entregado al proveedor ' . $pde_recibo->getPersonaDescripcion() . ' en ' . $pde_recibo->getCodigo());
                } elseif ($fnd_chq_cheque_id != 0) {
                    // se inicializa objeto de cheque a partir del ID recibido 
                    $fnd_chq_cheque = FndChqCheque::getOxId($fnd_chq_cheque_id);
                    if ($fnd_chq_cheque) {
                        $fnd_chq_cheque->setPdeReciboId($pde_recibo_id);
                        $fnd_chq_cheque->setPdeReciboItemId($pde_recibo_item_id);
                        $fnd_chq_cheque->save();

                        $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_ENTREGADO, $observacion = 'Cheque entregado al proveedor ' . $pde_recibo->getPersonaDescripcion() . ' en ' . $pde_recibo->getCodigo());
                    }
                }

                // ---------------------------------------------------------------------
                // se fuerza control de estado de cheque
                // ---------------------------------------------------------------------
                if ($fnd_chq_cheque) {
                    $fnd_chq_cheque->controlEstadoDeCheque();
                }
                // ---------------------------------------------------------------------

                return $fnd_chq_cheque;
            }
        }
        return false;
    }

    /**
     * Tuvo que codificarse nuevamente porque se habia perdido el codigo
     * @creado_por Esteban Martinez
     * @creado 26/03/2019
     */
    static function inicializarFndChqChequeDesdeVtaRecibo($fnd_chq_cheque_id, $vta_recibo_item, $arr_sesion) {
        if (!empty($arr_sesion)) {
            if ($vta_recibo_item) {
                $gral_banco_id = $arr_sesion['gral_banco_id'];
                $fnd_chq_codigo_sucursal = $arr_sesion['codigo_sucursal'];
                $fnd_chq_descripcion = $arr_sesion['descripcion'];
                $fnd_chq_entregador = $arr_sesion['entregador'];
                $fnd_chq_firmante = $arr_sesion['firmante'];
                $fnd_chq_numero_cheque = $arr_sesion['numero_cheque'];
                $fnd_chq_fecha_emision = $arr_sesion['fecha_emision'];
                $fnd_chq_fecha_cobro = $arr_sesion['fecha_cobro'];

                $fnd_chq_fecha_acreditacion = Date::sumarDias($fnd_chq_fecha_cobro, 1);
                $fnd_chq_fecha_vencimiento = Date::sumarDias($fnd_chq_fecha_cobro, 30);

                $fnd_chq_chequera_id = $arr_sesion['fnd_chq_chequera_id'];
                $fnd_chq_tipo_emisor_id = $arr_sesion['fnd_chq_tipo_emisor_id'];
                $fnd_chq_tipo_emision_id = $arr_sesion['fnd_chq_tipo_emision_id'];
                $fnd_chq_tipo_pago_id = $arr_sesion['fnd_chq_tipo_pago_id'];
                $fnd_chq_cruzado = $arr_sesion['fnd_chq_cruzado'];
                $fnd_chq_observacion = $arr_sesion['fnd_chq_observacion'];

                $fnd_chq_importe = $vta_recibo_item->getImporteUnitario();
                $vta_recibo_item_id = $vta_recibo_item->getId();
                $vta_recibo_id = $vta_recibo_item->getVtaReciboId();
                $vta_recibo = $vta_recibo_item->getVtaRecibo();

                $fnd_caja = $vta_recibo->getFndCaja();

                if ($fnd_chq_cheque_id == 0) {
                    $fnd_chq_cheque = new FndChqCheque();
                    $fnd_chq_cheque->setDescripcion($fnd_chq_descripcion);
                    $fnd_chq_cheque->setFndChqChequeraId($fnd_chq_chequera_id);
                    $fnd_chq_cheque->setGralBancoId($gral_banco_id);
                    $fnd_chq_cheque->setCodigoSucursal($fnd_chq_codigo_sucursal);
                    $fnd_chq_cheque->setNumero($fnd_chq_numero_cheque);
                    $fnd_chq_cheque->setImporte($fnd_chq_importe);
                    $fnd_chq_cheque->setFechaEmision($fnd_chq_fecha_emision);
                    $fnd_chq_cheque->setFechaCobro($fnd_chq_fecha_cobro);
                    $fnd_chq_cheque->setFechaAcreditacion($fnd_chq_fecha_acreditacion);
                    $fnd_chq_cheque->setFechaVencimiento($fnd_chq_fecha_vencimiento);
                    $fnd_chq_cheque->setFirmante($fnd_chq_firmante);
                    $fnd_chq_cheque->setEntregador($fnd_chq_entregador);
                    $fnd_chq_cheque->setCruzado($fnd_chq_cruzado);
                    $fnd_chq_cheque->setFndChqTipoEmisorId($fnd_chq_tipo_emisor_id);
                    $fnd_chq_cheque->setFndChqTipoEmisionId($fnd_chq_tipo_emision_id);
                    $fnd_chq_cheque->setFndChqTipoPagoId($fnd_chq_tipo_pago_id);

                    $fnd_chq_cheque->setVtaReciboId($vta_recibo_id);
                    $fnd_chq_cheque->setVtaReciboItemId($vta_recibo_item_id);

                    $fnd_chq_cheque->setFndCajaId($fnd_caja->getId());
                    $fnd_chq_cheque->setGralCajaId($fnd_caja->getGralCajaId());

                    $fnd_chq_cheque->setObservacion($fnd_chq_observacion);
                    $fnd_chq_cheque->setEstado(1);
                    $fnd_chq_cheque->save();

                    $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_GENERADO, $observacion = 'Cheque generado desde Recibo de Venta', $fnd_caja);
                    $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_A_DEPOSITAR, $observacion = 'Cheque cobrado del cliente ' . $vta_recibo->getPersonaDescripcion() . ' en ' . $vta_recibo->getCodigo(), $fnd_caja);
                } elseif ($fnd_chq_cheque_id != 0) {
                    // se inicializa objeto de cheque a partir del ID recibido 
                    $fnd_chq_cheque = FndChqCheque::getOxId($fnd_chq_cheque_id);
                    if ($fnd_chq_cheque) {
                        $fnd_chq_cheque->setVtaReciboId($vta_recibo_id);
                        $fnd_chq_cheque->setVtaReciboItemId($vta_recibo_item_id);
                        $fnd_chq_cheque->save();

                        $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_A_DEPOSITAR, $observacion = 'Cheque cobrado del cliente ' . $vta_recibo->getPersonaDescripcion() . ' en ' . $vta_recibo->getCodigo(), $fnd_caja);
                    }
                }

                // ---------------------------------------------------------------------
                // se fuerza control de estado de cheque
                // ---------------------------------------------------------------------
                if ($fnd_chq_cheque) {
                    $fnd_chq_cheque->controlEstadoDeCheque();
                }
                // ---------------------------------------------------------------------

                return $fnd_chq_cheque;
            }
        }
        return false;
    }

    static function inicializarFndChqChequeDesdeVtaAjusteDebe($fnd_chq_cheque_id, $vta_ajuste_debe_item, $arr_sesion) {
        if (!empty($arr_sesion)) {
            if ($vta_ajuste_debe_item) {
                $gral_banco_id = $arr_sesion['gral_banco_id'];
                $fnd_chq_codigo_sucursal = $arr_sesion['codigo_sucursal'];
                $fnd_chq_descripcion = $arr_sesion['descripcion'];
                $fnd_chq_entregador = $arr_sesion['entregador'];
                $fnd_chq_firmante = $arr_sesion['firmante'];
                $fnd_chq_numero_cheque = $arr_sesion['numero_cheque'];
                $fnd_chq_fecha_emision = $arr_sesion['fecha_emision'];
                $fnd_chq_fecha_cobro = $arr_sesion['fecha_cobro'];

                $fnd_chq_fecha_acreditacion = Date::sumarDias($fnd_chq_fecha_cobro, 1);
                $fnd_chq_fecha_vencimiento = Date::sumarDias($fnd_chq_fecha_cobro, 30);

                $fnd_chq_chequera_id = $arr_sesion['fnd_chq_chequera_id'];
                $fnd_chq_tipo_emisor_id = $arr_sesion['fnd_chq_tipo_emisor_id'];
                $fnd_chq_tipo_emision_id = $arr_sesion['fnd_chq_tipo_emision_id'];
                $fnd_chq_tipo_pago_id = $arr_sesion['fnd_chq_tipo_pago_id'];
                $fnd_chq_cruzado = $arr_sesion['fnd_chq_cruzado'];
                $fnd_chq_observacion = $arr_sesion['fnd_chq_observacion'];

                $fnd_chq_importe = $vta_ajuste_debe_item->getImporteUnitario();
                $vta_ajuste_debe_item_id = $vta_ajuste_debe_item->getId();
                $vta_ajuste_debe_id = $vta_ajuste_debe_item->getVtaAjusteDebeId();
                $vta_ajuste_debe = $vta_ajuste_debe_item->getVtaAjusteDebe();

                $fnd_caja = $vta_ajuste_debe->getFndCaja();

                if ($fnd_chq_cheque_id == 0) {
                    $fnd_chq_cheque = new FndChqCheque();
                    $fnd_chq_cheque->setDescripcion($fnd_chq_descripcion);
                    $fnd_chq_cheque->setFndChqChequeraId($fnd_chq_chequera_id);
                    $fnd_chq_cheque->setGralBancoId($gral_banco_id);
                    $fnd_chq_cheque->setCodigoSucursal($fnd_chq_codigo_sucursal);
                    $fnd_chq_cheque->setNumero($fnd_chq_numero_cheque);
                    $fnd_chq_cheque->setImporte($fnd_chq_importe);
                    $fnd_chq_cheque->setFechaEmision($fnd_chq_fecha_emision);
                    $fnd_chq_cheque->setFechaCobro($fnd_chq_fecha_cobro);
                    $fnd_chq_cheque->setFechaAcreditacion($fnd_chq_fecha_acreditacion);
                    $fnd_chq_cheque->setFechaVencimiento($fnd_chq_fecha_vencimiento);
                    $fnd_chq_cheque->setFirmante($fnd_chq_firmante);
                    $fnd_chq_cheque->setEntregador($fnd_chq_entregador);
                    $fnd_chq_cheque->setCruzado($fnd_chq_cruzado);
                    $fnd_chq_cheque->setFndChqTipoEmisorId($fnd_chq_tipo_emisor_id);
                    $fnd_chq_cheque->setFndChqTipoEmisionId($fnd_chq_tipo_emision_id);
                    $fnd_chq_cheque->setFndChqTipoPagoId($fnd_chq_tipo_pago_id);

                    $fnd_chq_cheque->setVtaAjusteDebeId($vta_ajuste_debe_id);
                    $fnd_chq_cheque->setVtaAjusteDebeItemId($vta_ajuste_debe_item_id);

                    $fnd_chq_cheque->setFndCajaId($fnd_caja->getId());
                    $fnd_chq_cheque->setGralCajaId($fnd_caja->getGralCajaId());

                    $fnd_chq_cheque->setObservacion($fnd_chq_observacion);
                    $fnd_chq_cheque->setEstado(1);
                    $fnd_chq_cheque->save();

                    $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_GENERADO, $observacion = 'Cheque generado desde Ajuste Debe', $fnd_caja);
                    $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_A_DEPOSITAR, $observacion = 'Cheque cobrado del cliente ' . $vta_ajuste_debe->getPersonaDescripcion() . ' en ' . $vta_ajuste_debe->getCodigo(), $fnd_caja);
                } elseif ($fnd_chq_cheque_id != 0) {
                    // se inicializa objeto de cheque a partir del ID recibido 
                    $fnd_chq_cheque = FndChqCheque::getOxId($fnd_chq_cheque_id);
                    if ($fnd_chq_cheque) {
                        $fnd_chq_cheque->setVtaAjusteDebeId($vta_ajuste_debe_id);
                        $fnd_chq_cheque->setVtaAjusteDebeItemId($vta_ajuste_debe_item_id);
                        $fnd_chq_cheque->save();

                        $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_A_DEPOSITAR, $observacion = 'Cheque cobrado del cliente ' . $vta_ajuste_debe->getPersonaDescripcion() . ' en ' . $vta_ajuste_debe->getCodigo(), $fnd_caja);
                    }
                }

                // ---------------------------------------------------------------------
                // se fuerza control de estado de cheque
                // ---------------------------------------------------------------------
                if ($fnd_chq_cheque) {
                    $fnd_chq_cheque->controlEstadoDeCheque();
                }
                // ---------------------------------------------------------------------

                return $fnd_chq_cheque;
            }
        }
        return false;
    }

    static function inicializarFndChqChequeDesdeVtaAjusteHaber($fnd_chq_cheque_id, $vta_ajuste_haber_item, $arr_sesion) {
        if (!empty($arr_sesion)) {
            if ($vta_ajuste_haber_item) {
                $gral_banco_id = $arr_sesion['gral_banco_id'];
                $fnd_chq_codigo_sucursal = $arr_sesion['codigo_sucursal'];
                $fnd_chq_descripcion = $arr_sesion['descripcion'];
                $fnd_chq_entregador = $arr_sesion['entregador'];
                $fnd_chq_firmante = $arr_sesion['firmante'];
                $fnd_chq_numero_cheque = $arr_sesion['numero_cheque'];
                $fnd_chq_fecha_emision = $arr_sesion['fecha_emision'];
                $fnd_chq_fecha_cobro = $arr_sesion['fecha_cobro'];

                $fnd_chq_fecha_acreditacion = Date::sumarDias($fnd_chq_fecha_cobro, 1);
                $fnd_chq_fecha_vencimiento = Date::sumarDias($fnd_chq_fecha_cobro, 30);

                $fnd_chq_chequera_id = $arr_sesion['fnd_chq_chequera_id'];
                $fnd_chq_tipo_emisor_id = $arr_sesion['fnd_chq_tipo_emisor_id'];
                $fnd_chq_tipo_emision_id = $arr_sesion['fnd_chq_tipo_emision_id'];
                $fnd_chq_tipo_pago_id = $arr_sesion['fnd_chq_tipo_pago_id'];
                $fnd_chq_cruzado = $arr_sesion['fnd_chq_cruzado'];
                $fnd_chq_observacion = $arr_sesion['fnd_chq_observacion'];

                $fnd_chq_importe = $vta_ajuste_haber_item->getImporteUnitario();
                $vta_ajuste_haber_item_id = $vta_ajuste_haber_item->getId();
                $vta_ajuste_haber_id = $vta_ajuste_haber_item->getVtaAjusteHaberId();
                $vta_ajuste_haber = $vta_ajuste_haber_item->getVtaAjusteHaber();

                $fnd_caja = $vta_ajuste_haber->getFndCaja();

                if ($fnd_chq_cheque_id == 0) {
                    $fnd_chq_cheque = new FndChqCheque();
                    $fnd_chq_cheque->setDescripcion($fnd_chq_descripcion);
                    $fnd_chq_cheque->setFndChqChequeraId($fnd_chq_chequera_id);
                    $fnd_chq_cheque->setGralBancoId($gral_banco_id);
                    $fnd_chq_cheque->setCodigoSucursal($fnd_chq_codigo_sucursal);
                    $fnd_chq_cheque->setNumero($fnd_chq_numero_cheque);
                    $fnd_chq_cheque->setImporte($fnd_chq_importe);
                    $fnd_chq_cheque->setFechaEmision($fnd_chq_fecha_emision);
                    $fnd_chq_cheque->setFechaCobro($fnd_chq_fecha_cobro);
                    $fnd_chq_cheque->setFechaAcreditacion($fnd_chq_fecha_acreditacion);
                    $fnd_chq_cheque->setFechaVencimiento($fnd_chq_fecha_vencimiento);
                    $fnd_chq_cheque->setFirmante($fnd_chq_firmante);
                    $fnd_chq_cheque->setEntregador($fnd_chq_entregador);
                    $fnd_chq_cheque->setCruzado($fnd_chq_cruzado);
                    $fnd_chq_cheque->setFndChqTipoEmisorId($fnd_chq_tipo_emisor_id);
                    $fnd_chq_cheque->setFndChqTipoEmisionId($fnd_chq_tipo_emision_id);
                    $fnd_chq_cheque->setFndChqTipoPagoId($fnd_chq_tipo_pago_id);

                    $fnd_chq_cheque->setVtaAjusteHaberId($vta_ajuste_haber_id);
                    $fnd_chq_cheque->setVtaAjusteHaberItemId($vta_ajuste_haber_item_id);

                    $fnd_chq_cheque->setFndCajaId($fnd_caja->getId());
                    $fnd_chq_cheque->setGralCajaId($fnd_caja->getGralCajaId());

                    $fnd_chq_cheque->setObservacion($fnd_chq_observacion);
                    $fnd_chq_cheque->setEstado(1);
                    $fnd_chq_cheque->save();

                    $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_GENERADO, $observacion = 'Cheque generado desde Ajuste Haber', $fnd_caja);
                    $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_A_DEPOSITAR, $observacion = 'Cheque cobrado del cliente ' . $vta_ajuste_haber->getPersonaDescripcion() . ' en ' . $vta_ajuste_haber->getCodigo(), $fnd_caja);
                } elseif ($fnd_chq_cheque_id != 0) {
                    // se inicializa objeto de cheque a partir del ID recibido 
                    $fnd_chq_cheque = FndChqCheque::getOxId($fnd_chq_cheque_id);
                    if ($fnd_chq_cheque) {
                        $fnd_chq_cheque->setVtaAjusteHaberId($vta_ajuste_haber_id);
                        $fnd_chq_cheque->setVtaAjusteHaberItemId($vta_ajuste_haber_item_id);
                        $fnd_chq_cheque->save();

                        $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_A_DEPOSITAR, $observacion = 'Cheque cobrado del cliente ' . $vta_ajuste_haber->getPersonaDescripcion() . ' en ' . $vta_ajuste_haber->getCodigo(), $fnd_caja);
                    }
                }

                // ---------------------------------------------------------------------
                // se fuerza control de estado de cheque
                // ---------------------------------------------------------------------
                if ($fnd_chq_cheque) {
                    $fnd_chq_cheque->controlEstadoDeCheque();
                }
                // ---------------------------------------------------------------------

                return $fnd_chq_cheque;
            }
        }
        return false;
    }

    /**
     * Tuvo que codificarse nuevamente porque se habia perdido el codigo
     * @creado_por Esteban Martinez
     * @creado 28/03/2019
     */
    static function inicializarFndChqChequeDesdePdeOrdenPago($fnd_chq_cheque_id, $pde_orden_pago_gral_fp_forma_pago, $arr_sesion) {
        if (!empty($arr_sesion)) {
            if ($pde_orden_pago_gral_fp_forma_pago) {
                $gral_banco_id = $arr_sesion['gral_banco_id'];
                $fnd_chq_codigo_sucursal = $arr_sesion['codigo_sucursal'];
                $fnd_chq_descripcion = $arr_sesion['descripcion'];
                $fnd_chq_entregador = $arr_sesion['entregador'];
                $fnd_chq_firmante = $arr_sesion['firmante'];
                $fnd_chq_numero_cheque = $arr_sesion['numero_cheque'];
                $fnd_chq_fecha_emision = $arr_sesion['fecha_emision'];
                $fnd_chq_fecha_cobro = $arr_sesion['fecha_cobro'];

                $fnd_chq_fecha_acreditacion = Date::sumarDias($fnd_chq_fecha_cobro, 1);
                $fnd_chq_fecha_vencimiento = Date::sumarDias($fnd_chq_fecha_cobro, 30);

                $fnd_chq_chequera_id = $arr_sesion['fnd_chq_chequera_id'];
                $fnd_chq_tipo_emisor_id = $arr_sesion['fnd_chq_tipo_emisor_id'];
                $fnd_chq_tipo_emision_id = $arr_sesion['fnd_chq_tipo_emision_id'];
                $fnd_chq_tipo_pago_id = $arr_sesion['fnd_chq_tipo_pago_id'];
                $fnd_chq_cruzado = $arr_sesion['fnd_chq_cruzado'];
                $fnd_chq_observacion = $arr_sesion['fnd_chq_observacion'];

                $fnd_chq_importe = $pde_orden_pago_gral_fp_forma_pago->getImporteAfectado();
                $pde_orden_pago_gral_fp_forma_pago_id = $pde_orden_pago_gral_fp_forma_pago->getId();
                $pde_orden_pago_id = $pde_orden_pago_gral_fp_forma_pago->getPdeOrdenPagoId();
                $pde_orden_pago = $pde_orden_pago_gral_fp_forma_pago->getPdeOrdenPago();

                if ($fnd_chq_cheque_id == 0) {
                    $fnd_chq_cheque = new FndChqCheque();
                    $fnd_chq_cheque->setDescripcion($fnd_chq_descripcion);
                    $fnd_chq_cheque->setFndChqChequeraId($fnd_chq_chequera_id);
                    $fnd_chq_cheque->setGralBancoId($gral_banco_id);
                    $fnd_chq_cheque->setCodigoSucursal($fnd_chq_codigo_sucursal);
                    $fnd_chq_cheque->setNumero($fnd_chq_numero_cheque);
                    $fnd_chq_cheque->setImporte($fnd_chq_importe);
                    $fnd_chq_cheque->setFechaEmision($fnd_chq_fecha_emision);
                    $fnd_chq_cheque->setFechaCobro($fnd_chq_fecha_cobro);
                    $fnd_chq_cheque->setFechaAcreditacion($fnd_chq_fecha_acreditacion);
                    $fnd_chq_cheque->setFechaVencimiento($fnd_chq_fecha_vencimiento);
                    $fnd_chq_cheque->setFirmante($fnd_chq_firmante);
                    $fnd_chq_cheque->setEntregador($fnd_chq_entregador);
                    $fnd_chq_cheque->setCruzado($fnd_chq_cruzado);
                    $fnd_chq_cheque->setFndChqTipoEmisorId($fnd_chq_tipo_emisor_id);
                    $fnd_chq_cheque->setFndChqTipoEmisionId($fnd_chq_tipo_emision_id);
                    $fnd_chq_cheque->setFndChqTipoPagoId($fnd_chq_tipo_pago_id);

                    $fnd_chq_cheque->setPdeOrdenPagoGralFpFormaPagoId($pde_orden_pago_gral_fp_forma_pago_id);
                    $fnd_chq_cheque->setPdeOrdenPagoId($pde_orden_pago_id);

                    $fnd_chq_cheque->setObservacion($fnd_chq_observacion);
                    $fnd_chq_cheque->setEstado(1);
                    $fnd_chq_cheque->save();

                    $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_GENERADO, $observacion = 'Cheque generado desde Orden de Pago');
                    $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_EN_PROCESO_INTERNO, $observacion = 'Cheque a pagar a proveedor ' . $pde_orden_pago->getPersonaDescripcion() . ' por ' . $pde_orden_pago->getCodigo());
                } elseif ($fnd_chq_cheque_id != 0) {

                    // se inicializa objeto de cheque a partir del ID recibido 
                    $fnd_chq_cheque = FndChqCheque::getOxId($fnd_chq_cheque_id);
                    if ($fnd_chq_cheque) {
                        $fnd_chq_cheque->setPdeOrdenPagoGralFpFormaPagoId($pde_orden_pago_gral_fp_forma_pago_id);
                        $fnd_chq_cheque->setPdeOrdenPagoId($pde_orden_pago_id);
                        $fnd_chq_cheque->save();

                        $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_EN_PROCESO_INTERNO, $observacion = 'Cheque a pagar a proveedor ' . $pde_orden_pago->getPersonaDescripcion() . ' por ' . $pde_orden_pago->getCodigo());
                    }
                }

                // ---------------------------------------------------------------------
                // se fuerza control de estado de cheque
                // ---------------------------------------------------------------------
                if ($fnd_chq_cheque) {
                    $fnd_chq_cheque->controlEstadoDeCheque();
                }
                // ---------------------------------------------------------------------

                return $fnd_chq_cheque;
            }
        }
        return false;
    }

    /**
     * Tuvo que codificarse nuevamente porque se habia perdido el codigo
     * @creado_por Esteban Martinez
     * @creado 01/04/2019
     */
    static function inicializarFndChqChequeDesdeVtaComision($fnd_chq_cheque_id, $vta_comision_gral_fp_forma_pago, $arr_sesion) {
        if (!empty($arr_sesion)) {
            if ($vta_comision_gral_fp_forma_pago) {
                $gral_banco_id = $arr_sesion['gral_banco_id'];
                $fnd_chq_codigo_sucursal = $arr_sesion['codigo_sucursal'];
                $fnd_chq_descripcion = $arr_sesion['descripcion'];
                $fnd_chq_entregador = $arr_sesion['entregador'];
                $fnd_chq_firmante = $arr_sesion['firmante'];
                $fnd_chq_numero_cheque = $arr_sesion['numero_cheque'];
                $fnd_chq_fecha_emision = $arr_sesion['fecha_emision'];
                $fnd_chq_fecha_cobro = $arr_sesion['fecha_cobro'];

                $fnd_chq_fecha_acreditacion = Date::sumarDias($fnd_chq_fecha_cobro, 1);
                $fnd_chq_fecha_vencimiento = Date::sumarDias($fnd_chq_fecha_cobro, 30);

                $fnd_chq_chequera_id = $arr_sesion['fnd_chq_chequera_id'];
                $fnd_chq_tipo_emisor_id = $arr_sesion['fnd_chq_tipo_emisor_id'];
                $fnd_chq_tipo_emision_id = $arr_sesion['fnd_chq_tipo_emision_id'];
                $fnd_chq_tipo_pago_id = $arr_sesion['fnd_chq_tipo_pago_id'];
                $fnd_chq_cruzado = $arr_sesion['fnd_chq_cruzado'];
                $fnd_chq_observacion = $arr_sesion['fnd_chq_observacion'];

                $fnd_chq_importe = $vta_comision_gral_fp_forma_pago->getImporteAfectado();
                $vta_comision_gral_fp_forma_pago_id = $vta_comision_gral_fp_forma_pago->getId();
                $vta_comision_id = $vta_comision_gral_fp_forma_pago->getVtaComisionId();
                $vta_comision = $vta_comision_gral_fp_forma_pago->getVtaComision();

                if ($fnd_chq_cheque_id == 0) {
                    $fnd_chq_cheque = new FndChqCheque();
                    $fnd_chq_cheque->setDescripcion($fnd_chq_descripcion);
                    $fnd_chq_cheque->setFndChqChequeraId($fnd_chq_chequera_id);
                    $fnd_chq_cheque->setGralBancoId($gral_banco_id);
                    $fnd_chq_cheque->setCodigoSucursal($fnd_chq_codigo_sucursal);
                    $fnd_chq_cheque->setNumero($fnd_chq_numero_cheque);
                    $fnd_chq_cheque->setImporte($fnd_chq_importe);
                    $fnd_chq_cheque->setFechaEmision($fnd_chq_fecha_emision);
                    $fnd_chq_cheque->setFechaCobro($fnd_chq_fecha_cobro);
                    $fnd_chq_cheque->setFechaAcreditacion($fnd_chq_fecha_acreditacion);
                    $fnd_chq_cheque->setFechaVencimiento($fnd_chq_fecha_vencimiento);
                    $fnd_chq_cheque->setFirmante($fnd_chq_firmante);
                    $fnd_chq_cheque->setEntregador($fnd_chq_entregador);
                    $fnd_chq_cheque->setCruzado($fnd_chq_cruzado);
                    $fnd_chq_cheque->setFndChqTipoEmisorId($fnd_chq_tipo_emisor_id);
                    $fnd_chq_cheque->setFndChqTipoEmisionId($fnd_chq_tipo_emision_id);
                    $fnd_chq_cheque->setFndChqTipoPagoId($fnd_chq_tipo_pago_id);

                    $fnd_chq_cheque->setVtaComisionGralFpFormaPagoId($vta_comision_gral_fp_forma_pago_id);
                    $fnd_chq_cheque->setVtaComisionId($vta_comision_id);

                    $fnd_chq_cheque->setObservacion($fnd_chq_observacion);
                    $fnd_chq_cheque->setEstado(1);
                    $fnd_chq_cheque->save();

                    $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_GENERADO, $observacion = 'Cheque generado desde Comision de Venta');
                    $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_EN_PROCESO_INTERNO, $observacion = 'Cheque a pagar a comisionista ' . $vta_comision->getPersonaDescripcion() . ' por ' . $vta_comision->getCodigo());
                } elseif ($fnd_chq_cheque_id != 0) {

                    // se inicializa objeto de cheque a partir del ID recibido 
                    $fnd_chq_cheque = FndChqCheque::getOxId($fnd_chq_cheque_id);
                    if ($fnd_chq_cheque) {
                        $fnd_chq_cheque->setVtaComisionGralFpFormaPagoId($vta_comision_gral_fp_forma_pago_id);
                        $fnd_chq_cheque->setVtaComisionId($vta_comision_id);
                        $fnd_chq_cheque->save();

                        $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_GENERADO, $observacion = 'Cheque seleccionado desde Comision de Venta');
                    }
                }

                // ---------------------------------------------------------------------
                // se fuerza control de estado de cheque
                // ---------------------------------------------------------------------
                if ($fnd_chq_cheque) {
                    $fnd_chq_cheque->controlEstadoDeCheque();
                }
                // ---------------------------------------------------------------------

                return $fnd_chq_cheque;
            }
        }
        return false;
    }

    /**
     * 
     * @creado_por Esteban Martinez
     * @creado 28/03/2019
     */
    static function inicializarFndChqChequeDesdeFndCajaMovimiento($fnd_chq_cheque_id, $fnd_caja_movimiento_item, $arr_sesion) {
        if (!empty($arr_sesion)) {
            if ($fnd_caja_movimiento_item) {
                $gral_banco_id = $arr_sesion['gral_banco_id'];
                $fnd_chq_codigo_sucursal = $arr_sesion['codigo_sucursal'];
                $fnd_chq_descripcion = $arr_sesion['descripcion'];
                $fnd_chq_entregador = $arr_sesion['entregador'];
                $fnd_chq_firmante = $arr_sesion['firmante'];
                $fnd_chq_numero_cheque = $arr_sesion['numero_cheque'];
                $fnd_chq_fecha_emision = $arr_sesion['fecha_emision'];
                $fnd_chq_fecha_cobro = $arr_sesion['fecha_cobro'];

                $fnd_chq_fecha_acreditacion = Date::sumarDias($fnd_chq_fecha_cobro, 1);
                $fnd_chq_fecha_vencimiento = Date::sumarDias($fnd_chq_fecha_cobro, 30);

                $fnd_chq_chequera_id = $arr_sesion['fnd_chq_chequera_id'];
                $fnd_chq_tipo_emisor_id = $arr_sesion['fnd_chq_tipo_emisor_id'];
                $fnd_chq_tipo_emision_id = $arr_sesion['fnd_chq_tipo_emision_id'];
                $fnd_chq_tipo_pago_id = $arr_sesion['fnd_chq_tipo_pago_id'];
                $fnd_chq_cruzado = $arr_sesion['fnd_chq_cruzado'];
                $fnd_chq_observacion = $arr_sesion['fnd_chq_observacion'];

                $fnd_chq_importe = $fnd_caja_movimiento_item->getImporte();

                $fnd_caja_movimiento_item_id = $fnd_caja_movimiento_item->getId();
                $fnd_caja_movimiento_id = $fnd_caja_movimiento_item->getFndCajaMovimientoId();

                $fnd_caja_movimiento = $fnd_caja_movimiento_item->getFndCajaMovimiento();

                if ($fnd_chq_cheque_id == 0) {
                    $fnd_chq_cheque = new FndChqCheque();
                    $fnd_chq_cheque->setDescripcion($fnd_chq_descripcion);
                    $fnd_chq_cheque->setFndChqChequeraId($fnd_chq_chequera_id);
                    $fnd_chq_cheque->setGralBancoId($gral_banco_id);
                    $fnd_chq_cheque->setCodigoSucursal($fnd_chq_codigo_sucursal);
                    $fnd_chq_cheque->setNumero($fnd_chq_numero_cheque);
                    $fnd_chq_cheque->setImporte($fnd_chq_importe);
                    $fnd_chq_cheque->setFechaEmision($fnd_chq_fecha_emision);
                    $fnd_chq_cheque->setFechaCobro($fnd_chq_fecha_cobro);
                    $fnd_chq_cheque->setFechaAcreditacion($fnd_chq_fecha_acreditacion);
                    $fnd_chq_cheque->setFechaVencimiento($fnd_chq_fecha_vencimiento);
                    $fnd_chq_cheque->setFirmante($fnd_chq_firmante);
                    $fnd_chq_cheque->setEntregador($fnd_chq_entregador);
                    $fnd_chq_cheque->setCruzado($fnd_chq_cruzado);
                    $fnd_chq_cheque->setFndChqTipoEmisorId($fnd_chq_tipo_emisor_id);
                    $fnd_chq_cheque->setFndChqTipoEmisionId($fnd_chq_tipo_emision_id);
                    $fnd_chq_cheque->setFndChqTipoPagoId($fnd_chq_tipo_pago_id);

                    $fnd_chq_cheque->setFndCajaMovimientoId($fnd_caja_movimiento_id);
                    $fnd_chq_cheque->setFndCajaMovimientoItemId($fnd_caja_movimiento_item_id);

                    $fnd_chq_cheque->setObservacion($fnd_chq_observacion);
                    $fnd_chq_cheque->setEstado(1);
                    //Gral::pr('obj cheque antes save');
                    //Gral::prr($fnd_chq_cheque);
                    $fnd_chq_cheque->save();
                    //Gral::pr('obj cheque despues save');
                    //Gral::prr($fnd_chq_cheque);
                    $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_GENERADO, $observacion = 'Cheque generado desde Movimiento de Cajas');
                    $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_EN_PROCESO_INTERNO, $observacion = 'Movimiento de cheque nuevo desde ' . $fnd_caja_movimiento->getFndCajaOrigenObj()->getGralCaja()->getDescripcion() . ' por movimiento #' . $fnd_caja_movimiento->getId());
                } elseif ($fnd_chq_cheque_id != 0) {
                    // se inicializa objeto de cheque a partir del ID recibido 
                    $fnd_chq_cheque = FndChqCheque::getOxId($fnd_chq_cheque_id);
                    if ($fnd_chq_cheque) {
                        $fnd_chq_cheque->setFndCajaMovimientoId($fnd_caja_movimiento_id);
                        $fnd_chq_cheque->setFndCajaMovimientoItemId($fnd_caja_movimiento_item_id);
                        $fnd_chq_cheque->save();

                        $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_EN_PROCESO_INTERNO, $observacion = 'Movimiento de cheque desde ' . $fnd_caja_movimiento->getFndCajaOrigenObj()->getGralCaja()->getDescripcion() . ' por movimiento #' . $fnd_caja_movimiento->getId());
                    }
                }

                // ---------------------------------------------------------------------
                // se fuerza control de estado de cheque
                // ---------------------------------------------------------------------
                if ($fnd_chq_cheque) {
                    $fnd_chq_cheque->controlEstadoDeCheque();
                }
                // ---------------------------------------------------------------------

                return $fnd_chq_cheque;
            }
        }
        return false;
    }

    /**
     * 
     * @creado_por Esteban Martinez
     * @creado 06/09/2019
     */
    static function inicializarFndChqChequeDesdeFndCajaIngreso($fnd_caja_ingreso_id, $fnd_chq_cheque_id, $var_sesion_modulo) {
        if (!empty($var_sesion_modulo)) {
            $key = 0;

            $arr_fnd_chq_cheque_buscador_cheque_infos = Gral::getSes($var_sesion_modulo);

            if (!is_null($arr_fnd_chq_cheque_buscador_cheque_infos[$key])) {
                $arr_sesion = $arr_fnd_chq_cheque_buscador_cheque_infos[$key];

                $fnd_caja_ingreso = FndCajaIngreso::getOxId($fnd_caja_ingreso_id);
                if ($fnd_caja_ingreso) {
                    $fnd_caja = $fnd_caja_ingreso->getFndCaja();
                }

                $gral_banco_id = $arr_sesion['gral_banco_id'];
                $fnd_chq_codigo_sucursal = $arr_sesion['codigo_sucursal'];
                $fnd_chq_descripcion = $arr_sesion['descripcion'];
                $fnd_chq_entregador = $arr_sesion['entregador'];
                $fnd_chq_firmante = $arr_sesion['firmante'];
                $fnd_chq_numero_cheque = $arr_sesion['numero_cheque'];
                $fnd_chq_fecha_emision = $arr_sesion['fecha_emision'];
                $fnd_chq_fecha_cobro = $arr_sesion['fecha_cobro'];

                $fnd_chq_fecha_acreditacion = Date::sumarDias($fnd_chq_fecha_cobro, 1);
                $fnd_chq_fecha_vencimiento = Date::sumarDias($fnd_chq_fecha_cobro, 30);

                $fnd_chq_chequera_id = $arr_sesion['fnd_chq_chequera_id'];
                $fnd_chq_tipo_emisor_id = $arr_sesion['fnd_chq_tipo_emisor_id'];
                $fnd_chq_tipo_emision_id = $arr_sesion['fnd_chq_tipo_emision_id'];
                $fnd_chq_tipo_pago_id = $arr_sesion['fnd_chq_tipo_pago_id'];
                $fnd_chq_cruzado = $arr_sesion['fnd_chq_cruzado'];
                $fnd_chq_observacion = $arr_sesion['fnd_chq_observacion'];
                $fnd_chq_importe = $arr_sesion['importe_cheque'];

                if ($fnd_chq_cheque_id == 0) {
                    $fnd_chq_cheque = new FndChqCheque();
                    $fnd_chq_cheque->setDescripcion($fnd_chq_descripcion);
                    $fnd_chq_cheque->setFndChqChequeraId($fnd_chq_chequera_id);
                    $fnd_chq_cheque->setGralBancoId($gral_banco_id);
                    $fnd_chq_cheque->setCodigoSucursal($fnd_chq_codigo_sucursal);
                    $fnd_chq_cheque->setNumero($fnd_chq_numero_cheque);
                    $fnd_chq_cheque->setImporte($fnd_chq_importe);
                    $fnd_chq_cheque->setFechaEmision($fnd_chq_fecha_emision);
                    $fnd_chq_cheque->setFechaCobro($fnd_chq_fecha_cobro);
                    $fnd_chq_cheque->setFechaAcreditacion($fnd_chq_fecha_acreditacion);
                    $fnd_chq_cheque->setFechaVencimiento($fnd_chq_fecha_vencimiento);
                    $fnd_chq_cheque->setFirmante($fnd_chq_firmante);
                    $fnd_chq_cheque->setEntregador($fnd_chq_entregador);
                    $fnd_chq_cheque->setCruzado($fnd_chq_cruzado);
                    $fnd_chq_cheque->setFndChqTipoEmisorId($fnd_chq_tipo_emisor_id);
                    $fnd_chq_cheque->setFndChqTipoEmisionId($fnd_chq_tipo_emision_id);
                    $fnd_chq_cheque->setFndChqTipoPagoId($fnd_chq_tipo_pago_id);

                    $fnd_chq_cheque->setFndCajaIngresoId($fnd_caja_ingreso_id);

                    $fnd_chq_cheque->setObservacion($fnd_chq_observacion);
                    $fnd_chq_cheque->setEstado(1);
                    //Gral::pr('obj cheque antes save');
                    //Gral::prr($fnd_chq_cheque);
                    $fnd_chq_cheque->save();
                    //Gral::pr('obj cheque despues save');
                    //Gral::prr($fnd_chq_cheque);
                    $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_GENERADO, $observacion = 'Cheque generado desde Ingreso a Caja');
                    $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_A_DEPOSITAR, $observacion = 'Cheque generado desde ingreso a la caja ' . $fnd_caja->getDescripcion());
                } elseif ($fnd_chq_cheque_id != 0) {
                    // se inicializa objeto de cheque a partir del ID recibido 
                    $fnd_chq_cheque = FndChqCheque::getOxId($fnd_chq_cheque_id);

                    if ($fnd_chq_cheque) {
                        $fnd_chq_cheque->setFndCajaIngresoId($fnd_caja_ingreso_id);
                        $fnd_chq_cheque->save();

                        $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_A_DEPOSITAR, $observacion = 'Cheque generado desde ingreso a la caja ' . $fnd_caja->getDescripcion());
                    }
                }

                // ---------------------------------------------------------------------
                // se fuerza control de estado de cheque
                // ---------------------------------------------------------------------
                if ($fnd_chq_cheque) {
                    $fnd_chq_cheque->controlEstadoDeCheque();
                }
                // ---------------------------------------------------------------------

                return $fnd_chq_cheque;
            }
        }
        return false;
    }

    /**
     * 
     * @creado_por Esteban Martinez
     * @creado 06/09/2019
     */
    static function inicializarFndChqChequeDesdeFndCajaEgreso($fnd_caja_egreso_id, $fnd_chq_cheque_id, $var_sesion_modulo) {
        if (!empty($var_sesion_modulo)) {
            $key = 0;

            $arr_fnd_chq_cheque_buscador_cheque_infos = Gral::getSes($var_sesion_modulo);

            if (!is_null($arr_fnd_chq_cheque_buscador_cheque_infos[$key])) {
                $arr_sesion = $arr_fnd_chq_cheque_buscador_cheque_infos[$key];

                $fnd_caja_egreso = FndCajaEgreso::getOxId($fnd_caja_egreso_id);
                if ($fnd_caja_egreso) {
                    $fnd_caja = $fnd_caja_egreso->getFndCaja();
                }

                $gral_banco_id = $arr_sesion['gral_banco_id'];
                $fnd_chq_codigo_sucursal = $arr_sesion['codigo_sucursal'];
                $fnd_chq_descripcion = $arr_sesion['descripcion'];
                $fnd_chq_entregador = $arr_sesion['entregador'];
                $fnd_chq_firmante = $arr_sesion['firmante'];
                $fnd_chq_numero_cheque = $arr_sesion['numero_cheque'];
                $fnd_chq_fecha_emision = $arr_sesion['fecha_emision'];
                $fnd_chq_fecha_cobro = $arr_sesion['fecha_cobro'];

                $fnd_chq_fecha_acreditacion = Date::sumarDias($fnd_chq_fecha_cobro, 1);
                $fnd_chq_fecha_vencimiento = Date::sumarDias($fnd_chq_fecha_cobro, 30);

                $fnd_chq_chequera_id = $arr_sesion['fnd_chq_chequera_id'];
                $fnd_chq_tipo_emisor_id = $arr_sesion['fnd_chq_tipo_emisor_id'];
                $fnd_chq_tipo_emision_id = $arr_sesion['fnd_chq_tipo_emision_id'];
                $fnd_chq_tipo_pago_id = $arr_sesion['fnd_chq_tipo_pago_id'];
                $fnd_chq_cruzado = $arr_sesion['fnd_chq_cruzado'];
                $fnd_chq_observacion = $arr_sesion['fnd_chq_observacion'];
                $fnd_chq_importe = $arr_sesion['importe_cheque'];

                if ($fnd_chq_cheque_id == 0) {
                    $fnd_chq_cheque = new FndChqCheque();
                    $fnd_chq_cheque->setDescripcion($fnd_chq_descripcion);
                    $fnd_chq_cheque->setFndChqChequeraId($fnd_chq_chequera_id);
                    $fnd_chq_cheque->setGralBancoId($gral_banco_id);
                    $fnd_chq_cheque->setCodigoSucursal($fnd_chq_codigo_sucursal);
                    $fnd_chq_cheque->setNumero($fnd_chq_numero_cheque);
                    $fnd_chq_cheque->setImporte($fnd_chq_importe);
                    $fnd_chq_cheque->setFechaEmision($fnd_chq_fecha_emision);
                    $fnd_chq_cheque->setFechaCobro($fnd_chq_fecha_cobro);
                    $fnd_chq_cheque->setFechaAcreditacion($fnd_chq_fecha_acreditacion);
                    $fnd_chq_cheque->setFechaVencimiento($fnd_chq_fecha_vencimiento);
                    $fnd_chq_cheque->setFirmante($fnd_chq_firmante);
                    $fnd_chq_cheque->setEntregador($fnd_chq_entregador);
                    $fnd_chq_cheque->setCruzado($fnd_chq_cruzado);
                    $fnd_chq_cheque->setFndChqTipoEmisorId($fnd_chq_tipo_emisor_id);
                    $fnd_chq_cheque->setFndChqTipoEmisionId($fnd_chq_tipo_emision_id);
                    $fnd_chq_cheque->setFndChqTipoPagoId($fnd_chq_tipo_pago_id);

                    $fnd_chq_cheque->setFndCajaEgresoId($fnd_caja_egreso_id);

                    $fnd_chq_cheque->setObservacion($fnd_chq_observacion);
                    $fnd_chq_cheque->setEstado(1);
                    //Gral::pr('obj cheque antes save');
                    //Gral::prr($fnd_chq_cheque);
                    $fnd_chq_cheque->save();
                    //Gral::pr('obj cheque despues save');
                    //Gral::prr($fnd_chq_cheque);
                    $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_GENERADO, $observacion = 'Cheque generado desde Egreso de Caja');
                    $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_ENTREGADO, $observacion = 'Cheque generado desde egreso de la caja ' . $fnd_caja->getDescripcion());
                } elseif ($fnd_chq_cheque_id != 0) {
                    // se inicializa objeto de cheque a partir del ID recibido 
                    $fnd_chq_cheque = FndChqCheque::getOxId($fnd_chq_cheque_id);
                    if ($fnd_chq_cheque) {
                        $fnd_chq_cheque->setFndCajaEgresoId($fnd_caja_egreso_id);
                        $fnd_chq_cheque->save();

                        $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado(FndChqTipoEstado::TIPO_ENTREGADO, $observacion = 'Cheque generado desde egreso de la caja ' . $fnd_caja->getDescripcion());
                    }
                }

                // ---------------------------------------------------------------------
                // se fuerza control de estado de cheque
                // ---------------------------------------------------------------------
                if ($fnd_chq_cheque) {
                    $fnd_chq_cheque->controlEstadoDeCheque();
                }
                // ---------------------------------------------------------------------

                return $fnd_chq_cheque;
            }
        }
        return false;
    }

    /**
     * Cambia el estado de un chq_cheque
     * Tuvo que codificarse nuevamente porque se habia perdido el codigo
     * @creado_por Esteban Martinez
     * @creado 07/03/2019
     */
    public function setFndChqEstado($codigo, $observacion = '', $fnd_caja = false) {
        $inicial = 1;
        $fnd_chq_estado = false;

        // se agrega el nuevo estado del factura
        $fnd_chq_tipo_estado = FndChqTipoEstado::getOxCodigo($codigo);

        if ($fnd_chq_tipo_estado) {
            foreach ($this->getFndChqEstados() as $fnd_chq_estado) {
                $fnd_chq_estado->setActual(0);
                $fnd_chq_estado->save();
                $inicial = 0;
            }

            $fnd_chq_estado = new FndChqEstado();
            $fnd_chq_estado->setFndChqChequeId($this->getId());
            $fnd_chq_estado->setFndChqTipoEstadoId($fnd_chq_tipo_estado->getId());
            $fnd_chq_estado->setInicial($inicial);
            $fnd_chq_estado->setActual(1);
            $fnd_chq_estado->setObservacion($observacion);

            if ($fnd_caja) {
                $fnd_chq_estado->setFndCajaId($fnd_caja->getId());
                $fnd_chq_estado->setGralCajaId($fnd_caja->getGralCajaId());
            }

            $fnd_chq_estado->save();

            // actualizamos el estado en pde_recibo      
            $this->setFndChqTipoEstadoId($fnd_chq_tipo_estado->getId());
            $this->save();
        }

        return $fnd_chq_estado;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 14/03/2019
     * @modificado_por Esteban Martinez; Pablo Rosen
     * @modificado 18/03/2019
     * @modificado 17/04/2019
     */
    static function getFndChqChequeXCriterio($en_cartera = -1, $texto = '', $fecha_cobro_desde = '', $fecha_cobro_hasta = '', $importe_desde = false, $importe_hasta = false, $fnd_caja_origen_id = false) {
        $criterio = new Criterio();
        $criterio->addTabla(FndChqCheque::GEN_TABLA);
        $criterio->addRealJoin(FndChqTipoEstado::GEN_TABLA, FndChqTipoEstado::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID);
        $criterio->addRealJoin(FndChqChequera::GEN_TABLA, FndChqChequera::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_FND_CHQ_CHEQUERA_ID, 'LEFT JOIN');
        $criterio->addRealJoin(GralBanco::GEN_TABLA, GralBanco::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_GRAL_BANCO_ID, 'LEFT JOIN');
        $criterio->addRealJoin(FndChqTipoEmisor::GEN_TABLA, FndChqTipoEmisor::GEN_ATTR_ID, FndChqCheque::GEN_ATTR_FND_CHQ_TIPO_EMISOR_ID, 'LEFT JOIN');

        $criterio->add('', 'true', '', false, '');

        //$criterio->addInicioSubconsulta();

        if ($en_cartera != -1) {
            $criterio->add(FndChqTipoEstado::GEN_ATTR_EN_CARTERA, $en_cartera, Criterio::IGUAL);
        }

        if ($fecha_cobro_desde != '') {
            $criterio->add(FndChqCheque::GEN_ATTR_FECHA_COBRO, Gral::getFechaToDB($fecha_cobro_desde), Criterio::MAYORIGUAL);
        }

        if ($fecha_cobro_hasta != '') {
            $criterio->add(FndChqCheque::GEN_ATTR_FECHA_COBRO, Gral::getFechaToDB($fecha_cobro_hasta), Criterio::MENORIGUAL);
        }

        if ($importe_desde != '') {
            $criterio->add(FndChqCheque::GEN_ATTR_IMPORTE, $importe_desde, Criterio::MAYORIGUAL);
        }

        if ($importe_hasta != '') {
            $criterio->add(FndChqCheque::GEN_ATTR_IMPORTE, $importe_hasta, Criterio::MENORIGUAL);
        }

        if ($fnd_caja_origen_id) {
            $fnd_caja_origen = FndCaja::getOxId($fnd_caja_origen_id);
            if ($fnd_caja_origen) {
                $gral_caja_id = $fnd_caja_origen->getGralCajaId();

                $criterio->add(FndChqCheque::GEN_ATTR_GRAL_CAJA_ID, $gral_caja_id, Criterio::IGUAL);
            }
            //$criterio->add(FndChqCheque::GEN_ATTR_FND_CAJA_ID, $fnd_caja_origen_id, Criterio::IGUAL);
        }

        //$criterio->addFinSubconsulta();
        if ($texto != '') {
            $criterio->addInicioSubconsulta();
            $criterio->add(FndChqChequera::GEN_ATTR_DESCRIPCION, $texto, Criterio::LIKE, false, Criterio::_AND);
            $criterio->add(FndChqCheque::GEN_ATTR_NUMERO, $texto, Criterio::LIKE, false, Criterio::_OR);
            $criterio->add(FndChqCheque::GEN_ATTR_CODIGO_SUCURSAL, $texto, Criterio::LIKE, false, Criterio::_OR);
            $criterio->add(FndChqCheque::GEN_ATTR_FIRMANTE, $texto, Criterio::LIKE, false, Criterio::_OR);
            $criterio->add(FndChqCheque::GEN_ATTR_ENTREGADOR, $texto, Criterio::LIKE, false, Criterio::_OR);
            $criterio->add(GralBanco::GEN_ATTR_DESCRIPCION, $texto, Criterio::LIKE, false, Criterio::_OR);
            $criterio->add(FndChqTipoEmisor::GEN_ATTR_DESCRIPCION, $texto, Criterio::LIKE, false, Criterio::_OR);
            $criterio->addFinSubconsulta();
        }

        $criterio->setCriterios();
        $fnd_chq_cheques = FndChqCheque::getFndChqCheques(null, $criterio);

        return $fnd_chq_cheques;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 20/04/2019
     */
    public function getArrChequeInfoDias() {
        $css_info = '';
        $texto_info = '';
        $array_info = array();

        $fecha_vencimiento = $this->getFechaVencimiento();
        $datetime_fecha_vencimiento = date_create($fecha_vencimiento);
        $datetime_fecha_actual = date_create(date('Y-m-d'));

        $dias_para_cobrar = Date::getDiferenciaTiempo('d', date('Y-m-d'), $this->getFechaCobro());
        $dias_para_vencer = Date::getDiferenciaTiempo('d', date('Y-m-d'), $this->getFechaVencimiento());

        if ($datetime_fecha_actual > $datetime_fecha_vencimiento) {
            $css_info = 'rojo';
            $texto_info = abs($dias_para_cobrar) . ' dias vencido';
        } else {
            if ($dias_para_cobrar <= 0) {
                $css_info = 'verde';
                $texto_info = 'Para cobrar';
                $array_info['info_css'] = $css_info;
                $array_info['info_texto'] = $texto_info;
            } elseif ($dias_para_cobrar >= 1 && $dias_para_cobrar <= 7) {
                $css_info = 'amarillo';
                $texto_info = 'Faltan ' . $dias_para_cobrar . ' dias';
                $array_info['info_css'] = $css_info;
                $array_info['info_texto'] = $texto_info;
            } elseif ($dias_para_cobrar > 7) {
                $css_info = 'negro';
                $texto_info = 'Faltan ' . $dias_para_cobrar . ' dias';
                $array_info['info_css'] = $css_info;
                $array_info['info_texto'] = $texto_info;
            }

            if ($dias_para_vencer <= 0) {
                
            } elseif ($dias_para_vencer >= 1 && $dias_para_vencer <= 5) {
                $css_info = 'rojo_fondo';
                $texto_info = 'Vence en ' . $dias_para_vencer . ' dias';
                $array_info['info_css'] = $css_info;
                $array_info['info_texto'] = $texto_info;
            } elseif ($dias_para_vencer > 5 && $dias_para_vencer <= 10) {
                $css_info = 'amarillo_fondo';
                $texto_info = 'Vence en ' . $dias_para_vencer . ' dias';
                $array_info['info_css'] = $css_info;
                $array_info['info_texto'] = $texto_info;
            } elseif ($dias_para_vencer > 10) {
                
            }
        }

        $array_info['info_css'] = $css_info;
        $array_info['info_texto'] = $texto_info;
        $array_info['info_dias'] = $dias_para_cobrar;
        $array_info['info_dias_abs'] = abs($dias_para_cobrar);
        return $array_info;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 07/05/2019
     * @modificado_por Esteban Martinez
     * @modificado 11/05/2019
     */
    public function getFndChqChequeTipoEstadoAnterior() {
        $criterio = new Criterio();
        $criterio->add(FndChqTipoEstado::GEN_ATTR_CODIGO, FndChqTipoEstado::TIPO_EN_PROCESO_INTERNO, Criterio::DISTINTO);
        $criterio->add(FndChqEstado::GEN_ATTR_FND_CHQ_CHEQUE_ID, $this->getId(), Criterio::IGUAL);
        $criterio->add(FndChqEstado::GEN_ATTR_ACTUAL, 0, Criterio::IGUAL);
        $criterio->addTabla(FndChqEstado::GEN_TABLA);
        $criterio->addRealJoin(FndChqTipoEstado::GEN_TABLA, FndChqTipoEstado::GEN_ATTR_ID, FndChqEstado::GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID);
        $criterio->addOrden(FndChqEstado::GEN_ATTR_ID, Criterio::_DESC);
        $criterio->setCriterios();
        $fnd_chq_estados = FndChqEstado::getFndChqEstados(null, $criterio, true);

        if (count($fnd_chq_estados) > 0) {
            foreach ($fnd_chq_estados as $fnd_chq_estado) {
                return $fnd_chq_estado->getFndChqTipoEstado();
            }
        } else {
            return $this->getFndChqTipoEstado();
        }
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 07/05/2019
     * @modificado_por Esteban Martinez
     * @modificado 26/07/2019
     */
    public function setRetrotraerFndChqChequeTipoEstado($observacion = '', $fnd_caja_movimiento = false) {
        // ---------------------------------------------------------------------
        // se obtiene el estado anterior del cheque
        // ---------------------------------------------------------------------
        $fnd_chq_tipo_estado_anterior = $this->getFndChqChequeTipoEstadoAnterior();

        // ---------------------------------------------------------------------
        // se setea el estado anterior al cheque
        // ---------------------------------------------------------------------
        $this->setFndChqEstado($fnd_chq_tipo_estado_anterior->getCodigo(), $observacion);

        // ---------------------------------------------------------------------
        // si recibe un objeto movimiento. Se usa en casos cuando se aprueban movimientos entre caja
        // ---------------------------------------------------------------------
        if ($fnd_caja_movimiento) {
            $fnd_caja_destino = $fnd_caja_movimiento->getFndCajaDestinoObj();

            // -----------------------------------------------------------------
            // setear mismos campos en el estado del cheque
            // -----------------------------------------------------------------
            $fnd_chq_estados = $this->getFndChqEstados();
            foreach ($fnd_chq_estados as $fnd_chq_estado) {
                if ($fnd_chq_estado->getActual()) {
                    $fnd_chq_estado->setFndCajaId($fnd_caja_destino->getId());
                    $fnd_chq_estado->setGralCajaId($fnd_caja_destino->getGralCajaId());
                    $fnd_chq_estado->save();
                }
            }
        }
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/05/2019
     * @modificado_por Pablo Rosenperger, Esteban Martinez
     * @creado 16/05/2019
     */
    public function getFndChqTipoEstadoPosiblesCmb() {
        // *************************************************************************
        // obtenemos los ID de posibles tipos de estado del cheque
        // *************************************************************************
        $criterio = new Criterio();
        $criterio->add(FndChqTipoEmisorFndChqTipoEstado::GEN_ATTR_CAMBIO_MANUAL, 1, Criterio::IGUAL);
        $criterio->add(FndChqTipoEmisor::GEN_ATTR_ID, $this->getFndChqTipoEmisorId(), Criterio::IGUAL);
        $criterio->add(FndChqTipoEstado::GEN_ATTR_ID, $this->getFndChqTipoEstadoId(), Criterio::IGUAL);
        $criterio->addTabla(FndChqTipoEmisorFndChqTipoEstado::GEN_TABLA);
        $criterio->addRealJoin(FndChqTipoEmisor::GEN_TABLA, FndChqTipoEmisor::GEN_ATTR_ID, FndChqTipoEmisorFndChqTipoEstado::GEN_ATTR_FND_CHQ_TIPO_EMISOR_ID);
        $criterio->addRealJoin(FndChqTipoEstado::GEN_TABLA, FndChqTipoEstado::GEN_ATTR_ID, FndChqTipoEmisorFndChqTipoEstado::GEN_ATTR_FND_CHQ_TIPO_ESTADO_ID);
        $criterio->setCriterios();
        $fnd_chq_tipo_emisor_fnd_chq_tipo_estados = FndChqTipoEmisorFndChqTipoEstado::getFndChqTipoEmisorFndChqTipoEstados(null, $criterio);

        if (count($fnd_chq_tipo_emisor_fnd_chq_tipo_estados) > 0) {
            foreach ($fnd_chq_tipo_emisor_fnd_chq_tipo_estados as $fnd_chq_tipo_emisor_fnd_chq_tipo_estado) {
                $fnd_chq_tipo_estado_id = $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEstadoPosible();
                $arr_fnd_chq_tipo_estado_id[] = $fnd_chq_tipo_estado_id;
            }
            $arr_fnd_chq_tipo_estado_id_string = implode(',', $arr_fnd_chq_tipo_estado_id);

            // *************************************************************************
            // obtenemos los ID de posibles tipos de estado del cheque
            // *************************************************************************

            $criterio = new Criterio();
            $criterio->add(FndChqTipoEstado::GEN_ATTR_ID, '(' . $arr_fnd_chq_tipo_estado_id_string . ')', Criterio::IN);
            $criterio->addTabla(FndChqTipoEstado::GEN_TABLA);
            $criterio->setCriterios();
            $fnd_chq_tipo_estados_cmb = FndChqTipoEstado::getFndChqTipoEstadosCmbF(null, $criterio);
        } else {
            $fnd_chq_tipo_estados_cmb = array();
        }

        return $fnd_chq_tipo_estados_cmb;
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 29/05/2019 16:13
     */
    public function controlEstadoDeCheque() {

        $fnd_chq_tipo_emisor = $this->getFndChqTipoEmisor();
        $fnd_chq_tipo_estado = $this->getFndChqTipoEstado();
        $fecha_cobro = $this->getFechaCobro();

        // ---------------------------------------------------------------------
        // Cheques PROPIOS
        // ---------------------------------------------------------------------
        if ($fnd_chq_tipo_emisor && $fnd_chq_tipo_emisor->getCodigo() == FndChqTipoEmisor::TIPO_PROPIO) {
            if ($fnd_chq_tipo_estado) {
                switch ($fnd_chq_tipo_estado->getCodigo()) {
                    case FndChqTipoEstado::TIPO_GENERADO:
                    case FndChqTipoEstado::TIPO_A_PAGAR:
                        if (Date::esRangoValido($fecha_cobro, date('Y-m-d'))) {
                            $fnd_chq_estado = $this->setFndChqEstado(FndChqTipoEstado::TIPO_PROXIMO_A_PAGAR, $observacion = 'Actualizado desde control de fechas');
                            //Gral::pr('Cheque ' . $this->getNumero() . ' proximo para pagar');
                        }
                        break;
                }

                return $fnd_chq_estado;
            }
        }

        // ---------------------------------------------------------------------
        // Cheques TERCEROS
        // ---------------------------------------------------------------------
        if ($fnd_chq_tipo_emisor && $fnd_chq_tipo_emisor->getCodigo() == FndChqTipoEmisor::TIPO_TERCERO) {
            if ($fnd_chq_tipo_estado) {
                switch ($fnd_chq_tipo_estado->getCodigo()) {
                    case FndChqTipoEstado::TIPO_GENERADO:
                    case FndChqTipoEstado::TIPO_A_DEPOSITAR:
                        if (Date::esRangoValido($fecha_cobro, date('Y-m-d'))) {
                            $fnd_chq_estado = $this->setFndChqEstado(FndChqTipoEstado::TIPO_DISPONIBLE_PARA_DEPOSITO, $observacion = 'Actualizado desde control de fechas');
                            //Gral::pr('Cheque ' . $this->getNumero() . ' disponible para cobro');
                        }
                        break;
                }

                return $fnd_chq_estado;
            }
        }
        return false;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 24/09/2019
     */
    public function setDesvincularDeCaja() {
        $this->setFndCajaId('null');
        $this->setGralCajaId('null');
        $this->save();
    }

    
    static function setLogInfoCheque($var_sesion_modulo, $arrays) {
        $fp = fopen(Gral::getPathAbs() . 'admin/ajax/modulos/fnd_chq_cheque_buscador/log_cheques_info/' . $var_sesion_modulo . ".json", "w+");

        fwrite($fp, PHP_EOL);
        fwrite($fp, json_encode(print_r($arrays, true)));
        fclose($fp);
    }

}

?>
