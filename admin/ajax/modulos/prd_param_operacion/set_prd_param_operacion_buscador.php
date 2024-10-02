<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrdParamOperacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prd_param_operacion.id', Gral::getVars(1, 'buscador_prd_param_operacion_id'), Gral::getVars(1, 'buscador_prd_param_operacion_id_comparador'));
	$criterio->add('prd_param_operacion.descripcion', Gral::getVars(1, 'buscador_prd_param_operacion_descripcion'), Gral::getVars(1, 'buscador_prd_param_operacion_descripcion_comparador'));
	$criterio->add('prd_param_operacion.descripcion_corta', Gral::getVars(1, 'buscador_prd_param_operacion_descripcion_corta'), Gral::getVars(1, 'buscador_prd_param_operacion_descripcion_corta_comparador'));
	$criterio->add('prd_param_operacion.prd_param_tipo_operacion_id', Gral::getVars(1, 'buscador_prd_param_operacion_prd_param_tipo_operacion_id'), Gral::getVars(1, 'buscador_prd_param_operacion_prd_param_tipo_operacion_id_comparador'));
	$criterio->add('prd_param_operacion.numero', Gral::getVars(1, 'buscador_prd_param_operacion_numero'), Gral::getVars(1, 'buscador_prd_param_operacion_numero_comparador'));
	$criterio->add('prd_param_operacion.prd_proceso_productivo_id', Gral::getVars(1, 'buscador_prd_param_operacion_prd_proceso_productivo_id'), Gral::getVars(1, 'buscador_prd_param_operacion_prd_proceso_productivo_id_comparador'));
	$criterio->add('prd_param_operacion.prd_linea_produccion_id', Gral::getVars(1, 'buscador_prd_param_operacion_prd_linea_produccion_id'), Gral::getVars(1, 'buscador_prd_param_operacion_prd_linea_produccion_id_comparador'));
	$criterio->add('prd_param_operacion.prd_equipo_id', Gral::getVars(1, 'buscador_prd_param_operacion_prd_equipo_id'), Gral::getVars(1, 'buscador_prd_param_operacion_prd_equipo_id_comparador'));
	$criterio->add('prd_param_operacion.cantidad_operarios', Gral::getVars(1, 'buscador_prd_param_operacion_cantidad_operarios'), Gral::getVars(1, 'buscador_prd_param_operacion_cantidad_operarios_comparador'));
	$criterio->add('prd_param_operacion.cantidad_equipos', Gral::getVars(1, 'buscador_prd_param_operacion_cantidad_equipos'), Gral::getVars(1, 'buscador_prd_param_operacion_cantidad_equipos_comparador'));
	$criterio->add('prd_param_operacion.codigo', Gral::getVars(1, 'buscador_prd_param_operacion_codigo'), Gral::getVars(1, 'buscador_prd_param_operacion_codigo_comparador'));
	$criterio->add('prd_param_operacion.observacion', Gral::getVars(1, 'buscador_prd_param_operacion_observacion'), Gral::getVars(1, 'buscador_prd_param_operacion_observacion_comparador'));
	$criterio->add('prd_param_operacion.estado', Gral::getVars(1, 'buscador_prd_param_operacion_estado'), Gral::getVars(1, 'buscador_prd_param_operacion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('prd_orden_trabajo_operacion', 'prd_orden_trabajo_operacion.prd_param_operacion_id', 'prd_param_operacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_orden_trabajo_ciclo', 'prd_orden_trabajo_ciclo.id', 'prd_orden_trabajo_operacion.prd_orden_trabajo_ciclo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_orden_trabajo_operacion_tipo_estado', 'prd_orden_trabajo_operacion_tipo_estado.id', 'prd_orden_trabajo_operacion.prd_orden_trabajo_operacion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_param_operacion_prd_equipo', 'prd_param_operacion_prd_equipo.prd_param_operacion_id', 'prd_param_operacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_equipo', 'prd_equipo.id', 'prd_param_operacion_prd_equipo.prd_equipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_param_operacion_ope_operario', 'prd_param_operacion_ope_operario.prd_param_operacion_id', 'prd_param_operacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('ope_operario', 'ope_operario.id', 'prd_param_operacion_ope_operario.ope_operario_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_linea_produccion_prd_param_operacion_prd_equipo', 'prd_linea_produccion_prd_param_operacion_prd_equipo.prd_param_operacion_id', 'prd_param_operacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_linea_produccion', 'prd_linea_produccion.id', 'prd_linea_produccion_prd_param_operacion_prd_equipo.prd_linea_produccion_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prd_param_operacion');
		$criterio->setCriterios();		
}
?>

