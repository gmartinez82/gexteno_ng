<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_param_tipo_pago_gral_fp_forma_pago = EkuParamTipoPagoGralFpFormaPago::getOxId($id);

include 'eku_param_tipo_pago_gral_fp_forma_pago_uno.php';
?>

