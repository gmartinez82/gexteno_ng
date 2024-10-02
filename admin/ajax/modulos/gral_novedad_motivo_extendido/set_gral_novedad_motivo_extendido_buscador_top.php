<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(GralNovedadMotivoExtendido::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
GralNovedadMotivoExtendido::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('gral_novedad_motivo_extendido.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gral_novedad_motivo_extendido.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad_motivo_extendido.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad_motivo_extendido.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad_motivo_extendido.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad_motivo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad_motivo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad_motivo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gral_novedad_motivo', 'gral_novedad_motivo.id', 'gral_novedad_motivo_extendido.gral_novedad_motivo_id', 'LEFT JOIN');
    
$criterio->addTabla('gral_novedad_motivo_extendido');
$criterio->setCriterios();

