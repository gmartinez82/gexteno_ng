<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(MlAttribute::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ml_attribute.id', Gral::getVars(1, 'buscador_ml_attribute_id'), Gral::getVars(1, 'buscador_ml_attribute_id_comparador'));
	$criterio->add('ml_attribute.descripcion', Gral::getVars(1, 'buscador_ml_attribute_descripcion'), Gral::getVars(1, 'buscador_ml_attribute_descripcion_comparador'));
	$criterio->add('ml_attribute.ml_attribute_type_id', Gral::getVars(1, 'buscador_ml_attribute_ml_attribute_type_id'), Gral::getVars(1, 'buscador_ml_attribute_ml_attribute_type_id_comparador'));
	$criterio->add('ml_attribute.codigo', Gral::getVars(1, 'buscador_ml_attribute_codigo'), Gral::getVars(1, 'buscador_ml_attribute_codigo_comparador'));
	$criterio->add('ml_attribute.codigo_ml', Gral::getVars(1, 'buscador_ml_attribute_codigo_ml'), Gral::getVars(1, 'buscador_ml_attribute_codigo_ml_comparador'));
	$criterio->add('ml_attribute.tooltip', Gral::getVars(1, 'buscador_ml_attribute_tooltip'), Gral::getVars(1, 'buscador_ml_attribute_tooltip_comparador'));
	$criterio->add('ml_attribute.observacion', Gral::getVars(1, 'buscador_ml_attribute_observacion'), Gral::getVars(1, 'buscador_ml_attribute_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_venta_ml_info_ml_attribute', 'ins_venta_ml_info_ml_attribute.ml_attribute_id', 'ml_attribute.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_venta_ml_info', 'ins_venta_ml_info.id', 'ins_venta_ml_info_ml_attribute.ins_venta_ml_info_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_value', 'ml_value.id', 'ins_venta_ml_info_ml_attribute.ml_value_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_category_ml_attribute', 'ml_category_ml_attribute.ml_attribute_id', 'ml_attribute.id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_category', 'ml_category.id', 'ml_category_ml_attribute.ml_category_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_attribute_ins_atributo', 'ml_attribute_ins_atributo.ml_attribute_id', 'ml_attribute.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_atributo', 'ins_atributo.id', 'ml_attribute_ins_atributo.ins_atributo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_attribute_ml_value', 'ml_attribute_ml_value.ml_attribute_id', 'ml_attribute.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ml_attribute');
		$criterio->setCriterios();		
}
?>

