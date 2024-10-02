<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrdOrdenTrabajo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prd_orden_trabajo.id', Gral::getVars(1, 'buscador_prd_orden_trabajo_id'), Gral::getVars(1, 'buscador_prd_orden_trabajo_id_comparador'));
	$criterio->add('prd_orden_trabajo.descripcion', Gral::getVars(1, 'buscador_prd_orden_trabajo_descripcion'), Gral::getVars(1, 'buscador_prd_orden_trabajo_descripcion_comparador'));
	$criterio->add('prd_orden_trabajo.vta_presupuesto_id', Gral::getVars(1, 'buscador_prd_orden_trabajo_vta_presupuesto_id'), Gral::getVars(1, 'buscador_prd_orden_trabajo_vta_presupuesto_id_comparador'));
	$criterio->add('prd_orden_trabajo.vta_presupuesto_ins_insumo_id', Gral::getVars(1, 'buscador_prd_orden_trabajo_vta_presupuesto_ins_insumo_id'), Gral::getVars(1, 'buscador_prd_orden_trabajo_vta_presupuesto_ins_insumo_id_comparador'));
	$criterio->add('prd_orden_trabajo.cli_cliente_id', Gral::getVars(1, 'buscador_prd_orden_trabajo_cli_cliente_id'), Gral::getVars(1, 'buscador_prd_orden_trabajo_cli_cliente_id_comparador'));
	$criterio->add('prd_orden_trabajo.prd_tipo_origen_id', Gral::getVars(1, 'buscador_prd_orden_trabajo_prd_tipo_origen_id'), Gral::getVars(1, 'buscador_prd_orden_trabajo_prd_tipo_origen_id_comparador'));
	$criterio->add('prd_orden_trabajo.prd_proceso_productivo_id', Gral::getVars(1, 'buscador_prd_orden_trabajo_prd_proceso_productivo_id'), Gral::getVars(1, 'buscador_prd_orden_trabajo_prd_proceso_productivo_id_comparador'));
	$criterio->add('prd_orden_trabajo.prd_prioridad_id', Gral::getVars(1, 'buscador_prd_orden_trabajo_prd_prioridad_id'), Gral::getVars(1, 'buscador_prd_orden_trabajo_prd_prioridad_id_comparador'));
	$criterio->add('prd_orden_trabajo.ins_insumo_id', Gral::getVars(1, 'buscador_prd_orden_trabajo_ins_insumo_id'), Gral::getVars(1, 'buscador_prd_orden_trabajo_ins_insumo_id_comparador'));
	$criterio->add('prd_orden_trabajo.codigo', Gral::getVars(1, 'buscador_prd_orden_trabajo_codigo'), Gral::getVars(1, 'buscador_prd_orden_trabajo_codigo_comparador'));
	$criterio->add('prd_orden_trabajo.cantidad', Gral::getVars(1, 'buscador_prd_orden_trabajo_cantidad'), Gral::getVars(1, 'buscador_prd_orden_trabajo_cantidad_comparador'));
	$criterio->add('prd_orden_trabajo.fecha', Gral::getFechaToDB(Gral::getVars(1, 'buscador_prd_orden_trabajo_fecha')), Gral::getVars(1, 'buscador_prd_orden_trabajo_fecha_comparador'));
	$criterio->add('prd_orden_trabajo.observacion', Gral::getVars(1, 'buscador_prd_orden_trabajo_observacion'), Gral::getVars(1, 'buscador_prd_orden_trabajo_observacion_comparador'));
	$criterio->add('prd_orden_trabajo.estado', Gral::getVars(1, 'buscador_prd_orden_trabajo_estado'), Gral::getVars(1, 'buscador_prd_orden_trabajo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('prd_orden_trabajo_estado', 'prd_orden_trabajo_estado.prd_orden_trabajo_id', 'prd_orden_trabajo.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_orden_trabajo_tipo_estado', 'prd_orden_trabajo_tipo_estado.id', 'prd_orden_trabajo_estado.prd_orden_trabajo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_orden_trabajo_ciclo', 'prd_orden_trabajo_ciclo.prd_orden_trabajo_id', 'prd_orden_trabajo.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_linea_produccion', 'prd_linea_produccion.id', 'prd_orden_trabajo_ciclo.prd_linea_produccion_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prd_orden_trabajo');
		$criterio->setCriterios();		
}
?>

