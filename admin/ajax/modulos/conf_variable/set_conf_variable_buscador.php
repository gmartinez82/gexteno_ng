<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(ConfVariable::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('conf_variable.id', Gral::getVars(1, 'buscador_conf_variable_id'), Gral::getVars(1, 'buscador_conf_variable_id_comparador'));
	$criterio->add('conf_variable.descripcion', Gral::getVars(1, 'buscador_conf_variable_descripcion'), Gral::getVars(1, 'buscador_conf_variable_descripcion_comparador'));
	$criterio->add('conf_variable.conf_categoria_id', Gral::getVars(1, 'buscador_conf_variable_conf_categoria_id'), Gral::getVars(1, 'buscador_conf_variable_conf_categoria_id_comparador'));
	$criterio->add('conf_variable.valor', Gral::getVars(1, 'buscador_conf_variable_valor'), Gral::getVars(1, 'buscador_conf_variable_valor_comparador'));
	$criterio->add('conf_variable.codigo', Gral::getVars(1, 'buscador_conf_variable_codigo'), Gral::getVars(1, 'buscador_conf_variable_codigo_comparador'));
	$criterio->add('conf_variable.observacion', Gral::getVars(1, 'buscador_conf_variable_observacion'), Gral::getVars(1, 'buscador_conf_variable_observacion_comparador'));
	$criterio->add('conf_variable.estado', Gral::getVars(1, 'buscador_conf_variable_estado'), Gral::getVars(1, 'buscador_conf_variable_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('conf_variable');
		$criterio->setCriterios();		
}
?>

