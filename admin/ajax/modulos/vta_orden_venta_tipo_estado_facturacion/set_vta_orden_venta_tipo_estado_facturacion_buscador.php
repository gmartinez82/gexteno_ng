<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaOrdenVentaTipoEstadoFacturacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_orden_venta_tipo_estado_facturacion.id', Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_facturacion_id'), Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_facturacion_id_comparador'));
	$criterio->add('vta_orden_venta_tipo_estado_facturacion.descripcion', Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_facturacion_descripcion'), Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_facturacion_descripcion_comparador'));
	$criterio->add('vta_orden_venta_tipo_estado_facturacion.codigo', Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_facturacion_codigo'), Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_facturacion_codigo_comparador'));
	$criterio->add('vta_orden_venta_tipo_estado_facturacion.activo', Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_facturacion_activo'), Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_facturacion_activo_comparador'));
	$criterio->add('vta_orden_venta_tipo_estado_facturacion.terminal', Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_facturacion_terminal'), Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_facturacion_terminal_comparador'));
	$criterio->add('vta_orden_venta_tipo_estado_facturacion.observacion', Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_facturacion_observacion'), Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_facturacion_observacion_comparador'));
	$criterio->add('vta_orden_venta_tipo_estado_facturacion.estado', Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_facturacion_estado'), Gral::getVars(1, 'buscador_vta_orden_venta_tipo_estado_facturacion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id', 'vta_orden_venta_tipo_estado_facturacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_orden_venta.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.id', 'vta_orden_venta.vta_presupuesto_ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_orden_venta.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_orden_venta.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'vta_orden_venta.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado', 'vta_orden_venta_tipo_estado.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_remision', 'vta_orden_venta_tipo_estado_remision.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_remision_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.id', 'vta_orden_venta.ins_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento', 'vta_politica_descuento.id', 'vta_orden_venta.vta_politica_descuento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento_rango', 'vta_politica_descuento_rango.id', 'vta_orden_venta.vta_politica_descuento_rango_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_orden_venta.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_bulto', 'ins_insumo_bulto.id', 'vta_orden_venta.ins_insumo_bulto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_estado_facturacion', 'vta_orden_venta_estado_facturacion.vta_orden_venta_tipo_estado_facturacion_id', 'vta_orden_venta_tipo_estado_facturacion.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_orden_venta_tipo_estado_facturacion');
		$criterio->setCriterios();		
}
?>

