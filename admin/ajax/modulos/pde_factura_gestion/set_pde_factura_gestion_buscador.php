<?php
include_once '_autoload.php';

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeFactura::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_factura.id', Gral::getVars(1, 'buscador_pde_factura_id'), Gral::getVars(1, 'buscador_pde_factura_id_comparador'));
	$criterio->add('pde_factura.descripcion', Gral::getVars(1, 'buscador_pde_factura_descripcion'), Gral::getVars(1, 'buscador_pde_factura_descripcion_comparador'));
	$criterio->add('pde_factura.prv_proveedor_id', Gral::getVars(1, 'buscador_pde_factura_prv_proveedor_id'), Gral::getVars(1, 'buscador_pde_factura_prv_proveedor_id_comparador'));
	$criterio->add('pde_factura.pde_factura_tipo_estado_id', Gral::getVars(1, 'buscador_pde_factura_pde_factura_tipo_estado_id'), Gral::getVars(1, 'buscador_pde_factura_pde_factura_tipo_estado_id_comparador'));
	$criterio->add('pde_factura.pde_tipo_factura_id', Gral::getVars(1, 'buscador_pde_factura_pde_tipo_factura_id'), Gral::getVars(1, 'buscador_pde_factura_pde_tipo_factura_id_comparador'));
	$criterio->add('pde_factura.gral_condicion_iva_id', Gral::getVars(1, 'buscador_pde_factura_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_pde_factura_gral_condicion_iva_id_comparador'));
	$criterio->add('pde_factura.gral_tipo_personeria_id', Gral::getVars(1, 'buscador_pde_factura_gral_tipo_personeria_id'), Gral::getVars(1, 'buscador_pde_factura_gral_tipo_personeria_id_comparador'));
	$criterio->add('pde_factura.numero_factura', Gral::getVars(1, 'buscador_pde_factura_numero_factura'), Gral::getVars(1, 'buscador_pde_factura_numero_factura_comparador'));
	$criterio->add('pde_factura.fecha_emision', Gral::getFechaToDB(Gral::getVars(1, 'buscador_pde_factura_fecha_emision')), Gral::getVars(1, 'buscador_pde_factura_fecha_emision_comparador'));
	$criterio->add('pde_factura.persona_descripcion', Gral::getVars(1, 'buscador_pde_factura_persona_descripcion'), Gral::getVars(1, 'buscador_pde_factura_persona_descripcion_comparador'));
	$criterio->add('pde_factura.razon_social', Gral::getVars(1, 'buscador_pde_factura_razon_social'), Gral::getVars(1, 'buscador_pde_factura_razon_social_comparador'));
	$criterio->add('pde_factura.domicilio_legal', Gral::getVars(1, 'buscador_pde_factura_domicilio_legal'), Gral::getVars(1, 'buscador_pde_factura_domicilio_legal_comparador'));
	$criterio->add('pde_factura.cuit', Gral::getVars(1, 'buscador_pde_factura_cuit'), Gral::getVars(1, 'buscador_pde_factura_cuit_comparador'));
	$criterio->add('pde_factura.codigo', Gral::getVars(1, 'buscador_pde_factura_codigo'), Gral::getVars(1, 'buscador_pde_factura_codigo_comparador'));
	$criterio->add('pde_factura.observacion', Gral::getVars(1, 'buscador_pde_factura_observacion'), Gral::getVars(1, 'buscador_pde_factura_observacion_comparador'));
	$criterio->add('pde_factura.estado', Gral::getVars(1, 'buscador_pde_factura_estado'), Gral::getVars(1, 'buscador_pde_factura_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_factura_estado', 'pde_factura_estado.pde_factura_id', 'pde_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_tipo_estado', 'pde_factura_tipo_estado.id', 'pde_factura_estado.pde_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_enviado', 'pde_factura_enviado.pde_factura_id', 'pde_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_oc', 'pde_factura_pde_oc.pde_factura_id', 'pde_factura.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.id', 'pde_factura_pde_oc.pde_oc_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_factura_pde_oc.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida', 'ins_unidad_medida.id', 'pde_factura_pde_oc.ins_unidad_medida_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'pde_factura_pde_oc.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_factura');
		$criterio->setCriterios();		
}
?>

