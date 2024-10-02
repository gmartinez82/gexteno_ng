<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(MlAttributeType::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ml_attribute_type.id', Gral::getVars(1, 'buscador_ml_attribute_type_id'), Gral::getVars(1, 'buscador_ml_attribute_type_id_comparador'));
	$criterio->add('ml_attribute_type.descripcion', Gral::getVars(1, 'buscador_ml_attribute_type_descripcion'), Gral::getVars(1, 'buscador_ml_attribute_type_descripcion_comparador'));
	$criterio->add('ml_attribute_type.codigo', Gral::getVars(1, 'buscador_ml_attribute_type_codigo'), Gral::getVars(1, 'buscador_ml_attribute_type_codigo_comparador'));
	$criterio->add('ml_attribute_type.codigo_ml', Gral::getVars(1, 'buscador_ml_attribute_type_codigo_ml'), Gral::getVars(1, 'buscador_ml_attribute_type_codigo_ml_comparador'));
	$criterio->add('ml_attribute_type.observacion', Gral::getVars(1, 'buscador_ml_attribute_type_observacion'), Gral::getVars(1, 'buscador_ml_attribute_type_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ml_attribute', 'ml_attribute.ml_attribute_type_id', 'ml_attribute_type.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ml_attribute_type');
		$criterio->setCriterios();		
}
?>

