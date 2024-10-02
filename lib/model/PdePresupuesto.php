<?php 
require_once "base/BPdePresupuesto.php"; 
class PdePresupuesto extends BPdePresupuesto
{
    public function getDescripcion() {
        $texto = '';
        $texto.= $this->getPdeCentroPedido()->getDescripcion();
        $texto.= ' - '.$this->getMes();
        $texto.= '/'.$this->getAnio();
        
        return $texto;
    }
    
    static function inicializarPresupuestoMensual($vp_anio = false, $vp_mes = false){
        $anio = ($vp_anio) ? $vp_anio : date('Y');
        $mes = ($vp_mes) ? $vp_mes : (int)date('m');
        
        $gral_moneda_base = GralMoneda::getOxCodigo('PESOAR');
        
        $pde_centro_pedidos = PdeCentroPedido::getPdeCentroPedidos(null, null, true);
        foreach($pde_centro_pedidos as $pde_centro_pedido){
            $array = array(
                array('campo' => 'pde_centro_pedido_id', 'valor' => $pde_centro_pedido->getId()),
                array('campo' => 'anio', 'valor' => $anio),
                array('campo' => 'mes', 'valor' => $mes),
            );
            $pde_presupuesto = PdePresupuesto::getOxArray($array);
            if(!$pde_presupuesto){
                // si no existe presupuesto para ese mes, anio y centro de pedido se inicializa uno
                $pde_presupuesto = new PdePresupuesto();
                $pde_presupuesto->setPdeCentroPedidoId($pde_centro_pedido->getId());
                $pde_presupuesto->setAnio($anio);
                $pde_presupuesto->setMes($mes);
                $pde_presupuesto->setGralMonedaId($gral_moneda_base->getId());
                $pde_presupuesto->save();

                $pde_presupuesto_anterior = $pde_presupuesto->getPdePresupuestoAnterior();
                if($pde_presupuesto_anterior){
                    $importe_inicial = $pde_presupuesto_anterior->getImporteSaldo();
                    $importe_asignado = $pde_presupuesto_anterior->getImporteAsignado();
                    $importe_alerta_amarilla = $pde_presupuesto_anterior->getImportealertaAmarilla();
                    $importe_alerta_roja = $pde_presupuesto_anterior->getImportealertaRoja();
                }else{
                    $importe_inicial = 0;
                    $importe_asignado = 0;
                    $importe_alerta_amarilla = 0;
                    $importe_alerta_roja = 0;
                }


                $pde_presupuesto->setImporteInicial($importe_inicial);
                $pde_presupuesto->setImporteAsignado($importe_asignado);
                $pde_presupuesto->setImporteConsumido(0);
                $pde_presupuesto->setImporteSaldo($importe_inicial + $importe_asignado);
                $pde_presupuesto->setImporteAlertaAmarilla($importe_alerta_amarilla);
                $pde_presupuesto->setImporteAlertaRoja($importe_alerta_roja);
                $pde_presupuesto->setEstado(1);
                $pde_presupuesto->save();
            }
            
            
            // se calculan erogaciones y saldos
            $pde_presupuesto->actualizarPresupuestoMensual();
        }        
    }
    
