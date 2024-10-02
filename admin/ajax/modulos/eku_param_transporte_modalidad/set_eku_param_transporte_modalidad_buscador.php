<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamTransporteModalidad::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_transporte_modalidad.id', Gral::getVars(1, 'buscador_eku_param_transporte_modalidad_id'), Gral::getVars(1, 'buscador_eku_param_transporte_modalidad_id_comparador'));
	$criterio->add('eku_param_transporte_modalidad.descripcion', Gral::getVars(1, 'buscador_eku_param_transporte_modalidad_descripcion'), Gral::getVars(1, 'buscador_eku_param_transporte_modalidad_descripcion_comparador'));
	$criterio->add('eku_param_transporte_modalidad.codigo', Gral::getVars(1, 'buscador_eku_param_transporte_modalidad_codigo'), Gral::getVars(1, 'buscador_eku_param_transporte_modalidad_codigo_comparador'));
	$criterio->add('eku_param_transporte_modalidad.codigo_eku', Gral::getVars(1, 'buscador_eku_param_transporte_modalidad_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_transporte_modalidad_codigo_eku_comparador'));
	$criterio->add('eku_param_transporte_modalidad.observacion', Gral::getVars(1, 'buscador_eku_param_transporte_modalidad_observacion'), Gral::getVars(1, 'buscador_eku_param_transporte_modalidad_observacion_comparador'));
	$criterio->add('eku_param_transporte_modalidad.estado', Gral::getVars(1, 'buscador_eku_param_transporte_modalidad_estado'), Gral::getVars(1, 'buscador_eku_param_transporte_modalidad_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_transporte_modalidad');
		$criterio->setCriterios();		
}
?>

