<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(GralEmpresa::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
GralEmpresa::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('gral_empresa.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('gral_empresa.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.cuit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.razon_social', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.codigo_postal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.domicilio_legal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.telefono', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.fecha_inicio_actividad', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.afip_crt', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.afip_key', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_personeria.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_personeria.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_personeria.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_condicion_iva.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_condicion_iva.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_condicion_iva.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'gral_empresa.gral_tipo_personeria_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'gral_empresa.gral_condicion_iva_id', 'LEFT JOIN');
$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'gral_empresa.geo_localidad_id', 'LEFT JOIN');
    
$criterio->addTabla('gral_empresa');
$criterio->setCriterios();

