<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralRutaGeoLocalidad::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_ruta_geo_localidad.id', Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_id'), Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_id_comparador'));
	$criterio->add('gral_ruta_geo_localidad.descripcion', Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_descripcion'), Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_descripcion_comparador'));
	$criterio->add('gral_ruta_geo_localidad.gral_ruta_id', Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_gral_ruta_id'), Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_gral_ruta_id_comparador'));
	$criterio->add('gral_ruta_geo_localidad.geo_localidad_id', Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_geo_localidad_id'), Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_geo_localidad_id_comparador'));
	$criterio->add('gral_ruta_geo_localidad.codigo', Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_codigo'), Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_codigo_comparador'));
	$criterio->add('gral_ruta_geo_localidad.observacion', Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_observacion'), Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_observacion_comparador'));
	$criterio->add('gral_ruta_geo_localidad.estado', Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_estado'), Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_ruta_geo_localidad');
		$criterio->setCriterios();		
}
?>

