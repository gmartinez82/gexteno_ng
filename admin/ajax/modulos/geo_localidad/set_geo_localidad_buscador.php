<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GeoLocalidad::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('geo_localidad.id', Gral::getVars(1, 'buscador_geo_localidad_id'), Gral::getVars(1, 'buscador_geo_localidad_id_comparador'));
	$criterio->add('geo_localidad.descripcion', Gral::getVars(1, 'buscador_geo_localidad_descripcion'), Gral::getVars(1, 'buscador_geo_localidad_descripcion_comparador'));
	$criterio->add('geo_localidad.geo_provincia_id', Gral::getVars(1, 'buscador_geo_localidad_geo_provincia_id'), Gral::getVars(1, 'buscador_geo_localidad_geo_provincia_id_comparador'));
	$criterio->add('geo_localidad.codigo', Gral::getVars(1, 'buscador_geo_localidad_codigo'), Gral::getVars(1, 'buscador_geo_localidad_codigo_comparador'));
	$criterio->add('geo_localidad.codigo_eku', Gral::getVars(1, 'buscador_geo_localidad_codigo_eku'), Gral::getVars(1, 'buscador_geo_localidad_codigo_eku_comparador'));
	$criterio->add('geo_localidad.codigo_distrito_eku', Gral::getVars(1, 'buscador_geo_localidad_codigo_distrito_eku'), Gral::getVars(1, 'buscador_geo_localidad_codigo_distrito_eku_comparador'));
	$criterio->add('geo_localidad.observacion', Gral::getVars(1, 'buscador_geo_localidad_observacion'), Gral::getVars(1, 'buscador_geo_localidad_observacion_comparador'));
	$criterio->add('geo_localidad.estado', Gral::getVars(1, 'buscador_geo_localidad_estado'), Gral::getVars(1, 'buscador_geo_localidad_estado_comparador'));
	
	// criterios agregados por dependencias
	
	$criterio->add('geo_provincia.geo_pais_id', Gral::getVars(1, 'buscador_geo_localidad_geo_pais_id'), Gral::getVars(1, 'buscador_geo_localidad_geo_pais_id_comparador'));
	$criterio->addRealJoin('geo_provincia', 'geo_provincia.id', 'geo_localidad.geo_provincia_id', 'LEFT JOIN');
	
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.geo_localidad_id', 'geo_localidad.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'gral_empresa.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'gral_empresa.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.geo_localidad_id', 'geo_localidad.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal_tipo', 'gral_sucursal_tipo.id', 'gral_sucursal.gral_sucursal_tipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_ruta_geo_localidad', 'gral_ruta_geo_localidad.geo_localidad_id', 'geo_localidad.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_ruta', 'gral_ruta.id', 'gral_ruta_geo_localidad.gral_ruta_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_ruta_geo_localidad_cli_centro_recepcion', 'gral_ruta_geo_localidad_cli_centro_recepcion.geo_localidad_id', 'geo_localidad.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_centro_recepcion', 'cli_centro_recepcion.id', 'gral_ruta_geo_localidad_cli_centro_recepcion.cli_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'gral_ruta_geo_localidad_cli_centro_recepcion.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_centro_costo', 'gral_centro_costo.geo_localidad_id', 'geo_localidad.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.geo_localidad_id', 'geo_localidad.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_tipo', 'prv_tipo.id', 'prv_proveedor.prv_tipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_grupo', 'prv_grupo.id', 'prv_proveedor.prv_grupo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_categoria', 'prv_categoria.id', 'prv_proveedor.prv_categoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.geo_localidad_id', 'geo_localidad.id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_tipo_panol', 'pan_tipo_panol.id', 'pan_panol.pan_tipo_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pan_panol.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_tipo_cliente', 'cli_tipo_cliente.id', 'cli_cliente.cli_tipo_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'cli_cliente.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_zona', 'geo_zona.id', 'cli_cliente.geo_zona_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_grupo', 'cli_grupo.id', 'cli_cliente.cli_grupo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa_transportadora', 'gral_empresa_transportadora.id', 'cli_cliente.gral_empresa_transportadora_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_categoria', 'cli_categoria.id', 'cli_cliente.cli_categoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_subcategoria', 'cli_subcategoria.id', 'cli_cliente.cli_subcategoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_gestion', 'cli_cliente_tipo_gestion.id', 'cli_cliente.cli_cliente_tipo_gestion_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_periodicidad_gestion', 'cli_cliente_periodicidad_gestion.id', 'cli_cliente.cli_cliente_periodicidad_gestion_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado', 'cli_cliente_tipo_estado.id', 'cli_cliente.cli_cliente_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado_venta', 'cli_cliente_tipo_estado_venta.id', 'cli_cliente.cli_cliente_tipo_estado_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado_cobro', 'cli_cliente_tipo_estado_cobro.id', 'cli_cliente.cli_cliente_tipo_estado_cobro_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado_cuenta', 'cli_cliente_tipo_estado_cuenta.id', 'cli_cliente.cli_cliente_tipo_estado_cuenta_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado_satisfaccion', 'cli_cliente_tipo_estado_satisfaccion.id', 'cli_cliente.cli_cliente_tipo_estado_satisfaccion_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_centro_pedido', 'cli_centro_pedido.geo_localidad_id', 'geo_localidad.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'cli_centro_pedido.vta_comprador_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_comprador', 'vta_tipo_comprador.id', 'vta_comprador.vta_tipo_comprador_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.geo_localidad_id', 'geo_localidad.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.geo_localidad_id', 'geo_localidad.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tienda', 'cli_cliente_tienda.geo_localidad_id', 'geo_localidad.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_param_geo_ciudad_geo_localidad', 'eku_param_geo_ciudad_geo_localidad.geo_localidad_id', 'geo_localidad.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_param_geo_ciudad', 'eku_param_geo_ciudad.id', 'eku_param_geo_ciudad_geo_localidad.eku_param_geo_ciudad_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('geo_localidad');
		$criterio->setCriterios();		
}
?>

