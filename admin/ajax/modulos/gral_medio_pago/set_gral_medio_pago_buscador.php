<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralMedioPago::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_medio_pago.id', Gral::getVars(1, 'buscador_gral_medio_pago_id'), Gral::getVars(1, 'buscador_gral_medio_pago_id_comparador'));
	$criterio->add('gral_medio_pago.descripcion', Gral::getVars(1, 'buscador_gral_medio_pago_descripcion'), Gral::getVars(1, 'buscador_gral_medio_pago_descripcion_comparador'));
	$criterio->add('gral_medio_pago.codigo', Gral::getVars(1, 'buscador_gral_medio_pago_codigo'), Gral::getVars(1, 'buscador_gral_medio_pago_codigo_comparador'));
	$criterio->add('gral_medio_pago.mueve_caja', Gral::getVars(1, 'buscador_gral_medio_pago_mueve_caja'), Gral::getVars(1, 'buscador_gral_medio_pago_mueve_caja_comparador'));
	$criterio->add('gral_medio_pago.realiza_pago', Gral::getVars(1, 'buscador_gral_medio_pago_realiza_pago'), Gral::getVars(1, 'buscador_gral_medio_pago_realiza_pago_comparador'));
	$criterio->add('gral_medio_pago.observacion', Gral::getVars(1, 'buscador_gral_medio_pago_observacion'), Gral::getVars(1, 'buscador_gral_medio_pago_observacion_comparador'));
	$criterio->add('gral_medio_pago.estado', Gral::getVars(1, 'buscador_gral_medio_pago_estado'), Gral::getVars(1, 'buscador_gral_medio_pago_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_medio_pago');
		$criterio->setCriterios();		
}
?>

