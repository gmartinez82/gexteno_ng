<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralRuta::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_ruta.id', Gral::getVars(1, 'buscador_gral_ruta_id'), Gral::getVars(1, 'buscador_gral_ruta_id_comparador'));
	$criterio->add('gral_ruta.descripcion', Gral::getVars(1, 'buscador_gral_ruta_descripcion'), Gral::getVars(1, 'buscador_gral_ruta_descripcion_comparador'));
	$criterio->add('gral_ruta.codigo', Gral::getVars(1, 'buscador_gral_ruta_codigo'), Gral::getVars(1, 'buscador_gral_ruta_codigo_comparador'));
	$criterio->add('gral_ruta.observacion', Gral::getVars(1, 'buscador_gral_ruta_observacion'), Gral::getVars(1, 'buscador_gral_ruta_observacion_comparador'));
	$criterio->add('gral_ruta.estado', Gral::getVars(1, 'buscador_gral_ruta_estado'), Gral::getVars(1, 'buscador_gral_ruta_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_ruta_vta_vendedor', 'gral_ruta_vta_vendedor.gral_ruta_id', 'gral_ruta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'gral_ruta_vta_vendedor.vta_vendedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_ruta_geo_localidad', 'gral_ruta_geo_localidad.gral_ruta_id', 'gral_ruta.id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'gral_ruta_geo_localidad.geo_localidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_ruta_geo_localidad_cli_centro_recepcion', 'gral_ruta_geo_localidad_cli_centro_recepcion.gral_ruta_id', 'gral_ruta.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_centro_recepcion', 'cli_centro_recepcion.id', 'gral_ruta_geo_localidad_cli_centro_recepcion.cli_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'gral_ruta_geo_localidad_cli_centro_recepcion.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_ruta_gral_dia', 'gral_ruta_gral_dia.gral_ruta_id', 'gral_ruta.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_dia', 'gral_dia.id', 'gral_ruta_gral_dia.gral_dia_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_hoja_ruta', 'vta_hoja_ruta.gral_ruta_id', 'gral_ruta.id', 'LEFT JOIN');
	$criterio->addRealJoin('ope_chofer', 'ope_chofer.id', 'vta_hoja_ruta.ope_chofer_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_hoja_ruta_tipo_estado', 'vta_hoja_ruta_tipo_estado.id', 'vta_hoja_ruta.vta_hoja_ruta_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_ruta');
		$criterio->setCriterios();		
}
?>

