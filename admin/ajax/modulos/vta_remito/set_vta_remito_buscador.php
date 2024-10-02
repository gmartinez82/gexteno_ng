<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

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
	$criterio->add('vta_remito.gral_tipo_documento_id', Gral::getVars(1, 'buscador_vta_remito_gral_tipo_documento_id'), Gral::getVars(1, 'buscador_vta_remito_gral_tipo_documento_id_comparador'));
	$criterio->add('vta_remito.persona_descripcion', Gral::getVars(1, 'buscador_vta_remito_persona_descripcion'), Gral::getVars(1, 'buscador_vta_remito_persona_descripcion_comparador'));
	$criterio->add('vta_remito.persona_documento', Gral::getVars(1, 'buscador_vta_remito_persona_documento'), Gral::getVars(1, 'buscador_vta_remito_persona_documento_comparador'));
	$criterio->add('vta_remito.persona_email', Gral::getVars(1, 'buscador_vta_remito_persona_email'), Gral::getVars(1, 'buscador_vta_remito_persona_email_comparador'));
	$criterio->add('vta_remito.fecha', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_vta_remito_fecha')), Gral::getVars(1, 'buscador_vta_remito_fecha_comparador'));
	$criterio->add('vta_remito.codigo', Gral::getVars(1, 'buscador_vta_remito_codigo'), Gral::getVars(1, 'buscador_vta_remito_codigo_comparador'));
	$criterio->add('vta_remito.vta_presupuesto_id', Gral::getVars(1, 'buscador_vta_remito_vta_presupuesto_id'), Gral::getVars(1, 'buscador_vta_remito_vta_presupuesto_id_comparador'));
	$criterio->add('vta_remito.cli_centro_recepcion_id', Gral::getVars(1, 'buscador_vta_remito_cli_centro_recepcion_id'), Gral::getVars(1, 'buscador_vta_remito_cli_centro_recepcion_id_comparador'));
	$criterio->add('vta_remito.pan_panol_id', Gral::getVars(1, 'buscador_vta_remito_pan_panol_id'), Gral::getVars(1, 'buscador_vta_remito_pan_panol_id_comparador'));
	$criterio->add('vta_remito.gral_sucursal_id', Gral::getVars(1, 'buscador_vta_remito_gral_sucursal_id'), Gral::getVars(1, 'buscador_vta_remito_gral_sucursal_id_comparador'));
	$criterio->add('vta_remito.en_domicilio', Gral::getVars(1, 'buscador_vta_remito_en_domicilio'), Gral::getVars(1, 'buscador_vta_remito_en_domicilio_comparador'));
	$criterio->add('vta_remito.observacion', Gral::getVars(1, 'buscador_vta_remito_observacion'), Gral::getVars(1, 'buscador_vta_remito_observacion_comparador'));
	$criterio->add('vta_remito.estado', Gral::getVars(1, 'buscador_vta_remito_estado'), Gral::getVars(1, 'buscador_vta_remito_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_remito_vta_orden_venta', 'vta_remito_vta_orden_venta.vta_remito_id', 'vta_remito.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.id', 'vta_remito_vta_orden_venta.vta_orden_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_remito_vta_orden_venta.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_estado', 'vta_remito_estado.vta_remito_id', 'vta_remito.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_tipo_estado', 'vta_remito_tipo_estado.id', 'vta_remito_estado.vta_remito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa_transportadora', 'gral_empresa_transportadora.id', 'vta_remito_estado.gral_empresa_transportadora_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_enviado', 'vta_remito_enviado.vta_remito_id', 'vta_remito.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_movimiento', 'ins_stock_movimiento.vta_remito_id', 'vta_remito.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_tipo_movimiento', 'ins_stock_tipo_movimiento.id', 'ins_stock_movimiento.ins_stock_tipo_movimiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_pedido', 'pdi_pedido.id', 'ins_stock_movimiento.pdi_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'ins_stock_movimiento.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion', 'pde_recepcion.id', 'ins_stock_movimiento.pde_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_transformacion', 'ins_stock_transformacion.id', 'ins_stock_movimiento.ins_stock_transformacion_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_remito');
		$criterio->setCriterios();		
}
?>

