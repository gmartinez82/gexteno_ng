<?php
include "_autoload.php";

$vta_orden_venta_id = Gral::getVars(Gral::VARS_GET, 'vta_orden_venta_id', 0);

$vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
$vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();

include "bloque_vta_orden_venta_listado_uno.php";
