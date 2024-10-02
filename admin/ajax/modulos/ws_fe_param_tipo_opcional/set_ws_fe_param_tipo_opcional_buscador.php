<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(WsFeParamTipoOpcional::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ws_fe_param_tipo_opcional.id', Gral::getVars(1, 'buscador_ws_fe_param_tipo_opcional_id'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_opcional_id_comparador'));
	$criterio->add('ws_fe_param_tipo_opcional.descripcion', Gral::getVars(1, 'buscador_ws_fe_param_tipo_opcional_descripcion'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_opcional_descripcion_comparador'));
	$criterio->add('ws_fe_param_tipo_opcional.codigo', Gral::getVars(1, 'buscador_ws_fe_param_tipo_opcional_codigo'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_opcional_codigo_comparador'));
	$criterio->add('ws_fe_param_tipo_opcional.codigo_afip', Gral::getVars(1, 'buscador_ws_fe_param_tipo_opcional_codigo_afip'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_opcional_codigo_afip_comparador'));
	$criterio->add('ws_fe_param_tipo_opcional.fecha_desde', Gral::getVars(1, 'buscador_ws_fe_param_tipo_opcional_fecha_desde'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_opcional_fecha_desde_comparador'));
	$criterio->add('ws_fe_param_tipo_opcional.fecha_hasta', Gral::getVars(1, 'buscador_ws_fe_param_tipo_opcional_fecha_hasta'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_opcional_fecha_hasta_comparador'));
	$criterio->add('ws_fe_param_tipo_opcional.observacion', Gral::getVars(1, 'buscador_ws_fe_param_tipo_opcional_observacion'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_opcional_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ws_fe_param_tipo_opcional');
		$criterio->setCriterios();		
}
?>

