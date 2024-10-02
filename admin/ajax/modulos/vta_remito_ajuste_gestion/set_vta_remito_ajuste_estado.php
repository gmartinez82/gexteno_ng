<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_remito_ajuste = VtaRemitoAjuste::getOxId($id);
if($vta_remito_ajuste->getEstado() == 1){
	$vta_remito_ajuste->setEstado(0);
}else{
	$vta_remito_ajuste->setEstado(1);
}
$vta_remito_ajuste->cambiarEstado();
?>

