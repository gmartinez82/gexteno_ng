<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrdEquipo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prd_equipo.id', Gral::getVars(1, 'buscador_prd_equipo_id'), Gral::getVars(1, 'buscador_prd_equipo_id_comparador'));
	$criterio->add('prd_equipo.descripcion', Gral::getVars(1, 'buscador_prd_equipo_descripcion'), Gral::getVars(1, 'buscador_prd_equipo_descripcion_comparador'));
	$criterio->add('prd_equipo.descripcion_corta', Gral::getVars(1, 'buscador_prd_equipo_descripcion_corta'), Gral::getVars(1, 'buscador_prd_equipo_descripcion_corta_comparador'));
	$criterio->add('prd_equipo.codigo', Gral::getVars(1, 'buscador_prd_equipo_codigo'), Gral::getVars(1, 'buscador_prd_equipo_codigo_comparador'));
	$criterio->add('prd_equipo.observacion', Gral::getVars(1, 'buscador_prd_equipo_observacion'), Gral::getVars(1, 'buscador_prd_equipo_observacion_comparador'));
	$criterio->add('prd_equipo.estado', Gral::getVars(1, 'buscador_prd_equipo_estado'), Gral::getVars(1, 'buscador_prd_equipo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('prd_orden_trabajo_operacion_prd_equipo', 'prd_orden_trabajo_operacion_prd_equipo.prd_equipo_id', 'prd_equipo.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_orden_trabajo_operacion', 'prd_orden_trabajo_operacion.id', 'prd_orden_trabajo_operacion_prd_equipo.prd_orden_trabajo_operacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_param_operacion', 'prd_param_operacion.prd_equipo_id', 'prd_equipo.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_param_tipo_operacion', 'prd_param_tipo_operacion.id', 'prd_param_operacion.prd_param_tipo_operacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_proceso_productivo', 'prd_proceso_productivo.id', 'prd_param_operacion.prd_proceso_productivo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_linea_produccion', 'prd_linea_produccion.id', 'prd_param_operacion.prd_linea_produccion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_param_operacion_prd_equipo', 'prd_param_operacion_prd_equipo.prd_equipo_id', 'prd_equipo.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_linea_produccion_prd_param_operacion_prd_equipo', 'prd_linea_produccion_prd_param_operacion_prd_equipo.prd_equipo_id', 'prd_equipo.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prd_equipo');
		$criterio->setCriterios();		
}
?>

