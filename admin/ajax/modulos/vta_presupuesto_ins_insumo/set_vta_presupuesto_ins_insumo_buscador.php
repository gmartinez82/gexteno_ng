<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaPresupuestoInsInsumo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_presupuesto_ins_insumo.id', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_id'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_id_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.descripcion', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_descripcion'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_descripcion_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.vta_presupuesto_id', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_vta_presupuesto_id'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_vta_presupuesto_id_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.ins_insumo_id', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_ins_insumo_id'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_ins_insumo_id_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.gral_tipo_iva_id', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_gral_tipo_iva_id'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_gral_tipo_iva_id_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.ins_lista_precio_id', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_ins_lista_precio_id'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_ins_lista_precio_id_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.importe_unitario', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_importe_unitario'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_importe_unitario_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.cantidad', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_cantidad'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_cantidad_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.descuento', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_descuento'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_descuento_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.conflicto', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_conflicto'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_conflicto_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.ins_insumo_costo_id', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_ins_insumo_costo_id'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_ins_insumo_costo_id_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.importe_costo', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_importe_costo'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_importe_costo_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.vta_politica_descuento_id', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_vta_politica_descuento_id'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_vta_politica_descuento_id_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.vta_politica_descuento_rango_id', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_vta_politica_descuento_rango_id'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_vta_politica_descuento_rango_id_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.porcentaje_politica_descuento', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_porcentaje_politica_descuento'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_porcentaje_politica_descuento_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.importe_politica_descuento', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_importe_politica_descuento'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_importe_politica_descuento_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.porcentaje_comision', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_porcentaje_comision'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_porcentaje_comision_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.importe_comision', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_importe_comision'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_importe_comision_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.ins_insumo_bulto_id', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_ins_insumo_bulto_id'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_ins_insumo_bulto_id_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.cantidad_bulto', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_cantidad_bulto'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_cantidad_bulto_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.importe_descuento_bulto', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_importe_descuento_bulto'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_importe_descuento_bulto_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.porcentaje_descuento_bulto', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_porcentaje_descuento_bulto'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_porcentaje_descuento_bulto_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.codigo', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_codigo'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_codigo_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.observacion', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_observacion'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_observacion_comparador'));
	$criterio->add('vta_presupuesto_ins_insumo.estado', Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_estado'), Gral::getVars(1, 'buscador_vta_presupuesto_ins_insumo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_presupuesto_conflicto', 'vta_presupuesto_conflicto.vta_presupuesto_ins_insumo_id', 'vta_presupuesto_ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'vta_presupuesto_conflicto.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_cancelacion', 'vta_presupuesto_cancelacion.vta_presupuesto_ins_insumo_id', 'vta_presupuesto_ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.vta_presupuesto_ins_insumo_id', 'vta_presupuesto_ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_orden_venta.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_orden_venta.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_orden_venta.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'vta_orden_venta.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado', 'vta_orden_venta_tipo_estado.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_facturacion', 'vta_orden_venta_tipo_estado_facturacion.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_remision', 'vta_orden_venta_tipo_estado_remision.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_remision_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.id', 'vta_orden_venta.ins_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento', 'vta_politica_descuento.id', 'vta_orden_venta.vta_politica_descuento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento_rango', 'vta_politica_descuento_rango.id', 'vta_orden_venta.vta_politica_descuento_rango_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_orden_venta.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_bulto', 'ins_insumo_bulto.id', 'vta_orden_venta.ins_insumo_bulto_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_presupuesto_ins_insumo');
		$criterio->setCriterios();		
}
?>

