<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralLenguaje::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_lenguaje.id', Gral::getVars(1, 'buscador_gral_lenguaje_id'), Gral::getVars(1, 'buscador_gral_lenguaje_id_comparador'));
	$criterio->add('gral_lenguaje.descripcion', Gral::getVars(1, 'buscador_gral_lenguaje_descripcion'), Gral::getVars(1, 'buscador_gral_lenguaje_descripcion_comparador'));
	$criterio->add('gral_lenguaje.codigo', Gral::getVars(1, 'buscador_gral_lenguaje_codigo'), Gral::getVars(1, 'buscador_gral_lenguaje_codigo_comparador'));
	$criterio->add('gral_lenguaje.observacion', Gral::getVars(1, 'buscador_gral_lenguaje_observacion'), Gral::getVars(1, 'buscador_gral_lenguaje_observacion_comparador'));
	$criterio->add('gral_lenguaje.estado', Gral::getVars(1, 'buscador_gral_lenguaje_estado'), Gral::getVars(1, 'buscador_gral_lenguaje_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('us_usuario', 'us_usuario.gral_lenguaje_id', 'gral_lenguaje.id', 'LEFT JOIN');
	$criterio->addRealJoin('xml_lenguaje_traduccion', 'xml_lenguaje_traduccion.gral_lenguaje_id', 'gral_lenguaje.id', 'LEFT JOIN');
	$criterio->addRealJoin('xml_lenguaje_codigo', 'xml_lenguaje_codigo.id', 'xml_lenguaje_traduccion.xml_lenguaje_codigo_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_pais', 'geo_pais.gral_lenguaje_id', 'gral_lenguaje.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_lenguaje');
		$criterio->setCriterios();		
}
?>

