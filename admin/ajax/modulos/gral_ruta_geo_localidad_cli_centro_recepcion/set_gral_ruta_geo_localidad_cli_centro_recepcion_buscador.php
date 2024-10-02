<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralRutaGeoLocalidadCliCentroRecepcion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_ruta_geo_localidad_cli_centro_recepcion.id', Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_cli_centro_recepcion_id'), Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_cli_centro_recepcion_id_comparador'));
	$criterio->add('gral_ruta_geo_localidad_cli_centro_recepcion.descripcion', Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_cli_centro_recepcion_descripcion'), Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_cli_centro_recepcion_descripcion_comparador'));
	$criterio->add('gral_ruta_geo_localidad_cli_centro_recepcion.gral_ruta_id', Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_cli_centro_recepcion_gral_ruta_id'), Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_cli_centro_recepcion_gral_ruta_id_comparador'));
	$criterio->add('gral_ruta_geo_localidad_cli_centro_recepcion.geo_localidad_id', Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_cli_centro_recepcion_geo_localidad_id'), Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_cli_centro_recepcion_geo_localidad_id_comparador'));
	$criterio->add('gral_ruta_geo_localidad_cli_centro_recepcion.cli_centro_recepcion_id', Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_cli_centro_recepcion_cli_centro_recepcion_id'), Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_cli_centro_recepcion_cli_centro_recepcion_id_comparador'));
	$criterio->add('gral_ruta_geo_localidad_cli_centro_recepcion.cli_cliente_id', Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_cli_centro_recepcion_cli_cliente_id'), Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_cli_centro_recepcion_cli_cliente_id_comparador'));
	$criterio->add('gral_ruta_geo_localidad_cli_centro_recepcion.codigo', Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_cli_centro_recepcion_codigo'), Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_cli_centro_recepcion_codigo_comparador'));
	$criterio->add('gral_ruta_geo_localidad_cli_centro_recepcion.observacion', Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_cli_centro_recepcion_observacion'), Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_cli_centro_recepcion_observacion_comparador'));
	$criterio->add('gral_ruta_geo_localidad_cli_centro_recepcion.estado', Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_cli_centro_recepcion_estado'), Gral::getVars(1, 'buscador_gral_ruta_geo_localidad_cli_centro_recepcion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_ruta_geo_localidad_cli_centro_recepcion');
		$criterio->setCriterios();		
}
?>

