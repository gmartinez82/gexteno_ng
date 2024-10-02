<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(ConfCategoria::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('conf_categoria.id', Gral::getVars(1, 'buscador_conf_categoria_id'), Gral::getVars(1, 'buscador_conf_categoria_id_comparador'));
	$criterio->add('conf_categoria.descripcion', Gral::getVars(1, 'buscador_conf_categoria_descripcion'), Gral::getVars(1, 'buscador_conf_categoria_descripcion_comparador'));
	$criterio->add('conf_categoria.codigo', Gral::getVars(1, 'buscador_conf_categoria_codigo'), Gral::getVars(1, 'buscador_conf_categoria_codigo_comparador'));
	$criterio->add('conf_categoria.observacion', Gral::getVars(1, 'buscador_conf_categoria_observacion'), Gral::getVars(1, 'buscador_conf_categoria_observacion_comparador'));
	$criterio->add('conf_categoria.estado', Gral::getVars(1, 'buscador_conf_categoria_estado'), Gral::getVars(1, 'buscador_conf_categoria_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('conf_variable', 'conf_variable.conf_categoria_id', 'conf_categoria.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('conf_categoria');
		$criterio->setCriterios();		
}
?>

