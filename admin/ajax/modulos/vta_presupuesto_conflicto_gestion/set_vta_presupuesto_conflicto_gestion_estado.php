<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_presupuesto_conflicto = VtaPresupuestoConflicto::getOxId($id);
if($vta_presupuesto_conflicto->getEstado() == 1){
	$vta_presupuesto_conflicto->setEstado(0);
}else{
	$vta_presupuesto_conflicto->setEstado(1);
}
$vta_presupuesto_conflicto->cambiarEstado();
?>

