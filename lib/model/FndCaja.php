<?php

require_once "base/BFndCaja.php";

class FndCaja extends BFndCaja {

    public function getDescripcion() {
        $texto = ' #' . $this->getId() . ' - ' . $this->getFndCajero()->getDescripcion() . ' - ' . $this->getGralCaja()->getDescripcion() . ' - ' . Gral::getFechaToWeb($this->getFechaApertura());
        return $texto;
    }

    static function setInicializarCaja($fnd_cajero_id, $gral_caja_id, $saldo_inicial_esperado, $saldo_inicial_real) {
        $fnd_caja_tipo_estado = FndCajaTipoEstado::getOxCodigo(FndCajaTipoEstado::TIPO_ABIERTA);
        $fnd_cajero = FndCajero::getOxId($fnd_cajero_id);

        $descripcion = '';
        $codigo = '';
        $saldo_inicial_diferencia = 0;
        $saldo_inicial_diferencia = $saldo_inicial_real - $saldo_inicial_esperado;

        // se agrega la nueva caja
        $fnd_caja = new FndCaja();
        //$fnd_caja->setFndCajeroId($this->getId());
        $fnd_caja->setFndCajeroId($fnd_cajero_id);
        $fnd_caja->setFndCajaTipoEstadoId($fnd_caja_tipo_estado->getId());
        //$fnd_caja->setDescripcion($descripcion);
        $fnd_caja->setGralCajaId($gral_caja_id);
        $fnd_caja->setCodigo($codigo);
        $fnd_caja->setEstado(1);
        $fnd_caja->setFechaApertura(date('Y-m-d'));
        $fnd_caja->setFechaCierre('1900-01-01');
        $fnd_caja->setFechaRendicion(date('1900-01-01'));
        $fnd_caja->setImporteSaldoInicialEsperado($saldo_inicial_esperado);
        $fnd_caja->setImporteSaldoInicialReal($saldo_inicial_real);
        $fnd_caja->setImporteSaldoInicialDiferencia($saldo_inicial_diferencia);
        $fnd_caja->save();

        //$fnd_caja->setDescripcion($fnd_caja->getGralCaja()->getDescripcion() . ' - ' . date('d/m/Y') . ' - ' . $fnd_cajero->getDescripcion() . ' #' . $fnd_caja->getId());
        $fnd_caja->setCodigo($codigo = 'CAJA-' . str_pad($fnd_caja->getGralCaja()->getId(), 2, 0, STR_PAD_LEFT) . '-' . str_pad($fnd_caja->getId(), 6, 0, STR_PAD_LEFT));
        $fnd_caja->save();

        // se setea el estado de la nueva caja
        $fnd_caja->setFndCajaEstado($fnd_caja_tipo_estado->getCodigo());
    }

    public function setCerrarCaja($gral_billete_ids, $saldo_final, $observacion, $egreso_extraordinario_ajuste, $ingreso_extraordinario_ajuste) {
        $gral_fp_forma_pago_efectivo = GralFpFormaPago::getOxCodigo(GralFpFormaPago::TIPO_CONTADO);
        
        // ---------------------------------------------------------------------
        // se obtiene el importe total en efectivo
        // ---------------------------------------------------------------------
        $importe_efectivo_final_registrado = $this->getImporteEfectivoCaja();
        $importe_efectivo_final_registrado = $importe_efectivo_final_registrado - $saldo_final;

        // -----------------------------------------------------------------
        // se registra el detalle de billetes informado
        // -----------------------------------------------------------------
        foreach ($gral_billete_ids as $gral_billete_id => $cantidad) {
            if ($cantidad != 0) {

                $gral_billete = GralBillete::getOxId($gral_billete_id);

                $importe_total_billete = $gral_billete->getImporte() * $cantidad;
                $importe_efectivo_final_informado += $importe_total_billete;

                $fnd_caja_gral_billete = new FndCajaGralBillete();
                $fnd_caja_gral_billete->setFndCajaId($this->getId());
                $fnd_caja_gral_billete->setGralBilleteId($gral_billete->getId());
                $fnd_caja_gral_billete->setCantidad($cantidad);
                $fnd_caja_gral_billete->setEstado(1);
                $fnd_caja_gral_billete->save();
            }
        }

        $importe_efectivo_final_diferencia = $importe_efectivo_final_informado - $importe_efectivo_final_registrado;

        $ajuste_registrado = false;
        
        // -----------------------------------------------------------------
        // se registra egreso extraordinario por sobrante de caja
        // -----------------------------------------------------------------
        if($egreso_extraordinario_ajuste){
            $fnd_caja_tipo_egreso_ajuste = FndCajaTipoEgreso::getOxCodigo(FndCajaTipoEgreso::TIPO_AJUSTES_CIERRE);
            
            $fnd_caja_egreso = new FndCajaEgreso();
            $fnd_caja_egreso->setFndCajaId($this->getId());
            $fnd_caja_egreso->setGralFpFormaPagoId($gral_fp_forma_pago_efectivo->getId());
            if($fnd_caja_tipo_egreso_ajuste){
                $fnd_caja_egreso->setFndCajaTipoEgresoId($fnd_caja_tipo_egreso_ajuste->getId());                
            }
            $fnd_caja_egreso->setDescripcion('Ajuste Final de Cierre de Caja');
            $fnd_caja_egreso->setObservacion('Creado automaticamente');
            $fnd_caja_egreso->setImporte(abs($importe_efectivo_final_diferencia));
            $fnd_caja_egreso->setEstado(1);
            $fnd_caja_egreso->save();
            
            $ajuste_registrado = true;
        }

        // -----------------------------------------------------------------
        // se registra ingreso extraordinario por faltante de caja
        // -----------------------------------------------------------------
        if($ingreso_extraordinario_ajuste){
            $fnd_caja_tipo_ingreso_ajuste = FndCajaTipoIngreso::getOxCodigo(FndCajaTipoIngreso::TIPO_AJUSTES_CIERRE);
            
            $fnd_caja_ingreso = new FndCajaIngreso();
            $fnd_caja_ingreso->setFndCajaId($this->getId());
            $fnd_caja_ingreso->setGralFpFormaPagoId($gral_fp_forma_pago_efectivo->getId());
            if($fnd_caja_tipo_ingreso_ajuste){
                $fnd_caja_ingreso->setFndCajaTipoIngresoId($fnd_caja_tipo_ingreso_ajuste->getId());                
            }
            $fnd_caja_ingreso->setDescripcion('Ajuste Final de Cierre de Caja');
            $fnd_caja_ingreso->setObservacion('Creado automaticamente');
            $fnd_caja_ingreso->setImporte(abs($importe_efectivo_final_diferencia));
            $fnd_caja_ingreso->setEstado(1);
            $fnd_caja_ingreso->save();
            
            $ajuste_registrado = true;
        }
        
        // -----------------------------------------------------------------
        // se recalculan valores luego de registrar los ajustes
        // -----------------------------------------------------------------
        if($ajuste_registrado){
            $importe_efectivo_final_registrado = $this->getImporteEfectivoCaja();
            $importe_efectivo_final_registrado = $importe_efectivo_final_registrado - $saldo_final;
            $importe_efectivo_final_diferencia = $importe_efectivo_final_informado - $importe_efectivo_final_registrado;
        }
        
        // -----------------------------------------------------------------
        // se setea la fecha de cierre
        // -----------------------------------------------------------------
        $this->setImporteSaldoFinal($saldo_final);
        $this->setImporteEfectivoFinalRegistrado($importe_efectivo_final_registrado);
        $this->setImporteEfectivoFinalInformado($importe_efectivo_final_informado);
        $this->setImporteEfectivoFinalDiferencia($importe_efectivo_final_diferencia);
        $this->setFechaCierre(date('Y-m-d'));
        $this->save();

        // -----------------------------------------------------------------
        // se setea el estado de la nueva caja
        // -----------------------------------------------------------------
        $this->setFndCajaEstado(FndCajaTipoEstado::TIPO_CERRADA, $observacion);
        
    }

