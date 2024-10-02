<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$pde_factura = PdeFactura::getOxId($id);
if($pde_factura->getEstado() == 1){
	$pde_factura->setEstado(0);
}else{
	$pde_factura->setEstado(1);
}
$pde_factura->cambiarEstado();
?>

