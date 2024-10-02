<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PanPanol::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pan_panol.id', Gral::getVars(1, 'buscador_pan_panol_id'), Gral::getVars(1, 'buscador_pan_panol_id_comparador'));
	$criterio->add('pan_panol.descripcion', Gral::getVars(1, 'buscador_pan_panol_descripcion'), Gral::getVars(1, 'buscador_pan_panol_descripcion_comparador'));
	$criterio->add('pan_panol.pan_tipo_panol_id', Gral::getVars(1, 'buscador_pan_panol_pan_tipo_panol_id'), Gral::getVars(1, 'buscador_pan_panol_pan_tipo_panol_id_comparador'));
	$criterio->add('pan_panol.pde_centro_pedido_id', Gral::getVars(1, 'buscador_pan_panol_pde_centro_pedido_id'), Gral::getVars(1, 'buscador_pan_panol_pde_centro_pedido_id_comparador'));
	$criterio->add('pan_panol.geo_localidad_id', Gral::getVars(1, 'buscador_pan_panol_geo_localidad_id'), Gral::getVars(1, 'buscador_pan_panol_geo_localidad_id_comparador'));
	$criterio->add('pan_panol.domicilio', Gral::getVars(1, 'buscador_pan_panol_domicilio'), Gral::getVars(1, 'buscador_pan_panol_domicilio_comparador'));
	$criterio->add('pan_panol.responsable', Gral::getVars(1, 'buscador_pan_panol_responsable'), Gral::getVars(1, 'buscador_pan_panol_responsable_comparador'));
	$criterio->add('pan_panol.telefono', Gral::getVars(1, 'buscador_pan_panol_telefono'), Gral::getVars(1, 'buscador_pan_panol_telefono_comparador'));
	$criterio->add('pan_panol.email', Gral::getVars(1, 'buscador_pan_panol_email'), Gral::getVars(1, 'buscador_pan_panol_email_comparador'));
	$criterio->add('pan_panol.codigo', Gral::getVars(1, 'buscador_pan_panol_codigo'), Gral::getVars(1, 'buscador_pan_panol_codigo_comparador'));
	$criterio->add('pan_panol.codigo_corto', Gral::getVars(1, 'buscador_pan_panol_codigo_corto'), Gral::getVars(1, 'buscador_pan_panol_codigo_corto_comparador'));
	$criterio->add('pan_panol.color', Gral::getVars(1, 'buscador_pan_panol_color'), Gral::getVars(1, 'buscador_pan_panol_color_comparador'));
	$criterio->add('pan_panol.observacion', Gral::getVars(1, 'buscador_pan_panol_observacion'), Gral::getVars(1, 'buscador_pan_panol_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	$criterio->add('geo_localidad.geo_provincia_id', Gral::getVars(1, 'buscador_pan_panol_geo_provincia_id'), Gral::getVars(1, 'buscador_pan_panol_geo_provincia_id_comparador'));
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'pan_panol.geo_localidad_id', 'LEFT JOIN');
	
	
	$criterio->add('geo_provincia.geo_pais_id', Gral::getVars(1, 'buscador_pan_panol_geo_pais_id'), Gral::getVars(1, 'buscador_pan_panol_geo_pais_id_comparador'));
	$criterio->addRealJoin('geo_provincia', 'geo_provincia.id', 'geo_localidad.geo_provincia_id', 'LEFT JOIN');
	
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_sucursal_pan_panol', 'gral_sucursal_pan_panol.pan_panol_id', 'pan_panol.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'gral_sucursal_pan_panol.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_pan_panol', 'ins_insumo_pan_panol.pan_panol_id', 'pan_panol.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_insumo_pan_panol.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_piso', 'pan_ubi_piso.id', 'ins_insumo_pan_panol.pan_ubi_piso_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_pasillo', 'pan_ubi_pasillo.id', 'ins_insumo_pan_panol.pan_ubi_pasillo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_estante', 'pan_ubi_estante.id', 'ins_insumo_pan_panol.pan_ubi_estante_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_altura', 'pan_ubi_altura.id', 'ins_insumo_pan_panol.pan_ubi_altura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_casillero', 'pan_ubi_casillero.id', 'ins_insumo_pan_panol.pan_ubi_casillero_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_ubi_celda', 'pan_ubi_celda.id', 'ins_insumo_pan_panol.pan_ubi_celda_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_clasificacion', 'ins_clasificacion.id', 'ins_insumo_pan_panol.ins_clasificacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_tipo_configuracion', 'ins_stock_tipo_configuracion.id', 'ins_insumo_pan_panol.ins_stock_tipo_configuracion_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_transformacion', 'ins_stock_transformacion.pan_panol_id', 'pan_panol.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_transformacion_destino', 'ins_stock_transformacion_destino.pan_panol_id', 'pan_panol.id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol_us_usuario', 'pan_panol_us_usuario.pan_panol_id', 'pan_panol.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'pan_panol_us_usuario.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito', 'vta_remito.pan_panol_id', 'pan_panol.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_remito.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_tipo_despacho', 'vta_remito_tipo_despacho.id', 'vta_remito.vta_remito_tipo_despacho_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_tipo_estado', 'vta_remito_tipo_estado.id', 'vta_remito.vta_remito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'vta_remito.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_remito', 'vta_tipo_remito.id', 'vta_remito.vta_tipo_remito_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'vta_remito.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.id', 'vta_remito.vta_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_remito.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_centro_recepcion', 'cli_centro_recepcion.id', 'vta_remito.cli_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa_transportadora', 'gral_empresa_transportadora.id', 'vta_remito.gral_empresa_transportadora_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_movimiento', 'ins_stock_movimiento.pan_panol_id', 'pan_panol.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_tipo_movimiento', 'ins_stock_tipo_movimiento.id', 'ins_stock_movimiento.ins_stock_tipo_movimiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_pedido', 'pdi_pedido.id', 'ins_stock_movimiento.pdi_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion', 'pde_recepcion.id', 'ins_stock_movimiento.pde_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_resumen', 'ins_stock_resumen.pan_panol_id', 'pan_panol.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_resumen_tipo_estado', 'ins_stock_resumen_tipo_estado.id', 'ins_stock_resumen.ins_stock_resumen_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_estado', 'pde_recepcion_estado.pan_panol_id', 'pan_panol.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_tipo_estado', 'pde_recepcion_tipo_estado.id', 'pde_recepcion_estado.pde_recepcion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_recepcion_estado.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion_pan_panol', 'pde_centro_recepcion_pan_panol.pan_panol_id', 'pan_panol.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_ajuste', 'vta_remito_ajuste.pan_panol_id', 'pan_panol.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_ajuste_tipo_despacho', 'vta_remito_ajuste_tipo_despacho.id', 'vta_remito_ajuste.vta_remito_ajuste_tipo_despacho_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_ajuste_tipo_estado', 'vta_remito_ajuste_tipo_estado.id', 'vta_remito_ajuste.vta_remito_ajuste_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_remito_ajuste', 'vta_tipo_remito_ajuste.id', 'vta_remito_ajuste.vta_tipo_remito_ajuste_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pan_panol');
		$criterio->setCriterios();		
}
?>

