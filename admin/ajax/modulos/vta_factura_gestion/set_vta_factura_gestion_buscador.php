<?php
include_once '_autoload.php';

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaFactura::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_factura.id', Gral::getVars(1, 'buscador_vta_factura_id'), Gral::getVars(1, 'buscador_vta_factura_id_comparador'));
	$criterio->add('vta_factura.descripcion', Gral::getVars(1, 'buscador_vta_factura_descripcion'), Gral::getVars(1, 'buscador_vta_factura_descripcion_comparador'));
	$criterio->add('vta_factura.cli_cliente_id', Gral::getVars(1, 'buscador_vta_factura_cli_cliente_id'), Gral::getVars(1, 'buscador_vta_factura_cli_cliente_id_comparador'));
	$criterio->add('vta_factura.vta_factura_tipo_estado_id', Gral::getVars(1, 'buscador_vta_factura_vta_factura_tipo_estado_id'), Gral::getVars(1, 'buscador_vta_factura_vta_factura_tipo_estado_id_comparador'));
	$criterio->add('vta_factura.vta_tipo_factura_id', Gral::getVars(1, 'buscador_vta_factura_vta_tipo_factura_id'), Gral::getVars(1, 'buscador_vta_factura_vta_tipo_factura_id_comparador'));
	$criterio->add('vta_factura.gral_condicion_iva_id', Gral::getVars(1, 'buscador_vta_factura_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_vta_factura_gral_condicion_iva_id_comparador'));
	$criterio->add('vta_factura.gral_tipo_personeria_id', Gral::getVars(1, 'buscador_vta_factura_gral_tipo_personeria_id'), Gral::getVars(1, 'buscador_vta_factura_gral_tipo_personeria_id_comparador'));
	$criterio->add('vta_factura.numero_factura', Gral::getVars(1, 'buscador_vta_factura_numero_factura'), Gral::getVars(1, 'buscador_vta_factura_numero_factura_comparador'));
	$criterio->add('vta_factura.fecha_emision', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_factura_fecha_emision')), Gral::getVars(1, 'buscador_vta_factura_fecha_emision_comparador'));
	$criterio->add('vta_factura.persona_descripcion', Gral::getVars(1, 'buscador_vta_factura_persona_descripcion'), Gral::getVars(1, 'buscador_vta_factura_persona_descripcion_comparador'));
	$criterio->add('vta_factura.razon_social', Gral::getVars(1, 'buscador_vta_factura_razon_social'), Gral::getVars(1, 'buscador_vta_factura_razon_social_comparador'));
	$criterio->add('vta_factura.domicilio_legal', Gral::getVars(1, 'buscador_vta_factura_domicilio_legal'), Gral::getVars(1, 'buscador_vta_factura_domicilio_legal_comparador'));
	$criterio->add('vta_factura.cuit', Gral::getVars(1, 'buscador_vta_factura_cuit'), Gral::getVars(1, 'buscador_vta_factura_cuit_comparador'));
	$criterio->add('vta_factura.codigo', Gral::getVars(1, 'buscador_vta_factura_codigo'), Gral::getVars(1, 'buscador_vta_factura_codigo_comparador'));
	$criterio->add('vta_factura.observacion', Gral::getVars(1, 'buscador_vta_factura_observacion'), Gral::getVars(1, 'buscador_vta_factura_observacion_comparador'));
	$criterio->add('vta_factura.estado', Gral::getVars(1, 'buscador_vta_factura_estado'), Gral::getVars(1, 'buscador_vta_factura_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_factura_estado', 'vta_factura_estado.vta_factura_id', 'vta_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_tipo_estado', 'vta_factura_tipo_estado.id', 'vta_factura_estado.vta_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_enviado', 'vta_factura_enviado.vta_factura_id', 'vta_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_vta_orden_venta', 'vta_factura_vta_orden_venta.vta_factura_id', 'vta_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.id', 'vta_factura_vta_orden_venta.vta_orden_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_factura_vta_orden_venta.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida', 'ins_unidad_medida.id', 'vta_factura_vta_orden_venta.ins_unidad_medida_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_factura_vta_orden_venta.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_factura');
		$criterio->setCriterios();		
}
?>

