<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(WsFeOpeSolicitudOpcional::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
WsFeOpeSolicitudOpcional::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('ws_fe_ope_solicitud_opcional.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('ws_fe_ope_solicitud_opcional.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_ope_solicitud_opcional.ws_fe_afip_codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_ope_solicitud_opcional.ws_fe_afip_valor', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_ope_solicitud_opcional.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_ope_solicitud_opcional.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_ope_solicitud.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_ope_solicitud.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('ws_fe_ope_solicitud', 'ws_fe_ope_solicitud.id', 'ws_fe_ope_solicitud_opcional.ws_fe_ope_solicitud_id', 'LEFT JOIN');
    
$criterio->addTabla('ws_fe_ope_solicitud_opcional');
$criterio->setCriterios();

