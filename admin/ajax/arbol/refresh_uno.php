<?php
include "_autoload.php";

$arbol_clase = Gral::getVars(1, 'arbol_clase');
$arbol_id = Gral::getVars(1, 'arbol_id');

$item_clase = Gral::getVars(1, 'item_clase');
$item_id = Gral::getVars(1, 'item_id');

$arbol = new $arbol_clase();
$arbol->setId($arbol_id);
//Gral::prr($arbol);
$file = Gral::getPathAbs().'xml/'.$arbol->getBdTabla().'/'.$arbol->getCodigo().'.xml';

if(file_exists($file)){
	$xml = simplexml_load_file($file);
	$arbol = $xml->xpath('//arbol');
	$items = $xml->xpath('//item[id='.$item_id.']');
	
	foreach($items as $item){
		$item_clase::echoItemGestionDiv($arbol, $item);
	}
}

?>