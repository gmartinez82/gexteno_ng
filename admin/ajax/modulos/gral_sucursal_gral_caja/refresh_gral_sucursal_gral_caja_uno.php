<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_sucursal_gral_caja = GralSucursalGralCaja::getOxId($id);

include 'gral_sucursal_gral_caja_uno.php';
?>

