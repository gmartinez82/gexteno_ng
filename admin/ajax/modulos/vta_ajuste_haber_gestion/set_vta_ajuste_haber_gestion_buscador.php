<?php
include_once '_autoload.php';

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaAjusteHaber::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_ajuste_haber.id', Gral::getVars(1, 'buscador_vta_ajuste_haber_id'), Gral::getVars(1, 'buscador_vta_ajuste_haber_id_comparador'));
	$criterio->add('vta_ajuste_haber.descripcion', Gral::getVars(1, 'buscador_vta_ajuste_haber_descripcion'), Gral::getVars(1, 'buscador_vta_ajuste_haber_descripcion_comparador'));
	$criterio->add('vta_ajuste_haber.cli_cliente_id', Gral::getVars(1, 'buscador_vta_ajuste_haber_cli_cliente_id'), Gral::getVars(1, 'buscador_vta_ajuste_haber_cli_cliente_id_comparador'));
	$criterio->add('vta_ajuste_haber.vta_tipo_ajuste_haber_id', Gral::getVars(1, 'buscador_vta_ajuste_haber_vta_tipo_ajuste_haber_id'), Gral::getVars(1, 'buscador_vta_ajuste_haber_vta_tipo_ajuste_haber_id_comparador'));
	$criterio->add('vta_ajuste_haber.gral_condicion_iva_id', Gral::getVars(1, 'buscador_vta_ajuste_haber_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_vta_ajuste_haber_gral_condicion_iva_id_comparador'));
	$criterio->add('vta_ajuste_haber.gral_tipo_personeria_id', Gral::getVars(1, 'buscador_vta_ajuste_haber_gral_tipo_personeria_id'), Gral::getVars(1, 'buscador_vta_ajuste_haber_gral_tipo_personeria_id_comparador'));
	$criterio->add('vta_ajuste_haber.gral_empresa_id', Gral::getVars(1, 'buscador_vta_ajuste_haber_gral_empresa_id'), Gral::getVars(1, 'buscador_vta_ajuste_haber_gral_empresa_id_comparador'));
	$criterio->add('vta_ajuste_haber.numero_ajuste_haber', Gral::getVars(1, 'buscador_vta_ajuste_haber_numero_ajuste_haber'), Gral::getVars(1, 'buscador_vta_ajuste_haber_numero_ajuste_haber_comparador'));
	$criterio->add('vta_ajuste_haber.cae', Gral::getVars(1, 'buscador_vta_ajuste_haber_cae'), Gral::getVars(1, 'buscador_vta_ajuste_haber_cae_comparador'));
	$criterio->add('vta_ajuste_haber.fecha_emision', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_ajuste_haber_fecha_emision')), Gral::getVars(1, 'buscador_vta_ajuste_haber_fecha_emision_comparador'));
	$criterio->add('vta_ajuste_haber.persona_descripcion', Gral::getVars(1, 'buscador_vta_ajuste_haber_persona_descripcion'), Gral::getVars(1, 'buscador_vta_ajuste_haber_persona_descripcion_comparador'));
	$criterio->add('vta_ajuste_haber.razon_social', Gral::getVars(1, 'buscador_vta_ajuste_haber_razon_social'), Gral::getVars(1, 'buscador_vta_ajuste_haber_razon_social_comparador'));
	$criterio->add('vta_ajuste_haber.domicilio_legal', Gral::getVars(1, 'buscador_vta_ajuste_haber_domicilio_legal'), Gral::getVars(1, 'buscador_vta_ajuste_haber_domicilio_legal_comparador'));
	$criterio->add('vta_ajuste_haber.cuit', Gral::getVars(1, 'buscador_vta_ajuste_haber_cuit'), Gral::getVars(1, 'buscador_vta_ajuste_haber_cuit_comparador'));
	$criterio->add('vta_ajuste_haber.codigo', Gral::getVars(1, 'buscador_vta_ajuste_haber_codigo'), Gral::getVars(1, 'buscador_vta_ajuste_haber_codigo_comparador'));
	$criterio->add('vta_ajuste_haber.observacion', Gral::getVars(1, 'buscador_vta_ajuste_haber_observacion'), Gral::getVars(1, 'buscador_vta_ajuste_haber_observacion_comparador'));
	$criterio->add('vta_ajuste_haber.estado', Gral::getVars(1, 'buscador_vta_ajuste_haber_estado'), Gral::getVars(1, 'buscador_vta_ajuste_haber_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_ajuste_haber_enviado', 'vta_ajuste_haber_enviado.vta_ajuste_haber_id', 'vta_ajuste_haber.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber_item', 'vta_ajuste_haber_item.vta_ajuste_haber_id', 'vta_ajuste_haber.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_forma_pago', 'gral_forma_pago.id', 'vta_ajuste_haber_item.gral_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_haber_ws_fe_ope_solicitud', 'vta_ajuste_haber_ws_fe_ope_solicitud.vta_ajuste_haber_id', 'vta_ajuste_haber.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud', 'ws_fe_ope_solicitud.id', 'vta_ajuste_haber_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_ajuste_haber');
		$criterio->setCriterios();		
}
?>

