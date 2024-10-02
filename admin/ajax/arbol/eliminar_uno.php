<?php
include "_autoload.php";

$arbol_clase = Gral::getVars(1, 'arbol_clase');
$arbol_id = Gral::getVars(1, 'arbol_id');

$item_clase = Gral::getVars(1, 'item_clase');
$item_id = Gral::getVars(1, 'item_id');

$arbol = new $arbol_clase();
$arbol->setId($arbol_id);

$item = new $item_clase();
$item->setId($item_id);

$hijos = array();
$item::getArbolColeccionAbsolutaHijosDependientes($hijos, $item->getId());
//Gral::prr($hijos);
foreach($hijos as $hijo){
	$hijo->deleteAll();
}
$item->deleteAll();

?>