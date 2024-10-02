<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaNotaCredito::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_nota_credito.id', Gral::getVars(1, 'buscador_vta_nota_credito_id'), Gral::getVars(1, 'buscador_vta_nota_credito_id_comparador'));
	$criterio->add('vta_nota_credito.descripcion', Gral::getVars(1, 'buscador_vta_nota_credito_descripcion'), Gral::getVars(1, 'buscador_vta_nota_credito_descripcion_comparador'));
	$criterio->add('vta_nota_credito.cli_cliente_id', Gral::getVars(1, 'buscador_vta_nota_credito_cli_cliente_id'), Gral::getVars(1, 'buscador_vta_nota_credito_cli_cliente_id_comparador'));
	$criterio->add('vta_nota_credito.vta_tipo_nota_credito_id', Gral::getVars(1, 'buscador_vta_nota_credito_vta_tipo_nota_credito_id'), Gral::getVars(1, 'buscador_vta_nota_credito_vta_tipo_nota_credito_id_comparador'));
	$criterio->add('vta_nota_credito.vta_tipo_origen_nota_credito_id', Gral::getVars(1, 'buscador_vta_nota_credito_vta_tipo_origen_nota_credito_id'), Gral::getVars(1, 'buscador_vta_nota_credito_vta_tipo_origen_nota_credito_id_comparador'));
	$criterio->add('vta_nota_credito.gral_condicion_iva_id', Gral::getVars(1, 'buscador_vta_nota_credito_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_vta_nota_credito_gral_condicion_iva_id_comparador'));
	$criterio->add('vta_nota_credito.gral_tipo_personeria_id', Gral::getVars(1, 'buscador_vta_nota_credito_gral_tipo_personeria_id'), Gral::getVars(1, 'buscador_vta_nota_credito_gral_tipo_personeria_id_comparador'));
	$criterio->add('vta_nota_credito.gral_empresa_id', Gral::getVars(1, 'buscador_vta_nota_credito_gral_empresa_id'), Gral::getVars(1, 'buscador_vta_nota_credito_gral_empresa_id_comparador'));
	$criterio->add('vta_nota_credito.vta_nota_credito_tipo_estado_id', Gral::getVars(1, 'buscador_vta_nota_credito_vta_nota_credito_tipo_estado_id'), Gral::getVars(1, 'buscador_vta_nota_credito_vta_nota_credito_tipo_estado_id_comparador'));
	$criterio->add('vta_nota_credito.vta_punto_venta_id', Gral::getVars(1, 'buscador_vta_nota_credito_vta_punto_venta_id'), Gral::getVars(1, 'buscador_vta_nota_credito_vta_punto_venta_id_comparador'));
	$criterio->add('vta_nota_credito.gral_fp_forma_pago_id', Gral::getVars(1, 'buscador_vta_nota_credito_gral_fp_forma_pago_id'), Gral::getVars(1, 'buscador_vta_nota_credito_gral_fp_forma_pago_id_comparador'));
	$criterio->add('vta_nota_credito.vta_preventista_id', Gral::getVars(1, 'buscador_vta_nota_credito_vta_preventista_id'), Gral::getVars(1, 'buscador_vta_nota_credito_vta_preventista_id_comparador'));
	$criterio->add('vta_nota_credito.gral_actividad_id', Gral::getVars(1, 'buscador_vta_nota_credito_gral_actividad_id'), Gral::getVars(1, 'buscador_vta_nota_credito_gral_actividad_id_comparador'));
	$criterio->add('vta_nota_credito.gral_escenario_id', Gral::getVars(1, 'buscador_vta_nota_credito_gral_escenario_id'), Gral::getVars(1, 'buscador_vta_nota_credito_gral_escenario_id_comparador'));
	$criterio->add('vta_nota_credito.numero_punto_venta', Gral::getVars(1, 'buscador_vta_nota_credito_numero_punto_venta'), Gral::getVars(1, 'buscador_vta_nota_credito_numero_punto_venta_comparador'));
	$criterio->add('vta_nota_credito.numero_nota_credito', Gral::getVars(1, 'buscador_vta_nota_credito_numero_nota_credito'), Gral::getVars(1, 'buscador_vta_nota_credito_numero_nota_credito_comparador'));
	$criterio->add('vta_nota_credito.numero_nota_credito_completo', Gral::getVars(1, 'buscador_vta_nota_credito_numero_nota_credito_completo'), Gral::getVars(1, 'buscador_vta_nota_credito_numero_nota_credito_completo_comparador'));
	$criterio->add('vta_nota_credito.cae', Gral::getVars(1, 'buscador_vta_nota_credito_cae'), Gral::getVars(1, 'buscador_vta_nota_credito_cae_comparador'));
	$criterio->add('vta_nota_credito.fecha_emision', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_nota_credito_fecha_emision')), Gral::getVars(1, 'buscador_vta_nota_credito_fecha_emision_comparador'));
	$criterio->add('vta_nota_credito.fecha_vencimiento', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_nota_credito_fecha_vencimiento')), Gral::getVars(1, 'buscador_vta_nota_credito_fecha_vencimiento_comparador'));
	$criterio->add('vta_nota_credito.gral_tipo_documento_id', Gral::getVars(1, 'buscador_vta_nota_credito_gral_tipo_documento_id'), Gral::getVars(1, 'buscador_vta_nota_credito_gral_tipo_documento_id_comparador'));
	$criterio->add('vta_nota_credito.persona_descripcion', Gral::getVars(1, 'buscador_vta_nota_credito_persona_descripcion'), Gral::getVars(1, 'buscador_vta_nota_credito_persona_descripcion_comparador'));
	$criterio->add('vta_nota_credito.persona_documento', Gral::getVars(1, 'buscador_vta_nota_credito_persona_documento'), Gral::getVars(1, 'buscador_vta_nota_credito_persona_documento_comparador'));
	$criterio->add('vta_nota_credito.persona_email', Gral::getVars(1, 'buscador_vta_nota_credito_persona_email'), Gral::getVars(1, 'buscador_vta_nota_credito_persona_email_comparador'));
	$criterio->add('vta_nota_credito.razon_social', Gral::getVars(1, 'buscador_vta_nota_credito_razon_social'), Gral::getVars(1, 'buscador_vta_nota_credito_razon_social_comparador'));
	$criterio->add('vta_nota_credito.domicilio_legal', Gral::getVars(1, 'buscador_vta_nota_credito_domicilio_legal'), Gral::getVars(1, 'buscador_vta_nota_credito_domicilio_legal_comparador'));
	$criterio->add('vta_nota_credito.cuit', Gral::getVars(1, 'buscador_vta_nota_credito_cuit'), Gral::getVars(1, 'buscador_vta_nota_credito_cuit_comparador'));
	$criterio->add('vta_nota_credito.codigo', Gral::getVars(1, 'buscador_vta_nota_credito_codigo'), Gral::getVars(1, 'buscador_vta_nota_credito_codigo_comparador'));
	$criterio->add('vta_nota_credito.nota_publica', Gral::getVars(1, 'buscador_vta_nota_credito_nota_publica'), Gral::getVars(1, 'buscador_vta_nota_credito_nota_publica_comparador'));
	$criterio->add('vta_nota_credito.anio', Gral::getVars(1, 'buscador_vta_nota_credito_anio'), Gral::getVars(1, 'buscador_vta_nota_credito_anio_comparador'));
	$criterio->add('vta_nota_credito.gral_mes_id', Gral::getVars(1, 'buscador_vta_nota_credito_gral_mes_id'), Gral::getVars(1, 'buscador_vta_nota_credito_gral_mes_id_comparador'));
	$criterio->add('vta_nota_credito.cntb_diario_asiento_id', Gral::getVars(1, 'buscador_vta_nota_credito_cntb_diario_asiento_id'), Gral::getVars(1, 'buscador_vta_nota_credito_cntb_diario_asiento_id_comparador'));
	$criterio->add('vta_nota_credito.observacion', Gral::getVars(1, 'buscador_vta_nota_credito_observacion'), Gral::getVars(1, 'buscador_vta_nota_credito_observacion_comparador'));
	$criterio->add('vta_nota_credito.nota_interna', Gral::getVars(1, 'buscador_vta_nota_credito_nota_interna'), Gral::getVars(1, 'buscador_vta_nota_credito_nota_interna_comparador'));
	$criterio->add('vta_nota_credito.estado', Gral::getVars(1, 'buscador_vta_nota_credito_estado'), Gral::getVars(1, 'buscador_vta_nota_credito_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_nota_credito_estado', 'vta_nota_credito_estado.vta_nota_credito_id', 'vta_nota_credito.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_tipo_estado', 'vta_nota_credito_tipo_estado.id', 'vta_nota_credito_estado.vta_nota_credito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_ws_fe_ope_solicitud', 'vta_nota_credito_ws_fe_ope_solicitud.vta_nota_credito_id', 'vta_nota_credito.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud', 'ws_fe_ope_solicitud.id', 'vta_nota_credito_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_vta_factura_vta_orden_venta', 'vta_nota_credito_vta_factura_vta_orden_venta.vta_nota_credito_id', 'vta_nota_credito.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_vta_orden_venta', 'vta_factura_vta_orden_venta.id', 'vta_nota_credito_vta_factura_vta_orden_venta.vta_factura_vta_orden_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_nota_credito_vta_factura_vta_orden_venta.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida', 'ins_unidad_medida.id', 'vta_nota_credito_vta_factura_vta_orden_venta.ins_unidad_medida_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_nota_credito_vta_factura_vta_orden_venta.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_vta_factura_vta_tributo', 'vta_nota_credito_vta_factura_vta_tributo.vta_nota_credito_id', 'vta_nota_credito.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_vta_tributo', 'vta_factura_vta_tributo.id', 'vta_nota_credito_vta_factura_vta_tributo.vta_factura_vta_tributo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_item', 'vta_nota_credito_item.vta_nota_credito_id', 'vta_nota_credito.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_concepto', 'vta_nota_credito_concepto.id', 'vta_nota_credito_item.vta_nota_credito_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_enviado', 'vta_nota_credito_enviado.vta_nota_credito_id', 'vta_nota_credito.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_vta_tributo', 'vta_nota_credito_vta_tributo.vta_nota_credito_id', 'vta_nota_credito.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tributo', 'vta_tributo.id', 'vta_nota_credito_vta_tributo.vta_tributo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_vta_nota_credito', 'vta_nota_debito_vta_nota_credito.vta_nota_credito_id', 'vta_nota_credito.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.id', 'vta_nota_debito_vta_nota_credito.vta_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_vta_nota_credito', 'vta_factura_vta_nota_credito.vta_nota_credito_id', 'vta_nota_credito.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'vta_factura_vta_nota_credito.vta_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_vta_nota_credito', 'cntb_diario_asiento_vta_nota_credito.vta_nota_credito_id', 'vta_nota_credito.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_periodo', 'cntb_periodo.id', 'cntb_diario_asiento_vta_nota_credito.cntb_periodo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'cntb_diario_asiento_vta_nota_credito.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_ventas_cbte', 'afip_citi_ventas_cbte.vta_nota_credito_id', 'vta_nota_credito.id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_prc', 'afip_citi_prc.id', 'afip_citi_ventas_cbte.afip_citi_prc_id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_cabecera', 'afip_citi_cabecera.id', 'afip_citi_ventas_cbte.afip_citi_cabecera_id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_ventas_alicuotas', 'afip_citi_ventas_alicuotas.vta_nota_credito_id', 'vta_nota_credito.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_nota_credito');
		$criterio->setCriterios();		
}
?>

