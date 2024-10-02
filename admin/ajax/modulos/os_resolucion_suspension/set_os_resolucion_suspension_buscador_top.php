<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(OsResolucionSuspension::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
OsResolucionSuspension::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('os_resolucion_suspension.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('os_resolucion_suspension.dias_suspension', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_resolucion_suspension.fecha_inicio', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_resolucion_suspension.fecha_fin', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_resolucion_suspension.fecha_reintegro', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_resolucion_suspension.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_resolucion_suspension.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_resolucion_suspension.nota_publica', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_resolucion_suspension.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_resolucion_suspension.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_resolucion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_resolucion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('os_resolucion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('os_resolucion', 'os_resolucion.id', 'os_resolucion_suspension.os_resolucion_id', 'LEFT JOIN');
    
$criterio->addTabla('os_resolucion_suspension');
$criterio->setCriterios();

