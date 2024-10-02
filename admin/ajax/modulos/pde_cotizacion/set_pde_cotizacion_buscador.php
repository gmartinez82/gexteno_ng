<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeCotizacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_cotizacion.id', Gral::getVars(1, 'buscador_pde_cotizacion_id'), Gral::getVars(1, 'buscador_pde_cotizacion_id_comparador'));
	$criterio->add('pde_cotizacion.descripcion', Gral::getVars(1, 'buscador_pde_cotizacion_descripcion'), Gral::getVars(1, 'buscador_pde_cotizacion_descripcion_comparador'));
	$criterio->add('pde_cotizacion.codigo', Gral::getVars(1, 'buscador_pde_cotizacion_codigo'), Gral::getVars(1, 'buscador_pde_cotizacion_codigo_comparador'));
	$criterio->add('pde_cotizacion.pde_pedido_id', Gral::getVars(1, 'buscador_pde_cotizacion_pde_pedido_id'), Gral::getVars(1, 'buscador_pde_cotizacion_pde_pedido_id_comparador'));
	$criterio->add('pde_cotizacion.prv_proveedor_id', Gral::getVars(1, 'buscador_pde_cotizacion_prv_proveedor_id'), Gral::getVars(1, 'buscador_pde_cotizacion_prv_proveedor_id_comparador'));
	$criterio->add('pde_cotizacion.ins_insumo_id', Gral::getVars(1, 'buscador_pde_cotizacion_ins_insumo_id'), Gral::getVars(1, 'buscador_pde_cotizacion_ins_insumo_id_comparador'));
	$criterio->add('pde_cotizacion.cantidad', Gral::getVars(1, 'buscador_pde_cotizacion_cantidad'), Gral::getVars(1, 'buscador_pde_cotizacion_cantidad_comparador'));
	$criterio->add('pde_cotizacion.fecha_entrega', Gral::getFechaToDB(Gral::getVars(1, 'buscador_pde_cotizacion_fecha_entrega')), Gral::getVars(1, 'buscador_pde_cotizacion_fecha_entrega_comparador'));
	$criterio->add('pde_cotizacion.observacion', Gral::getVars(1, 'buscador_pde_cotizacion_observacion'), Gral::getVars(1, 'buscador_pde_cotizacion_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_cotizacion_destinatario', 'pde_cotizacion_destinatario.pde_cotizacion_id', 'pde_cotizacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'pde_cotizacion_destinatario.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_cotizacion_envio_email', 'pde_cotizacion_envio_email.pde_cotizacion_id', 'pde_cotizacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.pde_cotizacion_id', 'pde_cotizacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido', 'pde_pedido.id', 'pde_oc.pde_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_oc.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_oc.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_agrupacion', 'pde_oc_agrupacion.id', 'pde_oc.pde_oc_agrupacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_oc.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_oc.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado', 'pde_oc_tipo_estado.id', 'pde_oc.pde_oc_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_recepcion', 'pde_oc_tipo_estado_recepcion.id', 'pde_oc.pde_oc_tipo_estado_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_facturacion', 'pde_oc_tipo_estado_facturacion.id', 'pde_oc.pde_oc_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_origen', 'pde_oc_tipo_origen.id', 'pde_oc.pde_oc_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo', 'prv_insumo.id', 'pde_oc.prv_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo_costo', 'prv_insumo_costo.id', 'pde_oc.prv_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_financiero', 'prv_descuento_financiero.id', 'pde_oc.prv_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_comercial', 'prv_descuento_comercial.id', 'pde_oc.prv_descuento_comercial_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_cotizacion');
		$criterio->setCriterios();		
}
?>

