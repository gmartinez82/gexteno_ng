<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralTipoDocumentoWsFeParamTipoDocumento::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_tipo_documento_ws_fe_param_tipo_documento.id', Gral::getVars(1, 'buscador_gral_tipo_documento_ws_fe_param_tipo_documento_id'), Gral::getVars(1, 'buscador_gral_tipo_documento_ws_fe_param_tipo_documento_id_comparador'));
	$criterio->add('gral_tipo_documento_ws_fe_param_tipo_documento.descripcion', Gral::getVars(1, 'buscador_gral_tipo_documento_ws_fe_param_tipo_documento_descripcion'), Gral::getVars(1, 'buscador_gral_tipo_documento_ws_fe_param_tipo_documento_descripcion_comparador'));
	$criterio->add('gral_tipo_documento_ws_fe_param_tipo_documento.gral_tipo_documento_id', Gral::getVars(1, 'buscador_gral_tipo_documento_ws_fe_param_tipo_documento_gral_tipo_documento_id'), Gral::getVars(1, 'buscador_gral_tipo_documento_ws_fe_param_tipo_documento_gral_tipo_documento_id_comparador'));
	$criterio->add('gral_tipo_documento_ws_fe_param_tipo_documento.ws_fe_param_tipo_documento_id', Gral::getVars(1, 'buscador_gral_tipo_documento_ws_fe_param_tipo_documento_ws_fe_param_tipo_documento_id'), Gral::getVars(1, 'buscador_gral_tipo_documento_ws_fe_param_tipo_documento_ws_fe_param_tipo_documento_id_comparador'));
	$criterio->add('gral_tipo_documento_ws_fe_param_tipo_documento.codigo', Gral::getVars(1, 'buscador_gral_tipo_documento_ws_fe_param_tipo_documento_codigo'), Gral::getVars(1, 'buscador_gral_tipo_documento_ws_fe_param_tipo_documento_codigo_comparador'));
	$criterio->add('gral_tipo_documento_ws_fe_param_tipo_documento.observacion', Gral::getVars(1, 'buscador_gral_tipo_documento_ws_fe_param_tipo_documento_observacion'), Gral::getVars(1, 'buscador_gral_tipo_documento_ws_fe_param_tipo_documento_observacion_comparador'));
	$criterio->add('gral_tipo_documento_ws_fe_param_tipo_documento.estado', Gral::getVars(1, 'buscador_gral_tipo_documento_ws_fe_param_tipo_documento_estado'), Gral::getVars(1, 'buscador_gral_tipo_documento_ws_fe_param_tipo_documento_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_tipo_documento_ws_fe_param_tipo_documento');
		$criterio->setCriterios();		
}
?>

