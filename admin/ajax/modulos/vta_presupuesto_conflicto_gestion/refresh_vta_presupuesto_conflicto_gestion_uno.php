<?php
include_once '_autoload.php';

$id = Gral::getVars(2, 'id');
$vta_presupuesto_conflicto = VtaPresupuestoConflicto::getOxId($id);

$estado = ($vta_presupuesto_conflicto->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'vta_presupuesto_conflicto_gestion_uno.php';
?>

