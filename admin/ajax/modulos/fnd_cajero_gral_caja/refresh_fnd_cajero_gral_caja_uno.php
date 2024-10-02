<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$fnd_cajero_gral_caja = FndCajeroGralCaja::getOxId($id);

include 'fnd_cajero_gral_caja_uno.php';
?>

