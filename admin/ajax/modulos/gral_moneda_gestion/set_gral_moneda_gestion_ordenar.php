<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(GralMoneda::SES_CRITERIOS);
$criterio->addTabla('gral_moneda');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

