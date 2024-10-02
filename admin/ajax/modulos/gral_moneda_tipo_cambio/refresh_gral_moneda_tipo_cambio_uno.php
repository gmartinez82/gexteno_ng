<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$gral_moneda_tipo_cambio = GralMonedaTipoCambio::getOxId($id);

$estado = ($gral_moneda_tipo_cambio->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'gral_moneda_tipo_cambio_uno.php';
?>

