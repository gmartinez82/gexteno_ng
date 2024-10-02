<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(MlItemStatus::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ml_item_status.id', Gral::getVars(1, 'buscador_ml_item_status_id'), Gral::getVars(1, 'buscador_ml_item_status_id_comparador'));
	$criterio->add('ml_item_status.descripcion', Gral::getVars(1, 'buscador_ml_item_status_descripcion'), Gral::getVars(1, 'buscador_ml_item_status_descripcion_comparador'));
	$criterio->add('ml_item_status.codigo', Gral::getVars(1, 'buscador_ml_item_status_codigo'), Gral::getVars(1, 'buscador_ml_item_status_codigo_comparador'));
	$criterio->add('ml_item_status.codigo_ml', Gral::getVars(1, 'buscador_ml_item_status_codigo_ml'), Gral::getVars(1, 'buscador_ml_item_status_codigo_ml_comparador'));
	$criterio->add('ml_item_status.activo', Gral::getVars(1, 'buscador_ml_item_status_activo'), Gral::getVars(1, 'buscador_ml_item_status_activo_comparador'));
	$criterio->add('ml_item_status.inactivo', Gral::getVars(1, 'buscador_ml_item_status_inactivo'), Gral::getVars(1, 'buscador_ml_item_status_inactivo_comparador'));
	$criterio->add('ml_item_status.requiere_atencion', Gral::getVars(1, 'buscador_ml_item_status_requiere_atencion'), Gral::getVars(1, 'buscador_ml_item_status_requiere_atencion_comparador'));
	$criterio->add('ml_item_status.observacion', Gral::getVars(1, 'buscador_ml_item_status_observacion'), Gral::getVars(1, 'buscador_ml_item_status_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_venta_ml_info', 'ins_venta_ml_info.ml_item_status_id', 'ml_item_status.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_venta_ml_info.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_category', 'ml_category.id', 'ins_venta_ml_info.ml_category_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_listing_type', 'ml_listing_type.id', 'ins_venta_ml_info.ml_listing_type_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_condition', 'ml_condition.id', 'ins_venta_ml_info.ml_condition_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_shipping_mode', 'ml_shipping_mode.id', 'ins_venta_ml_info.ml_shipping_mode_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ml_item_status');
		$criterio->setCriterios();		
}
?>

