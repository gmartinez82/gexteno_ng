<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaFacturaTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_factura_tipo_estado.id', Gral::getVars(1, 'buscador_vta_factura_tipo_estado_id'), Gral::getVars(1, 'buscador_vta_factura_tipo_estado_id_comparador'));
	$criterio->add('vta_factura_tipo_estado.descripcion', Gral::getVars(1, 'buscador_vta_factura_tipo_estado_descripcion'), Gral::getVars(1, 'buscador_vta_factura_tipo_estado_descripcion_comparador'));
	$criterio->add('vta_factura_tipo_estado.descripcion_publica', Gral::getVars(1, 'buscador_vta_factura_tipo_estado_descripcion_publica'), Gral::getVars(1, 'buscador_vta_factura_tipo_estado_descripcion_publica_comparador'));
	$criterio->add('vta_factura_tipo_estado.codigo', Gral::getVars(1, 'buscador_vta_factura_tipo_estado_codigo'), Gral::getVars(1, 'buscador_vta_factura_tipo_estado_codigo_comparador'));
	$criterio->add('vta_factura_tipo_estado.activo', Gral::getVars(1, 'buscador_vta_factura_tipo_estado_activo'), Gral::getVars(1, 'buscador_vta_factura_tipo_estado_activo_comparador'));
	$criterio->add('vta_factura_tipo_estado.terminal', Gral::getVars(1, 'buscador_vta_factura_tipo_estado_terminal'), Gral::getVars(1, 'buscador_vta_factura_tipo_estado_terminal_comparador'));
	$criterio->add('vta_factura_tipo_estado.imputable', Gral::getVars(1, 'buscador_vta_factura_tipo_estado_imputable'), Gral::getVars(1, 'buscador_vta_factura_tipo_estado_imputable_comparador'));
	$criterio->add('vta_factura_tipo_estado.gestionable', Gral::getVars(1, 'buscador_vta_factura_tipo_estado_gestionable'), Gral::getVars(1, 'buscador_vta_factura_tipo_estado_gestionable_comparador'));
	$criterio->add('vta_factura_tipo_estado.aprobado_afip', Gral::getVars(1, 'buscador_vta_factura_tipo_estado_aprobado_afip'), Gral::getVars(1, 'buscador_vta_factura_tipo_estado_aprobado_afip_comparador'));
	$criterio->add('vta_factura_tipo_estado.contabilizable', Gral::getVars(1, 'buscador_vta_factura_tipo_estado_contabilizable'), Gral::getVars(1, 'buscador_vta_factura_tipo_estado_contabilizable_comparador'));
	$criterio->add('vta_factura_tipo_estado.anulado', Gral::getVars(1, 'buscador_vta_factura_tipo_estado_anulado'), Gral::getVars(1, 'buscador_vta_factura_tipo_estado_anulado_comparador'));
	$criterio->add('vta_factura_tipo_estado.observacion', Gral::getVars(1, 'buscador_vta_factura_tipo_estado_observacion'), Gral::getVars(1, 'buscador_vta_factura_tipo_estado_observacion_comparador'));
	$criterio->add('vta_factura_tipo_estado.estado', Gral::getVars(1, 'buscador_vta_factura_tipo_estado_estado'), Gral::getVars(1, 'buscador_vta_factura_tipo_estado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_factura', 'vta_factura.vta_factura_tipo_estado_id', 'vta_factura_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_factura.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_factura', 'vta_tipo_factura.id', 'vta_factura.vta_tipo_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tipo_origen_factura', 'vta_tipo_origen_factura.id', 'vta_factura.vta_tipo_origen_factura_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'vta_factura.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'vta_factura.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'vta_factura.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.id', 'vta_factura.vta_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'vta_factura.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_cuota', 'gral_fp_cuota.id', 'vta_factura.gral_fp_cuota_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'vta_factura.vta_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'vta_factura.vta_comprador_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_factura.vta_vendedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'vta_factura.gral_actividad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'vta_factura.gral_escenario_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'vta_factura.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_factura.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'vta_factura.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'vta_factura.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_factura.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_centro_recepcion', 'cli_centro_recepcion.id', 'vta_factura.cli_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_factura_estado', 'vta_factura_estado.vta_factura_tipo_estado_id', 'vta_factura_tipo_estado.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_factura_tipo_estado');
		$criterio->setCriterios();		
}
?>

