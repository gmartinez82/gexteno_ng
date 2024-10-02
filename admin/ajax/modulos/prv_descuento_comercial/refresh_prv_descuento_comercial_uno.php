<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$prv_descuento_comercial = PrvDescuentoComercial::getOxId($id);

$estado = ($prv_descuento_comercial->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'prv_descuento_comercial_uno.php';
?>

