<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(PdiPedido::SES_CRITERIOS);
$criterio->addTabla('pdi_pedido');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

