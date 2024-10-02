<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_fp_medio_pago = GralFpMedioPago::getOxId($id);

$estado = ($gral_fp_medio_pago->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_fp_medio_pago_uno.php';
?>

