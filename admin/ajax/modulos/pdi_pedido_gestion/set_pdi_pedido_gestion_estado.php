<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$pdi_pedido = PdiPedido::getOxId($id);
if($pdi_pedido->getEstado() == 1){
	$pdi_pedido->setEstado(0);
}else{
	$pdi_pedido->setEstado(1);
}
$pdi_pedido->save();
?>

