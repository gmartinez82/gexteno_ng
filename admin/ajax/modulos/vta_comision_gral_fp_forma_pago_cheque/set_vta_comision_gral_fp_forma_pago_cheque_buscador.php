<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaComisionGralFpFormaPagoCheque::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_comision_gral_fp_forma_pago_cheque.id', Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_id'), Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_id_comparador'));
	$criterio->add('vta_comision_gral_fp_forma_pago_cheque.descripcion', Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_descripcion'), Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_descripcion_comparador'));
	$criterio->add('vta_comision_gral_fp_forma_pago_cheque.vta_comision_id', Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_vta_comision_id'), Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_vta_comision_id_comparador'));
	$criterio->add('vta_comision_gral_fp_forma_pago_cheque.vta_comision_gral_fp_forma_pago_id', Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_vta_comision_gral_fp_forma_pago_id'), Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_vta_comision_gral_fp_forma_pago_id_comparador'));
	$criterio->add('vta_comision_gral_fp_forma_pago_cheque.gral_banco_id', Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_gral_banco_id'), Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_gral_banco_id_comparador'));
	$criterio->add('vta_comision_gral_fp_forma_pago_cheque.numero_cheque', Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_numero_cheque'), Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_numero_cheque_comparador'));
	$criterio->add('vta_comision_gral_fp_forma_pago_cheque.fecha_emision', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_fecha_emision')), Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_fecha_emision_comparador'));
	$criterio->add('vta_comision_gral_fp_forma_pago_cheque.fecha_cobro', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_fecha_cobro')), Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_fecha_cobro_comparador'));
	$criterio->add('vta_comision_gral_fp_forma_pago_cheque.firmante', Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_firmante'), Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_firmante_comparador'));
	$criterio->add('vta_comision_gral_fp_forma_pago_cheque.entregador', Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_entregador'), Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_entregador_comparador'));
	$criterio->add('vta_comision_gral_fp_forma_pago_cheque.codigo', Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_codigo'), Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_codigo_comparador'));
	$criterio->add('vta_comision_gral_fp_forma_pago_cheque.observacion', Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_observacion'), Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_observacion_comparador'));
	$criterio->add('vta_comision_gral_fp_forma_pago_cheque.estado', Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_estado'), Gral::getVars(1, 'buscador_vta_comision_gral_fp_forma_pago_cheque_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_comision_gral_fp_forma_pago_cheque');
		$criterio->setCriterios();		
}
?>

