<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeOcTipoEstadoRecepcion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_oc_tipo_estado_recepcion.id', Gral::getVars(1, 'buscador_pde_oc_tipo_estado_recepcion_id'), Gral::getVars(1, 'buscador_pde_oc_tipo_estado_recepcion_id_comparador'));
	$criterio->add('pde_oc_tipo_estado_recepcion.descripcion', Gral::getVars(1, 'buscador_pde_oc_tipo_estado_recepcion_descripcion'), Gral::getVars(1, 'buscador_pde_oc_tipo_estado_recepcion_descripcion_comparador'));
	$criterio->add('pde_oc_tipo_estado_recepcion.codigo', Gral::getVars(1, 'buscador_pde_oc_tipo_estado_recepcion_codigo'), Gral::getVars(1, 'buscador_pde_oc_tipo_estado_recepcion_codigo_comparador'));
	$criterio->add('pde_oc_tipo_estado_recepcion.activo', Gral::getVars(1, 'buscador_pde_oc_tipo_estado_recepcion_activo'), Gral::getVars(1, 'buscador_pde_oc_tipo_estado_recepcion_activo_comparador'));
	$criterio->add('pde_oc_tipo_estado_recepcion.terminal', Gral::getVars(1, 'buscador_pde_oc_tipo_estado_recepcion_terminal'), Gral::getVars(1, 'buscador_pde_oc_tipo_estado_recepcion_terminal_comparador'));
	$criterio->add('pde_oc_tipo_estado_recepcion.observacion', Gral::getVars(1, 'buscador_pde_oc_tipo_estado_recepcion_observacion'), Gral::getVars(1, 'buscador_pde_oc_tipo_estado_recepcion_observacion_comparador'));
	$criterio->add('pde_oc_tipo_estado_recepcion.estado', Gral::getVars(1, 'buscador_pde_oc_tipo_estado_recepcion_estado'), Gral::getVars(1, 'buscador_pde_oc_tipo_estado_recepcion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_oc', 'pde_oc.pde_oc_tipo_estado_recepcion_id', 'pde_oc_tipo_estado_recepcion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido', 'pde_pedido.id', 'pde_oc.pde_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_cotizacion', 'pde_cotizacion.id', 'pde_oc.pde_cotizacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_oc.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_oc.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_agrupacion', 'pde_oc_agrupacion.id', 'pde_oc.pde_oc_agrupacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_oc.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_oc.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado', 'pde_oc_tipo_estado.id', 'pde_oc.pde_oc_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_facturacion', 'pde_oc_tipo_estado_facturacion.id', 'pde_oc.pde_oc_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_origen', 'pde_oc_tipo_origen.id', 'pde_oc.pde_oc_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo', 'prv_insumo.id', 'pde_oc.prv_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo_costo', 'prv_insumo_costo.id', 'pde_oc.prv_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_financiero', 'prv_descuento_financiero.id', 'pde_oc.prv_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_comercial', 'prv_descuento_comercial.id', 'pde_oc.prv_descuento_comercial_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_estado_recepcion', 'pde_oc_estado_recepcion.pde_oc_tipo_estado_recepcion_id', 'pde_oc_tipo_estado_recepcion.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_oc_tipo_estado_recepcion');
		$criterio->setCriterios();		
}
?>

