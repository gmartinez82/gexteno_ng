<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(MlAttributeMlValue::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ml_attribute_ml_value.id', Gral::getVars(1, 'buscador_ml_attribute_ml_value_id'), Gral::getVars(1, 'buscador_ml_attribute_ml_value_id_comparador'));
	$criterio->add('ml_attribute_ml_value.ml_attribute_id', Gral::getVars(1, 'buscador_ml_attribute_ml_value_ml_attribute_id'), Gral::getVars(1, 'buscador_ml_attribute_ml_value_ml_attribute_id_comparador'));
	$criterio->add('ml_attribute_ml_value.ml_value_id', Gral::getVars(1, 'buscador_ml_attribute_ml_value_ml_value_id'), Gral::getVars(1, 'buscador_ml_attribute_ml_value_ml_value_id_comparador'));
	$criterio->add('ml_attribute_ml_value.observacion', Gral::getVars(1, 'buscador_ml_attribute_ml_value_observacion'), Gral::getVars(1, 'buscador_ml_attribute_ml_value_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ml_attribute_ml_value');
		$criterio->setCriterios();		
}
?>

