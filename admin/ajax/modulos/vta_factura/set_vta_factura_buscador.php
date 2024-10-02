<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaFactura::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_factura.id', Gral::getVars(1, 'buscador_vta_factura_id'), Gral::getVars(1, 'buscador_vta_factura_id_comparador'));
	$criterio->add('vta_factura.descripcion', Gral::getVars(1, 'buscador_vta_factura_descripcion'), Gral::getVars(1, 'buscador_vta_factura_descripcion_comparador'));
	$criterio->add('vta_factura.cli_cliente_id', Gral::getVars(1, 'buscador_vta_factura_cli_cliente_id'), Gral::getVars(1, 'buscador_vta_factura_cli_cliente_id_comparador'));
	$criterio->add('vta_factura.vta_factura_tipo_estado_id', Gral::getVars(1, 'buscador_vta_factura_vta_factura_tipo_estado_id'), Gral::getVars(1, 'buscador_vta_factura_vta_factura_tipo_estado_id_comparador'));
	$criterio->add('vta_factura.vta_tipo_factura_id', Gral::getVars(1, 'buscador_vta_factura_vta_tipo_factura_id'), Gral::getVars(1, 'buscador_vta_factura_vta_tipo_factura_id_comparador'));
	$criterio->add('vta_factura.vta_tipo_origen_factura_id', Gral::getVars(1, 'buscador_vta_factura_vta_tipo_origen_factura_id'), Gral::getVars(1, 'buscador_vta_factura_vta_tipo_origen_factura_id_comparador'));
	$criterio->add('vta_factura.gral_condicion_iva_id', Gral::getVars(1, 'buscador_vta_factura_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_vta_factura_gral_condicion_iva_id_comparador'));
	$criterio->add('vta_factura.gral_tipo_personeria_id', Gral::getVars(1, 'buscador_vta_factura_gral_tipo_personeria_id'), Gral::getVars(1, 'buscador_vta_factura_gral_tipo_personeria_id_comparador'));
	$criterio->add('vta_factura.gral_empresa_id', Gral::getVars(1, 'buscador_vta_factura_gral_empresa_id'), Gral::getVars(1, 'buscador_vta_factura_gral_empresa_id_comparador'));
	$criterio->add('vta_factura.vta_punto_venta_id', Gral::getVars(1, 'buscador_vta_factura_vta_punto_venta_id'), Gral::getVars(1, 'buscador_vta_factura_vta_punto_venta_id_comparador'));
	$criterio->add('vta_factura.gral_fp_forma_pago_id', Gral::getVars(1, 'buscador_vta_factura_gral_fp_forma_pago_id'), Gral::getVars(1, 'buscador_vta_factura_gral_fp_forma_pago_id_comparador'));
	$criterio->add('vta_factura.gral_fp_cuota_id', Gral::getVars(1, 'buscador_vta_factura_gral_fp_cuota_id'), Gral::getVars(1, 'buscador_vta_factura_gral_fp_cuota_id_comparador'));
	$criterio->add('vta_factura.vta_preventista_id', Gral::getVars(1, 'buscador_vta_factura_vta_preventista_id'), Gral::getVars(1, 'buscador_vta_factura_vta_preventista_id_comparador'));
	$criterio->add('vta_factura.vta_comprador_id', Gral::getVars(1, 'buscador_vta_factura_vta_comprador_id'), Gral::getVars(1, 'buscador_vta_factura_vta_comprador_id_comparador'));
	$criterio->add('vta_factura.vta_vendedor_id', Gral::getVars(1, 'buscador_vta_factura_vta_vendedor_id'), Gral::getVars(1, 'buscador_vta_factura_vta_vendedor_id_comparador'));
	$criterio->add('vta_factura.gral_actividad_id', Gral::getVars(1, 'buscador_vta_factura_gral_actividad_id'), Gral::getVars(1, 'buscador_vta_factura_gral_actividad_id_comparador'));
	$criterio->add('vta_factura.gral_escenario_id', Gral::getVars(1, 'buscador_vta_factura_gral_escenario_id'), Gral::getVars(1, 'buscador_vta_factura_gral_escenario_id_comparador'));
	$criterio->add('vta_factura.numero_punto_venta', Gral::getVars(1, 'buscador_vta_factura_numero_punto_venta'), Gral::getVars(1, 'buscador_vta_factura_numero_punto_venta_comparador'));
	$criterio->add('vta_factura.numero_factura', Gral::getVars(1, 'buscador_vta_factura_numero_factura'), Gral::getVars(1, 'buscador_vta_factura_numero_factura_comparador'));
	$criterio->add('vta_factura.numero_factura_completo', Gral::getVars(1, 'buscador_vta_factura_numero_factura_completo'), Gral::getVars(1, 'buscador_vta_factura_numero_factura_completo_comparador'));
	$criterio->add('vta_factura.cae', Gral::getVars(1, 'buscador_vta_factura_cae'), Gral::getVars(1, 'buscador_vta_factura_cae_comparador'));
	$criterio->add('vta_factura.fecha_emision', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_factura_fecha_emision')), Gral::getVars(1, 'buscador_vta_factura_fecha_emision_comparador'));
	$criterio->add('vta_factura.fecha_vencimiento', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_factura_fecha_vencimiento')), Gral::getVars(1, 'buscador_vta_factura_fecha_vencimiento_comparador'));
	$criterio->add('vta_factura.gral_tipo_documento_id', Gral::getVars(1, 'buscador_vta_factura_gral_tipo_documento_id'), Gral::getVars(1, 'buscador_vta_factura_gral_tipo_documento_id_comparador'));
	$criterio->add('vta_factura.persona_descripcion', Gral::getVars(1, 'buscador_vta_factura_persona_descripcion'), Gral::getVars(1, 'buscador_vta_factura_persona_descripcion_comparador'));
	$criterio->add('vta_factura.persona_documento', Gral::getVars(1, 'buscador_vta_factura_persona_documento'), Gral::getVars(1, 'buscador_vta_factura_persona_documento_comparador'));
	$criterio->add('vta_factura.persona_email', Gral::getVars(1, 'buscador_vta_factura_persona_email'), Gral::getVars(1, 'buscador_vta_factura_persona_email_comparador'));
	$criterio->add('vta_factura.razon_social', Gral::getVars(1, 'buscador_vta_factura_razon_social'), Gral::getVars(1, 'buscador_vta_factura_razon_social_comparador'));
	$criterio->add('vta_factura.domicilio_legal', Gral::getVars(1, 'buscador_vta_factura_domicilio_legal'), Gral::getVars(1, 'buscador_vta_factura_domicilio_legal_comparador'));
	$criterio->add('vta_factura.cuit', Gral::getVars(1, 'buscador_vta_factura_cuit'), Gral::getVars(1, 'buscador_vta_factura_cuit_comparador'));
	$criterio->add('vta_factura.codigo', Gral::getVars(1, 'buscador_vta_factura_codigo'), Gral::getVars(1, 'buscador_vta_factura_codigo_comparador'));
	$criterio->add('vta_factura.vta_presupuesto_id', Gral::getVars(1, 'buscador_vta_factura_vta_presupuesto_id'), Gral::getVars(1, 'buscador_vta_factura_vta_presupuesto_id_comparador'));
	$criterio->add('vta_factura.nota_publica', Gral::getVars(1, 'buscador_vta_factura_nota_publica'), Gral::getVars(1, 'buscador_vta_factura_nota_publica_comparador'));
	$criterio->add('vta_factura.anio', Gral::getVars(1, 'buscador_vta_factura_anio'), Gral::getVars(1, 'buscador_vta_factura_anio_comparador'));
	$criterio->add('vta_factura.gral_mes_id', Gral::getVars(1, 'buscador_vta_factura_gral_mes_id'), Gral::getVars(1, 'buscador_vta_factura_gral_mes_id_comparador'));
	$criterio->add('vta_factura.cntb_diario_asiento_id', Gral::getVars(1, 'buscador_vta_factura_cntb_diario_asiento_id'), Gral::getVars(1, 'buscador_vta_factura_cntb_diario_asiento_id_comparador'));
	$criterio->add('vta_factura.gral_sucursal_id', Gral::getVars(1, 'buscador_vta_factura_gral_sucursal_id'), Gral::getVars(1, 'buscador_vta_factura_gral_sucursal_id_comparador'));
	$criterio->add('vta_factura.observacion', Gral::getVars(1, 'buscador_vta_factura_observacion'), Gral::getVars(1, 'buscador_vta_factura_observacion_comparador'));
	$criterio->add('vta_factura.nota_interna', Gral::getVars(1, 'buscador_vta_factura_nota_interna'), Gral::getVars(1, 'buscador_vta_factura_nota_interna_comparador'));
	$criterio->add('vta_factura.estado', Gral::getVars(1, 'buscador_vta_factura_estado'), Gral::getVars(1, 'buscador_vta_factura_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_factura_estado', 'vta_factura_estado.vta_factura_id', 'vta_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_tipo_estado', 'vta_factura_tipo_estado.id', 'vta_factura_estado.vta_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_item', 'vta_factura_item.vta_factura_id', 'vta_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_factura_item.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_concepto', 'vta_factura_concepto.id', 'vta_factura_item.vta_factura_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_vta_tributo', 'vta_factura_vta_tributo.vta_factura_id', 'vta_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tributo', 'vta_tributo.id', 'vta_factura_vta_tributo.vta_tributo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_vta_recibo', 'vta_factura_vta_recibo.vta_factura_id', 'vta_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.id', 'vta_factura_vta_recibo.vta_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_vta_nota_credito', 'vta_factura_vta_nota_credito.vta_factura_id', 'vta_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.id', 'vta_factura_vta_nota_credito.vta_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_ws_fe_ope_solicitud', 'vta_factura_ws_fe_ope_solicitud.vta_factura_id', 'vta_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud', 'ws_fe_ope_solicitud.id', 'vta_factura_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_enviado', 'vta_factura_enviado.vta_factura_id', 'vta_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_vta_orden_venta', 'vta_factura_vta_orden_venta.vta_factura_id', 'vta_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.id', 'vta_factura_vta_orden_venta.vta_orden_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_factura_vta_orden_venta.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida', 'ins_unidad_medida.id', 'vta_factura_vta_orden_venta.ins_unidad_medida_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.id', 'vta_factura_vta_orden_venta.ins_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision_vta_factura', 'vta_comision_vta_factura.vta_factura_id', 'vta_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision', 'vta_comision.id', 'vta_comision_vta_factura.vta_comision_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_vta_factura', 'cntb_diario_asiento_vta_factura.vta_factura_id', 'vta_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_periodo', 'cntb_periodo.id', 'cntb_diario_asiento_vta_factura.cntb_periodo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'cntb_diario_asiento_vta_factura.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_ventas_cbte', 'afip_citi_ventas_cbte.vta_factura_id', 'vta_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_prc', 'afip_citi_prc.id', 'afip_citi_ventas_cbte.afip_citi_prc_id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_cabecera', 'afip_citi_cabecera.id', 'afip_citi_ventas_cbte.afip_citi_cabecera_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.id', 'afip_citi_ventas_cbte.vta_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_ventas_alicuotas', 'afip_citi_ventas_alicuotas.vta_factura_id', 'vta_factura.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_factura');
		$criterio->setCriterios();		
}
?>

