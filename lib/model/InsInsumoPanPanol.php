<?php

require_once "base/BInsInsumoPanPanol.php";

class InsInsumoPanPanol extends BInsInsumoPanPanol {

    public function control() {
        $error = new DbError();

        // puntos de stock
        if ($this->getPuntoMinimo() != 0) {
            if ($this->getPuntoMinimo() > $this->getPuntoPedido()) {
                $error->addError('El punto minimo debe ser menor o igual al punto de pedido', 'Punto Min', 'punto_minimo');
            }
            if ($this->getPuntoPedido() > $this->getPuntoMaximo()) {
                $error->addError('El punto pedido debe ser menor o igual al punto de maximo', 'Punto Max', 'punto_maximo');
            }
        }

        $this->error = $error;
        return $error;
    }

    public function getDescripcion() {
        $texto = '';

        if ($this->getPanUbiPisoId() != 'null') {
            $texto .= $this->getPanUbiPiso()->getCodigo() . '-';
        }
        if ($this->getPanUbiPasilloId() != 'null') {
            $texto .= $this->getPanUbiPasillo()->getCodigo() . '-';
        }
        if ($this->getPanUbiEstanteId() != 'null') {
            $texto .= $this->getPanUbiEstante()->getCodigo() . '-';
        }
        if ($this->getPanUbiAlturaId() != 'null') {
            $texto .= $this->getPanUbiAltura()->getCodigo() . '-';
        }
        if ($this->getPanUbiCasilleroId() != 'null') {
            $texto .= $this->getPanUbiCasillero()->getCodigo() . '-';
        }
        if ($this->getPanUbiCeldaId() != 'null') {
            $texto .= $this->getPanUbiCelda()->getCodigo();
        }

        return $texto;
    }
    
