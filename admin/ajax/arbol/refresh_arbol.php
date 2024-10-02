<?php
include "_autoload.php";

$arbol_clase = Gral::getVars(1, 'arbol_clase');
$arbol_id = Gral::getVars(1, 'arbol_id');

$arbol = new $arbol_clase();
$arbol->setId($arbol_id);

eval($arbol->getPhpClase()."::listarArbol('".$arbol->getCodigo()."', 'GESTION');");
?>