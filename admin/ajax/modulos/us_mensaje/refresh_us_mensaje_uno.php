<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$us_mensaje = UsMensaje::getOxId($id);

$estado = ($us_mensaje->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'us_mensaje_uno.php';
?>

