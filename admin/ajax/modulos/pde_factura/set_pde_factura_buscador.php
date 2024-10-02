<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeFactura::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_factura.id', Gral::getVars(1, 'buscador_pde_factura_id'), Gral::getVars(1, 'buscador_pde_factura_id_comparador'));
	$criterio->add('pde_factura.descripcion', Gral::getVars(1, 'buscador_pde_factura_descripcion'), Gral::getVars(1, 'buscador_pde_factura_descripcion_comparador'));
	$criterio->add('pde_factura.prv_proveedor_id', Gral::getVars(1, 'buscador_pde_factura_prv_proveedor_id'), Gral::getVars(1, 'buscador_pde_factura_prv_proveedor_id_comparador'));
	$criterio->add('pde_factura.pde_factura_tipo_estado_id', Gral::getVars(1, 'buscador_pde_factura_pde_factura_tipo_estado_id'), Gral::getVars(1, 'buscador_pde_factura_pde_factura_tipo_estado_id_comparador'));
	$criterio->add('pde_factura.pde_tipo_factura_id', Gral::getVars(1, 'buscador_pde_factura_pde_tipo_factura_id'), Gral::getVars(1, 'buscador_pde_factura_pde_tipo_factura_id_comparador'));
	$criterio->add('pde_factura.pde_tipo_origen_factura_id', Gral::getVars(1, 'buscador_pde_factura_pde_tipo_origen_factura_id'), Gral::getVars(1, 'buscador_pde_factura_pde_tipo_origen_factura_id_comparador'));
	$criterio->add('pde_factura.gral_condicion_iva_id', Gral::getVars(1, 'buscador_pde_factura_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_pde_factura_gral_condicion_iva_id_comparador'));
	$criterio->add('pde_factura.gral_tipo_personeria_id', Gral::getVars(1, 'buscador_pde_factura_gral_tipo_personeria_id'), Gral::getVars(1, 'buscador_pde_factura_gral_tipo_personeria_id_comparador'));
	$criterio->add('pde_factura.gral_empresa_id', Gral::getVars(1, 'buscador_pde_factura_gral_empresa_id'), Gral::getVars(1, 'buscador_pde_factura_gral_empresa_id_comparador'));
	$criterio->add('pde_factura.pde_centro_pedido_id', Gral::getVars(1, 'buscador_pde_factura_pde_centro_pedido_id'), Gral::getVars(1, 'buscador_pde_factura_pde_centro_pedido_id_comparador'));
	$criterio->add('pde_factura.gral_fp_forma_pago_id', Gral::getVars(1, 'buscador_pde_factura_gral_fp_forma_pago_id'), Gral::getVars(1, 'buscador_pde_factura_gral_fp_forma_pago_id_comparador'));
	$criterio->add('pde_factura.gral_actividad_id', Gral::getVars(1, 'buscador_pde_factura_gral_actividad_id'), Gral::getVars(1, 'buscador_pde_factura_gral_actividad_id_comparador'));
	$criterio->add('pde_factura.gral_escenario_id', Gral::getVars(1, 'buscador_pde_factura_gral_escenario_id'), Gral::getVars(1, 'buscador_pde_factura_gral_escenario_id_comparador'));
	$criterio->add('pde_factura.numero_punto_venta', Gral::getVars(1, 'buscador_pde_factura_numero_punto_venta'), Gral::getVars(1, 'buscador_pde_factura_numero_punto_venta_comparador'));
	$criterio->add('pde_factura.numero_factura', Gral::getVars(1, 'buscador_pde_factura_numero_factura'), Gral::getVars(1, 'buscador_pde_factura_numero_factura_comparador'));
	$criterio->add('pde_factura.numero_factura_completo', Gral::getVars(1, 'buscador_pde_factura_numero_factura_completo'), Gral::getVars(1, 'buscador_pde_factura_numero_factura_completo_comparador'));
	$criterio->add('pde_factura.cae', Gral::getVars(1, 'buscador_pde_factura_cae'), Gral::getVars(1, 'buscador_pde_factura_cae_comparador'));
	$criterio->add('pde_factura.numero_despacho', Gral::getVars(1, 'buscador_pde_factura_numero_despacho'), Gral::getVars(1, 'buscador_pde_factura_numero_despacho_comparador'));
	$criterio->add('pde_factura.fecha_emision', Gral::getFechaToDB(Gral::getVars(1, 'buscador_pde_factura_fecha_emision')), Gral::getVars(1, 'buscador_pde_factura_fecha_emision_comparador'));
	$criterio->add('pde_factura.fecha_vencimiento', Gral::getFechaToDB(Gral::getVars(1, 'buscador_pde_factura_fecha_vencimiento')), Gral::getVars(1, 'buscador_pde_factura_fecha_vencimiento_comparador'));
	$criterio->add('pde_factura.persona_descripcion', Gral::getVars(1, 'buscador_pde_factura_persona_descripcion'), Gral::getVars(1, 'buscador_pde_factura_persona_descripcion_comparador'));
	$criterio->add('pde_factura.razon_social', Gral::getVars(1, 'buscador_pde_factura_razon_social'), Gral::getVars(1, 'buscador_pde_factura_razon_social_comparador'));
	$criterio->add('pde_factura.domicilio_legal', Gral::getVars(1, 'buscador_pde_factura_domicilio_legal'), Gral::getVars(1, 'buscador_pde_factura_domicilio_legal_comparador'));
	$criterio->add('pde_factura.cuit', Gral::getVars(1, 'buscador_pde_factura_cuit'), Gral::getVars(1, 'buscador_pde_factura_cuit_comparador'));
	$criterio->add('pde_factura.codigo', Gral::getVars(1, 'buscador_pde_factura_codigo'), Gral::getVars(1, 'buscador_pde_factura_codigo_comparador'));
	$criterio->add('pde_factura.anio', Gral::getVars(1, 'buscador_pde_factura_anio'), Gral::getVars(1, 'buscador_pde_factura_anio_comparador'));
	$criterio->add('pde_factura.gral_mes_id', Gral::getVars(1, 'buscador_pde_factura_gral_mes_id'), Gral::getVars(1, 'buscador_pde_factura_gral_mes_id_comparador'));
	$criterio->add('pde_factura.cntb_diario_asiento_id', Gral::getVars(1, 'buscador_pde_factura_cntb_diario_asiento_id'), Gral::getVars(1, 'buscador_pde_factura_cntb_diario_asiento_id_comparador'));
	$criterio->add('pde_factura.prv_descuento_financiero_id', Gral::getVars(1, 'buscador_pde_factura_prv_descuento_financiero_id'), Gral::getVars(1, 'buscador_pde_factura_prv_descuento_financiero_id_comparador'));
	$criterio->add('pde_factura.nota_interna', Gral::getVars(1, 'buscador_pde_factura_nota_interna'), Gral::getVars(1, 'buscador_pde_factura_nota_interna_comparador'));
	$criterio->add('pde_factura.observacion', Gral::getVars(1, 'buscador_pde_factura_observacion'), Gral::getVars(1, 'buscador_pde_factura_observacion_comparador'));
	$criterio->add('pde_factura.estado', Gral::getVars(1, 'buscador_pde_factura_estado'), Gral::getVars(1, 'buscador_pde_factura_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_factura_imagen', 'pde_factura_imagen.pde_factura_id', 'pde_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_archivo', 'pde_factura_archivo.pde_factura_id', 'pde_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_estado', 'pde_factura_estado.pde_factura_id', 'pde_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_tipo_estado', 'pde_factura_tipo_estado.id', 'pde_factura_estado.pde_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_item', 'pde_factura_item.pde_factura_id', 'pde_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'pde_factura_item.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_concepto', 'pde_factura_concepto.id', 'pde_factura_item.pde_factura_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_tributo', 'pde_factura_pde_tributo.pde_factura_id', 'pde_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tributo', 'pde_tributo.id', 'pde_factura_pde_tributo.pde_tributo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_oc', 'pde_factura_pde_oc.pde_factura_id', 'pde_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.id', 'pde_factura_pde_oc.pde_oc_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_factura_pde_oc.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida', 'ins_unidad_medida.id', 'pde_factura_pde_oc.ins_unidad_medida_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.id', 'pde_factura_pde_oc.ins_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_recepcion', 'pde_factura_pde_recepcion.pde_factura_id', 'pde_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion', 'pde_recepcion.id', 'pde_factura_pde_recepcion.pde_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_recibo', 'pde_factura_pde_recibo.pde_factura_id', 'pde_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo', 'pde_recibo.id', 'pde_factura_pde_recibo.pde_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_nota_credito', 'pde_factura_pde_nota_credito.pde_factura_id', 'pde_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.id', 'pde_factura_pde_nota_credito.pde_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_pde_factura', 'pde_orden_pago_pde_factura.pde_factura_id', 'pde_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago', 'pde_orden_pago.id', 'pde_orden_pago_pde_factura.pde_orden_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_pde_factura', 'cntb_diario_asiento_pde_factura.pde_factura_id', 'pde_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_periodo', 'cntb_periodo.id', 'cntb_diario_asiento_pde_factura.cntb_periodo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'cntb_diario_asiento_pde_factura.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_compras_cbte', 'afip_citi_compras_cbte.pde_factura_id', 'pde_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_prc', 'afip_citi_prc.id', 'afip_citi_compras_cbte.afip_citi_prc_id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_cabecera', 'afip_citi_cabecera.id', 'afip_citi_compras_cbte.afip_citi_cabecera_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.id', 'afip_citi_compras_cbte.pde_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_compras_alicuotas', 'afip_citi_compras_alicuotas.pde_factura_id', 'pde_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('afip_citi_compras_importaciones', 'afip_citi_compras_importaciones.pde_factura_id', 'pde_factura.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_factura');
		$criterio->setCriterios();		
}
?>

