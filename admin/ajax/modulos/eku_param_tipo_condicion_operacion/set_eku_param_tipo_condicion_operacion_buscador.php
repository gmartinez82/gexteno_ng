<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamTipoCondicionOperacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_tipo_condicion_operacion.id', Gral::getVars(1, 'buscador_eku_param_tipo_condicion_operacion_id'), Gral::getVars(1, 'buscador_eku_param_tipo_condicion_operacion_id_comparador'));
	$criterio->add('eku_param_tipo_condicion_operacion.descripcion', Gral::getVars(1, 'buscador_eku_param_tipo_condicion_operacion_descripcion'), Gral::getVars(1, 'buscador_eku_param_tipo_condicion_operacion_descripcion_comparador'));
	$criterio->add('eku_param_tipo_condicion_operacion.codigo', Gral::getVars(1, 'buscador_eku_param_tipo_condicion_operacion_codigo'), Gral::getVars(1, 'buscador_eku_param_tipo_condicion_operacion_codigo_comparador'));
	$criterio->add('eku_param_tipo_condicion_operacion.codigo_eku', Gral::getVars(1, 'buscador_eku_param_tipo_condicion_operacion_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_tipo_condicion_operacion_codigo_eku_comparador'));
	$criterio->add('eku_param_tipo_condicion_operacion.observacion', Gral::getVars(1, 'buscador_eku_param_tipo_condicion_operacion_observacion'), Gral::getVars(1, 'buscador_eku_param_tipo_condicion_operacion_observacion_comparador'));
	$criterio->add('eku_param_tipo_condicion_operacion.estado', Gral::getVars(1, 'buscador_eku_param_tipo_condicion_operacion_estado'), Gral::getVars(1, 'buscador_eku_param_tipo_condicion_operacion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('eku_param_tipo_condicion_operacion_gral_fp_forma_pago', 'eku_param_tipo_condicion_operacion_gral_fp_forma_pago.eku_param_tipo_condicion_operacion_id', 'eku_param_tipo_condicion_operacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'eku_param_tipo_condicion_operacion_gral_fp_forma_pago.gral_fp_forma_pago_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_tipo_condicion_operacion');
		$criterio->setCriterios();		
}
?>