    /**
     * se actualizan detalles de presupuesto mensual
     */
    public function actualizarPresupuestoMensual(){
        $anio = $this->getAnio();
        $mes = $this->getMes();
        
        $pde_presupuesto_tipo_pago = PdePresupuestoTipoPago::getOxCodigo(PdePresupuestoTipoPago::TIPO_COMPRAS);
        $pde_centro_pedido = $this->getPdeCentroPedido();
        
        /*
         * ------------------------------------------------------------------------
         * COMPRAS
         * ------------------------------------------------------------------------
         * se registran las OCs vigentes
         * ------------------------------------------------------------------------
         */
        $c = new Criterio();
        $c->add(PdeOcEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->add(PdeOcTipoEstado::GEN_ATTR_AFECTA_PRESUPUESTO, 1, Criterio::IGUAL);
        $c->add(PdePedido::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $pde_centro_pedido->getId(), Criterio::IGUAL);
        $c->add('extract(year from '.  PdeOc::GEN_ATTR_CREADO.')', $anio, Criterio::IGUAL);
        $c->add('extract(month from '.PdeOc::GEN_ATTR_CREADO.')', $mes, Criterio::IGUAL);
        $c->addTabla(PdeOc::GEN_TABLA);
        $c->addRealJoin(PdeOcEstado::GEN_TABLA, PdeOcEstado::GEN_ATTR_PDE_OC_ID, PdeOc::GEN_ATTR_ID);
        $c->addRealJoin(PdeOcTipoEstado::GEN_TABLA, PdeOcTipoEstado::GEN_ATTR_ID, PdeOcEstado::GEN_ATTR_PDE_OC_TIPO_ESTADO_ID);
        $c->addRealJoin(PdePedido::GEN_TABLA, PdePedido::GEN_ATTR_ID, PdeOc::GEN_ATTR_PDE_PEDIDO_ID);
        $c->setCriterios();        

        $pde_ocs = PdeOc::getPdeOcs(null, $c);
        
        Gral::prr($pde_centro_pedido);
        Gral::prr($pde_ocs);
        //exit;

        foreach($pde_ocs as $pde_oc){
            //$pde_recepcion_estado = $pde_recepcion->getPdeRecepcionEstadoActual();
            $ins_insumo = $pde_oc->getInsInsumo();
            
            //$pde_presupuesto_pago = $pde_recepcion->getPdePresupuestoPago();
            $pde_presupuesto_compra = $pde_oc->getPdePresupuestoCompra();
            if(!$pde_presupuesto_compra){
                $pde_presupuesto_compra = new PdePresupuestoCompra();
                $pde_presupuesto_compra->setDescripcion('Compra de '.$pde_oc->getCantidad().' '.str_replace("'", '"', $ins_insumo->getDescripcion()).' a PRV '.$pde_oc->getPrvProveedor()->getDescripcion());
                $pde_presupuesto_compra->setPdePresupuestoId($this->getId());
                $pde_presupuesto_compra->setPdeCentroPedidoId($pde_centro_pedido->getId());
                $pde_presupuesto_compra->setPdeOcId($pde_oc->getId());
                $pde_presupuesto_compra->setImporte($pde_oc->getImporteTotal());
                $pde_presupuesto_compra->setFecha(substr($pde_oc->getCreado(), 0, 10));
                $pde_presupuesto_compra->setGralMonedaId($pde_oc->getGralMonedaId());
                $pde_presupuesto_compra->setEstado(1);
                $pde_presupuesto_compra->save();
            }
        }
        
        /*
         * ------------------------------------------------------------------------
         * COMPRAS ANULADAS
         * ------------------------------------------------------------------------
         * se cancelan las OCs no vigentes, que se cancelaron
         * ------------------------------------------------------------------------
         */
        $c = new Criterio();
        $c->add(PdeOcEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->add(PdeOcTipoEstado::GEN_ATTR_AFECTA_PRESUPUESTO, 0, Criterio::IGUAL);
        $c->add(PdePedido::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $pde_centro_pedido->getId(), Criterio::IGUAL);
        $c->add('extract(year from '.  PdeOc::GEN_ATTR_CREADO.')', $anio, Criterio::IGUAL);
        $c->add('extract(month from '.PdeOc::GEN_ATTR_CREADO.')', $mes, Criterio::IGUAL);
        $c->addTabla(PdeOc::GEN_TABLA);
        $c->addRealJoin(PdeOcEstado::GEN_TABLA, PdeOcEstado::GEN_ATTR_PDE_OC_ID, PdeOc::GEN_ATTR_ID);
        $c->addRealJoin(PdeOcTipoEstado::GEN_TABLA, PdeOcTipoEstado::GEN_ATTR_ID, PdeOcEstado::GEN_ATTR_PDE_OC_TIPO_ESTADO_ID);
        $c->addRealJoin(PdePedido::GEN_TABLA, PdePedido::GEN_ATTR_ID, PdeOc::GEN_ATTR_PDE_PEDIDO_ID);
        $c->setCriterios();
        
        $pde_ocs = PdeOc::getPdeOcs(null, $c);
        
        Gral::prr($pde_centro_pedido);
        Gral::prr($pde_ocs);
        //exit;
        
        //foreach($pde_recepcions as $pde_recepcion){
        foreach($pde_ocs as $pde_oc){
        	//$pde_recepcion_estado = $pde_recepcion->getPdeRecepcionEstadoActual();
        	$ins_insumo = $pde_oc->getInsInsumo();
        
        	//$pde_presupuesto_pago = $pde_recepcion->getPdePresupuestoPago();
        	$pde_presupuesto_compra = $pde_oc->getPdePresupuestoCompra();
        	if($pde_presupuesto_compra){
        		$pde_presupuesto_compra->setEstado(0);
        		$pde_presupuesto_compra->save();
        	}
        }
        
        /*
         * ------------------------------------------------------------------------
         * RECEPCIONES
         * ------------------------------------------------------------------------
         *	inicialmente se migran las recepciones finalizadas para el periodo a calcular
         * ------------------------------------------------------------------------
         */        
        $c = new Criterio();
        $c->add(PdeRecepcionEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->add(PdeRecepcionTipoEstado::GEN_ATTR_AFECTA_PRESUPUESTO, 1, Criterio::IGUAL);
        $c->add(PdePedido::GEN_ATTR_PDE_CENTRO_PEDIDO_ID, $pde_centro_pedido->getId(), Criterio::IGUAL);
        //$c->add('extract(year from '.PdeRecepcionEstado::GEN_ATTR_FECHA_CONCILIACION.')', $anio, Criterio::IGUAL);
        //$c->add('extract(month from '.PdeRecepcionEstado::GEN_ATTR_FECHA_CONCILIACION.')', $mes, Criterio::IGUAL);
        $c->add('extract(year from '.  PdeOc::GEN_ATTR_CREADO.')', $anio, Criterio::IGUAL);
        $c->add('extract(month from '.PdeOc::GEN_ATTR_CREADO.')', $mes, Criterio::IGUAL);
        $c->addTabla(PdeRecepcion::GEN_TABLA);
        $c->addRealJoin(PdeRecepcionEstado::GEN_TABLA, PdeRecepcionEstado::GEN_ATTR_PDE_RECEPCION_ID, PdeRecepcion::GEN_ATTR_ID);
        $c->addRealJoin(PdeRecepcionTipoEstado::GEN_TABLA, PdeRecepcionTipoEstado::GEN_ATTR_ID, PdeRecepcionEstado::GEN_ATTR_PDE_RECEPCION_TIPO_ESTADO_ID);
        $c->addRealJoin(PdeOc::GEN_TABLA, PdeOc::GEN_ATTR_ID, PdeRecepcion::GEN_ATTR_PDE_OC_ID);
        $c->addRealJoin(PdePedido::GEN_TABLA, PdePedido::GEN_ATTR_ID, PdeRecepcion::GEN_ATTR_PDE_PEDIDO_ID);
        $c->setCriterios();
        
        $pde_recepcions = PdeRecepcion::getPdeRecepcions(null, $c);
        foreach($pde_recepcions as $pde_recepcion){
        	$pde_recepcion_estado = $pde_recepcion->getPdeRecepcionEstadoActual();
        	$ins_insumo = $pde_recepcion->getInsInsumo();
        	
        	$pde_presupuesto_recepcion = $pde_recepcion->getPdePresupuestoRecepcion();
        	if(!$pde_presupuesto_recepcion){
        		$pde_presupuesto_recepcion = new PdePresupuestoRecepcion();
        		$pde_presupuesto_recepcion->setDescripcion('Recepcion de '.$pde_recepcion->getCantidad().' '.str_replace("'", '"', $ins_insumo->getDescripcion()).' a PRV '.$pde_oc->getPrvProveedor()->getDescripcion());
        		$pde_presupuesto_recepcion->setPdePresupuestoId($this->getId());
        		$pde_presupuesto_recepcion->setPdeCentroPedidoId($pde_centro_pedido->getId());
        		$pde_presupuesto_recepcion->setPdeOcId($pde_recepcion->getPdeOcId());
        		$pde_presupuesto_recepcion->setPdeRecepcionId($pde_recepcion->getId());
        		$pde_presupuesto_recepcion->setImporte($pde_recepcion->getImporteTotal());
        		$pde_presupuesto_recepcion->setFecha(substr($pde_recepcion_estado->getCreado(), 0, 10));
        		$pde_presupuesto_recepcion->setGralMonedaId($pde_oc->getGralMonedaId());
        		$pde_presupuesto_recepcion->setEstado(1);
        		$pde_presupuesto_recepcion->save();
        	}
    	}
        
    	/**
         * ------------------------------------------------------------------------
         * OT EXTERNAS
         * ------------------------------------------------------------------------
         * se incluyen las ot externas finalizadas
         * ------------------------------------------------------------------------
    	 */

        // ************ AQUI
        
    	/**
         * ------------------------------------------------------------------------
         * se procesan todos los pagos vinculados al presupuesto, y se calculan saldos
         * ------------------------------------------------------------------------
    	 */
        $importe_consumido = 0;
        $importe_comprado = 0;
        $importe_recibido = 0;
        
        $pde_presupuesto_compras = $this->getPdePresupuestoCompras(null, null, true);
        foreach($pde_presupuesto_compras as $pde_presupuesto_compra){
        	$importe = $pde_presupuesto_compra->getImporte();
        	$importe_consumido+= $importe;
        	$importe_comprado+= $importe;
        }        

        $pde_presupuesto_recepcions = $this->getPdePresupuestoRecepcions(null, null, true);
        foreach($pde_presupuesto_recepcions as $pde_presupuesto_recepcion){
        	$importe = $pde_presupuesto_recepcion->getImporte();
        	$importe_recibido+= $importe;
        }
        
        
        $pde_presupuesto_pagos = $this->getPdePresupuestoPagos(null, null, true);
        foreach($pde_presupuesto_pagos as $pde_presupuesto_pago){
            $importe = $pde_presupuesto_pago->getImporte();
            $importe_consumido+= $importe;
        }
        
        $importe_inicial = $this->getImporteInicial();
        $importe_asignado = $this->getImporteAsignado();
        $importe_saldo = $importe_inicial + $importe_asignado - $importe_consumido;        
        
        $this->setImporteConsumido($importe_consumido);
        $this->setImporteComprado($importe_comprado);
        $this->setImporteRecibido($importe_recibido);
        $this->setImporteSaldo($importe_saldo);
        $this->save();
        
    }
    
    public function getPdePresupuestoAnterior(){
        $anio_anterior = (($this->getMes() - 1) != 0) ? $this->getAnio() : $this->getAnio() - 1;
        $mes_anterior = (($this->getMes() - 1) != 0) ? $this->getMes() - 1 : 12;
        
        $array = array(
            array('campo' => 'pde_centro_pedido_id', 'valor' => $this->getPdeCentroPedidoId()),
            array('campo' => 'anio', 'valor' => $anio_anterior),
            array('campo' => 'mes', 'valor' => $mes_anterior),
        );
        $pde_presupuesto = PdePresupuesto::getOxArray($array);
        if($pde_presupuesto){
            return $pde_presupuesto;
        }
        return false;
    }
    
    public function getEsAlertaAmarilla(){
        if($this->getImporteConsumido() > $this->getImporteAlertaAmarilla() ){
            if($this->getImporteConsumido() <= $this->getImporteAlertaRoja() ){
                return true;
            }
        }
        return false;
    }
    public function getEsAlertaRoja(){
        if($this->getImporteConsumido() > $this->getImporteAlertaRoja() ){
            return true;
        }
        return false;
    }    
}
?>