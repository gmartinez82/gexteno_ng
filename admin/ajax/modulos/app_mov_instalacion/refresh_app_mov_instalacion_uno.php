<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$app_mov_instalacion = AppMovInstalacion::getOxId($id);

$estado = ($app_mov_instalacion->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'app_mov_instalacion_uno.php';
?>

