<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$us_credencial = UsCredencial::getOxId($id);

$estado = ($us_credencial->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'us_credencial_uno.php';
?>

