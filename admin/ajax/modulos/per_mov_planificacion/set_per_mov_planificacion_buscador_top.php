<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PerMovPlanificacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
PerMovPlanificacion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('per_mov_planificacion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('per_mov_planificacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_planificacion.fecha', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_planificacion.horas', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_planificacion.inicial', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_planificacion.actual', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_planificacion.jornada_editada', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_planificacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_planificacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_planificacion.confirmado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_planificacion.confirmado_observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_mov_planificacion.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.apellido', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.nombre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('per_persona.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_jornada.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_jornada.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_jornada.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_turno_novedad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_turno_novedad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pln_turno_novedad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad_motivo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad_motivo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad_motivo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad_motivo_extendido.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad_motivo_extendido.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_novedad_motivo_extendido.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_dia.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_dia.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_dia.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('per_persona', 'per_persona.id', 'per_mov_planificacion.per_persona_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_novedad', 'gral_novedad.id', 'per_mov_planificacion.gral_novedad_id', 'LEFT JOIN');
$criterio->addRealJoin('pln_jornada', 'pln_jornada.id', 'per_mov_planificacion.pln_jornada_id', 'LEFT JOIN');
$criterio->addRealJoin('pln_turno_novedad', 'pln_turno_novedad.id', 'per_mov_planificacion.pln_turno_novedad_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_novedad_motivo', 'gral_novedad_motivo.id', 'per_mov_planificacion.gral_novedad_motivo_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_novedad_motivo_extendido', 'gral_novedad_motivo_extendido.id', 'per_mov_planificacion.gral_novedad_motivo_extendido_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_dia', 'gral_dia.id', 'per_mov_planificacion.gral_dia_id', 'LEFT JOIN');
    
$criterio->addTabla('per_mov_planificacion');
$criterio->setCriterios();

