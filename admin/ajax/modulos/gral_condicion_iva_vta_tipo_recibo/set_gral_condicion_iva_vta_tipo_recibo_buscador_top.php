<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(GralCondicionIvaVtaTipoRecibo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
GralCondicionIvaVtaTipoRecibo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('gral_condicion_iva_vta_tipo_recibo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gral_condicion_iva_vta_tipo_recibo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_condicion_iva_vta_tipo_recibo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_condicion_iva_vta_tipo_recibo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_condicion_iva_vta_tipo_recibo.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_condicion_iva.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_condicion_iva.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_condicion_iva.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_recibo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_recibo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_recibo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'gral_condicion_iva_vta_tipo_recibo.gral_condicion_iva_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_tipo_recibo', 'vta_tipo_recibo.id', 'gral_condicion_iva_vta_tipo_recibo.vta_tipo_recibo_id', 'LEFT JOIN');
    
$criterio->addTabla('gral_condicion_iva_vta_tipo_recibo');
$criterio->setCriterios();

