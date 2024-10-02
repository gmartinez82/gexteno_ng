<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(FndChqCheque::SES_CRITERIOS);
$criterio->addTabla('fnd_chq_cheque');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

