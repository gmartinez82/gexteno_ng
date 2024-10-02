<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(MlAttributeInsAtributo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ml_attribute_ins_atributo.id', Gral::getVars(1, 'buscador_ml_attribute_ins_atributo_id'), Gral::getVars(1, 'buscador_ml_attribute_ins_atributo_id_comparador'));
	$criterio->add('ml_attribute_ins_atributo.ml_attribute_id', Gral::getVars(1, 'buscador_ml_attribute_ins_atributo_ml_attribute_id'), Gral::getVars(1, 'buscador_ml_attribute_ins_atributo_ml_attribute_id_comparador'));
	$criterio->add('ml_attribute_ins_atributo.ins_atributo_id', Gral::getVars(1, 'buscador_ml_attribute_ins_atributo_ins_atributo_id'), Gral::getVars(1, 'buscador_ml_attribute_ins_atributo_ins_atributo_id_comparador'));
	$criterio->add('ml_attribute_ins_atributo.observacion', Gral::getVars(1, 'buscador_ml_attribute_ins_atributo_observacion'), Gral::getVars(1, 'buscador_ml_attribute_ins_atributo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ml_attribute_ins_atributo');
		$criterio->setCriterios();		
}
?>

