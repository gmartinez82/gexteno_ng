<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_centro_costo_gral_sucursal = GralCentroCostoGralSucursal::getOxId($id);

$estado = ($gral_centro_costo_gral_sucursal->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_centro_costo_gral_sucursal_uno.php';
?>

