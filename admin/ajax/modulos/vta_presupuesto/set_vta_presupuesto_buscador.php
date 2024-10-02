<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaPresupuesto::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_presupuesto.id', Gral::getVars(1, 'buscador_vta_presupuesto_id'), Gral::getVars(1, 'buscador_vta_presupuesto_id_comparador'));
	$criterio->add('vta_presupuesto.descripcion', Gral::getVars(1, 'buscador_vta_presupuesto_descripcion'), Gral::getVars(1, 'buscador_vta_presupuesto_descripcion_comparador'));
	$criterio->add('vta_presupuesto.cli_cliente_id', Gral::getVars(1, 'buscador_vta_presupuesto_cli_cliente_id'), Gral::getVars(1, 'buscador_vta_presupuesto_cli_cliente_id_comparador'));
	$criterio->add('vta_presupuesto.vta_vendedor_id', Gral::getVars(1, 'buscador_vta_presupuesto_vta_vendedor_id'), Gral::getVars(1, 'buscador_vta_presupuesto_vta_vendedor_id_comparador'));
	$criterio->add('vta_presupuesto.vta_comprador_id', Gral::getVars(1, 'buscador_vta_presupuesto_vta_comprador_id'), Gral::getVars(1, 'buscador_vta_presupuesto_vta_comprador_id_comparador'));
	$criterio->add('vta_presupuesto.vta_preventista_id', Gral::getVars(1, 'buscador_vta_presupuesto_vta_preventista_id'), Gral::getVars(1, 'buscador_vta_presupuesto_vta_preventista_id_comparador'));
	$criterio->add('vta_presupuesto.gral_actividad_id', Gral::getVars(1, 'buscador_vta_presupuesto_gral_actividad_id'), Gral::getVars(1, 'buscador_vta_presupuesto_gral_actividad_id_comparador'));
	$criterio->add('vta_presupuesto.gral_escenario_id', Gral::getVars(1, 'buscador_vta_presupuesto_gral_escenario_id'), Gral::getVars(1, 'buscador_vta_presupuesto_gral_escenario_id_comparador'));
	$criterio->add('vta_presupuesto.gral_fp_forma_pago_id', Gral::getVars(1, 'buscador_vta_presupuesto_gral_fp_forma_pago_id'), Gral::getVars(1, 'buscador_vta_presupuesto_gral_fp_forma_pago_id_comparador'));
	$criterio->add('vta_presupuesto.gral_fp_cuota_id', Gral::getVars(1, 'buscador_vta_presupuesto_gral_fp_cuota_id'), Gral::getVars(1, 'buscador_vta_presupuesto_gral_fp_cuota_id_comparador'));
	$criterio->add('vta_presupuesto.ins_tipo_lista_precio_id', Gral::getVars(1, 'buscador_vta_presupuesto_ins_tipo_lista_precio_id'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_tipo_lista_precio_id_comparador'));
	$criterio->add('vta_presupuesto.vta_presupuesto_tipo_estado_id', Gral::getVars(1, 'buscador_vta_presupuesto_vta_presupuesto_tipo_estado_id'), Gral::getVars(1, 'buscador_vta_presupuesto_vta_presupuesto_tipo_estado_id_comparador'));
	$criterio->add('vta_presupuesto.gral_condicion_iva_id', Gral::getVars(1, 'buscador_vta_presupuesto_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_vta_presupuesto_gral_condicion_iva_id_comparador'));
	$criterio->add('vta_presupuesto.vta_presupuesto_tipo_emision_id', Gral::getVars(1, 'buscador_vta_presupuesto_vta_presupuesto_tipo_emision_id'), Gral::getVars(1, 'buscador_vta_presupuesto_vta_presupuesto_tipo_emision_id_comparador'));
	$criterio->add('vta_presupuesto.gral_tipo_documento_id', Gral::getVars(1, 'buscador_vta_presupuesto_gral_tipo_documento_id'), Gral::getVars(1, 'buscador_vta_presupuesto_gral_tipo_documento_id_comparador'));
	$criterio->add('vta_presupuesto.persona_descripcion', Gral::getVars(1, 'buscador_vta_presupuesto_persona_descripcion'), Gral::getVars(1, 'buscador_vta_presupuesto_persona_descripcion_comparador'));
	$criterio->add('vta_presupuesto.persona_documento', Gral::getVars(1, 'buscador_vta_presupuesto_persona_documento'), Gral::getVars(1, 'buscador_vta_presupuesto_persona_documento_comparador'));
	$criterio->add('vta_presupuesto.persona_email', Gral::getVars(1, 'buscador_vta_presupuesto_persona_email'), Gral::getVars(1, 'buscador_vta_presupuesto_persona_email_comparador'));
	$criterio->add('vta_presupuesto.fecha', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_presupuesto_fecha')), Gral::getVars(1, 'buscador_vta_presupuesto_fecha_comparador'));
	$criterio->add('vta_presupuesto.fecha_vencimiento', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_presupuesto_fecha_vencimiento')), Gral::getVars(1, 'buscador_vta_presupuesto_fecha_vencimiento_comparador'));
	$criterio->add('vta_presupuesto.fecha_entrega', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_presupuesto_fecha_entrega')), Gral::getVars(1, 'buscador_vta_presupuesto_fecha_entrega_comparador'));
	$criterio->add('vta_presupuesto.fecha_recordatorio', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_presupuesto_fecha_recordatorio')), Gral::getVars(1, 'buscador_vta_presupuesto_fecha_recordatorio_comparador'));
	$criterio->add('vta_presupuesto.importe_subtotal', Gral::getVars(1, 'buscador_vta_presupuesto_importe_subtotal'), Gral::getVars(1, 'buscador_vta_presupuesto_importe_subtotal_comparador'));
	$criterio->add('vta_presupuesto.importe_descuento', Gral::getVars(1, 'buscador_vta_presupuesto_importe_descuento'), Gral::getVars(1, 'buscador_vta_presupuesto_importe_descuento_comparador'));
	$criterio->add('vta_presupuesto.importe_politica_descuento', Gral::getVars(1, 'buscador_vta_presupuesto_importe_politica_descuento'), Gral::getVars(1, 'buscador_vta_presupuesto_importe_politica_descuento_comparador'));
	$criterio->add('vta_presupuesto.importe_recargo', Gral::getVars(1, 'buscador_vta_presupuesto_importe_recargo'), Gral::getVars(1, 'buscador_vta_presupuesto_importe_recargo_comparador'));
	$criterio->add('vta_presupuesto.importe_total', Gral::getVars(1, 'buscador_vta_presupuesto_importe_total'), Gral::getVars(1, 'buscador_vta_presupuesto_importe_total_comparador'));
	$criterio->add('vta_presupuesto.cantidad_items', Gral::getVars(1, 'buscador_vta_presupuesto_cantidad_items'), Gral::getVars(1, 'buscador_vta_presupuesto_cantidad_items_comparador'));
	$criterio->add('vta_presupuesto.recargo', Gral::getVars(1, 'buscador_vta_presupuesto_recargo'), Gral::getVars(1, 'buscador_vta_presupuesto_recargo_comparador'));
	$criterio->add('vta_presupuesto.nota_interna', Gral::getVars(1, 'buscador_vta_presupuesto_nota_interna'), Gral::getVars(1, 'buscador_vta_presupuesto_nota_interna_comparador'));
	$criterio->add('vta_presupuesto.nota_recordatorio', Gral::getVars(1, 'buscador_vta_presupuesto_nota_recordatorio'), Gral::getVars(1, 'buscador_vta_presupuesto_nota_recordatorio_comparador'));
	$criterio->add('vta_presupuesto.gral_sucursal_id', Gral::getVars(1, 'buscador_vta_presupuesto_gral_sucursal_id'), Gral::getVars(1, 'buscador_vta_presupuesto_gral_sucursal_id_comparador'));
	$criterio->add('vta_presupuesto.incluye_logistica', Gral::getVars(1, 'buscador_vta_presupuesto_incluye_logistica'), Gral::getVars(1, 'buscador_vta_presupuesto_incluye_logistica_comparador'));
	$criterio->add('vta_presupuesto.porcentaje_logistica', Gral::getVars(1, 'buscador_vta_presupuesto_porcentaje_logistica'), Gral::getVars(1, 'buscador_vta_presupuesto_porcentaje_logistica_comparador'));
	$criterio->add('vta_presupuesto.importe_logistica', Gral::getVars(1, 'buscador_vta_presupuesto_importe_logistica'), Gral::getVars(1, 'buscador_vta_presupuesto_importe_logistica_comparador'));
	$criterio->add('vta_presupuesto.codigo', Gral::getVars(1, 'buscador_vta_presupuesto_codigo'), Gral::getVars(1, 'buscador_vta_presupuesto_codigo_comparador'));
	$criterio->add('vta_presupuesto.observacion', Gral::getVars(1, 'buscador_vta_presupuesto_observacion'), Gral::getVars(1, 'buscador_vta_presupuesto_observacion_comparador'));
	$criterio->add('vta_presupuesto.estado', Gral::getVars(1, 'buscador_vta_presupuesto_estado'), Gral::getVars(1, 'buscador_vta_presupuesto_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_presupuesto_estado', 'vta_presupuesto_estado.vta_presupuesto_id', 'vta_presupuesto.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_estado', 'vta_presupuesto_tipo_estado.id', 'vta_presupuesto_estado.vta_presupuesto_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.vta_presupuesto_id', 'vta_presupuesto.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_presupuesto_ins_insumo.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_presupuesto_ins_insumo.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_lista_precio', 'ins_lista_precio.id', 'vta_presupuesto_ins_insumo.ins_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.id', 'vta_presupuesto_ins_insumo.ins_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento', 'vta_politica_descuento.id', 'vta_presupuesto_ins_insumo.vta_politica_descuento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento_rango', 'vta_politica_descuento_rango.id', 'vta_presupuesto_ins_insumo.vta_politica_descuento_rango_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_bulto', 'ins_insumo_bulto.id', 'vta_presupuesto_ins_insumo.ins_insumo_bulto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_enviado', 'vta_presupuesto_enviado.vta_presupuesto_id', 'vta_presupuesto.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_veh_coche', 'vta_presupuesto_veh_coche.vta_presupuesto_id', 'vta_presupuesto.id', 'LEFT JOIN');
	$criterio->addRealJoin('veh_coche', 'veh_coche.id', 'vta_presupuesto_veh_coche.veh_coche_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.vta_presupuesto_id', 'vta_presupuesto.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_recibo.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_recibo', 'vta_tipo_recibo.id', 'vta_recibo.vta_tipo_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_recibo', 'vta_tipo_origen_recibo.id', 'vta_recibo.vta_tipo_origen_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'vta_recibo.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'vta_recibo.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'vta_recibo.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.id', 'vta_recibo.vta_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_tipo_estado', 'vta_recibo_tipo_estado.id', 'vta_recibo.vta_recibo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'vta_recibo.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'vta_recibo.vta_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'vta_recibo.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'vta_recibo.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'vta_recibo.fnd_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_recibo.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.vta_presupuesto_id', 'vta_presupuesto.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'vta_orden_venta.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado', 'vta_orden_venta_tipo_estado.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_facturacion', 'vta_orden_venta_tipo_estado_facturacion.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_remision', 'vta_orden_venta_tipo_estado_remision.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_remision_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito', 'vta_remito.vta_presupuesto_id', 'vta_presupuesto.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_tipo_estado', 'vta_remito_tipo_estado.id', 'vta_remito.vta_remito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_centro_recepcion', 'cli_centro_recepcion.id', 'vta_remito.cli_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'vta_remito.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.vta_presupuesto_id', 'vta_presupuesto.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_tipo_estado', 'vta_factura_tipo_estado.id', 'vta_factura.vta_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_factura', 'vta_tipo_factura.id', 'vta_factura.vta_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_factura', 'vta_tipo_origen_factura.id', 'vta_factura.vta_tipo_origen_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_factura.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_cuota', 'gral_fp_cuota.id', 'vta_factura.gral_fp_cuota_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'vta_factura.vta_comprador_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_factura.vta_vendedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'vta_factura.gral_actividad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'vta_factura.gral_escenario_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_presupuesto');
		$criterio->setCriterios();		
}
?>

