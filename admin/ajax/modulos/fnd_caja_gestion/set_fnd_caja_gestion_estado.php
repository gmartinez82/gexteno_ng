<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$fnd_caja = FndCaja::getOxId($id);
if($fnd_caja->getEstado() == 1){
	$fnd_caja->setEstado(0);
}else{
	$fnd_caja->setEstado(1);
}
$fnd_caja->cambiarEstado();
?>

