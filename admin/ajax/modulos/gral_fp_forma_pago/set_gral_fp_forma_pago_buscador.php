<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralFpFormaPago::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_fp_forma_pago.id', Gral::getVars(1, 'buscador_gral_fp_forma_pago_id'), Gral::getVars(1, 'buscador_gral_fp_forma_pago_id_comparador'));
	$criterio->add('gral_fp_forma_pago.descripcion', Gral::getVars(1, 'buscador_gral_fp_forma_pago_descripcion'), Gral::getVars(1, 'buscador_gral_fp_forma_pago_descripcion_comparador'));
	$criterio->add('gral_fp_forma_pago.descripcion_corta', Gral::getVars(1, 'buscador_gral_fp_forma_pago_descripcion_corta'), Gral::getVars(1, 'buscador_gral_fp_forma_pago_descripcion_corta_comparador'));
	$criterio->add('gral_fp_forma_pago.codigo', Gral::getVars(1, 'buscador_gral_fp_forma_pago_codigo'), Gral::getVars(1, 'buscador_gral_fp_forma_pago_codigo_comparador'));
	$criterio->add('gral_fp_forma_pago.contado', Gral::getVars(1, 'buscador_gral_fp_forma_pago_contado'), Gral::getVars(1, 'buscador_gral_fp_forma_pago_contado_comparador'));
	$criterio->add('gral_fp_forma_pago.credito', Gral::getVars(1, 'buscador_gral_fp_forma_pago_credito'), Gral::getVars(1, 'buscador_gral_fp_forma_pago_credito_comparador'));
	$criterio->add('gral_fp_forma_pago.inmediato', Gral::getVars(1, 'buscador_gral_fp_forma_pago_inmediato'), Gral::getVars(1, 'buscador_gral_fp_forma_pago_inmediato_comparador'));
	$criterio->add('gral_fp_forma_pago.recibo_automatico', Gral::getVars(1, 'buscador_gral_fp_forma_pago_recibo_automatico'), Gral::getVars(1, 'buscador_gral_fp_forma_pago_recibo_automatico_comparador'));
	$criterio->add('gral_fp_forma_pago.para_compra', Gral::getVars(1, 'buscador_gral_fp_forma_pago_para_compra'), Gral::getVars(1, 'buscador_gral_fp_forma_pago_para_compra_comparador'));
	$criterio->add('gral_fp_forma_pago.para_venta', Gral::getVars(1, 'buscador_gral_fp_forma_pago_para_venta'), Gral::getVars(1, 'buscador_gral_fp_forma_pago_para_venta_comparador'));
	$criterio->add('gral_fp_forma_pago.para_cobro', Gral::getVars(1, 'buscador_gral_fp_forma_pago_para_cobro'), Gral::getVars(1, 'buscador_gral_fp_forma_pago_para_cobro_comparador'));
	$criterio->add('gral_fp_forma_pago.para_pago', Gral::getVars(1, 'buscador_gral_fp_forma_pago_para_pago'), Gral::getVars(1, 'buscador_gral_fp_forma_pago_para_pago_comparador'));
	$criterio->add('gral_fp_forma_pago.cntb_cuenta_compra', Gral::getVars(1, 'buscador_gral_fp_forma_pago_cntb_cuenta_compra'), Gral::getVars(1, 'buscador_gral_fp_forma_pago_cntb_cuenta_compra_comparador'));
	$criterio->add('gral_fp_forma_pago.cntb_cuenta_venta', Gral::getVars(1, 'buscador_gral_fp_forma_pago_cntb_cuenta_venta'), Gral::getVars(1, 'buscador_gral_fp_forma_pago_cntb_cuenta_venta_comparador'));
	$criterio->add('gral_fp_forma_pago.observacion', Gral::getVars(1, 'buscador_gral_fp_forma_pago_observacion'), Gral::getVars(1, 'buscador_gral_fp_forma_pago_observacion_comparador'));
	$criterio->add('gral_fp_forma_pago.estado', Gral::getVars(1, 'buscador_gral_fp_forma_pago_estado'), Gral::getVars(1, 'buscador_gral_fp_forma_pago_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_fp_medio_pago', 'gral_fp_medio_pago.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_categoria_gral_fp_forma_pago', 'cli_categoria_gral_fp_forma_pago.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_categoria', 'cli_categoria.id', 'cli_categoria_gral_fp_forma_pago.cli_categoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_subcategoria_gral_fp_forma_pago', 'cli_subcategoria_gral_fp_forma_pago.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_subcategoria', 'cli_subcategoria.id', 'cli_subcategoria_gral_fp_forma_pago.cli_subcategoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_presupuesto.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_presupuesto.vta_vendedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'vta_presupuesto.vta_comprador_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'vta_presupuesto.vta_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'vta_presupuesto.gral_actividad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'vta_presupuesto.gral_escenario_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_cuota', 'gral_fp_cuota.id', 'vta_presupuesto.gral_fp_cuota_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'vta_presupuesto.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_despacho', 'vta_presupuesto_tipo_despacho.id', 'vta_presupuesto.vta_presupuesto_tipo_despacho_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_estado', 'vta_presupuesto_tipo_estado.id', 'vta_presupuesto.vta_presupuesto_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'vta_presupuesto.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_emision', 'vta_presupuesto_tipo_emision.id', 'vta_presupuesto.vta_presupuesto_tipo_emision_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_venta', 'vta_presupuesto_tipo_venta.id', 'vta_presupuesto.vta_presupuesto_tipo_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_origen', 'vta_presupuesto_tipo_origen.id', 'vta_presupuesto.vta_presupuesto_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa_transportadora', 'gral_empresa_transportadora.id', 'vta_presupuesto.gral_empresa_transportadora_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_descuento_financiero', 'vta_descuento_financiero.id', 'vta_presupuesto.vta_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'vta_presupuesto.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_presupuesto.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_centro_recepcion', 'cli_centro_recepcion.id', 'vta_presupuesto.cli_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_hoja_ruta', 'vta_hoja_ruta.id', 'vta_presupuesto.vta_hoja_ruta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_nota_credito', 'vta_tipo_nota_credito.id', 'vta_nota_credito.vta_tipo_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_nota_credito', 'vta_tipo_origen_nota_credito.id', 'vta_nota_credito.vta_tipo_origen_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'vta_nota_credito.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'vta_nota_credito.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_tipo_estado', 'vta_nota_credito_tipo_estado.id', 'vta_nota_credito.vta_nota_credito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.id', 'vta_nota_credito.vta_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'vta_nota_credito.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'vta_nota_credito.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_nota_debito', 'vta_tipo_nota_debito.id', 'vta_nota_debito.vta_tipo_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_nota_debito', 'vta_tipo_origen_nota_debito.id', 'vta_nota_debito.vta_tipo_origen_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_tipo_estado', 'vta_nota_debito_tipo_estado.id', 'vta_nota_debito.vta_nota_debito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_item', 'vta_recibo_item.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.id', 'vta_recibo_item.vta_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_recibo_item.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_concepto', 'vta_recibo_concepto.id', 'vta_recibo_item.vta_recibo_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_moneda', 'gral_moneda.id', 'vta_recibo_item.gral_moneda_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_tipo_estado', 'vta_factura_tipo_estado.id', 'vta_factura.vta_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_factura', 'vta_tipo_factura.id', 'vta_factura.vta_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_factura', 'vta_tipo_origen_factura.id', 'vta_factura.vta_tipo_origen_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision_gral_fp_forma_pago', 'vta_comision_gral_fp_forma_pago.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision', 'vta_comision.id', 'vta_comision_gral_fp_forma_pago.vta_comision_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_factura.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_tipo_estado', 'pde_factura_tipo_estado.id', 'pde_factura.pde_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_factura', 'pde_tipo_factura.id', 'pde_factura.pde_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_factura', 'pde_tipo_origen_factura.id', 'pde_factura.pde_tipo_origen_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_factura.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_financiero', 'prv_descuento_financiero.id', 'pde_factura.prv_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_nota_credito', 'pde_tipo_nota_credito.id', 'pde_nota_credito.pde_tipo_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_nota_credito', 'pde_tipo_origen_nota_credito.id', 'pde_nota_credito.pde_tipo_origen_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_tipo_estado', 'pde_nota_credito_tipo_estado.id', 'pde_nota_credito.pde_nota_credito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_nota_debito', 'pde_tipo_nota_debito.id', 'pde_nota_debito.pde_tipo_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_nota_debito', 'pde_tipo_origen_nota_debito.id', 'pde_nota_debito.pde_tipo_origen_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito_tipo_estado', 'pde_nota_debito_tipo_estado.id', 'pde_nota_debito.pde_nota_debito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_item', 'pde_recibo_item.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo', 'pde_recibo.id', 'pde_recibo_item.pde_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_concepto', 'pde_recibo_concepto.id', 'pde_recibo_item.pde_recibo_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_gral_fp_forma_pago', 'pde_orden_pago_gral_fp_forma_pago.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago', 'pde_orden_pago.id', 'pde_orden_pago_gral_fp_forma_pago.pde_orden_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_ingreso', 'fnd_caja_ingreso.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'fnd_caja_ingreso.fnd_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_tipo_ingreso', 'fnd_caja_tipo_ingreso.id', 'fnd_caja_ingreso.fnd_caja_tipo_ingreso_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_egreso', 'fnd_caja_egreso.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_tipo_egreso', 'fnd_caja_tipo_egreso.id', 'fnd_caja_egreso.fnd_caja_tipo_egreso_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_movimiento_item', 'fnd_caja_movimiento_item.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_movimiento', 'fnd_caja_movimiento.id', 'fnd_caja_movimiento_item.fnd_caja_movimiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe', 'vta_ajuste_debe.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe_tipo_estado', 'vta_ajuste_debe_tipo_estado.id', 'vta_ajuste_debe.vta_ajuste_debe_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_ajuste_debe', 'vta_tipo_ajuste_debe.id', 'vta_ajuste_debe.vta_tipo_ajuste_debe_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_ajuste_debe', 'vta_tipo_origen_ajuste_debe.id', 'vta_ajuste_debe.vta_tipo_origen_ajuste_debe_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe_item', 'vta_ajuste_debe_item.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe_concepto', 'vta_ajuste_debe_concepto.id', 'vta_ajuste_debe_item.vta_ajuste_debe_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber_item', 'vta_ajuste_haber_item.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber', 'vta_ajuste_haber.id', 'vta_ajuste_haber_item.vta_ajuste_haber_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber_concepto', 'vta_ajuste_haber_concepto.id', 'vta_ajuste_haber_item.vta_ajuste_haber_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_param_tipo_condicion_operacion_gral_fp_forma_pago', 'eku_param_tipo_condicion_operacion_gral_fp_forma_pago.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_param_tipo_condicion_operacion', 'eku_param_tipo_condicion_operacion.id', 'eku_param_tipo_condicion_operacion_gral_fp_forma_pago.eku_param_tipo_condicion_operacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_param_tipo_pago_gral_fp_forma_pago', 'eku_param_tipo_pago_gral_fp_forma_pago.gral_fp_forma_pago_id', 'gral_fp_forma_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_param_tipo_pago', 'eku_param_tipo_pago.id', 'eku_param_tipo_pago_gral_fp_forma_pago.eku_param_tipo_pago_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_fp_forma_pago');
		$criterio->setCriterios();		
}
?>

