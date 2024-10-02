<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamActividad::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_actividad.id', Gral::getVars(1, 'buscador_eku_param_actividad_id'), Gral::getVars(1, 'buscador_eku_param_actividad_id_comparador'));
	$criterio->add('eku_param_actividad.descripcion', Gral::getVars(1, 'buscador_eku_param_actividad_descripcion'), Gral::getVars(1, 'buscador_eku_param_actividad_descripcion_comparador'));
	$criterio->add('eku_param_actividad.codigo', Gral::getVars(1, 'buscador_eku_param_actividad_codigo'), Gral::getVars(1, 'buscador_eku_param_actividad_codigo_comparador'));
	$criterio->add('eku_param_actividad.codigo_eku', Gral::getVars(1, 'buscador_eku_param_actividad_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_actividad_codigo_eku_comparador'));
	$criterio->add('eku_param_actividad.observacion', Gral::getVars(1, 'buscador_eku_param_actividad_observacion'), Gral::getVars(1, 'buscador_eku_param_actividad_observacion_comparador'));
	$criterio->add('eku_param_actividad.estado', Gral::getVars(1, 'buscador_eku_param_actividad_estado'), Gral::getVars(1, 'buscador_eku_param_actividad_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_actividad');
		$criterio->setCriterios();		
}
?>

