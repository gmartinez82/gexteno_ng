<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamGeoDistrito::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_geo_distrito.id', Gral::getVars(1, 'buscador_eku_param_geo_distrito_id'), Gral::getVars(1, 'buscador_eku_param_geo_distrito_id_comparador'));
	$criterio->add('eku_param_geo_distrito.descripcion', Gral::getVars(1, 'buscador_eku_param_geo_distrito_descripcion'), Gral::getVars(1, 'buscador_eku_param_geo_distrito_descripcion_comparador'));
	$criterio->add('eku_param_geo_distrito.codigo', Gral::getVars(1, 'buscador_eku_param_geo_distrito_codigo'), Gral::getVars(1, 'buscador_eku_param_geo_distrito_codigo_comparador'));
	$criterio->add('eku_param_geo_distrito.codigo_eku', Gral::getVars(1, 'buscador_eku_param_geo_distrito_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_geo_distrito_codigo_eku_comparador'));
	$criterio->add('eku_param_geo_distrito.observacion', Gral::getVars(1, 'buscador_eku_param_geo_distrito_observacion'), Gral::getVars(1, 'buscador_eku_param_geo_distrito_observacion_comparador'));
	$criterio->add('eku_param_geo_distrito.estado', Gral::getVars(1, 'buscador_eku_param_geo_distrito_estado'), Gral::getVars(1, 'buscador_eku_param_geo_distrito_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_geo_distrito');
		$criterio->setCriterios();		
}
?>

