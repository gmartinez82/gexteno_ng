<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(WsFeParamTipoMoneda::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ws_fe_param_tipo_moneda.id', Gral::getVars(1, 'buscador_ws_fe_param_tipo_moneda_id'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_moneda_id_comparador'));
	$criterio->add('ws_fe_param_tipo_moneda.descripcion', Gral::getVars(1, 'buscador_ws_fe_param_tipo_moneda_descripcion'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_moneda_descripcion_comparador'));
	$criterio->add('ws_fe_param_tipo_moneda.codigo', Gral::getVars(1, 'buscador_ws_fe_param_tipo_moneda_codigo'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_moneda_codigo_comparador'));
	$criterio->add('ws_fe_param_tipo_moneda.codigo_afip', Gral::getVars(1, 'buscador_ws_fe_param_tipo_moneda_codigo_afip'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_moneda_codigo_afip_comparador'));
	$criterio->add('ws_fe_param_tipo_moneda.fecha_desde', Gral::getVars(1, 'buscador_ws_fe_param_tipo_moneda_fecha_desde'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_moneda_fecha_desde_comparador'));
	$criterio->add('ws_fe_param_tipo_moneda.fecha_hasta', Gral::getVars(1, 'buscador_ws_fe_param_tipo_moneda_fecha_hasta'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_moneda_fecha_hasta_comparador'));
	$criterio->add('ws_fe_param_tipo_moneda.observacion', Gral::getVars(1, 'buscador_ws_fe_param_tipo_moneda_observacion'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_moneda_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ws_fe_ope_solicitud', 'ws_fe_ope_solicitud.ws_fe_param_tipo_moneda_id', 'ws_fe_param_tipo_moneda.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_punto_venta', 'ws_fe_param_punto_venta.id', 'ws_fe_ope_solicitud.ws_fe_param_punto_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_comprobante', 'ws_fe_param_tipo_comprobante.id', 'ws_fe_ope_solicitud.ws_fe_param_tipo_comprobante_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_concepto', 'ws_fe_param_tipo_concepto.id', 'ws_fe_ope_solicitud.ws_fe_param_tipo_concepto_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_param_tipo_documento', 'ws_fe_param_tipo_documento.id', 'ws_fe_ope_solicitud.ws_fe_param_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'ws_fe_ope_solicitud.gral_empresa_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ws_fe_param_tipo_moneda');
		$criterio->setCriterios();		
}
?>

