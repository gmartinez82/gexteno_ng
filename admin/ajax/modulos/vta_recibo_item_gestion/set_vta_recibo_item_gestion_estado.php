<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_recibo_item = VtaReciboItem::getOxId($id);
if($vta_recibo_item->getEstado() == 1){
	$vta_recibo_item->setEstado(0);
}else{
	$vta_recibo_item->setEstado(1);
}
$vta_recibo_item->cambiarEstado();
?>

