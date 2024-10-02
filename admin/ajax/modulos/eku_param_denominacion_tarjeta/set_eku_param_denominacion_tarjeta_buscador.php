<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamDenominacionTarjeta::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_denominacion_tarjeta.id', Gral::getVars(1, 'buscador_eku_param_denominacion_tarjeta_id'), Gral::getVars(1, 'buscador_eku_param_denominacion_tarjeta_id_comparador'));
	$criterio->add('eku_param_denominacion_tarjeta.descripcion', Gral::getVars(1, 'buscador_eku_param_denominacion_tarjeta_descripcion'), Gral::getVars(1, 'buscador_eku_param_denominacion_tarjeta_descripcion_comparador'));
	$criterio->add('eku_param_denominacion_tarjeta.codigo', Gral::getVars(1, 'buscador_eku_param_denominacion_tarjeta_codigo'), Gral::getVars(1, 'buscador_eku_param_denominacion_tarjeta_codigo_comparador'));
	$criterio->add('eku_param_denominacion_tarjeta.codigo_eku', Gral::getVars(1, 'buscador_eku_param_denominacion_tarjeta_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_denominacion_tarjeta_codigo_eku_comparador'));
	$criterio->add('eku_param_denominacion_tarjeta.observacion', Gral::getVars(1, 'buscador_eku_param_denominacion_tarjeta_observacion'), Gral::getVars(1, 'buscador_eku_param_denominacion_tarjeta_observacion_comparador'));
	$criterio->add('eku_param_denominacion_tarjeta.estado', Gral::getVars(1, 'buscador_eku_param_denominacion_tarjeta_estado'), Gral::getVars(1, 'buscador_eku_param_denominacion_tarjeta_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('eku_param_denominacion_tarjeta_gral_fp_medio_pago', 'eku_param_denominacion_tarjeta_gral_fp_medio_pago.eku_param_denominacion_tarjeta_id', 'eku_param_denominacion_tarjeta.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_fp_medio_pago', 'gral_fp_medio_pago.id', 'eku_param_denominacion_tarjeta_gral_fp_medio_pago.gral_fp_medio_pago_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_denominacion_tarjeta');
		$criterio->setCriterios();		
}
?>

