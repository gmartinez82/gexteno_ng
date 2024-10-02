<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamCondicionTipoCambio::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_condicion_tipo_cambio.id', Gral::getVars(1, 'buscador_eku_param_condicion_tipo_cambio_id'), Gral::getVars(1, 'buscador_eku_param_condicion_tipo_cambio_id_comparador'));
	$criterio->add('eku_param_condicion_tipo_cambio.descripcion', Gral::getVars(1, 'buscador_eku_param_condicion_tipo_cambio_descripcion'), Gral::getVars(1, 'buscador_eku_param_condicion_tipo_cambio_descripcion_comparador'));
	$criterio->add('eku_param_condicion_tipo_cambio.codigo', Gral::getVars(1, 'buscador_eku_param_condicion_tipo_cambio_codigo'), Gral::getVars(1, 'buscador_eku_param_condicion_tipo_cambio_codigo_comparador'));
	$criterio->add('eku_param_condicion_tipo_cambio.codigo_eku', Gral::getVars(1, 'buscador_eku_param_condicion_tipo_cambio_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_condicion_tipo_cambio_codigo_eku_comparador'));
	$criterio->add('eku_param_condicion_tipo_cambio.observacion', Gral::getVars(1, 'buscador_eku_param_condicion_tipo_cambio_observacion'), Gral::getVars(1, 'buscador_eku_param_condicion_tipo_cambio_observacion_comparador'));
	$criterio->add('eku_param_condicion_tipo_cambio.estado', Gral::getVars(1, 'buscador_eku_param_condicion_tipo_cambio_estado'), Gral::getVars(1, 'buscador_eku_param_condicion_tipo_cambio_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_condicion_tipo_cambio');
		$criterio->setCriterios();		
}
?>

