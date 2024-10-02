<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(MlListingType::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ml_listing_type.id', Gral::getVars(1, 'buscador_ml_listing_type_id'), Gral::getVars(1, 'buscador_ml_listing_type_id_comparador'));
	$criterio->add('ml_listing_type.descripcion', Gral::getVars(1, 'buscador_ml_listing_type_descripcion'), Gral::getVars(1, 'buscador_ml_listing_type_descripcion_comparador'));
	$criterio->add('ml_listing_type.codigo', Gral::getVars(1, 'buscador_ml_listing_type_codigo'), Gral::getVars(1, 'buscador_ml_listing_type_codigo_comparador'));
	$criterio->add('ml_listing_type.codigo_ml', Gral::getVars(1, 'buscador_ml_listing_type_codigo_ml'), Gral::getVars(1, 'buscador_ml_listing_type_codigo_ml_comparador'));
	$criterio->add('ml_listing_type.observacion', Gral::getVars(1, 'buscador_ml_listing_type_observacion'), Gral::getVars(1, 'buscador_ml_listing_type_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_venta_ml_info', 'ins_venta_ml_info.ml_listing_type_id', 'ml_listing_type.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_venta_ml_info.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_category', 'ml_category.id', 'ins_venta_ml_info.ml_category_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_condition', 'ml_condition.id', 'ins_venta_ml_info.ml_condition_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_shipping_mode', 'ml_shipping_mode.id', 'ins_venta_ml_info.ml_shipping_mode_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_item_status', 'ml_item_status.id', 'ins_venta_ml_info.ml_item_status_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ml_listing_type');
		$criterio->setCriterios();		
}
?>

