<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaFacturaVtaOrdenVenta::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaFacturaVtaOrdenVenta::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_factura_vta_orden_venta.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_factura_vta_orden_venta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura_vta_orden_venta.importe_unitario', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura_vta_orden_venta.cantidad', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura_vta_orden_venta.importe_costo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura_vta_orden_venta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura_vta_orden_venta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura_vta_orden_venta.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_orden_venta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_unidad_medida.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_unidad_medida.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_unidad_medida.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_iva.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_iva.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_iva.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_costo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_costo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_costo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'vta_factura_vta_orden_venta.vta_factura_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.id', 'vta_factura_vta_orden_venta.vta_orden_venta_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_factura_vta_orden_venta.ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_unidad_medida', 'ins_unidad_medida.id', 'vta_factura_vta_orden_venta.ins_unidad_medida_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_factura_vta_orden_venta.gral_tipo_iva_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.id', 'vta_factura_vta_orden_venta.ins_insumo_costo_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_factura_vta_orden_venta');
$criterio->setCriterios();

