<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeOc::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_oc.id', Gral::getVars(1, 'buscador_pde_oc_id'), Gral::getVars(1, 'buscador_pde_oc_id_comparador'));
	$criterio->add('pde_oc.descripcion', Gral::getVars(1, 'buscador_pde_oc_descripcion'), Gral::getVars(1, 'buscador_pde_oc_descripcion_comparador'));
	$criterio->add('pde_oc.codigo', Gral::getVars(1, 'buscador_pde_oc_codigo'), Gral::getVars(1, 'buscador_pde_oc_codigo_comparador'));
	$criterio->add('pde_oc.pde_pedido_id', Gral::getVars(1, 'buscador_pde_oc_pde_pedido_id'), Gral::getVars(1, 'buscador_pde_oc_pde_pedido_id_comparador'));
	$criterio->add('pde_oc.pde_cotizacion_id', Gral::getVars(1, 'buscador_pde_oc_pde_cotizacion_id'), Gral::getVars(1, 'buscador_pde_oc_pde_cotizacion_id_comparador'));
	$criterio->add('pde_oc.prv_proveedor_id', Gral::getVars(1, 'buscador_pde_oc_prv_proveedor_id'), Gral::getVars(1, 'buscador_pde_oc_prv_proveedor_id_comparador'));
	$criterio->add('pde_oc.ins_insumo_id', Gral::getVars(1, 'buscador_pde_oc_ins_insumo_id'), Gral::getVars(1, 'buscador_pde_oc_ins_insumo_id_comparador'));
	$criterio->add('pde_oc.pde_oc_agrupacion_id', Gral::getVars(1, 'buscador_pde_oc_pde_oc_agrupacion_id'), Gral::getVars(1, 'buscador_pde_oc_pde_oc_agrupacion_id_comparador'));
	$criterio->add('pde_oc.pde_centro_pedido_id', Gral::getVars(1, 'buscador_pde_oc_pde_centro_pedido_id'), Gral::getVars(1, 'buscador_pde_oc_pde_centro_pedido_id_comparador'));
	$criterio->add('pde_oc.pde_centro_recepcion_id', Gral::getVars(1, 'buscador_pde_oc_pde_centro_recepcion_id'), Gral::getVars(1, 'buscador_pde_oc_pde_centro_recepcion_id_comparador'));
	$criterio->add('pde_oc.pde_oc_tipo_estado_id', Gral::getVars(1, 'buscador_pde_oc_pde_oc_tipo_estado_id'), Gral::getVars(1, 'buscador_pde_oc_pde_oc_tipo_estado_id_comparador'));
	$criterio->add('pde_oc.pde_oc_tipo_estado_recepcion_id', Gral::getVars(1, 'buscador_pde_oc_pde_oc_tipo_estado_recepcion_id'), Gral::getVars(1, 'buscador_pde_oc_pde_oc_tipo_estado_recepcion_id_comparador'));
	$criterio->add('pde_oc.pde_oc_tipo_estado_facturacion_id', Gral::getVars(1, 'buscador_pde_oc_pde_oc_tipo_estado_facturacion_id'), Gral::getVars(1, 'buscador_pde_oc_pde_oc_tipo_estado_facturacion_id_comparador'));
	$criterio->add('pde_oc.pde_oc_tipo_origen_id', Gral::getVars(1, 'buscador_pde_oc_pde_oc_tipo_origen_id'), Gral::getVars(1, 'buscador_pde_oc_pde_oc_tipo_origen_id_comparador'));
	$criterio->add('pde_oc.cantidad', Gral::getVars(1, 'buscador_pde_oc_cantidad'), Gral::getVars(1, 'buscador_pde_oc_cantidad_comparador'));
	$criterio->add('pde_oc.fecha_entrega', Gral::getFechaToDB(Gral::getVars(1, 'buscador_pde_oc_fecha_entrega')), Gral::getVars(1, 'buscador_pde_oc_fecha_entrega_comparador'));
	$criterio->add('pde_oc.vencimiento', Gral::getFechaToDB(Gral::getVars(1, 'buscador_pde_oc_vencimiento')), Gral::getVars(1, 'buscador_pde_oc_vencimiento_comparador'));
	$criterio->add('pde_oc.prv_insumo_id', Gral::getVars(1, 'buscador_pde_oc_prv_insumo_id'), Gral::getVars(1, 'buscador_pde_oc_prv_insumo_id_comparador'));
	$criterio->add('pde_oc.prv_insumo_costo_id', Gral::getVars(1, 'buscador_pde_oc_prv_insumo_costo_id'), Gral::getVars(1, 'buscador_pde_oc_prv_insumo_costo_id_comparador'));
	$criterio->add('pde_oc.importe_esperado', Gral::getVars(1, 'buscador_pde_oc_importe_esperado'), Gral::getVars(1, 'buscador_pde_oc_importe_esperado_comparador'));
	$criterio->add('pde_oc.afecta_costo', Gral::getVars(1, 'buscador_pde_oc_afecta_costo'), Gral::getVars(1, 'buscador_pde_oc_afecta_costo_comparador'));
	$criterio->add('pde_oc.prv_descuento_financiero_id', Gral::getVars(1, 'buscador_pde_oc_prv_descuento_financiero_id'), Gral::getVars(1, 'buscador_pde_oc_prv_descuento_financiero_id_comparador'));
	$criterio->add('pde_oc.prv_descuento_comercial_id', Gral::getVars(1, 'buscador_pde_oc_prv_descuento_comercial_id'), Gral::getVars(1, 'buscador_pde_oc_prv_descuento_comercial_id_comparador'));
	$criterio->add('pde_oc.nota_publica', Gral::getVars(1, 'buscador_pde_oc_nota_publica'), Gral::getVars(1, 'buscador_pde_oc_nota_publica_comparador'));
	$criterio->add('pde_oc.nota_interna', Gral::getVars(1, 'buscador_pde_oc_nota_interna'), Gral::getVars(1, 'buscador_pde_oc_nota_interna_comparador'));
	$criterio->add('pde_oc.observacion', Gral::getVars(1, 'buscador_pde_oc_observacion'), Gral::getVars(1, 'buscador_pde_oc_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_oc_estado', 'pde_oc_estado.pde_oc_id', 'pde_oc.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado', 'pde_oc_tipo_estado.id', 'pde_oc_estado.pde_oc_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_estado_recepcion', 'pde_oc_estado_recepcion.pde_oc_id', 'pde_oc.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_recepcion', 'pde_oc_tipo_estado_recepcion.id', 'pde_oc_estado_recepcion.pde_oc_tipo_estado_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_estado_facturacion', 'pde_oc_estado_facturacion.pde_oc_id', 'pde_oc.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_facturacion', 'pde_oc_tipo_estado_facturacion.id', 'pde_oc_estado_facturacion.pde_oc_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_enviado', 'pde_oc_enviado.pde_oc_id', 'pde_oc.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_destinatario', 'pde_oc_destinatario.pde_oc_id', 'pde_oc.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'pde_oc_destinatario.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_envio_email', 'pde_oc_envio_email.pde_oc_id', 'pde_oc.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion', 'pde_recepcion.pde_oc_id', 'pde_oc.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_recepcion', 'pde_tipo_recepcion.id', 'pde_recepcion.pde_tipo_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_recepcion.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_recepcion.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido', 'pde_pedido.id', 'pde_recepcion.pde_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_recepcion.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado', 'pde_recepcion_tipo_estado.id', 'pde_recepcion.pde_recepcion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado_facturacion', 'pde_recepcion_tipo_estado_facturacion.id', 'pde_recepcion.pde_recepcion_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_agrupacion', 'pde_recepcion_agrupacion.id', 'pde_recepcion.pde_recepcion_agrupacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_reclamo', 'pde_oc_reclamo.pde_oc_id', 'pde_oc.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_reclamo_motivo', 'pde_oc_reclamo_motivo.id', 'pde_oc_reclamo.pde_oc_reclamo_motivo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_oc', 'pde_factura_pde_oc.pde_oc_id', 'pde_oc.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.id', 'pde_factura_pde_oc.pde_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida', 'ins_unidad_medida.id', 'pde_factura_pde_oc.ins_unidad_medida_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'pde_factura_pde_oc.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.id', 'pde_factura_pde_oc.ins_insumo_costo_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_oc');
		$criterio->setCriterios();		
}
?>

