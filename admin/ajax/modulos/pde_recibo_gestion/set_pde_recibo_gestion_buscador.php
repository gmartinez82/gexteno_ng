<?php
include_once '_autoload.php';

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
	$criterio->add('pde_recibo.gral_condicion_iva_id', Gral::getVars(1, 'buscador_pde_recibo_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_pde_recibo_gral_condicion_iva_id_comparador'));
	$criterio->add('pde_recibo.gral_tipo_personeria_id', Gral::getVars(1, 'buscador_pde_recibo_gral_tipo_personeria_id'), Gral::getVars(1, 'buscador_pde_recibo_gral_tipo_personeria_id_comparador'));
	$criterio->add('pde_recibo.gral_empresa_id', Gral::getVars(1, 'buscador_pde_recibo_gral_empresa_id'), Gral::getVars(1, 'buscador_pde_recibo_gral_empresa_id_comparador'));
	$criterio->add('pde_recibo.numero_recibo', Gral::getVars(1, 'buscador_pde_recibo_numero_recibo'), Gral::getVars(1, 'buscador_pde_recibo_numero_recibo_comparador'));
	$criterio->add('pde_recibo.cae', Gral::getVars(1, 'buscador_pde_recibo_cae'), Gral::getVars(1, 'buscador_pde_recibo_cae_comparador'));
	$criterio->add('pde_recibo.fecha_emision', Gral::getFechaToDB(Gral::getVars(1, 'buscador_pde_recibo_fecha_emision')), Gral::getVars(1, 'buscador_pde_recibo_fecha_emision_comparador'));
	$criterio->add('pde_recibo.persona_descripcion', Gral::getVars(1, 'buscador_pde_recibo_persona_descripcion'), Gral::getVars(1, 'buscador_pde_recibo_persona_descripcion_comparador'));
	$criterio->add('pde_recibo.razon_social', Gral::getVars(1, 'buscador_pde_recibo_razon_social'), Gral::getVars(1, 'buscador_pde_recibo_razon_social_comparador'));
	$criterio->add('pde_recibo.domicilio_legal', Gral::getVars(1, 'buscador_pde_recibo_domicilio_legal'), Gral::getVars(1, 'buscador_pde_recibo_domicilio_legal_comparador'));
	$criterio->add('pde_recibo.cuit', Gral::getVars(1, 'buscador_pde_recibo_cuit'), Gral::getVars(1, 'buscador_pde_recibo_cuit_comparador'));
	$criterio->add('pde_recibo.codigo', Gral::getVars(1, 'buscador_pde_recibo_codigo'), Gral::getVars(1, 'buscador_pde_recibo_codigo_comparador'));
	$criterio->add('pde_recibo.observacion', Gral::getVars(1, 'buscador_pde_recibo_observacion'), Gral::getVars(1, 'buscador_pde_recibo_observacion_comparador'));
	$criterio->add('pde_recibo.estado', Gral::getVars(1, 'buscador_pde_recibo_estado'), Gral::getVars(1, 'buscador_pde_recibo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_recibo_enviado', 'pde_recibo_enviado.pde_recibo_id', 'pde_recibo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_item', 'pde_recibo_item.pde_recibo_id', 'pde_recibo.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_forma_pago', 'gral_forma_pago.id', 'pde_recibo_item.gral_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_ws_fe_ope_solicitud', 'pde_recibo_ws_fe_ope_solicitud.pde_recibo_id', 'pde_recibo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud', 'ws_fe_ope_solicitud.id', 'pde_recibo_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_recibo');
		$criterio->setCriterios();		
}
?>

