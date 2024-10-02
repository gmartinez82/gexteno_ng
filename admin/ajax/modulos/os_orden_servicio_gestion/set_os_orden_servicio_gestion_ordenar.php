<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(OsOrdenServicio::SES_CRITERIOS);
$criterio->addTabla('os_orden_servicio');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

