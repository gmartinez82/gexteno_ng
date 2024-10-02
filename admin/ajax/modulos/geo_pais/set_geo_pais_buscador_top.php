<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(GeoPais::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
GeoPais::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('geo_pais.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('geo_pais.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_pais.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_pais.codigo_alpha_2', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_pais.codigo_alpha_3', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_pais.codigo_telefonico', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_pais.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_pais.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_lenguaje.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_lenguaje.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_lenguaje.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gral_lenguaje', 'gral_lenguaje.id', 'geo_pais.gral_lenguaje_id', 'LEFT JOIN');
    
$criterio->addTabla('geo_pais');
$criterio->setCriterios();

