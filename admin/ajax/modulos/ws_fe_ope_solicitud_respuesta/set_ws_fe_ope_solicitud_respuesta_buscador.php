<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(WsFeOpeSolicitudRespuesta::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ws_fe_ope_solicitud_respuesta.id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.descripcion', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_descripcion'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_descripcion_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.ws_fe_ope_solicitud_id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_ope_solicitud_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_ope_solicitud_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cuit', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cuit'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cuit_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.ws_fe_afip_punto_venta', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_punto_venta'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_punto_venta_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_comprobante', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_comprobante'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_comprobante_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.ws_fe_afip_fecha_proceso', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_fecha_proceso'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_fecha_proceso_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cantidad_registro', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cantidad_registro'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cantidad_registro_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.ws_fe_afip_resultado_cabecera', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_resultado_cabecera'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_resultado_cabecera_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.ws_fe_afip_reproceso', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_reproceso'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_reproceso_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_concepto', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_concepto'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_concepto_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.ws_fe_afip_tipo_documento', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_documento'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_tipo_documento_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.ws_fe_afip_numero_documento', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_numero_documento'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_numero_documento_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_desde', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_desde'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_desde_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_hasta', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_hasta'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_hasta_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.ws_fe_afip_comprobante_fecha', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_fecha'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_comprobante_fecha_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.ws_fe_afip_resultado_detalle', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_resultado_detalle'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_resultado_detalle_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cae', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cae'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cae_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.ws_fe_afip_cae_fecha_vencimiento', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cae_fecha_vencimiento'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_ws_fe_afip_cae_fecha_vencimiento_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.observacion', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_observacion_comparador'));
	$criterio->add('ws_fe_ope_solicitud_respuesta.estado', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_estado'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_respuesta_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ws_fe_ope_solicitud_respuesta_observacion', 'ws_fe_ope_solicitud_respuesta_observacion.ws_fe_ope_solicitud_respuesta_id', 'ws_fe_ope_solicitud_respuesta.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ws_fe_ope_solicitud_respuesta');
		$criterio->setCriterios();		
}
?>

