<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_comision_gral_fp_forma_pago = VtaComisionGralFpFormaPago::getOxId($id);

$estado = ($vta_comision_gral_fp_forma_pago->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_comision_gral_fp_forma_pago_uno.php';
?>

