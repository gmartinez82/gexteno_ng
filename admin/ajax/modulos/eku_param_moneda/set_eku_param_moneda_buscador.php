<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamMoneda::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_moneda.id', Gral::getVars(1, 'buscador_eku_param_moneda_id'), Gral::getVars(1, 'buscador_eku_param_moneda_id_comparador'));
	$criterio->add('eku_param_moneda.descripcion', Gral::getVars(1, 'buscador_eku_param_moneda_descripcion'), Gral::getVars(1, 'buscador_eku_param_moneda_descripcion_comparador'));
	$criterio->add('eku_param_moneda.codigo', Gral::getVars(1, 'buscador_eku_param_moneda_codigo'), Gral::getVars(1, 'buscador_eku_param_moneda_codigo_comparador'));
	$criterio->add('eku_param_moneda.codigo_eku', Gral::getVars(1, 'buscador_eku_param_moneda_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_moneda_codigo_eku_comparador'));
	$criterio->add('eku_param_moneda.observacion', Gral::getVars(1, 'buscador_eku_param_moneda_observacion'), Gral::getVars(1, 'buscador_eku_param_moneda_observacion_comparador'));
	$criterio->add('eku_param_moneda.estado', Gral::getVars(1, 'buscador_eku_param_moneda_estado'), Gral::getVars(1, 'buscador_eku_param_moneda_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_moneda');
		$criterio->setCriterios();		
}
?>

