<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaRemitoVtaOrdenVenta::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_remito_vta_orden_venta.id', Gral::getVars(1, 'buscador_vta_remito_vta_orden_venta_id'), Gral::getVars(1, 'buscador_vta_remito_vta_orden_venta_id_comparador'));
	$criterio->add('vta_remito_vta_orden_venta.descripcion', Gral::getVars(1, 'buscador_vta_remito_vta_orden_venta_descripcion'), Gral::getVars(1, 'buscador_vta_remito_vta_orden_venta_descripcion_comparador'));
	$criterio->add('vta_remito_vta_orden_venta.vta_remito_id', Gral::getVars(1, 'buscador_vta_remito_vta_orden_venta_vta_remito_id'), Gral::getVars(1, 'buscador_vta_remito_vta_orden_venta_vta_remito_id_comparador'));
	$criterio->add('vta_remito_vta_orden_venta.vta_orden_venta_id', Gral::getVars(1, 'buscador_vta_remito_vta_orden_venta_vta_orden_venta_id'), Gral::getVars(1, 'buscador_vta_remito_vta_orden_venta_vta_orden_venta_id_comparador'));
	$criterio->add('vta_remito_vta_orden_venta.ins_insumo_id', Gral::getVars(1, 'buscador_vta_remito_vta_orden_venta_ins_insumo_id'), Gral::getVars(1, 'buscador_vta_remito_vta_orden_venta_ins_insumo_id_comparador'));
	$criterio->add('vta_remito_vta_orden_venta.cantidad', Gral::getVars(1, 'buscador_vta_remito_vta_orden_venta_cantidad'), Gral::getVars(1, 'buscador_vta_remito_vta_orden_venta_cantidad_comparador'));
	$criterio->add('vta_remito_vta_orden_venta.codigo', Gral::getVars(1, 'buscador_vta_remito_vta_orden_venta_codigo'), Gral::getVars(1, 'buscador_vta_remito_vta_orden_venta_codigo_comparador'));
	$criterio->add('vta_remito_vta_orden_venta.observacion', Gral::getVars(1, 'buscador_vta_remito_vta_orden_venta_observacion'), Gral::getVars(1, 'buscador_vta_remito_vta_orden_venta_observacion_comparador'));
	$criterio->add('vta_remito_vta_orden_venta.estado', Gral::getVars(1, 'buscador_vta_remito_vta_orden_venta_estado'), Gral::getVars(1, 'buscador_vta_remito_vta_orden_venta_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_remito_vta_orden_venta');
		$criterio->setCriterios();		
}
?>

