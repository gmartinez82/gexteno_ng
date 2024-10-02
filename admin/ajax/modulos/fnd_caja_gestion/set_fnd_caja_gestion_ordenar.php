<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(FndCaja::SES_CRITERIOS);
$criterio->addTabla('fnd_caja');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

