<?php

require_once "base/BInsStockResumen.php";

class InsStockResumen extends BInsStockResumen {

    /**
     * Autor: Pablo Rosen
     * Fecha: 23/05/2012 10:15 hs.
     * Metodo que recalcula el resumen de stock en funcion a un insumo
     */
    static function setRecalcularStockInsumo($pan_panol, $ins_insumo) {
        $c = new Criterio();
        $c->add(InsStockResumen::GEN_ATTR_PAN_PANOL_ID, $pan_panol->getId(), Criterio::IGUAL);
        $c->add(InsStockResumen::GEN_ATTR_INS_INSUMO_ID, $ins_insumo->getId(), Criterio::IGUAL);
        $c->addTabla(InsStockResumen::GEN_TABLA);
        $c->setCriterios();

        $ins_stock_resumen = new InsStockResumen();
        $ins_stock_resumens = InsStockResumen::getInsStockResumens(null, $c);
        foreach ($ins_stock_resumens as $o) {
            // si existe se asigna el existente
            $ins_stock_resumen = $o;
        }

        // se obtiene origen de resumen desde los movimientos
        $c = new Criterio();
        $c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $pan_panol->getId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID, $ins_insumo->getId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(InsStockMovimiento::GEN_TABLA);
        $c->setCriterios();
        $ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientos(null, $c);

        $cantidad = 0;
        $cantidad_pasivo = 0;
        foreach ($ins_stock_movimientos as $ins_stock_movimiento) {
            $cantidad+= $ins_stock_movimiento->getCantidad();
            $cantidad_pasivo+= $ins_stock_movimiento->getCantidadPasivo();
        }

        // se actualiza cantidad en resumen
        $ins_stock_resumen->setPanPanolId($pan_panol->getId());
        $ins_stock_resumen->setInsInsumoId($ins_insumo->getId());
        $ins_stock_resumen->setCantidad($cantidad);
        $ins_stock_resumen->setCantidadPasivo($cantidad_pasivo);

        $ins_stock_resumen->setEstado(1);

        //$ins_stock_resumen->save();
        // se  consulta la cantidad reservada del insumo en el panol
        $cantidad_reservados = $ins_insumo->getInsInsumoReservasActivasCantidadEnPanol($pan_panol);

        $cantidad_real = $ins_stock_resumen->getCantidad() + $cantidad_reservados;
        $cantidad_comprometida = $cantidad_reservados;

        //Esteban 10/06/2017
        $ins_stock_resumen->setCantidadReal($cantidad_real);
        $ins_stock_resumen->setCantidadComprometida($cantidad_comprometida);


        $ins_stock_resumen->save();

        // si no tiene estado actual, se inicializa el estado del resumen de stock
        $ins_stock_resumen_estado = $ins_stock_resumen->getInsStockResumenEstadoActual();
        if (!$ins_stock_resumen_estado) {
            $ins_stock_resumen->setInsStockResumenEstado(InsStockResumenTipoEstado::TIPO_REGULAR);
        }

        return $ins_stock_resumen;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 28/10/2014 16:36 hs.
     * Metodo que registra un nuevo estado para el resumen de stock
     */
    public function setInsStockResumenEstado($tipo_estado_codigo, $observaciones = '') {
        $inicial = 1;

        foreach ($this->getInsStockResumenEstados() as $ins_stock_resumen_estado) {
            //$ins_stock_resumen_estado->setActual(0);
            //$ins_stock_resumen_estado->save();

            $inicial = 0;
        }

        $ejec = new Ejecucion();
        $sql = 'UPDATE ins_stock_resumen_estado SET actual = 0 WHERE ins_stock_resumen_id = ' . $this->getId() . ' AND actual <> 0';
        $ejec->setSql($sql);
        $ejec->execute();

        $ins_stock_resumen_tipo_estado = InsStockResumenTipoEstado::getOxCodigo($tipo_estado_codigo);

        $ins_stock_resumen_estado = new InsStockResumenEstado();
        $ins_stock_resumen_estado->setInsStockResumenId($this->getId());
        $ins_stock_resumen_estado->setInsStockResumenTipoEstadoId($ins_stock_resumen_tipo_estado->getId());
        $ins_stock_resumen_estado->setInicial($inicial);
        $ins_stock_resumen_estado->setActual(1);
        $ins_stock_resumen_estado->setObservacion($observaciones);
        $ins_stock_resumen_estado->save();
        
        // se registra tipo de estado en cabecera
        $this->setInsStockResumenTipoEstadoId($ins_stock_resumen_tipo_estado->getId());
        $this->save();

        return $ins_stock_resumen_estado;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 28/10/2014 16:36 hs.
     * Metodo que retorna el estado actual del resumen de stock
     * @return InsStockResumenEstado
     */
    public function getInsStockResumenEstadoActual() {
        $c = new Criterio();
        $c->add('ins_stock_resumen_id', $this->getId(), Criterio::IGUAL);
        $c->add('actual', 1, Criterio::IGUAL);
        $c->addTabla('ins_stock_resumen_estado');
        $c->setCriterios();

        $ins_stock_resumen_estados = InsStockResumenEstado::getInsStockResumenEstados(null, $c);
        foreach ($ins_stock_resumen_estados as $ins_stock_resumen_estado) {
            return $ins_stock_resumen_estado;
        }
        return false;
    }

    public function getInsStockResumenTipoEstadoActual() {
        $ins_stock_resumen_estado = $this->getInsStockResumenEstadoActual();
        if ($ins_stock_resumen_estado) {
            $ins_stock_resumen_tipo_estado = $ins_stock_resumen_estado->getInsStockResumenTipoEstado();
            return $ins_stock_resumen_tipo_estado;
        }
        return false;
    }

    /**
     * Metodo que retorna la cantidad sugerida para el reabastecimiento o compra
     * @return type
     */
    public function getCantidadSugeridaReabastecimiento() {
        $ins_insumo = $this->getInsInsumo();
        $pan_panol = $this->getPanPanol();

        $arr_puntos_insumo = $ins_insumo->getInsInsumoPuntosEnPanol($pan_panol);

        $cantidad_sugerida = $arr_puntos_insumo[InsInsumo::PUNTO_MAXIMO] - $this->getCantidad();
        return $cantidad_sugerida;
    }
    
    /**
     * Metodo que retorna el ultimo movimiento de ingreso que tiene el producto
     * en el deposito del resumen
     * @return boolean
     */
    public function getUltimaFechaIngreso() {
        
        $c = new Criterio();
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_INGRESO, Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID, $this->getInsInsumoId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $this->getPanPanolId(), Criterio::IGUAL);
        $c->addTabla(InsStockMovimiento::GEN_TABLA);
        $c->addRealJoin(InsStockTipoMovimiento::GEN_TABLA, InsStockTipoMovimiento::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID);
        $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();
        
        $ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientos($p = new Paginador(1, 1), $c);        
        foreach($ins_stock_movimientos as $ins_stock_movimiento){
            //return substr($ins_stock_movimiento->getFechahora(), 0, 10);
            
            $array_fecha = array(
                'fecha' => substr($ins_stock_movimiento->getFechahora(), 0, 10),
                'cantidad' => abs($ins_stock_movimiento->getCantidad()),
            );
            return $array_fecha;
        }
        
        return false;
    }
    
    /**
     * Metodo que retorna el ultimo movimiento de ingreso que tiene el producto
     * en el deposito del resumen
     * @return boolean
     */
    public function getCantidadUltimoIngresoTotalEnFecha($fecha) {
        
        $c = new Criterio();
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_INGRESO, Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID, $this->getInsInsumoId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $this->getPanPanolId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_FECHAHORA, $fecha . ' 00:00:00', Criterio::MAYORIGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_FECHAHORA, $fecha . ' 23:59:59', Criterio::MENORIGUAL);
        $c->addTabla(InsStockMovimiento::GEN_TABLA);
        $c->addRealJoin(InsStockTipoMovimiento::GEN_TABLA, InsStockTipoMovimiento::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID);
        $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();
        
        $array_resumens = array();
        $cantidad_registros = 0;
        $total = 0;
        $ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientos(null, $c);        
        foreach($ins_stock_movimientos as $ins_stock_movimiento){
            $array_resumens [] = array(
                'fecha' => substr($ins_stock_movimiento->getFechahora(), 0, 10),
                'cantidad' => abs($ins_stock_movimiento->getCantidad()),
            );
            $cantidad_registros++;
            $total = $total + abs($ins_stock_movimiento->getCantidad());
        }
        
        if($array_resumens){
            $array_resumens ['resumen'] = array(
                'cantidad_registros' => $cantidad_registros,
                'total' => $total,
            );
            return $array_resumens;
        }
        
        return false;
    }
    
