<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_comision = VtaComision::getOxId($id);
if($vta_comision->getEstado() == 1){
	$vta_comision->setEstado(0);
}else{
	$vta_comision->setEstado(1);
}
$vta_comision->cambiarEstado();
?>

