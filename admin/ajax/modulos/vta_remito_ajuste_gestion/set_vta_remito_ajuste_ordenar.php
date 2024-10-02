<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(VtaRemitoAjuste::SES_CRITERIOS);
$criterio->addTabla('vta_remito_ajuste');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

