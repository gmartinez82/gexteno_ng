<?php
include "_autoload.php";

$tarea_id = Gral::getVars(1, 'tarea_id', 0);
$accion_id = Gral::getVars(1, 'accion_id', 0);
$ot_id = Gral::getVars(1, 'ot_id', 0);
$coche_id = Gral::getVars(1, 'coche_id', 0);
$panol_id = Gral::getVars(1, 'panol_id', 0);
$operario_id = Gral::getVars(1, 'operario_id', 0);

$pan_panol = PanPanol::getOxId($panol_id);
$glp_galpon = $pan_panol->getGlpGalpon();
$tal_orden_trabajo = TalOrdenTrabajo::getOxId($ot_id);
$tal_tarea_asignada = $tal_orden_trabajo->getTalTareaAsignada();
$tal_tarea_accion = TalTareaAccion::getOxId($accion_id);
$tal_tarea_base = TalTareaBase::getOxId($tarea_id);

$veh_coche = VehCoche::getOxId($coche_id);
$veh_coche_km = $veh_coche->getVehCocheKm();

// se cambia el estado de la tarea asignada a 1
$tal_tarea_asignada->setEstado(1);
$tal_tarea_asignada->save();

// se genera la tarea resuelta
$tal_tarea_resuelta = new TalTareaResuelta();
$tal_tarea_resuelta->setTalTareaAsignadaId($tal_tarea_asignada->getId());
$tal_tarea_resuelta->setTalOrdenTrabajoId($tal_orden_trabajo->getId());
$tal_tarea_resuelta->setTalTareaBaseId($tarea_id);
$tal_tarea_resuelta->setTalTareaAccionId($accion_id);
$tal_tarea_resuelta->setGlpGalponId($glp_galpon->getId());
$tal_tarea_resuelta->setOpeOperarioId($operario_id);

$tal_tarea_resuelta->setFecha(date('Y-m-d'));
$tal_tarea_resuelta->setKmCoche($veh_coche_km->getKm());

$tal_tarea_resuelta->setEstado(1);

// se calcula el puntaje
$puntaje_tarea = $tal_tarea_base->getPuntajeTareaCalculadoXAccion($tal_tarea_accion);
$tal_tarea_resuelta->setPuntaje($puntaje_tarea);

$tal_tarea_resuelta->save();


//$tal_orden_trabajo->actualizarResTalOrdenTrabajo();

$data_json = json_encode($tal_tarea_resuelta->getId());
echo $data_json;
?>