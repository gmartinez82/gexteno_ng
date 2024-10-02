<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$vta_remito_vta_orden_venta = VtaRemitoVtaOrdenVenta::getOxId($id);

$estado = ($vta_remito_vta_orden_venta->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_remito_vta_orden_venta_uno.php';
?>

