<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$pde_oc_agrupacion = PdeOcAgrupacion::getOxId($id);
if($pde_oc_agrupacion->getEstado() == 1){
	$pde_oc_agrupacion->setEstado(0);
}else{
	$pde_oc_agrupacion->setEstado(1);
}
$pde_oc_agrupacion->save();
?>

