<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(EkuParamTipoPagoGralFpFormaPago::SES_CRITERIOS);
$criterio->addTabla('eku_param_tipo_pago_gral_fp_forma_pago');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

