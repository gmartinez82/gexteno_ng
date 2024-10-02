<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(FndChqTipoPago::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('fnd_chq_tipo_pago.id', Gral::getVars(1, 'buscador_fnd_chq_tipo_pago_id'), Gral::getVars(1, 'buscador_fnd_chq_tipo_pago_id_comparador'));
	$criterio->add('fnd_chq_tipo_pago.descripcion', Gral::getVars(1, 'buscador_fnd_chq_tipo_pago_descripcion'), Gral::getVars(1, 'buscador_fnd_chq_tipo_pago_descripcion_comparador'));
	$criterio->add('fnd_chq_tipo_pago.codigo', Gral::getVars(1, 'buscador_fnd_chq_tipo_pago_codigo'), Gral::getVars(1, 'buscador_fnd_chq_tipo_pago_codigo_comparador'));
	$criterio->add('fnd_chq_tipo_pago.observacion', Gral::getVars(1, 'buscador_fnd_chq_tipo_pago_observacion'), Gral::getVars(1, 'buscador_fnd_chq_tipo_pago_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('fnd_chq_cheque', 'fnd_chq_cheque.fnd_chq_tipo_pago_id', 'fnd_chq_tipo_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_chequera', 'fnd_chq_chequera.id', 'fnd_chq_cheque.fnd_chq_chequera_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_banco', 'gral_banco.id', 'fnd_chq_cheque.gral_banco_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_tipo_emisor', 'fnd_chq_tipo_emisor.id', 'fnd_chq_cheque.fnd_chq_tipo_emisor_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_tipo_emision', 'fnd_chq_tipo_emision.id', 'fnd_chq_cheque.fnd_chq_tipo_emision_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_chq_tipo_estado', 'fnd_chq_tipo_estado.id', 'fnd_chq_cheque.fnd_chq_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.id', 'fnd_chq_cheque.vta_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_item', 'vta_recibo_item.id', 'fnd_chq_cheque.vta_recibo_item_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision', 'vta_comision.id', 'fnd_chq_cheque.vta_comision_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision_gral_fp_forma_pago', 'vta_comision_gral_fp_forma_pago.id', 'fnd_chq_cheque.vta_comision_gral_fp_forma_pago_id', 'LEFT JOIN');
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
		$criterio->addTabla('fnd_chq_tipo_pago');
		$criterio->setCriterios();		
}
?>

