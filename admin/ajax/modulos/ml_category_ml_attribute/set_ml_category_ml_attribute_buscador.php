<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(MlCategoryMlAttribute::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ml_category_ml_attribute.id', Gral::getVars(1, 'buscador_ml_category_ml_attribute_id'), Gral::getVars(1, 'buscador_ml_category_ml_attribute_id_comparador'));
	$criterio->add('ml_category_ml_attribute.ml_category_id', Gral::getVars(1, 'buscador_ml_category_ml_attribute_ml_category_id'), Gral::getVars(1, 'buscador_ml_category_ml_attribute_ml_category_id_comparador'));
	$criterio->add('ml_category_ml_attribute.ml_attribute_id', Gral::getVars(1, 'buscador_ml_category_ml_attribute_ml_attribute_id'), Gral::getVars(1, 'buscador_ml_category_ml_attribute_ml_attribute_id_comparador'));
	$criterio->add('ml_category_ml_attribute.ml_relevance', Gral::getVars(1, 'buscador_ml_category_ml_attribute_ml_relevance'), Gral::getVars(1, 'buscador_ml_category_ml_attribute_ml_relevance_comparador'));
	$criterio->add('ml_category_ml_attribute.observacion', Gral::getVars(1, 'buscador_ml_category_ml_attribute_observacion'), Gral::getVars(1, 'buscador_ml_category_ml_attribute_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ml_category_ml_attribute');
		$criterio->setCriterios();		
}
?>

