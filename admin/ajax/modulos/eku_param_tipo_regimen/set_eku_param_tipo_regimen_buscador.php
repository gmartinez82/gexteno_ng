<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamTipoRegimen::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_tipo_regimen.id', Gral::getVars(1, 'buscador_eku_param_tipo_regimen_id'), Gral::getVars(1, 'buscador_eku_param_tipo_regimen_id_comparador'));
	$criterio->add('eku_param_tipo_regimen.descripcion', Gral::getVars(1, 'buscador_eku_param_tipo_regimen_descripcion'), Gral::getVars(1, 'buscador_eku_param_tipo_regimen_descripcion_comparador'));
	$criterio->add('eku_param_tipo_regimen.codigo', Gral::getVars(1, 'buscador_eku_param_tipo_regimen_codigo'), Gral::getVars(1, 'buscador_eku_param_tipo_regimen_codigo_comparador'));
	$criterio->add('eku_param_tipo_regimen.codigo_eku', Gral::getVars(1, 'buscador_eku_param_tipo_regimen_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_tipo_regimen_codigo_eku_comparador'));
	$criterio->add('eku_param_tipo_regimen.observacion', Gral::getVars(1, 'buscador_eku_param_tipo_regimen_observacion'), Gral::getVars(1, 'buscador_eku_param_tipo_regimen_observacion_comparador'));
	$criterio->add('eku_param_tipo_regimen.estado', Gral::getVars(1, 'buscador_eku_param_tipo_regimen_estado'), Gral::getVars(1, 'buscador_eku_param_tipo_regimen_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_tipo_regimen');
		$criterio->setCriterios();		
}
?>

