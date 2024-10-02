<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_param_procesamiento_pago = EkuParamProcesamientoPago::getOxId($id);

$estado = ($eku_param_procesamiento_pago->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_param_procesamiento_pago_uno.php';
?>

