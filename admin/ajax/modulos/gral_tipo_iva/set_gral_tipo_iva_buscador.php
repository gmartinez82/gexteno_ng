<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralTipoIva::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_tipo_iva.id', Gral::getVars(1, 'buscador_gral_tipo_iva_id'), Gral::getVars(1, 'buscador_gral_tipo_iva_id_comparador'));
	$criterio->add('gral_tipo_iva.descripcion', Gral::getVars(1, 'buscador_gral_tipo_iva_descripcion'), Gral::getVars(1, 'buscador_gral_tipo_iva_descripcion_comparador'));
	$criterio->add('gral_tipo_iva.codigo', Gral::getVars(1, 'buscador_gral_tipo_iva_codigo'), Gral::getVars(1, 'buscador_gral_tipo_iva_codigo_comparador'));
	$criterio->add('gral_tipo_iva.valor_iva', Gral::getVars(1, 'buscador_gral_tipo_iva_valor_iva'), Gral::getVars(1, 'buscador_gral_tipo_iva_valor_iva_comparador'));
	$criterio->add('gral_tipo_iva.gravado', Gral::getVars(1, 'buscador_gral_tipo_iva_gravado'), Gral::getVars(1, 'buscador_gral_tipo_iva_gravado_comparador'));
	$criterio->add('gral_tipo_iva.para_compra', Gral::getVars(1, 'buscador_gral_tipo_iva_para_compra'), Gral::getVars(1, 'buscador_gral_tipo_iva_para_compra_comparador'));
	$criterio->add('gral_tipo_iva.para_venta', Gral::getVars(1, 'buscador_gral_tipo_iva_para_venta'), Gral::getVars(1, 'buscador_gral_tipo_iva_para_venta_comparador'));
	$criterio->add('gral_tipo_iva.observacion', Gral::getVars(1, 'buscador_gral_tipo_iva_observacion'), Gral::getVars(1, 'buscador_gral_tipo_iva_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_tipo_iva_ws_fe_param_tipo_iva', 'gral_tipo_iva_ws_fe_param_tipo_iva.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_iva', 'ws_fe_param_tipo_iva.id', 'gral_tipo_iva_ws_fe_param_tipo_iva.ws_fe_param_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo', 'prv_insumo.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'prv_insumo.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'prv_insumo.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_marca', 'ins_marca.id', 'prv_insumo.ins_marca_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_matriz', 'ins_matriz.id', 'prv_insumo.ins_matriz_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_presupuesto_ins_insumo.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_lista_precio', 'ins_lista_precio.id', 'vta_presupuesto_ins_insumo.ins_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.id', 'vta_presupuesto_ins_insumo.ins_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento', 'vta_politica_descuento.id', 'vta_presupuesto_ins_insumo.vta_politica_descuento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento_rango', 'vta_politica_descuento_rango.id', 'vta_presupuesto_ins_insumo.vta_politica_descuento_rango_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_bulto', 'ins_insumo_bulto.id', 'vta_presupuesto_ins_insumo.ins_insumo_bulto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_vta_factura_vta_orden_venta', 'vta_nota_credito_vta_factura_vta_orden_venta.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.id', 'vta_nota_credito_vta_factura_vta_orden_venta.vta_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_vta_orden_venta', 'vta_factura_vta_orden_venta.id', 'vta_nota_credito_vta_factura_vta_orden_venta.vta_factura_vta_orden_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida', 'ins_unidad_medida.id', 'vta_nota_credito_vta_factura_vta_orden_venta.ins_unidad_medida_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_item', 'vta_nota_credito_item.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_concepto', 'vta_nota_credito_concepto.id', 'vta_nota_credito_item.vta_nota_credito_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_item', 'vta_nota_debito_item.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.id', 'vta_nota_debito_item.vta_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_concepto', 'vta_nota_debito_concepto.id', 'vta_nota_debito_item.vta_nota_debito_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_item', 'vta_recibo_item.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.id', 'vta_recibo_item.vta_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_recibo_item.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_concepto', 'vta_recibo_concepto.id', 'vta_recibo_item.vta_recibo_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_moneda', 'gral_moneda.id', 'vta_recibo_item.gral_moneda_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'vta_orden_venta.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado', 'vta_orden_venta_tipo_estado.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_facturacion', 'vta_orden_venta_tipo_estado_facturacion.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_remision', 'vta_orden_venta_tipo_estado_remision.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_remision_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_orden_venta.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_item', 'vta_factura_item.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'vta_factura_item.vta_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_concepto', 'vta_factura_concepto.id', 'vta_factura_item.vta_factura_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_agrupacion_item', 'pde_oc_agrupacion_item.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_agrupacion', 'pde_oc_agrupacion.id', 'pde_oc_agrupacion_item.pde_oc_agrupacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo_costo', 'prv_insumo_costo.id', 'pde_oc_agrupacion_item.prv_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_financiero', 'prv_descuento_financiero.id', 'pde_oc_agrupacion_item.prv_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_comercial', 'prv_descuento_comercial.id', 'pde_oc_agrupacion_item.prv_descuento_comercial_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido', 'pde_pedido.id', 'pde_oc.pde_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_cotizacion', 'pde_cotizacion.id', 'pde_oc.pde_cotizacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_oc.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_oc.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado', 'pde_oc_tipo_estado.id', 'pde_oc.pde_oc_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_recepcion', 'pde_oc_tipo_estado_recepcion.id', 'pde_oc.pde_oc_tipo_estado_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_facturacion', 'pde_oc_tipo_estado_facturacion.id', 'pde_oc.pde_oc_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_origen', 'pde_oc_tipo_origen.id', 'pde_oc.pde_oc_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_item', 'pde_factura_item.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.id', 'pde_factura_item.pde_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_concepto', 'pde_factura_concepto.id', 'pde_factura_item.pde_factura_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_oc', 'pde_factura_pde_oc.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_recepcion', 'pde_factura_pde_recepcion.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion', 'pde_recepcion.id', 'pde_factura_pde_recepcion.pde_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_pde_factura_pde_recepcion', 'pde_nota_credito_pde_factura_pde_recepcion.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.id', 'pde_nota_credito_pde_factura_pde_recepcion.pde_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_pde_factura_pde_oc', 'pde_nota_credito_pde_factura_pde_oc.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_item', 'pde_nota_credito_item.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_concepto', 'pde_nota_credito_concepto.id', 'pde_nota_credito_item.pde_nota_credito_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito_item', 'pde_nota_debito_item.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.id', 'pde_nota_debito_item.pde_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito_concepto', 'pde_nota_debito_concepto.id', 'pde_nota_debito_item.pde_nota_debito_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_item', 'pde_recibo_item.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo', 'pde_recibo.id', 'pde_recibo_item.pde_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_concepto', 'pde_recibo_concepto.id', 'pde_recibo_item.pde_recibo_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe_vta_orden_venta', 'vta_ajuste_debe_vta_orden_venta.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe', 'vta_ajuste_debe.id', 'vta_ajuste_debe_vta_orden_venta.vta_ajuste_debe_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe_item', 'vta_ajuste_debe_item.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe_concepto', 'vta_ajuste_debe_concepto.id', 'vta_ajuste_debe_item.vta_ajuste_debe_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber_item', 'vta_ajuste_haber_item.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber', 'vta_ajuste_haber.id', 'vta_ajuste_haber_item.vta_ajuste_haber_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber_concepto', 'vta_ajuste_haber_concepto.id', 'vta_ajuste_haber_item.vta_ajuste_haber_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta', 'vta_ajuste_haber_vta_ajuste_debe_vta_orden_venta.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_param_tipo_afectacion_tributaria_gral_tipo_iva', 'eku_param_tipo_afectacion_tributaria_gral_tipo_iva.gral_tipo_iva_id', 'gral_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_param_tipo_afectacion_tributaria', 'eku_param_tipo_afectacion_tributaria.id', 'eku_param_tipo_afectacion_tributaria_gral_tipo_iva.eku_param_tipo_afectacion_tributaria_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_tipo_iva');
		$criterio->setCriterios();		
}
?>

