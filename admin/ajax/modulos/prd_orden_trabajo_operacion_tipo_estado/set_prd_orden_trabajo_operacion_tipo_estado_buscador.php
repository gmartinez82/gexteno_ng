<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrdOrdenTrabajoOperacionTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prd_orden_trabajo_operacion_tipo_estado.id', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_id'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_id_comparador'));
	$criterio->add('prd_orden_trabajo_operacion_tipo_estado.descripcion', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_descripcion'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_descripcion_comparador'));
	$criterio->add('prd_orden_trabajo_operacion_tipo_estado.descripcion_corta', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_descripcion_corta'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_descripcion_corta_comparador'));
	$criterio->add('prd_orden_trabajo_operacion_tipo_estado.activo', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_activo'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_activo_comparador'));
	$criterio->add('prd_orden_trabajo_operacion_tipo_estado.terminal', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_terminal'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_terminal_comparador'));
	$criterio->add('prd_orden_trabajo_operacion_tipo_estado.anulado', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_anulado'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_anulado_comparador'));
	$criterio->add('prd_orden_trabajo_operacion_tipo_estado.gestionable', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_gestionable'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_gestionable_comparador'));
	$criterio->add('prd_orden_trabajo_operacion_tipo_estado.color', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_color'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_color_comparador'));
	$criterio->add('prd_orden_trabajo_operacion_tipo_estado.color_secundario', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_color_secundario'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_color_secundario_comparador'));
	$criterio->add('prd_orden_trabajo_operacion_tipo_estado.codigo', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_codigo'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_codigo_comparador'));
	$criterio->add('prd_orden_trabajo_operacion_tipo_estado.observacion', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_observacion'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_observacion_comparador'));
	$criterio->add('prd_orden_trabajo_operacion_tipo_estado.estado', Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_estado'), Gral::getVars(1, 'buscador_prd_orden_trabajo_operacion_tipo_estado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('prd_orden_trabajo_operacion', 'prd_orden_trabajo_operacion.prd_orden_trabajo_operacion_tipo_estado_id', 'prd_orden_trabajo_operacion_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_orden_trabajo_ciclo', 'prd_orden_trabajo_ciclo.id', 'prd_orden_trabajo_operacion.prd_orden_trabajo_ciclo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_param_operacion', 'prd_param_operacion.id', 'prd_orden_trabajo_operacion.prd_param_operacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_orden_trabajo_operacion_estado', 'prd_orden_trabajo_operacion_estado.prd_orden_trabajo_operacion_tipo_estado_id', 'prd_orden_trabajo_operacion_tipo_estado.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prd_orden_trabajo_operacion_tipo_estado');
		$criterio->setCriterios();		
}
?>

