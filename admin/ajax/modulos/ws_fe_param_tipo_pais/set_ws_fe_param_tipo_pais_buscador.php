<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(WsFeParamTipoPais::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ws_fe_param_tipo_pais.id', Gral::getVars(1, 'buscador_ws_fe_param_tipo_pais_id'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_pais_id_comparador'));
	$criterio->add('ws_fe_param_tipo_pais.descripcion', Gral::getVars(1, 'buscador_ws_fe_param_tipo_pais_descripcion'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_pais_descripcion_comparador'));
	$criterio->add('ws_fe_param_tipo_pais.codigo', Gral::getVars(1, 'buscador_ws_fe_param_tipo_pais_codigo'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_pais_codigo_comparador'));
	$criterio->add('ws_fe_param_tipo_pais.codigo_afip', Gral::getVars(1, 'buscador_ws_fe_param_tipo_pais_codigo_afip'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_pais_codigo_afip_comparador'));
	$criterio->add('ws_fe_param_tipo_pais.observacion', Gral::getVars(1, 'buscador_ws_fe_param_tipo_pais_observacion'), Gral::getVars(1, 'buscador_ws_fe_param_tipo_pais_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ws_fe_param_tipo_pais');
		$criterio->setCriterios();		
}
?>

