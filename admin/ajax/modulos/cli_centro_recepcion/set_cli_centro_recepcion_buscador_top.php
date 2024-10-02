<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(CliCentroRecepcion::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
CliCentroRecepcion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('cli_centro_recepcion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('cli_centro_recepcion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_centro_recepcion.domicilio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_centro_recepcion.email', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_centro_recepcion.telefono', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_centro_recepcion.responsable', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_centro_recepcion.codigo_postal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_centro_recepcion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_centro_recepcion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_centro_recepcion.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cli_cliente.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('geo_localidad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'cli_centro_recepcion.cli_cliente_id', 'LEFT JOIN');
$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'cli_centro_recepcion.geo_localidad_id', 'LEFT JOIN');
    
$criterio->addTabla('cli_centro_recepcion');
$criterio->setCriterios();

