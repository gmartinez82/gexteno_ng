<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralFpCuota::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_fp_cuota.id', Gral::getVars(1, 'buscador_gral_fp_cuota_id'), Gral::getVars(1, 'buscador_gral_fp_cuota_id_comparador'));
	$criterio->add('gral_fp_cuota.descripcion', Gral::getVars(1, 'buscador_gral_fp_cuota_descripcion'), Gral::getVars(1, 'buscador_gral_fp_cuota_descripcion_comparador'));
	$criterio->add('gral_fp_cuota.gral_fp_medio_pago_id', Gral::getVars(1, 'buscador_gral_fp_cuota_gral_fp_medio_pago_id'), Gral::getVars(1, 'buscador_gral_fp_cuota_gral_fp_medio_pago_id_comparador'));
	$criterio->add('gral_fp_cuota.cantidad', Gral::getVars(1, 'buscador_gral_fp_cuota_cantidad'), Gral::getVars(1, 'buscador_gral_fp_cuota_cantidad_comparador'));
	$criterio->add('gral_fp_cuota.por_default', Gral::getVars(1, 'buscador_gral_fp_cuota_por_default'), Gral::getVars(1, 'buscador_gral_fp_cuota_por_default_comparador'));
	$criterio->add('gral_fp_cuota.dias_vencimiento', Gral::getVars(1, 'buscador_gral_fp_cuota_dias_vencimiento'), Gral::getVars(1, 'buscador_gral_fp_cuota_dias_vencimiento_comparador'));
	$criterio->add('gral_fp_cuota.recargo', Gral::getVars(1, 'buscador_gral_fp_cuota_recargo'), Gral::getVars(1, 'buscador_gral_fp_cuota_recargo_comparador'));
	$criterio->add('gral_fp_cuota.codigo', Gral::getVars(1, 'buscador_gral_fp_cuota_codigo'), Gral::getVars(1, 'buscador_gral_fp_cuota_codigo_comparador'));
	$criterio->add('gral_fp_cuota.observacion', Gral::getVars(1, 'buscador_gral_fp_cuota_observacion'), Gral::getVars(1, 'buscador_gral_fp_cuota_observacion_comparador'));
	$criterio->add('gral_fp_cuota.estado', Gral::getVars(1, 'buscador_gral_fp_cuota_estado'), Gral::getVars(1, 'buscador_gral_fp_cuota_estado_comparador'));
	
	// criterios agregados por dependencias
	
	$criterio->add('gral_fp_medio_pago.gral_fp_forma_pago_id', Gral::getVars(1, 'buscador_gral_fp_cuota_gral_fp_forma_pago_id'), Gral::getVars(1, 'buscador_gral_fp_cuota_gral_fp_forma_pago_id_comparador'));
	$criterio->addRealJoin('gral_fp_medio_pago', 'gral_fp_medio_pago.id', 'gral_fp_cuota.gral_fp_medio_pago_id', 'LEFT JOIN');
	
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('cli_cliente_gral_fp_cuota', 'cli_cliente_gral_fp_cuota.gral_fp_cuota_id', 'gral_fp_cuota.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'cli_cliente_gral_fp_cuota.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.gral_fp_cuota_id', 'gral_fp_cuota.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_presupuesto.vta_vendedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'vta_presupuesto.vta_comprador_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'vta_presupuesto.vta_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'vta_presupuesto.gral_actividad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'vta_presupuesto.gral_escenario_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_presupuesto.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'vta_presupuesto.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_despacho', 'vta_presupuesto_tipo_despacho.id', 'vta_presupuesto.vta_presupuesto_tipo_despacho_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_estado', 'vta_presupuesto_tipo_estado.id', 'vta_presupuesto.vta_presupuesto_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'vta_presupuesto.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_emision', 'vta_presupuesto_tipo_emision.id', 'vta_presupuesto.vta_presupuesto_tipo_emision_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_venta', 'vta_presupuesto_tipo_venta.id', 'vta_presupuesto.vta_presupuesto_tipo_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_origen', 'vta_presupuesto_tipo_origen.id', 'vta_presupuesto.vta_presupuesto_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa_transportadora', 'gral_empresa_transportadora.id', 'vta_presupuesto.gral_empresa_transportadora_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_descuento_financiero', 'vta_descuento_financiero.id', 'vta_presupuesto.vta_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'vta_presupuesto.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_presupuesto.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_centro_recepcion', 'cli_centro_recepcion.id', 'vta_presupuesto.cli_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.gral_fp_cuota_id', 'gral_fp_cuota.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_tipo_estado', 'vta_factura_tipo_estado.id', 'vta_factura.vta_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_factura', 'vta_tipo_factura.id', 'vta_factura.vta_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_factura', 'vta_tipo_origen_factura.id', 'vta_factura.vta_tipo_origen_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'vta_factura.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'vta_factura.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.id', 'vta_factura.vta_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'vta_factura.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'vta_factura.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe', 'vta_ajuste_debe.gral_fp_cuota_id', 'gral_fp_cuota.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe_tipo_estado', 'vta_ajuste_debe_tipo_estado.id', 'vta_ajuste_debe.vta_ajuste_debe_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_ajuste_debe', 'vta_tipo_ajuste_debe.id', 'vta_ajuste_debe.vta_tipo_ajuste_debe_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_ajuste_debe', 'vta_tipo_origen_ajuste_debe.id', 'vta_ajuste_debe.vta_tipo_origen_ajuste_debe_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_fp_cuota');
		$criterio->setCriterios();		
}
?>

