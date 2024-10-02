<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamTipoDocumentoImpreso::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_tipo_documento_impreso.id', Gral::getVars(1, 'buscador_eku_param_tipo_documento_impreso_id'), Gral::getVars(1, 'buscador_eku_param_tipo_documento_impreso_id_comparador'));
	$criterio->add('eku_param_tipo_documento_impreso.descripcion', Gral::getVars(1, 'buscador_eku_param_tipo_documento_impreso_descripcion'), Gral::getVars(1, 'buscador_eku_param_tipo_documento_impreso_descripcion_comparador'));
	$criterio->add('eku_param_tipo_documento_impreso.codigo', Gral::getVars(1, 'buscador_eku_param_tipo_documento_impreso_codigo'), Gral::getVars(1, 'buscador_eku_param_tipo_documento_impreso_codigo_comparador'));
	$criterio->add('eku_param_tipo_documento_impreso.codigo_eku', Gral::getVars(1, 'buscador_eku_param_tipo_documento_impreso_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_tipo_documento_impreso_codigo_eku_comparador'));
	$criterio->add('eku_param_tipo_documento_impreso.observacion', Gral::getVars(1, 'buscador_eku_param_tipo_documento_impreso_observacion'), Gral::getVars(1, 'buscador_eku_param_tipo_documento_impreso_observacion_comparador'));
	$criterio->add('eku_param_tipo_documento_impreso.estado', Gral::getVars(1, 'buscador_eku_param_tipo_documento_impreso_estado'), Gral::getVars(1, 'buscador_eku_param_tipo_documento_impreso_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_tipo_documento_impreso');
		$criterio->setCriterios();		
}
?>