    public function getImporteEfectivoCaja() {
        $arr_resumen_caja = $this->getArrResumenCaja();
        $importe_efectivo_final_registrado = $arr_resumen_caja['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['importe'];

        return $importe_efectivo_final_registrado;
    }

    /*
     * @modificado_por Esteban Martinez
     * @modificado 15/08/2019
     * @modificado 20/08/2019
     */

    public function setRendirCaja($fnd_caja_destino_id, $observacion) {
        $es_caja_cerrada = $this->esFndCajaCerrada();
        if ($es_caja_cerrada) {
            // -----------------------------------------------------------------
            // se setea la fecha de rendicion
            // -----------------------------------------------------------------
            $this->setFechaRendicion(date('Y-m-d'));
            $this->save();

            // -----------------------------------------------------------------
            // se setea el estado de la nueva caja
            // -----------------------------------------------------------------
            $fnd_caja_tipo_estado = FndCajaTipoEstado::getOxCodigo(FndCajaTipoEstado::TIPO_RENDIDA);
            $this->setFndCajaEstado($fnd_caja_tipo_estado->getCodigo(), $observacion);


            return; // de aqui para abajo debe reanalizarse la logica por movimiento entre cajas
            //
            // -------------------------------------------------------------
            // -------------------------------------------------------------
            // -------------------------------------------------------------
            $fnd_caja_tipo_movimiento = FndCajaTipoMovimiento::getOxCodigo(FndCajaTipoMovimiento::TIPO_RENDICION);
            $fnd_caja_movimiento_tipo_id = $fnd_caja_tipo_movimiento->getId();

            $fnd_caja_movimiento = new FndCajaMovimiento();
            $fnd_caja_movimiento->setFndCajaOrigen($this->getId());
            $fnd_caja_movimiento->setFndCajaDestino($fnd_caja_destino_id);
            $fnd_caja_movimiento->setFndCajaTipoMovimientoId($fnd_caja_movimiento_tipo_id);
            $fnd_caja_movimiento->setAutorizado(1);
            $fnd_caja_movimiento->setAutorizadoEl(date('Y-m-d H:i:s'));
            $fnd_caja_movimiento->setEstado(1);
            $fnd_caja_movimiento->save();

            $fnd_caja_movimiento_estado = $fnd_caja_movimiento->setFndCajaMovimientoEstado(FndCajaMovimientoTipoEstado::TIPO_APROBADO, $observacion = 'Rendicion de caja registrada por movimiento #' . $fnd_caja_movimiento->getId());

            $arr_resumen_caja = $this->getArrResumenCaja();
            foreach ($arr_resumen_caja['forma_pago'] as $i => $arr_resumen) {
                //$arr_resumen['descripcion'];
                //$arr_resumen['importe'];
                $gral_fp_forma_pago = GralFpFormaPago::getOxCodigo($i); //el objeto forma de pago

                $importe_unitario = $arr_resumen['importe'];

                $fnd_caja_movimiento_item = new FndCajaMovimientoItem();

                $fnd_caja_movimiento_item->setDescripcion($arr_resumen['descripcion']);
                $fnd_caja_movimiento_item->setFndCajaMovimientoId($fnd_caja_movimiento->getId());
                $fnd_caja_movimiento_item->setImporte($importe_unitario);
                $fnd_caja_movimiento_item->setGralFpFormaPagoId($gral_fp_forma_pago->getId());
                $fnd_caja_movimiento_item->setObservacion('');
                $fnd_caja_movimiento_item->setEstado(1);
                $fnd_caja_movimiento_item->save();

                if ($gral_fp_forma_pago->getCodigo() == GralFpFormaPago::TIPO_CHEQUE) {
                    $fnd_caja_destino = FndCaja::getOxId($fnd_caja_destino_id);
                    if ($fnd_caja_destino) {
                        $gral_caja_destino = $fnd_caja_destino->getGralCaja();

                        foreach ($arr_resumen as $indice_arr_resumen => $resumen_cheques) {
                            if ($indice_arr_resumen == 'cheques') {
                                foreach ($resumen_cheques as $resumen_cheque) {
                                    $fnd_chq_cheque = FndChqCheque::getOxId($resumen_cheque);
                                    if ($fnd_chq_cheque) {
                                        $fnd_chq_cheque->setFndCajaId($fnd_caja_destino->getId());
                                        $fnd_chq_cheque->setGralCajaId($gral_caja_destino->getId());
                                        $fnd_chq_cheque->save();

                                        //se registrar el cambio de caja del cheque
                                        $fnd_chq_estado = $fnd_chq_cheque->setFndChqEstado($fnd_chq_cheque->getFndChqTipoEstado()->getCodigo(), $observacion = 'Rendicion de cajas desde ' . $fnd_caja_movimiento->getFndCajaOrigenObj()->getGralCaja()->getDescripcion() . ' por movimiento #' . $fnd_caja_movimiento->getId(), $this);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    
    public function setReabrirCaja($observacion) {
        $es_caja_cerrada = $this->esFndCajaCerrada();
        if ($es_caja_cerrada) {

            // -----------------------------------------------------------------
            // se setea el estado de la nueva caja
            // -----------------------------------------------------------------
            $fnd_caja_tipo_estado = FndCajaTipoEstado::getOxCodigo(FndCajaTipoEstado::TIPO_ABIERTA);
            $fnd_caja_estado = $this->setFndCajaEstado($fnd_caja_tipo_estado->getCodigo(), $observacion);
            
            return $fnd_caja_estado;
        }
    }    

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/04/2015 20:04
     * Metodo que registra un nuevo estado
     */
    public function setFndCajaEstado($tipo_estado_codigo, $observacion = '') {
        $inicial = 1;
        foreach ($this->getFndCajaEstados() as $fnd_caja_estado) {
            $fnd_caja_estado->setActual(0);
            $fnd_caja_estado->save();

            $inicial = 0;
        }

        $fnd_caja_tipo_estado = FndCajaTipoEstado::getOxCodigo($tipo_estado_codigo);

        // se crea un nuevo estado
        $fnd_caja_estado = new FndCajaEstado();
        $fnd_caja_estado->setFndCajaId($this->getId());
        $fnd_caja_estado->setFndCajaTipoEstadoId($fnd_caja_tipo_estado->getId());
        $fnd_caja_estado->setObservacion($observacion);
        $fnd_caja_estado->setInicial($inicial);
        $fnd_caja_estado->setActual(1);
        $fnd_caja_estado->save();

        // se registra el tipo de movimiento en el registro de movimiento
        $this->setFndCajaTipoEstadoId($fnd_caja_tipo_estado->getId());
        $this->save();

        return $fnd_caja_estado;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/04/2015 20:04
     * Metodo que retorna el estado actual
     */
    public function getFndCajaEstadoActual() {
        $c = new Criterio();
        $c->add(FndCajaEstado::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
        $c->add(FndCajaEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(FndCajaEstado::GEN_TABLA);
        $c->setCriterios();

        $fnd_caja_estados = FndCajaEstado::getFndCajaEstados(null, $c);
        foreach ($fnd_caja_estados as $fnd_caja_estado) {
            return $fnd_caja_estado;
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 26/04/2015 20:04
     * Metodo que retorna el estado de acuerdo a un codigo de tipo de estado indicado
     */
    public function getFndCajaEstadoXCodigoDeFndCajaTipoEstado($valor) {
        $c = new Criterio();
        $c->add(FndCajaEstado::GEN_ATTR_FND_CAJA_ID, $this->getId(), Criterio::IGUAL);
        $c->add(FndCajaTipoEstado::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
        $c->addTabla(FndCajaEstado::GEN_TABLA);
        $c->addRealJoin(FndCajaTipoEstado::GEN_TABLA, FndCajaTipoEstado::GEN_ATTR_ID, FndCajaEstado::GEN_ATTR_FND_CAJA_TIPO_ESTADO_ID);
        $c->setCriterios();

        $fnd_caja_estados = FndCajaEstado::getFndCajaEstados(null, $c);
        foreach ($fnd_caja_estados as $fnd_caja_estado) {
            return $fnd_caja_estado;
        }
        return false;
    }

    public function getEstadoApertura() {
        $fnd_caja_estado = self::getFndCajaEstadoXCodigoDeFndCajaTipoEstado(FndCajaTipoEstado::TIPO_ABIERTA);
        if ($fnd_caja_estado) {
            return $fnd_caja_estado;
        }
        return false;
    }

    public function getEstadoCierre() {
        $fnd_caja_estado = self::getFndCajaEstadoXCodigoDeFndCajaTipoEstado(FndCajaTipoEstado::TIPO_CERRADA);
        if ($fnd_caja_estado) {
            return $fnd_caja_estado;
        }
        return false;
    }

    public function getEstadoRendicion() {
        $fnd_caja_estado = self::getFndCajaEstadoXCodigoDeFndCajaTipoEstado(FndCajaTipoEstado::TIPO_RENDIDA);
        if ($fnd_caja_estado) {
            return $fnd_caja_estado;
        }
        return false;
    }

    public function esFndCajaAbierta() {
        $fnd_caja_tipo_estado = $this->getFndCajaTipoEstado();
        if ($fnd_caja_tipo_estado->getCodigo() == FndCajaTipoEstado::TIPO_ABIERTA) {
            return true;
        }
        return false;
    }

    public function esFndCajaCerrada() {
        $fnd_caja_tipo_estado = $this->getFndCajaTipoEstado();
        if ($fnd_caja_tipo_estado->getCodigo() == FndCajaTipoEstado::TIPO_CERRADA) {
            return true;
        }
        return false;
    }

    public function esFndCajaRendida() {
        $fnd_caja_tipo_estado = $this->getFndCajaTipoEstado();
        if ($fnd_caja_tipo_estado->getCodigo() == FndCajaTipoEstado::TIPO_RENDIDA) {
            return true;
        }
        return false;
    }

    public function getComentarioCierre() {
        $fnd_caja_estado = $this->getFndCajaEstadoXCodigoDeFndCajaTipoEstado(FndCajaTipoEstado::TIPO_CERRADA);
        if ($fnd_caja_estado) {
            return $fnd_caja_estado->getObservacion();
        }
        return '';
    }

    public function getComentarioRendicion() {
        $fnd_caja_estado = $this->getFndCajaEstadoXCodigoDeFndCajaTipoEstado(FndCajaTipoEstado::TIPO_RENDIDA);
        if ($fnd_caja_estado) {
            return $fnd_caja_estado->getObservacion();
        }
        return '';
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 19/03/2019 20:25
     * Metodo que retorna el array resumen para caja
     * @modificado_por Esteban Martinez
     * @modificado 12/08/2019
     */
    public function getArrResumenCaja($incluir_movimiento_activos = false) {
        $arr = array();

        $vta_recibos = $this->getVtaRecibosActivos();
        $vta_ajuste_habers = $this->getVtaAjusteHabersActivos();
        $pde_recibos = $this->getPdeRecibosActivos();
        $pde_orden_pagos = $this->getPdeOrdenPagosActivos();
        $fnd_caja_ingresos = $this->getFndCajaIngresosActivos();
        $fnd_caja_egresos = $this->getFndCajaEgresosActivos();

        $fnd_caja_movimientos_ingresos_aprobados = $this->getMovimientosCaja($tipo_movimiento = 'destino', $aprobado = true);
        $fnd_caja_movimientos_ingresos_activos = $this->getMovimientosCaja($tipo_movimiento = 'destino', $aprobado = false, $activo = true);

        $fnd_caja_movimientos_egresos_aprobados = $this->getMovimientosCaja($tipo_movimiento = 'origen', $aprobado = true);
        $fnd_caja_movimientos_egresos_activos = $this->getMovimientosCaja($tipo_movimiento = 'origen', $aprobado = false, $activo = true);

        $arr['general']['saldo_inicial'] = array(
            'descripcion' => 'Saldo Inicial',
            'cantidad' => 0,
            'importe' => $this->getImporteSaldoInicialReal(),
            'tipo' => 'ingreso',
            'suma' => 1,
        );

        $arr['general']['cobro'] = array(
            'descripcion' => 'Cobros',
            'cantidad' => 0,
            'importe' => 0,
            'tipo' => 'ingreso',
            'suma' => 1,
        );

        if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ALCANCE_VTA_AJUSTES')) {
            $arr['general']['ajuste_haber'] = array(
                'descripcion' => 'Ajuste Haber',
                'cantidad' => 0,
                'importe' => 0,
                'tipo' => 'ingreso',
                'suma' => 1,
            );
        }

        if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ALCANCE_PAGO_PROVEEDORES')) {
            $arr['general']['pago'] = array(
                'descripcion' => 'Pagos',
                'cantidad' => 0,
                'importe' => 0,
                'tipo' => 'egreso',
                'suma' => 0,
            );
            $arr['general']['orden_pago'] = array(
                'descripcion' => 'Ordenes de Pago',
                'cantidad' => 0,
                'importe' => 0,
                'tipo' => 'egreso',
                'suma' => 0,
            );
        }
        $arr['general']['ingreso'] = array(
            'descripcion' => 'Ingresos Extraordinarios',
            'cantidad' => 0,
            'importe' => 0,
            'tipo' => 'ingreso',
            'suma' => 1,
        );
        $arr['general']['egreso'] = array(
            'descripcion' => 'Egresos Extraordinarios',
            'cantidad' => 0,
            'importe' => 0,
            'tipo' => 'egreso',
            'suma' => 0,
        );

        if (false) {
            $arr['general']['movimiento_ingreso_aprobado'] = array(
                'descripcion' => 'Mov Ingreso entre cajas',
                'cantidad' => 0,
                'importe' => 0,
                'tipo' => 'ingreso',
                'suma' => 1,
            );

            $arr['general']['movimiento_egreso_aprobado'] = array(
                'descripcion' => 'Mov Egreso entre cajas',
                'cantidad' => 0,
                'importe' => 0,
                'tipo' => 'egreso',
                'suma' => 0,
            );
        }
        if ($incluir_movimiento_activos) {
            $arr['general']['movimiento_ingreso_activo'] = array(
                'descripcion' => 'Mov Ingreso entre cajas ativos',
                'cantidad' => 0,
                'importe' => 0,
                'tipo' => 'ingreso',
                'suma' => 1,
            );

            $arr['general']['movimiento_egreso_activo'] = array(
                'descripcion' => 'Mov Egreso entre cajas activos',
                'cantidad' => 0,
                'importe' => 0,
                'tipo' => 'egreso',
                'suma' => 0,
            );
        }
        if ($this->getFndCajaTipoEstado()->getActivo() == 0) {
            $arr['general']['saldo_final'] = array(
                'descripcion' => 'Saldo Final',
                'cantidad' => 0,
                'importe' => $this->getImporteSaldoFinal(),
                'tipo' => 'egreso',
                'suma' => 0,
            );
        }


        // ---------------------------------------------------------------------
        // se registra el saldo inicial en el array
        // ---------------------------------------------------------------------

        $arr['general']['saldo_inicial']['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['descripcion'] = 'Saldo Inicial';
        $arr['general']['saldo_inicial']['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['cantidad'] ++;
        $arr['general']['saldo_inicial']['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['importe'] += $this->getImporteSaldoInicialReal();

        $arr['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['descripcion'] = 'Efectivo';
        $arr['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['cantidad'] ++;
        $arr['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['importe'] += $this->getImporteSaldoInicialReal();

        $arr['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['concepto']['saldo_inicial']['tipo'] = 'ingreso';
        $arr['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['concepto']['saldo_inicial']['descripcion'] = 'Saldo Inicial';
        $arr['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['concepto']['saldo_inicial']['cantidad'] ++;
        $arr['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['concepto']['saldo_inicial']['importe'] += $this->getImporteSaldoInicialReal();

        $arr_saldo_forma_pago_concepto[GralFpFormaPago::TIPO_CONTADO] += $this->getImporteSaldoInicialReal();
        $arr['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['concepto']['saldo_inicial']['saldo'] = $arr_saldo_forma_pago_concepto[GralFpFormaPago::TIPO_CONTADO];

        $arr['general']['saldo_inicial']['cantidad'] ++;
        $arr['general']['saldo_inicial']['importe'] = $this->getImporteSaldoInicialReal();

        // ---------------------------------------------------------------------
        // se calcula el total de los cobros vinculados a la caja
        // ---------------------------------------------------------------------        
        foreach ($vta_recibos as $vta_recibo) {
            $importe_cobros += $vta_recibo->getImporteTotalComprobante();
            $arr['general']['cobro']['cantidad'] ++;
            $arr['general']['cobro']['importe'] = $importe_cobros;

            foreach ($vta_recibo->getVtaReciboItems() as $vta_recibo_item) {
                $gral_fp_forma_pago = $vta_recibo_item->getGralFpFormaPago();

                $arr['general']['cobro']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
                $arr['general']['cobro']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
                $arr['general']['cobro']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] += $vta_recibo_item->getImporteTotal();

                $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
                $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
                $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] += $vta_recibo_item->getImporteTotal();

                $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['cobro']['tipo'] = 'ingreso';
                $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['cobro']['descripcion'] = 'Cobros';
                $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['cobro']['cantidad'] ++;
                $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['cobro']['importe'] += $vta_recibo_item->getImporteTotal();

                $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()] += $vta_recibo_item->getImporteTotal();
                $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['cobro']['saldo'] = $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()];
            }
        }

        if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ALCANCE_VTA_AJUSTES')) {
            // ---------------------------------------------------------------------
            // se calcula el total de los ajuste haber vinculados a la caja
            // ---------------------------------------------------------------------        
            foreach ($vta_ajuste_habers as $vta_ajuste_haber) {
                $importe_ajuste_habers += $vta_ajuste_haber->getImporteTotalComprobante();
                $arr['general']['ajuste_haber']['cantidad'] ++;
                $arr['general']['ajuste_haber']['importe'] = $importe_ajuste_habers;

                foreach ($vta_ajuste_haber->getVtaAjusteHaberItems() as $vta_ajuste_haber_item) {
                    $gral_fp_forma_pago = $vta_ajuste_haber_item->getGralFpFormaPago();

                    $arr['general']['ajuste_haber']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
                    $arr['general']['ajuste_haber']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
                    $arr['general']['ajuste_haber']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] += $vta_ajuste_haber_item->getImporteTotal();

                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] += $vta_ajuste_haber_item->getImporteTotal();

                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['ajuste_haber']['tipo'] = 'ingreso';
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['ajuste_haber']['descripcion'] = 'Cobros';
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['ajuste_haber']['cantidad'] ++;
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['ajuste_haber']['importe'] += $vta_ajuste_haber_item->getImporteTotal();

                    $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()] += $vta_ajuste_haber_item->getImporteTotal();
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['ajuste_haber']['saldo'] = $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()];
                }
            }
        }
        

        if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ALCANCE_PAGO_PROVEEDORES')) {
            // ---------------------------------------------------------------------
            // se calcula el total de los pagos vinculados a la caja
            // ---------------------------------------------------------------------        
            foreach ($pde_recibos as $pde_recibo) {
                $importe_pagos += $pde_recibo->getImporteTotalComprobante();
                $arr['general']['pago']['cantidad'] ++;
                $arr['general']['pago']['importe'] = $importe_pagos;

                foreach ($pde_recibo->getPdeReciboItems() as $pde_recibo_item) {
                    $gral_fp_forma_pago = $pde_recibo_item->getGralFpFormaPago();

                    $arr['general']['pago']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
                    $arr['general']['pago']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
                    $arr['general']['pago']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] += $pde_recibo_item->getImporteTotal();

                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] -= $pde_recibo_item->getImporteTotal();

                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['pago']['tipo'] = 'egreso';
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['pago']['descripcion'] = 'Pagos';
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['pago']['cantidad'] ++;
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['pago']['importe'] += $pde_recibo_item->getImporteTotal();

                    $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()] -= $pde_recibo_item->getImporteTotal();
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['pago']['saldo'] = $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()];
                }
            }

            // ---------------------------------------------------------------------
            // se calcula el total de las ordenes de pagos vinculados a la caja
            // ---------------------------------------------------------------------        
            foreach ($pde_orden_pagos as $pde_orden_pago) {
                $importe_orden_pagos += $pde_orden_pago->getPdeOrdenPagoTotal();
                $arr['general']['orden_pago']['cantidad'] ++;
                $arr['general']['orden_pago']['importe'] = $importe_orden_pagos;

                foreach ($pde_orden_pago->getPdeOrdenPagoGralFpFormaPagos() as $pde_orden_pago_gral_fp_forma_pago) {
                    $gral_fp_forma_pago = $pde_orden_pago_gral_fp_forma_pago->getGralFpFormaPago();

                    $arr['general']['orden_pago']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
                    $arr['general']['orden_pago']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
                    $arr['general']['orden_pago']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] += $pde_orden_pago_gral_fp_forma_pago->getImporteAfectado();

                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] -= $pde_orden_pago_gral_fp_forma_pago->getImporteAfectado();

                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['orden_pago']['tipo'] = 'egreso';
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['orden_pago']['descripcion'] = 'Ordenes de Pago';
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['orden_pago']['cantidad'] ++;
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['orden_pago']['importe'] += $pde_orden_pago_gral_fp_forma_pago->getImporteAfectado();

                    $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()] -= $pde_orden_pago_gral_fp_forma_pago->getImporteAfectado();
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['orden_pago']['saldo'] = $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()];
                }
            }
        }

        // ---------------------------------------------------------------------
        // se calcula el total de los ingresos extraordinarios
        // ---------------------------------------------------------------------        
        foreach ($fnd_caja_ingresos as $fnd_caja_ingreso) {
            $importe_ingresos += $fnd_caja_ingreso->getImporte();
            $arr['general']['ingreso']['cantidad'] ++;
            $arr['general']['ingreso']['importe'] = $importe_ingresos;

            $gral_fp_forma_pago = $fnd_caja_ingreso->getGralFpFormaPago();

            $arr['general']['ingreso']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
            $arr['general']['ingreso']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
            $arr['general']['ingreso']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] += $fnd_caja_ingreso->getImporte();

            $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
            $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
            $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] += $fnd_caja_ingreso->getImporte();

            $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['ingreso']['tipo'] = 'ingreso';
            $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['ingreso']['descripcion'] = 'Ingresos';
            $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['ingreso']['cantidad'] ++;
            $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['ingreso']['importe'] += $fnd_caja_ingreso->getImporte();

            $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()] += $fnd_caja_ingreso->getImporte();
            $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['ingreso']['saldo'] = $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()];
        }

        // ---------------------------------------------------------------------
        // se calcula el total de los egresos extraordinarios
        // ---------------------------------------------------------------------        
        foreach ($fnd_caja_egresos as $fnd_caja_egreso) {
            $importe_egresos += $fnd_caja_egreso->getImporte();
            $arr['general']['egreso']['cantidad'] ++;
            $arr['general']['egreso']['importe'] = $importe_egresos;

            $gral_fp_forma_pago = $fnd_caja_egreso->getGralFpFormaPago();

            $arr['general']['egreso']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
            $arr['general']['egreso']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
            $arr['general']['egreso']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] += $fnd_caja_egreso->getImporte();

            $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
            $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
            $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] -= $fnd_caja_egreso->getImporte();

            $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['egreso']['tipo'] = 'egreso';
            $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['egreso']['descripcion'] = 'Egresos';
            $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['egreso']['cantidad'] ++;
            $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['egreso']['importe'] += $fnd_caja_egreso->getImporte();

            $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()] -= $fnd_caja_egreso->getImporte();
            $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['egreso']['saldo'] = $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()];
        }


        if (false) {
            // ---------------------------------------------------------------------
            // se calcula el total de los movimientos de ingresos aprobados
            // ---------------------------------------------------------------------        
            foreach ($fnd_caja_movimientos_ingresos_aprobados as $fnd_caja_movimientos_ingresos_aprobado) {
                $fnd_caja_movimiento_items = $fnd_caja_movimientos_ingresos_aprobado->getFndCajaMovimientoItems();
                foreach ($fnd_caja_movimiento_items as $fnd_caja_movimiento_item) {
                    $importe_movimientos_ingresos_aprobados += $fnd_caja_movimiento_item->getImporte();
                    $gral_fp_forma_pago = $fnd_caja_movimiento_item->getGralFpFormaPago();

                    $arr['general']['movimiento_ingreso_aprobado']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
                    $arr['general']['movimiento_ingreso_aprobado']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
                    $arr['general']['movimiento_ingreso_aprobado']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] += $fnd_caja_movimiento_item->getImporte();

                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] += $fnd_caja_movimiento_item->getImporte();

                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_ingreso_aprobado']['tipo'] = 'ingreso';
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_ingreso_aprobado']['descripcion'] = 'Mov Ing Apr';
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_ingreso_aprobado']['cantidad'] ++;
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_ingreso_aprobado']['importe'] += $fnd_caja_movimiento_item->getImporte();

                    $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()] += $fnd_caja_movimiento_item->getImporte();
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_ingreso_aprobado']['saldo'] = $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()];
                }

