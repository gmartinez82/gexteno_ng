<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PerMovPlanificacionTramo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('per_mov_planificacion_tramo.id', Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_id'), Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_id_comparador'));
	$criterio->add('per_mov_planificacion_tramo.descripcion', Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_descripcion'), Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_descripcion_comparador'));
	$criterio->add('per_mov_planificacion_tramo.per_mov_planificacion_id', Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_per_mov_planificacion_id'), Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_per_mov_planificacion_id_comparador'));
	$criterio->add('per_mov_planificacion_tramo.pln_jornada_tramo_id', Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_pln_jornada_tramo_id'), Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_pln_jornada_tramo_id_comparador'));
	$criterio->add('per_mov_planificacion_tramo.tramo_desde', Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_tramo_desde'), Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_tramo_desde_comparador'));
	$criterio->add('per_mov_planificacion_tramo.tramo_hasta', Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_tramo_hasta'), Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_tramo_hasta_comparador'));
	$criterio->add('per_mov_planificacion_tramo.horas_tramo', Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_horas_tramo'), Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_horas_tramo_comparador'));
	$criterio->add('per_mov_planificacion_tramo.codigo', Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_codigo'), Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_codigo_comparador'));
	$criterio->add('per_mov_planificacion_tramo.observacion', Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_observacion'), Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_observacion_comparador'));
	$criterio->add('per_mov_planificacion_tramo.estado', Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_estado'), Gral::getVars(1, 'buscador_per_mov_planificacion_tramo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('per_mov_planificacion_tramo');
		$criterio->setCriterios();		
}
?>

