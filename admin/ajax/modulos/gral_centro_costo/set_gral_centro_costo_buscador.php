<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralCentroCosto::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_centro_costo.id', Gral::getVars(1, 'buscador_gral_centro_costo_id'), Gral::getVars(1, 'buscador_gral_centro_costo_id_comparador'));
	$criterio->add('gral_centro_costo.descripcion', Gral::getVars(1, 'buscador_gral_centro_costo_descripcion'), Gral::getVars(1, 'buscador_gral_centro_costo_descripcion_comparador'));
	$criterio->add('gral_centro_costo.descripcion_corta', Gral::getVars(1, 'buscador_gral_centro_costo_descripcion_corta'), Gral::getVars(1, 'buscador_gral_centro_costo_descripcion_corta_comparador'));
	$criterio->add('gral_centro_costo.gral_empresa_id', Gral::getVars(1, 'buscador_gral_centro_costo_gral_empresa_id'), Gral::getVars(1, 'buscador_gral_centro_costo_gral_empresa_id_comparador'));
	$criterio->add('gral_centro_costo.domicilio', Gral::getVars(1, 'buscador_gral_centro_costo_domicilio'), Gral::getVars(1, 'buscador_gral_centro_costo_domicilio_comparador'));
	$criterio->add('gral_centro_costo.telefono', Gral::getVars(1, 'buscador_gral_centro_costo_telefono'), Gral::getVars(1, 'buscador_gral_centro_costo_telefono_comparador'));
	$criterio->add('gral_centro_costo.email', Gral::getVars(1, 'buscador_gral_centro_costo_email'), Gral::getVars(1, 'buscador_gral_centro_costo_email_comparador'));
	$criterio->add('gral_centro_costo.codigo_postal', Gral::getVars(1, 'buscador_gral_centro_costo_codigo_postal'), Gral::getVars(1, 'buscador_gral_centro_costo_codigo_postal_comparador'));
	$criterio->add('gral_centro_costo.geo_localidad_id', Gral::getVars(1, 'buscador_gral_centro_costo_geo_localidad_id'), Gral::getVars(1, 'buscador_gral_centro_costo_geo_localidad_id_comparador'));
	$criterio->add('gral_centro_costo.codigo', Gral::getVars(1, 'buscador_gral_centro_costo_codigo'), Gral::getVars(1, 'buscador_gral_centro_costo_codigo_comparador'));
	$criterio->add('gral_centro_costo.color', Gral::getVars(1, 'buscador_gral_centro_costo_color'), Gral::getVars(1, 'buscador_gral_centro_costo_color_comparador'));
	$criterio->add('gral_centro_costo.observacion', Gral::getVars(1, 'buscador_gral_centro_costo_observacion'), Gral::getVars(1, 'buscador_gral_centro_costo_observacion_comparador'));
	$criterio->add('gral_centro_costo.estado', Gral::getVars(1, 'buscador_gral_centro_costo_estado'), Gral::getVars(1, 'buscador_gral_centro_costo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	$criterio->add('geo_localidad.geo_provincia_id', Gral::getVars(1, 'buscador_gral_centro_costo_geo_provincia_id'), Gral::getVars(1, 'buscador_gral_centro_costo_geo_provincia_id_comparador'));
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'gral_centro_costo.geo_localidad_id', 'LEFT JOIN');
	
	
	$criterio->add('geo_provincia.geo_pais_id', Gral::getVars(1, 'buscador_gral_centro_costo_geo_pais_id'), Gral::getVars(1, 'buscador_gral_centro_costo_geo_pais_id_comparador'));
	$criterio->addRealJoin('geo_provincia', 'geo_provincia.id', 'geo_localidad.geo_provincia_id', 'LEFT JOIN');
	
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_centro_costo_gral_sucursal', 'gral_centro_costo_gral_sucursal.gral_centro_costo_id', 'gral_centro_costo.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'gral_centro_costo_gral_sucursal.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_centro_costo_vta_vendedor', 'gral_centro_costo_vta_vendedor.gral_centro_costo_id', 'gral_centro_costo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'gral_centro_costo_vta_vendedor.vta_vendedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_centro_costo_us_usuario', 'gral_centro_costo_us_usuario.gral_centro_costo_id', 'gral_centro_costo.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'gral_centro_costo_us_usuario.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_centro_costo_prv_proveedor', 'gral_centro_costo_prv_proveedor.gral_centro_costo_id', 'gral_centro_costo.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'gral_centro_costo_prv_proveedor.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_gral_centro_costo', 'pde_factura_gral_centro_costo.gral_centro_costo_id', 'gral_centro_costo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.id', 'pde_factura_gral_centro_costo.pde_factura_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_centro_costo');
		$criterio->setCriterios();		
}
?>

