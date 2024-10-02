<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_sucursal_vta_vendedor = GralSucursalVtaVendedor::getOxId($id);

$estado = ($gral_sucursal_vta_vendedor->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_sucursal_vta_vendedor_uno.php';
?>

