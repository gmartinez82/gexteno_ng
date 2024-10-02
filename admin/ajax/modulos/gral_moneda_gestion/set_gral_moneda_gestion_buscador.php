<?php
include_once '_autoload.php';

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralMoneda::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_moneda.id', Gral::getVars(1, 'buscador_gral_moneda_id'), Gral::getVars(1, 'buscador_gral_moneda_id_comparador'));
	$criterio->add('gral_moneda.descripcion', Gral::getVars(1, 'buscador_gral_moneda_descripcion'), Gral::getVars(1, 'buscador_gral_moneda_descripcion_comparador'));
	$criterio->add('gral_moneda.codigo', Gral::getVars(1, 'buscador_gral_moneda_codigo'), Gral::getVars(1, 'buscador_gral_moneda_codigo_comparador'));
	$criterio->add('gral_moneda.simbolo', Gral::getVars(1, 'buscador_gral_moneda_simbolo'), Gral::getVars(1, 'buscador_gral_moneda_simbolo_comparador'));
	$criterio->add('gral_moneda.cotizacion_respecto_peso', Gral::getVars(1, 'buscador_gral_moneda_cotizacion_respecto_peso'), Gral::getVars(1, 'buscador_gral_moneda_cotizacion_respecto_peso_comparador'));
	$criterio->add('gral_moneda.observacion', Gral::getVars(1, 'buscador_gral_moneda_observacion'), Gral::getVars(1, 'buscador_gral_moneda_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_cotizacion', 'pde_cotizacion.gral_moneda_id', 'gral_moneda.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido', 'pde_pedido.id', 'pde_cotizacion.pde_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_cotizacion.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_cotizacion.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_marca', 'ins_marca.id', 'pde_cotizacion.ins_marca_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.gral_moneda_id', 'gral_moneda.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_oc.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion', 'pde_recepcion.gral_moneda_id', 'gral_moneda.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_recepcion', 'pde_tipo_recepcion.id', 'pde_recepcion.pde_tipo_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'prv_proveedor.geo_localidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'prv_proveedor.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_moneda');
		$criterio->setCriterios();		
}
?>

