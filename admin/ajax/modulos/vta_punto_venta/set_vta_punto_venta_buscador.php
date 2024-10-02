<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaPuntoVenta::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_punto_venta.id', Gral::getVars(1, 'buscador_vta_punto_venta_id'), Gral::getVars(1, 'buscador_vta_punto_venta_id_comparador'));
	$criterio->add('vta_punto_venta.descripcion', Gral::getVars(1, 'buscador_vta_punto_venta_descripcion'), Gral::getVars(1, 'buscador_vta_punto_venta_descripcion_comparador'));
	$criterio->add('vta_punto_venta.vta_tipo_punto_venta_id', Gral::getVars(1, 'buscador_vta_punto_venta_vta_tipo_punto_venta_id'), Gral::getVars(1, 'buscador_vta_punto_venta_vta_tipo_punto_venta_id_comparador'));
	$criterio->add('vta_punto_venta.gral_empresa_id', Gral::getVars(1, 'buscador_vta_punto_venta_gral_empresa_id'), Gral::getVars(1, 'buscador_vta_punto_venta_gral_empresa_id_comparador'));
	$criterio->add('vta_punto_venta.geo_localidad_id', Gral::getVars(1, 'buscador_vta_punto_venta_geo_localidad_id'), Gral::getVars(1, 'buscador_vta_punto_venta_geo_localidad_id_comparador'));
	$criterio->add('vta_punto_venta.domicilio_fiscal', Gral::getVars(1, 'buscador_vta_punto_venta_domicilio_fiscal'), Gral::getVars(1, 'buscador_vta_punto_venta_domicilio_fiscal_comparador'));
	$criterio->add('vta_punto_venta.codigo', Gral::getVars(1, 'buscador_vta_punto_venta_codigo'), Gral::getVars(1, 'buscador_vta_punto_venta_codigo_comparador'));
	$criterio->add('vta_punto_venta.numero', Gral::getVars(1, 'buscador_vta_punto_venta_numero'), Gral::getVars(1, 'buscador_vta_punto_venta_numero_comparador'));
	$criterio->add('vta_punto_venta.numero_timbrado', Gral::getVars(1, 'buscador_vta_punto_venta_numero_timbrado'), Gral::getVars(1, 'buscador_vta_punto_venta_numero_timbrado_comparador'));
	$criterio->add('vta_punto_venta.fecha_inicio_timbrado', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_punto_venta_fecha_inicio_timbrado')), Gral::getVars(1, 'buscador_vta_punto_venta_fecha_inicio_timbrado_comparador'));
	$criterio->add('vta_punto_venta.serie', Gral::getVars(1, 'buscador_vta_punto_venta_serie'), Gral::getVars(1, 'buscador_vta_punto_venta_serie_comparador'));
	$criterio->add('vta_punto_venta.numero_actual', Gral::getVars(1, 'buscador_vta_punto_venta_numero_actual'), Gral::getVars(1, 'buscador_vta_punto_venta_numero_actual_comparador'));
	$criterio->add('vta_punto_venta.tipo_emision', Gral::getVars(1, 'buscador_vta_punto_venta_tipo_emision'), Gral::getVars(1, 'buscador_vta_punto_venta_tipo_emision_comparador'));
	$criterio->add('vta_punto_venta.bloqueado', Gral::getVars(1, 'buscador_vta_punto_venta_bloqueado'), Gral::getVars(1, 'buscador_vta_punto_venta_bloqueado_comparador'));
	$criterio->add('vta_punto_venta.fecha_baja', Gral::getVars(1, 'buscador_vta_punto_venta_fecha_baja'), Gral::getVars(1, 'buscador_vta_punto_venta_fecha_baja_comparador'));
	$criterio->add('vta_punto_venta.requiere_cae', Gral::getVars(1, 'buscador_vta_punto_venta_requiere_cae'), Gral::getVars(1, 'buscador_vta_punto_venta_requiere_cae_comparador'));
	$criterio->add('vta_punto_venta.solicita_cae', Gral::getVars(1, 'buscador_vta_punto_venta_solicita_cae'), Gral::getVars(1, 'buscador_vta_punto_venta_solicita_cae_comparador'));
	$criterio->add('vta_punto_venta.autoincremental', Gral::getVars(1, 'buscador_vta_punto_venta_autoincremental'), Gral::getVars(1, 'buscador_vta_punto_venta_autoincremental_comparador'));
	$criterio->add('vta_punto_venta.observacion', Gral::getVars(1, 'buscador_vta_punto_venta_observacion'), Gral::getVars(1, 'buscador_vta_punto_venta_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	$criterio->add('geo_localidad.geo_provincia_id', Gral::getVars(1, 'buscador_vta_punto_venta_geo_provincia_id'), Gral::getVars(1, 'buscador_vta_punto_venta_geo_provincia_id_comparador'));
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'vta_punto_venta.geo_localidad_id', 'LEFT JOIN');
	
	
	$criterio->add('geo_provincia.geo_pais_id', Gral::getVars(1, 'buscador_vta_punto_venta_geo_pais_id'), Gral::getVars(1, 'buscador_vta_punto_venta_geo_pais_id_comparador'));
	$criterio->addRealJoin('geo_provincia', 'geo_provincia.id', 'geo_localidad.geo_provincia_id', 'LEFT JOIN');
	
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_sucursal_vta_punto_venta', 'gral_sucursal_vta_punto_venta.vta_punto_venta_id', 'vta_punto_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'gral_sucursal_vta_punto_venta.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_vta_punto_venta', 'cli_cliente_vta_punto_venta.vta_punto_venta_id', 'vta_punto_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'cli_cliente_vta_punto_venta.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.vta_punto_venta_id', 'vta_punto_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_nota_credito', 'vta_tipo_nota_credito.id', 'vta_nota_credito.vta_tipo_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_nota_credito', 'vta_tipo_origen_nota_credito.id', 'vta_nota_credito.vta_tipo_origen_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'vta_nota_credito.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'vta_nota_credito.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'vta_nota_credito.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_tipo_estado', 'vta_nota_credito_tipo_estado.id', 'vta_nota_credito.vta_nota_credito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_nota_credito.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'vta_nota_credito.vta_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'vta_nota_credito.gral_actividad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'vta_nota_credito.gral_escenario_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'vta_nota_credito.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'vta_nota_credito.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'vta_nota_credito.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.vta_punto_venta_id', 'vta_punto_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_nota_debito', 'vta_tipo_nota_debito.id', 'vta_nota_debito.vta_tipo_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_nota_debito', 'vta_tipo_origen_nota_debito.id', 'vta_nota_debito.vta_tipo_origen_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_tipo_estado', 'vta_nota_debito_tipo_estado.id', 'vta_nota_debito.vta_nota_debito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.vta_punto_venta_id', 'vta_punto_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_recibo', 'vta_tipo_recibo.id', 'vta_recibo.vta_tipo_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_recibo', 'vta_tipo_origen_recibo.id', 'vta_recibo.vta_tipo_origen_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_tipo_estado', 'vta_recibo_tipo_estado.id', 'vta_recibo.vta_recibo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_condicion_pago', 'vta_recibo_condicion_pago.id', 'vta_recibo.vta_recibo_condicion_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_tipo_pago', 'vta_recibo_tipo_pago.id', 'vta_recibo.vta_recibo_tipo_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_recibo.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'vta_recibo.fnd_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta_actual', 'vta_punto_venta_actual.vta_punto_venta_id', 'vta_punto_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_punto_venta', 'vta_tipo_punto_venta.id', 'vta_punto_venta_actual.vta_tipo_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta_ws_fe_param_punto_venta', 'vta_punto_venta_ws_fe_param_punto_venta.vta_punto_venta_id', 'vta_punto_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_punto_venta', 'ws_fe_param_punto_venta.id', 'vta_punto_venta_ws_fe_param_punto_venta.ws_fe_param_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta_vta_presupuesto_tipo_venta', 'vta_punto_venta_vta_presupuesto_tipo_venta.vta_punto_venta_id', 'vta_punto_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_venta', 'vta_presupuesto_tipo_venta.id', 'vta_punto_venta_vta_presupuesto_tipo_venta.vta_presupuesto_tipo_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito', 'vta_remito.vta_punto_venta_id', 'vta_punto_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_tipo_despacho', 'vta_remito_tipo_despacho.id', 'vta_remito.vta_remito_tipo_despacho_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_tipo_estado', 'vta_remito_tipo_estado.id', 'vta_remito.vta_remito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_remito', 'vta_tipo_remito.id', 'vta_remito.vta_tipo_remito_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_centro_recepcion', 'cli_centro_recepcion.id', 'vta_remito.cli_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'vta_remito.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa_transportadora', 'gral_empresa_transportadora.id', 'vta_remito.gral_empresa_transportadora_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.vta_punto_venta_id', 'vta_punto_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_tipo_estado', 'vta_factura_tipo_estado.id', 'vta_factura.vta_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_factura', 'vta_tipo_factura.id', 'vta_factura.vta_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_factura', 'vta_tipo_origen_factura.id', 'vta_factura.vta_tipo_origen_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_cuota', 'gral_fp_cuota.id', 'vta_factura.gral_fp_cuota_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'vta_factura.vta_comprador_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_factura.vta_vendedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe', 'vta_ajuste_debe.vta_punto_venta_id', 'vta_punto_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe_tipo_estado', 'vta_ajuste_debe_tipo_estado.id', 'vta_ajuste_debe.vta_ajuste_debe_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_ajuste_debe', 'vta_tipo_ajuste_debe.id', 'vta_ajuste_debe.vta_tipo_ajuste_debe_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_ajuste_debe', 'vta_tipo_origen_ajuste_debe.id', 'vta_ajuste_debe.vta_tipo_origen_ajuste_debe_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber', 'vta_ajuste_haber.vta_punto_venta_id', 'vta_punto_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_ajuste_haber', 'vta_tipo_ajuste_haber.id', 'vta_ajuste_haber.vta_tipo_ajuste_haber_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_ajuste_haber', 'vta_tipo_origen_ajuste_haber.id', 'vta_ajuste_haber.vta_tipo_origen_ajuste_haber_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber_tipo_estado', 'vta_ajuste_haber_tipo_estado.id', 'vta_ajuste_haber.vta_ajuste_haber_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber_condicion_pago', 'vta_ajuste_haber_condicion_pago.id', 'vta_ajuste_haber.vta_ajuste_haber_condicion_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber_tipo_pago', 'vta_ajuste_haber_tipo_pago.id', 'vta_ajuste_haber.vta_ajuste_haber_tipo_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_ajuste', 'vta_remito_ajuste.vta_punto_venta_id', 'vta_punto_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_ajuste_tipo_despacho', 'vta_remito_ajuste_tipo_despacho.id', 'vta_remito_ajuste.vta_remito_ajuste_tipo_despacho_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_ajuste_tipo_estado', 'vta_remito_ajuste_tipo_estado.id', 'vta_remito_ajuste.vta_remito_ajuste_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_remito_ajuste', 'vta_tipo_remito_ajuste.id', 'vta_remito_ajuste.vta_tipo_remito_ajuste_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_punto_venta');
		$criterio->setCriterios();		
}
?>

