<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(XmlLenguajeCodigo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('xml_lenguaje_codigo.id', Gral::getVars(1, 'buscador_xml_lenguaje_codigo_id'), Gral::getVars(1, 'buscador_xml_lenguaje_codigo_id_comparador'));
	$criterio->add('xml_lenguaje_codigo.descripcion', Gral::getVars(1, 'buscador_xml_lenguaje_codigo_descripcion'), Gral::getVars(1, 'buscador_xml_lenguaje_codigo_descripcion_comparador'));
	$criterio->add('xml_lenguaje_codigo.xml_lenguaje_tipo_id', Gral::getVars(1, 'buscador_xml_lenguaje_codigo_xml_lenguaje_tipo_id'), Gral::getVars(1, 'buscador_xml_lenguaje_codigo_xml_lenguaje_tipo_id_comparador'));
	$criterio->add('xml_lenguaje_codigo.xml_lenguaje_pagina_id', Gral::getVars(1, 'buscador_xml_lenguaje_codigo_xml_lenguaje_pagina_id'), Gral::getVars(1, 'buscador_xml_lenguaje_codigo_xml_lenguaje_pagina_id_comparador'));
	$criterio->add('xml_lenguaje_codigo.xml_lenguaje_entorno_id', Gral::getVars(1, 'buscador_xml_lenguaje_codigo_xml_lenguaje_entorno_id'), Gral::getVars(1, 'buscador_xml_lenguaje_codigo_xml_lenguaje_entorno_id_comparador'));
	$criterio->add('xml_lenguaje_codigo.codigo', Gral::getVars(1, 'buscador_xml_lenguaje_codigo_codigo'), Gral::getVars(1, 'buscador_xml_lenguaje_codigo_codigo_comparador'));
	$criterio->add('xml_lenguaje_codigo.observacion', Gral::getVars(1, 'buscador_xml_lenguaje_codigo_observacion'), Gral::getVars(1, 'buscador_xml_lenguaje_codigo_observacion_comparador'));
	$criterio->add('xml_lenguaje_codigo.estado', Gral::getVars(1, 'buscador_xml_lenguaje_codigo_estado'), Gral::getVars(1, 'buscador_xml_lenguaje_codigo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('xml_lenguaje_traduccion', 'xml_lenguaje_traduccion.xml_lenguaje_codigo_id', 'xml_lenguaje_codigo.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_lenguaje', 'gral_lenguaje.id', 'xml_lenguaje_traduccion.gral_lenguaje_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('xml_lenguaje_codigo');
		$criterio->setCriterios();		
}
?>

