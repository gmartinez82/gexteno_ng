<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuParamDenominacionTarjetaGralFpMedioPago::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuParamDenominacionTarjetaGralFpMedioPago::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_param_denominacion_tarjeta_gral_fp_medio_pago.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_param_denominacion_tarjeta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_param_denominacion_tarjeta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_param_denominacion_tarjeta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_medio_pago.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_medio_pago.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_medio_pago.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_param_denominacion_tarjeta', 'eku_param_denominacion_tarjeta.id', 'eku_param_denominacion_tarjeta_gral_fp_medio_pago.eku_param_denominacion_tarjeta_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_fp_medio_pago', 'gral_fp_medio_pago.id', 'eku_param_denominacion_tarjeta_gral_fp_medio_pago.gral_fp_medio_pago_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_param_denominacion_tarjeta_gral_fp_medio_pago');
$criterio->setCriterios();

