<?php
include_once '_autoload.php';

$c = Gral::getVars(1, 'c');
$t = Gral::getVars(1, 't');
$criterio = new Criterio(VtaPresupuestoConflicto::SES_CRITERIOS);
$criterio->addTabla('vta_presupuesto_conflicto');
$criterio->addOrden($c, $t);
$criterio->setOrden();
?>

