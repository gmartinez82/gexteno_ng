<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(GeoZona::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
GeoZona::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('geo_zona.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('geo_zona.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_zona.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_zona.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_zona.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('geo_zona');
$criterio->setCriterios();

