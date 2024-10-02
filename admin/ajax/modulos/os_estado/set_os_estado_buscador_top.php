<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(OsEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
OsEstado::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('os_estado.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('os_estado.fecha', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_estado.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('os_orden_servicio', 'os_orden_servicio.id', 'os_estado.os_orden_servicio_id', 'LEFT JOIN');
$criterio->addRealJoin('os_tipo_estado', 'os_tipo_estado.id', 'os_estado.os_tipo_estado_id', 'LEFT JOIN');
    
$criterio->addTabla('os_estado');
$criterio->setCriterios();

