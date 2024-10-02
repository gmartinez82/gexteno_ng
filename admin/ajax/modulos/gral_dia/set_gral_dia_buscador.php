<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralDia::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_dia.id', Gral::getVars(1, 'buscador_gral_dia_id'), Gral::getVars(1, 'buscador_gral_dia_id_comparador'));
	$criterio->add('gral_dia.descripcion', Gral::getVars(1, 'buscador_gral_dia_descripcion'), Gral::getVars(1, 'buscador_gral_dia_descripcion_comparador'));
	$criterio->add('gral_dia.descripcion_corta', Gral::getVars(1, 'buscador_gral_dia_descripcion_corta'), Gral::getVars(1, 'buscador_gral_dia_descripcion_corta_comparador'));
	$criterio->add('gral_dia.codigo', Gral::getVars(1, 'buscador_gral_dia_codigo'), Gral::getVars(1, 'buscador_gral_dia_codigo_comparador'));
	$criterio->add('gral_dia.codigo_numero', Gral::getVars(1, 'buscador_gral_dia_codigo_numero'), Gral::getVars(1, 'buscador_gral_dia_codigo_numero_comparador'));
	$criterio->add('gral_dia.observacion', Gral::getVars(1, 'buscador_gral_dia_observacion'), Gral::getVars(1, 'buscador_gral_dia_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_ruta_gral_dia', 'gral_ruta_gral_dia.gral_dia_id', 'gral_dia.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_ruta', 'gral_ruta.id', 'gral_ruta_gral_dia.gral_ruta_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_mov_planificacion', 'per_mov_planificacion.gral_dia_id', 'gral_dia.id', 'LEFT JOIN');
	$criterio->addRealJoin('per_persona', 'per_persona.id', 'per_mov_planificacion.per_persona_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_novedad', 'gral_novedad.id', 'per_mov_planificacion.gral_novedad_id', 'LEFT JOIN');
	$criterio->addRealJoin('pln_jornada', 'pln_jornada.id', 'per_mov_planificacion.pln_jornada_id', 'LEFT JOIN');
	$criterio->addRealJoin('pln_turno_novedad', 'pln_turno_novedad.id', 'per_mov_planificacion.pln_turno_novedad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_novedad_motivo', 'gral_novedad_motivo.id', 'per_mov_planificacion.gral_novedad_motivo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_novedad_motivo_extendido', 'gral_novedad_motivo_extendido.id', 'per_mov_planificacion.gral_novedad_motivo_extendido_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_dia');
		$criterio->setCriterios();		
}
?>

