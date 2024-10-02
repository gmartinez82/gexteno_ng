<?php
include_once '_autoload.php';

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(FndCaja::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('fnd_caja.id', Gral::getVars(1, 'buscador_fnd_caja_id'), Gral::getVars(1, 'buscador_fnd_caja_id_comparador'));
	$criterio->add('fnd_caja.descripcion', Gral::getVars(1, 'buscador_fnd_caja_descripcion'), Gral::getVars(1, 'buscador_fnd_caja_descripcion_comparador'));
	$criterio->add('fnd_caja.fnd_cajero_id', Gral::getVars(1, 'buscador_fnd_caja_fnd_cajero_id'), Gral::getVars(1, 'buscador_fnd_caja_fnd_cajero_id_comparador'));
	$criterio->add('fnd_caja.fnd_caja_tipo_estado_id', Gral::getVars(1, 'buscador_fnd_caja_fnd_caja_tipo_estado_id'), Gral::getVars(1, 'buscador_fnd_caja_fnd_caja_tipo_estado_id_comparador'));
	$criterio->add('fnd_caja.fecha_apertura', Gral::getFechaToDB(Gral::getVars(1, 'buscador_fnd_caja_fecha_apertura')), Gral::getVars(1, 'buscador_fnd_caja_fecha_apertura_comparador'));
	$criterio->add('fnd_caja.fecha_cierre', Gral::getFechaToDB(Gral::getVars(1, 'buscador_fnd_caja_fecha_cierre')), Gral::getVars(1, 'buscador_fnd_caja_fecha_cierre_comparador'));
	$criterio->add('fnd_caja.fecha_rendicion', Gral::getFechaToDB(Gral::getVars(1, 'buscador_fnd_caja_fecha_rendicion')), Gral::getVars(1, 'buscador_fnd_caja_fecha_rendicion_comparador'));
	$criterio->add('fnd_caja.codigo', Gral::getVars(1, 'buscador_fnd_caja_codigo'), Gral::getVars(1, 'buscador_fnd_caja_codigo_comparador'));
	$criterio->add('fnd_caja.observacion', Gral::getVars(1, 'buscador_fnd_caja_observacion'), Gral::getVars(1, 'buscador_fnd_caja_observacion_comparador'));
	$criterio->add('fnd_caja.estado', Gral::getVars(1, 'buscador_fnd_caja_estado'), Gral::getVars(1, 'buscador_fnd_caja_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_recibo', 'vta_recibo.fnd_caja_id', 'fnd_caja.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_recibo.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_recibo', 'vta_tipo_recibo.id', 'vta_recibo.vta_tipo_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_recibo', 'vta_tipo_origen_recibo.id', 'vta_recibo.vta_tipo_origen_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'vta_recibo.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'vta_recibo.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'vta_recibo.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.id', 'vta_recibo.vta_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_recibo_tipo_estado', 'vta_recibo_tipo_estado.id', 'vta_recibo.vta_recibo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'vta_recibo.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_recibo.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'vta_recibo.vta_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'vta_recibo.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo', 'pde_recibo.fnd_caja_id', 'fnd_caja.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_recibo.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_recibo', 'pde_tipo_recibo.id', 'pde_recibo.pde_tipo_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_recibo', 'pde_tipo_origen_recibo.id', 'pde_recibo.pde_tipo_origen_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_recibo.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_tipo_estado', 'pde_recibo_tipo_estado.id', 'pde_recibo.pde_recibo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago', 'pde_orden_pago.id', 'pde_recibo.pde_orden_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_tipo_estado', 'pde_orden_pago_tipo_estado.id', 'pde_orden_pago.pde_orden_pago_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_estado', 'fnd_caja_estado.fnd_caja_id', 'fnd_caja.id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_tipo_estado', 'fnd_caja_tipo_estado.id', 'fnd_caja_estado.fnd_caja_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_ingreso', 'fnd_caja_ingreso.fnd_caja_id', 'fnd_caja.id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_tipo_ingreso', 'fnd_caja_tipo_ingreso.id', 'fnd_caja_ingreso.fnd_caja_tipo_ingreso_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'fnd_caja_ingreso.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_egreso', 'fnd_caja_egreso.fnd_caja_id', 'fnd_caja.id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_tipo_egreso', 'fnd_caja_tipo_egreso.id', 'fnd_caja_egreso.fnd_caja_tipo_egreso_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('fnd_caja');
		$criterio->setCriterios();		
}
?>

