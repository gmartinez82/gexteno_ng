<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(WsFeOpeSolicitudIva::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ws_fe_ope_solicitud_iva.id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_iva_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_iva_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud_iva.descripcion', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_iva_descripcion'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_iva_descripcion_comparador'));
	$criterio->add('ws_fe_ope_solicitud_iva.ws_fe_ope_solicitud_id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_iva_ws_fe_ope_solicitud_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_iva_ws_fe_ope_solicitud_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud_iva.ws_fe_param_tipo_iva_id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_iva_ws_fe_param_tipo_iva_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_iva_ws_fe_param_tipo_iva_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud_iva.ws_fe_afip_codigo', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_codigo'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_codigo_comparador'));
	$criterio->add('ws_fe_ope_solicitud_iva.ws_fe_afip_base_imponible', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_base_imponible'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_base_imponible_comparador'));
	$criterio->add('ws_fe_ope_solicitud_iva.ws_fe_afip_importe', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_importe'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_iva_ws_fe_afip_importe_comparador'));
	$criterio->add('ws_fe_ope_solicitud_iva.codigo', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_iva_codigo'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_iva_codigo_comparador'));
	$criterio->add('ws_fe_ope_solicitud_iva.observacion', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_iva_observacion'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_iva_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ws_fe_ope_solicitud_iva');
		$criterio->setCriterios();		
}
?>

