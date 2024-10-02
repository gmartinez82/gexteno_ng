<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsStockTransformacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_stock_transformacion.id', Gral::getVars(1, 'buscador_ins_stock_transformacion_id'), Gral::getVars(1, 'buscador_ins_stock_transformacion_id_comparador'));
	$criterio->add('ins_stock_transformacion.descripcion', Gral::getVars(1, 'buscador_ins_stock_transformacion_descripcion'), Gral::getVars(1, 'buscador_ins_stock_transformacion_descripcion_comparador'));
	$criterio->add('ins_stock_transformacion.ins_insumo_id', Gral::getVars(1, 'buscador_ins_stock_transformacion_ins_insumo_id'), Gral::getVars(1, 'buscador_ins_stock_transformacion_ins_insumo_id_comparador'));
	$criterio->add('ins_stock_transformacion.pan_panol_id', Gral::getVars(1, 'buscador_ins_stock_transformacion_pan_panol_id'), Gral::getVars(1, 'buscador_ins_stock_transformacion_pan_panol_id_comparador'));
	$criterio->add('ins_stock_transformacion.codigo', Gral::getVars(1, 'buscador_ins_stock_transformacion_codigo'), Gral::getVars(1, 'buscador_ins_stock_transformacion_codigo_comparador'));
	$criterio->add('ins_stock_transformacion.cantidad', Gral::getVars(1, 'buscador_ins_stock_transformacion_cantidad'), Gral::getVars(1, 'buscador_ins_stock_transformacion_cantidad_comparador'));
	$criterio->add('ins_stock_transformacion.observacion', Gral::getVars(1, 'buscador_ins_stock_transformacion_observacion'), Gral::getVars(1, 'buscador_ins_stock_transformacion_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.ins_stock_transformacion_id', 'ins_stock_transformacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_insumo_costo.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'ins_insumo_costo.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_importacion', 'prv_importacion.id', 'ins_insumo_costo.prv_importacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_transformacion_destino', 'ins_stock_transformacion_destino.ins_stock_transformacion_id', 'ins_stock_transformacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'ins_stock_transformacion_destino.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_movimiento', 'ins_stock_movimiento.ins_stock_transformacion_id', 'ins_stock_transformacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_tipo_movimiento', 'ins_stock_tipo_movimiento.id', 'ins_stock_movimiento.ins_stock_tipo_movimiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_pedido', 'pdi_pedido.id', 'ins_stock_movimiento.pdi_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito', 'vta_remito.id', 'ins_stock_movimiento.vta_remito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion', 'pde_recepcion.id', 'ins_stock_movimiento.pde_recepcion_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_stock_transformacion');
		$criterio->setCriterios();		
}
?>

