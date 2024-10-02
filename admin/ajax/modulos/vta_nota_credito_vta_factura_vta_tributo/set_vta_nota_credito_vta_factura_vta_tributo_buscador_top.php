<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaNotaCreditoVtaFacturaVtaTributo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaNotaCreditoVtaFacturaVtaTributo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_nota_credito_vta_factura_vta_tributo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_nota_credito_vta_factura_vta_tributo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_credito_vta_factura_vta_tributo.importe_imponible', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_credito_vta_factura_vta_tributo.importe_tributo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_credito_vta_factura_vta_tributo.alicuota_porcentual', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_credito_vta_factura_vta_tributo.alicuota_decimal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_credito_vta_factura_vta_tributo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_credito_vta_factura_vta_tributo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_credito_vta_factura_vta_tributo.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_credito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_credito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_nota_credito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura_vta_tributo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura_vta_tributo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_factura_vta_tributo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.id', 'vta_nota_credito_vta_factura_vta_tributo.vta_nota_credito_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_factura_vta_tributo', 'vta_factura_vta_tributo.id', 'vta_nota_credito_vta_factura_vta_tributo.vta_factura_vta_tributo_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_nota_credito_vta_factura_vta_tributo');
$criterio->setCriterios();

