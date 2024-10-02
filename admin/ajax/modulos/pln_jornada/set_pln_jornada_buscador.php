<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PlnJornada::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pln_jornada.id', Gral::getVars(1, 'buscador_pln_jornada_id'), Gral::getVars(1, 'buscador_pln_jornada_id_comparador'));
	$criterio->add('pln_jornada.descripcion', Gral::getVars(1, 'buscador_pln_jornada_descripcion'), Gral::getVars(1, 'buscador_pln_jornada_descripcion_comparador'));
	$criterio->add('pln_jornada.gral_novedad_id', Gral::getVars(1, 'buscador_pln_jornada_gral_novedad_id'), Gral::getVars(1, 'buscador_pln_jornada_gral_novedad_id_comparador'));
	$criterio->add('pln_jornada.codigo', Gral::getVars(1, 'buscador_pln_jornada_codigo'), Gral::getVars(1, 'buscador_pln_jornada_codigo_comparador'));
	$criterio->add('pln_jornada.horas', Gral::getVars(1, 'buscador_pln_jornada_horas'), Gral::getVars(1, 'buscador_pln_jornada_horas_comparador'));
	$criterio->add('pln_jornada.jornada_completa', Gral::getVars(1, 'buscador_pln_jornada_jornada_completa'), Gral::getVars(1, 'buscador_pln_jornada_jornada_completa_comparador'));
	$criterio->add('pln_jornada.observacion', Gral::getVars(1, 'buscador_pln_jornada_observacion'), Gral::getVars(1, 'buscador_pln_jornada_observacion_comparador'));
	$criterio->add('pln_jornada.estado', Gral::getVars(1, 'buscador_pln_jornada_estado'), Gral::getVars(1, 'buscador_pln_jornada_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('per_mov_planificacion', 'per_mov_planificacion.pln_jornada_id', 'pln_jornada.id', 'LEFT JOIN');
	$criterio->addRealJoin('per_persona', 'per_persona.id', 'per_mov_planificacion.per_persona_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_novedad', 'gral_novedad.id', 'per_mov_planificacion.gral_novedad_id', 'LEFT JOIN');
	$criterio->addRealJoin('pln_turno_novedad', 'pln_turno_novedad.id', 'per_mov_planificacion.pln_turno_novedad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_novedad_motivo', 'gral_novedad_motivo.id', 'per_mov_planificacion.gral_novedad_motivo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_novedad_motivo_extendido', 'gral_novedad_motivo_extendido.id', 'per_mov_planificacion.gral_novedad_motivo_extendido_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_dia', 'gral_dia.id', 'per_mov_planificacion.gral_dia_id', 'LEFT JOIN');
	$criterio->addRealJoin('pln_jornada_tramo', 'pln_jornada_tramo.pln_jornada_id', 'pln_jornada.id', 'LEFT JOIN');
	$criterio->addRealJoin('pln_turno', 'pln_turno.id', 'pln_turno_novedad.pln_turno_id', 'LEFT JOIN');
	$criterio->addRealJoin('pln_jornada_us_usuario', 'pln_jornada_us_usuario.pln_jornada_id', 'pln_jornada.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'pln_jornada_us_usuario.us_usuario_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pln_jornada');
		$criterio->setCriterios();		
}
?>

