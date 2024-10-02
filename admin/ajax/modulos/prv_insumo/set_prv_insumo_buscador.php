<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrvInsumo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prv_insumo.id', Gral::getVars(1, 'buscador_prv_insumo_id'), Gral::getVars(1, 'buscador_prv_insumo_id_comparador'));
	$criterio->add('prv_insumo.descripcion', Gral::getVars(1, 'buscador_prv_insumo_descripcion'), Gral::getVars(1, 'buscador_prv_insumo_descripcion_comparador'));
	$criterio->add('prv_insumo.ins_insumo_id', Gral::getVars(1, 'buscador_prv_insumo_ins_insumo_id'), Gral::getVars(1, 'buscador_prv_insumo_ins_insumo_id_comparador'));
	$criterio->add('prv_insumo.prv_proveedor_id', Gral::getVars(1, 'buscador_prv_insumo_prv_proveedor_id'), Gral::getVars(1, 'buscador_prv_insumo_prv_proveedor_id_comparador'));
	$criterio->add('prv_insumo.codigo_proveedor', Gral::getVars(1, 'buscador_prv_insumo_codigo_proveedor'), Gral::getVars(1, 'buscador_prv_insumo_codigo_proveedor_comparador'));
	$criterio->add('prv_insumo.ins_marca_id', Gral::getVars(1, 'buscador_prv_insumo_ins_marca_id'), Gral::getVars(1, 'buscador_prv_insumo_ins_marca_id_comparador'));
	$criterio->add('prv_insumo.codigo_marca', Gral::getVars(1, 'buscador_prv_insumo_codigo_marca'), Gral::getVars(1, 'buscador_prv_insumo_codigo_marca_comparador'));
	$criterio->add('prv_insumo.ins_matriz_id', Gral::getVars(1, 'buscador_prv_insumo_ins_matriz_id'), Gral::getVars(1, 'buscador_prv_insumo_ins_matriz_id_comparador'));
	$criterio->add('prv_insumo.ins_marca_pieza', Gral::getVars(1, 'buscador_prv_insumo_ins_marca_pieza'), Gral::getVars(1, 'buscador_prv_insumo_ins_marca_pieza_comparador'));
	$criterio->add('prv_insumo.codigo_pieza', Gral::getVars(1, 'buscador_prv_insumo_codigo_pieza'), Gral::getVars(1, 'buscador_prv_insumo_codigo_pieza_comparador'));
	$criterio->add('prv_insumo.codigo', Gral::getVars(1, 'buscador_prv_insumo_codigo'), Gral::getVars(1, 'buscador_prv_insumo_codigo_comparador'));
	$criterio->add('prv_insumo.fecha_actualizacion', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_prv_insumo_fecha_actualizacion')), Gral::getVars(1, 'buscador_prv_insumo_fecha_actualizacion_comparador'));
	$criterio->add('prv_insumo.claves', Gral::getVars(1, 'buscador_prv_insumo_claves'), Gral::getVars(1, 'buscador_prv_insumo_claves_comparador'));
	$criterio->add('prv_insumo.observacion', Gral::getVars(1, 'buscador_prv_insumo_observacion'), Gral::getVars(1, 'buscador_prv_insumo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('prv_insumo_costo', 'prv_insumo_costo.prv_insumo_id', 'prv_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_importacion', 'prv_importacion.id', 'prv_insumo_costo.prv_importacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_agrupacion_item', 'pde_oc_agrupacion_item.prv_insumo_id', 'prv_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_agrupacion', 'pde_oc_agrupacion.id', 'pde_oc_agrupacion_item.pde_oc_agrupacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_oc_agrupacion_item.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_financiero', 'prv_descuento_financiero.id', 'pde_oc_agrupacion_item.prv_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_comercial', 'prv_descuento_comercial.id', 'pde_oc_agrupacion_item.prv_descuento_comercial_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.prv_insumo_id', 'prv_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido', 'pde_pedido.id', 'pde_oc.pde_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_cotizacion', 'pde_cotizacion.id', 'pde_oc.pde_cotizacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_oc.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_oc.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_oc.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado', 'pde_oc_tipo_estado.id', 'pde_oc.pde_oc_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_recepcion', 'pde_oc_tipo_estado_recepcion.id', 'pde_oc.pde_oc_tipo_estado_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_facturacion', 'pde_oc_tipo_estado_facturacion.id', 'pde_oc.pde_oc_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_origen', 'pde_oc_tipo_origen.id', 'pde_oc.pde_oc_tipo_origen_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prv_insumo');
		$criterio->setCriterios();		
}
?>

