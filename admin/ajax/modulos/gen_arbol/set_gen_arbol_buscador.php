<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GenArbol::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gen_arbol.id', Gral::getVars(1, 'buscador_gen_arbol_id'), Gral::getVars(1, 'buscador_gen_arbol_id_comparador'));
	$criterio->add('gen_arbol.descripcion', Gral::getVars(1, 'buscador_gen_arbol_descripcion'), Gral::getVars(1, 'buscador_gen_arbol_descripcion_comparador'));
	$criterio->add('gen_arbol.gen_arbol_tipo_id', Gral::getVars(1, 'buscador_gen_arbol_gen_arbol_tipo_id'), Gral::getVars(1, 'buscador_gen_arbol_gen_arbol_tipo_id_comparador'));
	$criterio->add('gen_arbol.codigo', Gral::getVars(1, 'buscador_gen_arbol_codigo'), Gral::getVars(1, 'buscador_gen_arbol_codigo_comparador'));
	$criterio->add('gen_arbol.php_clase', Gral::getVars(1, 'buscador_gen_arbol_php_clase'), Gral::getVars(1, 'buscador_gen_arbol_php_clase_comparador'));
	$criterio->add('gen_arbol.bd_tabla', Gral::getVars(1, 'buscador_gen_arbol_bd_tabla'), Gral::getVars(1, 'buscador_gen_arbol_bd_tabla_comparador'));
	$criterio->add('gen_arbol.observacion', Gral::getVars(1, 'buscador_gen_arbol_observacion'), Gral::getVars(1, 'buscador_gen_arbol_observacion_comparador'));
	$criterio->add('gen_arbol.estado', Gral::getVars(1, 'buscador_gen_arbol_estado'), Gral::getVars(1, 'buscador_gen_arbol_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gen_menu_item', 'gen_menu_item.gen_arbol_id', 'gen_arbol.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_categoria', 'ins_categoria.gen_arbol_id', 'gen_arbol.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gen_arbol');
		$criterio->setCriterios();		
}
?>

