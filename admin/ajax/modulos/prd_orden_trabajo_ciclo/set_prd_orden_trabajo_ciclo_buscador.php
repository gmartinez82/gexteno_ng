<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrdOrdenTrabajoCiclo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prd_orden_trabajo_ciclo.id', Gral::getVars(1, 'buscador_prd_orden_trabajo_ciclo_id'), Gral::getVars(1, 'buscador_prd_orden_trabajo_ciclo_id_comparador'));
	$criterio->add('prd_orden_trabajo_ciclo.descripcion', Gral::getVars(1, 'buscador_prd_orden_trabajo_ciclo_descripcion'), Gral::getVars(1, 'buscador_prd_orden_trabajo_ciclo_descripcion_comparador'));
	$criterio->add('prd_orden_trabajo_ciclo.prd_orden_trabajo_id', Gral::getVars(1, 'buscador_prd_orden_trabajo_ciclo_prd_orden_trabajo_id'), Gral::getVars(1, 'buscador_prd_orden_trabajo_ciclo_prd_orden_trabajo_id_comparador'));
	$criterio->add('prd_orden_trabajo_ciclo.prd_linea_produccion_id', Gral::getVars(1, 'buscador_prd_orden_trabajo_ciclo_prd_linea_produccion_id'), Gral::getVars(1, 'buscador_prd_orden_trabajo_ciclo_prd_linea_produccion_id_comparador'));
	$criterio->add('prd_orden_trabajo_ciclo.numero', Gral::getVars(1, 'buscador_prd_orden_trabajo_ciclo_numero'), Gral::getVars(1, 'buscador_prd_orden_trabajo_ciclo_numero_comparador'));
	$criterio->add('prd_orden_trabajo_ciclo.codigo', Gral::getVars(1, 'buscador_prd_orden_trabajo_ciclo_codigo'), Gral::getVars(1, 'buscador_prd_orden_trabajo_ciclo_codigo_comparador'));
	$criterio->add('prd_orden_trabajo_ciclo.observacion', Gral::getVars(1, 'buscador_prd_orden_trabajo_ciclo_observacion'), Gral::getVars(1, 'buscador_prd_orden_trabajo_ciclo_observacion_comparador'));
	$criterio->add('prd_orden_trabajo_ciclo.estado', Gral::getVars(1, 'buscador_prd_orden_trabajo_ciclo_estado'), Gral::getVars(1, 'buscador_prd_orden_trabajo_ciclo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('prd_orden_trabajo_operacion', 'prd_orden_trabajo_operacion.prd_orden_trabajo_ciclo_id', 'prd_orden_trabajo_ciclo.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_param_operacion', 'prd_param_operacion.id', 'prd_orden_trabajo_operacion.prd_param_operacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_orden_trabajo_operacion_tipo_estado', 'prd_orden_trabajo_operacion_tipo_estado.id', 'prd_orden_trabajo_operacion.prd_orden_trabajo_operacion_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prd_orden_trabajo_ciclo');
		$criterio->setCriterios();		
}
?>

