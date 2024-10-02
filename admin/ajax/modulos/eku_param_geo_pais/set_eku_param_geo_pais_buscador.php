<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamGeoPais::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_geo_pais.id', Gral::getVars(1, 'buscador_eku_param_geo_pais_id'), Gral::getVars(1, 'buscador_eku_param_geo_pais_id_comparador'));
	$criterio->add('eku_param_geo_pais.descripcion', Gral::getVars(1, 'buscador_eku_param_geo_pais_descripcion'), Gral::getVars(1, 'buscador_eku_param_geo_pais_descripcion_comparador'));
	$criterio->add('eku_param_geo_pais.codigo', Gral::getVars(1, 'buscador_eku_param_geo_pais_codigo'), Gral::getVars(1, 'buscador_eku_param_geo_pais_codigo_comparador'));
	$criterio->add('eku_param_geo_pais.codigo_eku', Gral::getVars(1, 'buscador_eku_param_geo_pais_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_geo_pais_codigo_eku_comparador'));
	$criterio->add('eku_param_geo_pais.observacion', Gral::getVars(1, 'buscador_eku_param_geo_pais_observacion'), Gral::getVars(1, 'buscador_eku_param_geo_pais_observacion_comparador'));
	$criterio->add('eku_param_geo_pais.estado', Gral::getVars(1, 'buscador_eku_param_geo_pais_estado'), Gral::getVars(1, 'buscador_eku_param_geo_pais_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('eku_param_geo_pais_geo_pais', 'eku_param_geo_pais_geo_pais.eku_param_geo_pais_id', 'eku_param_geo_pais.id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_pais', 'geo_pais.id', 'eku_param_geo_pais_geo_pais.geo_pais_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_geo_pais');
		$criterio->setCriterios();		
}
?>

