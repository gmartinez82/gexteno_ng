<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_sucursal_pan_panol = GralSucursalPanPanol::getOxId($id);

$estado = ($gral_sucursal_pan_panol->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_sucursal_pan_panol_uno.php';
?>

