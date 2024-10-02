<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsStockMovimiento::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_stock_movimiento.id', Gral::getVars(1, 'buscador_ins_stock_movimiento_id'), Gral::getVars(1, 'buscador_ins_stock_movimiento_id_comparador'));
	$criterio->add('ins_stock_movimiento.descripcion', Gral::getVars(1, 'buscador_ins_stock_movimiento_descripcion'), Gral::getVars(1, 'buscador_ins_stock_movimiento_descripcion_comparador'));
	$criterio->add('ins_stock_movimiento.ins_stock_tipo_movimiento_id', Gral::getVars(1, 'buscador_ins_stock_movimiento_ins_stock_tipo_movimiento_id'), Gral::getVars(1, 'buscador_ins_stock_movimiento_ins_stock_tipo_movimiento_id_comparador'));
	$criterio->add('ins_stock_movimiento.ins_insumo_id', Gral::getVars(1, 'buscador_ins_stock_movimiento_ins_insumo_id'), Gral::getVars(1, 'buscador_ins_stock_movimiento_ins_insumo_id_comparador'));
	$criterio->add('ins_stock_movimiento.pdi_pedido_id', Gral::getVars(1, 'buscador_ins_stock_movimiento_pdi_pedido_id'), Gral::getVars(1, 'buscador_ins_stock_movimiento_pdi_pedido_id_comparador'));
	$criterio->add('ins_stock_movimiento.pan_panol_id', Gral::getVars(1, 'buscador_ins_stock_movimiento_pan_panol_id'), Gral::getVars(1, 'buscador_ins_stock_movimiento_pan_panol_id_comparador'));
	$criterio->add('ins_stock_movimiento.codigo', Gral::getVars(1, 'buscador_ins_stock_movimiento_codigo'), Gral::getVars(1, 'buscador_ins_stock_movimiento_codigo_comparador'));
	$criterio->add('ins_stock_movimiento.cantidad', Gral::getVars(1, 'buscador_ins_stock_movimiento_cantidad'), Gral::getVars(1, 'buscador_ins_stock_movimiento_cantidad_comparador'));
	$criterio->add('ins_stock_movimiento.cantidad_real', Gral::getVars(1, 'buscador_ins_stock_movimiento_cantidad_real'), Gral::getVars(1, 'buscador_ins_stock_movimiento_cantidad_real_comparador'));
	$criterio->add('ins_stock_movimiento.cantidad_comprometida', Gral::getVars(1, 'buscador_ins_stock_movimiento_cantidad_comprometida'), Gral::getVars(1, 'buscador_ins_stock_movimiento_cantidad_comprometida_comparador'));
	$criterio->add('ins_stock_movimiento.cantidad_pasivo', Gral::getVars(1, 'buscador_ins_stock_movimiento_cantidad_pasivo'), Gral::getVars(1, 'buscador_ins_stock_movimiento_cantidad_pasivo_comparador'));
	$criterio->add('ins_stock_movimiento.fechahora', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_ins_stock_movimiento_fechahora')), Gral::getVars(1, 'buscador_ins_stock_movimiento_fechahora_comparador'));
	$criterio->add('ins_stock_movimiento.vta_remito_id', Gral::getVars(1, 'buscador_ins_stock_movimiento_vta_remito_id'), Gral::getVars(1, 'buscador_ins_stock_movimiento_vta_remito_id_comparador'));
	$criterio->add('ins_stock_movimiento.pde_recepcion_id', Gral::getVars(1, 'buscador_ins_stock_movimiento_pde_recepcion_id'), Gral::getVars(1, 'buscador_ins_stock_movimiento_pde_recepcion_id_comparador'));
	$criterio->add('ins_stock_movimiento.ins_stock_transformacion_id', Gral::getVars(1, 'buscador_ins_stock_movimiento_ins_stock_transformacion_id'), Gral::getVars(1, 'buscador_ins_stock_movimiento_ins_stock_transformacion_id_comparador'));
	$criterio->add('ins_stock_movimiento.observacion', Gral::getVars(1, 'buscador_ins_stock_movimiento_observacion'), Gral::getVars(1, 'buscador_ins_stock_movimiento_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_stock_movimiento');
		$criterio->setCriterios();		
}
?>

