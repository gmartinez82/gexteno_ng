<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PlnJornadaTramo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pln_jornada_tramo.id', Gral::getVars(1, 'buscador_pln_jornada_tramo_id'), Gral::getVars(1, 'buscador_pln_jornada_tramo_id_comparador'));
	$criterio->add('pln_jornada_tramo.descripcion', Gral::getVars(1, 'buscador_pln_jornada_tramo_descripcion'), Gral::getVars(1, 'buscador_pln_jornada_tramo_descripcion_comparador'));
	$criterio->add('pln_jornada_tramo.pln_jornada_id', Gral::getVars(1, 'buscador_pln_jornada_tramo_pln_jornada_id'), Gral::getVars(1, 'buscador_pln_jornada_tramo_pln_jornada_id_comparador'));
	$criterio->add('pln_jornada_tramo.tramo_desde', Gral::getVars(1, 'buscador_pln_jornada_tramo_tramo_desde'), Gral::getVars(1, 'buscador_pln_jornada_tramo_tramo_desde_comparador'));
	$criterio->add('pln_jornada_tramo.tramo_hasta', Gral::getVars(1, 'buscador_pln_jornada_tramo_tramo_hasta'), Gral::getVars(1, 'buscador_pln_jornada_tramo_tramo_hasta_comparador'));
	$criterio->add('pln_jornada_tramo.horas_tramo', Gral::getVars(1, 'buscador_pln_jornada_tramo_horas_tramo'), Gral::getVars(1, 'buscador_pln_jornada_tramo_horas_tramo_comparador'));
	$criterio->add('pln_jornada_tramo.codigo', Gral::getVars(1, 'buscador_pln_jornada_tramo_codigo'), Gral::getVars(1, 'buscador_pln_jornada_tramo_codigo_comparador'));
	$criterio->add('pln_jornada_tramo.observacion', Gral::getVars(1, 'buscador_pln_jornada_tramo_observacion'), Gral::getVars(1, 'buscador_pln_jornada_tramo_observacion_comparador'));
	$criterio->add('pln_jornada_tramo.estado', Gral::getVars(1, 'buscador_pln_jornada_tramo_estado'), Gral::getVars(1, 'buscador_pln_jornada_tramo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('per_mov_planificacion_tramo', 'per_mov_planificacion_tramo.pln_jornada_tramo_id', 'pln_jornada_tramo.id', 'LEFT JOIN');
	$criterio->addRealJoin('per_mov_planificacion', 'per_mov_planificacion.id', 'per_mov_planificacion_tramo.per_mov_planificacion_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pln_jornada_tramo');
		$criterio->setCriterios();		
}
?>

