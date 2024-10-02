<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$ins_insumo = InsInsumo::getOxId($id);
if($ins_insumo->getEstado() == 1){
	$ins_insumo->setEstado(0);
}else{
	$ins_insumo->setEstado(1);
}
$ins_insumo->cambiarEstado();
?>

