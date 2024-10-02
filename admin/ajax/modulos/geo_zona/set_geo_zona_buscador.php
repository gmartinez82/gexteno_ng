<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GeoZona::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('geo_zona.id', Gral::getVars(1, 'buscador_geo_zona_id'), Gral::getVars(1, 'buscador_geo_zona_id_comparador'));
	$criterio->add('geo_zona.descripcion', Gral::getVars(1, 'buscador_geo_zona_descripcion'), Gral::getVars(1, 'buscador_geo_zona_descripcion_comparador'));
	$criterio->add('geo_zona.codigo', Gral::getVars(1, 'buscador_geo_zona_codigo'), Gral::getVars(1, 'buscador_geo_zona_codigo_comparador'));
	$criterio->add('geo_zona.observacion', Gral::getVars(1, 'buscador_geo_zona_observacion'), Gral::getVars(1, 'buscador_geo_zona_observacion_comparador'));
	$criterio->add('geo_zona.estado', Gral::getVars(1, 'buscador_geo_zona_estado'), Gral::getVars(1, 'buscador_geo_zona_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.geo_zona_id', 'geo_zona.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'cli_cliente.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'cli_cliente.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'cli_cliente.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'cli_cliente.geo_localidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_grupo', 'cli_grupo.id', 'cli_cliente.cli_grupo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_categoria', 'cli_categoria.id', 'cli_cliente.cli_categoria_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('geo_zona');
		$criterio->setCriterios();		
}
?>

