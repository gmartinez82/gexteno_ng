<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaOrdenVentaEstadoRemision::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaOrdenVentaEstadoRemision::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_orden_venta_estado_remision.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_orden_venta_estado_remision.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_estado_remision.inicial', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_estado_remision.actual', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_estado_remision.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_estado_remision.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_estado_remision.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_tipo_estado_remision.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_tipo_estado_remision.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_tipo_estado_remision.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.id', 'vta_orden_venta_estado_remision.vta_orden_venta_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_orden_venta_tipo_estado_remision', 'vta_orden_venta_tipo_estado_remision.id', 'vta_orden_venta_estado_remision.vta_orden_venta_tipo_estado_remision_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_orden_venta_estado_remision');
$criterio->setCriterios();

