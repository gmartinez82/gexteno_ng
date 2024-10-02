<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeOrdenPago::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_orden_pago.id', Gral::getVars(1, 'buscador_pde_orden_pago_id'), Gral::getVars(1, 'buscador_pde_orden_pago_id_comparador'));
	$criterio->add('pde_orden_pago.descripcion', Gral::getVars(1, 'buscador_pde_orden_pago_descripcion'), Gral::getVars(1, 'buscador_pde_orden_pago_descripcion_comparador'));
	$criterio->add('pde_orden_pago.prv_proveedor_id', Gral::getVars(1, 'buscador_pde_orden_pago_prv_proveedor_id'), Gral::getVars(1, 'buscador_pde_orden_pago_prv_proveedor_id_comparador'));
	$criterio->add('pde_orden_pago.pde_orden_pago_tipo_estado_id', Gral::getVars(1, 'buscador_pde_orden_pago_pde_orden_pago_tipo_estado_id'), Gral::getVars(1, 'buscador_pde_orden_pago_pde_orden_pago_tipo_estado_id_comparador'));
	$criterio->add('pde_orden_pago.gral_condicion_iva_id', Gral::getVars(1, 'buscador_pde_orden_pago_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_pde_orden_pago_gral_condicion_iva_id_comparador'));
	$criterio->add('pde_orden_pago.gral_tipo_personeria_id', Gral::getVars(1, 'buscador_pde_orden_pago_gral_tipo_personeria_id'), Gral::getVars(1, 'buscador_pde_orden_pago_gral_tipo_personeria_id_comparador'));
	$criterio->add('pde_orden_pago.gral_empresa_id', Gral::getVars(1, 'buscador_pde_orden_pago_gral_empresa_id'), Gral::getVars(1, 'buscador_pde_orden_pago_gral_empresa_id_comparador'));
	$criterio->add('pde_orden_pago.pde_centro_pedido_id', Gral::getVars(1, 'buscador_pde_orden_pago_pde_centro_pedido_id'), Gral::getVars(1, 'buscador_pde_orden_pago_pde_centro_pedido_id_comparador'));
	$criterio->add('pde_orden_pago.fecha_emision', Gral::getFechaToDB(Gral::getVars(1, 'buscador_pde_orden_pago_fecha_emision')), Gral::getVars(1, 'buscador_pde_orden_pago_fecha_emision_comparador'));
	$criterio->add('pde_orden_pago.persona_descripcion', Gral::getVars(1, 'buscador_pde_orden_pago_persona_descripcion'), Gral::getVars(1, 'buscador_pde_orden_pago_persona_descripcion_comparador'));
	$criterio->add('pde_orden_pago.razon_social', Gral::getVars(1, 'buscador_pde_orden_pago_razon_social'), Gral::getVars(1, 'buscador_pde_orden_pago_razon_social_comparador'));
	$criterio->add('pde_orden_pago.domicilio_legal', Gral::getVars(1, 'buscador_pde_orden_pago_domicilio_legal'), Gral::getVars(1, 'buscador_pde_orden_pago_domicilio_legal_comparador'));
	$criterio->add('pde_orden_pago.cuit', Gral::getVars(1, 'buscador_pde_orden_pago_cuit'), Gral::getVars(1, 'buscador_pde_orden_pago_cuit_comparador'));
	$criterio->add('pde_orden_pago.codigo', Gral::getVars(1, 'buscador_pde_orden_pago_codigo'), Gral::getVars(1, 'buscador_pde_orden_pago_codigo_comparador'));
	$criterio->add('pde_orden_pago.anio', Gral::getVars(1, 'buscador_pde_orden_pago_anio'), Gral::getVars(1, 'buscador_pde_orden_pago_anio_comparador'));
	$criterio->add('pde_orden_pago.gral_mes_id', Gral::getVars(1, 'buscador_pde_orden_pago_gral_mes_id'), Gral::getVars(1, 'buscador_pde_orden_pago_gral_mes_id_comparador'));
	$criterio->add('pde_orden_pago.fnd_caja_id', Gral::getVars(1, 'buscador_pde_orden_pago_fnd_caja_id'), Gral::getVars(1, 'buscador_pde_orden_pago_fnd_caja_id_comparador'));
	$criterio->add('pde_orden_pago.observacion', Gral::getVars(1, 'buscador_pde_orden_pago_observacion'), Gral::getVars(1, 'buscador_pde_orden_pago_observacion_comparador'));
	$criterio->add('pde_orden_pago.nota_publica', Gral::getVars(1, 'buscador_pde_orden_pago_nota_publica'), Gral::getVars(1, 'buscador_pde_orden_pago_nota_publica_comparador'));
	$criterio->add('pde_orden_pago.estado', Gral::getVars(1, 'buscador_pde_orden_pago_estado'), Gral::getVars(1, 'buscador_pde_orden_pago_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_recibo', 'pde_recibo.pde_orden_pago_id', 'pde_orden_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_recibo.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_recibo', 'pde_tipo_recibo.id', 'pde_recibo.pde_tipo_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_recibo', 'pde_tipo_origen_recibo.id', 'pde_recibo.pde_tipo_origen_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'pde_recibo.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'pde_recibo.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'pde_recibo.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_recibo.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_tipo_estado', 'pde_recibo_tipo_estado.id', 'pde_recibo.pde_recibo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'pde_recibo.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'pde_recibo.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'pde_recibo.fnd_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_estado', 'pde_orden_pago_estado.pde_orden_pago_id', 'pde_orden_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_tipo_estado', 'pde_orden_pago_tipo_estado.id', 'pde_orden_pago_estado.pde_orden_pago_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_preventista', 'prv_preventista.id', 'pde_orden_pago_estado.prv_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa_transportadora', 'gral_empresa_transportadora.id', 'pde_orden_pago_estado.gral_empresa_transportadora_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_enviado', 'pde_orden_pago_enviado.pde_orden_pago_id', 'pde_orden_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_pde_factura', 'pde_orden_pago_pde_factura.pde_orden_pago_id', 'pde_orden_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.id', 'pde_orden_pago_pde_factura.pde_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_pde_nota_debito', 'pde_orden_pago_pde_nota_debito.pde_orden_pago_id', 'pde_orden_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.id', 'pde_orden_pago_pde_nota_debito.pde_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_gral_fp_forma_pago', 'pde_orden_pago_gral_fp_forma_pago.pde_orden_pago_id', 'pde_orden_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'pde_orden_pago_gral_fp_forma_pago.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_gral_fp_forma_pago_cheque', 'pde_orden_pago_gral_fp_forma_pago_cheque.pde_orden_pago_id', 'pde_orden_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_banco', 'gral_banco.id', 'pde_orden_pago_gral_fp_forma_pago_cheque.gral_banco_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_cheque', 'fnd_chq_cheque.pde_orden_pago_id', 'pde_orden_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_chequera', 'fnd_chq_chequera.id', 'fnd_chq_cheque.fnd_chq_chequera_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_tipo_emisor', 'fnd_chq_tipo_emisor.id', 'fnd_chq_cheque.fnd_chq_tipo_emisor_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_tipo_emision', 'fnd_chq_tipo_emision.id', 'fnd_chq_cheque.fnd_chq_tipo_emision_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_tipo_pago', 'fnd_chq_tipo_pago.id', 'fnd_chq_cheque.fnd_chq_tipo_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_tipo_estado', 'fnd_chq_tipo_estado.id', 'fnd_chq_cheque.fnd_chq_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.id', 'fnd_chq_cheque.vta_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_item', 'vta_recibo_item.id', 'fnd_chq_cheque.vta_recibo_item_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision', 'vta_comision.id', 'fnd_chq_cheque.vta_comision_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision_gral_fp_forma_pago', 'vta_comision_gral_fp_forma_pago.id', 'fnd_chq_cheque.vta_comision_gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_item', 'pde_recibo_item.id', 'fnd_chq_cheque.pde_recibo_item_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_movimiento', 'fnd_caja_movimiento.id', 'fnd_chq_cheque.fnd_caja_movimiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_movimiento_item', 'fnd_caja_movimiento_item.id', 'fnd_chq_cheque.fnd_caja_movimiento_item_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_caja', 'gral_caja.id', 'fnd_chq_cheque.gral_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_ingreso', 'fnd_caja_ingreso.id', 'fnd_chq_cheque.fnd_caja_ingreso_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_egreso', 'fnd_caja_egreso.id', 'fnd_chq_cheque.fnd_caja_egreso_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_orden_pago');
		$criterio->setCriterios();		
}
?>

