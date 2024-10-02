<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(PdeOc::SES_CRITERIOS);
$criterio->addTabla('pde_oc');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

