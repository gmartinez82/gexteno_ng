<?php
include "_autoload.php";

$tarea_resuelta_id = Gral::getVars(2, 'tarea_resuelta_id', 0);
$tal_tarea_resuelta = TalTareaResuelta::getOxId($tarea_resuelta_id);

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);

$tal_orden_trabajo = $tal_tarea_resuelta->getTalOrdenTrabajo();
$veh_coche = $tal_orden_trabajo->getVehCoche();
$veh_modelo = $veh_coche->getVehModelo();

include "bloque_tareas_resueltas_uno.php";
?>