<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsVentaMlInfo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_venta_ml_info.id', Gral::getVars(1, 'buscador_ins_venta_ml_info_id'), Gral::getVars(1, 'buscador_ins_venta_ml_info_id_comparador'));
	$criterio->add('ins_venta_ml_info.ins_insumo_id', Gral::getVars(1, 'buscador_ins_venta_ml_info_ins_insumo_id'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ins_insumo_id_comparador'));
	$criterio->add('ins_venta_ml_info.descripcion', Gral::getVars(1, 'buscador_ins_venta_ml_info_descripcion'), Gral::getVars(1, 'buscador_ins_venta_ml_info_descripcion_comparador'));
	$criterio->add('ins_venta_ml_info.descripcion_breve', Gral::getVars(1, 'buscador_ins_venta_ml_info_descripcion_breve'), Gral::getVars(1, 'buscador_ins_venta_ml_info_descripcion_breve_comparador'));
	$criterio->add('ins_venta_ml_info.descripcion_empresa', Gral::getVars(1, 'buscador_ins_venta_ml_info_descripcion_empresa'), Gral::getVars(1, 'buscador_ins_venta_ml_info_descripcion_empresa_comparador'));
	$criterio->add('ins_venta_ml_info.cantidad', Gral::getVars(1, 'buscador_ins_venta_ml_info_cantidad'), Gral::getVars(1, 'buscador_ins_venta_ml_info_cantidad_comparador'));
	$criterio->add('ins_venta_ml_info.importe', Gral::getVars(1, 'buscador_ins_venta_ml_info_importe'), Gral::getVars(1, 'buscador_ins_venta_ml_info_importe_comparador'));
	$criterio->add('ins_venta_ml_info.codigo', Gral::getVars(1, 'buscador_ins_venta_ml_info_codigo'), Gral::getVars(1, 'buscador_ins_venta_ml_info_codigo_comparador'));
	$criterio->add('ins_venta_ml_info.ml_identificador', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_identificador'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_identificador_comparador'));
	$criterio->add('ins_venta_ml_info.ml_category_id', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_category_id'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_category_id_comparador'));
	$criterio->add('ins_venta_ml_info.ml_category_desc', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_category_desc'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_category_desc_comparador'));
	$criterio->add('ins_venta_ml_info.ml_category_cod', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_category_cod'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_category_cod_comparador'));
	$criterio->add('ins_venta_ml_info.ml_listing_type_id', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_listing_type_id'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_listing_type_id_comparador'));
	$criterio->add('ins_venta_ml_info.ml_listing_type_desc', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_listing_type_desc'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_listing_type_desc_comparador'));
	$criterio->add('ins_venta_ml_info.ml_condition_id', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_condition_id'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_condition_id_comparador'));
	$criterio->add('ins_venta_ml_info.ml_condition_desc', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_condition_desc'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_condition_desc_comparador'));
	$criterio->add('ins_venta_ml_info.ml_shipping_mode_id', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_shipping_mode_id'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_shipping_mode_id_comparador'));
	$criterio->add('ins_venta_ml_info.ml_shipping_mode_desc', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_shipping_mode_desc'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_shipping_mode_desc_comparador'));
	$criterio->add('ins_venta_ml_info.ml_permalink', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_permalink'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_permalink_comparador'));
	$criterio->add('ins_venta_ml_info.ml_start_time', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_start_time'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_start_time_comparador'));
	$criterio->add('ins_venta_ml_info.ml_expiration_time', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_expiration_time'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_expiration_time_comparador'));
	$criterio->add('ins_venta_ml_info.ml_seller', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_seller'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_seller_comparador'));
	$criterio->add('ins_venta_ml_info.ml_status', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_status'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_status_comparador'));
	$criterio->add('ins_venta_ml_info.ml_item_status_id', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_item_status_id'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_item_status_id_comparador'));
	$criterio->add('ins_venta_ml_info.ml_initial_quantity', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_initial_quantity'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_initial_quantity_comparador'));
	$criterio->add('ins_venta_ml_info.ml_available_quantity', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_available_quantity'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_available_quantity_comparador'));
	$criterio->add('ins_venta_ml_info.ml_sold_quantity', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_sold_quantity'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_sold_quantity_comparador'));
	$criterio->add('ins_venta_ml_info.ml_price', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_price'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_price_comparador'));
	$criterio->add('ins_venta_ml_info.ml_ultima_actualizacion', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_ultima_actualizacion')), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_ultima_actualizacion_comparador'));
	$criterio->add('ins_venta_ml_info.ml_free_shipping', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_free_shipping'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_free_shipping_comparador'));
	$criterio->add('ins_venta_ml_info.ml_local_pickup', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_local_pickup'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_local_pickup_comparador'));
	$criterio->add('ins_venta_ml_info.observacion', Gral::getVars(1, 'buscador_ins_venta_ml_info_observacion'), Gral::getVars(1, 'buscador_ins_venta_ml_info_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_venta_ml_info_ml_attribute', 'ins_venta_ml_info_ml_attribute.ins_venta_ml_info_id', 'ins_venta_ml_info.id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_attribute', 'ml_attribute.id', 'ins_venta_ml_info_ml_attribute.ml_attribute_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_value', 'ml_value.id', 'ins_venta_ml_info_ml_attribute.ml_value_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_venta_ml_info');
		$criterio->setCriterios();		
}
?>