                $arr['general']['movimiento_ingreso_aprobado']['cantidad'] ++;
                $arr['general']['movimiento_ingreso_aprobado']['importe'] = $importe_movimientos_ingresos_aprobados;
            }

            // ---------------------------------------------------------------------
            // se calcula el total de los movimientos de egresos aprobados
            // ---------------------------------------------------------------------        
            foreach ($fnd_caja_movimientos_egresos_aprobados as $fnd_caja_movimientos_egresos_aprobado) {
                $fnd_caja_movimiento_items = $fnd_caja_movimientos_egresos_aprobado->getFndCajaMovimientoItems();
                foreach ($fnd_caja_movimiento_items as $fnd_caja_movimiento_item) {
                    $importe_movimientos_egresos_aprobados += $fnd_caja_movimiento_item->getImporte();
                    $gral_fp_forma_pago = $fnd_caja_movimiento_item->getGralFpFormaPago();

                    $arr['general']['movimiento_egreso_aprobado']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
                    $arr['general']['movimiento_egreso_aprobado']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
                    $arr['general']['movimiento_egreso_aprobado']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] += $fnd_caja_movimiento_item->getImporte();

                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] -= $fnd_caja_movimiento_item->getImporte();

                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_egreso_aprobado']['tipo'] = 'egreso';
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_egreso_aprobado']['descripcion'] = 'Mov Egr Apr';
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_egreso_aprobado']['cantidad'] ++;
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_egreso_aprobado']['importe'] += $fnd_caja_movimiento_item->getImporte();

                    $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()] -= $fnd_caja_movimiento_item->getImporte();
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_egreso_aprobado']['saldo'] = $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()];
                }

                $arr['general']['movimiento_egreso_aprobado']['cantidad'] ++;
                $arr['general']['movimiento_egreso_aprobado']['importe'] = $importe_movimientos_egresos_aprobados;
            }
        }

        if ($incluir_movimiento_activos) {
            // ---------------------------------------------------------------------
            // se calcula el total de los movimientos de ingresos activos
            // ---------------------------------------------------------------------        
            foreach ($fnd_caja_movimientos_ingresos_activos as $fnd_caja_movimientos_ingresos_activo) {
                $fnd_caja_movimiento_items = $fnd_caja_movimientos_ingresos_activo->getFndCajaMovimientoItems();
                foreach ($fnd_caja_movimiento_items as $fnd_caja_movimiento_item) {
                    $importe_movimientos_ingresos_activos += $fnd_caja_movimiento_item->getImporte();
                    $gral_fp_forma_pago = $fnd_caja_movimiento_item->getGralFpFormaPago();

                    $arr['general']['movimiento_ingreso_activo']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
                    $arr['general']['movimiento_ingreso_activo']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
                    $arr['general']['movimiento_ingreso_activo']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] += $fnd_caja_movimiento_item->getImporte();

                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] += $fnd_caja_movimiento_item->getImporte();

                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_ingreso_activo']['tipo'] = 'ingreso';
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_ingreso_activo']['descripcion'] = 'Mov Ing Apr';
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_ingreso_activo']['cantidad'] ++;
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_ingreso_activo']['importe'] += $fnd_caja_movimiento_item->getImporte();

                    $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()] += $fnd_caja_movimiento_item->getImporte();
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_ingreso_activo']['saldo'] = $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()];
                }

                $arr['general']['movimiento_ingreso_activo']['cantidad'] ++;
                $arr['general']['movimiento_ingreso_activo']['importe'] = $importe_movimientos_ingresos_activos;
            }

            // ---------------------------------------------------------------------
            // se calcula el total de los movimientos de egresos activos
            // ---------------------------------------------------------------------        
            foreach ($fnd_caja_movimientos_egresos_activos as $fnd_caja_movimientos_egresos_activo) {
                $fnd_caja_movimiento_items = $fnd_caja_movimientos_egresos_activo->getFndCajaMovimientoItems();
                //Gral::prr($fnd_caja_movimiento_items);
                foreach ($fnd_caja_movimiento_items as $fnd_caja_movimiento_item) {
                    $importe_movimientos_egresos_activos += $fnd_caja_movimiento_item->getImporte();
                    $gral_fp_forma_pago = $fnd_caja_movimiento_item->getGralFpFormaPago();

                    $arr['general']['movimiento_egreso_activo']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
                    $arr['general']['movimiento_egreso_activo']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
                    $arr['general']['movimiento_egreso_activo']['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] += $fnd_caja_movimiento_item->getImporte();

                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['descripcion'] = $gral_fp_forma_pago->getDescripcion();
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['cantidad'] ++;
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['importe'] -= $fnd_caja_movimiento_item->getImporte();

                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_egreso_activo']['tipo'] = 'egreso';
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_egreso_activo']['descripcion'] = 'Mov Egr Apr';
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_egreso_activo']['cantidad'] ++;
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_egreso_activo']['importe'] += $fnd_caja_movimiento_item->getImporte();

                    $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()] -= $fnd_caja_movimiento_item->getImporte();
                    $arr['forma_pago'][$gral_fp_forma_pago->getCodigo()]['concepto']['movimiento_egreso_activo']['saldo'] = $arr_saldo_forma_pago_concepto[$gral_fp_forma_pago->getCodigo()];
                }

                $arr['general']['movimiento_egreso_activo']['cantidad'] ++;
                $arr['general']['movimiento_egreso_activo']['importe'] = $importe_movimientos_egresos_activos;
            }
        }


        if ($this->getFndCajaTipoEstado()->getActivo() == 0) {
            // ---------------------------------------------------------------------
            // se registra el saldo final en el array
            // ---------------------------------------------------------------------
            $arr['general']['saldo_final']['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['descripcion'] = 'Saldo Final';
            $arr['general']['saldo_final']['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['cantidad'] ++;
            $arr['general']['saldo_final']['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['importe'] += $this->getImporteSaldoFinal();

            $arr['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['descripcion'] = 'Efectivo';
            $arr['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['cantidad'] ++;
            $arr['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['importe'] -= $this->getImporteSaldoFinal();

            $arr['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['concepto']['saldo_final']['tipo'] = 'egreso';
            $arr['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['concepto']['saldo_final']['descripcion'] = 'Saldo Final';
            $arr['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['concepto']['saldo_final']['cantidad'] ++;
            $arr['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['concepto']['saldo_final']['importe'] += $this->getImporteSaldoFinal();

            $arr_saldo_forma_pago_concepto[GralFpFormaPago::TIPO_CONTADO] -= $this->getImporteSaldoFinal();
            $arr['forma_pago'][GralFpFormaPago::TIPO_CONTADO]['concepto']['saldo_final']['saldo'] = $arr_saldo_forma_pago_concepto[GralFpFormaPago::TIPO_CONTADO];

            $arr['general']['saldo_final']['cantidad'] ++;
            $arr['general']['saldo_final']['importe'] = $this->getImporteSaldoFinal();
        }

        // ---------------------------------------------------------------------
        // Si la forma de pago es cheques, recuperar los cheques y guardarlos en un array
        // ---------------------------------------------------------------------  
        //$fnd_chq_cheques = $this->getGralCaja()->getFndChqCheques();
        $fnd_chq_cheques = $this->getFndChqCheques();
        if (count($fnd_chq_cheques) > 0) {

            $arr['forma_pago'][GralFpFormaPago::TIPO_CHEQUE]['descripcion'] = 'Cheques';
            $arr['forma_pago'][GralFpFormaPago::TIPO_CHEQUE]['cantidad'] = 0;
            $arr['forma_pago'][GralFpFormaPago::TIPO_CHEQUE]['importe'] = 0;

            foreach ($fnd_chq_cheques as $fnd_chq_cheque) {
                $arr_cheques[$fnd_chq_cheque->getId()] = array(
                    'id' => $fnd_chq_cheque->getId(),
                    'descripcion' => $fnd_chq_cheque->getDescripcion(),
                    'firmante' => $fnd_chq_cheque->getFirmante(),
                    'entregador' => $fnd_chq_cheque->getEntregador(),
                    'cliente' => $fnd_chq_cheque->getPersonaDescripcion(),
                    'importe' => $fnd_chq_cheque->getImporte(),
                );

                $arr['forma_pago'][GralFpFormaPago::TIPO_CHEQUE]['cantidad'] ++;
                $arr['forma_pago'][GralFpFormaPago::TIPO_CHEQUE]['importe'] += $fnd_chq_cheque->getImporte();
                $arr['forma_pago'][GralFpFormaPago::TIPO_CHEQUE]['cheques'] = $arr_cheques;
            }
        }

        //Gral::pr($this->getId(),'ID');
        //Gral::prr($arr);
        return $arr;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 19/03/2019 20:25
     * Metodo que retorna el nombre del comprobante de caja
     */
    public function getNombreArchivoAdjuntoCaja() {
        $nombre = Gral::getConfig('conf_proyecto_min') . '_' . $this->getDescripcion();
        $nombre = str_replace('.', '', $nombre);
        $nombre = str_replace('-', '_', $nombre);
        $nombre = str_replace(' ', '_', $nombre);
        $nombre = str_replace('___', '_', $nombre);
        $nombre = str_replace('__', '_', $nombre);
        return $nombre . '.pdf';
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 19/03/2019 20:25
     * Metodo que permite registrar un movimiento de ingreso extraordinario de caja
     */
    public function setRegistrarIngreso($fnd_caja_ingreso_id, $descripcion, $fnd_caja_tipo_ingreso_id, $gral_fp_forma_pago_id, $importe, $codigo_referencia, $observacion, $var_sesion_modulo) {
        $fnd_caja_ingreso = FndCajaIngreso::getOxId($fnd_caja_ingreso_id);

        if (!$fnd_caja_ingreso) {
            $fnd_caja_ingreso = new FndCajaIngreso();
            $fnd_caja_ingreso->setFndCajaId($this->getId());
        }

        $fnd_caja_ingreso->setDescripcion($descripcion);
        $fnd_caja_ingreso->setFndCajaTipoIngresoId($fnd_caja_tipo_ingreso_id);
        $fnd_caja_ingreso->setGralFpFormaPagoId($gral_fp_forma_pago_id);
        $fnd_caja_ingreso->setImporte($importe);
        $fnd_caja_ingreso->setCodigoReferencia($codigo_referencia);
        $fnd_caja_ingreso->setObservacion($observacion);
        $fnd_caja_ingreso->setEstado(1);
        $fnd_caja_ingreso->save();

        if ($fnd_caja_ingreso_id == 0 && $fnd_caja_ingreso) {
            $fnd_caja_ingreso_id = $fnd_caja_ingreso->getId();
        }

        $arr_fnd_chq_cheque_buscador_cheque_infos = Gral::getSes($var_sesion_modulo);

        if (!is_null($arr_fnd_chq_cheque_buscador_cheque_infos[0])) {
            $arr_sesion = $arr_fnd_chq_cheque_buscador_cheque_infos[0];
            if ($arr_sesion['cheque_id'] != 0 || $arr_sesion['cheque_id'] != '' || !empty($arr_sesion['cheque_id'])) {
                $fnd_chq_cheque_id = $arr_sesion['cheque_id'];
            }
        }

        FndChqCheque::inicializarFndChqChequeDesdeFndCajaIngreso($fnd_caja_ingreso_id, $fnd_chq_cheque_id, $var_sesion_modulo);
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 19/03/2019 20:25
     * Metodo que permite registrar un movimiento de egreso extraordinario de caja
     */
    public function setRegistrarEgreso($fnd_caja_egreso_id, $descripcion, $fnd_caja_tipo_egreso_id, $gral_fp_forma_pago_id, $importe, $codigo_referencia, $observacion, $var_sesion_modulo) {
        $fnd_caja_egreso = FndCajaEgreso::getOxId($fnd_caja_egreso_id);
        if (!$fnd_caja_egreso) {
            $fnd_caja_egreso = new FndCajaEgreso();
            $fnd_caja_egreso->setFndCajaId($this->getId());
        }
        $fnd_caja_egreso->setDescripcion($descripcion);
        $fnd_caja_egreso->setFndCajaTipoEgresoId($fnd_caja_tipo_egreso_id);
        $fnd_caja_egreso->setGralFpFormaPagoId($gral_fp_forma_pago_id);
        $fnd_caja_egreso->setImporte($importe);
        $fnd_caja_egreso->setCodigoReferencia($codigo_referencia);
        $fnd_caja_egreso->setObservacion($observacion);
        $fnd_caja_egreso->setEstado(1);
        $fnd_caja_egreso->save();

        if ($fnd_caja_egreso_id == 0 && $fnd_caja_egreso) {
            $fnd_caja_egreso_id = $fnd_caja_egreso->getId();
        }

        $arr_fnd_chq_cheque_buscador_cheque_infos = Gral::getSes($var_sesion_modulo);
        if (!is_null($arr_fnd_chq_cheque_buscador_cheque_infos[0])) {
            $arr_sesion = $arr_fnd_chq_cheque_buscador_cheque_infos[0];
            if ($arr_sesion['cheque_id'] != 0 || $arr_sesion['cheque_id'] != '' || !empty($arr_sesion['cheque_id'])) {
                $fnd_chq_cheque_id = $arr_sesion['cheque_id'];
            }
        }

        FndChqCheque::inicializarFndChqChequeDesdeFndCajaEgreso($fnd_caja_egreso_id, $fnd_chq_cheque_id, $var_sesion_modulo);
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 10/07/2019
     */
    static function getUltimaFndCaja($cmb_gral_caja_id) {
        $criterio = new Criterio();
        $criterio->addTabla(FndCaja::GEN_TABLA);
        $criterio->addRealJoin(GralCaja::GEN_TABLA, GralCaja::GEN_ATTR_ID, FndCaja::GEN_ATTR_GRAL_CAJA_ID);
        //$criterio->add(FndCaja::GEN_ATTR_FND_CAJERO_ID, $fnd_cajero->getId(), Criterio::IGUAL);
        $criterio->add(FndCaja::GEN_ATTR_GRAL_CAJA_ID, $cmb_gral_caja_id, Criterio::IGUAL);
        $criterio->addOrden(FndCaja::GEN_ATTR_ID, Criterio::_DESC);
        $criterio->setCriterios();
        $fnd_cajas = FndCaja::getFndCajas(null, $criterio);
        //Gral::prr($fnd_cajas);
        if ($fnd_cajas) {
            foreach ($fnd_cajas as $fnd_caja) {
                return $fnd_caja;
                break;
            }
        }
    }

    /* Método getFndCajas para select */

    static function getFndCajasAbiertasCmb($fnd_caja_origen = false, $gral_caja_tipo_codigo = false) {
        $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
        $criterio = new Criterio();
        $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        if ($fnd_caja_origen) {
            $criterio->add(self::GEN_ATTR_ID, $fnd_caja_origen, Criterio::DISTINTO);
        }
        $criterio->add(FndCajaTipoEstado::GEN_ATTR_CODIGO, FndCajaTipoEstado::TIPO_ABIERTA, Criterio::IGUAL);
        $criterio->addRealJoin(FndCajaTipoEstado::GEN_TABLA, FndCajaTipoEstado::GEN_ATTR_ID, FndCaja::GEN_ATTR_FND_CAJA_TIPO_ESTADO_ID);
        $criterio->addRealJoin(GralCaja::GEN_TABLA, GralCaja::GEN_ATTR_ID, FndCaja::GEN_ATTR_GRAL_CAJA_ID);
        $criterio->addRealJoin(GralCajaTipo::GEN_TABLA, GralCajaTipo::GEN_ATTR_ID, GralCaja::GEN_ATTR_GRAL_CAJA_TIPO_ID);
        if ($gral_caja_tipo_codigo) {
            $criterio->add(GralCajaTipo::GEN_ATTR_CODIGO, $gral_caja_tipo_codigo, Criterio::IGUAL);
        }

        $criterio->addTabla(self::GEN_TABLA);
        $criterio->addOrden('2');
        $criterio->setCriterios();

        $col = FndCaja::getFndCajas($paginador, $criterio);

        $cont = 0;
        $arr = array();
        foreach ($col as $o) {
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            //$arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();
            $arr[$cont]['descripcion'] = $o->getDescripcion();
        }
        return $arr;
    }

    /**
     * Retorna los movimientos de la caja.</br> 
     * Por defecto retorna los movimientos que se hayan originado en la caja y que hayan sido aprobados  
     * @creado_por Esteban Martinez
     * @creado 08/08/2019
     * @modificado_por Esteban Martinez
     * @modificado 09/08/2019
     */
    public function getMovimientosCaja($tipo_movimiento = 'origen', $aprobado = true, $activo = false) {
        $criterio = new Criterio();
        $criterio->addTabla(FndCaja::GEN_TABLA);
        $criterio->addRealJoin(FndCajaMovimiento::GEN_TABLA, FndCajaMovimiento::GEN_ATTR_FND_CAJA_ORIGEN, FndCaja::GEN_ATTR_ID);
        $criterio->addRealJoin(FndCajaMovimientoTipoEstado::GEN_TABLA, FndCajaMovimientoTipoEstado::GEN_ATTR_ID, FndCajaMovimiento::GEN_ATTR_FND_CAJA_MOVIMIENTO_TIPO_ESTADO_ID);
        $criterio->addOrden(FndCajaMovimiento::GEN_ATTR_ID, Criterio::_DESC);

        if ($tipo_movimiento == 'origen') {
            $criterio->add(FndCajaMovimiento::GEN_ATTR_FND_CAJA_ORIGEN, $this->getId(), Criterio::IGUAL);
        } elseif ($tipo_movimiento == 'destino') {
            $criterio->add(FndCajaMovimiento::GEN_ATTR_FND_CAJA_DESTINO, $this->getId(), Criterio::IGUAL);
        }

        if ($aprobado) {
            $criterio->add(FndCajaMovimientoTipoEstado::GEN_ATTR_APROBADO, 1, Criterio::IGUAL);
        }

        if ($activo) {
            $criterio->add(FndCajaMovimientoTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        }

        $criterio->setCriterios();
        $fnd_caja_movimientos = FndCajaMovimiento::getFndCajaMovimientos($paginador = null, $criterio);
        return $fnd_caja_movimientos;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 07/08/2019
     */
    public function getTieneMovimientosActivos() {
        $criterio = new Criterio();
        $criterio->addTabla(self::GEN_TABLA);
        $criterio->addRealJoin(FndCajaMovimiento::GEN_TABLA, FndCajaMovimiento::GEN_ATTR_FND_CAJA_ORIGEN, self::GEN_ATTR_ID);
        $criterio->addRealJoin(FndCajaMovimientoTipoEstado::GEN_TABLA, FndCajaMovimientoTipoEstado::GEN_ATTR_ID, FndCajaMovimiento::GEN_ATTR_FND_CAJA_MOVIMIENTO_TIPO_ESTADO_ID);
        $criterio->add(FndCajaMovimientoTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $criterio->add(self::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $criterio->setCriterios();

        $fnd_cajas_origens = FndCaja::getFndCajas(null, $criterio);
        foreach ($fnd_cajas_origens as $fnd_caja_origen) {
            return true;
        }


        $criterio = new Criterio();
        $criterio->addTabla(self::GEN_TABLA);
        $criterio->addRealJoin(FndCajaMovimiento::GEN_TABLA, FndCajaMovimiento::GEN_ATTR_FND_CAJA_DESTINO, self::GEN_ATTR_ID);
        $criterio->addRealJoin(FndCajaMovimientoTipoEstado::GEN_TABLA, FndCajaMovimientoTipoEstado::GEN_ATTR_ID, FndCajaMovimiento::GEN_ATTR_FND_CAJA_MOVIMIENTO_TIPO_ESTADO_ID);
        $criterio->add(FndCajaMovimientoTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $criterio->add(self::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $criterio->setCriterios();

        $fnd_cajas_destinos = FndCaja::getFndCajas(null, $criterio);
        foreach ($fnd_cajas_destinos as $fnd_cajas_destino) {
            return true;
        }

        return false;
    }

    public function getVtaRecibosActivos() {

        $c = new Criterio();
        $c->add(VtaReciboTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL);
        $c->addTabla(VtaRecibo::GEN_TABLA);
        $c->addRealJoin(VtaReciboTipoEstado::GEN_TABLA, VtaReciboTipoEstado::GEN_ATTR_ID, VtaRecibo::GEN_ATTR_VTA_RECIBO_TIPO_ESTADO_ID);
        $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $vta_recibos = $this->getVtaRecibos(null, $c);

        return $vta_recibos;
    }

    public function getVtaRecibosInactivos() {

        $c = new Criterio();
        $c->add(VtaReciboTipoEstado::GEN_ATTR_ANULADO, 1, Criterio::IGUAL);
        $c->addTabla(VtaRecibo::GEN_TABLA);
        $c->addRealJoin(VtaReciboTipoEstado::GEN_TABLA, VtaReciboTipoEstado::GEN_ATTR_ID, VtaRecibo::GEN_ATTR_VTA_RECIBO_TIPO_ESTADO_ID);
        $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $vta_recibos = $this->getVtaRecibos(null, $c);

        return $vta_recibos;
    }
    
    public function getVtaAjusteHabersActivos() {
        
        $c = new Criterio();
        $c->add(VtaAjusteHaberTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL);
        $c->addTabla(VtaAjusteHaber::GEN_TABLA);
        $c->addRealJoin(VtaAjusteHaberTipoEstado::GEN_TABLA, VtaAjusteHaberTipoEstado::GEN_ATTR_ID, VtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_TIPO_ESTADO_ID);
        $c->addOrden(VtaAjusteHaber::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $vta_ajuste_habers = $this->getVtaAjusteHabers(null, $c);

        return $vta_ajuste_habers;
    }    

    public function getVtaAjusteHabersInactivos() {
        
        $c = new Criterio();
        $c->add(VtaAjusteHaberTipoEstado::GEN_ATTR_ANULADO, 1, Criterio::IGUAL);
        $c->addTabla(VtaAjusteHaber::GEN_TABLA);
        $c->addRealJoin(VtaAjusteHaberTipoEstado::GEN_TABLA, VtaAjusteHaberTipoEstado::GEN_ATTR_ID, VtaAjusteHaber::GEN_ATTR_VTA_AJUSTE_HABER_TIPO_ESTADO_ID);
        $c->addOrden(VtaAjusteHaber::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $vta_ajuste_habers = $this->getVtaAjusteHabers(null, $c);

        return $vta_ajuste_habers;
    }    
    
    public function getPdeRecibosActivos() {

        $c = new Criterio();
        $c->add(PdeReciboTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL);
        $c->addTabla(PdeRecibo::GEN_TABLA);
        $c->addRealJoin(PdeReciboTipoEstado::GEN_TABLA, PdeReciboTipoEstado::GEN_ATTR_ID, PdeRecibo::GEN_ATTR_PDE_RECIBO_TIPO_ESTADO_ID);
        $c->addOrden(PdeRecibo::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $pde_recibos = $this->getPdeRecibos(null, $c);
        return $pde_recibos;
    }

    public function getPdeOrdenPagosActivos() {

        $c = new Criterio();
        $c->add(PdeOrdenPagoTipoEstado::GEN_ATTR_ANULADO, 0, Criterio::IGUAL);
        $c->addTabla(PdeOrdenPago::GEN_TABLA);
        $c->addRealJoin(PdeOrdenPagoTipoEstado::GEN_TABLA, PdeOrdenPagoTipoEstado::GEN_ATTR_ID, PdeOrdenPago::GEN_ATTR_PDE_ORDEN_PAGO_TIPO_ESTADO_ID);
        $c->addOrden(PdeOrdenPago::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $pde_orden_pagos = $this->getPdeOrdenPagos(null, $c);
        return $pde_orden_pagos;
    }

    public function getFndCajaIngresosActivos() {
        $fnd_caja_ingresos = $this->getFndCajaIngresos();
        return $fnd_caja_ingresos;
    }

    public function getFndCajaEgresosActivos() {
        $fnd_caja_egresos = $this->getFndCajaEgresos();
        return $fnd_caja_egresos;
    }
    
    public function getCuponesVinculadosParaRendir(){
        $arr = array();
        
        $vta_recibos = $this->getVtaRecibosActivos();
        foreach($vta_recibos as $vta_recibo){
            foreach($vta_recibo->getVtaReciboItems() as $vta_recibo_item){
                $gral_fp_forma_pago = $vta_recibo_item->getGralFpFormaPago();
                if($gral_fp_forma_pago->getRequiereReferencia() && $gral_fp_forma_pago->getCodigo() != GralFpFormaPago::TIPO_CHEQUE){
                    $arr[] = array(
                        'tipo' => 'ING',
                        'descripcion' => $vta_recibo_item->getDescripcion(),
                        'persona_descripcion' => $vta_recibo->getPersonaDescripcion(),
                        'gral_fp_forma_pago_descripcion' => $gral_fp_forma_pago->getDescripcion(),
                        'fechahora' => $vta_recibo_item->getCreado(),
                        'importe' => $vta_recibo_item->getImporteTotal(),
                        'codigo' => $vta_recibo_item->getCodigo(),
                    );
                }
            }
        }

        $pde_recibos = $this->getPdeRecibosActivos();
        foreach($pde_recibos as $pde_recibo){
            foreach($pde_recibo->getPdeReciboItems() as $pde_recibo_item){
                $gral_fp_forma_pago = $pde_recibo_item->getGralFpFormaPago();
                if($gral_fp_forma_pago->getRequiereReferencia() && $gral_fp_forma_pago->getCodigo() != GralFpFormaPago::TIPO_CHEQUE){
                    $arr[] = array(
                        'tipo' => 'EGR',
                        'descripcion' => $pde_recibo_item->getDescripcion(),
                        'persona_descripcion' => $pde_recibo->getPersonaDescripcion(),
                        'gral_fp_forma_pago_descripcion' => $gral_fp_forma_pago->getDescripcion(),
                        'fechahora' => $pde_recibo_item->getCreado(),
                        'importe' => $pde_recibo_item->getImporteTotal(),
                        'codigo' => $pde_recibo_item->getCodigo(),
                    );
                }
            }
        }
        
        $pde_orden_pagos = $this->getPdeOrdenPagosActivos();
        foreach ($pde_orden_pagos as $pde_orden_pago) {
            foreach ($pde_orden_pago->getPdeOrdenPagoGralFpFormaPagos() as $pde_orden_pago_gral_forma_pago) {
                $gral_fp_forma_pago = $pde_orden_pago_gral_forma_pago->getGralFpFormaPago();
                if ($gral_fp_forma_pago->getRequiereReferencia() && $gral_fp_forma_pago->getCodigo() != GralFpFormaPago::TIPO_CHEQUE) {
                    $arr[] = array(
                        'tipo' => 'EGR',
                        'descripcion' => $pde_orden_pago_gral_forma_pago->getDescripcion(),
                        'persona_descripcion' => $pde_orden_pago->getPersonaDescripcion(),
                        'gral_fp_forma_pago_descripcion' => $gral_fp_forma_pago->getDescripcion(),
                        'fechahora' => $pde_orden_pago_gral_forma_pago->getCreado(),
                        'importe' => $pde_orden_pago_gral_forma_pago->getImporteAfectado(),
                        'codigo' => $pde_orden_pago_gral_forma_pago->getCodigo(),
                    );
                }
            }
        }
        
        return $arr;
    }
    
    public function setReasignarCaja($clase, $identificador) {
        $o = $clase::getOxId($identificador);
        if ($o) {
            $o->setFndCajaId($this->getId());
            $o->save();
            
            $fnd_chq_cheque = $o->getFndChqCheque();
            if($fnd_chq_cheque && $fnd_chq_cheque->getId() != 'null'){
                $fnd_chq_cheque->setFndCajaId($this->getId());
                $fnd_chq_cheque->setGralCajaId($this->getGralCaja()->getId());
                $fnd_chq_cheque->save();
            }
        }
    }

}

?>