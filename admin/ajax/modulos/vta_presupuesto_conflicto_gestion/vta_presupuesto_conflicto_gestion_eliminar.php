<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_presupuesto_conflicto = new VtaPresupuestoConflicto();
$vta_presupuesto_conflicto->setId($id, false);
$vta_presupuesto_conflicto->deleteAll();
?>

