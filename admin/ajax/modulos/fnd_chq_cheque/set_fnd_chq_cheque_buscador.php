<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(FndChqCheque::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('fnd_chq_cheque.id', Gral::getVars(1, 'buscador_fnd_chq_cheque_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_id_comparador'));
	$criterio->add('fnd_chq_cheque.descripcion', Gral::getVars(1, 'buscador_fnd_chq_cheque_descripcion'), Gral::getVars(1, 'buscador_fnd_chq_cheque_descripcion_comparador'));
	$criterio->add('fnd_chq_cheque.fnd_chq_chequera_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_chq_chequera_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_chq_chequera_id_comparador'));
	$criterio->add('fnd_chq_cheque.gral_banco_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_gral_banco_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_gral_banco_id_comparador'));
	$criterio->add('fnd_chq_cheque.codigo_sucursal', Gral::getVars(1, 'buscador_fnd_chq_cheque_codigo_sucursal'), Gral::getVars(1, 'buscador_fnd_chq_cheque_codigo_sucursal_comparador'));
	$criterio->add('fnd_chq_cheque.numero', Gral::getVars(1, 'buscador_fnd_chq_cheque_numero'), Gral::getVars(1, 'buscador_fnd_chq_cheque_numero_comparador'));
	$criterio->add('fnd_chq_cheque.fecha_emision', Gral::getFechaToDB(Gral::getVars(1, 'buscador_fnd_chq_cheque_fecha_emision')), Gral::getVars(1, 'buscador_fnd_chq_cheque_fecha_emision_comparador'));
	$criterio->add('fnd_chq_cheque.fecha_cobro', Gral::getFechaToDB(Gral::getVars(1, 'buscador_fnd_chq_cheque_fecha_cobro')), Gral::getVars(1, 'buscador_fnd_chq_cheque_fecha_cobro_comparador'));
	$criterio->add('fnd_chq_cheque.fecha_acreditacion', Gral::getFechaToDB(Gral::getVars(1, 'buscador_fnd_chq_cheque_fecha_acreditacion')), Gral::getVars(1, 'buscador_fnd_chq_cheque_fecha_acreditacion_comparador'));
	$criterio->add('fnd_chq_cheque.fecha_vencimiento', Gral::getFechaToDB(Gral::getVars(1, 'buscador_fnd_chq_cheque_fecha_vencimiento')), Gral::getVars(1, 'buscador_fnd_chq_cheque_fecha_vencimiento_comparador'));
	$criterio->add('fnd_chq_cheque.firmante', Gral::getVars(1, 'buscador_fnd_chq_cheque_firmante'), Gral::getVars(1, 'buscador_fnd_chq_cheque_firmante_comparador'));
	$criterio->add('fnd_chq_cheque.entregador', Gral::getVars(1, 'buscador_fnd_chq_cheque_entregador'), Gral::getVars(1, 'buscador_fnd_chq_cheque_entregador_comparador'));
	$criterio->add('fnd_chq_cheque.fnd_chq_tipo_emisor_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_chq_tipo_emisor_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_chq_tipo_emisor_id_comparador'));
	$criterio->add('fnd_chq_cheque.fnd_chq_tipo_emision_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_chq_tipo_emision_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_chq_tipo_emision_id_comparador'));
	$criterio->add('fnd_chq_cheque.fnd_chq_tipo_pago_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_chq_tipo_pago_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_chq_tipo_pago_id_comparador'));
	$criterio->add('fnd_chq_cheque.fnd_chq_tipo_estado_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_chq_tipo_estado_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_chq_tipo_estado_id_comparador'));
	$criterio->add('fnd_chq_cheque.importe', Gral::getVars(1, 'buscador_fnd_chq_cheque_importe'), Gral::getVars(1, 'buscador_fnd_chq_cheque_importe_comparador'));
	$criterio->add('fnd_chq_cheque.cruzado', Gral::getVars(1, 'buscador_fnd_chq_cheque_cruzado'), Gral::getVars(1, 'buscador_fnd_chq_cheque_cruzado_comparador'));
	$criterio->add('fnd_chq_cheque.vta_recibo_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_vta_recibo_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_vta_recibo_id_comparador'));
	$criterio->add('fnd_chq_cheque.vta_recibo_item_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_vta_recibo_item_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_vta_recibo_item_id_comparador'));
	$criterio->add('fnd_chq_cheque.vta_comision_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_vta_comision_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_vta_comision_id_comparador'));
	$criterio->add('fnd_chq_cheque.vta_comision_gral_fp_forma_pago_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_vta_comision_gral_fp_forma_pago_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_vta_comision_gral_fp_forma_pago_id_comparador'));
	$criterio->add('fnd_chq_cheque.pde_orden_pago_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_pde_orden_pago_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_pde_orden_pago_id_comparador'));
	$criterio->add('fnd_chq_cheque.pde_orden_pago_gral_fp_forma_pago_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_pde_orden_pago_gral_fp_forma_pago_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_pde_orden_pago_gral_fp_forma_pago_id_comparador'));
	$criterio->add('fnd_chq_cheque.pde_recibo_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_pde_recibo_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_pde_recibo_id_comparador'));
	$criterio->add('fnd_chq_cheque.pde_recibo_item_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_pde_recibo_item_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_pde_recibo_item_id_comparador'));
	$criterio->add('fnd_chq_cheque.fnd_caja_movimiento_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_caja_movimiento_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_caja_movimiento_id_comparador'));
	$criterio->add('fnd_chq_cheque.fnd_caja_movimiento_item_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_caja_movimiento_item_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_caja_movimiento_item_id_comparador'));
	$criterio->add('fnd_chq_cheque.fnd_caja_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_caja_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_caja_id_comparador'));
	$criterio->add('fnd_chq_cheque.gral_caja_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_gral_caja_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_gral_caja_id_comparador'));
	$criterio->add('fnd_chq_cheque.fnd_caja_ingreso_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_caja_ingreso_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_caja_ingreso_id_comparador'));
	$criterio->add('fnd_chq_cheque.fnd_caja_egreso_id', Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_caja_egreso_id'), Gral::getVars(1, 'buscador_fnd_chq_cheque_fnd_caja_egreso_id_comparador'));
	$criterio->add('fnd_chq_cheque.codigo', Gral::getVars(1, 'buscador_fnd_chq_cheque_codigo'), Gral::getVars(1, 'buscador_fnd_chq_cheque_codigo_comparador'));
	$criterio->add('fnd_chq_cheque.observacion', Gral::getVars(1, 'buscador_fnd_chq_cheque_observacion'), Gral::getVars(1, 'buscador_fnd_chq_cheque_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('fnd_chq_estado', 'fnd_chq_estado.fnd_chq_cheque_id', 'fnd_chq_cheque.id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_tipo_estado', 'fnd_chq_tipo_estado.id', 'fnd_chq_estado.fnd_chq_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'fnd_chq_estado.fnd_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_caja', 'gral_caja.id', 'fnd_chq_estado.gral_caja_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('fnd_chq_cheque');
		$criterio->setCriterios();		
}
?>

