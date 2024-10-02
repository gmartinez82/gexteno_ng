<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_ajuste_debe = VtaAjusteDebe::getOxId($id);
if($vta_ajuste_debe->getEstado() == 1){
	$vta_ajuste_debe->setEstado(0);
}else{
	$vta_ajuste_debe->setEstado(1);
}
$vta_ajuste_debe->cambiarEstado();
?>

