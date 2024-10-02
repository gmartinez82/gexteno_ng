<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$prv_descuento_financiero = PrvDescuentoFinanciero::getOxId($id);

$estado = ($prv_descuento_financiero->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'prv_descuento_financiero_uno.php';
?>

