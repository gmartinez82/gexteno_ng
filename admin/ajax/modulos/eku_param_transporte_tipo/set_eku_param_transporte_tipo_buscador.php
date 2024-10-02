<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamTransporteTipo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_transporte_tipo.id', Gral::getVars(1, 'buscador_eku_param_transporte_tipo_id'), Gral::getVars(1, 'buscador_eku_param_transporte_tipo_id_comparador'));
	$criterio->add('eku_param_transporte_tipo.descripcion', Gral::getVars(1, 'buscador_eku_param_transporte_tipo_descripcion'), Gral::getVars(1, 'buscador_eku_param_transporte_tipo_descripcion_comparador'));
	$criterio->add('eku_param_transporte_tipo.codigo', Gral::getVars(1, 'buscador_eku_param_transporte_tipo_codigo'), Gral::getVars(1, 'buscador_eku_param_transporte_tipo_codigo_comparador'));
	$criterio->add('eku_param_transporte_tipo.codigo_eku', Gral::getVars(1, 'buscador_eku_param_transporte_tipo_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_transporte_tipo_codigo_eku_comparador'));
	$criterio->add('eku_param_transporte_tipo.observacion', Gral::getVars(1, 'buscador_eku_param_transporte_tipo_observacion'), Gral::getVars(1, 'buscador_eku_param_transporte_tipo_observacion_comparador'));
	$criterio->add('eku_param_transporte_tipo.estado', Gral::getVars(1, 'buscador_eku_param_transporte_tipo_estado'), Gral::getVars(1, 'buscador_eku_param_transporte_tipo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_transporte_tipo');
		$criterio->setCriterios();		
}
?>

