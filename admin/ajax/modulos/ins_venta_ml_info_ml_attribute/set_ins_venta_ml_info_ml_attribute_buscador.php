<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsVentaMlInfoMlAttribute::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_venta_ml_info_ml_attribute.id', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_attribute_id'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_attribute_id_comparador'));
	$criterio->add('ins_venta_ml_info_ml_attribute.ins_venta_ml_info_id', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_attribute_ins_venta_ml_info_id'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_attribute_ins_venta_ml_info_id_comparador'));
	$criterio->add('ins_venta_ml_info_ml_attribute.ml_attribute_id', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_attribute_ml_attribute_id'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_attribute_ml_attribute_id_comparador'));
	$criterio->add('ins_venta_ml_info_ml_attribute.ml_value_id', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_attribute_ml_value_id'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_attribute_ml_value_id_comparador'));
	$criterio->add('ins_venta_ml_info_ml_attribute.ml_value_valor', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_attribute_ml_value_valor'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_attribute_ml_value_valor_comparador'));
	$criterio->add('ins_venta_ml_info_ml_attribute.observacion', Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_attribute_observacion'), Gral::getVars(1, 'buscador_ins_venta_ml_info_ml_attribute_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_venta_ml_info_ml_attribute');
		$criterio->setCriterios();		
}
?>

