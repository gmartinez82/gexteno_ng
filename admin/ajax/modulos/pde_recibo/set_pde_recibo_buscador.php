<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeRecibo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_recibo.id', Gral::getVars(1, 'buscador_pde_recibo_id'), Gral::getVars(1, 'buscador_pde_recibo_id_comparador'));
	$criterio->add('pde_recibo.descripcion', Gral::getVars(1, 'buscador_pde_recibo_descripcion'), Gral::getVars(1, 'buscador_pde_recibo_descripcion_comparador'));
	$criterio->add('pde_recibo.prv_proveedor_id', Gral::getVars(1, 'buscador_pde_recibo_prv_proveedor_id'), Gral::getVars(1, 'buscador_pde_recibo_prv_proveedor_id_comparador'));
	$criterio->add('pde_recibo.pde_tipo_recibo_id', Gral::getVars(1, 'buscador_pde_recibo_pde_tipo_recibo_id'), Gral::getVars(1, 'buscador_pde_recibo_pde_tipo_recibo_id_comparador'));
	$criterio->add('pde_recibo.pde_tipo_origen_recibo_id', Gral::getVars(1, 'buscador_pde_recibo_pde_tipo_origen_recibo_id'), Gral::getVars(1, 'buscador_pde_recibo_pde_tipo_origen_recibo_id_comparador'));
	$criterio->add('pde_recibo.gral_condicion_iva_id', Gral::getVars(1, 'buscador_pde_recibo_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_pde_recibo_gral_condicion_iva_id_comparador'));
	$criterio->add('pde_recibo.gral_tipo_personeria_id', Gral::getVars(1, 'buscador_pde_recibo_gral_tipo_personeria_id'), Gral::getVars(1, 'buscador_pde_recibo_gral_tipo_personeria_id_comparador'));
	$criterio->add('pde_recibo.gral_empresa_id', Gral::getVars(1, 'buscador_pde_recibo_gral_empresa_id'), Gral::getVars(1, 'buscador_pde_recibo_gral_empresa_id_comparador'));
	$criterio->add('pde_recibo.pde_centro_pedido_id', Gral::getVars(1, 'buscador_pde_recibo_pde_centro_pedido_id'), Gral::getVars(1, 'buscador_pde_recibo_pde_centro_pedido_id_comparador'));
	$criterio->add('pde_recibo.pde_recibo_tipo_estado_id', Gral::getVars(1, 'buscador_pde_recibo_pde_recibo_tipo_estado_id'), Gral::getVars(1, 'buscador_pde_recibo_pde_recibo_tipo_estado_id_comparador'));
	$criterio->add('pde_recibo.numero_punto_venta', Gral::getVars(1, 'buscador_pde_recibo_numero_punto_venta'), Gral::getVars(1, 'buscador_pde_recibo_numero_punto_venta_comparador'));
	$criterio->add('pde_recibo.numero_recibo', Gral::getVars(1, 'buscador_pde_recibo_numero_recibo'), Gral::getVars(1, 'buscador_pde_recibo_numero_recibo_comparador'));
	$criterio->add('pde_recibo.numero_recibo_completo', Gral::getVars(1, 'buscador_pde_recibo_numero_recibo_completo'), Gral::getVars(1, 'buscador_pde_recibo_numero_recibo_completo_comparador'));
	$criterio->add('pde_recibo.cae', Gral::getVars(1, 'buscador_pde_recibo_cae'), Gral::getVars(1, 'buscador_pde_recibo_cae_comparador'));
	$criterio->add('pde_recibo.fecha_emision', Gral::getFechaToDB(Gral::getVars(1, 'buscador_pde_recibo_fecha_emision')), Gral::getVars(1, 'buscador_pde_recibo_fecha_emision_comparador'));
	$criterio->add('pde_recibo.persona_descripcion', Gral::getVars(1, 'buscador_pde_recibo_persona_descripcion'), Gral::getVars(1, 'buscador_pde_recibo_persona_descripcion_comparador'));
	$criterio->add('pde_recibo.razon_social', Gral::getVars(1, 'buscador_pde_recibo_razon_social'), Gral::getVars(1, 'buscador_pde_recibo_razon_social_comparador'));
	$criterio->add('pde_recibo.domicilio_legal', Gral::getVars(1, 'buscador_pde_recibo_domicilio_legal'), Gral::getVars(1, 'buscador_pde_recibo_domicilio_legal_comparador'));
	$criterio->add('pde_recibo.cuit', Gral::getVars(1, 'buscador_pde_recibo_cuit'), Gral::getVars(1, 'buscador_pde_recibo_cuit_comparador'));
	$criterio->add('pde_recibo.codigo', Gral::getVars(1, 'buscador_pde_recibo_codigo'), Gral::getVars(1, 'buscador_pde_recibo_codigo_comparador'));
	$criterio->add('pde_recibo.anio', Gral::getVars(1, 'buscador_pde_recibo_anio'), Gral::getVars(1, 'buscador_pde_recibo_anio_comparador'));
	$criterio->add('pde_recibo.gral_mes_id', Gral::getVars(1, 'buscador_pde_recibo_gral_mes_id'), Gral::getVars(1, 'buscador_pde_recibo_gral_mes_id_comparador'));
	$criterio->add('pde_recibo.cntb_diario_asiento_id', Gral::getVars(1, 'buscador_pde_recibo_cntb_diario_asiento_id'), Gral::getVars(1, 'buscador_pde_recibo_cntb_diario_asiento_id_comparador'));
	$criterio->add('pde_recibo.pde_orden_pago_id', Gral::getVars(1, 'buscador_pde_recibo_pde_orden_pago_id'), Gral::getVars(1, 'buscador_pde_recibo_pde_orden_pago_id_comparador'));
	$criterio->add('pde_recibo.fnd_caja_id', Gral::getVars(1, 'buscador_pde_recibo_fnd_caja_id'), Gral::getVars(1, 'buscador_pde_recibo_fnd_caja_id_comparador'));
	$criterio->add('pde_recibo.observacion', Gral::getVars(1, 'buscador_pde_recibo_observacion'), Gral::getVars(1, 'buscador_pde_recibo_observacion_comparador'));
	$criterio->add('pde_recibo.nota_interna', Gral::getVars(1, 'buscador_pde_recibo_nota_interna'), Gral::getVars(1, 'buscador_pde_recibo_nota_interna_comparador'));
	$criterio->add('pde_recibo.estado', Gral::getVars(1, 'buscador_pde_recibo_estado'), Gral::getVars(1, 'buscador_pde_recibo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_factura_pde_recibo', 'pde_factura_pde_recibo.pde_recibo_id', 'pde_recibo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.id', 'pde_factura_pde_recibo.pde_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito_pde_recibo', 'pde_nota_debito_pde_recibo.pde_recibo_id', 'pde_recibo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.id', 'pde_nota_debito_pde_recibo.pde_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_imagen', 'pde_recibo_imagen.pde_recibo_id', 'pde_recibo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_archivo', 'pde_recibo_archivo.pde_recibo_id', 'pde_recibo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_estado', 'pde_recibo_estado.pde_recibo_id', 'pde_recibo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_tipo_estado', 'pde_recibo_tipo_estado.id', 'pde_recibo_estado.pde_recibo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_item', 'pde_recibo_item.pde_recibo_id', 'pde_recibo.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'pde_recibo_item.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'pde_recibo_item.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_concepto', 'pde_recibo_concepto.id', 'pde_recibo_item.pde_recibo_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_item_cheque', 'pde_recibo_item_cheque.pde_recibo_id', 'pde_recibo.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_banco', 'gral_banco.id', 'pde_recibo_item_cheque.gral_banco_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_pde_tributo', 'pde_recibo_pde_tributo.pde_recibo_id', 'pde_recibo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tributo', 'pde_tributo.id', 'pde_recibo_pde_tributo.pde_tributo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento_pde_recibo', 'cntb_diario_asiento_pde_recibo.pde_recibo_id', 'pde_recibo.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_periodo', 'cntb_periodo.id', 'cntb_diario_asiento_pde_recibo.cntb_periodo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'cntb_diario_asiento_pde_recibo.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_cheque', 'fnd_chq_cheque.pde_recibo_id', 'pde_recibo.id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_chequera', 'fnd_chq_chequera.id', 'fnd_chq_cheque.fnd_chq_chequera_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_tipo_emisor', 'fnd_chq_tipo_emisor.id', 'fnd_chq_cheque.fnd_chq_tipo_emisor_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_tipo_emision', 'fnd_chq_tipo_emision.id', 'fnd_chq_cheque.fnd_chq_tipo_emision_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_tipo_pago', 'fnd_chq_tipo_pago.id', 'fnd_chq_cheque.fnd_chq_tipo_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_tipo_estado', 'fnd_chq_tipo_estado.id', 'fnd_chq_cheque.fnd_chq_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.id', 'fnd_chq_cheque.vta_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_item', 'vta_recibo_item.id', 'fnd_chq_cheque.vta_recibo_item_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision', 'vta_comision.id', 'fnd_chq_cheque.vta_comision_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision_gral_fp_forma_pago', 'vta_comision_gral_fp_forma_pago.id', 'fnd_chq_cheque.vta_comision_gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago', 'pde_orden_pago.id', 'fnd_chq_cheque.pde_orden_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_gral_fp_forma_pago', 'pde_orden_pago_gral_fp_forma_pago.id', 'fnd_chq_cheque.pde_orden_pago_gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_movimiento', 'fnd_caja_movimiento.id', 'fnd_chq_cheque.fnd_caja_movimiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_movimiento_item', 'fnd_caja_movimiento_item.id', 'fnd_chq_cheque.fnd_caja_movimiento_item_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'fnd_chq_cheque.fnd_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_caja', 'gral_caja.id', 'fnd_chq_cheque.gral_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_ingreso', 'fnd_caja_ingreso.id', 'fnd_chq_cheque.fnd_caja_ingreso_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_egreso', 'fnd_caja_egreso.id', 'fnd_chq_cheque.fnd_caja_egreso_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_recibo');
		$criterio->setCriterios();		
}
?>

