<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdiPedidoAgrupacionItem::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pdi_pedido_agrupacion_item.id', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_item_id'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_item_id_comparador'));
	$criterio->add('pdi_pedido_agrupacion_item.descripcion', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_item_descripcion'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_item_descripcion_comparador'));
	$criterio->add('pdi_pedido_agrupacion_item.codigo', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_item_codigo'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_item_codigo_comparador'));
	$criterio->add('pdi_pedido_agrupacion_item.pdi_pedido_agrupacion_id', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_item_pdi_pedido_agrupacion_id'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_item_pdi_pedido_agrupacion_id_comparador'));
	$criterio->add('pdi_pedido_agrupacion_item.ins_insumo_id', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_item_ins_insumo_id'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_item_ins_insumo_id_comparador'));
	$criterio->add('pdi_pedido_agrupacion_item.cantidad', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_item_cantidad'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_item_cantidad_comparador'));
	$criterio->add('pdi_pedido_agrupacion_item.observacion', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_item_observacion'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_item_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pdi_pedido', 'pdi_pedido.pdi_pedido_agrupacion_item_id', 'pdi_pedido_agrupacion_item.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pdi_pedido.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_tipo_origen', 'pdi_tipo_origen.id', 'pdi_pedido.pdi_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_urgencia', 'pdi_urgencia.id', 'pdi_pedido.pdi_urgencia_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'pdi_pedido.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_tipo_estado', 'pdi_tipo_estado.id', 'pdi_pedido.pdi_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_pedido_agrupacion', 'pdi_pedido_agrupacion.id', 'pdi_pedido.pdi_pedido_agrupacion_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pdi_pedido_agrupacion_item');
		$criterio->setCriterios();		
}
?>

