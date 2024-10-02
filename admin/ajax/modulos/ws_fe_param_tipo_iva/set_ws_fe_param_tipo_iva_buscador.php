<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(WsFeParamTipoIva::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ws_fe_param_tipo_iva.id', Gral::getVars(1, 'buscador_ws_fe_param_tipo_iva_id'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_iva_id_comparador'));
	$criterio->add('ws_fe_param_tipo_iva.descripcion', Gral::getVars(1, 'buscador_ws_fe_param_tipo_iva_descripcion'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_iva_descripcion_comparador'));
	$criterio->add('ws_fe_param_tipo_iva.codigo', Gral::getVars(1, 'buscador_ws_fe_param_tipo_iva_codigo'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_iva_codigo_comparador'));
	$criterio->add('ws_fe_param_tipo_iva.codigo_afip', Gral::getVars(1, 'buscador_ws_fe_param_tipo_iva_codigo_afip'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_iva_codigo_afip_comparador'));
	$criterio->add('ws_fe_param_tipo_iva.fecha_desde', Gral::getVars(1, 'buscador_ws_fe_param_tipo_iva_fecha_desde'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_iva_fecha_desde_comparador'));
	$criterio->add('ws_fe_param_tipo_iva.fecha_hasta', Gral::getVars(1, 'buscador_ws_fe_param_tipo_iva_fecha_hasta'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_iva_fecha_hasta_comparador'));
	$criterio->add('ws_fe_param_tipo_iva.observacion', Gral::getVars(1, 'buscador_ws_fe_param_tipo_iva_observacion'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_iva_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_tipo_iva_ws_fe_param_tipo_iva', 'gral_tipo_iva_ws_fe_param_tipo_iva.ws_fe_param_tipo_iva_id', 'ws_fe_param_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'gral_tipo_iva_ws_fe_param_tipo_iva.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud_iva', 'ws_fe_ope_solicitud_iva.ws_fe_param_tipo_iva_id', 'ws_fe_param_tipo_iva.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud', 'ws_fe_ope_solicitud.id', 'ws_fe_ope_solicitud_iva.ws_fe_ope_solicitud_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ws_fe_param_tipo_iva');
		$criterio->setCriterios();		
}
?>

