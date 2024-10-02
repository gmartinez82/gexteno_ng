<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrdLineaProduccion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prd_linea_produccion.id', Gral::getVars(1, 'buscador_prd_linea_produccion_id'), Gral::getVars(1, 'buscador_prd_linea_produccion_id_comparador'));
	$criterio->add('prd_linea_produccion.descripcion', Gral::getVars(1, 'buscador_prd_linea_produccion_descripcion'), Gral::getVars(1, 'buscador_prd_linea_produccion_descripcion_comparador'));
	$criterio->add('prd_linea_produccion.descripcion_corta', Gral::getVars(1, 'buscador_prd_linea_produccion_descripcion_corta'), Gral::getVars(1, 'buscador_prd_linea_produccion_descripcion_corta_comparador'));
	$criterio->add('prd_linea_produccion.prd_proceso_productivo_id', Gral::getVars(1, 'buscador_prd_linea_produccion_prd_proceso_productivo_id'), Gral::getVars(1, 'buscador_prd_linea_produccion_prd_proceso_productivo_id_comparador'));
	$criterio->add('prd_linea_produccion.numero', Gral::getVars(1, 'buscador_prd_linea_produccion_numero'), Gral::getVars(1, 'buscador_prd_linea_produccion_numero_comparador'));
	$criterio->add('prd_linea_produccion.codigo', Gral::getVars(1, 'buscador_prd_linea_produccion_codigo'), Gral::getVars(1, 'buscador_prd_linea_produccion_codigo_comparador'));
	$criterio->add('prd_linea_produccion.observacion', Gral::getVars(1, 'buscador_prd_linea_produccion_observacion'), Gral::getVars(1, 'buscador_prd_linea_produccion_observacion_comparador'));
	$criterio->add('prd_linea_produccion.estado', Gral::getVars(1, 'buscador_prd_linea_produccion_estado'), Gral::getVars(1, 'buscador_prd_linea_produccion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('prd_orden_trabajo_ciclo', 'prd_orden_trabajo_ciclo.prd_linea_produccion_id', 'prd_linea_produccion.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_orden_trabajo', 'prd_orden_trabajo.id', 'prd_orden_trabajo_ciclo.prd_orden_trabajo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_param_operacion', 'prd_param_operacion.prd_linea_produccion_id', 'prd_linea_produccion.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_param_tipo_operacion', 'prd_param_tipo_operacion.id', 'prd_param_operacion.prd_param_tipo_operacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_proceso_productivo', 'prd_proceso_productivo.id', 'prd_param_operacion.prd_proceso_productivo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_equipo', 'prd_equipo.id', 'prd_param_operacion.prd_equipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_linea_produccion_prd_param_operacion_prd_equipo', 'prd_linea_produccion_prd_param_operacion_prd_equipo.prd_linea_produccion_id', 'prd_linea_produccion.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prd_linea_produccion');
		$criterio->setCriterios();		
}
?>

