<?php
include "_autoload.php";

$arbol_clase = Gral::getVars(1, 'arbol_clase');
$arbol_id = Gral::getVars(1, 'arbol_id');

$item_clase = Gral::getVars(1, 'item_clase');
$item_tabla = Gral::getDBTablaDesdeClase($item_clase);
$item_id = Gral::getVars(1, 'item_id');

$arbol = new $arbol_clase();
$arbol->setId($arbol_id);

$file = Gral::getPathAbs().'xml/'.$arbol->getBdTabla().'/'.$arbol->getCodigo().'.xml';


if(file_exists($file)){
       $xml = simplexml_load_file($file);
       $arbol = $xml->xpath('//arbol');
       $items = $xml->xpath('//item['.$item_tabla.'_padre='.$item_id.']');
       
       echo "<ul arbol_clase='".$arbol[0]->clase."' arbol_id='".$arbol[0]->id."' item_clase='".$arbol[0]->item_clase."'>";
       foreach($items as $item){
               $item_clase::echoItemGestion($arbol, $item);
       }
       echo "</ul>";
}
?>