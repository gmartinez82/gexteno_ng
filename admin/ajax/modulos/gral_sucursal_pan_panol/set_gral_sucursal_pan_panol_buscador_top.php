<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(GralSucursalPanPanol::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
GralSucursalPanPanol::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('gral_sucursal_pan_panol.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gral_sucursal_pan_panol.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_pan_panol.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_pan_panol.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_pan_panol.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_panol.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_panol.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pan_panol.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'gral_sucursal_pan_panol.gral_sucursal_id', 'LEFT JOIN');
$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'gral_sucursal_pan_panol.pan_panol_id', 'LEFT JOIN');
    
$criterio->addTabla('gral_sucursal_pan_panol');
$criterio->setCriterios();

