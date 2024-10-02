<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaVendedor::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_vendedor.id', Gral::getVars(1, 'buscador_vta_vendedor_id'), Gral::getVars(1, 'buscador_vta_vendedor_id_comparador'));
	$criterio->add('vta_vendedor.descripcion', Gral::getVars(1, 'buscador_vta_vendedor_descripcion'), Gral::getVars(1, 'buscador_vta_vendedor_descripcion_comparador'));
	$criterio->add('vta_vendedor.gral_sucursal_id', Gral::getVars(1, 'buscador_vta_vendedor_gral_sucursal_id'), Gral::getVars(1, 'buscador_vta_vendedor_gral_sucursal_id_comparador'));
	$criterio->add('vta_vendedor.apellido', Gral::getVars(1, 'buscador_vta_vendedor_apellido'), Gral::getVars(1, 'buscador_vta_vendedor_apellido_comparador'));
	$criterio->add('vta_vendedor.nombre', Gral::getVars(1, 'buscador_vta_vendedor_nombre'), Gral::getVars(1, 'buscador_vta_vendedor_nombre_comparador'));
	$criterio->add('vta_vendedor.vta_tipo_vendedor_id', Gral::getVars(1, 'buscador_vta_vendedor_vta_tipo_vendedor_id'), Gral::getVars(1, 'buscador_vta_vendedor_vta_tipo_vendedor_id_comparador'));
	$criterio->add('vta_vendedor.email', Gral::getVars(1, 'buscador_vta_vendedor_email'), Gral::getVars(1, 'buscador_vta_vendedor_email_comparador'));
	$criterio->add('vta_vendedor.telefono', Gral::getVars(1, 'buscador_vta_vendedor_telefono'), Gral::getVars(1, 'buscador_vta_vendedor_telefono_comparador'));
	$criterio->add('vta_vendedor.celular', Gral::getVars(1, 'buscador_vta_vendedor_celular'), Gral::getVars(1, 'buscador_vta_vendedor_celular_comparador'));
	$criterio->add('vta_vendedor.porcentaje_comision', Gral::getVars(1, 'buscador_vta_vendedor_porcentaje_comision'), Gral::getVars(1, 'buscador_vta_vendedor_porcentaje_comision_comparador'));
	$criterio->add('vta_vendedor.codigo', Gral::getVars(1, 'buscador_vta_vendedor_codigo'), Gral::getVars(1, 'buscador_vta_vendedor_codigo_comparador'));
	$criterio->add('vta_vendedor.observacion', Gral::getVars(1, 'buscador_vta_vendedor_observacion'), Gral::getVars(1, 'buscador_vta_vendedor_observacion_comparador'));
	$criterio->add('vta_vendedor.estado', Gral::getVars(1, 'buscador_vta_vendedor_estado'), Gral::getVars(1, 'buscador_vta_vendedor_estado_comparador'));
	
	// criterios agregados por dependencias
	
	$criterio->add('gral_sucursal.gral_empresa_id', Gral::getVars(1, 'buscador_vta_vendedor_gral_empresa_id'), Gral::getVars(1, 'buscador_vta_vendedor_gral_empresa_id_comparador'));
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_vendedor.gral_sucursal_id', 'LEFT JOIN');
	
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_sucursal_vta_vendedor', 'gral_sucursal_vta_vendedor.vta_vendedor_id', 'vta_vendedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'gral_sucursal_vta_vendedor.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_ruta_vta_vendedor', 'gral_ruta_vta_vendedor.vta_vendedor_id', 'vta_vendedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_ruta', 'gral_ruta.id', 'gral_ruta_vta_vendedor.gral_ruta_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_centro_costo_vta_vendedor', 'gral_centro_costo_vta_vendedor.vta_vendedor_id', 'vta_vendedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_centro_costo', 'gral_centro_costo.id', 'gral_centro_costo_vta_vendedor.gral_centro_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_vta_vendedor', 'cli_cliente_vta_vendedor.vta_vendedor_id', 'vta_vendedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'cli_cliente_vta_vendedor.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor_valoracion', 'vta_vendedor_valoracion.vta_vendedor_id', 'vta_vendedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.vta_vendedor_id', 'vta_vendedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'vta_presupuesto.vta_comprador_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'vta_presupuesto.vta_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'vta_presupuesto.gral_actividad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'vta_presupuesto.gral_escenario_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_presupuesto.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_cuota', 'gral_fp_cuota.id', 'vta_presupuesto.gral_fp_cuota_id', 'LEFT JOIN');
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
	$criterio->addRealJoin('cli_centro_recepcion', 'cli_centro_recepcion.id', 'vta_presupuesto.cli_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_hoja_ruta', 'vta_hoja_ruta.id', 'vta_presupuesto.vta_hoja_ruta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor_us_usuario', 'vta_vendedor_us_usuario.vta_vendedor_id', 'vta_vendedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'vta_vendedor_us_usuario.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor_ins_tipo_lista_precio', 'vta_vendedor_ins_tipo_lista_precio.vta_vendedor_id', 'vta_vendedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor_gral_escenario', 'vta_vendedor_gral_escenario.vta_vendedor_id', 'vta_vendedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor_descuento', 'vta_vendedor_descuento.vta_vendedor_id', 'vta_vendedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_etiqueta', 'ins_etiqueta.id', 'vta_vendedor_descuento.ins_etiqueta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura', 'vta_factura.vta_vendedor_id', 'vta_vendedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_tipo_estado', 'vta_factura_tipo_estado.id', 'vta_factura.vta_factura_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_factura', 'vta_tipo_factura.id', 'vta_factura.vta_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_factura', 'vta_tipo_origen_factura.id', 'vta_factura.vta_tipo_origen_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'vta_factura.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'vta_factura.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.id', 'vta_factura.vta_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'vta_factura.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'vta_factura.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision', 'vta_comision.vta_vendedor_id', 'vta_vendedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision_tipo_estado', 'vta_comision_tipo_estado.id', 'vta_comision.vta_comision_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision_vta_factura_configuracion', 'vta_comision_vta_factura_configuracion.vta_vendedor_id', 'vta_vendedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision_vta_ajuste_debe_configuracion', 'vta_comision_vta_ajuste_debe_configuracion.vta_vendedor_id', 'vta_vendedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe', 'vta_ajuste_debe.id', 'vta_comision_vta_ajuste_debe_configuracion.vta_ajuste_debe_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_ajuste_debe_tipo_estado', 'vta_ajuste_debe_tipo_estado.id', 'vta_ajuste_debe.vta_ajuste_debe_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_ajuste_debe', 'vta_tipo_ajuste_debe.id', 'vta_ajuste_debe.vta_tipo_ajuste_debe_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_ajuste_debe', 'vta_tipo_origen_ajuste_debe.id', 'vta_ajuste_debe.vta_tipo_origen_ajuste_debe_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_vendedor');
		$criterio->setCriterios();		
}
?>

