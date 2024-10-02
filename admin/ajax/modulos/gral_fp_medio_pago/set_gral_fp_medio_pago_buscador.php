<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralFpMedioPago::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_fp_medio_pago.id', Gral::getVars(1, 'buscador_gral_fp_medio_pago_id'), Gral::getVars(1, 'buscador_gral_fp_medio_pago_id_comparador'));
	$criterio->add('gral_fp_medio_pago.descripcion', Gral::getVars(1, 'buscador_gral_fp_medio_pago_descripcion'), Gral::getVars(1, 'buscador_gral_fp_medio_pago_descripcion_comparador'));
	$criterio->add('gral_fp_medio_pago.gral_fp_forma_pago_id', Gral::getVars(1, 'buscador_gral_fp_medio_pago_gral_fp_forma_pago_id'), Gral::getVars(1, 'buscador_gral_fp_medio_pago_gral_fp_forma_pago_id_comparador'));
	$criterio->add('gral_fp_medio_pago.codigo', Gral::getVars(1, 'buscador_gral_fp_medio_pago_codigo'), Gral::getVars(1, 'buscador_gral_fp_medio_pago_codigo_comparador'));
	$criterio->add('gral_fp_medio_pago.observacion', Gral::getVars(1, 'buscador_gral_fp_medio_pago_observacion'), Gral::getVars(1, 'buscador_gral_fp_medio_pago_observacion_comparador'));
	$criterio->add('gral_fp_medio_pago.estado', Gral::getVars(1, 'buscador_gral_fp_medio_pago_estado'), Gral::getVars(1, 'buscador_gral_fp_medio_pago_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_fp_cuota', 'gral_fp_cuota.gral_fp_medio_pago_id', 'gral_fp_medio_pago.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_fp_medio_pago');
		$criterio->setCriterios();		
}
?>

