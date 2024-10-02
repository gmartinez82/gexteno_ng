<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(CntbDiarioAsientoVtaFactura::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
CntbDiarioAsientoVtaFactura::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('cntb_diario_asiento_vta_factura.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('cntb_diario_asiento_vta_factura.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_periodo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_periodo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_periodo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_diario_asiento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_diario_asiento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_diario_asiento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('cntb_periodo', 'cntb_periodo.id', 'cntb_diario_asiento_vta_factura.cntb_periodo_id', 'LEFT JOIN');
$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'cntb_diario_asiento_vta_factura.cntb_diario_asiento_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'cntb_diario_asiento_vta_factura.vta_factura_id', 'LEFT JOIN');
    
$criterio->addTabla('cntb_diario_asiento_vta_factura');
$criterio->setCriterios();

