<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(VtaAjusteHaber::SES_CRITERIOS);
$criterio->addTabla('vta_ajuste_haber');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

