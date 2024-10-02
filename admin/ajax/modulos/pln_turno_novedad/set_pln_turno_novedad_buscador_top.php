<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PlnTurnoNovedad::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
PlnTurnoNovedad::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('pln_turno_novedad.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pln_turno_novedad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_turno_novedad.horas', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_turno_novedad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_turno_novedad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_turno_novedad.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_turno.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_turno.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_turno.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_jornada.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_jornada.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_jornada.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pln_turno', 'pln_turno.id', 'pln_turno_novedad.pln_turno_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_novedad', 'gral_novedad.id', 'pln_turno_novedad.gral_novedad_id', 'LEFT JOIN');
$criterio->addRealJoin('pln_jornada', 'pln_jornada.id', 'pln_turno_novedad.pln_jornada_id', 'LEFT JOIN');
    
$criterio->addTabla('pln_turno_novedad');
$criterio->setCriterios();

