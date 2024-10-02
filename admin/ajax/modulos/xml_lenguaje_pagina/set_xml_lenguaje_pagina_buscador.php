<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(XmlLenguajePagina::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('xml_lenguaje_pagina.id', Gral::getVars(1, 'buscador_xml_lenguaje_pagina_id'), Gral::getVars(1, 'buscador_xml_lenguaje_pagina_id_comparador'));
	$criterio->add('xml_lenguaje_pagina.descripcion', Gral::getVars(1, 'buscador_xml_lenguaje_pagina_descripcion'), Gral::getVars(1, 'buscador_xml_lenguaje_pagina_descripcion_comparador'));
	$criterio->add('xml_lenguaje_pagina.codigo', Gral::getVars(1, 'buscador_xml_lenguaje_pagina_codigo'), Gral::getVars(1, 'buscador_xml_lenguaje_pagina_codigo_comparador'));
	$criterio->add('xml_lenguaje_pagina.observacion', Gral::getVars(1, 'buscador_xml_lenguaje_pagina_observacion'), Gral::getVars(1, 'buscador_xml_lenguaje_pagina_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('xml_lenguaje_codigo', 'xml_lenguaje_codigo.xml_lenguaje_pagina_id', 'xml_lenguaje_pagina.id', 'LEFT JOIN');
	$criterio->addRealJoin('xml_lenguaje_tipo', 'xml_lenguaje_tipo.id', 'xml_lenguaje_codigo.xml_lenguaje_tipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('xml_lenguaje_entorno', 'xml_lenguaje_entorno.id', 'xml_lenguaje_codigo.xml_lenguaje_entorno_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('xml_lenguaje_pagina');
		$criterio->setCriterios();		
}
?>

