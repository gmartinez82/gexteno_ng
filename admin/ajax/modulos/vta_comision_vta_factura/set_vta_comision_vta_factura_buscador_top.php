<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaComisionVtaFactura::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaComisionVtaFactura::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_comision_vta_factura.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_comision_vta_factura.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_vta_factura.base_comisionable', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_vta_factura.importe_afectado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_vta_factura.porcentaje_comision', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_vta_factura.importe_comision', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_vta_factura.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_vta_factura.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision_vta_factura.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comision.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_comision', 'vta_comision.id', 'vta_comision_vta_factura.vta_comision_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'vta_comision_vta_factura.vta_factura_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_comision_vta_factura');
$criterio->setCriterios();

