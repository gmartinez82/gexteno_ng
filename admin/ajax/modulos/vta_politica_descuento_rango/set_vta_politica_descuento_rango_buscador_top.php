<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaPoliticaDescuentoRango::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaPoliticaDescuentoRango::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_politica_descuento_rango.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_politica_descuento_rango.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_politica_descuento_rango.cantidad_desde', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_politica_descuento_rango.cantidad_hasta', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_politica_descuento_rango.porcentaje_descuento', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_politica_descuento_rango.porcentaje_negociacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_politica_descuento_rango.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_politica_descuento_rango.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_politica_descuento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_politica_descuento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_politica_descuento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_politica_descuento', 'vta_politica_descuento.id', 'vta_politica_descuento_rango.vta_politica_descuento_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_politica_descuento_rango');
$criterio->setCriterios();

