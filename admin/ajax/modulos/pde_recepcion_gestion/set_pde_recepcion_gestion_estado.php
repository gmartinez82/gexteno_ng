<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$pde_recepcion = PdeRecepcion::getOxId($id);
if($pde_recepcion->getEstado() == 1){
	$pde_recepcion->setEstado(0);
}else{
	$pde_recepcion->setEstado(1);
}
$pde_recepcion->cambiarEstado();
?>

