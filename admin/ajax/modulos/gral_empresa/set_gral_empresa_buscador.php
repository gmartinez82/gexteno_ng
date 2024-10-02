<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralEmpresa::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_empresa.id', Gral::getVars(1, 'buscador_gral_empresa_id'), Gral::getVars(1, 'buscador_gral_empresa_id_comparador'));
	$criterio->add('gral_empresa.descripcion', Gral::getVars(1, 'buscador_gral_empresa_descripcion'), Gral::getVars(1, 'buscador_gral_empresa_descripcion_comparador'));
	$criterio->add('gral_empresa.gral_tipo_personeria_id', Gral::getVars(1, 'buscador_gral_empresa_gral_tipo_personeria_id'), Gral::getVars(1, 'buscador_gral_empresa_gral_tipo_personeria_id_comparador'));
	$criterio->add('gral_empresa.gral_condicion_iva_id', Gral::getVars(1, 'buscador_gral_empresa_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_gral_empresa_gral_condicion_iva_id_comparador'));
	$criterio->add('gral_empresa.geo_localidad_id', Gral::getVars(1, 'buscador_gral_empresa_geo_localidad_id'), Gral::getVars(1, 'buscador_gral_empresa_geo_localidad_id_comparador'));
	$criterio->add('gral_empresa.cuit', Gral::getVars(1, 'buscador_gral_empresa_cuit'), Gral::getVars(1, 'buscador_gral_empresa_cuit_comparador'));
	$criterio->add('gral_empresa.razon_social', Gral::getVars(1, 'buscador_gral_empresa_razon_social'), Gral::getVars(1, 'buscador_gral_empresa_razon_social_comparador'));
	$criterio->add('gral_empresa.codigo_postal', Gral::getVars(1, 'buscador_gral_empresa_codigo_postal'), Gral::getVars(1, 'buscador_gral_empresa_codigo_postal_comparador'));
	$criterio->add('gral_empresa.domicilio_legal', Gral::getVars(1, 'buscador_gral_empresa_domicilio_legal'), Gral::getVars(1, 'buscador_gral_empresa_domicilio_legal_comparador'));
	$criterio->add('gral_empresa.telefono', Gral::getVars(1, 'buscador_gral_empresa_telefono'), Gral::getVars(1, 'buscador_gral_empresa_telefono_comparador'));
	$criterio->add('gral_empresa.email', Gral::getVars(1, 'buscador_gral_empresa_email'), Gral::getVars(1, 'buscador_gral_empresa_email_comparador'));
	$criterio->add('gral_empresa.fecha_inicio_actividad', Gral::getFechaToDB(Gral::getVars(1, 'buscador_gral_empresa_fecha_inicio_actividad')), Gral::getVars(1, 'buscador_gral_empresa_fecha_inicio_actividad_comparador'));
	$criterio->add('gral_empresa.codigo', Gral::getVars(1, 'buscador_gral_empresa_codigo'), Gral::getVars(1, 'buscador_gral_empresa_codigo_comparador'));
	$criterio->add('gral_empresa.afip_crt', Gral::getVars(1, 'buscador_gral_empresa_afip_crt'), Gral::getVars(1, 'buscador_gral_empresa_afip_crt_comparador'));
	$criterio->add('gral_empresa.afip_key', Gral::getVars(1, 'buscador_gral_empresa_afip_key'), Gral::getVars(1, 'buscador_gral_empresa_afip_key_comparador'));
	$criterio->add('gral_empresa.observacion', Gral::getVars(1, 'buscador_gral_empresa_observacion'), Gral::getVars(1, 'buscador_gral_empresa_observacion_comparador'));
	$criterio->add('gral_empresa.estado', Gral::getVars(1, 'buscador_gral_empresa_estado'), Gral::getVars(1, 'buscador_gral_empresa_estado_comparador'));
	
	// criterios agregados por dependencias
	
	$criterio->add('geo_localidad.geo_provincia_id', Gral::getVars(1, 'buscador_gral_empresa_geo_provincia_id'), Gral::getVars(1, 'buscador_gral_empresa_geo_provincia_id_comparador'));
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'gral_empresa.geo_localidad_id', 'LEFT JOIN');
	
	
	$criterio->add('geo_provincia.geo_pais_id', Gral::getVars(1, 'buscador_gral_empresa_geo_pais_id'), Gral::getVars(1, 'buscador_gral_empresa_geo_pais_id_comparador'));
	$criterio->addRealJoin('geo_provincia', 'geo_provincia.id', 'geo_localidad.geo_provincia_id', 'LEFT JOIN');
	
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.gral_empresa_id', 'gral_empresa.id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'gral_sucursal.geo_localidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.gral_empresa_id', 'gral_empresa.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_nota_credito.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_nota_credito', 'vta_tipo_nota_credito.id', 'vta_nota_credito.vta_tipo_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_nota_credito', 'vta_tipo_origen_nota_credito.id', 'vta_nota_credito.vta_tipo_origen_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'vta_nota_credito.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'vta_nota_credito.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_tipo_estado', 'vta_nota_credito_tipo_estado.id', 'vta_nota_credito.vta_nota_credito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.id', 'vta_nota_credito.vta_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_nota_credito.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'vta_nota_credito.vta_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'vta_nota_credito.gral_actividad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'vta_nota_credito.gral_escenario_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'vta_nota_credito.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'vta_nota_credito.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'vta_nota_credito.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.gral_empresa_id', 'gral_empresa.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_nota_debito', 'vta_tipo_nota_debito.id', 'vta_nota_debito.vta_tipo_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_nota_debito', 'vta_tipo_origen_nota_debito.id', 'vta_nota_debito.vta_tipo_origen_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_tipo_estado', 'vta_nota_debito_tipo_estado.id', 'vta_nota_debito.vta_nota_debito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.gral_empresa_id', 'gral_empresa.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_recibo', 'vta_tipo_recibo.id', 'vta_recibo.vta_tipo_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_recibo', 'vta_tipo_origen_recibo.id', 'vta_recibo.vta_tipo_origen_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_tipo_estado', 'vta_recibo_tipo_estado.id', 'vta_recibo.vta_recibo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_recibo.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'vta_recibo.fnd_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.gral_empresa_id', 'gral_empresa.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_tipo_estado', 'vta_factura_tipo_estado.id', 'vta_factura.vta_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_factura', 'vta_tipo_factura.id', 'vta_factura.vta_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_factura', 'vta_tipo_origen_factura.id', 'vta_factura.vta_tipo_origen_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_cuota', 'gral_fp_cuota.id', 'vta_factura.gral_fp_cuota_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'vta_factura.vta_comprador_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_factura.vta_vendedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_punto_venta', 'ws_fe_param_punto_venta.gral_empresa_id', 'gral_empresa.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud', 'ws_fe_ope_solicitud.gral_empresa_id', 'gral_empresa.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_comprobante', 'ws_fe_param_tipo_comprobante.id', 'ws_fe_ope_solicitud.ws_fe_param_tipo_comprobante_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_concepto', 'ws_fe_param_tipo_concepto.id', 'ws_fe_ope_solicitud.ws_fe_param_tipo_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_documento', 'ws_fe_param_tipo_documento.id', 'ws_fe_ope_solicitud.ws_fe_param_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_moneda', 'ws_fe_param_tipo_moneda.id', 'ws_fe_ope_solicitud.ws_fe_param_tipo_moneda_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.gral_empresa_id', 'gral_empresa.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_factura.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_tipo_estado', 'pde_factura_tipo_estado.id', 'pde_factura.pde_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_factura', 'pde_tipo_factura.id', 'pde_factura.pde_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_factura', 'pde_tipo_origen_factura.id', 'pde_factura.pde_tipo_origen_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_factura.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_financiero', 'prv_descuento_financiero.id', 'pde_factura.prv_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.gral_empresa_id', 'gral_empresa.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_nota_credito', 'pde_tipo_nota_credito.id', 'pde_nota_credito.pde_tipo_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_nota_credito', 'pde_tipo_origen_nota_credito.id', 'pde_nota_credito.pde_tipo_origen_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_tipo_estado', 'pde_nota_credito_tipo_estado.id', 'pde_nota_credito.pde_nota_credito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.gral_empresa_id', 'gral_empresa.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_nota_debito', 'pde_tipo_nota_debito.id', 'pde_nota_debito.pde_tipo_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_nota_debito', 'pde_tipo_origen_nota_debito.id', 'pde_nota_debito.pde_tipo_origen_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito_tipo_estado', 'pde_nota_debito_tipo_estado.id', 'pde_nota_debito.pde_nota_debito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo', 'pde_recibo.gral_empresa_id', 'gral_empresa.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_recibo', 'pde_tipo_recibo.id', 'pde_recibo.pde_tipo_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_recibo', 'pde_tipo_origen_recibo.id', 'pde_recibo.pde_tipo_origen_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_tipo_estado', 'pde_recibo_tipo_estado.id', 'pde_recibo.pde_recibo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago', 'pde_orden_pago.id', 'pde_recibo.pde_orden_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_tipo_estado', 'pde_orden_pago_tipo_estado.id', 'pde_orden_pago.pde_orden_pago_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_ejercicio', 'cntb_ejercicio.gral_empresa_id', 'gral_empresa.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_periodo', 'cntb_periodo.gral_empresa_id', 'gral_empresa.id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_prc', 'afip_citi_prc.gral_empresa_id', 'gral_empresa.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_empresa');
		$criterio->setCriterios();		
}
?>

