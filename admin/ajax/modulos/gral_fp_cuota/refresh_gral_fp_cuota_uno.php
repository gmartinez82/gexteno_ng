<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_fp_cuota = GralFpCuota::getOxId($id);

$estado = ($gral_fp_cuota->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_fp_cuota_uno.php';
?>

