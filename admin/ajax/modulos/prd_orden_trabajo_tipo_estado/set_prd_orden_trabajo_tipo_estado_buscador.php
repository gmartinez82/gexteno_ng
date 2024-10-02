<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrdOrdenTrabajoTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prd_orden_trabajo_tipo_estado.id', Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_id'), Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_id_comparador'));
	$criterio->add('prd_orden_trabajo_tipo_estado.descripcion', Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_descripcion'), Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_descripcion_comparador'));
	$criterio->add('prd_orden_trabajo_tipo_estado.descripcion_corta', Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_descripcion_corta'), Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_descripcion_corta_comparador'));
	$criterio->add('prd_orden_trabajo_tipo_estado.activo', Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_activo'), Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_activo_comparador'));
	$criterio->add('prd_orden_trabajo_tipo_estado.terminal', Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_terminal'), Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_terminal_comparador'));
	$criterio->add('prd_orden_trabajo_tipo_estado.anulado', Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_anulado'), Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_anulado_comparador'));
	$criterio->add('prd_orden_trabajo_tipo_estado.gestionable', Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_gestionable'), Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_gestionable_comparador'));
	$criterio->add('prd_orden_trabajo_tipo_estado.color', Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_color'), Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_color_comparador'));
	$criterio->add('prd_orden_trabajo_tipo_estado.color_secundario', Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_color_secundario'), Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_color_secundario_comparador'));
	$criterio->add('prd_orden_trabajo_tipo_estado.codigo', Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_codigo'), Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_codigo_comparador'));
	$criterio->add('prd_orden_trabajo_tipo_estado.observacion', Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_observacion'), Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_observacion_comparador'));
	$criterio->add('prd_orden_trabajo_tipo_estado.estado', Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_estado'), Gral::getVars(1, 'buscador_prd_orden_trabajo_tipo_estado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('prd_orden_trabajo', 'prd_orden_trabajo.prd_orden_trabajo_tipo_estado_id', 'prd_orden_trabajo_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'prd_orden_trabajo.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.id', 'prd_orden_trabajo.vta_presupuesto_ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'prd_orden_trabajo.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_tipo_origen', 'prd_tipo_origen.id', 'prd_orden_trabajo.prd_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_proceso_productivo', 'prd_proceso_productivo.id', 'prd_orden_trabajo.prd_proceso_productivo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_prioridad', 'prd_prioridad.id', 'prd_orden_trabajo.prd_prioridad_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'prd_orden_trabajo.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_orden_trabajo_estado', 'prd_orden_trabajo_estado.prd_orden_trabajo_tipo_estado_id', 'prd_orden_trabajo_tipo_estado.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prd_orden_trabajo_tipo_estado');
		$criterio->setCriterios();		
}
?>

