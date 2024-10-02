<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_sucursal = GralSucursal::getOxId($id);

$estado = ($gral_sucursal->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_sucursal_uno.php';
?>

