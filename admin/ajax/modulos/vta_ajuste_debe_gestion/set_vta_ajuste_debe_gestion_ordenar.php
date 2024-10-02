<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(VtaAjusteDebe::SES_CRITERIOS);
$criterio->addTabla('vta_ajuste_debe');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

