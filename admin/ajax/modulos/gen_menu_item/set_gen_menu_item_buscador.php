<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GenMenuItem::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gen_menu_item.id', Gral::getVars(1, 'buscador_gen_menu_item_id'), Gral::getVars(1, 'buscador_gen_menu_item_id_comparador'));
	$criterio->add('gen_menu_item.descripcion', Gral::getVars(1, 'buscador_gen_menu_item_descripcion'), Gral::getVars(1, 'buscador_gen_menu_item_descripcion_comparador'));
	$criterio->add('gen_menu_item.gen_arbol_id', Gral::getVars(1, 'buscador_gen_menu_item_gen_arbol_id'), Gral::getVars(1, 'buscador_gen_menu_item_gen_arbol_id_comparador'));
	$criterio->add('gen_menu_item.gen_menu_item_padre', Gral::getVars(1, 'buscador_gen_menu_item_gen_menu_item_padre'), Gral::getVars(1, 'buscador_gen_menu_item_gen_menu_item_padre_comparador'));
	$criterio->add('gen_menu_item.codigo', Gral::getVars(1, 'buscador_gen_menu_item_codigo'), Gral::getVars(1, 'buscador_gen_menu_item_codigo_comparador'));
	$criterio->add('gen_menu_item.alternativo', Gral::getVars(1, 'buscador_gen_menu_item_alternativo'), Gral::getVars(1, 'buscador_gen_menu_item_alternativo_comparador'));
	$criterio->add('gen_menu_item.link', Gral::getVars(1, 'buscador_gen_menu_item_link'), Gral::getVars(1, 'buscador_gen_menu_item_link_comparador'));
	$criterio->add('gen_menu_item.observacion', Gral::getVars(1, 'buscador_gen_menu_item_observacion'), Gral::getVars(1, 'buscador_gen_menu_item_observacion_comparador'));
	$criterio->add('gen_menu_item.estado', Gral::getVars(1, 'buscador_gen_menu_item_estado'), Gral::getVars(1, 'buscador_gen_menu_item_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gen_menu_item');
		$criterio->setCriterios();		
}
?>

