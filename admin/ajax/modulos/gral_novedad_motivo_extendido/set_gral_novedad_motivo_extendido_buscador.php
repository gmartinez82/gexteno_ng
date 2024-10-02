<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralNovedadMotivoExtendido::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_novedad_motivo_extendido.id', Gral::getVars(1, 'buscador_gral_novedad_motivo_extendido_id'), Gral::getVars(1, 'buscador_gral_novedad_motivo_extendido_id_comparador'));
	$criterio->add('gral_novedad_motivo_extendido.descripcion', Gral::getVars(1, 'buscador_gral_novedad_motivo_extendido_descripcion'), Gral::getVars(1, 'buscador_gral_novedad_motivo_extendido_descripcion_comparador'));
	$criterio->add('gral_novedad_motivo_extendido.gral_novedad_motivo_id', Gral::getVars(1, 'buscador_gral_novedad_motivo_extendido_gral_novedad_motivo_id'), Gral::getVars(1, 'buscador_gral_novedad_motivo_extendido_gral_novedad_motivo_id_comparador'));
	$criterio->add('gral_novedad_motivo_extendido.codigo', Gral::getVars(1, 'buscador_gral_novedad_motivo_extendido_codigo'), Gral::getVars(1, 'buscador_gral_novedad_motivo_extendido_codigo_comparador'));
	$criterio->add('gral_novedad_motivo_extendido.observacion', Gral::getVars(1, 'buscador_gral_novedad_motivo_extendido_observacion'), Gral::getVars(1, 'buscador_gral_novedad_motivo_extendido_observacion_comparador'));
	$criterio->add('gral_novedad_motivo_extendido.estado', Gral::getVars(1, 'buscador_gral_novedad_motivo_extendido_estado'), Gral::getVars(1, 'buscador_gral_novedad_motivo_extendido_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('per_mov_planificacion', 'per_mov_planificacion.gral_novedad_motivo_extendido_id', 'gral_novedad_motivo_extendido.id', 'LEFT JOIN');
	$criterio->addRealJoin('per_persona', 'per_persona.id', 'per_mov_planificacion.per_persona_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_novedad', 'gral_novedad.id', 'per_mov_planificacion.gral_novedad_id', 'LEFT JOIN');
	$criterio->addRealJoin('pln_jornada', 'pln_jornada.id', 'per_mov_planificacion.pln_jornada_id', 'LEFT JOIN');
	$criterio->addRealJoin('pln_turno_novedad', 'pln_turno_novedad.id', 'per_mov_planificacion.pln_turno_novedad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_novedad_motivo', 'gral_novedad_motivo.id', 'per_mov_planificacion.gral_novedad_motivo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_dia', 'gral_dia.id', 'per_mov_planificacion.gral_dia_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_novedad_motivo_extendido');
		$criterio->setCriterios();		
}
?>

