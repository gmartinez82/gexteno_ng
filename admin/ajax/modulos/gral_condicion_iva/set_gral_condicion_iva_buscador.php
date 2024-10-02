<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralCondicionIva::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_condicion_iva.id', Gral::getVars(1, 'buscador_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_gral_condicion_iva_id_comparador'));
	$criterio->add('gral_condicion_iva.descripcion', Gral::getVars(1, 'buscador_gral_condicion_iva_descripcion'), Gral::getVars(1, 'buscador_gral_condicion_iva_descripcion_comparador'));
	$criterio->add('gral_condicion_iva.codigo', Gral::getVars(1, 'buscador_gral_condicion_iva_codigo'), Gral::getVars(1, 'buscador_gral_condicion_iva_codigo_comparador'));
	$criterio->add('gral_condicion_iva.iva_discriminado', Gral::getVars(1, 'buscador_gral_condicion_iva_iva_discriminado'), Gral::getVars(1, 'buscador_gral_condicion_iva_iva_discriminado_comparador'));
	$criterio->add('gral_condicion_iva.iva_discriminado_comprobante', Gral::getVars(1, 'buscador_gral_condicion_iva_iva_discriminado_comprobante'), Gral::getVars(1, 'buscador_gral_condicion_iva_iva_discriminado_comprobante_comparador'));
	$criterio->add('gral_condicion_iva.leyenda_comprobante', Gral::getVars(1, 'buscador_gral_condicion_iva_leyenda_comprobante'), Gral::getVars(1, 'buscador_gral_condicion_iva_leyenda_comprobante_comparador'));
	$criterio->add('gral_condicion_iva.observacion', Gral::getVars(1, 'buscador_gral_condicion_iva_observacion'), Gral::getVars(1, 'buscador_gral_condicion_iva_observacion_comparador'));
	$criterio->add('gral_condicion_iva.estado', Gral::getVars(1, 'buscador_gral_condicion_iva_estado'), Gral::getVars(1, 'buscador_gral_condicion_iva_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_condicion_iva_vta_tipo_factura', 'gral_condicion_iva_vta_tipo_factura.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_factura', 'vta_tipo_factura.id', 'gral_condicion_iva_vta_tipo_factura.vta_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva_vta_tipo_nota_credito', 'gral_condicion_iva_vta_tipo_nota_credito.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_nota_credito', 'vta_tipo_nota_credito.id', 'gral_condicion_iva_vta_tipo_nota_credito.vta_tipo_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva_vta_tipo_nota_debito', 'gral_condicion_iva_vta_tipo_nota_debito.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_nota_debito', 'vta_tipo_nota_debito.id', 'gral_condicion_iva_vta_tipo_nota_debito.vta_tipo_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva_vta_tipo_recibo', 'gral_condicion_iva_vta_tipo_recibo.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_recibo', 'vta_tipo_recibo.id', 'gral_condicion_iva_vta_tipo_recibo.vta_tipo_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva_pde_tipo_factura', 'gral_condicion_iva_pde_tipo_factura.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_factura', 'pde_tipo_factura.id', 'gral_condicion_iva_pde_tipo_factura.pde_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva_pde_tipo_nota_credito', 'gral_condicion_iva_pde_tipo_nota_credito.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_nota_credito', 'pde_tipo_nota_credito.id', 'gral_condicion_iva_pde_tipo_nota_credito.pde_tipo_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva_pde_tipo_nota_debito', 'gral_condicion_iva_pde_tipo_nota_debito.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_nota_debito', 'pde_tipo_nota_debito.id', 'gral_condicion_iva_pde_tipo_nota_debito.pde_tipo_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva_pde_tipo_recibo', 'gral_condicion_iva_pde_tipo_recibo.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_recibo', 'pde_tipo_recibo.id', 'gral_condicion_iva_pde_tipo_recibo.pde_tipo_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'gral_empresa.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'gral_empresa.geo_localidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_tipo', 'prv_tipo.id', 'prv_proveedor.prv_tipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_grupo', 'prv_grupo.id', 'prv_proveedor.prv_grupo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_categoria', 'prv_categoria.id', 'prv_proveedor.prv_categoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_tipo_cliente', 'cli_tipo_cliente.id', 'cli_cliente.cli_tipo_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'cli_cliente.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_zona', 'geo_zona.id', 'cli_cliente.geo_zona_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_grupo', 'cli_grupo.id', 'cli_cliente.cli_grupo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa_transportadora', 'gral_empresa_transportadora.id', 'cli_cliente.gral_empresa_transportadora_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_categoria', 'cli_categoria.id', 'cli_cliente.cli_categoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_subcategoria', 'cli_subcategoria.id', 'cli_cliente.cli_subcategoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_gestion', 'cli_cliente_tipo_gestion.id', 'cli_cliente.cli_cliente_tipo_gestion_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_periodicidad_gestion', 'cli_cliente_periodicidad_gestion.id', 'cli_cliente.cli_cliente_periodicidad_gestion_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado', 'cli_cliente_tipo_estado.id', 'cli_cliente.cli_cliente_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado_venta', 'cli_cliente_tipo_estado_venta.id', 'cli_cliente.cli_cliente_tipo_estado_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado_cobro', 'cli_cliente_tipo_estado_cobro.id', 'cli_cliente.cli_cliente_tipo_estado_cobro_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado_cuenta', 'cli_cliente_tipo_estado_cuenta.id', 'cli_cliente.cli_cliente_tipo_estado_cuenta_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado_satisfaccion', 'cli_cliente_tipo_estado_satisfaccion.id', 'cli_cliente.cli_cliente_tipo_estado_satisfaccion_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_presupuesto.vta_vendedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'vta_presupuesto.vta_comprador_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'vta_presupuesto.vta_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'vta_presupuesto.gral_actividad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'vta_presupuesto.gral_escenario_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_presupuesto.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_cuota', 'gral_fp_cuota.id', 'vta_presupuesto.gral_fp_cuota_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'vta_presupuesto.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_despacho', 'vta_presupuesto_tipo_despacho.id', 'vta_presupuesto.vta_presupuesto_tipo_despacho_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_estado', 'vta_presupuesto_tipo_estado.id', 'vta_presupuesto.vta_presupuesto_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_emision', 'vta_presupuesto_tipo_emision.id', 'vta_presupuesto.vta_presupuesto_tipo_emision_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_venta', 'vta_presupuesto_tipo_venta.id', 'vta_presupuesto.vta_presupuesto_tipo_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_origen', 'vta_presupuesto_tipo_origen.id', 'vta_presupuesto.vta_presupuesto_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_descuento_financiero', 'vta_descuento_financiero.id', 'vta_presupuesto.vta_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_presupuesto.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_centro_recepcion', 'cli_centro_recepcion.id', 'vta_presupuesto.cli_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_hoja_ruta', 'vta_hoja_ruta.id', 'vta_presupuesto.vta_hoja_ruta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_nota_credito', 'vta_tipo_origen_nota_credito.id', 'vta_nota_credito.vta_tipo_origen_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_tipo_estado', 'vta_nota_credito_tipo_estado.id', 'vta_nota_credito.vta_nota_credito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.id', 'vta_nota_credito.vta_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'vta_nota_credito.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'vta_nota_credito.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_nota_debito', 'vta_tipo_origen_nota_debito.id', 'vta_nota_debito.vta_tipo_origen_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_tipo_estado', 'vta_nota_debito_tipo_estado.id', 'vta_nota_debito.vta_nota_debito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_recibo', 'vta_tipo_origen_recibo.id', 'vta_recibo.vta_tipo_origen_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_tipo_estado', 'vta_recibo_tipo_estado.id', 'vta_recibo.vta_recibo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_condicion_pago', 'vta_recibo_condicion_pago.id', 'vta_recibo.vta_recibo_condicion_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_tipo_pago', 'vta_recibo_tipo_pago.id', 'vta_recibo.vta_recibo_tipo_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'vta_recibo.fnd_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_tipo_estado', 'vta_factura_tipo_estado.id', 'vta_factura.vta_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_factura', 'vta_tipo_origen_factura.id', 'vta_factura.vta_tipo_origen_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_tipo_estado', 'pde_factura_tipo_estado.id', 'pde_factura.pde_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_factura', 'pde_tipo_origen_factura.id', 'pde_factura.pde_tipo_origen_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_factura.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_financiero', 'prv_descuento_financiero.id', 'pde_factura.prv_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_nota_credito', 'pde_tipo_origen_nota_credito.id', 'pde_nota_credito.pde_tipo_origen_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_tipo_estado', 'pde_nota_credito_tipo_estado.id', 'pde_nota_credito.pde_nota_credito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_nota_debito', 'pde_tipo_origen_nota_debito.id', 'pde_nota_debito.pde_tipo_origen_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito_tipo_estado', 'pde_nota_debito_tipo_estado.id', 'pde_nota_debito.pde_nota_debito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo', 'pde_recibo.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_recibo', 'pde_tipo_origen_recibo.id', 'pde_recibo.pde_tipo_origen_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_tipo_estado', 'pde_recibo_tipo_estado.id', 'pde_recibo.pde_recibo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_condicion_pago', 'pde_recibo_condicion_pago.id', 'pde_recibo.pde_recibo_condicion_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_tipo_pago', 'pde_recibo_tipo_pago.id', 'pde_recibo.pde_recibo_tipo_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago', 'pde_orden_pago.id', 'pde_recibo.pde_orden_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_tipo_estado', 'pde_orden_pago_tipo_estado.id', 'pde_orden_pago.pde_orden_pago_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe', 'vta_ajuste_debe.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe_tipo_estado', 'vta_ajuste_debe_tipo_estado.id', 'vta_ajuste_debe.vta_ajuste_debe_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_ajuste_debe', 'vta_tipo_ajuste_debe.id', 'vta_ajuste_debe.vta_tipo_ajuste_debe_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_ajuste_debe', 'vta_tipo_origen_ajuste_debe.id', 'vta_ajuste_debe.vta_tipo_origen_ajuste_debe_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva_vta_tipo_ajuste_debe', 'gral_condicion_iva_vta_tipo_ajuste_debe.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber', 'vta_ajuste_haber.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_ajuste_haber', 'vta_tipo_ajuste_haber.id', 'vta_ajuste_haber.vta_tipo_ajuste_haber_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_ajuste_haber', 'vta_tipo_origen_ajuste_haber.id', 'vta_ajuste_haber.vta_tipo_origen_ajuste_haber_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber_tipo_estado', 'vta_ajuste_haber_tipo_estado.id', 'vta_ajuste_haber.vta_ajuste_haber_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber_condicion_pago', 'vta_ajuste_haber_condicion_pago.id', 'vta_ajuste_haber.vta_ajuste_haber_condicion_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber_tipo_pago', 'vta_ajuste_haber_tipo_pago.id', 'vta_ajuste_haber.vta_ajuste_haber_tipo_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva_vta_tipo_ajuste_haber', 'gral_condicion_iva_vta_tipo_ajuste_haber.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tienda', 'cli_cliente_tienda.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_centro_pedido', 'cli_centro_pedido.id', 'cli_cliente_tienda.cli_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_param_tipo_naturaleza_receptor_gral_condicion_iva', 'eku_param_tipo_naturaleza_receptor_gral_condicion_iva.gral_condicion_iva_id', 'gral_condicion_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_param_tipo_naturaleza_receptor', 'eku_param_tipo_naturaleza_receptor.id', 'eku_param_tipo_naturaleza_receptor_gral_condicion_iva.eku_param_tipo_naturaleza_receptor_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_condicion_iva');
		$criterio->setCriterios();		
}
?>

