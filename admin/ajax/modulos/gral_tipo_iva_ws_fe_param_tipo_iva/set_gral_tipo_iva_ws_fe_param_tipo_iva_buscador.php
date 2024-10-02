<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralTipoIvaWsFeParamTipoIva::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_tipo_iva_ws_fe_param_tipo_iva.id', Gral::getVars(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_id'), Gral::getVars(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_id_comparador'));
	$criterio->add('gral_tipo_iva_ws_fe_param_tipo_iva.descripcion', Gral::getVars(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_descripcion'), Gral::getVars(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_descripcion_comparador'));
	$criterio->add('gral_tipo_iva_ws_fe_param_tipo_iva.gral_tipo_iva_id', Gral::getVars(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_gral_tipo_iva_id'), Gral::getVars(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_gral_tipo_iva_id_comparador'));
	$criterio->add('gral_tipo_iva_ws_fe_param_tipo_iva.ws_fe_param_tipo_iva_id', Gral::getVars(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_ws_fe_param_tipo_iva_id'), Gral::getVars(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_ws_fe_param_tipo_iva_id_comparador'));
	$criterio->add('gral_tipo_iva_ws_fe_param_tipo_iva.codigo', Gral::getVars(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_codigo'), Gral::getVars(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_codigo_comparador'));
	$criterio->add('gral_tipo_iva_ws_fe_param_tipo_iva.observacion', Gral::getVars(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_observacion'), Gral::getVars(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_observacion_comparador'));
	$criterio->add('gral_tipo_iva_ws_fe_param_tipo_iva.estado', Gral::getVars(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_estado'), Gral::getVars(1, 'buscador_gral_tipo_iva_ws_fe_param_tipo_iva_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_tipo_iva_ws_fe_param_tipo_iva');
		$criterio->setCriterios();		
}
?>

