<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(XmlLenguajeTipo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('xml_lenguaje_tipo.id', Gral::getVars(1, 'buscador_xml_lenguaje_tipo_id'), Gral::getVars(1, 'buscador_xml_lenguaje_tipo_id_comparador'));
	$criterio->add('xml_lenguaje_tipo.descripcion', Gral::getVars(1, 'buscador_xml_lenguaje_tipo_descripcion'), Gral::getVars(1, 'buscador_xml_lenguaje_tipo_descripcion_comparador'));
	$criterio->add('xml_lenguaje_tipo.codigo', Gral::getVars(1, 'buscador_xml_lenguaje_tipo_codigo'), Gral::getVars(1, 'buscador_xml_lenguaje_tipo_codigo_comparador'));
	$criterio->add('xml_lenguaje_tipo.observacion', Gral::getVars(1, 'buscador_xml_lenguaje_tipo_observacion'), Gral::getVars(1, 'buscador_xml_lenguaje_tipo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('xml_lenguaje_codigo', 'xml_lenguaje_codigo.xml_lenguaje_tipo_id', 'xml_lenguaje_tipo.id', 'LEFT JOIN');
	$criterio->addRealJoin('xml_lenguaje_pagina', 'xml_lenguaje_pagina.id', 'xml_lenguaje_codigo.xml_lenguaje_pagina_id', 'LEFT JOIN');
	$criterio->addRealJoin('xml_lenguaje_entorno', 'xml_lenguaje_entorno.id', 'xml_lenguaje_codigo.xml_lenguaje_entorno_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('xml_lenguaje_tipo');
		$criterio->setCriterios();		
}
?>

