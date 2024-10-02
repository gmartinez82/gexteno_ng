<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(WsFeOpeSolicitudComprobanteAsociado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ws_fe_ope_solicitud_comprobante_asociado.id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud_comprobante_asociado.descripcion', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_descripcion'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_descripcion_comparador'));
	$criterio->add('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_ope_solicitud_id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_ope_solicitud_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_ope_solicitud_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_tipo_comprobante', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_tipo_comprobante'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_tipo_comprobante_comparador'));
	$criterio->add('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_punto_venta', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_punto_venta'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_punto_venta_comparador'));
	$criterio->add('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_numero', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_numero'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_numero_comparador'));
	$criterio->add('ws_fe_ope_solicitud_comprobante_asociado.ws_fe_afip_cuit', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_cuit'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_ws_fe_afip_cuit_comparador'));
	$criterio->add('ws_fe_ope_solicitud_comprobante_asociado.codigo', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_codigo'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_codigo_comparador'));
	$criterio->add('ws_fe_ope_solicitud_comprobante_asociado.observacion', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_observacion'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_comprobante_asociado_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ws_fe_ope_solicitud_comprobante_asociado');
		$criterio->setCriterios();		
}
?>

