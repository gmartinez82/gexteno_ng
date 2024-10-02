<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuParamMoneda::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuParamMoneda::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_param_moneda.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_param_moneda.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_param_moneda.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_param_moneda.codigo_eku', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_param_moneda.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_param_moneda.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('eku_param_moneda');
$criterio->setCriterios();

