<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdiPedido::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pdi_pedido.id', Gral::getVars(1, 'buscador_pdi_pedido_id'), Gral::getVars(1, 'buscador_pdi_pedido_id_comparador'));
	$criterio->add('pdi_pedido.descripcion', Gral::getVars(1, 'buscador_pdi_pedido_descripcion'), Gral::getVars(1, 'buscador_pdi_pedido_descripcion_comparador'));
	$criterio->add('pdi_pedido.ins_insumo_id', Gral::getVars(1, 'buscador_pdi_pedido_ins_insumo_id'), Gral::getVars(1, 'buscador_pdi_pedido_ins_insumo_id_comparador'));
	$criterio->add('pdi_pedido.pdi_tipo_origen_id', Gral::getVars(1, 'buscador_pdi_pedido_pdi_tipo_origen_id'), Gral::getVars(1, 'buscador_pdi_pedido_pdi_tipo_origen_id_comparador'));
	$criterio->add('pdi_pedido.pdi_urgencia_id', Gral::getVars(1, 'buscador_pdi_pedido_pdi_urgencia_id'), Gral::getVars(1, 'buscador_pdi_pedido_pdi_urgencia_id_comparador'));
	$criterio->add('pdi_pedido.pan_panol_origen', Gral::getVars(1, 'buscador_pdi_pedido_pan_panol_origen'), Gral::getVars(1, 'buscador_pdi_pedido_pan_panol_origen_comparador'));
	$criterio->add('pdi_pedido.pan_panol_destino', Gral::getVars(1, 'buscador_pdi_pedido_pan_panol_destino'), Gral::getVars(1, 'buscador_pdi_pedido_pan_panol_destino_comparador'));
	$criterio->add('pdi_pedido.codigo', Gral::getVars(1, 'buscador_pdi_pedido_codigo'), Gral::getVars(1, 'buscador_pdi_pedido_codigo_comparador'));
	$criterio->add('pdi_pedido.pdi_tipo_estado_id', Gral::getVars(1, 'buscador_pdi_pedido_pdi_tipo_estado_id'), Gral::getVars(1, 'buscador_pdi_pedido_pdi_tipo_estado_id_comparador'));
	$criterio->add('pdi_pedido.pdi_pedido_agrupacion_id', Gral::getVars(1, 'buscador_pdi_pedido_pdi_pedido_agrupacion_id'), Gral::getVars(1, 'buscador_pdi_pedido_pdi_pedido_agrupacion_id_comparador'));
	$criterio->add('pdi_pedido.pdi_pedido_agrupacion_item_id', Gral::getVars(1, 'buscador_pdi_pedido_pdi_pedido_agrupacion_item_id'), Gral::getVars(1, 'buscador_pdi_pedido_pdi_pedido_agrupacion_item_id_comparador'));
	$criterio->add('pdi_pedido.nota_publica', Gral::getVars(1, 'buscador_pdi_pedido_nota_publica'), Gral::getVars(1, 'buscador_pdi_pedido_nota_publica_comparador'));
	$criterio->add('pdi_pedido.nota_interna', Gral::getVars(1, 'buscador_pdi_pedido_nota_interna'), Gral::getVars(1, 'buscador_pdi_pedido_nota_interna_comparador'));
	$criterio->add('pdi_pedido.observacion', Gral::getVars(1, 'buscador_pdi_pedido_observacion'), Gral::getVars(1, 'buscador_pdi_pedido_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_stock_movimiento', 'ins_stock_movimiento.pdi_pedido_id', 'pdi_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_tipo_movimiento', 'ins_stock_tipo_movimiento.id', 'ins_stock_movimiento.ins_stock_tipo_movimiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_stock_movimiento.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'ins_stock_movimiento.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito', 'vta_remito.id', 'ins_stock_movimiento.vta_remito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion', 'pde_recepcion.id', 'ins_stock_movimiento.pde_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_transformacion', 'ins_stock_transformacion.id', 'ins_stock_movimiento.ins_stock_transformacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_estado', 'pdi_estado.pdi_pedido_id', 'pdi_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_tipo_estado', 'pdi_tipo_estado.id', 'pdi_estado.pdi_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_pedido_destinatario', 'pdi_pedido_destinatario.pdi_pedido_id', 'pdi_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'pdi_pedido_destinatario.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_comentario', 'pdi_comentario.pdi_pedido_id', 'pdi_pedido.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pdi_pedido');
		$criterio->setCriterios();		
}
?>

