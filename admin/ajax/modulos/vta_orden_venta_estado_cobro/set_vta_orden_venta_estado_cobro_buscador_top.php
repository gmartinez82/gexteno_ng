<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaOrdenVentaEstadoCobro::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaOrdenVentaEstadoCobro::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_orden_venta_estado_cobro.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_orden_venta_estado_cobro.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_estado_cobro.inicial', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_estado_cobro.actual', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_estado_cobro.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_estado_cobro.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_estado_cobro.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_tipo_estado_cobro.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_tipo_estado_cobro.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_tipo_estado_cobro.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.id', 'vta_orden_venta_estado_cobro.vta_orden_venta_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_orden_venta_tipo_estado_cobro', 'vta_orden_venta_tipo_estado_cobro.id', 'vta_orden_venta_estado_cobro.vta_orden_venta_tipo_estado_cobro_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_orden_venta_estado_cobro');
$criterio->setCriterios();

