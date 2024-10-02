<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(VtaReciboItem::SES_CRITERIOS);
$criterio->addTabla('vta_recibo_item');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

