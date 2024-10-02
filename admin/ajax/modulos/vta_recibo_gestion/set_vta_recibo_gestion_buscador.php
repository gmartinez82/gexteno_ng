<?php
include_once '_autoload.php';

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaRecibo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_recibo.id', Gral::getVars(1, 'buscador_vta_recibo_id'), Gral::getVars(1, 'buscador_vta_recibo_id_comparador'));
	$criterio->add('vta_recibo.descripcion', Gral::getVars(1, 'buscador_vta_recibo_descripcion'), Gral::getVars(1, 'buscador_vta_recibo_descripcion_comparador'));
	$criterio->add('vta_recibo.cli_cliente_id', Gral::getVars(1, 'buscador_vta_recibo_cli_cliente_id'), Gral::getVars(1, 'buscador_vta_recibo_cli_cliente_id_comparador'));
	$criterio->add('vta_recibo.vta_tipo_recibo_id', Gral::getVars(1, 'buscador_vta_recibo_vta_tipo_recibo_id'), Gral::getVars(1, 'buscador_vta_recibo_vta_tipo_recibo_id_comparador'));
	$criterio->add('vta_recibo.gral_condicion_iva_id', Gral::getVars(1, 'buscador_vta_recibo_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_vta_recibo_gral_condicion_iva_id_comparador'));
	$criterio->add('vta_recibo.gral_tipo_personeria_id', Gral::getVars(1, 'buscador_vta_recibo_gral_tipo_personeria_id'), Gral::getVars(1, 'buscador_vta_recibo_gral_tipo_personeria_id_comparador'));
	$criterio->add('vta_recibo.gral_empresa_id', Gral::getVars(1, 'buscador_vta_recibo_gral_empresa_id'), Gral::getVars(1, 'buscador_vta_recibo_gral_empresa_id_comparador'));
	$criterio->add('vta_recibo.numero_recibo', Gral::getVars(1, 'buscador_vta_recibo_numero_recibo'), Gral::getVars(1, 'buscador_vta_recibo_numero_recibo_comparador'));
	$criterio->add('vta_recibo.cae', Gral::getVars(1, 'buscador_vta_recibo_cae'), Gral::getVars(1, 'buscador_vta_recibo_cae_comparador'));
	$criterio->add('vta_recibo.fecha_emision', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_recibo_fecha_emision')), Gral::getVars(1, 'buscador_vta_recibo_fecha_emision_comparador'));
	$criterio->add('vta_recibo.persona_descripcion', Gral::getVars(1, 'buscador_vta_recibo_persona_descripcion'), Gral::getVars(1, 'buscador_vta_recibo_persona_descripcion_comparador'));
	$criterio->add('vta_recibo.razon_social', Gral::getVars(1, 'buscador_vta_recibo_razon_social'), Gral::getVars(1, 'buscador_vta_recibo_razon_social_comparador'));
	$criterio->add('vta_recibo.domicilio_legal', Gral::getVars(1, 'buscador_vta_recibo_domicilio_legal'), Gral::getVars(1, 'buscador_vta_recibo_domicilio_legal_comparador'));
	$criterio->add('vta_recibo.cuit', Gral::getVars(1, 'buscador_vta_recibo_cuit'), Gral::getVars(1, 'buscador_vta_recibo_cuit_comparador'));
	$criterio->add('vta_recibo.codigo', Gral::getVars(1, 'buscador_vta_recibo_codigo'), Gral::getVars(1, 'buscador_vta_recibo_codigo_comparador'));
	$criterio->add('vta_recibo.observacion', Gral::getVars(1, 'buscador_vta_recibo_observacion'), Gral::getVars(1, 'buscador_vta_recibo_observacion_comparador'));
	$criterio->add('vta_recibo.estado', Gral::getVars(1, 'buscador_vta_recibo_estado'), Gral::getVars(1, 'buscador_vta_recibo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_recibo_enviado', 'vta_recibo_enviado.vta_recibo_id', 'vta_recibo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_item', 'vta_recibo_item.vta_recibo_id', 'vta_recibo.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_forma_pago', 'gral_forma_pago.id', 'vta_recibo_item.gral_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_ws_fe_ope_solicitud', 'vta_recibo_ws_fe_ope_solicitud.vta_recibo_id', 'vta_recibo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud', 'ws_fe_ope_solicitud.id', 'vta_recibo_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_recibo');
		$criterio->setCriterios();		
}
?>

