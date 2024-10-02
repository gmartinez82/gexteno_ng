<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(VtaComision::SES_CRITERIOS);
$criterio->addTabla('vta_comision');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

