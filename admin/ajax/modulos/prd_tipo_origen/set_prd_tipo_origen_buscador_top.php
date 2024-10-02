<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PrdTipoOrigen::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
PrdTipoOrigen::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('prd_tipo_origen.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('prd_tipo_origen.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_tipo_origen.descripcion_corta', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_tipo_origen.descripcion_publica', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_tipo_origen.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_tipo_origen.codigo_secundario', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_tipo_origen.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prd_tipo_origen.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('prd_tipo_origen');
$criterio->setCriterios();

