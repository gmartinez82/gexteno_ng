<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaTipoNotaCreditoWsFeParamTipoComprobante::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaTipoNotaCreditoWsFeParamTipoComprobante::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_nota_credito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_nota_credito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_nota_credito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_param_tipo_comprobante.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_param_tipo_comprobante.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ws_fe_param_tipo_comprobante.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_tipo_nota_credito', 'vta_tipo_nota_credito.id', 'vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.vta_tipo_nota_credito_id', 'LEFT JOIN');
$criterio->addRealJoin('ws_fe_param_tipo_comprobante', 'ws_fe_param_tipo_comprobante.id', 'vta_tipo_nota_credito_ws_fe_param_tipo_comprobante.ws_fe_param_tipo_comprobante_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_tipo_nota_credito_ws_fe_param_tipo_comprobante');
$criterio->setCriterios();

