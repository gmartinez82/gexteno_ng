<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_nota_credito = VtaNotaCredito::getOxId($id);
if($vta_nota_credito->getEstado() == 1){
	$vta_nota_credito->setEstado(0);
}else{
	$vta_nota_credito->setEstado(1);
}
$vta_nota_credito->cambiarEstado();
?>

