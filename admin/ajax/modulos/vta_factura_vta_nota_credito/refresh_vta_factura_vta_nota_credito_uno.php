<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_factura_vta_nota_credito = VtaFacturaVtaNotaCredito::getOxId($id);

$estado = ($vta_factura_vta_nota_credito->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_factura_vta_nota_credito_uno.php';
?>

