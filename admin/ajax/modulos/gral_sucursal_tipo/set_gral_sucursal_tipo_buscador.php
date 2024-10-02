<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralSucursalTipo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_sucursal_tipo.id', Gral::getVars(1, 'buscador_gral_sucursal_tipo_id'), Gral::getVars(1, 'buscador_gral_sucursal_tipo_id_comparador'));
	$criterio->add('gral_sucursal_tipo.descripcion', Gral::getVars(1, 'buscador_gral_sucursal_tipo_descripcion'), Gral::getVars(1, 'buscador_gral_sucursal_tipo_descripcion_comparador'));
	$criterio->add('gral_sucursal_tipo.codigo', Gral::getVars(1, 'buscador_gral_sucursal_tipo_codigo'), Gral::getVars(1, 'buscador_gral_sucursal_tipo_codigo_comparador'));
	$criterio->add('gral_sucursal_tipo.descripcion_corta', Gral::getVars(1, 'buscador_gral_sucursal_tipo_descripcion_corta'), Gral::getVars(1, 'buscador_gral_sucursal_tipo_descripcion_corta_comparador'));
	$criterio->add('gral_sucursal_tipo.color', Gral::getVars(1, 'buscador_gral_sucursal_tipo_color'), Gral::getVars(1, 'buscador_gral_sucursal_tipo_color_comparador'));
	$criterio->add('gral_sucursal_tipo.observacion', Gral::getVars(1, 'buscador_gral_sucursal_tipo_observacion'), Gral::getVars(1, 'buscador_gral_sucursal_tipo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.gral_sucursal_tipo_id', 'gral_sucursal_tipo.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'gral_sucursal.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'gral_sucursal.geo_localidad_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_sucursal_tipo');
		$criterio->setCriterios();		
}
?>

