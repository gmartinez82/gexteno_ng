<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsInsumoBulto::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_insumo_bulto.id', Gral::getVars(1, 'buscador_ins_insumo_bulto_id'), Gral::getVars(1, 'buscador_ins_insumo_bulto_id_comparador'));
	$criterio->add('ins_insumo_bulto.descripcion', Gral::getVars(1, 'buscador_ins_insumo_bulto_descripcion'), Gral::getVars(1, 'buscador_ins_insumo_bulto_descripcion_comparador'));
	$criterio->add('ins_insumo_bulto.ins_insumo_id', Gral::getVars(1, 'buscador_ins_insumo_bulto_ins_insumo_id'), Gral::getVars(1, 'buscador_ins_insumo_bulto_ins_insumo_id_comparador'));
	$criterio->add('ins_insumo_bulto.cantidad', Gral::getVars(1, 'buscador_ins_insumo_bulto_cantidad'), Gral::getVars(1, 'buscador_ins_insumo_bulto_cantidad_comparador'));
	$criterio->add('ins_insumo_bulto.ins_unidad_medida_id', Gral::getVars(1, 'buscador_ins_insumo_bulto_ins_unidad_medida_id'), Gral::getVars(1, 'buscador_ins_insumo_bulto_ins_unidad_medida_id_comparador'));
	$criterio->add('ins_insumo_bulto.codigo', Gral::getVars(1, 'buscador_ins_insumo_bulto_codigo'), Gral::getVars(1, 'buscador_ins_insumo_bulto_codigo_comparador'));
	$criterio->add('ins_insumo_bulto.observacion', Gral::getVars(1, 'buscador_ins_insumo_bulto_observacion'), Gral::getVars(1, 'buscador_ins_insumo_bulto_observacion_comparador'));
	$criterio->add('ins_insumo_bulto.orden', Gral::getVars(1, 'buscador_ins_insumo_bulto_orden'), Gral::getVars(1, 'buscador_ins_insumo_bulto_orden_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_insumo_bulto_ins_tipo_lista_precio', 'ins_insumo_bulto_ins_tipo_lista_precio.ins_insumo_bulto_id', 'ins_insumo_bulto.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'ins_insumo_bulto_ins_tipo_lista_precio.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.ins_insumo_bulto_id', 'ins_insumo_bulto.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_presupuesto_ins_insumo.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_presupuesto_ins_insumo.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_presupuesto_ins_insumo.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_lista_precio', 'ins_lista_precio.id', 'vta_presupuesto_ins_insumo.ins_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.id', 'vta_presupuesto_ins_insumo.ins_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento', 'vta_politica_descuento.id', 'vta_presupuesto_ins_insumo.vta_politica_descuento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento_rango', 'vta_politica_descuento_rango.id', 'vta_presupuesto_ins_insumo.vta_politica_descuento_rango_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.ins_insumo_bulto_id', 'ins_insumo_bulto.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado', 'vta_orden_venta_tipo_estado.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_facturacion', 'vta_orden_venta_tipo_estado_facturacion.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_remision', 'vta_orden_venta_tipo_estado_remision.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_remision_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_orden_venta.gral_sucursal_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_insumo_bulto');
		$criterio->setCriterios();		
}
?>

