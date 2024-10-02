<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeCentroPedido::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_centro_pedido.id', Gral::getVars(1, 'buscador_pde_centro_pedido_id'), Gral::getVars(1, 'buscador_pde_centro_pedido_id_comparador'));
	$criterio->add('pde_centro_pedido.descripcion', Gral::getVars(1, 'buscador_pde_centro_pedido_descripcion'), Gral::getVars(1, 'buscador_pde_centro_pedido_descripcion_comparador'));
	$criterio->add('pde_centro_pedido.geo_localidad_id', Gral::getVars(1, 'buscador_pde_centro_pedido_geo_localidad_id'), Gral::getVars(1, 'buscador_pde_centro_pedido_geo_localidad_id_comparador'));
	$criterio->add('pde_centro_pedido.responsable', Gral::getVars(1, 'buscador_pde_centro_pedido_responsable'), Gral::getVars(1, 'buscador_pde_centro_pedido_responsable_comparador'));
	$criterio->add('pde_centro_pedido.email', Gral::getVars(1, 'buscador_pde_centro_pedido_email'), Gral::getVars(1, 'buscador_pde_centro_pedido_email_comparador'));
	$criterio->add('pde_centro_pedido.telefono', Gral::getVars(1, 'buscador_pde_centro_pedido_telefono'), Gral::getVars(1, 'buscador_pde_centro_pedido_telefono_comparador'));
	$criterio->add('pde_centro_pedido.domicilio', Gral::getVars(1, 'buscador_pde_centro_pedido_domicilio'), Gral::getVars(1, 'buscador_pde_centro_pedido_domicilio_comparador'));
	$criterio->add('pde_centro_pedido.empresa', Gral::getVars(1, 'buscador_pde_centro_pedido_empresa'), Gral::getVars(1, 'buscador_pde_centro_pedido_empresa_comparador'));
	$criterio->add('pde_centro_pedido.url_dominio', Gral::getVars(1, 'buscador_pde_centro_pedido_url_dominio'), Gral::getVars(1, 'buscador_pde_centro_pedido_url_dominio_comparador'));
	$criterio->add('pde_centro_pedido.email_prefijo', Gral::getVars(1, 'buscador_pde_centro_pedido_email_prefijo'), Gral::getVars(1, 'buscador_pde_centro_pedido_email_prefijo_comparador'));
	$criterio->add('pde_centro_pedido.codigo', Gral::getVars(1, 'buscador_pde_centro_pedido_codigo'), Gral::getVars(1, 'buscador_pde_centro_pedido_codigo_comparador'));
	$criterio->add('pde_centro_pedido.observacion', Gral::getVars(1, 'buscador_pde_centro_pedido_observacion'), Gral::getVars(1, 'buscador_pde_centro_pedido_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	$criterio->add('geo_localidad.geo_provincia_id', Gral::getVars(1, 'buscador_pde_centro_pedido_geo_provincia_id'), Gral::getVars(1, 'buscador_pde_centro_pedido_geo_provincia_id_comparador'));
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'pde_centro_pedido.geo_localidad_id', 'LEFT JOIN');
	
	
	$criterio->add('geo_provincia.geo_pais_id', Gral::getVars(1, 'buscador_pde_centro_pedido_geo_pais_id'), Gral::getVars(1, 'buscador_pde_centro_pedido_geo_pais_id_comparador'));
	$criterio->addRealJoin('geo_provincia', 'geo_provincia.id', 'geo_localidad.geo_provincia_id', 'LEFT JOIN');
	
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pan_panol', 'pan_panol.pde_centro_pedido_id', 'pde_centro_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_tipo_panol', 'pan_tipo_panol.id', 'pan_panol.pan_tipo_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido', 'pde_pedido.pde_centro_pedido_id', 'pde_centro_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_pedido.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_urgencia', 'pde_urgencia.id', 'pde_pedido.pde_urgencia_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_estado', 'pde_tipo_estado.id', 'pde_pedido.pde_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_agrupacion', 'pde_oc_agrupacion.pde_centro_pedido_id', 'pde_centro_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_origen', 'pde_oc_tipo_origen.id', 'pde_oc_agrupacion.pde_oc_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_oc_agrupacion.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_oc_agrupacion.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_agrupacion_tipo_estado', 'pde_oc_agrupacion_tipo_estado.id', 'pde_oc_agrupacion.pde_oc_agrupacion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_financiero', 'prv_descuento_financiero.id', 'pde_oc_agrupacion.prv_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.pde_centro_pedido_id', 'pde_centro_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_cotizacion', 'pde_cotizacion.id', 'pde_oc.pde_cotizacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado', 'pde_oc_tipo_estado.id', 'pde_oc.pde_oc_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_recepcion', 'pde_oc_tipo_estado_recepcion.id', 'pde_oc.pde_oc_tipo_estado_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_facturacion', 'pde_oc_tipo_estado_facturacion.id', 'pde_oc.pde_oc_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo', 'prv_insumo.id', 'pde_oc.prv_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo_costo', 'prv_insumo_costo.id', 'pde_oc.prv_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_comercial', 'prv_descuento_comercial.id', 'pde_oc.prv_descuento_comercial_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido_us_usuario', 'pde_centro_pedido_us_usuario.pde_centro_pedido_id', 'pde_centro_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'pde_centro_pedido_us_usuario.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido_email', 'pde_centro_pedido_email.pde_centro_pedido_id', 'pde_centro_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido_prv_proveedor', 'pde_centro_pedido_prv_proveedor.pde_centro_pedido_id', 'pde_centro_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido_pde_centro_recepcion', 'pde_centro_pedido_pde_centro_recepcion.pde_centro_pedido_id', 'pde_centro_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.pde_centro_pedido_id', 'pde_centro_pedido.id', 'LEFT JOIN');
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
	$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.pde_centro_pedido_id', 'pde_centro_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_nota_credito', 'pde_tipo_nota_credito.id', 'pde_nota_credito.pde_tipo_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_nota_credito', 'pde_tipo_origen_nota_credito.id', 'pde_nota_credito.pde_tipo_origen_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_tipo_estado', 'pde_nota_credito_tipo_estado.id', 'pde_nota_credito.pde_nota_credito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.pde_centro_pedido_id', 'pde_centro_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_nota_debito', 'pde_tipo_nota_debito.id', 'pde_nota_debito.pde_tipo_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_nota_debito', 'pde_tipo_origen_nota_debito.id', 'pde_nota_debito.pde_tipo_origen_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito_tipo_estado', 'pde_nota_debito_tipo_estado.id', 'pde_nota_debito.pde_nota_debito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo', 'pde_recibo.pde_centro_pedido_id', 'pde_centro_pedido.id', 'LEFT JOIN');
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
		$criterio->addTabla('pde_centro_pedido');
		$criterio->setCriterios();		
}
?>

