<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_vta_factura = EkuDeVtaFactura::getOxId($id);

$estado = ($eku_de_vta_factura->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_vta_factura_uno.php';
?>

