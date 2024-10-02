<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdiPedidoAgrupacionTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pdi_pedido_agrupacion_tipo_estado.id', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_tipo_estado_id'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_tipo_estado_id_comparador'));
	$criterio->add('pdi_pedido_agrupacion_tipo_estado.descripcion', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_tipo_estado_descripcion'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_tipo_estado_descripcion_comparador'));
	$criterio->add('pdi_pedido_agrupacion_tipo_estado.codigo', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_tipo_estado_codigo'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_tipo_estado_codigo_comparador'));
	$criterio->add('pdi_pedido_agrupacion_tipo_estado.activo', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_tipo_estado_activo'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_tipo_estado_activo_comparador'));
	$criterio->add('pdi_pedido_agrupacion_tipo_estado.terminal', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_tipo_estado_terminal'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_tipo_estado_terminal_comparador'));
	$criterio->add('pdi_pedido_agrupacion_tipo_estado.color', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_tipo_estado_color'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_tipo_estado_color_comparador'));
	$criterio->add('pdi_pedido_agrupacion_tipo_estado.observacion', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_tipo_estado_observacion'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_tipo_estado_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pdi_pedido_agrupacion', 'pdi_pedido_agrupacion.pdi_pedido_agrupacion_tipo_estado_id', 'pdi_pedido_agrupacion_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'pdi_pedido_agrupacion.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_tipo_origen', 'pdi_tipo_origen.id', 'pdi_pedido_agrupacion.pdi_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_urgencia', 'pdi_urgencia.id', 'pdi_pedido_agrupacion.pdi_urgencia_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_pedido_agrupacion_estado', 'pdi_pedido_agrupacion_estado.pdi_pedido_agrupacion_tipo_estado_id', 'pdi_pedido_agrupacion_tipo_estado.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pdi_pedido_agrupacion_tipo_estado');
		$criterio->setCriterios();		
}
?>

