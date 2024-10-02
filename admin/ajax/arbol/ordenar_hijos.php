<?php
include "_autoload.php";

$arbol_clase = Gral::getVars(1, 'arbol_clase');
$arbol_id = Gral::getVars(1, 'arbol_id');
$item_clase = Gral::getVars(1, 'item_clase');

$items = $_POST['item'];

$orden = 0;
foreach ($items as $i => $item){
	$orden++;
	$o = new $item_clase();
	$o->setId($item);
	$o->setOrden($orden);
	$o->save();
}
?>