<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaOrdenVentaVtaRecibo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_orden_venta_vta_recibo.id', Gral::getVars(1, 'buscador_vta_orden_venta_vta_recibo_id'), Gral::getVars(1, 'buscador_vta_orden_venta_vta_recibo_id_comparador'));
	$criterio->add('vta_orden_venta_vta_recibo.descripcion', Gral::getVars(1, 'buscador_vta_orden_venta_vta_recibo_descripcion'), Gral::getVars(1, 'buscador_vta_orden_venta_vta_recibo_descripcion_comparador'));
	$criterio->add('vta_orden_venta_vta_recibo.vta_orden_venta_id', Gral::getVars(1, 'buscador_vta_orden_venta_vta_recibo_vta_orden_venta_id'), Gral::getVars(1, 'buscador_vta_orden_venta_vta_recibo_vta_orden_venta_id_comparador'));
	$criterio->add('vta_orden_venta_vta_recibo.vta_recibo_id', Gral::getVars(1, 'buscador_vta_orden_venta_vta_recibo_vta_recibo_id'), Gral::getVars(1, 'buscador_vta_orden_venta_vta_recibo_vta_recibo_id_comparador'));
	$criterio->add('vta_orden_venta_vta_recibo.importe_afectado', Gral::getVars(1, 'buscador_vta_orden_venta_vta_recibo_importe_afectado'), Gral::getVars(1, 'buscador_vta_orden_venta_vta_recibo_importe_afectado_comparador'));
	$criterio->add('vta_orden_venta_vta_recibo.codigo', Gral::getVars(1, 'buscador_vta_orden_venta_vta_recibo_codigo'), Gral::getVars(1, 'buscador_vta_orden_venta_vta_recibo_codigo_comparador'));
	$criterio->add('vta_orden_venta_vta_recibo.observacion', Gral::getVars(1, 'buscador_vta_orden_venta_vta_recibo_observacion'), Gral::getVars(1, 'buscador_vta_orden_venta_vta_recibo_observacion_comparador'));
	$criterio->add('vta_orden_venta_vta_recibo.estado', Gral::getVars(1, 'buscador_vta_orden_venta_vta_recibo_estado'), Gral::getVars(1, 'buscador_vta_orden_venta_vta_recibo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_orden_venta_vta_recibo');
		$criterio->setCriterios();		
}
?>

