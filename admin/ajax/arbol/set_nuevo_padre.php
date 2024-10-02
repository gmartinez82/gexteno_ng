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


// se instancia objeto item del nuevo padre
$item_padre_nuevo = new $item_clase();
$item_padre_nuevo->setId($padre_id);

// se controla que no sean iguales
if($item_id == $padre_id){
	return;
}

// se controla si el nuevo padre es o no hijo del item que cambia de padre
$arr_padres = array();
$item_clase::getArbolItemPadres($item_padre_nuevo, $arr_padres);
if(!empty($arr_padres)){

	$es_padre_del_nuevo_hijo = false;
	foreach($arr_padres as $o_padre){
		if($o_padre->getId() == $item_id){
			$es_padre_del_nuevo_hijo = true;			
		}
	}
	if($es_padre_del_nuevo_hijo){
		$os_hijos = $item_clase::getArbolItemHijos($item->getId());
		foreach($os_hijos as $o_hijo){
			eval('$o_hijo->set'.$item_clase.'Padre($item->get'.$item_clase.'Padre());');
			$o_hijo->save();
		}
	}
}
eval('$item->set'.$item_clase.'Padre($padre_id);');
$item->save();

?>