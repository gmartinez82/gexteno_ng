<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(VtaFactura::SES_CRITERIOS);
$criterio->addTabla('vta_factura');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

