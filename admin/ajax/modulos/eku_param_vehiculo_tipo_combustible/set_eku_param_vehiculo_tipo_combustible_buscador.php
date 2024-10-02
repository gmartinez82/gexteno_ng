<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamVehiculoTipoCombustible::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_vehiculo_tipo_combustible.id', Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_combustible_id'), Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_combustible_id_comparador'));
	$criterio->add('eku_param_vehiculo_tipo_combustible.descripcion', Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_combustible_descripcion'), Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_combustible_descripcion_comparador'));
	$criterio->add('eku_param_vehiculo_tipo_combustible.codigo', Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_combustible_codigo'), Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_combustible_codigo_comparador'));
	$criterio->add('eku_param_vehiculo_tipo_combustible.codigo_eku', Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_combustible_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_combustible_codigo_eku_comparador'));
	$criterio->add('eku_param_vehiculo_tipo_combustible.observacion', Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_combustible_observacion'), Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_combustible_observacion_comparador'));
	$criterio->add('eku_param_vehiculo_tipo_combustible.estado', Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_combustible_estado'), Gral::getVars(1, 'buscador_eku_param_vehiculo_tipo_combustible_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_vehiculo_tipo_combustible');
		$criterio->setCriterios();		
}
?>

