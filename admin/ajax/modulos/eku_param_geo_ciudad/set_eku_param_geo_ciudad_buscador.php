<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamGeoCiudad::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_geo_ciudad.id', Gral::getVars(1, 'buscador_eku_param_geo_ciudad_id'), Gral::getVars(1, 'buscador_eku_param_geo_ciudad_id_comparador'));
	$criterio->add('eku_param_geo_ciudad.descripcion', Gral::getVars(1, 'buscador_eku_param_geo_ciudad_descripcion'), Gral::getVars(1, 'buscador_eku_param_geo_ciudad_descripcion_comparador'));
	$criterio->add('eku_param_geo_ciudad.codigo', Gral::getVars(1, 'buscador_eku_param_geo_ciudad_codigo'), Gral::getVars(1, 'buscador_eku_param_geo_ciudad_codigo_comparador'));
	$criterio->add('eku_param_geo_ciudad.codigo_eku', Gral::getVars(1, 'buscador_eku_param_geo_ciudad_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_geo_ciudad_codigo_eku_comparador'));
	$criterio->add('eku_param_geo_ciudad.observacion', Gral::getVars(1, 'buscador_eku_param_geo_ciudad_observacion'), Gral::getVars(1, 'buscador_eku_param_geo_ciudad_observacion_comparador'));
	$criterio->add('eku_param_geo_ciudad.estado', Gral::getVars(1, 'buscador_eku_param_geo_ciudad_estado'), Gral::getVars(1, 'buscador_eku_param_geo_ciudad_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('eku_param_geo_ciudad_geo_localidad', 'eku_param_geo_ciudad_geo_localidad.eku_param_geo_ciudad_id', 'eku_param_geo_ciudad.id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'eku_param_geo_ciudad_geo_localidad.geo_localidad_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_geo_ciudad');
		$criterio->setCriterios();		
}
?>

