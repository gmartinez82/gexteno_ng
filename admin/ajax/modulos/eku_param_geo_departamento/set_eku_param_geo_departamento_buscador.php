<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamGeoDepartamento::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_geo_departamento.id', Gral::getVars(1, 'buscador_eku_param_geo_departamento_id'), Gral::getVars(1, 'buscador_eku_param_geo_departamento_id_comparador'));
	$criterio->add('eku_param_geo_departamento.descripcion', Gral::getVars(1, 'buscador_eku_param_geo_departamento_descripcion'), Gral::getVars(1, 'buscador_eku_param_geo_departamento_descripcion_comparador'));
	$criterio->add('eku_param_geo_departamento.codigo', Gral::getVars(1, 'buscador_eku_param_geo_departamento_codigo'), Gral::getVars(1, 'buscador_eku_param_geo_departamento_codigo_comparador'));
	$criterio->add('eku_param_geo_departamento.codigo_eku', Gral::getVars(1, 'buscador_eku_param_geo_departamento_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_geo_departamento_codigo_eku_comparador'));
	$criterio->add('eku_param_geo_departamento.observacion', Gral::getVars(1, 'buscador_eku_param_geo_departamento_observacion'), Gral::getVars(1, 'buscador_eku_param_geo_departamento_observacion_comparador'));
	$criterio->add('eku_param_geo_departamento.estado', Gral::getVars(1, 'buscador_eku_param_geo_departamento_estado'), Gral::getVars(1, 'buscador_eku_param_geo_departamento_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_geo_departamento');
		$criterio->setCriterios();		
}
?>

