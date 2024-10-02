<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(OsResolucion::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
OsResolucion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('os_resolucion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('os_resolucion.fecha', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_resolucion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_resolucion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_resolucion.nota_publica', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_resolucion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_resolucion.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_orden_servicio.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_tipo_resolucion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_tipo_resolucion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_tipo_resolucion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('os_orden_servicio', 'os_orden_servicio.id', 'os_resolucion.os_orden_servicio_id', 'LEFT JOIN');
$criterio->addRealJoin('os_tipo_resolucion', 'os_tipo_resolucion.id', 'os_resolucion.os_tipo_resolucion_id', 'LEFT JOIN');
    
$criterio->addTabla('os_resolucion');
$criterio->setCriterios();

