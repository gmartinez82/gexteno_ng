<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(GralFpFormaPago::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
GralFpFormaPago::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('gral_fp_forma_pago.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gral_fp_forma_pago.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_forma_pago.descripcion_corta', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_forma_pago.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_forma_pago.contado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_forma_pago.credito', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_forma_pago.inmediato', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_forma_pago.recibo_automatico', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_forma_pago.para_compra', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_forma_pago.para_venta', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_forma_pago.para_cobro', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_forma_pago.para_pago', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_forma_pago.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_forma_pago.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

    
$criterio->addTabla('gral_fp_forma_pago');
$criterio->setCriterios();

