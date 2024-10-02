<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(VtaNotaDebito::SES_CRITERIOS);
$criterio->addTabla('vta_nota_debito');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

