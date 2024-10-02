<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$pde_nota_credito = PdeNotaCredito::getOxId($id);
if($pde_nota_credito->getEstado() == 1){
	$pde_nota_credito->setEstado(0);
}else{
	$pde_nota_credito->setEstado(1);
}
$pde_nota_credito->cambiarEstado();
?>

