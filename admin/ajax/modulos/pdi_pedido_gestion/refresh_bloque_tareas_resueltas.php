<?php
include "_autoload.php";

$insumo_id = Gral::getVars(2, 'insumo_id', 0);
$ot_id = Gral::getVars(2, 'ot_id', 0);
$cantidad = Gral::getVars(2, 'cantidad', 0);

$ins_insumo = InsInsumo::getOxId($insumo_id);
$tal_orden_trabajo = TalOrdenTrabajo::getOxId($ot_id);
$tal_tarea_resuelta = TalTareaResuelta::getOxId($tarea_resuelta_id);

include "bloque_tareas_resueltas.php";
?>