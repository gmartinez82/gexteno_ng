<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(GenMenuItem::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
GenMenuItem::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('gen_menu_item.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gen_menu_item.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_menu_item.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_menu_item.alternativo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_menu_item.link', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_menu_item.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_menu_item.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_arbol.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_arbol.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gen_arbol.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gen_arbol', 'gen_arbol.id', 'gen_menu_item.gen_arbol_id', 'LEFT JOIN');
    
$criterio->addTabla('gen_menu_item');
$criterio->setCriterios();

