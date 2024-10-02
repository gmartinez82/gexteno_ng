<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamUnidadMedida::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_unidad_medida.id', Gral::getVars(1, 'buscador_eku_param_unidad_medida_id'), Gral::getVars(1, 'buscador_eku_param_unidad_medida_id_comparador'));
	$criterio->add('eku_param_unidad_medida.descripcion', Gral::getVars(1, 'buscador_eku_param_unidad_medida_descripcion'), Gral::getVars(1, 'buscador_eku_param_unidad_medida_descripcion_comparador'));
	$criterio->add('eku_param_unidad_medida.codigo', Gral::getVars(1, 'buscador_eku_param_unidad_medida_codigo'), Gral::getVars(1, 'buscador_eku_param_unidad_medida_codigo_comparador'));
	$criterio->add('eku_param_unidad_medida.representacion', Gral::getVars(1, 'buscador_eku_param_unidad_medida_representacion'), Gral::getVars(1, 'buscador_eku_param_unidad_medida_representacion_comparador'));
	$criterio->add('eku_param_unidad_medida.codigo_eku', Gral::getVars(1, 'buscador_eku_param_unidad_medida_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_unidad_medida_codigo_eku_comparador'));
	$criterio->add('eku_param_unidad_medida.observacion', Gral::getVars(1, 'buscador_eku_param_unidad_medida_observacion'), Gral::getVars(1, 'buscador_eku_param_unidad_medida_observacion_comparador'));
	$criterio->add('eku_param_unidad_medida.estado', Gral::getVars(1, 'buscador_eku_param_unidad_medida_estado'), Gral::getVars(1, 'buscador_eku_param_unidad_medida_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('eku_param_unidad_medida_ins_unidad_medida', 'eku_param_unidad_medida_ins_unidad_medida.eku_param_unidad_medida_id', 'eku_param_unidad_medida.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida', 'ins_unidad_medida.id', 'eku_param_unidad_medida_ins_unidad_medida.ins_unidad_medida_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_unidad_medida');
		$criterio->setCriterios();		
}
?>

