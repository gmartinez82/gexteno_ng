<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$prd_orden_trabajo_operacion_estado = PrdOrdenTrabajoOperacionEstado::getOxId($id);

$estado = ($prd_orden_trabajo_operacion_estado->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'prd_orden_trabajo_operacion_estado_uno.php';
?>

