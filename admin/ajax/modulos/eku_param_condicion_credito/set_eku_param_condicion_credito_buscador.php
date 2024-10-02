<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamCondicionCredito::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_condicion_credito.id', Gral::getVars(1, 'buscador_eku_param_condicion_credito_id'), Gral::getVars(1, 'buscador_eku_param_condicion_credito_id_comparador'));
	$criterio->add('eku_param_condicion_credito.descripcion', Gral::getVars(1, 'buscador_eku_param_condicion_credito_descripcion'), Gral::getVars(1, 'buscador_eku_param_condicion_credito_descripcion_comparador'));
	$criterio->add('eku_param_condicion_credito.codigo', Gral::getVars(1, 'buscador_eku_param_condicion_credito_codigo'), Gral::getVars(1, 'buscador_eku_param_condicion_credito_codigo_comparador'));
	$criterio->add('eku_param_condicion_credito.codigo_eku', Gral::getVars(1, 'buscador_eku_param_condicion_credito_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_condicion_credito_codigo_eku_comparador'));
	$criterio->add('eku_param_condicion_credito.observacion', Gral::getVars(1, 'buscador_eku_param_condicion_credito_observacion'), Gral::getVars(1, 'buscador_eku_param_condicion_credito_observacion_comparador'));
	$criterio->add('eku_param_condicion_credito.estado', Gral::getVars(1, 'buscador_eku_param_condicion_credito_estado'), Gral::getVars(1, 'buscador_eku_param_condicion_credito_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('eku_param_condicion_credito_gral_fp_medio_pago', 'eku_param_condicion_credito_gral_fp_medio_pago.eku_param_condicion_credito_id', 'eku_param_condicion_credito.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_medio_pago', 'gral_fp_medio_pago.id', 'eku_param_condicion_credito_gral_fp_medio_pago.gral_fp_medio_pago_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_condicion_credito');
		$criterio->setCriterios();		
}
?>

