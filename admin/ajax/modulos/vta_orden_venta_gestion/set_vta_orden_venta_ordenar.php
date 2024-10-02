<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(VtaOrdenVenta::SES_CRITERIOS);
$criterio->addTabla('vta_orden_venta');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

