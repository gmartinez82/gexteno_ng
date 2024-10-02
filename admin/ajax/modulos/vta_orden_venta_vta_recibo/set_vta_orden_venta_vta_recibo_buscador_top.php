<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaOrdenVentaVtaRecibo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaOrdenVentaVtaRecibo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_orden_venta_vta_recibo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_orden_venta_vta_recibo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_vta_recibo.importe_afectado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_vta_recibo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_vta_recibo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta_vta_recibo.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_recibo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.id', 'vta_orden_venta_vta_recibo.vta_orden_venta_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_recibo', 'vta_recibo.id', 'vta_orden_venta_vta_recibo.vta_recibo_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_orden_venta_vta_recibo');
$criterio->setCriterios();

