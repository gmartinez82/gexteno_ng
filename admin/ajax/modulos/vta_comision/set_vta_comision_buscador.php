<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaComision::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_comision.id', Gral::getVars(1, 'buscador_vta_comision_id'), Gral::getVars(1, 'buscador_vta_comision_id_comparador'));
	$criterio->add('vta_comision.descripcion', Gral::getVars(1, 'buscador_vta_comision_descripcion'), Gral::getVars(1, 'buscador_vta_comision_descripcion_comparador'));
	$criterio->add('vta_comision.vta_preventista_id', Gral::getVars(1, 'buscador_vta_comision_vta_preventista_id'), Gral::getVars(1, 'buscador_vta_comision_vta_preventista_id_comparador'));
	$criterio->add('vta_comision.vta_comprador_id', Gral::getVars(1, 'buscador_vta_comision_vta_comprador_id'), Gral::getVars(1, 'buscador_vta_comision_vta_comprador_id_comparador'));
	$criterio->add('vta_comision.vta_vendedor_id', Gral::getVars(1, 'buscador_vta_comision_vta_vendedor_id'), Gral::getVars(1, 'buscador_vta_comision_vta_vendedor_id_comparador'));
	$criterio->add('vta_comision.vta_comision_tipo_estado_id', Gral::getVars(1, 'buscador_vta_comision_vta_comision_tipo_estado_id'), Gral::getVars(1, 'buscador_vta_comision_vta_comision_tipo_estado_id_comparador'));
	$criterio->add('vta_comision.fecha_emision', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_comision_fecha_emision')), Gral::getVars(1, 'buscador_vta_comision_fecha_emision_comparador'));
	$criterio->add('vta_comision.persona_descripcion', Gral::getVars(1, 'buscador_vta_comision_persona_descripcion'), Gral::getVars(1, 'buscador_vta_comision_persona_descripcion_comparador'));
	$criterio->add('vta_comision.codigo', Gral::getVars(1, 'buscador_vta_comision_codigo'), Gral::getVars(1, 'buscador_vta_comision_codigo_comparador'));
	$criterio->add('vta_comision.observacion', Gral::getVars(1, 'buscador_vta_comision_observacion'), Gral::getVars(1, 'buscador_vta_comision_observacion_comparador'));
	$criterio->add('vta_comision.estado', Gral::getVars(1, 'buscador_vta_comision_estado'), Gral::getVars(1, 'buscador_vta_comision_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_comision_estado', 'vta_comision_estado.vta_comision_id', 'vta_comision.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision_tipo_estado', 'vta_comision_tipo_estado.id', 'vta_comision_estado.vta_comision_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision_enviado', 'vta_comision_enviado.vta_comision_id', 'vta_comision.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision_vta_factura', 'vta_comision_vta_factura.vta_comision_id', 'vta_comision.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'vta_comision_vta_factura.vta_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision_gral_fp_forma_pago', 'vta_comision_gral_fp_forma_pago.vta_comision_id', 'vta_comision.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_comision_gral_fp_forma_pago.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision_gral_fp_forma_pago_cheque', 'vta_comision_gral_fp_forma_pago_cheque.vta_comision_id', 'vta_comision.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_banco', 'gral_banco.id', 'vta_comision_gral_fp_forma_pago_cheque.gral_banco_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_cheque', 'fnd_chq_cheque.vta_comision_id', 'vta_comision.id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_chequera', 'fnd_chq_chequera.id', 'fnd_chq_cheque.fnd_chq_chequera_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_tipo_emisor', 'fnd_chq_tipo_emisor.id', 'fnd_chq_cheque.fnd_chq_tipo_emisor_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_tipo_emision', 'fnd_chq_tipo_emision.id', 'fnd_chq_cheque.fnd_chq_tipo_emision_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_tipo_pago', 'fnd_chq_tipo_pago.id', 'fnd_chq_cheque.fnd_chq_tipo_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_tipo_estado', 'fnd_chq_tipo_estado.id', 'fnd_chq_cheque.fnd_chq_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.id', 'fnd_chq_cheque.vta_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_item', 'vta_recibo_item.id', 'fnd_chq_cheque.vta_recibo_item_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago', 'pde_orden_pago.id', 'fnd_chq_cheque.pde_orden_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_gral_fp_forma_pago', 'pde_orden_pago_gral_fp_forma_pago.id', 'fnd_chq_cheque.pde_orden_pago_gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo', 'pde_recibo.id', 'fnd_chq_cheque.pde_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_item', 'pde_recibo_item.id', 'fnd_chq_cheque.pde_recibo_item_id', 'LEFT JOIN');
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
		$criterio->addTabla('vta_comision');
		$criterio->setCriterios();		
}
?>

