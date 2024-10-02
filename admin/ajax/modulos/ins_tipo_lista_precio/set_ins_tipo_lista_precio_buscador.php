<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsTipoListaPrecio::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_tipo_lista_precio.id', Gral::getVars(1, 'buscador_ins_tipo_lista_precio_id'), Gral::getVars(1, 'buscador_ins_tipo_lista_precio_id_comparador'));
	$criterio->add('ins_tipo_lista_precio.descripcion', Gral::getVars(1, 'buscador_ins_tipo_lista_precio_descripcion'), Gral::getVars(1, 'buscador_ins_tipo_lista_precio_descripcion_comparador'));
	$criterio->add('ins_tipo_lista_precio.descripcion_corta', Gral::getVars(1, 'buscador_ins_tipo_lista_precio_descripcion_corta'), Gral::getVars(1, 'buscador_ins_tipo_lista_precio_descripcion_corta_comparador'));
	$criterio->add('ins_tipo_lista_precio.codigo', Gral::getVars(1, 'buscador_ins_tipo_lista_precio_codigo'), Gral::getVars(1, 'buscador_ins_tipo_lista_precio_codigo_comparador'));
	$criterio->add('ins_tipo_lista_precio.porcentaje_incremento', Gral::getVars(1, 'buscador_ins_tipo_lista_precio_porcentaje_incremento'), Gral::getVars(1, 'buscador_ins_tipo_lista_precio_porcentaje_incremento_comparador'));
	$criterio->add('ins_tipo_lista_precio.importe_minimo', Gral::getVars(1, 'buscador_ins_tipo_lista_precio_importe_minimo'), Gral::getVars(1, 'buscador_ins_tipo_lista_precio_importe_minimo_comparador'));
	$criterio->add('ins_tipo_lista_precio.incluye_logistica', Gral::getVars(1, 'buscador_ins_tipo_lista_precio_incluye_logistica'), Gral::getVars(1, 'buscador_ins_tipo_lista_precio_incluye_logistica_comparador'));
	$criterio->add('ins_tipo_lista_precio.bulto_cerrado', Gral::getVars(1, 'buscador_ins_tipo_lista_precio_bulto_cerrado'), Gral::getVars(1, 'buscador_ins_tipo_lista_precio_bulto_cerrado_comparador'));
	$criterio->add('ins_tipo_lista_precio.porcentaje_comision', Gral::getVars(1, 'buscador_ins_tipo_lista_precio_porcentaje_comision'), Gral::getVars(1, 'buscador_ins_tipo_lista_precio_porcentaje_comision_comparador'));
	$criterio->add('ins_tipo_lista_precio.porcentaje_logistica', Gral::getVars(1, 'buscador_ins_tipo_lista_precio_porcentaje_logistica'), Gral::getVars(1, 'buscador_ins_tipo_lista_precio_porcentaje_logistica_comparador'));
	$criterio->add('ins_tipo_lista_precio.porcentaje_descuento_maximo', Gral::getVars(1, 'buscador_ins_tipo_lista_precio_porcentaje_descuento_maximo'), Gral::getVars(1, 'buscador_ins_tipo_lista_precio_porcentaje_descuento_maximo_comparador'));
	$criterio->add('ins_tipo_lista_precio.por_default', Gral::getVars(1, 'buscador_ins_tipo_lista_precio_por_default'), Gral::getVars(1, 'buscador_ins_tipo_lista_precio_por_default_comparador'));
	$criterio->add('ins_tipo_lista_precio.observacion', Gral::getVars(1, 'buscador_ins_tipo_lista_precio_observacion'), Gral::getVars(1, 'buscador_ins_tipo_lista_precio_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_insumo_bulto_ins_tipo_lista_precio', 'ins_insumo_bulto_ins_tipo_lista_precio.ins_tipo_lista_precio_id', 'ins_tipo_lista_precio.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_bulto', 'ins_insumo_bulto.id', 'ins_insumo_bulto_ins_tipo_lista_precio.ins_insumo_bulto_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_lista_precio', 'ins_lista_precio.ins_tipo_lista_precio_id', 'ins_tipo_lista_precio.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_lista_precio.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_categoria_ins_tipo_lista_precio', 'cli_categoria_ins_tipo_lista_precio.ins_tipo_lista_precio_id', 'ins_tipo_lista_precio.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_categoria', 'cli_categoria.id', 'cli_categoria_ins_tipo_lista_precio.cli_categoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_subcategoria_ins_tipo_lista_precio', 'cli_subcategoria_ins_tipo_lista_precio.ins_tipo_lista_precio_id', 'ins_tipo_lista_precio.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_subcategoria', 'cli_subcategoria.id', 'cli_subcategoria_ins_tipo_lista_precio.cli_subcategoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_ins_tipo_lista_precio', 'cli_cliente_ins_tipo_lista_precio.ins_tipo_lista_precio_id', 'ins_tipo_lista_precio.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'cli_cliente_ins_tipo_lista_precio.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.ins_tipo_lista_precio_id', 'ins_tipo_lista_precio.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_presupuesto.vta_vendedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'vta_presupuesto.vta_comprador_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'vta_presupuesto.vta_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'vta_presupuesto.gral_actividad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'vta_presupuesto.gral_escenario_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_presupuesto.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_cuota', 'gral_fp_cuota.id', 'vta_presupuesto.gral_fp_cuota_id', 'LEFT JOIN');
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
	$criterio->addRealJoin('vta_hoja_ruta', 'vta_hoja_ruta.id', 'vta_presupuesto.vta_hoja_ruta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta', 'vta_orden_venta.ins_tipo_lista_precio_id', 'ins_tipo_lista_precio.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_ins_insumo', 'vta_presupuesto_ins_insumo.id', 'vta_orden_venta.vta_presupuesto_ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_orden_venta.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado', 'vta_orden_venta_tipo_estado.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_facturacion', 'vta_orden_venta_tipo_estado_facturacion.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_facturacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_orden_venta_tipo_estado_remision', 'vta_orden_venta_tipo_estado_remision.id', 'vta_orden_venta.vta_orden_venta_tipo_estado_remision_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.id', 'vta_orden_venta.ins_insumo_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento', 'vta_politica_descuento.id', 'vta_orden_venta.vta_politica_descuento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento_rango', 'vta_politica_descuento_rango.id', 'vta_orden_venta.vta_politica_descuento_rango_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor_ins_tipo_lista_precio', 'vta_vendedor_ins_tipo_lista_precio.ins_tipo_lista_precio_id', 'ins_tipo_lista_precio.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_politica_descuento_ins_tipo_lista_precio', 'vta_politica_descuento_ins_tipo_lista_precio.ins_tipo_lista_precio_id', 'ins_tipo_lista_precio.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_tipo_lista_precio');
		$criterio->setCriterios();		
}
?>

