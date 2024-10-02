<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$cntb_periodo = CntbPeriodo::getOxId($id);
if($cntb_periodo->getEstado() == 1){
	$cntb_periodo->setEstado(0);
}else{
	$cntb_periodo->setEstado(1);
}
$cntb_periodo->cambiarEstado();
?>

