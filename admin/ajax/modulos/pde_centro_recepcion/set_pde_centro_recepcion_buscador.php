<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeCentroRecepcion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_centro_recepcion.id', Gral::getVars(1, 'buscador_pde_centro_recepcion_id'), Gral::getVars(1, 'buscador_pde_centro_recepcion_id_comparador'));
	$criterio->add('pde_centro_recepcion.descripcion', Gral::getVars(1, 'buscador_pde_centro_recepcion_descripcion'), Gral::getVars(1, 'buscador_pde_centro_recepcion_descripcion_comparador'));
	$criterio->add('pde_centro_recepcion.geo_localidad_id', Gral::getVars(1, 'buscador_pde_centro_recepcion_geo_localidad_id'), Gral::getVars(1, 'buscador_pde_centro_recepcion_geo_localidad_id_comparador'));
	$criterio->add('pde_centro_recepcion.responsable', Gral::getVars(1, 'buscador_pde_centro_recepcion_responsable'), Gral::getVars(1, 'buscador_pde_centro_recepcion_responsable_comparador'));
	$criterio->add('pde_centro_recepcion.email', Gral::getVars(1, 'buscador_pde_centro_recepcion_email'), Gral::getVars(1, 'buscador_pde_centro_recepcion_email_comparador'));
	$criterio->add('pde_centro_recepcion.telefono', Gral::getVars(1, 'buscador_pde_centro_recepcion_telefono'), Gral::getVars(1, 'buscador_pde_centro_recepcion_telefono_comparador'));
	$criterio->add('pde_centro_recepcion.domicilio', Gral::getVars(1, 'buscador_pde_centro_recepcion_domicilio'), Gral::getVars(1, 'buscador_pde_centro_recepcion_domicilio_comparador'));
	$criterio->add('pde_centro_recepcion.codigo', Gral::getVars(1, 'buscador_pde_centro_recepcion_codigo'), Gral::getVars(1, 'buscador_pde_centro_recepcion_codigo_comparador'));
	$criterio->add('pde_centro_recepcion.observacion', Gral::getVars(1, 'buscador_pde_centro_recepcion_observacion'), Gral::getVars(1, 'buscador_pde_centro_recepcion_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	$criterio->add('geo_localidad.geo_provincia_id', Gral::getVars(1, 'buscador_pde_centro_recepcion_geo_provincia_id'), Gral::getVars(1, 'buscador_pde_centro_recepcion_geo_provincia_id_comparador'));
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'pde_centro_recepcion.geo_localidad_id', 'LEFT JOIN');
	
	
	$criterio->add('geo_provincia.geo_pais_id', Gral::getVars(1, 'buscador_pde_centro_recepcion_geo_pais_id'), Gral::getVars(1, 'buscador_pde_centro_recepcion_geo_pais_id_comparador'));
	$criterio->addRealJoin('geo_provincia', 'geo_provincia.id', 'geo_localidad.geo_provincia_id', 'LEFT JOIN');
	
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_oc_agrupacion', 'pde_oc_agrupacion.pde_centro_recepcion_id', 'pde_centro_recepcion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_origen', 'pde_oc_tipo_origen.id', 'pde_oc_agrupacion.pde_oc_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_oc_agrupacion.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_oc_agrupacion.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_agrupacion_tipo_estado', 'pde_oc_agrupacion_tipo_estado.id', 'pde_oc_agrupacion.pde_oc_agrupacion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_financiero', 'prv_descuento_financiero.id', 'pde_oc_agrupacion.prv_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.pde_centro_recepcion_id', 'pde_centro_recepcion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido', 'pde_pedido.id', 'pde_oc.pde_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_cotizacion', 'pde_cotizacion.id', 'pde_oc.pde_cotizacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_oc.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado', 'pde_oc_tipo_estado.id', 'pde_oc.pde_oc_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_recepcion', 'pde_oc_tipo_estado_recepcion.id', 'pde_oc.pde_oc_tipo_estado_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_facturacion', 'pde_oc_tipo_estado_facturacion.id', 'pde_oc.pde_oc_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo', 'prv_insumo.id', 'pde_oc.prv_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo_costo', 'prv_insumo_costo.id', 'pde_oc.prv_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_comercial', 'prv_descuento_comercial.id', 'pde_oc.prv_descuento_comercial_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_agrupacion', 'pde_recepcion_agrupacion.pde_centro_recepcion_id', 'pde_centro_recepcion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_recepcion', 'pde_tipo_recepcion.id', 'pde_recepcion_agrupacion.pde_tipo_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion', 'pde_recepcion.pde_centro_recepcion_id', 'pde_centro_recepcion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado', 'pde_recepcion_tipo_estado.id', 'pde_recepcion.pde_recepcion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado_facturacion', 'pde_recepcion_tipo_estado_facturacion.id', 'pde_recepcion.pde_recepcion_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_estado', 'pde_recepcion_estado.pde_centro_recepcion_id', 'pde_centro_recepcion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'pde_recepcion_estado.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion_pan_panol', 'pde_centro_recepcion_pan_panol.pde_centro_recepcion_id', 'pde_centro_recepcion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion_us_usuario', 'pde_centro_recepcion_us_usuario.pde_centro_recepcion_id', 'pde_centro_recepcion.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'pde_centro_recepcion_us_usuario.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido_pde_centro_recepcion', 'pde_centro_pedido_pde_centro_recepcion.pde_centro_recepcion_id', 'pde_centro_recepcion.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_centro_recepcion');
		$criterio->setCriterios();		
}
?>

