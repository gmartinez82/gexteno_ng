<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaOrdenVentaEstadoCobro::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_orden_venta_estado_cobro.id', Gral::getVars(1, 'buscador_vta_orden_venta_estado_cobro_id'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_cobro_id_comparador'));
	$criterio->add('vta_orden_venta_estado_cobro.descripcion', Gral::getVars(1, 'buscador_vta_orden_venta_estado_cobro_descripcion'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_cobro_descripcion_comparador'));
	$criterio->add('vta_orden_venta_estado_cobro.vta_orden_venta_id', Gral::getVars(1, 'buscador_vta_orden_venta_estado_cobro_vta_orden_venta_id'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_cobro_vta_orden_venta_id_comparador'));
	$criterio->add('vta_orden_venta_estado_cobro.vta_orden_venta_tipo_estado_cobro_id', Gral::getVars(1, 'buscador_vta_orden_venta_estado_cobro_vta_orden_venta_tipo_estado_cobro_id'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_cobro_vta_orden_venta_tipo_estado_cobro_id_comparador'));
	$criterio->add('vta_orden_venta_estado_cobro.inicial', Gral::getVars(1, 'buscador_vta_orden_venta_estado_cobro_inicial'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_cobro_inicial_comparador'));
	$criterio->add('vta_orden_venta_estado_cobro.actual', Gral::getVars(1, 'buscador_vta_orden_venta_estado_cobro_actual'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_cobro_actual_comparador'));
	$criterio->add('vta_orden_venta_estado_cobro.codigo', Gral::getVars(1, 'buscador_vta_orden_venta_estado_cobro_codigo'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_cobro_codigo_comparador'));
	$criterio->add('vta_orden_venta_estado_cobro.observacion', Gral::getVars(1, 'buscador_vta_orden_venta_estado_cobro_observacion'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_cobro_observacion_comparador'));
	$criterio->add('vta_orden_venta_estado_cobro.estado', Gral::getVars(1, 'buscador_vta_orden_venta_estado_cobro_estado'), Gral::getVars(1, 'buscador_vta_orden_venta_estado_cobro_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_orden_venta_estado_cobro');
		$criterio->setCriterios();		
}
?>

