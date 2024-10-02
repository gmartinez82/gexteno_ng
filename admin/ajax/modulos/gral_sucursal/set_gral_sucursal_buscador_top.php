<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');

$buscador_top_gral_sucursal_gral_sucursal_tipo_id = Gral::getVars(Gral::VARS_POST, 'buscador_top_gral_sucursal_gral_sucursal_tipo_id', 0);


$criterio = new Criterio(GralSucursal::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
GralSucursal::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


    if ($buscador_top_gral_sucursal_gral_sucursal_tipo_id != 0) {
        $criterio->add('gral_sucursal.gral_sucursal_tipo_id', $buscador_top_gral_sucursal_gral_sucursal_tipo_id, Criterio::IGUAL);
    }
$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('gral_sucursal.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gral_sucursal.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.domicilio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.telefono', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.codigo_postal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.latitud', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.longitud', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.color', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.numero', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_tipo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_tipo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_sucursal_tipo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'gral_sucursal.gral_empresa_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_sucursal_tipo', 'gral_sucursal_tipo.id', 'gral_sucursal.gral_sucursal_tipo_id', 'LEFT JOIN');
$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'gral_sucursal.geo_localidad_id', 'LEFT JOIN');
    
$criterio->addTabla('gral_sucursal');
$criterio->setCriterios();

