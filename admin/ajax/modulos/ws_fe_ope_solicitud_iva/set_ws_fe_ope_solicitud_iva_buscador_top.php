<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(WsFeOpeSolicitudIva::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
WsFeOpeSolicitudIva::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('ws_fe_ope_solicitud_iva.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ws_fe_ope_solicitud_iva.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_ope_solicitud_iva.ws_fe_afip_codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_ope_solicitud_iva.ws_fe_afip_base_imponible', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_ope_solicitud_iva.ws_fe_afip_importe', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_ope_solicitud_iva.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_ope_solicitud_iva.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_ope_solicitud.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_ope_solicitud.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_param_tipo_iva.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_param_tipo_iva.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_param_tipo_iva.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ws_fe_ope_solicitud', 'ws_fe_ope_solicitud.id', 'ws_fe_ope_solicitud_iva.ws_fe_ope_solicitud_id', 'LEFT JOIN');
$criterio->addRealJoin('ws_fe_param_tipo_iva', 'ws_fe_param_tipo_iva.id', 'ws_fe_ope_solicitud_iva.ws_fe_param_tipo_iva_id', 'LEFT JOIN');
    
$criterio->addTabla('ws_fe_ope_solicitud_iva');
$criterio->setCriterios();

