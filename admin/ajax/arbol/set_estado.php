<?php
include "_autoload.php";

$arbol_clase = Gral::getVars(1, 'arbol_clase');
$arbol_id = Gral::getVars(1, 'arbol_id');

$item_clase = Gral::getVars(1, 'item_clase');
$item_id = Gral::getVars(1, 'item_id');
$padre_id = Gral::getVars(1, 'padre_id');

// se instancia objeto item de quien cambia de padre
$item = new $item_clase();
$item->setId($item_id);
if($item->getEstado() == 0){
	$item->setEstado(1);
}else{
	$item->setEstado(0);
}
$item->save();

?>