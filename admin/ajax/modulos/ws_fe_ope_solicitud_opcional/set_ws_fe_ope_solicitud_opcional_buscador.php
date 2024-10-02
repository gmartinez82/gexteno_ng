<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(WsFeOpeSolicitudOpcional::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ws_fe_ope_solicitud_opcional.id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_opcional_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_opcional_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud_opcional.descripcion', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_opcional_descripcion'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_opcional_descripcion_comparador'));
	$criterio->add('ws_fe_ope_solicitud_opcional.ws_fe_ope_solicitud_id', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_opcional_ws_fe_ope_solicitud_id'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_opcional_ws_fe_ope_solicitud_id_comparador'));
	$criterio->add('ws_fe_ope_solicitud_opcional.ws_fe_afip_codigo', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_opcional_ws_fe_afip_codigo'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_opcional_ws_fe_afip_codigo_comparador'));
	$criterio->add('ws_fe_ope_solicitud_opcional.ws_fe_afip_valor', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_opcional_ws_fe_afip_valor'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_opcional_ws_fe_afip_valor_comparador'));
	$criterio->add('ws_fe_ope_solicitud_opcional.codigo', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_opcional_codigo'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_opcional_codigo_comparador'));
	$criterio->add('ws_fe_ope_solicitud_opcional.observacion', Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_opcional_observacion'), Gral::getVars(1, 'buscador_ws_fe_ope_solicitud_opcional_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ws_fe_ope_solicitud_opcional');
		$criterio->setCriterios();		
}
?>

