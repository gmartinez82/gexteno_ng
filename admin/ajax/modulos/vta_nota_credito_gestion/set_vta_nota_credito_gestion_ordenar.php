<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(VtaNotaCredito::SES_CRITERIOS);
$criterio->addTabla('vta_nota_credito');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

