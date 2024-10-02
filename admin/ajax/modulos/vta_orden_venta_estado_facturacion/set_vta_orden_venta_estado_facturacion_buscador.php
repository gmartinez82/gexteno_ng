<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaOrdenVentaEstadoFacturacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_orden_venta_estado_facturacion.id', Gral::getVars(1, 'buscador_vta_orden_venta_estado_facturacion_id'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_facturacion_id_comparador'));
	$criterio->add('vta_orden_venta_estado_facturacion.descripcion', Gral::getVars(1, 'buscador_vta_orden_venta_estado_facturacion_descripcion'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_facturacion_descripcion_comparador'));
	$criterio->add('vta_orden_venta_estado_facturacion.vta_orden_venta_id', Gral::getVars(1, 'buscador_vta_orden_venta_estado_facturacion_vta_orden_venta_id'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_facturacion_vta_orden_venta_id_comparador'));
	$criterio->add('vta_orden_venta_estado_facturacion.vta_orden_venta_tipo_estado_facturacion_id', Gral::getVars(1, 'buscador_vta_orden_venta_estado_facturacion_vta_orden_venta_tipo_estado_facturacion_id'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_facturacion_vta_orden_venta_tipo_estado_facturacion_id_comparador'));
	$criterio->add('vta_orden_venta_estado_facturacion.inicial', Gral::getVars(1, 'buscador_vta_orden_venta_estado_facturacion_inicial'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_facturacion_inicial_comparador'));
	$criterio->add('vta_orden_venta_estado_facturacion.actual', Gral::getVars(1, 'buscador_vta_orden_venta_estado_facturacion_actual'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_facturacion_actual_comparador'));
	$criterio->add('vta_orden_venta_estado_facturacion.codigo', Gral::getVars(1, 'buscador_vta_orden_venta_estado_facturacion_codigo'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_facturacion_codigo_comparador'));
	$criterio->add('vta_orden_venta_estado_facturacion.observacion', Gral::getVars(1, 'buscador_vta_orden_venta_estado_facturacion_observacion'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_facturacion_observacion_comparador'));
	$criterio->add('vta_orden_venta_estado_facturacion.estado', Gral::getVars(1, 'buscador_vta_orden_venta_estado_facturacion_estado'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_facturacion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_orden_venta_estado_facturacion');
		$criterio->setCriterios();		
}
?>

