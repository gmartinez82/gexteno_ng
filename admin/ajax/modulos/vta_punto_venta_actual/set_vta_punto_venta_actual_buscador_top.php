<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaPuntoVentaActual::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
VtaPuntoVentaActual::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('vta_punto_venta_actual.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_punto_venta_actual.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_punto_venta_actual.serie', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_punto_venta_actual.numero_actual', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_punto_venta_actual.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_punto_venta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_punto_venta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_punto_venta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_punto_venta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_punto_venta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_punto_venta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.id', 'vta_punto_venta_actual.vta_punto_venta_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_tipo_punto_venta', 'vta_tipo_punto_venta.id', 'vta_punto_venta_actual.vta_tipo_punto_venta_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_punto_venta_actual');
$criterio->setCriterios();

