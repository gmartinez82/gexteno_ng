<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_centro_costo_prv_proveedor = GralCentroCostoPrvProveedor::getOxId($id);

$estado = ($gral_centro_costo_prv_proveedor->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_centro_costo_prv_proveedor_uno.php';
?>

