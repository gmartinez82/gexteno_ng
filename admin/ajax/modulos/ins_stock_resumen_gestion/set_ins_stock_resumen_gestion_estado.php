<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$ins_stock_resumen = InsStockResumen::getOxId($id);
if($ins_stock_resumen->getEstado() == 1){
	$ins_stock_resumen->setEstado(0);
}else{
	$ins_stock_resumen->setEstado(1);
}
$ins_stock_resumen->cambiarEstado();
?>

