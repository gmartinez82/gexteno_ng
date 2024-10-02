<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GeoProvincia::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('geo_provincia.id', Gral::getVars(1, 'buscador_geo_provincia_id'), Gral::getVars(1, 'buscador_geo_provincia_id_comparador'));
	$criterio->add('geo_provincia.descripcion', Gral::getVars(1, 'buscador_geo_provincia_descripcion'), Gral::getVars(1, 'buscador_geo_provincia_descripcion_comparador'));
	$criterio->add('geo_provincia.geo_pais_id', Gral::getVars(1, 'buscador_geo_provincia_geo_pais_id'), Gral::getVars(1, 'buscador_geo_provincia_geo_pais_id_comparador'));
	$criterio->add('geo_provincia.codigo', Gral::getVars(1, 'buscador_geo_provincia_codigo'), Gral::getVars(1, 'buscador_geo_provincia_codigo_comparador'));
	$criterio->add('geo_provincia.codigo_eku', Gral::getVars(1, 'buscador_geo_provincia_codigo_eku'), Gral::getVars(1, 'buscador_geo_provincia_codigo_eku_comparador'));
	$criterio->add('geo_provincia.observacion', Gral::getVars(1, 'buscador_geo_provincia_observacion'), Gral::getVars(1, 'buscador_geo_provincia_observacion_comparador'));
	$criterio->add('geo_provincia.estado', Gral::getVars(1, 'buscador_geo_provincia_estado'), Gral::getVars(1, 'buscador_geo_provincia_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.geo_provincia_id', 'geo_provincia.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('geo_provincia');
		$criterio->setCriterios();		
}
?>