    public function getResumenVentasMensualesCantidad(){
        $ins_insumo = $this->getInsInsumo();
        $pan_panol = $this->getPanPanol();

        $fecha_hasta = Date::getUltimaFechaMesAnterior(); // ultimo dia del mes anterior
        $fecha_desde = Date::sumarDias($fecha_hasta, -365); // 1 anio para atras desde fecha hasta

        $arr_periodo = array();            
        $gral_sucursal = $pan_panol->getGralSucursalXGralSucursalPanPanol();
        //Gral::prr($gral_sucursal);
        if($gral_sucursal){

            // -----------------------------------------------------------------
            // se consultan productos vendidos historicamente por la sucursal
            // -----------------------------------------------------------------
            $c = new Criterio();
            $c->add(InsInsumo::GEN_ATTR_ID, $ins_insumo->getId(), Criterio::IGUAL);
            $c->add(GralSucursal::GEN_ATTR_ID, $gral_sucursal->getId(), Criterio::IGUAL);
            $c->add(VtaOrdenVenta::GEN_ATTR_CREADO, $fecha_desde.' 00:00:00', Criterio::MAYORIGUAL);
            $c->add(VtaOrdenVenta::GEN_ATTR_CREADO, $fecha_hasta.' 23:59:59', Criterio::MENORIGUAL);
            $c->add(VtaOrdenVentaTipoEstado::GEN_ATTR_CODIGO, VtaOrdenVentaTipoEstado::TIPO_FINALIZADO, Criterio::IGUAL);
            $c->addTabla(VtaOrdenVenta::GEN_TABLA);
            $c->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID);
            $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID);
            $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
            $c->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID);
            $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $c);
            //Gral::prr($vta_orden_ventas);
            foreach($vta_orden_ventas as $vta_orden_venta){
                $arr_fecha = Date::getArrFecha($vta_orden_venta->getCreado());
                
                $gral_mes = GralMes::getOxCodigoNumero($arr_fecha['mes']);

                $arr_periodo[$arr_fecha['mes']]['MES'] = $arr_fecha['mes'];
                $arr_periodo[$arr_fecha['mes']]['MES_DESCRIPCION'] = $gral_mes->getDescripcion();
                $arr_periodo[$arr_fecha['mes']]['CANTIDAD_VENTAS_MENSUAL']++;
                $arr_periodo[$arr_fecha['mes']]['CANTIDAD_VENTAS_SEMANAL']+= 1/4;
                $arr_periodo[$arr_fecha['mes']]['CANTIDAD_VENDIDOS_MENSUAL']+= $vta_orden_venta->getCantidad();
                $arr_periodo[$arr_fecha['mes']]['CANTIDAD_VENDIDOS_SEMANAL']+= $vta_orden_venta->getCantidad() / 4;
                $arr_periodo[$arr_fecha['mes']]['ES_MINIMO'] = 0;
                $arr_periodo[$arr_fecha['mes']]['ES_MAXIMO'] = 0;
            }
            
            // -----------------------------------------------------------------
            // se redondean datos y se determinan min/max
            // -----------------------------------------------------------------
            if(count($arr_periodo) > 0){
                $punto_minimo = 1000000;
                $punto_maximo = 0;
                foreach($arr_periodo as $mes => $arr_periodo_uno){
                    $cantidad = $arr_periodo_uno['CANTIDAD_VENDIDOS_MENSUAL'];
                    if($cantidad < $punto_minimo){
                        $punto_minimo = $cantidad;
                        $mes_minimo = $mes;
                    }
                    if($cantidad > $punto_maximo){
                        $punto_maximo = $cantidad;
                        $mes_maximo = $mes;
                    }
                    $arr_periodo[$mes]['CANTIDAD_VENTAS_MENSUAL'] = ceil($arr_periodo[$mes]['CANTIDAD_VENTAS_MENSUAL']);
                    $arr_periodo[$mes]['CANTIDAD_VENTAS_SEMANAL'] = ceil($arr_periodo[$mes]['CANTIDAD_VENTAS_SEMANAL']);
                    $arr_periodo[$mes]['CANTIDAD_VENDIDOS_MENSUAL'] = ceil($arr_periodo[$mes]['CANTIDAD_VENDIDOS_MENSUAL']);
                    $arr_periodo[$mes]['CANTIDAD_VENDIDOS_SEMANAL'] = ceil($arr_periodo[$mes]['CANTIDAD_VENDIDOS_SEMANAL']);
                }
                $arr_periodo[$mes_minimo]['ES_MINIMO'] = 1;
                $arr_periodo[$mes_maximo]['ES_MAXIMO'] = 1;
            }
           //Gral::prr($arr_periodo);
        }

        return $arr_periodo;
    }
    
    public function getResumenRemisionesMensualesCantidad(){
        $ins_insumo = $this->getInsInsumo();
        $pan_panol = $this->getPanPanol();

        $fecha_hasta = Date::getUltimaFechaMesAnterior(); // ultimo dia del mes anterior
        $fecha_desde = Date::sumarDias($fecha_hasta, -365); // 1 anio para atras desde fecha hasta

        $arr_periodo = array();            

        // -----------------------------------------------------------------
        // se consultan productos vendidos historicamente por la sucursal
        // -----------------------------------------------------------------
        $c = new Criterio();
        $c->add(InsInsumo::GEN_ATTR_ID, $ins_insumo->getId(), Criterio::IGUAL);
        $c->add(PanPanol::GEN_ATTR_ID, $pan_panol->getId(), Criterio::IGUAL);
        $c->add(VtaRemito::GEN_ATTR_FECHA, $fecha_desde, Criterio::MAYORIGUAL);
        $c->add(VtaRemito::GEN_ATTR_FECHA, $fecha_hasta, Criterio::MENORIGUAL);
        $c->addTabla(VtaRemitoVtaOrdenVenta::GEN_TABLA);
        $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, VtaRemitoVtaOrdenVenta::GEN_ATTR_INS_INSUMO_ID);
        $c->addRealJoin(VtaRemito::GEN_TABLA, VtaRemito::GEN_ATTR_ID, VtaRemitoVtaOrdenVenta::GEN_ATTR_VTA_REMITO_ID);
        $c->addRealJoin(PanPanol::GEN_TABLA, PanPanol::GEN_ATTR_ID, VtaRemito::GEN_ATTR_PAN_PANOL_ID);
        $c->addOrden(VtaRemitoVtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $vta_remito_vta_orden_ventas = VtaRemitoVtaOrdenVenta::getVtaRemitoVtaOrdenVentas(null, $c);
        //Gral::prr($vta_orden_ventas);
        foreach($vta_remito_vta_orden_ventas as $vta_remito_vta_orden_venta){
            $vta_remito = $vta_remito_vta_orden_venta->getVtaRemito();
            
            $arr_fecha = Date::getArrFecha($vta_remito->getFecha());

            $gral_mes = GralMes::getOxCodigoNumero($arr_fecha['mes']);

            $arr_periodo[$arr_fecha['mes']]['MES'] = $arr_fecha['mes'];
            $arr_periodo[$arr_fecha['mes']]['MES_DESCRIPCION'] = $gral_mes->getDescripcion();
            $arr_periodo[$arr_fecha['mes']]['CANTIDAD_VENTAS_MENSUAL']++;
            $arr_periodo[$arr_fecha['mes']]['CANTIDAD_VENTAS_SEMANAL']+= 1/4;
            $arr_periodo[$arr_fecha['mes']]['CANTIDAD_VENDIDOS_MENSUAL']+= $vta_remito_vta_orden_venta->getCantidad();
            $arr_periodo[$arr_fecha['mes']]['CANTIDAD_VENDIDOS_SEMANAL']+= $vta_remito_vta_orden_venta->getCantidad() / 4;
            $arr_periodo[$arr_fecha['mes']]['ES_MINIMO'] = 0;
            $arr_periodo[$arr_fecha['mes']]['ES_MAXIMO'] = 0;
        }

        // -----------------------------------------------------------------
        // se redondean datos y se determinan min/max
        // -----------------------------------------------------------------
        if(count($arr_periodo) > 0){
            $punto_minimo = 1000000;
            $punto_maximo = 0;
            foreach($arr_periodo as $mes => $arr_periodo_uno){
                $cantidad = $arr_periodo_uno['CANTIDAD_VENDIDOS_MENSUAL'];
                if($cantidad < $punto_minimo){
                    $punto_minimo = $cantidad;
                    $mes_minimo = $mes;
                }
                if($cantidad > $punto_maximo){
                    $punto_maximo = $cantidad;
                    $mes_maximo = $mes;
                }
                $arr_periodo[$mes]['CANTIDAD_VENTAS_MENSUAL'] = ceil($arr_periodo[$mes]['CANTIDAD_VENTAS_MENSUAL']);
                $arr_periodo[$mes]['CANTIDAD_VENTAS_SEMANAL'] = ceil($arr_periodo[$mes]['CANTIDAD_VENTAS_SEMANAL']);
                $arr_periodo[$mes]['CANTIDAD_VENDIDOS_MENSUAL'] = ceil($arr_periodo[$mes]['CANTIDAD_VENDIDOS_MENSUAL']);
                $arr_periodo[$mes]['CANTIDAD_VENDIDOS_SEMANAL'] = ceil($arr_periodo[$mes]['CANTIDAD_VENDIDOS_SEMANAL']);
            }
            $arr_periodo[$mes_minimo]['ES_MINIMO'] = 1;
            $arr_periodo[$mes_maximo]['ES_MAXIMO'] = 1;
        }
       //Gral::prr($arr_periodo);

        return $arr_periodo;
    }

    public function getResumenRemisionesYDespachosMensualesCantidad(){
        $arr_periodo_remisiones = $this->getResumenRemisionesMensualesCantidad();
        $arr_periodo_despachos = $this->getResumenDespachosMensualesCantidad();

        $punto_minimo = 1000000;
        $punto_maximo = 0;        
        foreach($arr_periodo_remisiones as $mes => $arr_periodo_remisiones_mes){
            $arr_periodo[$mes]['MES'] = $arr_periodo_remisiones_mes['MES'];
            $arr_periodo[$mes]['MES_DESCRIPCION'] = $arr_periodo_remisiones_mes['MES_DESCRIPCION'];
            $arr_periodo[$mes]['CANTIDAD_VENTAS_MENSUAL']+= $arr_periodo_remisiones_mes['CANTIDAD_VENTAS_MENSUAL'];
            $arr_periodo[$mes]['CANTIDAD_VENTAS_SEMANAL']+= $arr_periodo_remisiones_mes['CANTIDAD_VENTAS_SEMANAL'];
            $arr_periodo[$mes]['CANTIDAD_VENDIDOS_MENSUAL']+= $arr_periodo_remisiones_mes['CANTIDAD_VENDIDOS_MENSUAL'];
            $arr_periodo[$mes]['CANTIDAD_VENDIDOS_SEMANAL']+= $arr_periodo_remisiones_mes['CANTIDAD_VENDIDOS_SEMANAL'];
            $arr_periodo[$mes]['ES_MINIMO'] = 0;
            $arr_periodo[$mes]['ES_MAXIMO'] = 0;            
        }

        foreach($arr_periodo_despachos as $mes => $arr_periodo_despachos_mes){
            $arr_periodo[$mes]['MES'] = $arr_periodo_despachos_mes['MES'];
            $arr_periodo[$mes]['MES_DESCRIPCION'] = $arr_periodo_despachos_mes['MES_DESCRIPCION'];
            $arr_periodo[$mes]['CANTIDAD_VENTAS_MENSUAL']+= $arr_periodo_despachos_mes['CANTIDAD_VENTAS_MENSUAL'];
            $arr_periodo[$mes]['CANTIDAD_VENTAS_SEMANAL']+= $arr_periodo_despachos_mes['CANTIDAD_VENTAS_SEMANAL'];
            $arr_periodo[$mes]['CANTIDAD_VENDIDOS_MENSUAL']+= $arr_periodo_despachos_mes['CANTIDAD_VENDIDOS_MENSUAL'];
            $arr_periodo[$mes]['CANTIDAD_VENDIDOS_SEMANAL']+= $arr_periodo_despachos_mes['CANTIDAD_VENDIDOS_SEMANAL'];
            $arr_periodo[$mes]['ES_MINIMO'] = 0;
            $arr_periodo[$mes]['ES_MAXIMO'] = 0;
            
        }
        
        foreach($arr_periodo as $mes => $arr_periodo_uno){
            $cantidad = $arr_periodo_uno['CANTIDAD_VENDIDOS_MENSUAL'];
            if($cantidad < $punto_minimo){
                $punto_minimo = $cantidad;
                $mes_minimo = $mes;
            }
            if($cantidad > $punto_maximo){
                $punto_maximo = $cantidad;
                $mes_maximo = $mes;
            }            
        }            
        $arr_periodo[$mes_minimo]['ES_MINIMO'] = 1;
        $arr_periodo[$mes_maximo]['ES_MAXIMO'] = 1;
            
        ksort($arr_periodo);
        
        return $arr_periodo;        
    }
    
    public function getResumenDespachosMensualesCantidad(){
        $ins_insumo = $this->getInsInsumo();
        $pan_panol = $this->getPanPanol();

        $fecha_hasta = Date::getUltimaFechaMesAnterior(); // ultimo dia del mes anterior
        $fecha_desde = Date::sumarDias($fecha_hasta, -365); // 1 anio para atras desde fecha hasta

        $arr_periodo = array();            

        // -----------------------------------------------------------------
        // se consultan productos despachados historicamente por la sucursal
        // -----------------------------------------------------------------
        $c = new Criterio();
        $c->add(PdiPedido::GEN_ATTR_INS_INSUMO_ID, $ins_insumo->getId(), Criterio::IGUAL);
        $c->add(PdiPedido::GEN_ATTR_PAN_PANOL_DESTINO, $pan_panol->getId(), Criterio::IGUAL);
        $c->add(PdiEstado::GEN_ATTR_CREADO, $fecha_desde.' 00:00:00', Criterio::MAYORIGUAL);
        $c->add(PdiEstado::GEN_ATTR_CREADO, $fecha_hasta.' 23:59:59', Criterio::MENORIGUAL);
        $c->add(PdiTipoEstado::GEN_ATTR_CODIGO, PdiTipoEstado::TIPO_ESTADO_DESPACHADO, Criterio::IGUAL);
        $c->addTabla(PdiEstado::GEN_TABLA);
        $c->addRealJoin(PdiPedido::GEN_TABLA, PdiPedido::GEN_ATTR_ID, PdiEstado::GEN_ATTR_PDI_PEDIDO_ID);
        $c->addRealJoin(PdiTipoEstado::GEN_TABLA, PdiTipoEstado::GEN_ATTR_ID, PdiEstado::GEN_ATTR_PDI_TIPO_ESTADO_ID);
        $c->addOrden(PdiEstado::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();


        $pdi_estados = PdiEstado::getPdiEstados(null, $c);
        //Gral::prr($pdi_estados);
        foreach($pdi_estados as $pdi_estado){
            $arr_fecha = Date::getArrFecha($pdi_estado->getCreado());

            $gral_mes = GralMes::getOxCodigoNumero($arr_fecha['mes']);

            $arr_periodo[$arr_fecha['mes']]['MES'] = $arr_fecha['mes'];
            $arr_periodo[$arr_fecha['mes']]['MES_DESCRIPCION'] = $gral_mes->getDescripcion();
            $arr_periodo[$arr_fecha['mes']]['CANTIDAD_VENTAS_MENSUAL']++;
            $arr_periodo[$arr_fecha['mes']]['CANTIDAD_VENTAS_SEMANAL']+= 1/4;
            $arr_periodo[$arr_fecha['mes']]['CANTIDAD_VENDIDOS_MENSUAL']+= $pdi_estado->getCantidad();
            $arr_periodo[$arr_fecha['mes']]['CANTIDAD_VENDIDOS_SEMANAL']+= $pdi_estado->getCantidad() / 4;
            $arr_periodo[$arr_fecha['mes']]['ES_MINIMO'] = 0;
            $arr_periodo[$arr_fecha['mes']]['ES_MAXIMO'] = 0;
        }

        // -----------------------------------------------------------------
        // se redondean datos y se determinan min/max
        // -----------------------------------------------------------------
        if(count($arr_periodo) > 0){
            $punto_minimo = 1000000;
            $punto_maximo = 0;
            foreach($arr_periodo as $mes => $arr_periodo_uno){
                $cantidad = $arr_periodo_uno['CANTIDAD_VENDIDOS_MENSUAL'];
                if($cantidad < $punto_minimo){
                    $punto_minimo = $cantidad;
                    $mes_minimo = $mes;
                }
                if($cantidad > $punto_maximo){
                    $punto_maximo = $cantidad;
                    $mes_maximo = $mes;
                }
                $arr_periodo[$mes]['CANTIDAD_VENTAS_MENSUAL'] = ceil($arr_periodo[$mes]['CANTIDAD_VENTAS_MENSUAL']);
                $arr_periodo[$mes]['CANTIDAD_VENTAS_SEMANAL'] = ceil($arr_periodo[$mes]['CANTIDAD_VENTAS_SEMANAL']);
                $arr_periodo[$mes]['CANTIDAD_VENDIDOS_MENSUAL'] = ceil($arr_periodo[$mes]['CANTIDAD_VENDIDOS_MENSUAL']);
                $arr_periodo[$mes]['CANTIDAD_VENDIDOS_SEMANAL'] = ceil($arr_periodo[$mes]['CANTIDAD_VENDIDOS_SEMANAL']);
            }
            $arr_periodo[$mes_minimo]['ES_MINIMO'] = 1;
            $arr_periodo[$mes_maximo]['ES_MAXIMO'] = 1;
        }
       //Gral::prr($arr_periodo);

        return $arr_periodo;
    }    
    
    static function setPuntosStockSugeridosDepositoCentral(){
        $c = new Criterio();
        //$c->add(PanPanol::GEN_ATTR_ID, 3, Criterio::IGUAL);
        //$c->add(InsInsumo::GEN_ATTR_ID, 18, Criterio::IGUAL);
        $c->add(PanTipoPanol::GEN_ATTR_CODIGO, PanTipoPanol::TIPO_PRINCIPAL, Criterio::IGUAL); // SOLO PRINCIPALES
        $c->add(InsStockTipoConfiguracion::GEN_ATTR_CODIGO, InsStockTipoConfiguracion::TIPO_MANUAL, Criterio::IGUAL);
        $c->addTabla(InsInsumoPanPanol::GEN_TABLA);
        $c->addRealJoin(PanPanol::GEN_TABLA, PanPanol::GEN_ATTR_ID, InsInsumoPanPanol::GEN_ATTR_PAN_PANOL_ID);
        $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, InsInsumoPanPanol::GEN_ATTR_INS_INSUMO_ID);
        $c->addRealJoin(PanTipoPanol::GEN_TABLA, PanTipoPanol::GEN_ATTR_ID, PanPanol::GEN_ATTR_PAN_TIPO_PANOL_ID);
        $c->addRealJoin(InsStockTipoConfiguracion::GEN_TABLA, InsStockTipoConfiguracion::GEN_ATTR_ID, InsInsumoPanPanol::GEN_ATTR_INS_STOCK_TIPO_CONFIGURACION_ID);
        $c->addOrden(InsInsumoPanPanol::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();
        
        $p = new Paginador(10, 1);
        $p = null;
        
        $ins_insumo_pan_panols = InsInsumoPanPanol::getInsInsumoPanPanols($p, $c);
        foreach($ins_insumo_pan_panols as $ins_insumo_pan_panol){
           //Gral::prr($ins_insumo_pan_panol);
            
            $ins_insumo = $ins_insumo_pan_panol->getInsInsumo();
            $pan_panol = $ins_insumo_pan_panol->getPanPanol();
            
            $arr_periodo = $ins_insumo_pan_panol->getResumenDespachosMensualesCantidad();
            //Gral::prr($arr_periodo);
            
            if(count($arr_periodo) > 0){
                $punto_minimo = 1000000;
                $punto_maximo = 0;
                foreach($arr_periodo as $arr_periodo_uno){
                    if($arr_periodo_uno['ES_MINIMO']){
                        $punto_minimo = $arr_periodo_uno['CANTIDAD_VENDIDOS_MENSUAL'];
                    }
                    if($arr_periodo_uno['ES_MAXIMO']){
                        $punto_maximo = $arr_periodo_uno['CANTIDAD_VENDIDOS_MENSUAL'];
                    }
                }

                $punto_pedido = ceil(($punto_minimo + $punto_maximo) / 2);

                $arr_puntos_sugeridos = array(
                    InsInsumo::PUNTO_MINIMO => $punto_minimo,
                    InsInsumo::PUNTO_PEDIDO => $punto_pedido,
                    InsInsumo::PUNTO_MAXIMO => $punto_maximo,
                );
                //Gral::prr($arr_puntos_sugeridos);

                // -------------------------------------------------------------                
                // se registran los valores sugeridos
                // -------------------------------------------------------------                
                $sql = "UPDATE ins_insumo_pan_panol SET "
                        . "punto_minimo_sugerido = ".$arr_puntos_sugeridos[InsInsumo::PUNTO_MINIMO].", "
                        . "punto_pedido_sugerido = ".$arr_puntos_sugeridos[InsInsumo::PUNTO_PEDIDO].", "
                        . "punto_maximo_sugerido = ".$arr_puntos_sugeridos[InsInsumo::PUNTO_MAXIMO]." "
                        . "WHERE id = ".$ins_insumo_pan_panol->getId();
                $ejec = new Ejecucion();
                $ejec->setSql($sql);
                $ejec->execute();

                if($ins_insumo_pan_panol->getInsStockTipoConfiguracion()->getCodigo() == InsStockTipoConfiguracion::TIPO_AUTOMATICA){
                    $ins_insumo_pan_panol->setPuntoMinimo($arr_puntos_sugeridos[InsInsumo::PUNTO_MINIMO]);
                    $ins_insumo_pan_panol->setPuntoPedido($arr_puntos_sugeridos[InsInsumo::PUNTO_PEDIDO]);
                    $ins_insumo_pan_panol->setPuntoMaximo($arr_puntos_sugeridos[InsInsumo::PUNTO_MAXIMO]);
                    $ins_insumo_pan_panol->setObservacion('Actualizado por Proceso Automatico');
                    //$ins_insumo_pan_panol->save();
                    
                    // ----------------------------------------------------------------------
                    // si recupera el resumen de stock
                    // ----------------------------------------------------------------------
                    //$ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);

                    // ----------------------------------------------------------------------
                    // si actualiza estado de stock
                    // ----------------------------------------------------------------------
                    //PrcProceso::controlStockInsumosTipoEstado($ins_stock_resumen->getId());
                }
            }
        }
    }

    static function setPuntosStockSugeridosSucursal(){
         
        $c = new Criterio();
        //$c->add(PanPanol::GEN_ATTR_ID, 3, Criterio::IGUAL);
        //$c->add(InsInsumo::GEN_ATTR_ID, 18, Criterio::IGUAL);
        $c->add(PanTipoPanol::GEN_ATTR_CODIGO, PanTipoPanol::TIPO_SUCURSAL, Criterio::IGUAL); // SOLO SUCURSALES
        $c->add(InsStockTipoConfiguracion::GEN_ATTR_CODIGO, InsStockTipoConfiguracion::TIPO_AUTOMATICA, Criterio::IGUAL);
        $c->addTabla(InsInsumoPanPanol::GEN_TABLA);
        $c->addRealJoin(PanPanol::GEN_TABLA, PanPanol::GEN_ATTR_ID, InsInsumoPanPanol::GEN_ATTR_PAN_PANOL_ID);
        $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, InsInsumoPanPanol::GEN_ATTR_INS_INSUMO_ID);
        $c->addRealJoin(PanTipoPanol::GEN_TABLA, PanTipoPanol::GEN_ATTR_ID, PanPanol::GEN_ATTR_PAN_TIPO_PANOL_ID);
        $c->addRealJoin(InsStockTipoConfiguracion::GEN_TABLA, InsStockTipoConfiguracion::GEN_ATTR_ID, InsInsumoPanPanol::GEN_ATTR_INS_STOCK_TIPO_CONFIGURACION_ID);
        $c->addOrden(InsInsumoPanPanol::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();
        
        $p = new Paginador(10, 1);
        $p = null;
        
        $ins_insumo_pan_panols = InsInsumoPanPanol::getInsInsumoPanPanols($p, $c);
        foreach($ins_insumo_pan_panols as $ins_insumo_pan_panol){
           //Gral::prr($ins_insumo_pan_panol);
            
            $ins_insumo = $ins_insumo_pan_panol->getInsInsumo();
            $pan_panol = $ins_insumo_pan_panol->getPanPanol();
                        
            $gral_sucursal = $pan_panol->getGralSucursalXGralSucursalPanPanol();
            if($gral_sucursal){
                
                //$arr_periodo = $ins_insumo_pan_panol->getResumenVentasMensualesCantidad();
                $arr_periodo = $ins_insumo_pan_panol->getResumenRemisionesMensualesCantidad();
                
                //Gral::prr($arr_periodo);

                if(count($arr_periodo) > 0){
                    $punto_minimo = 1000000;
                    $punto_maximo = 0;
                    foreach($arr_periodo as $arr_periodo_uno){
                        if($arr_periodo_uno['ES_MINIMO']){
                            $punto_minimo = $arr_periodo_uno['CANTIDAD_VENDIDOS_SEMANAL'];
                        }
                        if($arr_periodo_uno['ES_MAXIMO']){
                            $punto_maximo = $arr_periodo_uno['CANTIDAD_VENDIDOS_SEMANAL'];
                        }
                    }
                    
                    $punto_pedido = ceil(($punto_minimo + $punto_maximo) / 2);
                    
                    $arr_puntos_sugeridos = array(
                        InsInsumo::PUNTO_MINIMO => $punto_minimo,
                        InsInsumo::PUNTO_PEDIDO => $punto_pedido,
                        InsInsumo::PUNTO_MAXIMO => $punto_maximo,
                    );
                    //Gral::prr($arr_puntos_sugeridos);

                    // -------------------------------------------------------------                
                    // se registran los valores sugeridos
                    // -------------------------------------------------------------                
                    $sql = "UPDATE ins_insumo_pan_panol SET "
                            . "punto_minimo_sugerido = ".$arr_puntos_sugeridos[InsInsumo::PUNTO_MINIMO].", "
                            . "punto_pedido_sugerido = ".$arr_puntos_sugeridos[InsInsumo::PUNTO_PEDIDO].", "
                            . "punto_maximo_sugerido = ".$arr_puntos_sugeridos[InsInsumo::PUNTO_MAXIMO]." "
                            . "WHERE id = ".$ins_insumo_pan_panol->getId();
                    $ejec = new Ejecucion();
                    $ejec->setSql($sql);
                    $ejec->execute();

                    if($ins_insumo_pan_panol->getInsStockTipoConfiguracion()->getCodigo() == InsStockTipoConfiguracion::TIPO_AUTOMATICA){
                        $ins_insumo_pan_panol->setPuntoMinimo($arr_puntos_sugeridos[InsInsumo::PUNTO_MINIMO]);
                        $ins_insumo_pan_panol->setPuntoPedido($arr_puntos_sugeridos[InsInsumo::PUNTO_PEDIDO]);
                        $ins_insumo_pan_panol->setPuntoMaximo($arr_puntos_sugeridos[InsInsumo::PUNTO_MAXIMO]);
                        $ins_insumo_pan_panol->setObservacion('Actualizado por Proceso Automatico');
                        $ins_insumo_pan_panol->save();

                        // ----------------------------------------------------------------------
                        // si recupera el resumen de stock
                        // ----------------------------------------------------------------------
                        $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);

                        // ----------------------------------------------------------------------
                        // si actualiza estado de stock
                        // ----------------------------------------------------------------------
                        PrcProceso::controlStockInsumosTipoEstado($ins_stock_resumen->getId());
                    }
                }
                
            }
            
        }
    }
    
}

?>