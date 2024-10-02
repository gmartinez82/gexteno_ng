<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamTipoNaturalezaReceptor::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_tipo_naturaleza_receptor.id', Gral::getVars(1, 'buscador_eku_param_tipo_naturaleza_receptor_id'), Gral::getVars(1, 'buscador_eku_param_tipo_naturaleza_receptor_id_comparador'));
	$criterio->add('eku_param_tipo_naturaleza_receptor.descripcion', Gral::getVars(1, 'buscador_eku_param_tipo_naturaleza_receptor_descripcion'), Gral::getVars(1, 'buscador_eku_param_tipo_naturaleza_receptor_descripcion_comparador'));
	$criterio->add('eku_param_tipo_naturaleza_receptor.codigo', Gral::getVars(1, 'buscador_eku_param_tipo_naturaleza_receptor_codigo'), Gral::getVars(1, 'buscador_eku_param_tipo_naturaleza_receptor_codigo_comparador'));
	$criterio->add('eku_param_tipo_naturaleza_receptor.codigo_eku', Gral::getVars(1, 'buscador_eku_param_tipo_naturaleza_receptor_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_tipo_naturaleza_receptor_codigo_eku_comparador'));
	$criterio->add('eku_param_tipo_naturaleza_receptor.observacion', Gral::getVars(1, 'buscador_eku_param_tipo_naturaleza_receptor_observacion'), Gral::getVars(1, 'buscador_eku_param_tipo_naturaleza_receptor_observacion_comparador'));
	$criterio->add('eku_param_tipo_naturaleza_receptor.estado', Gral::getVars(1, 'buscador_eku_param_tipo_naturaleza_receptor_estado'), Gral::getVars(1, 'buscador_eku_param_tipo_naturaleza_receptor_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('eku_param_tipo_naturaleza_receptor_gral_condicion_iva', 'eku_param_tipo_naturaleza_receptor_gral_condicion_iva.eku_param_tipo_naturaleza_receptor_id', 'eku_param_tipo_naturaleza_receptor.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'eku_param_tipo_naturaleza_receptor_gral_condicion_iva.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_tipo_naturaleza_receptor');
		$criterio->setCriterios();		
}
?>

