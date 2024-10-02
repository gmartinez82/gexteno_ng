<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(InsStockResumen::SES_CRITERIOS);
$criterio->addTabla('ins_stock_resumen');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

