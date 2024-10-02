<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(WsFeOpeSolicitudTributo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ws_fe_ope_solicitud_tributo.id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud_tributo.descripcion', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_descripcion'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_descripcion_comparador'));
	$criterio->add('ws_fe_ope_solicitud_tributo.ws_fe_ope_solicitud_id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_ope_solicitud_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_ope_solicitud_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud_tributo.ws_fe_param_tipo_tributo_id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_param_tipo_tributo_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_param_tipo_tributo_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud_tributo.ws_fe_afip_codigo', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_codigo'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_codigo_comparador'));
	$criterio->add('ws_fe_ope_solicitud_tributo.ws_fe_afip_descripcion', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_descripcion'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_descripcion_comparador'));
	$criterio->add('ws_fe_ope_solicitud_tributo.ws_fe_afip_base_imponible', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_base_imponible'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_base_imponible_comparador'));
	$criterio->add('ws_fe_ope_solicitud_tributo.ws_fe_afip_alicuota', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_alicuota'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_alicuota_comparador'));
	$criterio->add('ws_fe_ope_solicitud_tributo.ws_fe_afip_importe', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_importe'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_ws_fe_afip_importe_comparador'));
	$criterio->add('ws_fe_ope_solicitud_tributo.codigo', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_codigo'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_codigo_comparador'));
	$criterio->add('ws_fe_ope_solicitud_tributo.observacion', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_observacion'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_tributo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ws_fe_ope_solicitud_tributo');
		$criterio->setCriterios();		
}
?>

