<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_orden_venta = VtaOrdenVenta::getOxId($id);
if($vta_orden_venta->getEstado() == 1){
	$vta_orden_venta->setEstado(0);
}else{
	$vta_orden_venta->setEstado(1);
}
$vta_orden_venta->cambiarEstado();
?>

