<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_geo_provincia_geo_pais_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_geo_provincia_geo_pais_id', 0);


$criterio = new Criterio(GeoProvincia::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
GeoProvincia::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_geo_provincia_geo_pais_id != 0) {
        $criterio->add('geo_provincia.geo_pais_id', $buscador_top_geo_provincia_geo_pais_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('geo_provincia.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('geo_provincia.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_provincia.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_provincia.codigo_eku', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_provincia.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_provincia.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_pais.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_pais.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_pais.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('geo_pais', 'geo_pais.id', 'geo_provincia.geo_pais_id', 'LEFT JOIN');
    
$criterio->addTabla('geo_provincia');
$criterio->setCriterios();

