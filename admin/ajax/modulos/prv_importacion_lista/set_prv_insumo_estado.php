<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$prv_insumo = PrvInsumo::getOxId($id);
if($prv_insumo->getEstado() == 1){
	$prv_insumo->setEstado(0);
}else{
	$prv_insumo->setEstado(1);
}
$prv_insumo->cambiarEstado();
?>

