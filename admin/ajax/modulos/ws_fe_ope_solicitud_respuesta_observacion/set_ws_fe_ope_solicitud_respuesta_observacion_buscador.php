<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(WsFeOpeSolicitudRespuestaObservacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ws_fe_ope_solicitud_respuesta_observacion.id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta_observacion.descripcion', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_descripcion'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_descripcion_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta_observacion.ws_fe_ope_solicitud_respuesta_id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_ope_solicitud_respuesta_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_ope_solicitud_respuesta_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta_observacion.ws_fe_afip_codigo', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_afip_codigo'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_afip_codigo_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta_observacion.ws_fe_afip_mensaje', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_afip_mensaje'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_ws_fe_afip_mensaje_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta_observacion.codigo', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_codigo'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_codigo_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta_observacion.observacion', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_observacion'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ws_fe_ope_solicitud_respuesta_observacion');
		$criterio->setCriterios();		
}
?>

