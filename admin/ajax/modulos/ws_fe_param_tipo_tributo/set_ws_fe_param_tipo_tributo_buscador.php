<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(WsFeParamTipoTributo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ws_fe_param_tipo_tributo.id', Gral::getVars(1, 'buscador_ws_fe_param_tipo_tributo_id'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_tributo_id_comparador'));
	$criterio->add('ws_fe_param_tipo_tributo.descripcion', Gral::getVars(1, 'buscador_ws_fe_param_tipo_tributo_descripcion'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_tributo_descripcion_comparador'));
	$criterio->add('ws_fe_param_tipo_tributo.codigo', Gral::getVars(1, 'buscador_ws_fe_param_tipo_tributo_codigo'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_tributo_codigo_comparador'));
	$criterio->add('ws_fe_param_tipo_tributo.codigo_afip', Gral::getVars(1, 'buscador_ws_fe_param_tipo_tributo_codigo_afip'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_tributo_codigo_afip_comparador'));
	$criterio->add('ws_fe_param_tipo_tributo.fecha_desde', Gral::getVars(1, 'buscador_ws_fe_param_tipo_tributo_fecha_desde'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_tributo_fecha_desde_comparador'));
	$criterio->add('ws_fe_param_tipo_tributo.fecha_hasta', Gral::getVars(1, 'buscador_ws_fe_param_tipo_tributo_fecha_hasta'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_tributo_fecha_hasta_comparador'));
	$criterio->add('ws_fe_param_tipo_tributo.observacion', Gral::getVars(1, 'buscador_ws_fe_param_tipo_tributo_observacion'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_tributo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_tributo_ws_fe_param_tipo_tributo', 'vta_tributo_ws_fe_param_tipo_tributo.ws_fe_param_tipo_tributo_id', 'ws_fe_param_tipo_tributo.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_tributo', 'vta_tributo.id', 'vta_tributo_ws_fe_param_tipo_tributo.vta_tributo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud_tributo', 'ws_fe_ope_solicitud_tributo.ws_fe_param_tipo_tributo_id', 'ws_fe_param_tipo_tributo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ws_fe_ope_solicitud', 'ws_fe_ope_solicitud.id', 'ws_fe_ope_solicitud_tributo.ws_fe_ope_solicitud_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ws_fe_param_tipo_tributo');
		$criterio->setCriterios();		
}
?>

