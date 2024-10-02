<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralEmpresaTransportadora::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_empresa_transportadora.id', Gral::getVars(1, 'buscador_gral_empresa_transportadora_id'), Gral::getVars(1, 'buscador_gral_empresa_transportadora_id_comparador'));
	$criterio->add('gral_empresa_transportadora.descripcion', Gral::getVars(1, 'buscador_gral_empresa_transportadora_descripcion'), Gral::getVars(1, 'buscador_gral_empresa_transportadora_descripcion_comparador'));
	$criterio->add('gral_empresa_transportadora.codigo', Gral::getVars(1, 'buscador_gral_empresa_transportadora_codigo'), Gral::getVars(1, 'buscador_gral_empresa_transportadora_codigo_comparador'));
	$criterio->add('gral_empresa_transportadora.documento', Gral::getVars(1, 'buscador_gral_empresa_transportadora_documento'), Gral::getVars(1, 'buscador_gral_empresa_transportadora_documento_comparador'));
	$criterio->add('gral_empresa_transportadora.domicilio', Gral::getVars(1, 'buscador_gral_empresa_transportadora_domicilio'), Gral::getVars(1, 'buscador_gral_empresa_transportadora_domicilio_comparador'));
	$criterio->add('gral_empresa_transportadora.publica', Gral::getVars(1, 'buscador_gral_empresa_transportadora_publica'), Gral::getVars(1, 'buscador_gral_empresa_transportadora_publica_comparador'));
	$criterio->add('gral_empresa_transportadora.observacion', Gral::getVars(1, 'buscador_gral_empresa_transportadora_observacion'), Gral::getVars(1, 'buscador_gral_empresa_transportadora_observacion_comparador'));
	$criterio->add('gral_empresa_transportadora.estado', Gral::getVars(1, 'buscador_gral_empresa_transportadora_estado'), Gral::getVars(1, 'buscador_gral_empresa_transportadora_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.gral_empresa_transportadora_id', 'gral_empresa_transportadora.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'cli_cliente.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'cli_cliente.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'cli_cliente.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'cli_cliente.geo_localidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_zona', 'geo_zona.id', 'cli_cliente.geo_zona_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_grupo', 'cli_grupo.id', 'cli_cliente.cli_grupo_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_categoria', 'cli_categoria.id', 'cli_cliente.cli_categoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_subcategoria', 'cli_subcategoria.id', 'cli_cliente.cli_subcategoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.gral_empresa_transportadora_id', 'gral_empresa_transportadora.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_presupuesto.vta_vendedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'vta_presupuesto.vta_comprador_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'vta_presupuesto.vta_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'vta_presupuesto.gral_actividad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'vta_presupuesto.gral_escenario_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_presupuesto.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_cuota', 'gral_fp_cuota.id', 'vta_presupuesto.gral_fp_cuota_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_lista_precio', 'ins_tipo_lista_precio.id', 'vta_presupuesto.ins_tipo_lista_precio_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_despacho', 'vta_presupuesto_tipo_despacho.id', 'vta_presupuesto.vta_presupuesto_tipo_despacho_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_estado', 'vta_presupuesto_tipo_estado.id', 'vta_presupuesto.vta_presupuesto_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_emision', 'vta_presupuesto_tipo_emision.id', 'vta_presupuesto.vta_presupuesto_tipo_emision_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_venta', 'vta_presupuesto_tipo_venta.id', 'vta_presupuesto.vta_presupuesto_tipo_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_tipo_origen', 'vta_presupuesto_tipo_origen.id', 'vta_presupuesto.vta_presupuesto_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_descuento_financiero', 'vta_descuento_financiero.id', 'vta_presupuesto.vta_descuento_financiero_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_presupuesto.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_centro_recepcion', 'cli_centro_recepcion.id', 'vta_presupuesto.cli_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_hoja_ruta', 'vta_hoja_ruta.id', 'vta_presupuesto.vta_hoja_ruta_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito', 'vta_remito.gral_empresa_transportadora_id', 'gral_empresa_transportadora.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_tipo_despacho', 'vta_remito_tipo_despacho.id', 'vta_remito.vta_remito_tipo_despacho_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_tipo_estado', 'vta_remito_tipo_estado.id', 'vta_remito.vta_remito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_remito', 'vta_tipo_remito.id', 'vta_remito.vta_tipo_remito_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'vta_remito.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.id', 'vta_remito.vta_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'vta_remito.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_estado', 'vta_remito_estado.gral_empresa_transportadora_id', 'gral_empresa_transportadora.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_estado', 'pde_orden_pago_estado.gral_empresa_transportadora_id', 'gral_empresa_transportadora.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago', 'pde_orden_pago.id', 'pde_orden_pago_estado.pde_orden_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_tipo_estado', 'pde_orden_pago_tipo_estado.id', 'pde_orden_pago_estado.pde_orden_pago_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_preventista', 'prv_preventista.id', 'pde_orden_pago_estado.prv_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_ajuste', 'vta_remito_ajuste.gral_empresa_transportadora_id', 'gral_empresa_transportadora.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_ajuste_tipo_despacho', 'vta_remito_ajuste_tipo_despacho.id', 'vta_remito_ajuste.vta_remito_ajuste_tipo_despacho_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_ajuste_tipo_estado', 'vta_remito_ajuste_tipo_estado.id', 'vta_remito_ajuste.vta_remito_ajuste_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_remito_ajuste', 'vta_tipo_remito_ajuste.id', 'vta_remito_ajuste.vta_tipo_remito_ajuste_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_ajuste_estado', 'vta_remito_ajuste_estado.gral_empresa_transportadora_id', 'gral_empresa_transportadora.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_empresa_transportadora');
		$criterio->setCriterios();		
}
?>

