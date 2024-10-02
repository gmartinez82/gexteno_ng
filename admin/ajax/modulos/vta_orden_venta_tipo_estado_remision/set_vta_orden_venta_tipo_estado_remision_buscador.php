<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaOrdenVentaTipoEstadoRemision::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_orden_venta_tipo_estado_remision.id', Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_remision_id'), Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_remision_id_comparador'));
	$criterio->add('vta_orden_venta_tipo_estado_remision.descripcion', Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_remision_descripcion'), Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_remision_descripcion_comparador'));
	$criterio->add('vta_orden_venta_tipo_estado_remision.codigo', Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_remision_codigo'), Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_remision_codigo_comparador'));
	$criterio->add('vta_orden_venta_tipo_estado_remision.activo', Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_remision_activo'), Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_remision_activo_comparador'));
	$criterio->add('vta_orden_venta_tipo_estado_remision.terminal', Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_remision_terminal'), Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_remision_terminal_comparador'));
	$criterio->add('vta_orden_venta_tipo_estado_remision.observacion', Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_remision_observacion'), Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_remision_observacion_comparador'));
	$criterio->add('vta_orden_venta_tipo_estado_remision.estado', Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_remision_estado'), Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_remision_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.vta_orden_venta_tipo_estado_remision_id', 'vta_orden_venta_tipo_estado_remision.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_orden_venta.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.id', 'vta_orden_venta.vta_presupuesto_ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_orden_venta.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_orden_venta.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'vta_orden_venta.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado', 'vta_orden_venta_tipo_estado.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_facturacion', 'vta_orden_venta_tipo_estado_facturacion.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.id', 'vta_orden_venta.ins_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento', 'vta_politica_descuento.id', 'vta_orden_venta.vta_politica_descuento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento_rango', 'vta_politica_descuento_rango.id', 'vta_orden_venta.vta_politica_descuento_rango_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_orden_venta.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_bulto', 'ins_insumo_bulto.id', 'vta_orden_venta.ins_insumo_bulto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_estado_remision', 'vta_orden_venta_estado_remision.vta_orden_venta_tipo_estado_remision_id', 'vta_orden_venta_tipo_estado_remision.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_orden_venta_tipo_estado_remision');
		$criterio->setCriterios();		
}
?>

