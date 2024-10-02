<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralNovedad::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_novedad.id', Gral::getVars(1, 'buscador_gral_novedad_id'), Gral::getVars(1, 'buscador_gral_novedad_id_comparador'));
	$criterio->add('gral_novedad.descripcion', Gral::getVars(1, 'buscador_gral_novedad_descripcion'), Gral::getVars(1, 'buscador_gral_novedad_descripcion_comparador'));
	$criterio->add('gral_novedad.descripcion_corta', Gral::getVars(1, 'buscador_gral_novedad_descripcion_corta'), Gral::getVars(1, 'buscador_gral_novedad_descripcion_corta_comparador'));
	$criterio->add('gral_novedad.codigo', Gral::getVars(1, 'buscador_gral_novedad_codigo'), Gral::getVars(1, 'buscador_gral_novedad_codigo_comparador'));
	$criterio->add('gral_novedad.laboral', Gral::getVars(1, 'buscador_gral_novedad_laboral'), Gral::getVars(1, 'buscador_gral_novedad_laboral_comparador'));
	$criterio->add('gral_novedad.planificable', Gral::getVars(1, 'buscador_gral_novedad_planificable'), Gral::getVars(1, 'buscador_gral_novedad_planificable_comparador'));
	$criterio->add('gral_novedad.requiere_movimientos', Gral::getVars(1, 'buscador_gral_novedad_requiere_movimientos'), Gral::getVars(1, 'buscador_gral_novedad_requiere_movimientos_comparador'));
	$criterio->add('gral_novedad.permite_confirmacion', Gral::getVars(1, 'buscador_gral_novedad_permite_confirmacion'), Gral::getVars(1, 'buscador_gral_novedad_permite_confirmacion_comparador'));
	$criterio->add('gral_novedad.horas', Gral::getVars(1, 'buscador_gral_novedad_horas'), Gral::getVars(1, 'buscador_gral_novedad_horas_comparador'));
	$criterio->add('gral_novedad.codigo_color', Gral::getVars(1, 'buscador_gral_novedad_codigo_color'), Gral::getVars(1, 'buscador_gral_novedad_codigo_color_comparador'));
	$criterio->add('gral_novedad.observacion', Gral::getVars(1, 'buscador_gral_novedad_observacion'), Gral::getVars(1, 'buscador_gral_novedad_observacion_comparador'));
	$criterio->add('gral_novedad.estado', Gral::getVars(1, 'buscador_gral_novedad_estado'), Gral::getVars(1, 'buscador_gral_novedad_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_novedad_motivo', 'gral_novedad_motivo.gral_novedad_id', 'gral_novedad.id', 'LEFT JOIN');
	$criterio->addRealJoin('per_mov_planificacion', 'per_mov_planificacion.gral_novedad_id', 'gral_novedad.id', 'LEFT JOIN');
	$criterio->addRealJoin('per_persona', 'per_persona.id', 'per_mov_planificacion.per_persona_id', 'LEFT JOIN');
	$criterio->addRealJoin('pln_jornada', 'pln_jornada.id', 'per_mov_planificacion.pln_jornada_id', 'LEFT JOIN');
	$criterio->addRealJoin('pln_turno_novedad', 'pln_turno_novedad.id', 'per_mov_planificacion.pln_turno_novedad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_novedad_motivo_extendido', 'gral_novedad_motivo_extendido.id', 'per_mov_planificacion.gral_novedad_motivo_extendido_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_dia', 'gral_dia.id', 'per_mov_planificacion.gral_dia_id', 'LEFT JOIN');
	$criterio->addRealJoin('pln_turno', 'pln_turno.id', 'pln_turno_novedad.pln_turno_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_novedad');
		$criterio->setCriterios();		
}
?>

