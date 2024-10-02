<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaPuntoVentaWsFeParamPuntoVenta::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaPuntoVentaWsFeParamPuntoVenta::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_punto_venta_ws_fe_param_punto_venta.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_punto_venta_ws_fe_param_punto_venta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_punto_venta_ws_fe_param_punto_venta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_punto_venta_ws_fe_param_punto_venta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_punto_venta_ws_fe_param_punto_venta.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_punto_venta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_punto_venta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_punto_venta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_param_punto_venta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_param_punto_venta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_param_punto_venta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.id', 'vta_punto_venta_ws_fe_param_punto_venta.vta_punto_venta_id', 'LEFT JOIN');
$criterio->addRealJoin('ws_fe_param_punto_venta', 'ws_fe_param_punto_venta.id', 'vta_punto_venta_ws_fe_param_punto_venta.ws_fe_param_punto_venta_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_punto_venta_ws_fe_param_punto_venta');
$criterio->setCriterios();

