<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_factura = VtaFactura::getOxId($id);
if($vta_factura->getEstado() == 1){
	$vta_factura->setEstado(0);
}else{
	$vta_factura->setEstado(1);
}
$vta_factura->cambiarEstado();
?>

