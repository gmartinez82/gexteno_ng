<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$pde_orden_pago_gral_fp_forma_pago_cheque = PdeOrdenPagoGralFpFormaPagoCheque::getOxId($id);

$estado = ($pde_orden_pago_gral_fp_forma_pago_cheque->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'pde_orden_pago_gral_fp_forma_pago_cheque_uno.php';
?>

