<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliCliente::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_cliente.id', Gral::getVars(1, 'buscador_cli_cliente_id'), Gral::getVars(1, 'buscador_cli_cliente_id_comparador'));
	$criterio->add('cli_cliente.descripcion', Gral::getVars(1, 'buscador_cli_cliente_descripcion'), Gral::getVars(1, 'buscador_cli_cliente_descripcion_comparador'));
	$criterio->add('cli_cliente.gral_tipo_personeria_id', Gral::getVars(1, 'buscador_cli_cliente_gral_tipo_personeria_id'), Gral::getVars(1, 'buscador_cli_cliente_gral_tipo_personeria_id_comparador'));
	$criterio->add('cli_cliente.gral_condicion_iva_id', Gral::getVars(1, 'buscador_cli_cliente_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_cli_cliente_gral_condicion_iva_id_comparador'));
	$criterio->add('cli_cliente.razon_social', Gral::getVars(1, 'buscador_cli_cliente_razon_social'), Gral::getVars(1, 'buscador_cli_cliente_razon_social_comparador'));
	$criterio->add('cli_cliente.gral_tipo_documento_id', Gral::getVars(1, 'buscador_cli_cliente_gral_tipo_documento_id'), Gral::getVars(1, 'buscador_cli_cliente_gral_tipo_documento_id_comparador'));
	$criterio->add('cli_cliente.cuit', Gral::getVars(1, 'buscador_cli_cliente_cuit'), Gral::getVars(1, 'buscador_cli_cliente_cuit_comparador'));
	$criterio->add('cli_cliente.domicilio_legal', Gral::getVars(1, 'buscador_cli_cliente_domicilio_legal'), Gral::getVars(1, 'buscador_cli_cliente_domicilio_legal_comparador'));
	$criterio->add('cli_cliente.telefono', Gral::getVars(1, 'buscador_cli_cliente_telefono'), Gral::getVars(1, 'buscador_cli_cliente_telefono_comparador'));
	$criterio->add('cli_cliente.email', Gral::getVars(1, 'buscador_cli_cliente_email'), Gral::getVars(1, 'buscador_cli_cliente_email_comparador'));
	$criterio->add('cli_cliente.codigo_postal', Gral::getVars(1, 'buscador_cli_cliente_codigo_postal'), Gral::getVars(1, 'buscador_cli_cliente_codigo_postal_comparador'));
	$criterio->add('cli_cliente.geo_localidad_id', Gral::getVars(1, 'buscador_cli_cliente_geo_localidad_id'), Gral::getVars(1, 'buscador_cli_cliente_geo_localidad_id_comparador'));
	$criterio->add('cli_cliente.codigo', Gral::getVars(1, 'buscador_cli_cliente_codigo'), Gral::getVars(1, 'buscador_cli_cliente_codigo_comparador'));
	$criterio->add('cli_cliente.limite_ctacte_importe', Gral::getVars(1, 'buscador_cli_cliente_limite_ctacte_importe'), Gral::getVars(1, 'buscador_cli_cliente_limite_ctacte_importe_comparador'));
	$criterio->add('cli_cliente.limite_ctacte_dias', Gral::getVars(1, 'buscador_cli_cliente_limite_ctacte_dias'), Gral::getVars(1, 'buscador_cli_cliente_limite_ctacte_dias_comparador'));
	$criterio->add('cli_cliente.cli_grupo_id', Gral::getVars(1, 'buscador_cli_cliente_cli_grupo_id'), Gral::getVars(1, 'buscador_cli_cliente_cli_grupo_id_comparador'));
	$criterio->add('cli_cliente.cli_categoria_id', Gral::getVars(1, 'buscador_cli_cliente_cli_categoria_id'), Gral::getVars(1, 'buscador_cli_cliente_cli_categoria_id_comparador'));
	$criterio->add('cli_cliente.observacion', Gral::getVars(1, 'buscador_cli_cliente_observacion'), Gral::getVars(1, 'buscador_cli_cliente_observacion_comparador'));
	$criterio->add('cli_cliente.datos_migracion', Gral::getVars(1, 'buscador_cli_cliente_gestion_datos_migracion'), Gral::getVars(1, 'buscador_cli_cliente_gestion_datos_migracion_comparador'));
	$criterio->add('cli_cliente.claves', Gral::getVars(1, 'buscador_cli_cliente_claves'), Gral::getVars(1, 'buscador_cli_cliente_claves_comparador'));
	$criterio->add('cli_cliente.estado', Gral::getVars(1, 'buscador_cli_cliente_estado'), Gral::getVars(1, 'buscador_cli_cliente_estado_comparador'));
	
	// criterios agregados por dependencias
	
	$criterio->add('geo_localidad.geo_provincia_id', Gral::getVars(1, 'buscador_cli_cliente_geo_provincia_id'), Gral::getVars(1, 'buscador_cli_cliente_geo_provincia_id_comparador'));
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'cli_cliente.geo_localidad_id', 'LEFT JOIN');
	
	
	$criterio->add('geo_provincia.geo_pais_id', Gral::getVars(1, 'buscador_cli_cliente_geo_pais_id'), Gral::getVars(1, 'buscador_cli_cliente_geo_pais_id_comparador'));
	$criterio->addRealJoin('geo_provincia', 'geo_provincia.id', 'geo_localidad.geo_provincia_id', 'LEFT JOIN');
	
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_sucursal_cli_cliente', 'gral_sucursal_cli_cliente.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'gral_sucursal_cli_cliente.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_telefono', 'cli_telefono.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_telefono_tipo', 'cli_telefono_tipo.id', 'cli_telefono.cli_telefono_tipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_pais', 'geo_pais.id', 'cli_telefono.geo_pais_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_email', 'cli_email.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_domicilio', 'cli_domicilio.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_cli_rubro', 'cli_cliente_cli_rubro.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_rubro', 'cli_rubro.id', 'cli_cliente_cli_rubro.cli_rubro_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_centro_recepcion', 'cli_centro_recepcion.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'cli_centro_recepcion.geo_localidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_centro_pedido', 'cli_centro_pedido.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'cli_centro_pedido.vta_comprador_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_medio_digital', 'cli_medio_digital.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_tipo_medio_digital', 'cli_tipo_medio_digital.id', 'cli_medio_digital.cli_tipo_medio_digital_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_vta_vendedor', 'cli_cliente_vta_vendedor.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'cli_cliente_vta_vendedor.vta_vendedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_ins_tipo_lista_precio', 'cli_cliente_ins_tipo_lista_precio.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'cli_cliente_ins_tipo_lista_precio.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_vta_preventista', 'cli_cliente_vta_preventista.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'cli_cliente_vta_preventista.vta_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_vta_comprador', 'cli_cliente_vta_comprador.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_gral_fp_agrupacion', 'cli_cliente_gral_fp_agrupacion.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_agrupacion', 'gral_fp_agrupacion.id', 'cli_cliente_gral_fp_agrupacion.gral_fp_agrupacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_gral_fp_cuota', 'cli_cliente_gral_fp_cuota.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_cuota', 'gral_fp_cuota.id', 'cli_cliente_gral_fp_cuota.gral_fp_cuota_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_gral_actividad', 'cli_cliente_gral_actividad.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'cli_cliente_gral_actividad.gral_actividad_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_vta_punto_venta', 'cli_cliente_vta_punto_venta.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.id', 'cli_cliente_vta_punto_venta.vta_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'vta_presupuesto.gral_escenario_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_presupuesto.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_estado', 'vta_presupuesto_tipo_estado.id', 'vta_presupuesto.vta_presupuesto_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'vta_presupuesto.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_emision', 'vta_presupuesto_tipo_emision.id', 'vta_presupuesto.vta_presupuesto_tipo_emision_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'vta_presupuesto.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tributo_exencion', 'vta_tributo_exencion.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tributo', 'vta_tributo.id', 'vta_tributo_exencion.vta_tributo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_nota_credito', 'vta_tipo_nota_credito.id', 'vta_nota_credito.vta_tipo_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_nota_credito', 'vta_tipo_origen_nota_credito.id', 'vta_nota_credito.vta_tipo_origen_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'vta_nota_credito.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'vta_nota_credito.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_tipo_estado', 'vta_nota_credito_tipo_estado.id', 'vta_nota_credito.vta_nota_credito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'vta_nota_credito.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'vta_nota_credito.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_nota_debito', 'vta_tipo_nota_debito.id', 'vta_nota_debito.vta_tipo_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_nota_debito', 'vta_tipo_origen_nota_debito.id', 'vta_nota_debito.vta_tipo_origen_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_tipo_estado', 'vta_nota_debito_tipo_estado.id', 'vta_nota_debito.vta_nota_debito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_recibo', 'vta_tipo_recibo.id', 'vta_recibo.vta_tipo_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_recibo', 'vta_tipo_origen_recibo.id', 'vta_recibo.vta_tipo_origen_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_tipo_estado', 'vta_recibo_tipo_estado.id', 'vta_recibo.vta_recibo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'vta_recibo.fnd_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito', 'vta_remito.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_tipo_estado', 'vta_remito_tipo_estado.id', 'vta_remito.vta_remito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'vta_remito.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_tipo_estado', 'vta_factura_tipo_estado.id', 'vta_factura.vta_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_factura', 'vta_tipo_factura.id', 'vta_factura.vta_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_factura', 'vta_tipo_origen_factura.id', 'vta_factura.vta_tipo_origen_factura_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_cliente');
		$criterio->setCriterios();		
}
?>

