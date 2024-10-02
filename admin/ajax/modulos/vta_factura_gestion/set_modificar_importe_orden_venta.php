<?php
include "_autoload.php";

$vta_orden_venta_id = Gral::getVars(Gral::VARS_POST, 'vta_orden_venta_id', 0, Gral::TIPO_INTEGER);
$importe = Gral::getVars(Gral::VARS_POST, 'importe', 0, Gral::TIPO_STRING);

$importe = str_replace('.', '', $importe);
$importe = str_replace(',', '.', $importe);

$vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
if($vta_orden_venta){
    $vta_orden_venta->setImporteUnitario($importe);
    $vta_orden_venta->save();
}