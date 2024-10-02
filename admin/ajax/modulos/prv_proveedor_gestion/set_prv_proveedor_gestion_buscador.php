<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrvProveedor::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prv_proveedor.id', Gral::getVars(1, 'buscador_prv_proveedor_id'), Gral::getVars(1, 'buscador_prv_proveedor_id_comparador'));
	$criterio->add('prv_proveedor.descripcion', Gral::getVars(1, 'buscador_prv_proveedor_descripcion'), Gral::getVars(1, 'buscador_prv_proveedor_descripcion_comparador'));
	$criterio->add('prv_proveedor.gral_tipo_personeria_id', Gral::getVars(1, 'buscador_prv_proveedor_gral_tipo_personeria_id'), Gral::getVars(1, 'buscador_prv_proveedor_gral_tipo_personeria_id_comparador'));
	$criterio->add('prv_proveedor.gral_condicion_iva_id', Gral::getVars(1, 'buscador_prv_proveedor_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_prv_proveedor_gral_condicion_iva_id_comparador'));
	$criterio->add('prv_proveedor.geo_localidad_id', Gral::getVars(1, 'buscador_prv_proveedor_geo_localidad_id'), Gral::getVars(1, 'buscador_prv_proveedor_geo_localidad_id_comparador'));
	$criterio->add('prv_proveedor.razon_social', Gral::getVars(1, 'buscador_prv_proveedor_razon_social'), Gral::getVars(1, 'buscador_prv_proveedor_razon_social_comparador'));
	$criterio->add('prv_proveedor.cuit', Gral::getVars(1, 'buscador_prv_proveedor_cuit'), Gral::getVars(1, 'buscador_prv_proveedor_cuit_comparador'));
	$criterio->add('prv_proveedor.domicilio_legal', Gral::getVars(1, 'buscador_prv_proveedor_domicilio_legal'), Gral::getVars(1, 'buscador_prv_proveedor_domicilio_legal_comparador'));
	$criterio->add('prv_proveedor.telefono', Gral::getVars(1, 'buscador_prv_proveedor_telefono'), Gral::getVars(1, 'buscador_prv_proveedor_telefono_comparador'));
	$criterio->add('prv_proveedor.email', Gral::getVars(1, 'buscador_prv_proveedor_email'), Gral::getVars(1, 'buscador_prv_proveedor_email_comparador'));
	$criterio->add('prv_proveedor.codigo', Gral::getVars(1, 'buscador_prv_proveedor_codigo'), Gral::getVars(1, 'buscador_prv_proveedor_codigo_comparador'));
	$criterio->add('prv_proveedor.codigo_min', Gral::getVars(1, 'buscador_prv_proveedor_codigo_min'), Gral::getVars(1, 'buscador_prv_proveedor_codigo_min_comparador'));
	$criterio->add('prv_proveedor.prv_grupo_id', Gral::getVars(1, 'buscador_prv_proveedor_prv_grupo_id'), Gral::getVars(1, 'buscador_prv_proveedor_prv_grupo_id_comparador'));
	$criterio->add('prv_proveedor.prv_categoria_id', Gral::getVars(1, 'buscador_prv_proveedor_prv_categoria_id'), Gral::getVars(1, 'buscador_prv_proveedor_prv_categoria_id_comparador'));
	$criterio->add('prv_proveedor.codigo_postal', Gral::getVars(1, 'buscador_prv_proveedor_codigo_postal'), Gral::getVars(1, 'buscador_prv_proveedor_codigo_postal_comparador'));
	$criterio->add('prv_proveedor.puntaje_promedio', Gral::getVars(1, 'buscador_prv_proveedor_puntaje_promedio'), Gral::getVars(1, 'buscador_prv_proveedor_puntaje_promedio_comparador'));
	$criterio->add('prv_proveedor.observacion', Gral::getVars(1, 'buscador_prv_proveedor_observacion'), Gral::getVars(1, 'buscador_prv_proveedor_observacion_comparador'));
	$criterio->add('prv_proveedor.datos_migracion', Gral::getVars(1, 'buscador_prv_proveedor_gestion_datos_migracion'), Gral::getVars(1, 'buscador_prv_proveedor_gestion_datos_migracion_comparador'));
	$criterio->add('prv_proveedor.claves', Gral::getVars(1, 'buscador_prv_proveedor_claves'), Gral::getVars(1, 'buscador_prv_proveedor_claves_comparador'));
	
	// criterios agregados por dependencias
	
	$criterio->add('geo_localidad.geo_provincia_id', Gral::getVars(1, 'buscador_prv_proveedor_geo_provincia_id'), Gral::getVars(1, 'buscador_prv_proveedor_geo_provincia_id_comparador'));
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'prv_proveedor.geo_localidad_id', 'LEFT JOIN');
	
	
	$criterio->add('geo_provincia.geo_pais_id', Gral::getVars(1, 'buscador_prv_proveedor_geo_pais_id'), Gral::getVars(1, 'buscador_prv_proveedor_geo_pais_id_comparador'));
	$criterio->addRealJoin('geo_provincia', 'geo_provincia.id', 'geo_localidad.geo_provincia_id', 'LEFT JOIN');
	
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_insumo_prv_proveedor', 'ins_insumo_prv_proveedor.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_insumo_prv_proveedor.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_importacion', 'prv_importacion.id', 'ins_insumo_costo.prv_importacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_transformacion', 'ins_stock_transformacion.id', 'ins_insumo_costo.ins_stock_transformacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_preventista', 'prv_preventista.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_convenio_descuento', 'prv_convenio_descuento.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_financiero', 'prv_descuento_financiero.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_comercial', 'prv_descuento_comercial.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor_us_usuario', 'prv_proveedor_us_usuario.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'prv_proveedor_us_usuario.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor_ins_marca', 'prv_proveedor_ins_marca.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_marca', 'ins_marca.id', 'prv_proveedor_ins_marca.ins_marca_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_telefono', 'prv_telefono.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_telefono_tipo', 'prv_telefono_tipo.id', 'prv_telefono.prv_telefono_tipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_pais', 'geo_pais.id', 'prv_telefono.geo_pais_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_email', 'prv_email.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_domicilio', 'prv_domicilio.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor_prv_rubro', 'prv_proveedor_prv_rubro.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_rubro', 'prv_rubro.id', 'prv_proveedor_prv_rubro.prv_rubro_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo', 'prv_insumo.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_matriz', 'ins_matriz.id', 'prv_insumo.ins_matriz_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_importacion_tipo_estado', 'prv_importacion_tipo_estado.id', 'prv_importacion.prv_importacion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido_enviado', 'pde_pedido_enviado.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido', 'pde_pedido.id', 'pde_pedido_enviado.pde_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido_prv_proveedor', 'pde_pedido_prv_proveedor.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido_prv_proveedor_avisado', 'pde_pedido_prv_proveedor_avisado.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_cotizacion', 'pde_cotizacion.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_agrupacion', 'pde_oc_agrupacion.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_origen', 'pde_oc_tipo_origen.id', 'pde_oc_agrupacion.pde_oc_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_oc_agrupacion.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_oc_agrupacion.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_agrupacion_tipo_estado', 'pde_oc_agrupacion_tipo_estado.id', 'pde_oc_agrupacion.pde_oc_agrupacion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado', 'pde_oc_tipo_estado.id', 'pde_oc.pde_oc_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_recepcion', 'pde_oc_tipo_estado_recepcion.id', 'pde_oc.pde_oc_tipo_estado_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_facturacion', 'pde_oc_tipo_estado_facturacion.id', 'pde_oc.pde_oc_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo_costo', 'prv_insumo_costo.id', 'pde_oc.prv_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_agrupacion', 'pde_recepcion_agrupacion.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_recepcion', 'pde_tipo_recepcion.id', 'pde_recepcion_agrupacion.pde_tipo_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion', 'pde_recepcion.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado', 'pde_recepcion_tipo_estado.id', 'pde_recepcion.pde_recepcion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado_facturacion', 'pde_recepcion_tipo_estado_facturacion.id', 'pde_recepcion.pde_recepcion_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido_prv_proveedor', 'pde_centro_pedido_prv_proveedor.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_reclamo', 'pde_oc_reclamo.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_reclamo_motivo', 'pde_oc_reclamo_motivo.id', 'pde_oc_reclamo.pde_oc_reclamo_motivo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_tipo_estado', 'pde_factura_tipo_estado.id', 'pde_factura.pde_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_factura', 'pde_tipo_factura.id', 'pde_factura.pde_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_factura', 'pde_tipo_origen_factura.id', 'pde_factura.pde_tipo_origen_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'pde_factura.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'pde_factura.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'pde_factura.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'pde_factura.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'pde_factura.gral_actividad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'pde_factura.gral_escenario_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'pde_factura.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'pde_factura.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_nota_credito', 'pde_tipo_nota_credito.id', 'pde_nota_credito.pde_tipo_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_nota_credito', 'pde_tipo_origen_nota_credito.id', 'pde_nota_credito.pde_tipo_origen_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_tipo_estado', 'pde_nota_credito_tipo_estado.id', 'pde_nota_credito.pde_nota_credito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_nota_debito', 'pde_tipo_nota_debito.id', 'pde_nota_debito.pde_tipo_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_nota_debito', 'pde_tipo_origen_nota_debito.id', 'pde_nota_debito.pde_tipo_origen_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito_tipo_estado', 'pde_nota_debito_tipo_estado.id', 'pde_nota_debito.pde_nota_debito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo', 'pde_recibo.prv_proveedor_id', 'prv_proveedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_recibo', 'pde_tipo_recibo.id', 'pde_recibo.pde_tipo_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_recibo', 'pde_tipo_origen_recibo.id', 'pde_recibo.pde_tipo_origen_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_tipo_estado', 'pde_recibo_tipo_estado.id', 'pde_recibo.pde_recibo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago', 'pde_orden_pago.id', 'pde_recibo.pde_orden_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'pde_recibo.fnd_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_tipo_estado', 'pde_orden_pago_tipo_estado.id', 'pde_orden_pago.pde_orden_pago_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prv_proveedor');
		$criterio->setCriterios();		
}
?>

