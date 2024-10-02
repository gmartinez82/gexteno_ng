<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamTipoConstancia::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_tipo_constancia.id', Gral::getVars(1, 'buscador_eku_param_tipo_constancia_id'), Gral::getVars(1, 'buscador_eku_param_tipo_constancia_id_comparador'));
	$criterio->add('eku_param_tipo_constancia.descripcion', Gral::getVars(1, 'buscador_eku_param_tipo_constancia_descripcion'), Gral::getVars(1, 'buscador_eku_param_tipo_constancia_descripcion_comparador'));
	$criterio->add('eku_param_tipo_constancia.codigo', Gral::getVars(1, 'buscador_eku_param_tipo_constancia_codigo'), Gral::getVars(1, 'buscador_eku_param_tipo_constancia_codigo_comparador'));
	$criterio->add('eku_param_tipo_constancia.codigo_eku', Gral::getVars(1, 'buscador_eku_param_tipo_constancia_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_tipo_constancia_codigo_eku_comparador'));
	$criterio->add('eku_param_tipo_constancia.observacion', Gral::getVars(1, 'buscador_eku_param_tipo_constancia_observacion'), Gral::getVars(1, 'buscador_eku_param_tipo_constancia_observacion_comparador'));
	$criterio->add('eku_param_tipo_constancia.estado', Gral::getVars(1, 'buscador_eku_param_tipo_constancia_estado'), Gral::getVars(1, 'buscador_eku_param_tipo_constancia_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_tipo_constancia');
		$criterio->setCriterios();		
}
?>

