<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaVendedorValoracionTipoItemVtaVendedor::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
VtaVendedorValoracionTipoItemVtaVendedor::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('vta_vendedor_valoracion_tipo_item_vta_vendedor.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_vendedor_valoracion_tipo_item_vta_vendedor.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion_tipo_item_vta_vendedor.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion_tipo_item_vta_vendedor.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion_tipo_item_vta_vendedor.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion_tipo_item.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion_tipo_item.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor_valoracion_tipo_item.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_vendedor.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_vendedor_valoracion_tipo_item', 'vta_vendedor_valoracion_tipo_item.id', 'vta_vendedor_valoracion_tipo_item_vta_vendedor.vta_vendedor_valoracion_tipo_item_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_vendedor_valoracion_tipo_item_vta_vendedor.vta_vendedor_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_vendedor_valoracion_tipo_item_vta_vendedor');
$criterio->setCriterios();

