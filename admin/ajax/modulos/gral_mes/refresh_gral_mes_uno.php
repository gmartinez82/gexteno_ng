<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_mes = GralMes::getOxId($id);

$estado = ($gral_mes->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_mes_uno.php';
?>

