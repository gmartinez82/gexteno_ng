<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(GralTipoDocumentoWsFeParamTipoDocumento::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
GralTipoDocumentoWsFeParamTipoDocumento::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('gral_tipo_documento_ws_fe_param_tipo_documento.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gral_tipo_documento_ws_fe_param_tipo_documento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_documento_ws_fe_param_tipo_documento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_documento_ws_fe_param_tipo_documento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_documento_ws_fe_param_tipo_documento.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_documento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_documento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_documento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_param_tipo_documento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_param_tipo_documento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_param_tipo_documento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'gral_tipo_documento_ws_fe_param_tipo_documento.gral_tipo_documento_id', 'LEFT JOIN');
$criterio->addRealJoin('ws_fe_param_tipo_documento', 'ws_fe_param_tipo_documento.id', 'gral_tipo_documento_ws_fe_param_tipo_documento.ws_fe_param_tipo_documento_id', 'LEFT JOIN');
    
$criterio->addTabla('gral_tipo_documento_ws_fe_param_tipo_documento');
$criterio->setCriterios();

