<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(GralNovedad::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
GralNovedad::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('gral_novedad.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gral_novedad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad.descripcion_corta', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad.laboral', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad.planificable', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad.requiere_movimientos', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad.permite_confirmacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad.horas', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad.codigo_color', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('gral_novedad');
$criterio->setCriterios();

