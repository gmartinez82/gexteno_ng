<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$per_mov_planificacion = PerMovPlanificacion::getOxId($id);

$estado = ($per_mov_planificacion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'per_mov_planificacion_uno.php';
?>

