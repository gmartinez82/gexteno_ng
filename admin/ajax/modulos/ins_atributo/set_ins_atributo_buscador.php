<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsAtributo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_atributo.id', Gral::getVars(1, 'buscador_ins_atributo_id'), Gral::getVars(1, 'buscador_ins_atributo_id_comparador'));
	$criterio->add('ins_atributo.descripcion', Gral::getVars(1, 'buscador_ins_atributo_descripcion'), Gral::getVars(1, 'buscador_ins_atributo_descripcion_comparador'));
	$criterio->add('ins_atributo.codigo', Gral::getVars(1, 'buscador_ins_atributo_codigo'), Gral::getVars(1, 'buscador_ins_atributo_codigo_comparador'));
	$criterio->add('ins_atributo.observacion', Gral::getVars(1, 'buscador_ins_atributo_observacion'), Gral::getVars(1, 'buscador_ins_atributo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_insumo_ins_atributo', 'ins_insumo_ins_atributo.ins_atributo_id', 'ins_atributo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_insumo_ins_atributo.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida_atributo', 'ins_unidad_medida_atributo.id', 'ins_insumo_ins_atributo.ins_unidad_medida_atributo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_attribute_ins_atributo', 'ml_attribute_ins_atributo.ins_atributo_id', 'ins_atributo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_attribute', 'ml_attribute.id', 'ml_attribute_ins_atributo.ml_attribute_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_atributo');
		$criterio->setCriterios();		
}
?>

