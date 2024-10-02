<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(OsOrdenServicioArchivo::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
OsOrdenServicioArchivo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('os_orden_servicio_archivo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('os_orden_servicio_archivo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio_archivo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio_archivo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio_archivo.archivo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio_archivo.peso', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio_archivo.tipo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('os_orden_servicio', 'os_orden_servicio.id', 'os_orden_servicio_archivo.os_orden_servicio_id', 'LEFT JOIN');
    
$criterio->addTabla('os_orden_servicio_archivo');
$criterio->setCriterios();

