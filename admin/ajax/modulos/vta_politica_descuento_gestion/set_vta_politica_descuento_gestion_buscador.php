<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaPoliticaDescuento::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_politica_descuento.id', Gral::getVars(1, 'buscador_vta_politica_descuento_id'), Gral::getVars(1, 'buscador_vta_politica_descuento_id_comparador'));
	$criterio->add('vta_politica_descuento.descripcion', Gral::getVars(1, 'buscador_vta_politica_descuento_descripcion'), Gral::getVars(1, 'buscador_vta_politica_descuento_descripcion_comparador'));
	$criterio->add('vta_politica_descuento.codigo', Gral::getVars(1, 'buscador_vta_politica_descuento_codigo'), Gral::getVars(1, 'buscador_vta_politica_descuento_codigo_comparador'));
	$criterio->add('vta_politica_descuento.observacion', Gral::getVars(1, 'buscador_vta_politica_descuento_observacion'), Gral::getVars(1, 'buscador_vta_politica_descuento_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.vta_politica_descuento_id', 'vta_politica_descuento.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_presupuesto_ins_insumo.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_presupuesto_ins_insumo.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_presupuesto_ins_insumo.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_lista_precio', 'ins_lista_precio.id', 'vta_presupuesto_ins_insumo.ins_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.id', 'vta_presupuesto_ins_insumo.ins_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento_rango', 'vta_politica_descuento_rango.id', 'vta_presupuesto_ins_insumo.vta_politica_descuento_rango_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.vta_politica_descuento_id', 'vta_politica_descuento.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'vta_orden_venta.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado', 'vta_orden_venta_tipo_estado.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_facturacion', 'vta_orden_venta_tipo_estado_facturacion.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_remision', 'vta_orden_venta_tipo_estado_remision.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_remision_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento_ins_tipo_lista_precio', 'vta_politica_descuento_ins_tipo_lista_precio.vta_politica_descuento_id', 'vta_politica_descuento.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento_ins_categoria', 'vta_politica_descuento_ins_categoria.vta_politica_descuento_id', 'vta_politica_descuento.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_categoria', 'ins_categoria.id', 'vta_politica_descuento_ins_categoria.ins_categoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento_ins_insumo', 'vta_politica_descuento_ins_insumo.vta_politica_descuento_id', 'vta_politica_descuento.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_politica_descuento');
		$criterio->setCriterios();		
}
?>

