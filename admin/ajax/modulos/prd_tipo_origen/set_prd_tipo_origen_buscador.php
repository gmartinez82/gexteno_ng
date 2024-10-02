<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrdTipoOrigen::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prd_tipo_origen.id', Gral::getVars(1, 'buscador_prd_tipo_origen_id'), Gral::getVars(1, 'buscador_prd_tipo_origen_id_comparador'));
	$criterio->add('prd_tipo_origen.descripcion', Gral::getVars(1, 'buscador_prd_tipo_origen_descripcion'), Gral::getVars(1, 'buscador_prd_tipo_origen_descripcion_comparador'));
	$criterio->add('prd_tipo_origen.descripcion_corta', Gral::getVars(1, 'buscador_prd_tipo_origen_descripcion_corta'), Gral::getVars(1, 'buscador_prd_tipo_origen_descripcion_corta_comparador'));
	$criterio->add('prd_tipo_origen.descripcion_publica', Gral::getVars(1, 'buscador_prd_tipo_origen_descripcion_publica'), Gral::getVars(1, 'buscador_prd_tipo_origen_descripcion_publica_comparador'));
	$criterio->add('prd_tipo_origen.codigo', Gral::getVars(1, 'buscador_prd_tipo_origen_codigo'), Gral::getVars(1, 'buscador_prd_tipo_origen_codigo_comparador'));
	$criterio->add('prd_tipo_origen.codigo_secundario', Gral::getVars(1, 'buscador_prd_tipo_origen_codigo_secundario'), Gral::getVars(1, 'buscador_prd_tipo_origen_codigo_secundario_comparador'));
	$criterio->add('prd_tipo_origen.observacion', Gral::getVars(1, 'buscador_prd_tipo_origen_observacion'), Gral::getVars(1, 'buscador_prd_tipo_origen_observacion_comparador'));
	$criterio->add('prd_tipo_origen.estado', Gral::getVars(1, 'buscador_prd_tipo_origen_estado'), Gral::getVars(1, 'buscador_prd_tipo_origen_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('prd_orden_trabajo', 'prd_orden_trabajo.prd_tipo_origen_id', 'prd_tipo_origen.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'prd_orden_trabajo.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.id', 'prd_orden_trabajo.vta_presupuesto_ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'prd_orden_trabajo.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_proceso_productivo', 'prd_proceso_productivo.id', 'prd_orden_trabajo.prd_proceso_productivo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_prioridad', 'prd_prioridad.id', 'prd_orden_trabajo.prd_prioridad_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'prd_orden_trabajo.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_orden_trabajo_tipo_estado', 'prd_orden_trabajo_tipo_estado.id', 'prd_orden_trabajo.prd_orden_trabajo_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prd_tipo_origen');
		$criterio->setCriterios();		
}
?>

