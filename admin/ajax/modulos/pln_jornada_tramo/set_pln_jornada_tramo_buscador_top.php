<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PlnJornadaTramo::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
PlnJornadaTramo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('pln_jornada_tramo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pln_jornada_tramo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_jornada_tramo.tramo_desde', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_jornada_tramo.tramo_hasta', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_jornada_tramo.horas_tramo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_jornada_tramo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_jornada_tramo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_jornada_tramo.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_jornada.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_jornada.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_jornada.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pln_jornada', 'pln_jornada.id', 'pln_jornada_tramo.pln_jornada_id', 'LEFT JOIN');
    
$criterio->addTabla('pln_jornada_tramo');
$criterio->setCriterios();

