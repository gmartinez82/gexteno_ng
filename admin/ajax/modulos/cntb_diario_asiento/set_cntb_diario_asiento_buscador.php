<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CntbDiarioAsiento::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cntb_diario_asiento.id', Gral::getVars(1, 'buscador_cntb_diario_asiento_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_id_comparador'));
	$criterio->add('cntb_diario_asiento.descripcion', Gral::getVars(1, 'buscador_cntb_diario_asiento_descripcion'), Gral::getVars(1, 'buscador_cntb_diario_asiento_descripcion_comparador'));
	$criterio->add('cntb_diario_asiento.cntb_ejercicio_id', Gral::getVars(1, 'buscador_cntb_diario_asiento_cntb_ejercicio_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_cntb_ejercicio_id_comparador'));
	$criterio->add('cntb_diario_asiento.cntb_periodo_id', Gral::getVars(1, 'buscador_cntb_diario_asiento_cntb_periodo_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_cntb_periodo_id_comparador'));
	$criterio->add('cntb_diario_asiento.cntb_tipo_asiento_id', Gral::getVars(1, 'buscador_cntb_diario_asiento_cntb_tipo_asiento_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_cntb_tipo_asiento_id_comparador'));
	$criterio->add('cntb_diario_asiento.cntb_tipo_origen_id', Gral::getVars(1, 'buscador_cntb_diario_asiento_cntb_tipo_origen_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_cntb_tipo_origen_id_comparador'));
	$criterio->add('cntb_diario_asiento.cntb_tipo_movimiento_id', Gral::getVars(1, 'buscador_cntb_diario_asiento_cntb_tipo_movimiento_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_cntb_tipo_movimiento_id_comparador'));
	$criterio->add('cntb_diario_asiento.gral_actividad_id', Gral::getVars(1, 'buscador_cntb_diario_asiento_gral_actividad_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_gral_actividad_id_comparador'));
	$criterio->add('cntb_diario_asiento.fecha', Gral::getFechaToDB(Gral::getVars(1, 'buscador_cntb_diario_asiento_fecha')), Gral::getVars(1, 'buscador_cntb_diario_asiento_fecha_comparador'));
	$criterio->add('cntb_diario_asiento.numero', Gral::getVars(1, 'buscador_cntb_diario_asiento_numero'), Gral::getVars(1, 'buscador_cntb_diario_asiento_numero_comparador'));
	$criterio->add('cntb_diario_asiento.codigo', Gral::getVars(1, 'buscador_cntb_diario_asiento_codigo'), Gral::getVars(1, 'buscador_cntb_diario_asiento_codigo_comparador'));
	$criterio->add('cntb_diario_asiento.observacion', Gral::getVars(1, 'buscador_cntb_diario_asiento_observacion'), Gral::getVars(1, 'buscador_cntb_diario_asiento_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_nota_credito', 'vta_nota_credito.cntb_diario_asiento_id', 'cntb_diario_asiento.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_nota_credito.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_nota_credito', 'vta_tipo_nota_credito.id', 'vta_nota_credito.vta_tipo_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_nota_credito', 'vta_tipo_origen_nota_credito.id', 'vta_nota_credito.vta_tipo_origen_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'vta_nota_credito.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'vta_nota_credito.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'vta_nota_credito.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_credito_tipo_estado', 'vta_nota_credito_tipo_estado.id', 'vta_nota_credito.vta_nota_credito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.id', 'vta_nota_credito.vta_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_nota_credito.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'vta_nota_credito.vta_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'vta_nota_credito.gral_actividad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'vta_nota_credito.gral_escenario_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'vta_nota_credito.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'vta_nota_credito.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito', 'vta_nota_debito.cntb_diario_asiento_id', 'cntb_diario_asiento.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_nota_debito', 'vta_tipo_nota_debito.id', 'vta_nota_debito.vta_tipo_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_nota_debito', 'vta_tipo_origen_nota_debito.id', 'vta_nota_debito.vta_tipo_origen_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_nota_debito_tipo_estado', 'vta_nota_debito_tipo_estado.id', 'vta_nota_debito.vta_nota_debito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.cntb_diario_asiento_id', 'cntb_diario_asiento.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_recibo', 'vta_tipo_recibo.id', 'vta_recibo.vta_tipo_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_recibo', 'vta_tipo_origen_recibo.id', 'vta_recibo.vta_tipo_origen_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_tipo_estado', 'vta_recibo_tipo_estado.id', 'vta_recibo.vta_recibo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_recibo.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'vta_recibo.fnd_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_recibo.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.cntb_diario_asiento_id', 'cntb_diario_asiento.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_tipo_estado', 'vta_factura_tipo_estado.id', 'vta_factura.vta_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_factura', 'vta_tipo_factura.id', 'vta_factura.vta_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_factura', 'vta_tipo_origen_factura.id', 'vta_factura.vta_tipo_origen_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_cuota', 'gral_fp_cuota.id', 'vta_factura.gral_fp_cuota_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'vta_factura.vta_comprador_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_factura.vta_vendedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.cntb_diario_asiento_id', 'cntb_diario_asiento.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_factura.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_tipo_estado', 'pde_factura_tipo_estado.id', 'pde_factura.pde_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_factura', 'pde_tipo_factura.id', 'pde_factura.pde_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_factura', 'pde_tipo_origen_factura.id', 'pde_factura.pde_tipo_origen_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_factura.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_financiero', 'prv_descuento_financiero.id', 'pde_factura.prv_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.cntb_diario_asiento_id', 'cntb_diario_asiento.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_nota_credito', 'pde_tipo_nota_credito.id', 'pde_nota_credito.pde_tipo_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_nota_credito', 'pde_tipo_origen_nota_credito.id', 'pde_nota_credito.pde_tipo_origen_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_tipo_estado', 'pde_nota_credito_tipo_estado.id', 'pde_nota_credito.pde_nota_credito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.cntb_diario_asiento_id', 'cntb_diario_asiento.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_nota_debito', 'pde_tipo_nota_debito.id', 'pde_nota_debito.pde_tipo_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_nota_debito', 'pde_tipo_origen_nota_debito.id', 'pde_nota_debito.pde_tipo_origen_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito_tipo_estado', 'pde_nota_debito_tipo_estado.id', 'pde_nota_debito.pde_nota_debito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo', 'pde_recibo.cntb_diario_asiento_id', 'cntb_diario_asiento.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_recibo', 'pde_tipo_recibo.id', 'pde_recibo.pde_tipo_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_recibo', 'pde_tipo_origen_recibo.id', 'pde_recibo.pde_tipo_origen_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_tipo_estado', 'pde_recibo_tipo_estado.id', 'pde_recibo.pde_recibo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago', 'pde_orden_pago.id', 'pde_recibo.pde_orden_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_cuenta', 'cntb_diario_asiento_cuenta.cntb_diario_asiento_id', 'cntb_diario_asiento.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_tipo_saldo', 'cntb_tipo_saldo.id', 'cntb_diario_asiento_cuenta.cntb_tipo_saldo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_cuenta', 'cntb_cuenta.id', 'cntb_diario_asiento_cuenta.cntb_cuenta_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_vta_factura', 'cntb_diario_asiento_vta_factura.cntb_diario_asiento_id', 'cntb_diario_asiento.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_periodo', 'cntb_periodo.id', 'cntb_diario_asiento_vta_factura.cntb_periodo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_vta_nota_credito', 'cntb_diario_asiento_vta_nota_credito.cntb_diario_asiento_id', 'cntb_diario_asiento.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_vta_nota_debito', 'cntb_diario_asiento_vta_nota_debito.cntb_diario_asiento_id', 'cntb_diario_asiento.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_vta_recibo', 'cntb_diario_asiento_vta_recibo.cntb_diario_asiento_id', 'cntb_diario_asiento.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_pde_factura', 'cntb_diario_asiento_pde_factura.cntb_diario_asiento_id', 'cntb_diario_asiento.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_pde_nota_credito', 'cntb_diario_asiento_pde_nota_credito.cntb_diario_asiento_id', 'cntb_diario_asiento.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_pde_nota_debito', 'cntb_diario_asiento_pde_nota_debito.cntb_diario_asiento_id', 'cntb_diario_asiento.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_pde_recibo', 'cntb_diario_asiento_pde_recibo.cntb_diario_asiento_id', 'cntb_diario_asiento.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cntb_diario_asiento');
		$criterio->setCriterios();		
}
?>

