<?php
include "_autoload.php";

$ot_id = Gral::getVars(2, 'ot_id', 0);
$operario_id = Gral::getVars(2, 'operario_id', 0);
$ope_operario = OpeOperario::getOxId($operario_id);

$tal_orden_trabajo_asignacion = new TalOrdenTrabajoAsignacion();
$tal_orden_trabajo_asignacion->setTalOrdenTrabajoId($ot_id);
$tal_orden_trabajo_asignacion->setOpeOperarioId($operario_id);
$tal_orden_trabajo_asignacion->setGlpGalponId($ope_operario->getGlpGalponId());
$tal_orden_trabajo_asignacion->save();
?>