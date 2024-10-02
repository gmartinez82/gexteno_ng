<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$vta_orden_venta = VtaOrdenVenta::getOxId($id);

$estado = ($vta_orden_venta->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_orden_venta_gestion_uno.php';
?>

