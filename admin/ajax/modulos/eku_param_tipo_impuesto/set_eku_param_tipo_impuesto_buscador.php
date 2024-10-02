<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamTipoImpuesto::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_tipo_impuesto.id', Gral::getVars(1, 'buscador_eku_param_tipo_impuesto_id'), Gral::getVars(1, 'buscador_eku_param_tipo_impuesto_id_comparador'));
	$criterio->add('eku_param_tipo_impuesto.descripcion', Gral::getVars(1, 'buscador_eku_param_tipo_impuesto_descripcion'), Gral::getVars(1, 'buscador_eku_param_tipo_impuesto_descripcion_comparador'));
	$criterio->add('eku_param_tipo_impuesto.codigo', Gral::getVars(1, 'buscador_eku_param_tipo_impuesto_codigo'), Gral::getVars(1, 'buscador_eku_param_tipo_impuesto_codigo_comparador'));
	$criterio->add('eku_param_tipo_impuesto.codigo_eku', Gral::getVars(1, 'buscador_eku_param_tipo_impuesto_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_tipo_impuesto_codigo_eku_comparador'));
	$criterio->add('eku_param_tipo_impuesto.observacion', Gral::getVars(1, 'buscador_eku_param_tipo_impuesto_observacion'), Gral::getVars(1, 'buscador_eku_param_tipo_impuesto_observacion_comparador'));
	$criterio->add('eku_param_tipo_impuesto.estado', Gral::getVars(1, 'buscador_eku_param_tipo_impuesto_estado'), Gral::getVars(1, 'buscador_eku_param_tipo_impuesto_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_tipo_impuesto');
		$criterio->setCriterios();		
}
?>

