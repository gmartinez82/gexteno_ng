<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaFacturaVtaTributo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaFacturaVtaTributo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_factura_vta_tributo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_factura_vta_tributo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura_vta_tributo.importe_imponible', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura_vta_tributo.importe_tributo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura_vta_tributo.alicuota_porcentual', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura_vta_tributo.alicuota_decimal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura_vta_tributo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura_vta_tributo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura_vta_tributo.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tributo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tributo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tributo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'vta_factura_vta_tributo.vta_factura_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_tributo', 'vta_tributo.id', 'vta_factura_vta_tributo.vta_tributo_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_factura_vta_tributo');
$criterio->setCriterios();

