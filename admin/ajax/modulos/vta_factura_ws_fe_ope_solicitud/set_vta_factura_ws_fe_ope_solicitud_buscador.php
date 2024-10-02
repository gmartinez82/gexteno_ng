<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaFacturaWsFeOpeSolicitud::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_factura_ws_fe_ope_solicitud.id', Gral::getVars(1, 'buscador_vta_factura_ws_fe_ope_solicitud_id'), Gral::getVars(1, 'buscador_vta_factura_ws_fe_ope_solicitud_id_comparador'));
	$criterio->add('vta_factura_ws_fe_ope_solicitud.descripcion', Gral::getVars(1, 'buscador_vta_factura_ws_fe_ope_solicitud_descripcion'), Gral::getVars(1, 'buscador_vta_factura_ws_fe_ope_solicitud_descripcion_comparador'));
	$criterio->add('vta_factura_ws_fe_ope_solicitud.vta_factura_id', Gral::getVars(1, 'buscador_vta_factura_ws_fe_ope_solicitud_vta_factura_id'), Gral::getVars(1, 'buscador_vta_factura_ws_fe_ope_solicitud_vta_factura_id_comparador'));
	$criterio->add('vta_factura_ws_fe_ope_solicitud.ws_fe_ope_solicitud_id', Gral::getVars(1, 'buscador_vta_factura_ws_fe_ope_solicitud_ws_fe_ope_solicitud_id'), Gral::getVars(1, 'buscador_vta_factura_ws_fe_ope_solicitud_ws_fe_ope_solicitud_id_comparador'));
	$criterio->add('vta_factura_ws_fe_ope_solicitud.codigo', Gral::getVars(1, 'buscador_vta_factura_ws_fe_ope_solicitud_codigo'), Gral::getVars(1, 'buscador_vta_factura_ws_fe_ope_solicitud_codigo_comparador'));
	$criterio->add('vta_factura_ws_fe_ope_solicitud.observacion', Gral::getVars(1, 'buscador_vta_factura_ws_fe_ope_solicitud_observacion'), Gral::getVars(1, 'buscador_vta_factura_ws_fe_ope_solicitud_observacion_comparador'));
	$criterio->add('vta_factura_ws_fe_ope_solicitud.estado', Gral::getVars(1, 'buscador_vta_factura_ws_fe_ope_solicitud_estado'), Gral::getVars(1, 'buscador_vta_factura_ws_fe_ope_solicitud_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_factura_ws_fe_ope_solicitud');
		$criterio->setCriterios();		
}
?>

