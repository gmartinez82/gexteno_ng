<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_comisionista = VtaComisionista::getOxId($id);
if($vta_comisionista->getEstado() == 1){
	$vta_comisionista->setEstado(0);
}else{
	$vta_comisionista->setEstado(1);
}
$vta_comisionista->cambiarEstado();
?>

