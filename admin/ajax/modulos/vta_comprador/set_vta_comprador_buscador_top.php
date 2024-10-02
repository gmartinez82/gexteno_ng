<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaComprador::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaComprador::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_comprador.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_comprador.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.telefono', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.celular', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.domicilio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.porcentaje_comision', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_comprador.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_comprador.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_comprador.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_tipo_comprador.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_tipo_comprador', 'vta_tipo_comprador.id', 'vta_comprador.vta_tipo_comprador_id', 'LEFT JOIN');
$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'vta_comprador.geo_localidad_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_comprador');
$criterio->setCriterios();

