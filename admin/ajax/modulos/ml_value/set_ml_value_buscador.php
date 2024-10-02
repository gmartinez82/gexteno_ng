<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(MlValue::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ml_value.id', Gral::getVars(1, 'buscador_ml_value_id'), Gral::getVars(1, 'buscador_ml_value_id_comparador'));
	$criterio->add('ml_value.descripcion', Gral::getVars(1, 'buscador_ml_value_descripcion'), Gral::getVars(1, 'buscador_ml_value_descripcion_comparador'));
	$criterio->add('ml_value.codigo', Gral::getVars(1, 'buscador_ml_value_codigo'), Gral::getVars(1, 'buscador_ml_value_codigo_comparador'));
	$criterio->add('ml_value.codigo_ml', Gral::getVars(1, 'buscador_ml_value_codigo_ml'), Gral::getVars(1, 'buscador_ml_value_codigo_ml_comparador'));
	$criterio->add('ml_value.observacion', Gral::getVars(1, 'buscador_ml_value_observacion'), Gral::getVars(1, 'buscador_ml_value_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_venta_ml_info_ml_attribute', 'ins_venta_ml_info_ml_attribute.ml_value_id', 'ml_value.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_venta_ml_info', 'ins_venta_ml_info.id', 'ins_venta_ml_info_ml_attribute.ins_venta_ml_info_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_attribute', 'ml_attribute.id', 'ins_venta_ml_info_ml_attribute.ml_attribute_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_attribute_ml_value', 'ml_attribute_ml_value.ml_value_id', 'ml_value.id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_value_ins_marca', 'ml_value_ins_marca.ml_value_id', 'ml_value.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_marca', 'ins_marca.id', 'ml_value_ins_marca.ins_marca_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ml_value');
		$criterio->setCriterios();		
}
?>

