<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(PdeOrdenPagoGralFpFormaPagoCheque::SES_CRITERIOS);
$criterio->addTabla('pde_orden_pago_gral_fp_forma_pago_cheque');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

