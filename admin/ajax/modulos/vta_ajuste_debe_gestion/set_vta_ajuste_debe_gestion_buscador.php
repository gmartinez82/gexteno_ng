<?php
include_once '_autoload.php';

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaAjusteDebe::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_ajuste_debe.id', Gral::getVars(1, 'buscador_vta_ajuste_debe_id'), Gral::getVars(1, 'buscador_vta_ajuste_debe_id_comparador'));
	$criterio->add('vta_ajuste_debe.descripcion', Gral::getVars(1, 'buscador_vta_ajuste_debe_descripcion'), Gral::getVars(1, 'buscador_vta_ajuste_debe_descripcion_comparador'));
	$criterio->add('vta_ajuste_debe.cli_cliente_id', Gral::getVars(1, 'buscador_vta_ajuste_debe_cli_cliente_id'), Gral::getVars(1, 'buscador_vta_ajuste_debe_cli_cliente_id_comparador'));
	$criterio->add('vta_ajuste_debe.vta_ajuste_debe_tipo_estado_id', Gral::getVars(1, 'buscador_vta_ajuste_debe_vta_ajuste_debe_tipo_estado_id'), Gral::getVars(1, 'buscador_vta_ajuste_debe_vta_ajuste_debe_tipo_estado_id_comparador'));
	$criterio->add('vta_ajuste_debe.vta_tipo_ajuste_debe_id', Gral::getVars(1, 'buscador_vta_ajuste_debe_vta_tipo_ajuste_debe_id'), Gral::getVars(1, 'buscador_vta_ajuste_debe_vta_tipo_ajuste_debe_id_comparador'));
	$criterio->add('vta_ajuste_debe.gral_condicion_iva_id', Gral::getVars(1, 'buscador_vta_ajuste_debe_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_vta_ajuste_debe_gral_condicion_iva_id_comparador'));
	$criterio->add('vta_ajuste_debe.gral_tipo_personeria_id', Gral::getVars(1, 'buscador_vta_ajuste_debe_gral_tipo_personeria_id'), Gral::getVars(1, 'buscador_vta_ajuste_debe_gral_tipo_personeria_id_comparador'));
	$criterio->add('vta_ajuste_debe.numero_ajuste_debe', Gral::getVars(1, 'buscador_vta_ajuste_debe_numero_ajuste_debe'), Gral::getVars(1, 'buscador_vta_ajuste_debe_numero_factura_comparador'));
	$criterio->add('vta_ajuste_debe.fecha_emision', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_ajuste_debe_fecha_emision')), Gral::getVars(1, 'buscador_vta_ajuste_debe_fecha_emision_comparador'));
	$criterio->add('vta_ajuste_debe.persona_descripcion', Gral::getVars(1, 'buscador_vta_ajuste_debe_persona_descripcion'), Gral::getVars(1, 'buscador_vta_ajuste_debe_persona_descripcion_comparador'));
	$criterio->add('vta_ajuste_debe.razon_social', Gral::getVars(1, 'buscador_vta_ajuste_debe_razon_social'), Gral::getVars(1, 'buscador_vta_ajuste_debe_razon_social_comparador'));
	$criterio->add('vta_ajuste_debe.domicilio_legal', Gral::getVars(1, 'buscador_vta_ajuste_debe_domicilio_legal'), Gral::getVars(1, 'buscador_vta_ajuste_debe_domicilio_legal_comparador'));
	$criterio->add('vta_ajuste_debe.cuit', Gral::getVars(1, 'buscador_vta_ajuste_debe_cuit'), Gral::getVars(1, 'buscador_vta_ajuste_debe_cuit_comparador'));
	$criterio->add('vta_ajuste_debe.codigo', Gral::getVars(1, 'buscador_vta_ajuste_debe_codigo'), Gral::getVars(1, 'buscador_vta_ajuste_debe_codigo_comparador'));
	$criterio->add('vta_ajuste_debe.observacion', Gral::getVars(1, 'buscador_vta_ajuste_debe_observacion'), Gral::getVars(1, 'buscador_vta_ajuste_debe_observacion_comparador'));
	$criterio->add('vta_ajuste_debe.estado', Gral::getVars(1, 'buscador_vta_ajuste_debe_estado'), Gral::getVars(1, 'buscador_vta_ajuste_debe_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_ajuste_debe_estado', 'vta_ajuste_debe_estado.vta_ajuste_debe_id', 'vta_ajuste_debe.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe_tipo_estado', 'vta_ajuste_debe_tipo_estado.id', 'vta_ajuste_debe_estado.vta_ajuste_debe_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe_enviado', 'vta_ajuste_debe_enviado.vta_ajuste_debe_id', 'vta_ajuste_debe.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe_vta_orden_venta', 'vta_ajuste_debe_vta_orden_venta.vta_ajuste_debe_id', 'vta_ajuste_debe.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.id', 'vta_ajuste_debe_vta_orden_venta.vta_orden_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_ajuste_debe_vta_orden_venta.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida', 'ins_unidad_medida.id', 'vta_ajuste_debe_vta_orden_venta.ins_unidad_medida_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_ajuste_debe_vta_orden_venta.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_ajuste_debe');
		$criterio->setCriterios();		
}
?>

