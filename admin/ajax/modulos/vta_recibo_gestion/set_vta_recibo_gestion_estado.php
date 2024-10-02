<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_recibo = VtaRecibo::getOxId($id);
if($vta_recibo->getEstado() == 1){
	$vta_recibo->setEstado(0);
}else{
	$vta_recibo->setEstado(1);
}
$vta_recibo->cambiarEstado();
?>

