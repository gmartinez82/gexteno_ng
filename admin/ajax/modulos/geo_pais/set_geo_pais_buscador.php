<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GeoPais::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('geo_pais.id', Gral::getVars(1, 'buscador_geo_pais_id'), Gral::getVars(1, 'buscador_geo_pais_id_comparador'));
	$criterio->add('geo_pais.descripcion', Gral::getVars(1, 'buscador_geo_pais_descripcion'), Gral::getVars(1, 'buscador_geo_pais_descripcion_comparador'));
	$criterio->add('geo_pais.gral_lenguaje_id', Gral::getVars(1, 'buscador_geo_pais_gral_lenguaje_id'), Gral::getVars(1, 'buscador_geo_pais_gral_lenguaje_id_comparador'));
	$criterio->add('geo_pais.codigo', Gral::getVars(1, 'buscador_geo_pais_codigo'), Gral::getVars(1, 'buscador_geo_pais_codigo_comparador'));
	$criterio->add('geo_pais.codigo_alpha_2', Gral::getVars(1, 'buscador_geo_pais_codigo_alpha_2'), Gral::getVars(1, 'buscador_geo_pais_codigo_alpha_2_comparador'));
	$criterio->add('geo_pais.codigo_alpha_3', Gral::getVars(1, 'buscador_geo_pais_codigo_alpha_3'), Gral::getVars(1, 'buscador_geo_pais_codigo_alpha_3_comparador'));
	$criterio->add('geo_pais.codigo_telefonico', Gral::getVars(1, 'buscador_geo_pais_codigo_telefonico'), Gral::getVars(1, 'buscador_geo_pais_codigo_telefonico_comparador'));
	$criterio->add('geo_pais.observacion', Gral::getVars(1, 'buscador_geo_pais_observacion'), Gral::getVars(1, 'buscador_geo_pais_observacion_comparador'));
	$criterio->add('geo_pais.estado', Gral::getVars(1, 'buscador_geo_pais_estado'), Gral::getVars(1, 'buscador_geo_pais_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('geo_provincia', 'geo_provincia.geo_pais_id', 'geo_pais.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_telefono', 'prv_telefono.geo_pais_id', 'geo_pais.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'prv_telefono.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_telefono_tipo', 'prv_telefono_tipo.id', 'prv_telefono.prv_telefono_tipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_telefono', 'cli_telefono.geo_pais_id', 'geo_pais.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'cli_telefono.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_telefono_tipo', 'cli_telefono_tipo.id', 'cli_telefono.cli_telefono_tipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_param_geo_pais_geo_pais', 'eku_param_geo_pais_geo_pais.geo_pais_id', 'geo_pais.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_param_geo_pais', 'eku_param_geo_pais.id', 'eku_param_geo_pais_geo_pais.eku_param_geo_pais_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('geo_pais');
		$criterio->setCriterios();		
}
?>

