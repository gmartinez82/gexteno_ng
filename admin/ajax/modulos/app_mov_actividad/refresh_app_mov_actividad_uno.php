<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$app_mov_actividad = AppMovActividad::getOxId($id);

$estado = ($app_mov_actividad->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'app_mov_actividad_uno.php';
?>

