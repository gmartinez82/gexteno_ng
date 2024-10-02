<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$vta_nota_debito = VtaNotaDebito::getOxId($id);
if($vta_nota_debito->getEstado() == 1){
	$vta_nota_debito->setEstado(0);
}else{
	$vta_nota_debito->setEstado(1);
}
$vta_nota_debito->cambiarEstado();
?>

