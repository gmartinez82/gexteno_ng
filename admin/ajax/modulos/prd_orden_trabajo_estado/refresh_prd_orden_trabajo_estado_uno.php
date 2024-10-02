<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$prd_orden_trabajo_estado = PrdOrdenTrabajoEstado::getOxId($id);

$estado = ($prd_orden_trabajo_estado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'prd_orden_trabajo_estado_uno.php';
?>

