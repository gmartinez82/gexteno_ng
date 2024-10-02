<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaOrdenVentaEstadoRemision::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_orden_venta_estado_remision.id', Gral::getVars(1, 'buscador_vta_orden_venta_estado_remision_id'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_remision_id_comparador'));
	$criterio->add('vta_orden_venta_estado_remision.descripcion', Gral::getVars(1, 'buscador_vta_orden_venta_estado_remision_descripcion'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_remision_descripcion_comparador'));
	$criterio->add('vta_orden_venta_estado_remision.vta_orden_venta_id', Gral::getVars(1, 'buscador_vta_orden_venta_estado_remision_vta_orden_venta_id'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_remision_vta_orden_venta_id_comparador'));
	$criterio->add('vta_orden_venta_estado_remision.vta_orden_venta_tipo_estado_remision_id', Gral::getVars(1, 'buscador_vta_orden_venta_estado_remision_vta_orden_venta_tipo_estado_remision_id'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_remision_vta_orden_venta_tipo_estado_remision_id_comparador'));
	$criterio->add('vta_orden_venta_estado_remision.inicial', Gral::getVars(1, 'buscador_vta_orden_venta_estado_remision_inicial'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_remision_inicial_comparador'));
	$criterio->add('vta_orden_venta_estado_remision.actual', Gral::getVars(1, 'buscador_vta_orden_venta_estado_remision_actual'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_remision_actual_comparador'));
	$criterio->add('vta_orden_venta_estado_remision.codigo', Gral::getVars(1, 'buscador_vta_orden_venta_estado_remision_codigo'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_remision_codigo_comparador'));
	$criterio->add('vta_orden_venta_estado_remision.observacion', Gral::getVars(1, 'buscador_vta_orden_venta_estado_remision_observacion'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_remision_observacion_comparador'));
	$criterio->add('vta_orden_venta_estado_remision.estado', Gral::getVars(1, 'buscador_vta_orden_venta_estado_remision_estado'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_remision_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_orden_venta_estado_remision');
		$criterio->setCriterios();		
}
?>

