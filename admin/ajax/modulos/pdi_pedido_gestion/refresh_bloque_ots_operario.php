<?php
include "_autoload.php";

$operario_id = Gral::getVars(2, 'operario_id', 0);
$coche_id = Gral::getVars(2, 'coche_id', 0);

$ot_id = Gral::getVars(2, 'ot_id', 0);
if($ot_id == 'undefined') $ot_id = 0;

$tarea_resuelta_id = Gral::getVars(2, 'tarea_resuelta_id', 0);
if($tarea_resuelta_id == 'undefined') $tarea_resuelta_id = 0;

$pdi_pedido_entrega_cmb_tal_orden_trabajo_id = $ot_id;
$pdi_pedido_entrega_cmb_tal_tarea_resuelta_id = $tarea_resuelta_id ;

$ope_operario = OpeOperario::getOxId($operario_id);
$veh_coche = VehCoche::getOxId($coche_id);
$tal_orden_trabajo = TalOrdenTrabajo::getOxId($ot_id);
$tal_tarea_resuelta = TalTareaResuelta::getOxId($tarea_resuelta_id);

include "bloque_ots_operario.php";
?>