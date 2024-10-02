<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaPoliticaDescuentoRango::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_politica_descuento_rango.id', Gral::getVars(1, 'buscador_vta_politica_descuento_rango_id'), Gral::getVars(1, 'buscador_vta_politica_descuento_rango_id_comparador'));
	$criterio->add('vta_politica_descuento_rango.descripcion', Gral::getVars(1, 'buscador_vta_politica_descuento_rango_descripcion'), Gral::getVars(1, 'buscador_vta_politica_descuento_rango_descripcion_comparador'));
	$criterio->add('vta_politica_descuento_rango.vta_politica_descuento_id', Gral::getVars(1, 'buscador_vta_politica_descuento_rango_vta_politica_descuento_id'), Gral::getVars(1, 'buscador_vta_politica_descuento_rango_vta_politica_descuento_id_comparador'));
	$criterio->add('vta_politica_descuento_rango.cantidad_desde', Gral::getVars(1, 'buscador_vta_politica_descuento_rango_cantidad_desde'), Gral::getVars(1, 'buscador_vta_politica_descuento_rango_cantidad_desde_comparador'));
	$criterio->add('vta_politica_descuento_rango.cantidad_hasta', Gral::getVars(1, 'buscador_vta_politica_descuento_rango_cantidad_hasta'), Gral::getVars(1, 'buscador_vta_politica_descuento_rango_cantidad_hasta_comparador'));
	$criterio->add('vta_politica_descuento_rango.porcentaje_descuento', Gral::getVars(1, 'buscador_vta_politica_descuento_rango_porcentaje_descuento'), Gral::getVars(1, 'buscador_vta_politica_descuento_rango_porcentaje_descuento_comparador'));
	$criterio->add('vta_politica_descuento_rango.porcentaje_negociacion', Gral::getVars(1, 'buscador_vta_politica_descuento_rango_porcentaje_negociacion'), Gral::getVars(1, 'buscador_vta_politica_descuento_rango_porcentaje_negociacion_comparador'));
	$criterio->add('vta_politica_descuento_rango.codigo', Gral::getVars(1, 'buscador_vta_politica_descuento_rango_codigo'), Gral::getVars(1, 'buscador_vta_politica_descuento_rango_codigo_comparador'));
	$criterio->add('vta_politica_descuento_rango.observacion', Gral::getVars(1, 'buscador_vta_politica_descuento_rango_observacion'), Gral::getVars(1, 'buscador_vta_politica_descuento_rango_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.vta_politica_descuento_rango_id', 'vta_politica_descuento_rango.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_presupuesto_ins_insumo.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_presupuesto_ins_insumo.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_presupuesto_ins_insumo.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_lista_precio', 'ins_lista_precio.id', 'vta_presupuesto_ins_insumo.ins_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.id', 'vta_presupuesto_ins_insumo.ins_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento', 'vta_politica_descuento.id', 'vta_presupuesto_ins_insumo.vta_politica_descuento_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_bulto', 'ins_insumo_bulto.id', 'vta_presupuesto_ins_insumo.ins_insumo_bulto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.vta_politica_descuento_rango_id', 'vta_politica_descuento_rango.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'vta_orden_venta.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado', 'vta_orden_venta_tipo_estado.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_facturacion', 'vta_orden_venta_tipo_estado_facturacion.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_remision', 'vta_orden_venta_tipo_estado_remision.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_remision_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_orden_venta.gral_sucursal_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_politica_descuento_rango');
		$criterio->setCriterios();		
}
?>

