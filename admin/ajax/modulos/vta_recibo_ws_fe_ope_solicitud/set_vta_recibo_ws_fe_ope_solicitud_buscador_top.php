<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaReciboWsFeOpeSolicitud::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaReciboWsFeOpeSolicitud::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_recibo_ws_fe_ope_solicitud.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_recibo_ws_fe_ope_solicitud.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo_ws_fe_ope_solicitud.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo_ws_fe_ope_solicitud.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo_ws_fe_ope_solicitud.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_ope_solicitud.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_ope_solicitud.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_recibo', 'vta_recibo.id', 'vta_recibo_ws_fe_ope_solicitud.vta_recibo_id', 'LEFT JOIN');
$criterio->addRealJoin('ws_fe_ope_solicitud', 'ws_fe_ope_solicitud.id', 'vta_recibo_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_recibo_ws_fe_ope_solicitud');
$criterio->setCriterios();

