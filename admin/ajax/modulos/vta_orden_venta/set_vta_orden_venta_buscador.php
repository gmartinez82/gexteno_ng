<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaOrdenVenta::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_orden_venta.id', Gral::getVars(1, 'buscador_vta_orden_venta_id'), Gral::getVars(1, 'buscador_vta_orden_venta_id_comparador'));
	$criterio->add('vta_orden_venta.descripcion', Gral::getVars(1, 'buscador_vta_orden_venta_descripcion'), Gral::getVars(1, 'buscador_vta_orden_venta_descripcion_comparador'));
	$criterio->add('vta_orden_venta.vta_presupuesto_id', Gral::getVars(1, 'buscador_vta_orden_venta_vta_presupuesto_id'), Gral::getVars(1, 'buscador_vta_orden_venta_vta_presupuesto_id_comparador'));
	$criterio->add('vta_orden_venta.vta_presupuesto_ins_insumo_id', Gral::getVars(1, 'buscador_vta_orden_venta_vta_presupuesto_ins_insumo_id'), Gral::getVars(1, 'buscador_vta_orden_venta_vta_presupuesto_ins_insumo_id_comparador'));
	$criterio->add('vta_orden_venta.ins_insumo_id', Gral::getVars(1, 'buscador_vta_orden_venta_ins_insumo_id'), Gral::getVars(1, 'buscador_vta_orden_venta_ins_insumo_id_comparador'));
	$criterio->add('vta_orden_venta.gral_tipo_iva_id', Gral::getVars(1, 'buscador_vta_orden_venta_gral_tipo_iva_id'), Gral::getVars(1, 'buscador_vta_orden_venta_gral_tipo_iva_id_comparador'));
	$criterio->add('vta_orden_venta.ins_tipo_lista_precio_id', Gral::getVars(1, 'buscador_vta_orden_venta_ins_tipo_lista_precio_id'), Gral::getVars(1, 'buscador_vta_orden_venta_ins_tipo_lista_precio_id_comparador'));
	$criterio->add('vta_orden_venta.vta_orden_venta_tipo_estado_id', Gral::getVars(1, 'buscador_vta_orden_venta_vta_orden_venta_tipo_estado_id'), Gral::getVars(1, 'buscador_vta_orden_venta_vta_orden_venta_tipo_estado_id_comparador'));
	$criterio->add('vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id', Gral::getVars(1, 'buscador_vta_orden_venta_vta_orden_venta_tipo_estado_facturacion_id'), Gral::getVars(1, 'buscador_vta_orden_venta_vta_orden_venta_tipo_estado_facturacion_id_comparador'));
	$criterio->add('vta_orden_venta.vta_orden_venta_tipo_estado_remision_id', Gral::getVars(1, 'buscador_vta_orden_venta_vta_orden_venta_tipo_estado_remision_id'), Gral::getVars(1, 'buscador_vta_orden_venta_vta_orden_venta_tipo_estado_remision_id_comparador'));
	$criterio->add('vta_orden_venta.importe_unitario', Gral::getVars(1, 'buscador_vta_orden_venta_importe_unitario'), Gral::getVars(1, 'buscador_vta_orden_venta_importe_unitario_comparador'));
	$criterio->add('vta_orden_venta.cantidad', Gral::getVars(1, 'buscador_vta_orden_venta_cantidad'), Gral::getVars(1, 'buscador_vta_orden_venta_cantidad_comparador'));
	$criterio->add('vta_orden_venta.descuento', Gral::getVars(1, 'buscador_vta_orden_venta_descuento'), Gral::getVars(1, 'buscador_vta_orden_venta_descuento_comparador'));
	$criterio->add('vta_orden_venta.ins_insumo_costo_id', Gral::getVars(1, 'buscador_vta_orden_venta_ins_insumo_costo_id'), Gral::getVars(1, 'buscador_vta_orden_venta_ins_insumo_costo_id_comparador'));
	$criterio->add('vta_orden_venta.importe_costo', Gral::getVars(1, 'buscador_vta_orden_venta_importe_costo'), Gral::getVars(1, 'buscador_vta_orden_venta_importe_costo_comparador'));
	$criterio->add('vta_orden_venta.vta_politica_descuento_id', Gral::getVars(1, 'buscador_vta_orden_venta_vta_politica_descuento_id'), Gral::getVars(1, 'buscador_vta_orden_venta_vta_politica_descuento_id_comparador'));
	$criterio->add('vta_orden_venta.vta_politica_descuento_rango_id', Gral::getVars(1, 'buscador_vta_orden_venta_vta_politica_descuento_rango_id'), Gral::getVars(1, 'buscador_vta_orden_venta_vta_politica_descuento_rango_id_comparador'));
	$criterio->add('vta_orden_venta.porcentaje_politica_descuento', Gral::getVars(1, 'buscador_vta_orden_venta_porcentaje_politica_descuento'), Gral::getVars(1, 'buscador_vta_orden_venta_porcentaje_politica_descuento_comparador'));
	$criterio->add('vta_orden_venta.importe_politica_descuento', Gral::getVars(1, 'buscador_vta_orden_venta_importe_politica_descuento'), Gral::getVars(1, 'buscador_vta_orden_venta_importe_politica_descuento_comparador'));
	$criterio->add('vta_orden_venta.gral_sucursal_id', Gral::getVars(1, 'buscador_vta_orden_venta_gral_sucursal_id'), Gral::getVars(1, 'buscador_vta_orden_venta_gral_sucursal_id_comparador'));
	$criterio->add('vta_orden_venta.incluye_logistica', Gral::getVars(1, 'buscador_vta_orden_venta_incluye_logistica'), Gral::getVars(1, 'buscador_vta_orden_venta_incluye_logistica_comparador'));
	$criterio->add('vta_orden_venta.porcentaje_comision', Gral::getVars(1, 'buscador_vta_orden_venta_porcentaje_comision'), Gral::getVars(1, 'buscador_vta_orden_venta_porcentaje_comision_comparador'));
	$criterio->add('vta_orden_venta.importe_comision', Gral::getVars(1, 'buscador_vta_orden_venta_importe_comision'), Gral::getVars(1, 'buscador_vta_orden_venta_importe_comision_comparador'));
	$criterio->add('vta_orden_venta.porcentaje_logistica', Gral::getVars(1, 'buscador_vta_orden_venta_porcentaje_logistica'), Gral::getVars(1, 'buscador_vta_orden_venta_porcentaje_logistica_comparador'));
	$criterio->add('vta_orden_venta.importe_logistica', Gral::getVars(1, 'buscador_vta_orden_venta_importe_logistica'), Gral::getVars(1, 'buscador_vta_orden_venta_importe_logistica_comparador'));
	$criterio->add('vta_orden_venta.ins_insumo_bulto_id', Gral::getVars(1, 'buscador_vta_orden_venta_ins_insumo_bulto_id'), Gral::getVars(1, 'buscador_vta_orden_venta_ins_insumo_bulto_id_comparador'));
	$criterio->add('vta_orden_venta.cantidad_bulto', Gral::getVars(1, 'buscador_vta_orden_venta_cantidad_bulto'), Gral::getVars(1, 'buscador_vta_orden_venta_cantidad_bulto_comparador'));
	$criterio->add('vta_orden_venta.importe_descuento', Gral::getVars(1, 'buscador_vta_orden_venta_importe_descuento'), Gral::getVars(1, 'buscador_vta_orden_venta_importe_descuento_comparador'));
	$criterio->add('vta_orden_venta.importe_recargo', Gral::getVars(1, 'buscador_vta_orden_venta_importe_recargo'), Gral::getVars(1, 'buscador_vta_orden_venta_importe_recargo_comparador'));
	$criterio->add('vta_orden_venta.importe', Gral::getVars(1, 'buscador_vta_orden_venta_importe'), Gral::getVars(1, 'buscador_vta_orden_venta_importe_comparador'));
	$criterio->add('vta_orden_venta.codigo', Gral::getVars(1, 'buscador_vta_orden_venta_codigo'), Gral::getVars(1, 'buscador_vta_orden_venta_codigo_comparador'));
	$criterio->add('vta_orden_venta.observacion', Gral::getVars(1, 'buscador_vta_orden_venta_observacion'), Gral::getVars(1, 'buscador_vta_orden_venta_observacion_comparador'));
	$criterio->add('vta_orden_venta.estado', Gral::getVars(1, 'buscador_vta_orden_venta_estado'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_orden_venta_estado', 'vta_orden_venta_estado.vta_orden_venta_id', 'vta_orden_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado', 'vta_orden_venta_tipo_estado.id', 'vta_orden_venta_estado.vta_orden_venta_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_estado_facturacion', 'vta_orden_venta_estado_facturacion.vta_orden_venta_id', 'vta_orden_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_facturacion', 'vta_orden_venta_tipo_estado_facturacion.id', 'vta_orden_venta_estado_facturacion.vta_orden_venta_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_estado_remision', 'vta_orden_venta_estado_remision.vta_orden_venta_id', 'vta_orden_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_remision', 'vta_orden_venta_tipo_estado_remision.id', 'vta_orden_venta_estado_remision.vta_orden_venta_tipo_estado_remision_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_estado_cobro', 'vta_orden_venta_estado_cobro.vta_orden_venta_id', 'vta_orden_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_cobro', 'vta_orden_venta_tipo_estado_cobro.id', 'vta_orden_venta_estado_cobro.vta_orden_venta_tipo_estado_cobro_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_vta_recibo', 'vta_orden_venta_vta_recibo.vta_orden_venta_id', 'vta_orden_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.id', 'vta_orden_venta_vta_recibo.vta_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_vta_orden_venta', 'vta_remito_vta_orden_venta.vta_orden_venta_id', 'vta_orden_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito', 'vta_remito.id', 'vta_remito_vta_orden_venta.vta_remito_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_remito_vta_orden_venta.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_vta_orden_venta', 'vta_factura_vta_orden_venta.vta_orden_venta_id', 'vta_orden_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.id', 'vta_factura_vta_orden_venta.vta_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida', 'ins_unidad_medida.id', 'vta_factura_vta_orden_venta.ins_unidad_medida_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_factura_vta_orden_venta.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.id', 'vta_factura_vta_orden_venta.ins_insumo_costo_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_orden_venta');
		$criterio->setCriterios();		
}
?>

