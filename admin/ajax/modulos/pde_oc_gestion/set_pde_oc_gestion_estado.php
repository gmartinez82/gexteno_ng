<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$pde_oc = PdeOc::getOxId($id);
if($pde_oc->getEstado() == 1){
	$pde_oc->setEstado(0);
}else{
	$pde_oc->setEstado(1);
}
$pde_oc->save();
?>

