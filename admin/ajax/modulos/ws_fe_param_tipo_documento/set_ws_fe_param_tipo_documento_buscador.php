<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(WsFeParamTipoDocumento::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ws_fe_param_tipo_documento.id', Gral::getVars(1, 'buscador_ws_fe_param_tipo_documento_id'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_documento_id_comparador'));
	$criterio->add('ws_fe_param_tipo_documento.descripcion', Gral::getVars(1, 'buscador_ws_fe_param_tipo_documento_descripcion'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_documento_descripcion_comparador'));
	$criterio->add('ws_fe_param_tipo_documento.codigo', Gral::getVars(1, 'buscador_ws_fe_param_tipo_documento_codigo'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_documento_codigo_comparador'));
	$criterio->add('ws_fe_param_tipo_documento.codigo_afip', Gral::getVars(1, 'buscador_ws_fe_param_tipo_documento_codigo_afip'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_documento_codigo_afip_comparador'));
	$criterio->add('ws_fe_param_tipo_documento.fecha_desde', Gral::getVars(1, 'buscador_ws_fe_param_tipo_documento_fecha_desde'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_documento_fecha_desde_comparador'));
	$criterio->add('ws_fe_param_tipo_documento.fecha_hasta', Gral::getVars(1, 'buscador_ws_fe_param_tipo_documento_fecha_hasta'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_documento_fecha_hasta_comparador'));
	$criterio->add('ws_fe_param_tipo_documento.observacion', Gral::getVars(1, 'buscador_ws_fe_param_tipo_documento_observacion'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_documento_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_tipo_documento_ws_fe_param_tipo_documento', 'gral_tipo_documento_ws_fe_param_tipo_documento.ws_fe_param_tipo_documento_id', 'ws_fe_param_tipo_documento.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'gral_tipo_documento_ws_fe_param_tipo_documento.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud', 'ws_fe_ope_solicitud.ws_fe_param_tipo_documento_id', 'ws_fe_param_tipo_documento.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_punto_venta', 'ws_fe_param_punto_venta.id', 'ws_fe_ope_solicitud.ws_fe_param_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_comprobante', 'ws_fe_param_tipo_comprobante.id', 'ws_fe_ope_solicitud.ws_fe_param_tipo_comprobante_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_concepto', 'ws_fe_param_tipo_concepto.id', 'ws_fe_ope_solicitud.ws_fe_param_tipo_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_moneda', 'ws_fe_param_tipo_moneda.id', 'ws_fe_ope_solicitud.ws_fe_param_tipo_moneda_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'ws_fe_ope_solicitud.gral_empresa_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ws_fe_param_tipo_documento');
		$criterio->setCriterios();		
}
?>

