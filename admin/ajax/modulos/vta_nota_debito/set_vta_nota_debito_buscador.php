<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaNotaDebito::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_nota_debito.id', Gral::getVars(1, 'buscador_vta_nota_debito_id'), Gral::getVars(1, 'buscador_vta_nota_debito_id_comparador'));
	$criterio->add('vta_nota_debito.descripcion', Gral::getVars(1, 'buscador_vta_nota_debito_descripcion'), Gral::getVars(1, 'buscador_vta_nota_debito_descripcion_comparador'));
	$criterio->add('vta_nota_debito.cli_cliente_id', Gral::getVars(1, 'buscador_vta_nota_debito_cli_cliente_id'), Gral::getVars(1, 'buscador_vta_nota_debito_cli_cliente_id_comparador'));
	$criterio->add('vta_nota_debito.vta_tipo_nota_debito_id', Gral::getVars(1, 'buscador_vta_nota_debito_vta_tipo_nota_debito_id'), Gral::getVars(1, 'buscador_vta_nota_debito_vta_tipo_nota_debito_id_comparador'));
	$criterio->add('vta_nota_debito.vta_tipo_origen_nota_debito_id', Gral::getVars(1, 'buscador_vta_nota_debito_vta_tipo_origen_nota_debito_id'), Gral::getVars(1, 'buscador_vta_nota_debito_vta_tipo_origen_nota_debito_id_comparador'));
	$criterio->add('vta_nota_debito.gral_condicion_iva_id', Gral::getVars(1, 'buscador_vta_nota_debito_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_vta_nota_debito_gral_condicion_iva_id_comparador'));
	$criterio->add('vta_nota_debito.gral_tipo_personeria_id', Gral::getVars(1, 'buscador_vta_nota_debito_gral_tipo_personeria_id'), Gral::getVars(1, 'buscador_vta_nota_debito_gral_tipo_personeria_id_comparador'));
	$criterio->add('vta_nota_debito.gral_empresa_id', Gral::getVars(1, 'buscador_vta_nota_debito_gral_empresa_id'), Gral::getVars(1, 'buscador_vta_nota_debito_gral_empresa_id_comparador'));
	$criterio->add('vta_nota_debito.vta_nota_debito_tipo_estado_id', Gral::getVars(1, 'buscador_vta_nota_debito_vta_nota_debito_tipo_estado_id'), Gral::getVars(1, 'buscador_vta_nota_debito_vta_nota_debito_tipo_estado_id_comparador'));
	$criterio->add('vta_nota_debito.vta_punto_venta_id', Gral::getVars(1, 'buscador_vta_nota_debito_vta_punto_venta_id'), Gral::getVars(1, 'buscador_vta_nota_debito_vta_punto_venta_id_comparador'));
	$criterio->add('vta_nota_debito.gral_fp_forma_pago_id', Gral::getVars(1, 'buscador_vta_nota_debito_gral_fp_forma_pago_id'), Gral::getVars(1, 'buscador_vta_nota_debito_gral_fp_forma_pago_id_comparador'));
	$criterio->add('vta_nota_debito.vta_preventista_id', Gral::getVars(1, 'buscador_vta_nota_debito_vta_preventista_id'), Gral::getVars(1, 'buscador_vta_nota_debito_vta_preventista_id_comparador'));
	$criterio->add('vta_nota_debito.gral_actividad_id', Gral::getVars(1, 'buscador_vta_nota_debito_gral_actividad_id'), Gral::getVars(1, 'buscador_vta_nota_debito_gral_actividad_id_comparador'));
	$criterio->add('vta_nota_debito.gral_escenario_id', Gral::getVars(1, 'buscador_vta_nota_debito_gral_escenario_id'), Gral::getVars(1, 'buscador_vta_nota_debito_gral_escenario_id_comparador'));
	$criterio->add('vta_nota_debito.numero_punto_venta', Gral::getVars(1, 'buscador_vta_nota_debito_numero_punto_venta'), Gral::getVars(1, 'buscador_vta_nota_debito_numero_punto_venta_comparador'));
	$criterio->add('vta_nota_debito.numero_nota_debito', Gral::getVars(1, 'buscador_vta_nota_debito_numero_nota_debito'), Gral::getVars(1, 'buscador_vta_nota_debito_numero_nota_debito_comparador'));
	$criterio->add('vta_nota_debito.numero_nota_debito_completo', Gral::getVars(1, 'buscador_vta_nota_debito_numero_nota_debito_completo'), Gral::getVars(1, 'buscador_vta_nota_debito_numero_nota_debito_completo_comparador'));
	$criterio->add('vta_nota_debito.cae', Gral::getVars(1, 'buscador_vta_nota_debito_cae'), Gral::getVars(1, 'buscador_vta_nota_debito_cae_comparador'));
	$criterio->add('vta_nota_debito.fecha_emision', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_nota_debito_fecha_emision')), Gral::getVars(1, 'buscador_vta_nota_debito_fecha_emision_comparador'));
	$criterio->add('vta_nota_debito.fecha_vencimiento', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_nota_debito_fecha_vencimiento')), Gral::getVars(1, 'buscador_vta_nota_debito_fecha_vencimiento_comparador'));
	$criterio->add('vta_nota_debito.gral_tipo_documento_id', Gral::getVars(1, 'buscador_vta_nota_debito_gral_tipo_documento_id'), Gral::getVars(1, 'buscador_vta_nota_debito_gral_tipo_documento_id_comparador'));
	$criterio->add('vta_nota_debito.persona_descripcion', Gral::getVars(1, 'buscador_vta_nota_debito_persona_descripcion'), Gral::getVars(1, 'buscador_vta_nota_debito_persona_descripcion_comparador'));
	$criterio->add('vta_nota_debito.persona_documento', Gral::getVars(1, 'buscador_vta_nota_debito_persona_documento'), Gral::getVars(1, 'buscador_vta_nota_debito_persona_documento_comparador'));
	$criterio->add('vta_nota_debito.persona_email', Gral::getVars(1, 'buscador_vta_nota_debito_persona_email'), Gral::getVars(1, 'buscador_vta_nota_debito_persona_email_comparador'));
	$criterio->add('vta_nota_debito.razon_social', Gral::getVars(1, 'buscador_vta_nota_debito_razon_social'), Gral::getVars(1, 'buscador_vta_nota_debito_razon_social_comparador'));
	$criterio->add('vta_nota_debito.domicilio_legal', Gral::getVars(1, 'buscador_vta_nota_debito_domicilio_legal'), Gral::getVars(1, 'buscador_vta_nota_debito_domicilio_legal_comparador'));
	$criterio->add('vta_nota_debito.cuit', Gral::getVars(1, 'buscador_vta_nota_debito_cuit'), Gral::getVars(1, 'buscador_vta_nota_debito_cuit_comparador'));
	$criterio->add('vta_nota_debito.codigo', Gral::getVars(1, 'buscador_vta_nota_debito_codigo'), Gral::getVars(1, 'buscador_vta_nota_debito_codigo_comparador'));
	$criterio->add('vta_nota_debito.nota_publica', Gral::getVars(1, 'buscador_vta_nota_debito_nota_publica'), Gral::getVars(1, 'buscador_vta_nota_debito_nota_publica_comparador'));
	$criterio->add('vta_nota_debito.anio', Gral::getVars(1, 'buscador_vta_nota_debito_anio'), Gral::getVars(1, 'buscador_vta_nota_debito_anio_comparador'));
	$criterio->add('vta_nota_debito.gral_mes_id', Gral::getVars(1, 'buscador_vta_nota_debito_gral_mes_id'), Gral::getVars(1, 'buscador_vta_nota_debito_gral_mes_id_comparador'));
	$criterio->add('vta_nota_debito.cntb_diario_asiento_id', Gral::getVars(1, 'buscador_vta_nota_debito_cntb_diario_asiento_id'), Gral::getVars(1, 'buscador_vta_nota_debito_cntb_diario_asiento_id_comparador'));
	$criterio->add('vta_nota_debito.observacion', Gral::getVars(1, 'buscador_vta_nota_debito_observacion'), Gral::getVars(1, 'buscador_vta_nota_debito_observacion_comparador'));
	$criterio->add('vta_nota_debito.nota_interna', Gral::getVars(1, 'buscador_vta_nota_debito_nota_interna'), Gral::getVars(1, 'buscador_vta_nota_debito_nota_interna_comparador'));
	$criterio->add('vta_nota_debito.estado', Gral::getVars(1, 'buscador_vta_nota_debito_estado'), Gral::getVars(1, 'buscador_vta_nota_debito_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_nota_debito_estado', 'vta_nota_debito_estado.vta_nota_debito_id', 'vta_nota_debito.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_tipo_estado', 'vta_nota_debito_tipo_estado.id', 'vta_nota_debito_estado.vta_nota_debito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_ws_fe_ope_solicitud', 'vta_nota_debito_ws_fe_ope_solicitud.vta_nota_debito_id', 'vta_nota_debito.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud', 'ws_fe_ope_solicitud.id', 'vta_nota_debito_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_vta_tributo', 'vta_nota_debito_vta_tributo.vta_nota_debito_id', 'vta_nota_debito.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tributo', 'vta_tributo.id', 'vta_nota_debito_vta_tributo.vta_tributo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_vta_nota_credito', 'vta_nota_debito_vta_nota_credito.vta_nota_debito_id', 'vta_nota_debito.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.id', 'vta_nota_debito_vta_nota_credito.vta_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_vta_recibo', 'vta_nota_debito_vta_recibo.vta_nota_debito_id', 'vta_nota_debito.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.id', 'vta_nota_debito_vta_recibo.vta_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_enviado', 'vta_nota_debito_enviado.vta_nota_debito_id', 'vta_nota_debito.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_item', 'vta_nota_debito_item.vta_nota_debito_id', 'vta_nota_debito.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_nota_debito_item.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_concepto', 'vta_nota_debito_concepto.id', 'vta_nota_debito_item.vta_nota_debito_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_vta_nota_debito', 'cntb_diario_asiento_vta_nota_debito.vta_nota_debito_id', 'vta_nota_debito.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_periodo', 'cntb_periodo.id', 'cntb_diario_asiento_vta_nota_debito.cntb_periodo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'cntb_diario_asiento_vta_nota_debito.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_ventas_cbte', 'afip_citi_ventas_cbte.vta_nota_debito_id', 'vta_nota_debito.id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_prc', 'afip_citi_prc.id', 'afip_citi_ventas_cbte.afip_citi_prc_id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_cabecera', 'afip_citi_cabecera.id', 'afip_citi_ventas_cbte.afip_citi_cabecera_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'afip_citi_ventas_cbte.vta_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_ventas_alicuotas', 'afip_citi_ventas_alicuotas.vta_nota_debito_id', 'vta_nota_debito.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_nota_debito');
		$criterio->setCriterios();		
}
?>

