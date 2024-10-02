<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(WsFeOpeSolicitud::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ws_fe_ope_solicitud.id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud.descripcion', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_descripcion'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_descripcion_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_param_punto_venta_id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_punto_venta_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_punto_venta_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_param_tipo_comprobante_id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_comprobante_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_comprobante_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_param_tipo_concepto_id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_concepto_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_concepto_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_param_tipo_documento_id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_documento_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_documento_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_param_tipo_moneda_id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_moneda_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_param_tipo_moneda_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud.gral_empresa_id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_gral_empresa_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_gral_empresa_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_cantidad_registro', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_cantidad_registro'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_cantidad_registro_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_punto_venta', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_punto_venta'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_punto_venta_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_tipo_comprobante', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_comprobante'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_comprobante_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_tipo_concepto', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_concepto'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_concepto_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_tipo_documento', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_documento'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_documento_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_numero_documento', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_numero_documento'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_numero_documento_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_comprobante_desde', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_desde'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_desde_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_comprobante_hasta', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_hasta'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_hasta_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_comprobante_fecha', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_fecha'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_comprobante_fecha_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_importe_total', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_total'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_total_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_importe_total_concepto', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_total_concepto'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_total_concepto_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_importe_neto', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_neto'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_neto_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_importe_operacion_exenta', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_operacion_exenta'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_operacion_exenta_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_importe_tributo', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_tributo'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_tributo_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_importe_iva', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_iva'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_importe_iva_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_fecha_servicio_desde', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_fecha_servicio_desde'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_fecha_servicio_desde_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_fecha_servicio_hasta', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_fecha_servicio_hasta'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_fecha_servicio_hasta_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_vencimiento_pago', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_vencimiento_pago'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_vencimiento_pago_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_tipo_moneda', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_moneda'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_tipo_moneda_comparador'));
	$criterio->add('ws_fe_ope_solicitud.ws_fe_afip_cotizacion_moneda', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_cotizacion_moneda'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_ws_fe_afip_cotizacion_moneda_comparador'));
	$criterio->add('ws_fe_ope_solicitud.observacion', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_observacion'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_observacion_comparador'));
	$criterio->add('ws_fe_ope_solicitud.estado', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_estado'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_nota_credito_ws_fe_ope_solicitud', 'vta_nota_credito_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id', 'ws_fe_ope_solicitud.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.id', 'vta_nota_credito_ws_fe_ope_solicitud.vta_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_ws_fe_ope_solicitud', 'vta_nota_debito_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id', 'ws_fe_ope_solicitud.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.id', 'vta_nota_debito_ws_fe_ope_solicitud.vta_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_ws_fe_ope_solicitud', 'vta_recibo_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id', 'ws_fe_ope_solicitud.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.id', 'vta_recibo_ws_fe_ope_solicitud.vta_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_ws_fe_ope_solicitud', 'vta_factura_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id', 'ws_fe_ope_solicitud.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'vta_factura_ws_fe_ope_solicitud.vta_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud_iva', 'ws_fe_ope_solicitud_iva.ws_fe_ope_solicitud_id', 'ws_fe_ope_solicitud.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_iva', 'ws_fe_param_tipo_iva.id', 'ws_fe_ope_solicitud_iva.ws_fe_param_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud_opcional', 'ws_fe_ope_solicitud_opcional.ws_fe_ope_solicitud_id', 'ws_fe_ope_solicitud.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud_comprobante_asociado', 'ws_fe_ope_solicitud_comprobante_asociado.ws_fe_ope_solicitud_id', 'ws_fe_ope_solicitud.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud_tributo', 'ws_fe_ope_solicitud_tributo.ws_fe_ope_solicitud_id', 'ws_fe_ope_solicitud.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_tributo', 'ws_fe_param_tipo_tributo.id', 'ws_fe_ope_solicitud_tributo.ws_fe_param_tipo_tributo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud_respuesta', 'ws_fe_ope_solicitud_respuesta.ws_fe_ope_solicitud_id', 'ws_fe_ope_solicitud.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ws_fe_ope_solicitud');
		$criterio->setCriterios();		
}
?>

