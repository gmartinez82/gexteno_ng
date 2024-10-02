<?php
include "_autoload.php";

$panol_id = Gral::getVars(1, 'panol_id', 0);
$coche_id = Gral::getVars(1, 'coche_id', 0);
$operario_id = Gral::getVars(1, 'operario_id', 0);

$pan_panol = PanPanol::getOxId($panol_id);
$veh_coche = VehCoche::getOxId($coche_id);
$ope_operario = OpeOperario::getOxId($operario_id);

$arr_error['error'] = false;

// control del array en session
$array_imputar_masivo = Gral::getSes('PDI_PEDIDO_IMPUTAR_MASIVO');
foreach($array_imputar_masivo as $i => $cantidad){
    $arr = explode('-', $i);
    $insumo_id = $arr[0];
    $ot_id = $arr[1];
    $tarea_resuelta_id = $arr[2];

    $ins_insumo = InsInsumo::getOxId($insumo_id);
    $tal_orden_trabajo = TalOrdenTrabajo::getOxId($ot_id);
    $tal_tarea_resuelta = TalTareaResuelta::getOxId($tarea_resuelta_id);
    
    //sleep(2);
    //exit;
    
    //Gral::prr($i);
    $pdi_pedido = new PdiPedido();
    $pdi_pedido->setInsInsumoId($ins_insumo->getId());
    $pdi_pedido->setPdiTipoOrigenId(PdiTipoOrigen::getOxCodigo(PdiTipoOrigen::TIPO_ORIGEN_ENTREGA_OPERARIO)->getId());
    $pdi_pedido->setPdiUrgenciaId(PdiUrgencia::getOxCodigo(PdiUrgencia::URGENCIA_MEDIA)->getId());
    $pdi_pedido->setOpeOperarioId($ope_operario->getId());
    $pdi_pedido->setPanPanolOrigen($pan_panol->getId());
    $pdi_pedido->setPanPanolDestino($pan_panol->getId());
    $pdi_pedido->setObservacion($observacion);
    $pdi_pedido->setEstado(1);

    $pdi_pedido->save();
    $pdi_pedido->setCodigo($pdi_pedido->getCodigoConCeros());
    $pdi_pedido->save();
    
    // se registra estado del pedido, PdiEstado
    $pdi_estado = $pdi_pedido->setPdiPedidoEstado(
            PdiTipoEstado::TIPO_ESTADO_ENTREGADO,
            $cantidad,
            $observacion
     );

    // se registran destinatarios del pedido, PdiPedidoDestinatario
    $pdi_pedido->setPdiPedidoDestinatarios();

    // se registra el insumo solicitado a donde se vincula la tarea resuelta
    $tal_insumo_solicitado = new TalInsumoSolicitado();
    $tal_insumo_solicitado->setPdiPedidoId($pdi_pedido->getId());
    $tal_insumo_solicitado->setTalTareaResueltaId($tal_tarea_resuelta->getId());
    $tal_insumo_solicitado->setInsInsumoId($ins_insumo->getId());
    $tal_insumo_solicitado->setCantidad($cantidad);
    $tal_insumo_solicitado->setObservacion('Imputado desde Entrega Masiva a Operarios');
    $tal_insumo_solicitado->setEstado(0);
    $tal_insumo_solicitado->save();
    
    
    // se registra insumo sugerido, para futuras solicitudes del operario
    $array = array(
            array('campo' => 'tal_tarea_base_id', 'valor' => $tal_tarea_resuelta->getTalTareaBaseId()),
            array('campo' => 'veh_modelo_id', 'valor' => $veh_coche->getVehModeloId()),
            array('campo' => 'ins_insumo_id', 'valor' => $ins_insumo->getId()),
    );
    $tal_tarea_insumo = TalTareaInsumo::getOxArray($array);
    if(!$tal_tarea_insumo){
            $tal_tarea_insumo = new TalTareaInsumo();
            $tal_tarea_insumo->setTalTareaBaseId($tal_tarea_resuelta->getTalTareaBaseId());
            $tal_tarea_insumo->setVehModeloId($veh_coche->getVehModeloId());
            $tal_tarea_insumo->setInsInsumoId($ins_insumo->getId());
            $tal_tarea_insumo->setObservacion('Autoconfigurado por Entrega Masiva a Operario');
            $tal_tarea_insumo->setCantidad($cantidad);
            $tal_tarea_insumo->setEstado(1);
            $tal_tarea_insumo->save();
    }


    // se registra Movimiento de Stock Reservado
    $ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxCodigo(InsStockTipoMovimiento::TIPO_MOV_SALIDA);
    
    
    $ins_insumo->setInsStockMovimiento($pdi_pedido, $pdi_estado, $ins_stock_tipo_movimiento, false, false);
    
    // se realiza control de stock post movimiento
    $pan_panol = PanPanol::getOxId($pdi_pedido->getPanPanolDestino());
    InsInsumo::execPrcControlPuntosStock($ins_insumo, $pan_panol);
    
    // se registra el consumo del insumo en el coche
    $tal_insumo_solicitado->setRegistrarInsumoConsumido();
}

?>