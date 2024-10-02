<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamGeoPaisGeoPais::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_geo_pais_geo_pais.id', Gral::getVars(1, 'buscador_eku_param_geo_pais_geo_pais_id'), Gral::getVars(1, 'buscador_eku_param_geo_pais_geo_pais_id_comparador'));
	$criterio->add('eku_param_geo_pais_geo_pais.eku_param_geo_pais_id', Gral::getVars(1, 'buscador_eku_param_geo_pais_geo_pais_eku_param_geo_pais_id'), Gral::getVars(1, 'buscador_eku_param_geo_pais_geo_pais_eku_param_geo_pais_id_comparador'));
	$criterio->add('eku_param_geo_pais_geo_pais.geo_pais_id', Gral::getVars(1, 'buscador_eku_param_geo_pais_geo_pais_geo_pais_id'), Gral::getVars(1, 'buscador_eku_param_geo_pais_geo_pais_geo_pais_id_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_geo_pais_geo_pais');
		$criterio->setCriterios();		
}
?>

