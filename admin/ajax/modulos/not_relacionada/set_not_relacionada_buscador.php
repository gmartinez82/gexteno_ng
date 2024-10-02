<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(NotRelacionada::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('not_relacionada.id', Gral::getVars(1, 'buscador_not_relacionada_id'), Gral::getVars(1, 'buscador_not_relacionada_id_comparador'));
	$criterio->add('not_relacionada.descripcion', Gral::getVars(1, 'buscador_not_relacionada_descripcion'), Gral::getVars(1, 'buscador_not_relacionada_descripcion_comparador'));
	$criterio->add('not_relacionada.not_noticia_id', Gral::getVars(1, 'buscador_not_relacionada_not_noticia_id'), Gral::getVars(1, 'buscador_not_relacionada_not_noticia_id_comparador'));
	$criterio->add('not_relacionada.not_noticia_relacionada', Gral::getVars(1, 'buscador_not_relacionada_not_noticia_relacionada'), Gral::getVars(1, 'buscador_not_relacionada_not_noticia_relacionada_comparador'));
	$criterio->add('not_relacionada.codigo', Gral::getVars(1, 'buscador_not_relacionada_codigo'), Gral::getVars(1, 'buscador_not_relacionada_codigo_comparador'));
	$criterio->add('not_relacionada.observacion', Gral::getVars(1, 'buscador_not_relacionada_observacion'), Gral::getVars(1, 'buscador_not_relacionada_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('not_relacionada');
		$criterio->setCriterios();		
}
?>