    /**
     * Metodo que retorna el ultimo movimiento de ingreso que tiene el producto
     * en el deposito del resumen
     * @return boolean
     */
    public function getUltimaFechaSalida() {
        
        $c = new Criterio();
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_SALIDA, Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID, $this->getInsInsumoId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $this->getPanPanolId(), Criterio::IGUAL);
        $c->addTabla(InsStockMovimiento::GEN_TABLA);
        $c->addRealJoin(InsStockTipoMovimiento::GEN_TABLA, InsStockTipoMovimiento::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID);
        $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();
        
        $ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientos($p = new Paginador(1, 1), $c);        
        foreach($ins_stock_movimientos as $ins_stock_movimiento){
            //return substr($ins_stock_movimiento->getFechahora(), 0, 10);
            
            $array_fecha = array(
                'fecha' => substr($ins_stock_movimiento->getFechahora(), 0, 10),
                'cantidad' => abs($ins_stock_movimiento->getCantidad()),
            );
            return $array_fecha;
        }
        
        return false;
    }
    
    /**
     * Metodo que retorna el ultimo movimiento de ingreso que tiene el producto
     * en el deposito del resumen
     * @return boolean
     */
    public function getCantidadUltimaSalidaTotalEnFecha($fecha) {
        
        $c = new Criterio();
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_SALIDA, Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID, $this->getInsInsumoId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $this->getPanPanolId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_FECHAHORA, $fecha . ' 00:00:00', Criterio::MAYORIGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_FECHAHORA, $fecha . ' 23:59:59', Criterio::MENORIGUAL);
        $c->addTabla(InsStockMovimiento::GEN_TABLA);
        $c->addRealJoin(InsStockTipoMovimiento::GEN_TABLA, InsStockTipoMovimiento::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID);
        $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();
        
        $array_resumens = array();
        $cantidad_registros = 0;
        $total = 0;
        $ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientos(null, $c);        
        foreach($ins_stock_movimientos as $ins_stock_movimiento){
            $array_resumens [] = array(
                'fecha' => substr($ins_stock_movimiento->getFechahora(), 0, 10),
                'cantidad' => abs($ins_stock_movimiento->getCantidad()),
            );
            $cantidad_registros++;
            $total = $total + abs($ins_stock_movimiento->getCantidad());
        }
        
        if($array_resumens){
            $array_resumens ['resumen'] = array(
                'cantidad_registros' => $cantidad_registros,
                'total' => $total,
            );
            return $array_resumens;
        }
        
        return false;
    }
    
    /**
     * Metodo que retorna el ultimo movimiento de ingreso que tiene el producto
     * en el deposito del resumen
     * @return boolean
     */
    public function getUltimaFechaVenta() {
        //return false;
        
        //$gral_sucursal = $this->getPanPanol()->getGralSucursalVinculado();

        $c = new Criterio();
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_SALIDA, Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID, $this->getInsInsumoId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $this->getPanPanolId(), Criterio::IGUAL);
        //$c->add(PdiTipoOrigen::GEN_ATTR_CODIGO, PdiTipoOrigen::TIPO_ORIGEN_PANOL, Criterio::IGUAL);
        $c->add(PdiTipoEstado::GEN_ATTR_CODIGO, PdiTipoEstado::TIPO_ESTADO_REMITIDO, Criterio::IGUAL);
        
        if($gral_sucursal){
            //$c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $this->getPanPanolId(), Criterio::IGUAL);            
        }
        
        $c->addTabla(InsStockMovimiento::GEN_TABLA);
        $c->addRealJoin(InsStockTipoMovimiento::GEN_TABLA, InsStockTipoMovimiento::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID);
        $c->addRealJoin(PanPanol::GEN_TABLA, PanPanol::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID);
        $c->addRealJoin(PdiPedido::GEN_TABLA, PdiPedido::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_PDI_PEDIDO_ID);
        $c->addRealJoin(PdiTipoOrigen::GEN_TABLA, PdiTipoOrigen::GEN_ATTR_ID, PdiPedido::GEN_ATTR_PDI_TIPO_ORIGEN_ID);
        $c->addRealJoin(PdiTipoEstado::GEN_TABLA, PdiTipoEstado::GEN_ATTR_ID, PdiPedido::GEN_ATTR_PDI_TIPO_ESTADO_ID);
        
        //$c->addRealJoin(GralSucursalPanPanol::GEN_TABLA, GralSucursalPanPanol::GEN_ATTR_PAN_PANOL_ID, PanPanol::GEN_ATTR_ID);
        //$c->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, GralSucursalPanPanol::GEN_ATTR_GRAL_SUCURSAL_ID);
        
        //$c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID, GralSucursal::GEN_ATTR_ID);
        //$c->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
        
        $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();
        
        $ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientos($p = new Paginador(1, 1), $c);        
        foreach($ins_stock_movimientos as $ins_stock_movimiento){
            //return substr($ins_stock_movimiento->getFechahora(), 0, 10);
            
            $array_fecha = array(
                'fecha' => substr($ins_stock_movimiento->getFechahora(), 0, 10),
                'cantidad' => abs($ins_stock_movimiento->getCantidad()),
            );
            return $array_fecha;
        }
        
        return false;
    }
    
    /**
     * Metodo que retorna el ultimo movimiento de ingreso que tiene el producto
     * en el deposito del resumen
     * @return boolean
     */
    public function getCantidadUltimaVentaTotalEnFecha($fecha) {
        //return false;
        
        //$gral_sucursal = $this->getPanPanol()->getGralSucursalVinculado();

        $c = new Criterio();
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_SALIDA, Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID, $this->getInsInsumoId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $this->getPanPanolId(), Criterio::IGUAL);
        //$c->add(PdiTipoOrigen::GEN_ATTR_CODIGO, PdiTipoOrigen::TIPO_ORIGEN_PANOL, Criterio::IGUAL);
        $c->add(PdiTipoEstado::GEN_ATTR_CODIGO, PdiTipoEstado::TIPO_ESTADO_REMITIDO, Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_FECHAHORA, $fecha . ' 00:00:00', Criterio::MAYORIGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_FECHAHORA, $fecha . ' 23:59:59', Criterio::MENORIGUAL);

        if($gral_sucursal){
            //$c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $this->getPanPanolId(), Criterio::IGUAL);            
        }
        
        $c->addTabla(InsStockMovimiento::GEN_TABLA);
        $c->addRealJoin(InsStockTipoMovimiento::GEN_TABLA, InsStockTipoMovimiento::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID);
        $c->addRealJoin(PanPanol::GEN_TABLA, PanPanol::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID);
        $c->addRealJoin(PdiPedido::GEN_TABLA, PdiPedido::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_PDI_PEDIDO_ID);
        $c->addRealJoin(PdiTipoOrigen::GEN_TABLA, PdiTipoOrigen::GEN_ATTR_ID, PdiPedido::GEN_ATTR_PDI_TIPO_ORIGEN_ID);
        $c->addRealJoin(PdiTipoEstado::GEN_TABLA, PdiTipoEstado::GEN_ATTR_ID, PdiPedido::GEN_ATTR_PDI_TIPO_ESTADO_ID);
        
        //$c->addRealJoin(GralSucursalPanPanol::GEN_TABLA, GralSucursalPanPanol::GEN_ATTR_PAN_PANOL_ID, PanPanol::GEN_ATTR_ID);
        //$c->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, GralSucursalPanPanol::GEN_ATTR_GRAL_SUCURSAL_ID);
        
        //$c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID, GralSucursal::GEN_ATTR_ID);
        //$c->addRealJoin(VtaOrdenVenta::GEN_TABLA, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
        
        $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();
        
        $array_resumens = array();
        $cantidad_registros = 0;
        $total = 0;
        $ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientos(null, $c);        
        foreach($ins_stock_movimientos as $ins_stock_movimiento){
            $array_resumens [] = array(
                'fecha' => substr($ins_stock_movimiento->getFechahora(), 0, 10),
                'cantidad' => abs($ins_stock_movimiento->getCantidad()),
            );
            $cantidad_registros++;
            $total = $total + abs($ins_stock_movimiento->getCantidad());
        }
        
        if($array_resumens){
            $array_resumens ['resumen'] = array(
                'cantidad_registros' => $cantidad_registros,
                'total' => $total,
            );
            return $array_resumens;
        }
        
        return false;
    }
    
    public function getUltimaFechaAjuste(){
        $c = new Criterio();
        $c->addTrueInicialEnWhere();
        
        $c->addInicioSubconsulta();
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_AJUSTE_NEGATIVO, Criterio::IGUAL);
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_AJUSTE_POSITIVO, Criterio::IGUAL, false, Criterio::_OR);
        $c->addFinSubconsulta();
        
        $c->add(InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID, $this->getInsInsumoId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $this->getPanPanolId(), Criterio::IGUAL);
        $c->addTabla(InsStockMovimiento::GEN_TABLA);
        $c->addRealJoin(InsStockTipoMovimiento::GEN_TABLA, InsStockTipoMovimiento::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID);
        $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();
        
        $ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientos($p = new Paginador(1, 1), $c);        
        foreach($ins_stock_movimientos as $ins_stock_movimiento){
            //return substr($ins_stock_movimiento->getFechahora(), 0, 10);
            
            $array_fecha = array(
                'fecha' => substr($ins_stock_movimiento->getFechahora(), 0, 10),
                'cantidad' => $ins_stock_movimiento->getCantidad(),
            );
            return $array_fecha;
        }
        
        return false;
    }
    
    public function getCantidadUltimoAjusteTotalEnFecha($fecha){
        $c = new Criterio();
        $c->addTrueInicialEnWhere();
        
        $c->addInicioSubconsulta();
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_AJUSTE_NEGATIVO, Criterio::IGUAL);
        $c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_AJUSTE_POSITIVO, Criterio::IGUAL, false, Criterio::_OR);
        $c->addFinSubconsulta();
        
        $c->add(InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID, $this->getInsInsumoId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $this->getPanPanolId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_FECHAHORA, $fecha . ' 00:00:00', Criterio::MAYORIGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_FECHAHORA, $fecha . ' 23:59:59', Criterio::MENORIGUAL);
        $c->addTabla(InsStockMovimiento::GEN_TABLA);
        $c->addRealJoin(InsStockTipoMovimiento::GEN_TABLA, InsStockTipoMovimiento::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID);
        $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();
        
        $array_resumens = array();
        $cantidad_registros = 0;
        $total = 0;
        $ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientos(null, $c);        
        foreach($ins_stock_movimientos as $ins_stock_movimiento){
            $array_resumens [] = array(
                'fecha' => substr($ins_stock_movimiento->getFechahora(), 0, 10),
                'cantidad' => $ins_stock_movimiento->getCantidad(),
            );
            $cantidad_registros++;
            $total = $total + $ins_stock_movimiento->getCantidad();
        }
        
        if($array_resumens){
            $array_resumens ['resumen'] = array(
                'cantidad_registros' => $cantidad_registros,
                'total' => $total,
            );
            return $array_resumens;
        }
        
        return false;
    }

}

?>