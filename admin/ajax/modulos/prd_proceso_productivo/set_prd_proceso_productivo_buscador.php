<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrdProcesoProductivo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prd_proceso_productivo.id', Gral::getVars(1, 'buscador_prd_proceso_productivo_id'), Gral::getVars(1, 'buscador_prd_proceso_productivo_id_comparador'));
	$criterio->add('prd_proceso_productivo.descripcion', Gral::getVars(1, 'buscador_prd_proceso_productivo_descripcion'), Gral::getVars(1, 'buscador_prd_proceso_productivo_descripcion_comparador'));
	$criterio->add('prd_proceso_productivo.descripcion_corta', Gral::getVars(1, 'buscador_prd_proceso_productivo_descripcion_corta'), Gral::getVars(1, 'buscador_prd_proceso_productivo_descripcion_corta_comparador'));
	$criterio->add('prd_proceso_productivo.ins_insumo_id', Gral::getVars(1, 'buscador_prd_proceso_productivo_ins_insumo_id'), Gral::getVars(1, 'buscador_prd_proceso_productivo_ins_insumo_id_comparador'));
	$criterio->add('prd_proceso_productivo.cantidad', Gral::getVars(1, 'buscador_prd_proceso_productivo_cantidad'), Gral::getVars(1, 'buscador_prd_proceso_productivo_cantidad_comparador'));
	$criterio->add('prd_proceso_productivo.configurado', Gral::getVars(1, 'buscador_prd_proceso_productivo_configurado'), Gral::getVars(1, 'buscador_prd_proceso_productivo_configurado_comparador'));
	$criterio->add('prd_proceso_productivo.codigo', Gral::getVars(1, 'buscador_prd_proceso_productivo_codigo'), Gral::getVars(1, 'buscador_prd_proceso_productivo_codigo_comparador'));
	$criterio->add('prd_proceso_productivo.observacion', Gral::getVars(1, 'buscador_prd_proceso_productivo_observacion'), Gral::getVars(1, 'buscador_prd_proceso_productivo_observacion_comparador'));
	$criterio->add('prd_proceso_productivo.estado', Gral::getVars(1, 'buscador_prd_proceso_productivo_estado'), Gral::getVars(1, 'buscador_prd_proceso_productivo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('prd_orden_trabajo', 'prd_orden_trabajo.prd_proceso_productivo_id', 'prd_proceso_productivo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'prd_orden_trabajo.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.id', 'prd_orden_trabajo.vta_presupuesto_ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'prd_orden_trabajo.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_tipo_origen', 'prd_tipo_origen.id', 'prd_orden_trabajo.prd_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_prioridad', 'prd_prioridad.id', 'prd_orden_trabajo.prd_prioridad_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'prd_orden_trabajo.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_orden_trabajo_tipo_estado', 'prd_orden_trabajo_tipo_estado.id', 'prd_orden_trabajo.prd_orden_trabajo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_linea_produccion', 'prd_linea_produccion.prd_proceso_productivo_id', 'prd_proceso_productivo.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_param_operacion', 'prd_param_operacion.prd_proceso_productivo_id', 'prd_proceso_productivo.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_param_tipo_operacion', 'prd_param_tipo_operacion.id', 'prd_param_operacion.prd_param_tipo_operacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_equipo', 'prd_equipo.id', 'prd_param_operacion.prd_equipo_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prd_proceso_productivo');
		$criterio->setCriterios();		
}
?>

