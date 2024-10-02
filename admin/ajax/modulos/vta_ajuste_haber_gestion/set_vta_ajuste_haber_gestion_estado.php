<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_ajuste_haber = VtaAjusteHaber::getOxId($id);
if($vta_ajuste_haber->getEstado() == 1){
	$vta_ajuste_haber->setEstado(0);
}else{
	$vta_ajuste_haber->setEstado(1);
}
$vta_ajuste_haber->cambiarEstado();
?>

