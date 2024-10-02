<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuParamActividad::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuParamActividad::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_param_actividad.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_param_actividad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_param_actividad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_param_actividad.codigo_eku', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_param_actividad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_param_actividad.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('eku_param_actividad');
$criterio->setCriterios();

