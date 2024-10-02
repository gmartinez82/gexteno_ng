<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(XmlLenguajeTraduccion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('xml_lenguaje_traduccion.id', Gral::getVars(1, 'buscador_xml_lenguaje_traduccion_id'), Gral::getVars(1, 'buscador_xml_lenguaje_traduccion_id_comparador'));
	$criterio->add('xml_lenguaje_traduccion.gral_lenguaje_id', Gral::getVars(1, 'buscador_xml_lenguaje_traduccion_gral_lenguaje_id'), Gral::getVars(1, 'buscador_xml_lenguaje_traduccion_gral_lenguaje_id_comparador'));
	$criterio->add('xml_lenguaje_traduccion.xml_lenguaje_codigo_id', Gral::getVars(1, 'buscador_xml_lenguaje_traduccion_xml_lenguaje_codigo_id'), Gral::getVars(1, 'buscador_xml_lenguaje_traduccion_xml_lenguaje_codigo_id_comparador'));
	$criterio->add('xml_lenguaje_traduccion.descripcion', Gral::getVars(1, 'buscador_xml_lenguaje_traduccion_descripcion'), Gral::getVars(1, 'buscador_xml_lenguaje_traduccion_descripcion_comparador'));
	$criterio->add('xml_lenguaje_traduccion.codigo', Gral::getVars(1, 'buscador_xml_lenguaje_traduccion_codigo'), Gral::getVars(1, 'buscador_xml_lenguaje_traduccion_codigo_comparador'));
	$criterio->add('xml_lenguaje_traduccion.traduccion', Gral::getVars(1, 'buscador_xml_lenguaje_traduccion_traduccion'), Gral::getVars(1, 'buscador_xml_lenguaje_traduccion_traduccion_comparador'));
	$criterio->add('xml_lenguaje_traduccion.observacion', Gral::getVars(1, 'buscador_xml_lenguaje_traduccion_observacion'), Gral::getVars(1, 'buscador_xml_lenguaje_traduccion_observacion_comparador'));
	$criterio->add('xml_lenguaje_traduccion.estado', Gral::getVars(1, 'buscador_xml_lenguaje_traduccion_estado'), Gral::getVars(1, 'buscador_xml_lenguaje_traduccion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('xml_lenguaje_traduccion');
		$criterio->setCriterios();		
}
?>

