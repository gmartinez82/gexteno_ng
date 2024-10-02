<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(PdeOrdenPago::SES_CRITERIOS);
$criterio->addTabla('pde_orden_pago');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

