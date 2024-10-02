<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_banco = GralBanco::getOxId($id);

$estado = ($gral_banco->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_banco_uno.php';
?>

