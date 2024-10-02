<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$pde_nota_debito = PdeNotaDebito::getOxId($id);
if($pde_nota_debito->getEstado() == 1){
	$pde_nota_debito->setEstado(0);
}else{
	$pde_nota_debito->setEstado(1);
}
$pde_nota_debito->cambiarEstado();
?>

