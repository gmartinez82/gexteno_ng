<?php
include_once '_autoload.php';

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaRemitoAjuste::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_remito_ajuste.id', Gral::getVars(1, 'buscador_vta_remito_ajuste_id'), Gral::getVars(1, 'buscador_vta_remito_ajuste_id_comparador'));
	$criterio->add('vta_remito_ajuste.descripcion', Gral::getVars(1, 'buscador_vta_remito_ajuste_descripcion'), Gral::getVars(1, 'buscador_vta_remito_ajuste_descripcion_comparador'));
	$criterio->add('vta_remito_ajuste.cli_cliente_id', Gral::getVars(1, 'buscador_vta_remito_ajuste_cli_cliente_id'), Gral::getVars(1, 'buscador_vta_remito_ajuste_cli_cliente_id_comparador'));
	$criterio->add('vta_remito_ajuste.vta_remito_ajuste_tipo_estado_id', Gral::getVars(1, 'buscador_vta_remito_ajuste_vta_remito_ajuste_tipo_estado_id'), Gral::getVars(1, 'buscador_vta_remito_ajuste_vta_remito_ajuste_tipo_estado_id_comparador'));
	$criterio->add('vta_remito_ajuste.fecha', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_vta_remito_ajuste_fecha')), Gral::getVars(1, 'buscador_vta_remito_ajuste_fecha_comparador'));
	$criterio->add('vta_remito_ajuste.codigo', Gral::getVars(1, 'buscador_vta_remito_ajuste_codigo'), Gral::getVars(1, 'buscador_vta_remito_ajuste_codigo_comparador'));
	$criterio->add('vta_remito_ajuste.observacion', Gral::getVars(1, 'buscador_vta_remito_ajuste_observacion'), Gral::getVars(1, 'buscador_vta_remito_ajuste_observacion_comparador'));
	$criterio->add('vta_remito_ajuste.estado', Gral::getVars(1, 'buscador_vta_remito_ajuste_estado'), Gral::getVars(1, 'buscador_vta_remito_ajuste_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_remito_ajuste_vta_orden_venta', 'vta_remito_ajuste_vta_orden_venta.vta_remito_ajuste_id', 'vta_remito_ajuste.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.id', 'vta_remito_ajuste_vta_orden_venta.vta_orden_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_remito_ajuste_vta_orden_venta.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_ajuste_estado', 'vta_remito_ajuste_estado.vta_remito_ajuste_id', 'vta_remito_ajuste.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_ajuste_tipo_estado', 'vta_remito_ajuste_tipo_estado.id', 'vta_remito_ajuste_estado.vta_remito_ajuste_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_remito_ajuste');
		$criterio->setCriterios();		
}
?>

