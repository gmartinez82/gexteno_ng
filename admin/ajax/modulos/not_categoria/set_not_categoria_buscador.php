<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(NotCategoria::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('not_categoria.id', Gral::getVars(1, 'buscador_not_categoria_id'), Gral::getVars(1, 'buscador_not_categoria_id_comparador'));
	$criterio->add('not_categoria.descripcion', Gral::getVars(1, 'buscador_not_categoria_descripcion'), Gral::getVars(1, 'buscador_not_categoria_descripcion_comparador'));
	$criterio->add('not_categoria.codigo', Gral::getVars(1, 'buscador_not_categoria_codigo'), Gral::getVars(1, 'buscador_not_categoria_codigo_comparador'));
	$criterio->add('not_categoria.observacion', Gral::getVars(1, 'buscador_not_categoria_observacion'), Gral::getVars(1, 'buscador_not_categoria_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('not_noticia', 'not_noticia.not_categoria_id', 'not_categoria.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('not_categoria');
		$criterio->setCriterios();		
}
?>

