<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$pde_recibo = PdeRecibo::getOxId($id);
if($pde_recibo->getEstado() == 1){
	$pde_recibo->setEstado(0);
}else{
	$pde_recibo->setEstado(1);
}
$pde_recibo->cambiarEstado();
?>

