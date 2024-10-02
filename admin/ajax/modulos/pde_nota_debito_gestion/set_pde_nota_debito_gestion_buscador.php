<?php
include_once '_autoload.php';

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeNotaDebito::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_nota_debito.id', Gral::getVars(1, 'buscador_pde_nota_debito_id'), Gral::getVars(1, 'buscador_pde_nota_debito_id_comparador'));
	$criterio->add('pde_nota_debito.descripcion', Gral::getVars(1, 'buscador_pde_nota_debito_descripcion'), Gral::getVars(1, 'buscador_pde_nota_debito_descripcion_comparador'));
	$criterio->add('pde_nota_debito.prv_proveedor_id', Gral::getVars(1, 'buscador_pde_nota_debito_prv_proveedor_id'), Gral::getVars(1, 'buscador_pde_nota_debito_prv_proveedor_id_comparador'));
	$criterio->add('pde_nota_debito.pde_tipo_nota_debito_id', Gral::getVars(1, 'buscador_pde_nota_debito_pde_tipo_nota_debito_id'), Gral::getVars(1, 'buscador_pde_nota_debito_pde_tipo_nota_debito_id_comparador'));
	$criterio->add('pde_nota_debito.gral_condicion_iva_id', Gral::getVars(1, 'buscador_pde_nota_debito_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_pde_nota_debito_gral_condicion_iva_id_comparador'));
	$criterio->add('pde_nota_debito.gral_tipo_personeria_id', Gral::getVars(1, 'buscador_pde_nota_debito_gral_tipo_personeria_id'), Gral::getVars(1, 'buscador_pde_nota_debito_gral_tipo_personeria_id_comparador'));
	$criterio->add('pde_nota_debito.gral_empresa_id', Gral::getVars(1, 'buscador_pde_nota_debito_gral_empresa_id'), Gral::getVars(1, 'buscador_pde_nota_debito_gral_empresa_id_comparador'));
	$criterio->add('pde_nota_debito.numero_nota_debito', Gral::getVars(1, 'buscador_pde_nota_debito_numero_nota_debito'), Gral::getVars(1, 'buscador_pde_nota_debito_numero_nota_debito_comparador'));
	$criterio->add('pde_nota_debito.cae', Gral::getVars(1, 'buscador_pde_nota_debito_cae'), Gral::getVars(1, 'buscador_pde_nota_debito_cae_comparador'));
	$criterio->add('pde_nota_debito.fecha_emision', Gral::getFechaToDB(Gral::getVars(1, 'buscador_pde_nota_debito_fecha_emision')), Gral::getVars(1, 'buscador_pde_nota_debito_fecha_emision_comparador'));
	$criterio->add('pde_nota_debito.persona_descripcion', Gral::getVars(1, 'buscador_pde_nota_debito_persona_descripcion'), Gral::getVars(1, 'buscador_pde_nota_debito_persona_descripcion_comparador'));
	$criterio->add('pde_nota_debito.razon_social', Gral::getVars(1, 'buscador_pde_nota_debito_razon_social'), Gral::getVars(1, 'buscador_pde_nota_debito_razon_social_comparador'));
	$criterio->add('pde_nota_debito.domicilio_legal', Gral::getVars(1, 'buscador_pde_nota_debito_domicilio_legal'), Gral::getVars(1, 'buscador_pde_nota_debito_domicilio_legal_comparador'));
	$criterio->add('pde_nota_debito.cuit', Gral::getVars(1, 'buscador_pde_nota_debito_cuit'), Gral::getVars(1, 'buscador_pde_nota_debito_cuit_comparador'));
	$criterio->add('pde_nota_debito.codigo', Gral::getVars(1, 'buscador_pde_nota_debito_codigo'), Gral::getVars(1, 'buscador_pde_nota_debito_codigo_comparador'));
	$criterio->add('pde_nota_debito.observacion', Gral::getVars(1, 'buscador_pde_nota_debito_observacion'), Gral::getVars(1, 'buscador_pde_nota_debito_observacion_comparador'));
	$criterio->add('pde_nota_debito.estado', Gral::getVars(1, 'buscador_pde_nota_debito_estado'), Gral::getVars(1, 'buscador_pde_nota_debito_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_nota_debito_ws_fe_ope_solicitud', 'pde_nota_debito_ws_fe_ope_solicitud.pde_nota_debito_id', 'pde_nota_debito.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud', 'ws_fe_ope_solicitud.id', 'pde_nota_debito_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_pde_nota_debito', 'pde_nota_credito_pde_nota_debito.pde_nota_debito_id', 'pde_nota_debito.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.id', 'pde_nota_credito_pde_nota_debito.pde_nota_credito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito_pde_factura_pde_orden_venta', 'pde_nota_debito_pde_factura_pde_orden_venta.pde_nota_debito_id', 'pde_nota_debito.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_orden_venta', 'pde_factura_pde_orden_venta.id', 'pde_nota_debito_pde_factura_pde_orden_venta.pde_factura_pde_orden_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_nota_debito_pde_factura_pde_orden_venta.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida', 'ins_unidad_medida.id', 'pde_nota_debito_pde_factura_pde_orden_venta.ins_unidad_medida_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'pde_nota_debito_pde_factura_pde_orden_venta.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito_pde_factura_pde_tributo', 'pde_nota_debito_pde_factura_pde_tributo.pde_nota_debito_id', 'pde_nota_debito.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_tributo', 'pde_factura_pde_tributo.id', 'pde_nota_debito_pde_factura_pde_tributo.pde_factura_pde_tributo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito_enviado', 'pde_nota_debito_enviado.pde_nota_debito_id', 'pde_nota_debito.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_nota_debito');
		$criterio->setCriterios();		
}
?>

