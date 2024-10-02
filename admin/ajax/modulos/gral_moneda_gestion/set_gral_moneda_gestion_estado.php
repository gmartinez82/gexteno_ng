<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$gral_moneda = GralMoneda::getOxId($id);
if($gral_moneda->getEstado() == 1){
	$gral_moneda->setEstado(0);
}else{
	$gral_moneda->setEstado(1);
}
$gral_moneda->cambiarEstado();
?>

