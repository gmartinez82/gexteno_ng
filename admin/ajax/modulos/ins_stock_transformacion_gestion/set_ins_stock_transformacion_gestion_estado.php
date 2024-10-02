<?php
include_once '_autoload.php';

$id = Gral::getVars(1, 'id');
$ins_stock_transformacion = InsStockTransformacion::getOxId($id);
if($ins_stock_transformacion->getEstado() == 1){
	$ins_stock_transformacion->setEstado(0);
}else{
	$ins_stock_transformacion->setEstado(1);
}
$ins_stock_transformacion->cambiarEstado();
?>

