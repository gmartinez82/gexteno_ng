<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PerMovPlanificacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('per_mov_planificacion.id', Gral::getVars(1, 'buscador_per_mov_planificacion_id'), Gral::getVars(1, 'buscador_per_mov_planificacion_id_comparador'));
	$criterio->add('per_mov_planificacion.descripcion', Gral::getVars(1, 'buscador_per_mov_planificacion_descripcion'), Gral::getVars(1, 'buscador_per_mov_planificacion_descripcion_comparador'));
	$criterio->add('per_mov_planificacion.per_persona_id', Gral::getVars(1, 'buscador_per_mov_planificacion_per_persona_id'), Gral::getVars(1, 'buscador_per_mov_planificacion_per_persona_id_comparador'));
	$criterio->add('per_mov_planificacion.gral_novedad_id', Gral::getVars(1, 'buscador_per_mov_planificacion_gral_novedad_id'), Gral::getVars(1, 'buscador_per_mov_planificacion_gral_novedad_id_comparador'));
	$criterio->add('per_mov_planificacion.pln_jornada_id', Gral::getVars(1, 'buscador_per_mov_planificacion_pln_jornada_id'), Gral::getVars(1, 'buscador_per_mov_planificacion_pln_jornada_id_comparador'));
	$criterio->add('per_mov_planificacion.pln_turno_novedad_id', Gral::getVars(1, 'buscador_per_mov_planificacion_pln_turno_novedad_id'), Gral::getVars(1, 'buscador_per_mov_planificacion_pln_turno_novedad_id_comparador'));
	$criterio->add('per_mov_planificacion.gral_novedad_motivo_id', Gral::getVars(1, 'buscador_per_mov_planificacion_gral_novedad_motivo_id'), Gral::getVars(1, 'buscador_per_mov_planificacion_gral_novedad_motivo_id_comparador'));
	$criterio->add('per_mov_planificacion.gral_novedad_motivo_extendido_id', Gral::getVars(1, 'buscador_per_mov_planificacion_gral_novedad_motivo_extendido_id'), Gral::getVars(1, 'buscador_per_mov_planificacion_gral_novedad_motivo_extendido_id_comparador'));
	$criterio->add('per_mov_planificacion.fecha', Gral::getFechaToDB(Gral::getVars(1, 'buscador_per_mov_planificacion_fecha')), Gral::getVars(1, 'buscador_per_mov_planificacion_fecha_comparador'));
	$criterio->add('per_mov_planificacion.horas', Gral::getVars(1, 'buscador_per_mov_planificacion_horas'), Gral::getVars(1, 'buscador_per_mov_planificacion_horas_comparador'));
	$criterio->add('per_mov_planificacion.inicial', Gral::getVars(1, 'buscador_per_mov_planificacion_inicial'), Gral::getVars(1, 'buscador_per_mov_planificacion_inicial_comparador'));
	$criterio->add('per_mov_planificacion.actual', Gral::getVars(1, 'buscador_per_mov_planificacion_actual'), Gral::getVars(1, 'buscador_per_mov_planificacion_actual_comparador'));
	$criterio->add('per_mov_planificacion.jornada_editada', Gral::getVars(1, 'buscador_per_mov_planificacion_jornada_editada'), Gral::getVars(1, 'buscador_per_mov_planificacion_jornada_editada_comparador'));
	$criterio->add('per_mov_planificacion.gral_dia_id', Gral::getVars(1, 'buscador_per_mov_planificacion_gral_dia_id'), Gral::getVars(1, 'buscador_per_mov_planificacion_gral_dia_id_comparador'));
	$criterio->add('per_mov_planificacion.codigo', Gral::getVars(1, 'buscador_per_mov_planificacion_codigo'), Gral::getVars(1, 'buscador_per_mov_planificacion_codigo_comparador'));
	$criterio->add('per_mov_planificacion.observacion', Gral::getVars(1, 'buscador_per_mov_planificacion_observacion'), Gral::getVars(1, 'buscador_per_mov_planificacion_observacion_comparador'));
	$criterio->add('per_mov_planificacion.confirmado', Gral::getVars(1, 'buscador_per_mov_planificacion_confirmado'), Gral::getVars(1, 'buscador_per_mov_planificacion_confirmado_comparador'));
	$criterio->add('per_mov_planificacion.confirmado_observacion', Gral::getVars(1, 'buscador_per_mov_planificacion_confirmado_observacion'), Gral::getVars(1, 'buscador_per_mov_planificacion_confirmado_observacion_comparador'));
	$criterio->add('per_mov_planificacion.estado', Gral::getVars(1, 'buscador_per_mov_planificacion_estado'), Gral::getVars(1, 'buscador_per_mov_planificacion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('per_mov_planificacion_tramo', 'per_mov_planificacion_tramo.per_mov_planificacion_id', 'per_mov_planificacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pln_jornada_tramo', 'pln_jornada_tramo.id', 'per_mov_planificacion_tramo.pln_jornada_tramo_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('per_mov_planificacion');
		$criterio->setCriterios();		
}
?>

