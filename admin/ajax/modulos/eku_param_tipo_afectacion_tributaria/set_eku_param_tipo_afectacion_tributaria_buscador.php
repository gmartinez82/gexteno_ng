<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamTipoAfectacionTributaria::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_tipo_afectacion_tributaria.id', Gral::getVars(1, 'buscador_eku_param_tipo_afectacion_tributaria_id'), Gral::getVars(1, 'buscador_eku_param_tipo_afectacion_tributaria_id_comparador'));
	$criterio->add('eku_param_tipo_afectacion_tributaria.descripcion', Gral::getVars(1, 'buscador_eku_param_tipo_afectacion_tributaria_descripcion'), Gral::getVars(1, 'buscador_eku_param_tipo_afectacion_tributaria_descripcion_comparador'));
	$criterio->add('eku_param_tipo_afectacion_tributaria.codigo', Gral::getVars(1, 'buscador_eku_param_tipo_afectacion_tributaria_codigo'), Gral::getVars(1, 'buscador_eku_param_tipo_afectacion_tributaria_codigo_comparador'));
	$criterio->add('eku_param_tipo_afectacion_tributaria.codigo_eku', Gral::getVars(1, 'buscador_eku_param_tipo_afectacion_tributaria_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_tipo_afectacion_tributaria_codigo_eku_comparador'));
	$criterio->add('eku_param_tipo_afectacion_tributaria.observacion', Gral::getVars(1, 'buscador_eku_param_tipo_afectacion_tributaria_observacion'), Gral::getVars(1, 'buscador_eku_param_tipo_afectacion_tributaria_observacion_comparador'));
	$criterio->add('eku_param_tipo_afectacion_tributaria.estado', Gral::getVars(1, 'buscador_eku_param_tipo_afectacion_tributaria_estado'), Gral::getVars(1, 'buscador_eku_param_tipo_afectacion_tributaria_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('eku_param_tipo_afectacion_tributaria_gral_tipo_iva', 'eku_param_tipo_afectacion_tributaria_gral_tipo_iva.eku_param_tipo_afectacion_tributaria_id', 'eku_param_tipo_afectacion_tributaria.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'eku_param_tipo_afectacion_tributaria_gral_tipo_iva.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_tipo_afectacion_tributaria');
		$criterio->setCriterios();		
}
?>

