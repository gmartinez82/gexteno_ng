<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GenArbolTipo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gen_arbol_tipo.id', Gral::getVars(1, 'buscador_gen_arbol_tipo_id'), Gral::getVars(1, 'buscador_gen_arbol_tipo_id_comparador'));
	$criterio->add('gen_arbol_tipo.descripcion', Gral::getVars(1, 'buscador_gen_arbol_tipo_descripcion'), Gral::getVars(1, 'buscador_gen_arbol_tipo_descripcion_comparador'));
	$criterio->add('gen_arbol_tipo.codigo', Gral::getVars(1, 'buscador_gen_arbol_tipo_codigo'), Gral::getVars(1, 'buscador_gen_arbol_tipo_codigo_comparador'));
	$criterio->add('gen_arbol_tipo.observacion', Gral::getVars(1, 'buscador_gen_arbol_tipo_observacion'), Gral::getVars(1, 'buscador_gen_arbol_tipo_observacion_comparador'));
	$criterio->add('gen_arbol_tipo.estado', Gral::getVars(1, 'buscador_gen_arbol_tipo_estado'), Gral::getVars(1, 'buscador_gen_arbol_tipo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gen_arbol', 'gen_arbol.gen_arbol_tipo_id', 'gen_arbol_tipo.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gen_arbol_tipo');
		$criterio->setCriterios();		
}
?>

