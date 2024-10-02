<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_remito = VtaRemito::getOxId($id);
if($vta_remito->getEstado() == 1){
	$vta_remito->setEstado(0);
}else{
	$vta_remito->setEstado(1);
}
$vta_remito->cambiarEstado();
?>

