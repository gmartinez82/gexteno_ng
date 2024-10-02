<?php 
require_once "base/BInsStockMovimiento.php"; 
class InsStockMovimiento extends BInsStockMovimiento
{
 
    /**
     * 
     * @return type
     */
    public function getCantidadDisponible(){
        return $this->getCantidadReal() - $this->getCantidadComprometida();
    }
    
    /**
     * 
     * @param type $ins_insumo_id
     * @param type $pan_panol_id
     * @param type $cantidad
     * @param type $observacion
     * @return boolean
     */
    static function setRegistrarAjusteCalculado($ins_insumo_id, $pan_panol_id, $cantidad, $observacion){
        $ins_insumo = InsInsumo::getOxId($ins_insumo_id);
        $pan_panol = PanPanol::getOxId($pan_panol_id);
        
        $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);
        if($ins_stock_resumen){
            $cantidad_stock = $ins_stock_resumen->getCantidad();
            $cantidad_calculada = $cantidad - $cantidad_stock;
        }
        
        if($cantidad_calculada > 0){
            $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_AJUSTE_POSITIVO);
        }else{
            $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_AJUSTE_NEGATIVO);
            $cantidad_calculada = abs($cantidad_calculada);
        }
        
        if($cantidad_calculada == 0){
            return false;
        }
        
        // ---------------------------------------------------------------------
        // se registra el pdi pedido
        // ---------------------------------------------------------------------
        $pdi_pedido = new PdiPedido();
        $pdi_pedido->setInsInsumoId($ins_insumo_id);
        $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_AJUSTE_PANOL)->getId());
        $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_BAJA)->getId());
        $pdi_pedido->setPanPanolOrigen($pan_panol_id);
        $pdi_pedido->setPanPanolDestino($pan_panol_id);
        $pdi_pedido->setObservacion($observacion);
        $pdi_pedido->setEstado(1);
        //Gral::prr($pdi_pedido);

        $pdi_pedido->save();
        $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
        $pdi_pedido->save();

        // se registra estado del pedido, PdiEstado
        $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
                PdiTipoEstado::TIPO_ESTADO_AJUSTADO, $cantidad_calculada, $observacion
        );

        // se registran destinatarios del pedido, PdiPedidoDestinatario
        $pdi_pedido->setPdiPedidoDestinatarios();

        if ($ins_insumo) {
            $ins_stock_movimiento = $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, false, false, $observacion);
        }

        // se setea que el insumo mueve y controla stock
        //$ins_insumo->setControlStock(1);
        //$ins_insumo->save();

        return $ins_stock_movimiento;
    }
    
    /**
     * 
     * @return type
     */
    public function getInsStockMovimientoAnteriors(){
        $c = new Criterio();
        $c->add(InsInsumo::GEN_ATTR_ID, $this->getInsInsumoId(), Criterio::IGUAL);
        $c->add(PanPanol::GEN_ATTR_ID, $this->getPanPanolId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_ID, $this->getId(), Criterio::MENOR);
        $c->addTabla(InsStockMovimiento::GEN_TABLA);
        $c->addRealJoin(PanPanol::GEN_TABLA, PanPanol::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID);
        $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID);
        $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();
        
        $ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientos(null, $c);
        return $ins_stock_movimientos;
    }

    /**
     * 
     * @return type
     */
    public function getInsStockMovimientoAnterior(){
        $c = new Criterio();
        $c->add(InsInsumo::GEN_ATTR_ID, $this->getInsInsumoId(), Criterio::IGUAL);
        $c->add(PanPanol::GEN_ATTR_ID, $this->getPanPanolId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_ID, $this->getId(), Criterio::MENOR);
        $c->addTabla(InsStockMovimiento::GEN_TABLA);
        $c->addRealJoin(PanPanol::GEN_TABLA, PanPanol::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID);
        $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID);
        $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();
        
        $ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientos(new Paginador(1, 1), $c);
        foreach($ins_stock_movimientos as $ins_stock_movimiento_ultimo){
            return $ins_stock_movimiento_ultimo;
        }
    }

    /**
     * 
     * @return type
     */
    public function getInsStockMovimientoPosteriors(){
        $c = new Criterio();
        $c->add(InsInsumo::GEN_ATTR_ID, $this->getInsInsumoId(), Criterio::IGUAL);
        $c->add(PanPanol::GEN_ATTR_ID, $this->getPanPanolId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_ID, $this->getId(), Criterio::MAYOR);
        $c->addTabla(InsStockMovimiento::GEN_TABLA);
        $c->addRealJoin(PanPanol::GEN_TABLA, PanPanol::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID);
        $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID);
        $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();
        
        $ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientos(null, $c);
        return $ins_stock_movimientos;
    }

    /**
     * 
     * @return type
     */
    public function getInsStockMovimientoPosterior(){
        $c = new Criterio();
        $c->add(InsInsumo::GEN_ATTR_ID, $this->getInsInsumoId(), Criterio::IGUAL);
        $c->add(PanPanol::GEN_ATTR_ID, $this->getPanPanolId(), Criterio::IGUAL);
        $c->add(InsStockMovimiento::GEN_ATTR_ID, $this->getId(), Criterio::MAYOR);
        $c->addTabla(InsStockMovimiento::GEN_TABLA);
        $c->addRealJoin(PanPanol::GEN_TABLA, PanPanol::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID);
        $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_INS_INSUMO_ID);
        $c->addOrden(InsStockMovimiento::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();
        
        $ins_stock_movimientos = InsStockMovimiento::getInsStockMovimientos(new Paginador(1, 1), $c);
        foreach($ins_stock_movimientos as $ins_stock_movimiento_ultimo){
            return $ins_stock_movimiento_ultimo;
        }
    }
    
}
?>