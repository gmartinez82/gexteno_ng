<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(PdeNotaCredito::SES_CRITERIOS);
$criterio->addTabla('pde_nota_credito');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

