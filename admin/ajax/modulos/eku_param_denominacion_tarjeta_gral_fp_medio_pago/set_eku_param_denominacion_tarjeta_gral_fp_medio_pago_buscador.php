<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamDenominacionTarjetaGralFpMedioPago::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_denominacion_tarjeta_gral_fp_medio_pago.id', Gral::getVars(1, 'buscador_eku_param_denominacion_tarjeta_gral_fp_medio_pago_id'), Gral::getVars(1, 'buscador_eku_param_denominacion_tarjeta_gral_fp_medio_pago_id_comparador'));
	$criterio->add('eku_param_denominacion_tarjeta_gral_fp_medio_pago.eku_param_denominacion_tarjeta_id', Gral::getVars(1, 'buscador_eku_param_denominacion_tarjeta_gral_fp_medio_pago_eku_param_denominacion_tarjeta_id'), Gral::getVars(1, 'buscador_eku_param_denominacion_tarjeta_gral_fp_medio_pago_eku_param_denominacion_tarjeta_id_comparador'));
	$criterio->add('eku_param_denominacion_tarjeta_gral_fp_medio_pago.gral_fp_medio_pago_id', Gral::getVars(1, 'buscador_eku_param_denominacion_tarjeta_gral_fp_medio_pago_gral_fp_medio_pago_id'), Gral::getVars(1, 'buscador_eku_param_denominacion_tarjeta_gral_fp_medio_pago_gral_fp_medio_pago_id_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_denominacion_tarjeta_gral_fp_medio_pago');
		$criterio->setCriterios();		
}
?>

