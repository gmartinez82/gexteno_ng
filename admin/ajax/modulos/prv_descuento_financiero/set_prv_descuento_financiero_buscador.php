<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrvDescuentoFinanciero::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prv_descuento_financiero.id', Gral::getVars(1, 'buscador_prv_descuento_financiero_id'), Gral::getVars(1, 'buscador_prv_descuento_financiero_id_comparador'));
	$criterio->add('prv_descuento_financiero.descripcion', Gral::getVars(1, 'buscador_prv_descuento_financiero_descripcion'), Gral::getVars(1, 'buscador_prv_descuento_financiero_descripcion_comparador'));
	$criterio->add('prv_descuento_financiero.prv_proveedor_id', Gral::getVars(1, 'buscador_prv_descuento_financiero_prv_proveedor_id'), Gral::getVars(1, 'buscador_prv_descuento_financiero_prv_proveedor_id_comparador'));
	$criterio->add('prv_descuento_financiero.codigo', Gral::getVars(1, 'buscador_prv_descuento_financiero_codigo'), Gral::getVars(1, 'buscador_prv_descuento_financiero_codigo_comparador'));
	$criterio->add('prv_descuento_financiero.porcentaje_descuento', Gral::getVars(1, 'buscador_prv_descuento_financiero_porcentaje_descuento'), Gral::getVars(1, 'buscador_prv_descuento_financiero_porcentaje_descuento_comparador'));
	$criterio->add('prv_descuento_financiero.observacion', Gral::getVars(1, 'buscador_prv_descuento_financiero_observacion'), Gral::getVars(1, 'buscador_prv_descuento_financiero_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_oc_agrupacion', 'pde_oc_agrupacion.prv_descuento_financiero_id', 'prv_descuento_financiero.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_origen', 'pde_oc_tipo_origen.id', 'pde_oc_agrupacion.pde_oc_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_oc_agrupacion.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_oc_agrupacion.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_oc_agrupacion.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_agrupacion_tipo_estado', 'pde_oc_agrupacion_tipo_estado.id', 'pde_oc_agrupacion.pde_oc_agrupacion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_agrupacion_item', 'pde_oc_agrupacion_item.prv_descuento_financiero_id', 'prv_descuento_financiero.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_oc_agrupacion_item.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo', 'prv_insumo.id', 'pde_oc_agrupacion_item.prv_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo_costo', 'prv_insumo_costo.id', 'pde_oc_agrupacion_item.prv_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_descuento_comercial', 'prv_descuento_comercial.id', 'pde_oc_agrupacion_item.prv_descuento_comercial_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.prv_descuento_financiero_id', 'prv_descuento_financiero.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido', 'pde_pedido.id', 'pde_oc.pde_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_cotizacion', 'pde_cotizacion.id', 'pde_oc.pde_cotizacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado', 'pde_oc_tipo_estado.id', 'pde_oc.pde_oc_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_recepcion', 'pde_oc_tipo_estado_recepcion.id', 'pde_oc.pde_oc_tipo_estado_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_tipo_estado_facturacion', 'pde_oc_tipo_estado_facturacion.id', 'pde_oc.pde_oc_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura', 'pde_factura.prv_descuento_financiero_id', 'prv_descuento_financiero.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_factura_tipo_estado', 'pde_factura_tipo_estado.id', 'pde_factura.pde_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_factura', 'pde_tipo_factura.id', 'pde_factura.pde_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_factura', 'pde_tipo_origen_factura.id', 'pde_factura.pde_tipo_origen_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'pde_factura.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'pde_factura.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'pde_factura.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'pde_factura.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'pde_factura.gral_actividad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'pde_factura.gral_escenario_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'pde_factura.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'pde_factura.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito', 'pde_nota_debito.prv_descuento_financiero_id', 'prv_descuento_financiero.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_nota_debito', 'pde_tipo_nota_debito.id', 'pde_nota_debito.pde_tipo_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_nota_debito', 'pde_tipo_origen_nota_debito.id', 'pde_nota_debito.pde_tipo_origen_nota_debito_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_debito_tipo_estado', 'pde_nota_debito_tipo_estado.id', 'pde_nota_debito.pde_nota_debito_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prv_descuento_financiero');
		$criterio->setCriterios();		
}
?>

