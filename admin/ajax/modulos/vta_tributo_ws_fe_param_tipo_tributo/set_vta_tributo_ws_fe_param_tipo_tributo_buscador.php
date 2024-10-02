<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaTributoWsFeParamTipoTributo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_tributo_ws_fe_param_tipo_tributo.id', Gral::getVars(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_id'), Gral::getVars(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_id_comparador'));
	$criterio->add('vta_tributo_ws_fe_param_tipo_tributo.descripcion', Gral::getVars(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_descripcion'), Gral::getVars(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_descripcion_comparador'));
	$criterio->add('vta_tributo_ws_fe_param_tipo_tributo.vta_tributo_id', Gral::getVars(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_vta_tributo_id'), Gral::getVars(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_vta_tributo_id_comparador'));
	$criterio->add('vta_tributo_ws_fe_param_tipo_tributo.ws_fe_param_tipo_tributo_id', Gral::getVars(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_ws_fe_param_tipo_tributo_id'), Gral::getVars(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_ws_fe_param_tipo_tributo_id_comparador'));
	$criterio->add('vta_tributo_ws_fe_param_tipo_tributo.codigo', Gral::getVars(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_codigo'), Gral::getVars(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_codigo_comparador'));
	$criterio->add('vta_tributo_ws_fe_param_tipo_tributo.observacion', Gral::getVars(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_observacion'), Gral::getVars(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_observacion_comparador'));
	$criterio->add('vta_tributo_ws_fe_param_tipo_tributo.estado', Gral::getVars(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_estado'), Gral::getVars(1, 'buscador_vta_tributo_ws_fe_param_tipo_tributo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_tributo_ws_fe_param_tipo_tributo');
		$criterio->setCriterios();		
}
?>

