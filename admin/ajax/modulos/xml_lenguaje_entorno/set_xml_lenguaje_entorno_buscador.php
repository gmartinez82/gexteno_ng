<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(XmlLenguajeEntorno::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('xml_lenguaje_entorno.id', Gral::getVars(1, 'buscador_xml_lenguaje_entorno_id'), Gral::getVars(1, 'buscador_xml_lenguaje_entorno_id_comparador'));
	$criterio->add('xml_lenguaje_entorno.descripcion', Gral::getVars(1, 'buscador_xml_lenguaje_entorno_descripcion'), Gral::getVars(1, 'buscador_xml_lenguaje_entorno_descripcion_comparador'));
	$criterio->add('xml_lenguaje_entorno.codigo', Gral::getVars(1, 'buscador_xml_lenguaje_entorno_codigo'), Gral::getVars(1, 'buscador_xml_lenguaje_entorno_codigo_comparador'));
	$criterio->add('xml_lenguaje_entorno.observacion', Gral::getVars(1, 'buscador_xml_lenguaje_entorno_observacion'), Gral::getVars(1, 'buscador_xml_lenguaje_entorno_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('xml_lenguaje_codigo', 'xml_lenguaje_codigo.xml_lenguaje_entorno_id', 'xml_lenguaje_entorno.id', 'LEFT JOIN');
	$criterio->addRealJoin('xml_lenguaje_tipo', 'xml_lenguaje_tipo.id', 'xml_lenguaje_codigo.xml_lenguaje_tipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('xml_lenguaje_pagina', 'xml_lenguaje_pagina.id', 'xml_lenguaje_codigo.xml_lenguaje_pagina_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('xml_lenguaje_entorno');
		$criterio->setCriterios();		
}
?>

