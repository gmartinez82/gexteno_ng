<?php
include "_autoload.php";

$tarea_resuelta_id = Gral::getVars(1, 'tarea_resuelta_id', 0);
$insumo_id = Gral::getVars(1, 'insumo_id', 0);

$tal_tarea_resuelta = TalTareaResuelta::getOxId($tarea_resuelta_id);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$tal_orden_trabajo = $tal_tarea_resuelta->getTalOrdenTrabajo();
$veh_coche = $tal_orden_trabajo->getVehCoche();

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
        $tal_tarea_insumo->setObservacion('Autoconfigurado desde Pantalla de Imputacion Masiva');
        $tal_tarea_insumo->setCantidad($cantidad);
        $tal_tarea_insumo->setEstado(1);
        $tal_tarea_insumo->save();
}else{
    $tal_tarea_insumo->deleteAll();
}
    
?>