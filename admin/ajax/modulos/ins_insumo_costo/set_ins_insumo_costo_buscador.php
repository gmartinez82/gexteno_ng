<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsInsumoCosto::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_insumo_costo.id', Gral::getVars(1, 'buscador_ins_insumo_costo_id'), Gral::getVars(1, 'buscador_ins_insumo_costo_id_comparador'));
	$criterio->add('ins_insumo_costo.ins_insumo_id', Gral::getVars(1, 'buscador_ins_insumo_costo_ins_insumo_id'), Gral::getVars(1, 'buscador_ins_insumo_costo_ins_insumo_id_comparador'));
	$criterio->add('ins_insumo_costo.prv_proveedor_id', Gral::getVars(1, 'buscador_ins_insumo_costo_prv_proveedor_id'), Gral::getVars(1, 'buscador_ins_insumo_costo_prv_proveedor_id_comparador'));
	$criterio->add('ins_insumo_costo.descripcion', Gral::getVars(1, 'buscador_ins_insumo_costo_descripcion'), Gral::getVars(1, 'buscador_ins_insumo_costo_descripcion_comparador'));
	$criterio->add('ins_insumo_costo.codigo', Gral::getVars(1, 'buscador_ins_insumo_costo_codigo'), Gral::getVars(1, 'buscador_ins_insumo_costo_codigo_comparador'));
	$criterio->add('ins_insumo_costo.fecha', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_ins_insumo_costo_fecha')), Gral::getVars(1, 'buscador_ins_insumo_costo_fecha_comparador'));
	$criterio->add('ins_insumo_costo.prv_importacion_id', Gral::getVars(1, 'buscador_ins_insumo_costo_prv_importacion_id'), Gral::getVars(1, 'buscador_ins_insumo_costo_prv_importacion_id_comparador'));
	$criterio->add('ins_insumo_costo.ins_stock_transformacion_id', Gral::getVars(1, 'buscador_ins_insumo_costo_ins_stock_transformacion_id'), Gral::getVars(1, 'buscador_ins_insumo_costo_ins_stock_transformacion_id_comparador'));
	$criterio->add('ins_insumo_costo.observacion', Gral::getVars(1, 'buscador_ins_insumo_costo_observacion'), Gral::getVars(1, 'buscador_ins_insumo_costo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.ins_insumo_costo_id', 'ins_insumo_costo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_presupuesto_ins_insumo.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_presupuesto_ins_insumo.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_presupuesto_ins_insumo.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_lista_precio', 'ins_lista_precio.id', 'vta_presupuesto_ins_insumo.ins_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento', 'vta_politica_descuento.id', 'vta_presupuesto_ins_insumo.vta_politica_descuento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento_rango', 'vta_politica_descuento_rango.id', 'vta_presupuesto_ins_insumo.vta_politica_descuento_rango_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_bulto', 'ins_insumo_bulto.id', 'vta_presupuesto_ins_insumo.ins_insumo_bulto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.ins_insumo_costo_id', 'ins_insumo_costo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'vta_orden_venta.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado', 'vta_orden_venta_tipo_estado.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_facturacion', 'vta_orden_venta_tipo_estado_facturacion.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_remision', 'vta_orden_venta_tipo_estado_remision.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_remision_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_orden_venta.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_vta_orden_venta', 'vta_factura_vta_orden_venta.ins_insumo_costo_id', 'ins_insumo_costo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'vta_factura_vta_orden_venta.vta_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida', 'ins_unidad_medida.id', 'vta_factura_vta_orden_venta.ins_unidad_medida_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_oc', 'pde_factura_pde_oc.ins_insumo_costo_id', 'ins_insumo_costo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.id', 'pde_factura_pde_oc.pde_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.id', 'pde_factura_pde_oc.pde_oc_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_pde_recepcion', 'pde_factura_pde_recepcion.ins_insumo_costo_id', 'ins_insumo_costo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion', 'pde_recepcion.id', 'pde_factura_pde_recepcion.pde_recepcion_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_insumo_costo');
		$criterio->setCriterios();		
}
?>

