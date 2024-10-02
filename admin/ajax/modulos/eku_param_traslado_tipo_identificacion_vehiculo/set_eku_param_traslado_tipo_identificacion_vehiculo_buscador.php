<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamTrasladoTipoIdentificacionVehiculo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_traslado_tipo_identificacion_vehiculo.id', Gral::getVars(1, 'buscador_eku_param_traslado_tipo_identificacion_vehiculo_id'), Gral::getVars(1, 'buscador_eku_param_traslado_tipo_identificacion_vehiculo_id_comparador'));
	$criterio->add('eku_param_traslado_tipo_identificacion_vehiculo.descripcion', Gral::getVars(1, 'buscador_eku_param_traslado_tipo_identificacion_vehiculo_descripcion'), Gral::getVars(1, 'buscador_eku_param_traslado_tipo_identificacion_vehiculo_descripcion_comparador'));
	$criterio->add('eku_param_traslado_tipo_identificacion_vehiculo.codigo', Gral::getVars(1, 'buscador_eku_param_traslado_tipo_identificacion_vehiculo_codigo'), Gral::getVars(1, 'buscador_eku_param_traslado_tipo_identificacion_vehiculo_codigo_comparador'));
	$criterio->add('eku_param_traslado_tipo_identificacion_vehiculo.codigo_eku', Gral::getVars(1, 'buscador_eku_param_traslado_tipo_identificacion_vehiculo_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_traslado_tipo_identificacion_vehiculo_codigo_eku_comparador'));
	$criterio->add('eku_param_traslado_tipo_identificacion_vehiculo.observacion', Gral::getVars(1, 'buscador_eku_param_traslado_tipo_identificacion_vehiculo_observacion'), Gral::getVars(1, 'buscador_eku_param_traslado_tipo_identificacion_vehiculo_observacion_comparador'));
	$criterio->add('eku_param_traslado_tipo_identificacion_vehiculo.estado', Gral::getVars(1, 'buscador_eku_param_traslado_tipo_identificacion_vehiculo_estado'), Gral::getVars(1, 'buscador_eku_param_traslado_tipo_identificacion_vehiculo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_traslado_tipo_identificacion_vehiculo');
		$criterio->setCriterios();		
}
?>

