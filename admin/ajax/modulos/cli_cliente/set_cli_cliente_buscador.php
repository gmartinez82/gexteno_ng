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
	$criterio->add('cli_cliente.cli_tipo_cliente_id', Gral::getVars(1, 'buscador_cli_cliente_cli_tipo_cliente_id'), Gral::getVars(1, 'buscador_cli_cliente_cli_tipo_cliente_id_comparador'));
	$criterio->add('cli_cliente.razon_social', Gral::getVars(1, 'buscador_cli_cliente_razon_social'), Gral::getVars(1, 'buscador_cli_cliente_razon_social_comparador'));
	$criterio->add('cli_cliente.gral_tipo_documento_id', Gral::getVars(1, 'buscador_cli_cliente_gral_tipo_documento_id'), Gral::getVars(1, 'buscador_cli_cliente_gral_tipo_documento_id_comparador'));
	$criterio->add('cli_cliente.cuit', Gral::getVars(1, 'buscador_cli_cliente_cuit'), Gral::getVars(1, 'buscador_cli_cliente_cuit_comparador'));
	$criterio->add('cli_cliente.domicilio_legal', Gral::getVars(1, 'buscador_cli_cliente_domicilio_legal'), Gral::getVars(1, 'buscador_cli_cliente_domicilio_legal_comparador'));
	$criterio->add('cli_cliente.numero_casa', Gral::getVars(1, 'buscador_cli_cliente_numero_casa'), Gral::getVars(1, 'buscador_cli_cliente_numero_casa_comparador'));
	$criterio->add('cli_cliente.telefono', Gral::getVars(1, 'buscador_cli_cliente_telefono'), Gral::getVars(1, 'buscador_cli_cliente_telefono_comparador'));
	$criterio->add('cli_cliente.telefono_whatsapp', Gral::getVars(1, 'buscador_cli_cliente_telefono_whatsapp'), Gral::getVars(1, 'buscador_cli_cliente_telefono_whatsapp_comparador'));
	$criterio->add('cli_cliente.email', Gral::getVars(1, 'buscador_cli_cliente_email'), Gral::getVars(1, 'buscador_cli_cliente_email_comparador'));
	$criterio->add('cli_cliente.codigo_postal', Gral::getVars(1, 'buscador_cli_cliente_codigo_postal'), Gral::getVars(1, 'buscador_cli_cliente_codigo_postal_comparador'));
	$criterio->add('cli_cliente.geo_localidad_id', Gral::getVars(1, 'buscador_cli_cliente_geo_localidad_id'), Gral::getVars(1, 'buscador_cli_cliente_geo_localidad_id_comparador'));
	$criterio->add('cli_cliente.geo_zona_id', Gral::getVars(1, 'buscador_cli_cliente_geo_zona_id'), Gral::getVars(1, 'buscador_cli_cliente_geo_zona_id_comparador'));
	$criterio->add('cli_cliente.codigo', Gral::getVars(1, 'buscador_cli_cliente_codigo'), Gral::getVars(1, 'buscador_cli_cliente_codigo_comparador'));
	$criterio->add('cli_cliente.cli_grupo_id', Gral::getVars(1, 'buscador_cli_cliente_cli_grupo_id'), Gral::getVars(1, 'buscador_cli_cliente_cli_grupo_id_comparador'));
	$criterio->add('cli_cliente.gral_empresa_transportadora_id', Gral::getVars(1, 'buscador_cli_cliente_gral_empresa_transportadora_id'), Gral::getVars(1, 'buscador_cli_cliente_gral_empresa_transportadora_id_comparador'));
	$criterio->add('cli_cliente.cli_categoria_id', Gral::getVars(1, 'buscador_cli_cliente_cli_categoria_id'), Gral::getVars(1, 'buscador_cli_cliente_cli_categoria_id_comparador'));
	$criterio->add('cli_cliente.cli_subcategoria_id', Gral::getVars(1, 'buscador_cli_cliente_cli_subcategoria_id'), Gral::getVars(1, 'buscador_cli_cliente_cli_subcategoria_id_comparador'));
	$criterio->add('cli_cliente.limite_ctacte_importe', Gral::getVars(1, 'buscador_cli_cliente_limite_ctacte_importe'), Gral::getVars(1, 'buscador_cli_cliente_limite_ctacte_importe_comparador'));
	$criterio->add('cli_cliente.limite_ctacte_dias', Gral::getVars(1, 'buscador_cli_cliente_limite_ctacte_dias'), Gral::getVars(1, 'buscador_cli_cliente_limite_ctacte_dias_comparador'));
	$criterio->add('cli_cliente.cli_cliente_tipo_gestion_id', Gral::getVars(1, 'buscador_cli_cliente_cli_cliente_tipo_gestion_id'), Gral::getVars(1, 'buscador_cli_cliente_cli_cliente_tipo_gestion_id_comparador'));
	$criterio->add('cli_cliente.cli_cliente_periodicidad_gestion_id', Gral::getVars(1, 'buscador_cli_cliente_cli_cliente_periodicidad_gestion_id'), Gral::getVars(1, 'buscador_cli_cliente_cli_cliente_periodicidad_gestion_id_comparador'));
	$criterio->add('cli_cliente.cli_cliente_tipo_estado_id', Gral::getVars(1, 'buscador_cli_cliente_cli_cliente_tipo_estado_id'), Gral::getVars(1, 'buscador_cli_cliente_cli_cliente_tipo_estado_id_comparador'));
	$criterio->add('cli_cliente.cli_cliente_tipo_estado_venta_id', Gral::getVars(1, 'buscador_cli_cliente_cli_cliente_tipo_estado_venta_id'), Gral::getVars(1, 'buscador_cli_cliente_cli_cliente_tipo_estado_venta_id_comparador'));
	$criterio->add('cli_cliente.cli_cliente_tipo_estado_cobro_id', Gral::getVars(1, 'buscador_cli_cliente_cli_cliente_tipo_estado_cobro_id'), Gral::getVars(1, 'buscador_cli_cliente_cli_cliente_tipo_estado_cobro_id_comparador'));
	$criterio->add('cli_cliente.cli_cliente_tipo_estado_cuenta_id', Gral::getVars(1, 'buscador_cli_cliente_cli_cliente_tipo_estado_cuenta_id'), Gral::getVars(1, 'buscador_cli_cliente_cli_cliente_tipo_estado_cuenta_id_comparador'));
	$criterio->add('cli_cliente.cli_cliente_tipo_estado_satisfaccion_id', Gral::getVars(1, 'buscador_cli_cliente_cli_cliente_tipo_estado_satisfaccion_id'), Gral::getVars(1, 'buscador_cli_cliente_cli_cliente_tipo_estado_satisfaccion_id_comparador'));
	$criterio->add('cli_cliente.iva_exceptuado', Gral::getVars(1, 'buscador_cli_cliente_iva_exceptuado'), Gral::getVars(1, 'buscador_cli_cliente_iva_exceptuado_comparador'));
	$criterio->add('cli_cliente.observacion', Gral::getVars(1, 'buscador_cli_cliente_observacion'), Gral::getVars(1, 'buscador_cli_cliente_observacion_comparador'));
	$criterio->add('cli_cliente.datos_migracion', Gral::getVars(1, 'buscador_cli_cliente_datos_migracion'), Gral::getVars(1, 'buscador_cli_cliente_datos_migracion_comparador'));
	$criterio->add('cli_cliente.claves', Gral::getVars(1, 'buscador_cli_cliente_claves'), Gral::getVars(1, 'buscador_cli_cliente_claves_comparador'));
	$criterio->add('cli_cliente.estado', Gral::getVars(1, 'buscador_cli_cliente_estado'), Gral::getVars(1, 'buscador_cli_cliente_estado_comparador'));
	
	// criterios agregados por dependencias
	
	$criterio->add('geo_localidad.geo_provincia_id', Gral::getVars(1, 'buscador_cli_cliente_geo_provincia_id'), Gral::getVars(1, 'buscador_cli_cliente_geo_provincia_id_comparador'));
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'cli_cliente.geo_localidad_id', 'LEFT JOIN');
	
	
	$criterio->add('geo_provincia.geo_pais_id', Gral::getVars(1, 'buscador_cli_cliente_geo_pais_id'), Gral::getVars(1, 'buscador_cli_cliente_geo_pais_id_comparador'));
	$criterio->addRealJoin('geo_provincia', 'geo_provincia.id', 'geo_localidad.geo_provincia_id', 'LEFT JOIN');
	
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_sucursal_valoracion', 'gral_sucursal_valoracion.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'gral_sucursal_valoracion.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal_cli_cliente', 'gral_sucursal_cli_cliente.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_ruta_geo_localidad_cli_centro_recepcion', 'gral_ruta_geo_localidad_cli_centro_recepcion.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_ruta', 'gral_ruta.id', 'gral_ruta_geo_localidad_cli_centro_recepcion.gral_ruta_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'gral_ruta_geo_localidad_cli_centro_recepcion.geo_localidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_centro_recepcion', 'cli_centro_recepcion.id', 'gral_ruta_geo_localidad_cli_centro_recepcion.cli_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_zona_cli_cliente', 'gral_zona_cli_cliente.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_zona', 'gral_zona.id', 'gral_zona_cli_cliente.gral_zona_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_resumen_cuenta', 'cli_cliente_resumen_cuenta.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_estado', 'cli_cliente_estado.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado', 'cli_cliente_tipo_estado.id', 'cli_cliente_estado.cli_cliente_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_estado_venta', 'cli_cliente_estado_venta.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado_venta', 'cli_cliente_tipo_estado_venta.id', 'cli_cliente_estado_venta.cli_cliente_tipo_estado_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_estado_cobro', 'cli_cliente_estado_cobro.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado_cobro', 'cli_cliente_tipo_estado_cobro.id', 'cli_cliente_estado_cobro.cli_cliente_tipo_estado_cobro_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_estado_cuenta', 'cli_cliente_estado_cuenta.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado_cuenta', 'cli_cliente_tipo_estado_cuenta.id', 'cli_cliente_estado_cuenta.cli_cliente_tipo_estado_cuenta_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_estado_satisfaccion', 'cli_cliente_estado_satisfaccion.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado_satisfaccion', 'cli_cliente_tipo_estado_satisfaccion.id', 'cli_cliente_estado_satisfaccion.cli_cliente_tipo_estado_satisfaccion_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_telefono', 'cli_telefono.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_telefono_tipo', 'cli_telefono_tipo.id', 'cli_telefono.cli_telefono_tipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_pais', 'geo_pais.id', 'cli_telefono.geo_pais_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_email', 'cli_email.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_domicilio', 'cli_domicilio.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_cli_rubro', 'cli_cliente_cli_rubro.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_rubro', 'cli_rubro.id', 'cli_cliente_cli_rubro.cli_rubro_id', 'LEFT JOIN');
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
	$criterio->addRealJoin('cli_cliente_info_sifen', 'cli_cliente_info_sifen.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'vta_presupuesto.gral_escenario_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_presupuesto.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_despacho', 'vta_presupuesto_tipo_despacho.id', 'vta_presupuesto.vta_presupuesto_tipo_despacho_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_estado', 'vta_presupuesto_tipo_estado.id', 'vta_presupuesto.vta_presupuesto_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'vta_presupuesto.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_emision', 'vta_presupuesto_tipo_emision.id', 'vta_presupuesto.vta_presupuesto_tipo_emision_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_venta', 'vta_presupuesto_tipo_venta.id', 'vta_presupuesto.vta_presupuesto_tipo_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_origen', 'vta_presupuesto_tipo_origen.id', 'vta_presupuesto.vta_presupuesto_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa_transportadora', 'gral_empresa_transportadora.id', 'vta_presupuesto.gral_empresa_transportadora_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_descuento_financiero', 'vta_descuento_financiero.id', 'vta_presupuesto.vta_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'vta_presupuesto.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_hoja_ruta', 'vta_hoja_ruta.id', 'vta_presupuesto.vta_hoja_ruta_id', 'LEFT JOIN');
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
	$criterio->addRealJoin('vta_recibo_condicion_pago', 'vta_recibo_condicion_pago.id', 'vta_recibo.vta_recibo_condicion_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_tipo_pago', 'vta_recibo_tipo_pago.id', 'vta_recibo.vta_recibo_tipo_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'vta_recibo.fnd_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito', 'vta_remito.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_tipo_despacho', 'vta_remito_tipo_despacho.id', 'vta_remito.vta_remito_tipo_despacho_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_tipo_estado', 'vta_remito_tipo_estado.id', 'vta_remito.vta_remito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_remito', 'vta_tipo_remito.id', 'vta_remito.vta_tipo_remito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'vta_remito.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_tipo_estado', 'vta_factura_tipo_estado.id', 'vta_factura.vta_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_factura', 'vta_tipo_factura.id', 'vta_factura.vta_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_factura', 'vta_tipo_origen_factura.id', 'vta_factura.vta_tipo_origen_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe', 'vta_ajuste_debe.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe_tipo_estado', 'vta_ajuste_debe_tipo_estado.id', 'vta_ajuste_debe.vta_ajuste_debe_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_ajuste_debe', 'vta_tipo_ajuste_debe.id', 'vta_ajuste_debe.vta_tipo_ajuste_debe_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_ajuste_debe', 'vta_tipo_origen_ajuste_debe.id', 'vta_ajuste_debe.vta_tipo_origen_ajuste_debe_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber', 'vta_ajuste_haber.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_ajuste_haber', 'vta_tipo_ajuste_haber.id', 'vta_ajuste_haber.vta_tipo_ajuste_haber_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_ajuste_haber', 'vta_tipo_origen_ajuste_haber.id', 'vta_ajuste_haber.vta_tipo_origen_ajuste_haber_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber_tipo_estado', 'vta_ajuste_haber_tipo_estado.id', 'vta_ajuste_haber.vta_ajuste_haber_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber_condicion_pago', 'vta_ajuste_haber_condicion_pago.id', 'vta_ajuste_haber.vta_ajuste_haber_condicion_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber_tipo_pago', 'vta_ajuste_haber_tipo_pago.id', 'vta_ajuste_haber.vta_ajuste_haber_tipo_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_ajuste', 'vta_remito_ajuste.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_ajuste_tipo_despacho', 'vta_remito_ajuste_tipo_despacho.id', 'vta_remito_ajuste.vta_remito_ajuste_tipo_despacho_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_ajuste_tipo_estado', 'vta_remito_ajuste_tipo_estado.id', 'vta_remito_ajuste.vta_remito_ajuste_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_remito_ajuste', 'vta_tipo_remito_ajuste.id', 'vta_remito_ajuste.vta_tipo_remito_ajuste_id', 'LEFT JOIN');
	$criterio->addRealJoin('cat_catalogo_cli_cliente', 'cat_catalogo_cli_cliente.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cat_catalogo', 'cat_catalogo.id', 'cat_catalogo_cli_cliente.cat_catalogo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tienda', 'cli_cliente_tienda.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tienda_clave', 'cli_cliente_tienda_clave.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tienda_login', 'cli_cliente_tienda_login.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tienda_navegacion', 'cli_cliente_tienda_navegacion.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('tnd_tienda_busqueda', 'tnd_tienda_busqueda.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_orden_trabajo', 'prd_orden_trabajo.cli_cliente_id', 'cli_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.id', 'prd_orden_trabajo.vta_presupuesto_ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_tipo_origen', 'prd_tipo_origen.id', 'prd_orden_trabajo.prd_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_proceso_productivo', 'prd_proceso_productivo.id', 'prd_orden_trabajo.prd_proceso_productivo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_prioridad', 'prd_prioridad.id', 'prd_orden_trabajo.prd_prioridad_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'prd_orden_trabajo.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_orden_trabajo_tipo_estado', 'prd_orden_trabajo_tipo_estado.id', 'prd_orden_trabajo.prd_orden_trabajo_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_cliente');
		$criterio->setCriterios();		
}
?>

