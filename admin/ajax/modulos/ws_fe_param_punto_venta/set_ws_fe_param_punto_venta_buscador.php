<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(WsFeParamPuntoVenta::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ws_fe_param_punto_venta.id', Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_id'), Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_id_comparador'));
	$criterio->add('ws_fe_param_punto_venta.descripcion', Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_descripcion'), Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_descripcion_comparador'));
	$criterio->add('ws_fe_param_punto_venta.gral_empresa_id', Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_gral_empresa_id'), Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_gral_empresa_id_comparador'));
	$criterio->add('ws_fe_param_punto_venta.cuit', Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_cuit'), Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_cuit_comparador'));
	$criterio->add('ws_fe_param_punto_venta.codigo', Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_codigo'), Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_codigo_comparador'));
	$criterio->add('ws_fe_param_punto_venta.numero', Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_numero'), Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_numero_comparador'));
	$criterio->add('ws_fe_param_punto_venta.tipo_emision', Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_tipo_emision'), Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_tipo_emision_comparador'));
	$criterio->add('ws_fe_param_punto_venta.bloqueado', Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_bloqueado'), Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_bloqueado_comparador'));
	$criterio->add('ws_fe_param_punto_venta.fecha_baja', Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_fecha_baja'), Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_fecha_baja_comparador'));
	$criterio->add('ws_fe_param_punto_venta.observacion', Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_observacion'), Gral::getVars(1, 'buscador_ws_fe_param_punto_venta_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_punto_venta_ws_fe_param_punto_venta', 'vta_punto_venta_ws_fe_param_punto_venta.ws_fe_param_punto_venta_id', 'ws_fe_param_punto_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.id', 'vta_punto_venta_ws_fe_param_punto_venta.vta_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud', 'ws_fe_ope_solicitud.ws_fe_param_punto_venta_id', 'ws_fe_param_punto_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_comprobante', 'ws_fe_param_tipo_comprobante.id', 'ws_fe_ope_solicitud.ws_fe_param_tipo_comprobante_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_concepto', 'ws_fe_param_tipo_concepto.id', 'ws_fe_ope_solicitud.ws_fe_param_tipo_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_documento', 'ws_fe_param_tipo_documento.id', 'ws_fe_ope_solicitud.ws_fe_param_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_moneda', 'ws_fe_param_tipo_moneda.id', 'ws_fe_ope_solicitud.ws_fe_param_tipo_moneda_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'ws_fe_ope_solicitud.gral_empresa_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ws_fe_param_punto_venta');
		$criterio->setCriterios();		
}
?>

