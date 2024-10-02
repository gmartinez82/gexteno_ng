<?php
include_once '_autoload.php';

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeNotaCredito::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_nota_credito.id', Gral::getVars(1, 'buscador_pde_nota_credito_id'), Gral::getVars(1, 'buscador_pde_nota_credito_id_comparador'));
	$criterio->add('pde_nota_credito.descripcion', Gral::getVars(1, 'buscador_pde_nota_credito_descripcion'), Gral::getVars(1, 'buscador_pde_nota_credito_descripcion_comparador'));
	$criterio->add('pde_nota_credito.prv_proveedor_id', Gral::getVars(1, 'buscador_pde_nota_credito_prv_proveedor_id'), Gral::getVars(1, 'buscador_pde_nota_credito_prv_proveedor_id_comparador'));
	$criterio->add('pde_nota_credito.pde_tipo_nota_credito_id', Gral::getVars(1, 'buscador_pde_nota_credito_pde_tipo_nota_credito_id'), Gral::getVars(1, 'buscador_pde_nota_credito_pde_tipo_nota_credito_id_comparador'));
	$criterio->add('pde_nota_credito.gral_condicion_iva_id', Gral::getVars(1, 'buscador_pde_nota_credito_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_pde_nota_credito_gral_condicion_iva_id_comparador'));
	$criterio->add('pde_nota_credito.gral_tipo_personeria_id', Gral::getVars(1, 'buscador_pde_nota_credito_gral_tipo_personeria_id'), Gral::getVars(1, 'buscador_pde_nota_credito_gral_tipo_personeria_id_comparador'));
	$criterio->add('pde_nota_credito.gral_empresa_id', Gral::getVars(1, 'buscador_pde_nota_credito_gral_empresa_id'), Gral::getVars(1, 'buscador_pde_nota_credito_gral_empresa_id_comparador'));
	$criterio->add('pde_nota_credito.numero_nota_credito', Gral::getVars(1, 'buscador_pde_nota_credito_numero_nota_credito'), Gral::getVars(1, 'buscador_pde_nota_credito_numero_nota_credito_comparador'));
	$criterio->add('pde_nota_credito.cae', Gral::getVars(1, 'buscador_pde_nota_credito_cae'), Gral::getVars(1, 'buscador_pde_nota_credito_cae_comparador'));
	$criterio->add('pde_nota_credito.fecha_emision', Gral::getFechaToDB(Gral::getVars(1, 'buscador_pde_nota_credito_fecha_emision')), Gral::getVars(1, 'buscador_pde_nota_credito_fecha_emision_comparador'));
	$criterio->add('pde_nota_credito.persona_descripcion', Gral::getVars(1, 'buscador_pde_nota_credito_persona_descripcion'), Gral::getVars(1, 'buscador_pde_nota_credito_persona_descripcion_comparador'));
	$criterio->add('pde_nota_credito.razon_social', Gral::getVars(1, 'buscador_pde_nota_credito_razon_social'), Gral::getVars(1, 'buscador_pde_nota_credito_razon_social_comparador'));
	$criterio->add('pde_nota_credito.domicilio_legal', Gral::getVars(1, 'buscador_pde_nota_credito_domicilio_legal'), Gral::getVars(1, 'buscador_pde_nota_credito_domicilio_legal_comparador'));
	$criterio->add('pde_nota_credito.cuit', Gral::getVars(1, 'buscador_pde_nota_credito_cuit'), Gral::getVars(1, 'buscador_pde_nota_credito_cuit_comparador'));
	$criterio->add('pde_nota_credito.codigo', Gral::getVars(1, 'buscador_pde_nota_credito_codigo'), Gral::getVars(1, 'buscador_pde_nota_credito_codigo_comparador'));
	$criterio->add('pde_nota_credito.observacion', Gral::getVars(1, 'buscador_pde_nota_credito_observacion'), Gral::getVars(1, 'buscador_pde_nota_credito_observacion_comparador'));
	$criterio->add('pde_nota_credito.estado', Gral::getVars(1, 'buscador_pde_nota_credito_estado'), Gral::getVars(1, 'buscador_pde_nota_credito_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_nota_credito_ws_fe_ope_solicitud', 'pde_nota_credito_ws_fe_ope_solicitud.pde_nota_credito_id', 'pde_nota_credito.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud', 'ws_fe_ope_solicitud.id', 'pde_nota_credito_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_pde_nota_debito', 'pde_nota_credito_pde_nota_debito.pde_nota_credito_id', 'pde_nota_credito.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.id', 'pde_nota_credito_pde_nota_debito.pde_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_pde_factura_pde_orden_venta', 'pde_nota_credito_pde_factura_pde_orden_venta.pde_nota_credito_id', 'pde_nota_credito.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_orden_venta', 'pde_factura_pde_orden_venta.id', 'pde_nota_credito_pde_factura_pde_orden_venta.pde_factura_pde_orden_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_nota_credito_pde_factura_pde_orden_venta.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida', 'ins_unidad_medida.id', 'pde_nota_credito_pde_factura_pde_orden_venta.ins_unidad_medida_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'pde_nota_credito_pde_factura_pde_orden_venta.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_pde_factura_pde_tributo', 'pde_nota_credito_pde_factura_pde_tributo.pde_nota_credito_id', 'pde_nota_credito.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_tributo', 'pde_factura_pde_tributo.id', 'pde_nota_credito_pde_factura_pde_tributo.pde_factura_pde_tributo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_nota_credito', 'pde_factura_pde_nota_credito.pde_nota_credito_id', 'pde_nota_credito.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.id', 'pde_factura_pde_nota_credito.pde_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito_item', 'pde_nota_credito_item.pde_nota_credito_id', 'pde_nota_credito.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_nota_credito');
		$criterio->setCriterios();		
}
?>

