<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_recibo_tipo_pago = VtaReciboTipoPago::getOxId($id);

$estado = ($vta_recibo_tipo_pago->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_recibo_tipo_pago_uno.php';
?>

