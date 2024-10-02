<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(PrvInsumo::SES_CRITERIOS);
$criterio->addTabla('prv_insumo');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

