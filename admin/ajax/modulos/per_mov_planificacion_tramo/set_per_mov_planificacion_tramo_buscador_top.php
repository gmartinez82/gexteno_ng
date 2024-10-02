<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PerMovPlanificacionTramo::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
PerMovPlanificacionTramo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('per_mov_planificacion_tramo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('per_mov_planificacion_tramo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_planificacion_tramo.tramo_desde', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_planificacion_tramo.tramo_hasta', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_planificacion_tramo.horas_tramo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_planificacion_tramo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_planificacion_tramo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_planificacion_tramo.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_planificacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_planificacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_planificacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_jornada_tramo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_jornada_tramo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_jornada_tramo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('per_mov_planificacion', 'per_mov_planificacion.id', 'per_mov_planificacion_tramo.per_mov_planificacion_id', 'LEFT JOIN');
$criterio->addRealJoin('pln_jornada_tramo', 'pln_jornada_tramo.id', 'per_mov_planificacion_tramo.pln_jornada_tramo_id', 'LEFT JOIN');
    
$criterio->addTabla('per_mov_planificacion_tramo');
$criterio->setCriterios();

