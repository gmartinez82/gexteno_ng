<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_orden_venta = new VtaOrdenVenta();
$vta_orden_venta->setId($id, false);
$vta_orden_venta->deleteAll();
?>

