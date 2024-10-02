<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeRecepcion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_recepcion.id', Gral::getVars(1, 'buscador_pde_recepcion_id'), Gral::getVars(1, 'buscador_pde_recepcion_id_comparador'));
	$criterio->add('pde_recepcion.descripcion', Gral::getVars(1, 'buscador_pde_recepcion_descripcion'), Gral::getVars(1, 'buscador_pde_recepcion_descripcion_comparador'));
	$criterio->add('pde_recepcion.codigo', Gral::getVars(1, 'buscador_pde_recepcion_codigo'), Gral::getVars(1, 'buscador_pde_recepcion_codigo_comparador'));
	$criterio->add('pde_recepcion.nro_comprobante', Gral::getVars(1, 'buscador_pde_recepcion_nro_comprobante'), Gral::getVars(1, 'buscador_pde_recepcion_nro_comprobante_comparador'));
	$criterio->add('pde_recepcion.pde_tipo_recepcion_id', Gral::getVars(1, 'buscador_pde_recepcion_pde_tipo_recepcion_id'), Gral::getVars(1, 'buscador_pde_recepcion_pde_tipo_recepcion_id_comparador'));
	$criterio->add('pde_recepcion.pde_centro_recepcion_id', Gral::getVars(1, 'buscador_pde_recepcion_pde_centro_recepcion_id'), Gral::getVars(1, 'buscador_pde_recepcion_pde_centro_recepcion_id_comparador'));
	$criterio->add('pde_recepcion.prv_proveedor_id', Gral::getVars(1, 'buscador_pde_recepcion_prv_proveedor_id'), Gral::getVars(1, 'buscador_pde_recepcion_prv_proveedor_id_comparador'));
	$criterio->add('pde_recepcion.pde_pedido_id', Gral::getVars(1, 'buscador_pde_recepcion_pde_pedido_id'), Gral::getVars(1, 'buscador_pde_recepcion_pde_pedido_id_comparador'));
	$criterio->add('pde_recepcion.pde_oc_id', Gral::getVars(1, 'buscador_pde_recepcion_pde_oc_id'), Gral::getVars(1, 'buscador_pde_recepcion_pde_oc_id_comparador'));
	$criterio->add('pde_recepcion.ins_insumo_id', Gral::getVars(1, 'buscador_pde_recepcion_ins_insumo_id'), Gral::getVars(1, 'buscador_pde_recepcion_ins_insumo_id_comparador'));
	$criterio->add('pde_recepcion.pde_recepcion_tipo_estado_id', Gral::getVars(1, 'buscador_pde_recepcion_pde_recepcion_tipo_estado_id'), Gral::getVars(1, 'buscador_pde_recepcion_pde_recepcion_tipo_estado_id_comparador'));
	$criterio->add('pde_recepcion.pde_recepcion_tipo_estado_facturacion_id', Gral::getVars(1, 'buscador_pde_recepcion_pde_recepcion_tipo_estado_facturacion_id'), Gral::getVars(1, 'buscador_pde_recepcion_pde_recepcion_tipo_estado_facturacion_id_comparador'));
	$criterio->add('pde_recepcion.cantidad', Gral::getVars(1, 'buscador_pde_recepcion_cantidad'), Gral::getVars(1, 'buscador_pde_recepcion_cantidad_comparador'));
	$criterio->add('pde_recepcion.fecha_entrega', Gral::getFechaToDB(Gral::getVars(1, 'buscador_pde_recepcion_fecha_entrega')), Gral::getVars(1, 'buscador_pde_recepcion_fecha_entrega_comparador'));
	$criterio->add('pde_recepcion.vencimiento', Gral::getFechaToDB(Gral::getVars(1, 'buscador_pde_recepcion_vencimiento')), Gral::getVars(1, 'buscador_pde_recepcion_vencimiento_comparador'));
	$criterio->add('pde_recepcion.pde_recepcion_agrupacion_id', Gral::getVars(1, 'buscador_pde_recepcion_pde_recepcion_agrupacion_id'), Gral::getVars(1, 'buscador_pde_recepcion_pde_recepcion_agrupacion_id_comparador'));
	$criterio->add('pde_recepcion.observacion', Gral::getVars(1, 'buscador_pde_recepcion_observacion'), Gral::getVars(1, 'buscador_pde_recepcion_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_stock_movimiento', 'ins_stock_movimiento.pde_recepcion_id', 'pde_recepcion.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_tipo_movimiento', 'ins_stock_tipo_movimiento.id', 'ins_stock_movimiento.ins_stock_tipo_movimiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_stock_movimiento.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_pedido', 'pdi_pedido.id', 'ins_stock_movimiento.pdi_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'ins_stock_movimiento.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito', 'vta_remito.id', 'ins_stock_movimiento.vta_remito_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_transformacion', 'ins_stock_transformacion.id', 'ins_stock_movimiento.ins_stock_transformacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_estado', 'pde_recepcion_estado.pde_recepcion_id', 'pde_recepcion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado', 'pde_recepcion_tipo_estado.id', 'pde_recepcion_estado.pde_recepcion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_recepcion_estado.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_estado_facturacion', 'pde_recepcion_estado_facturacion.pde_recepcion_id', 'pde_recepcion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado_facturacion', 'pde_recepcion_tipo_estado_facturacion.id', 'pde_recepcion_estado_facturacion.pde_recepcion_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_destinatario', 'pde_recepcion_destinatario.pde_recepcion_id', 'pde_recepcion.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'pde_recepcion_destinatario.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_recepcion', 'pde_factura_pde_recepcion.pde_recepcion_id', 'pde_recepcion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.id', 'pde_factura_pde_recepcion.pde_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida', 'ins_unidad_medida.id', 'pde_factura_pde_recepcion.ins_unidad_medida_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'pde_factura_pde_recepcion.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.id', 'pde_factura_pde_recepcion.ins_insumo_costo_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_recepcion');
		$criterio->setCriterios();		
}
?>

