<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_comision_vta_factura = VtaComisionVtaFactura::getOxId($id);

$estado = ($vta_comision_vta_factura->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_comision_vta_factura_uno.php';
?>

