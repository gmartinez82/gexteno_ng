<?php
include_once '_autoload.php';

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaRemito::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_remito.id', Gral::getVars(1, 'buscador_vta_remito_id'), Gral::getVars(1, 'buscador_vta_remito_id_comparador'));
	$criterio->add('vta_remito.descripcion', Gral::getVars(1, 'buscador_vta_remito_descripcion'), Gral::getVars(1, 'buscador_vta_remito_descripcion_comparador'));
	$criterio->add('vta_remito.cli_cliente_id', Gral::getVars(1, 'buscador_vta_remito_cli_cliente_id'), Gral::getVars(1, 'buscador_vta_remito_cli_cliente_id_comparador'));
	$criterio->add('vta_remito.vta_remito_tipo_estado_id', Gral::getVars(1, 'buscador_vta_remito_vta_remito_tipo_estado_id'), Gral::getVars(1, 'buscador_vta_remito_vta_remito_tipo_estado_id_comparador'));
	$criterio->add('vta_remito.fecha', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_vta_remito_fecha')), Gral::getVars(1, 'buscador_vta_remito_fecha_comparador'));
	$criterio->add('vta_remito.codigo', Gral::getVars(1, 'buscador_vta_remito_codigo'), Gral::getVars(1, 'buscador_vta_remito_codigo_comparador'));
	$criterio->add('vta_remito.observacion', Gral::getVars(1, 'buscador_vta_remito_observacion'), Gral::getVars(1, 'buscador_vta_remito_observacion_comparador'));
	$criterio->add('vta_remito.estado', Gral::getVars(1, 'buscador_vta_remito_estado'), Gral::getVars(1, 'buscador_vta_remito_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_remito_vta_orden_venta', 'vta_remito_vta_orden_venta.vta_remito_id', 'vta_remito.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.id', 'vta_remito_vta_orden_venta.vta_orden_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_remito_vta_orden_venta.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_estado', 'vta_remito_estado.vta_remito_id', 'vta_remito.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_tipo_estado', 'vta_remito_tipo_estado.id', 'vta_remito_estado.vta_remito_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_remito');
		$criterio->setCriterios();		
}
?>

