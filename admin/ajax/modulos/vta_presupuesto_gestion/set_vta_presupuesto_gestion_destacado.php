<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_presupuesto = VtaPresupuesto::getOxId($id);
if($vta_presupuesto->getDestacado() == 1){
	$vta_presupuesto->setDestacado(0);
}else{
	$vta_presupuesto->setDestacado(1);
}
$vta_presupuesto->save();
?>

