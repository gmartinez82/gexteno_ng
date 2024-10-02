<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_escenario = GralEscenario::getOxId($id);

$estado = ($gral_escenario->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_escenario_uno.php';
?>

