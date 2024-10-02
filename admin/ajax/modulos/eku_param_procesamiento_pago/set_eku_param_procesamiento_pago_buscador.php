<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamProcesamientoPago::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_procesamiento_pago.id', Gral::getVars(1, 'buscador_eku_param_procesamiento_pago_id'), Gral::getVars(1, 'buscador_eku_param_procesamiento_pago_id_comparador'));
	$criterio->add('eku_param_procesamiento_pago.descripcion', Gral::getVars(1, 'buscador_eku_param_procesamiento_pago_descripcion'), Gral::getVars(1, 'buscador_eku_param_procesamiento_pago_descripcion_comparador'));
	$criterio->add('eku_param_procesamiento_pago.codigo', Gral::getVars(1, 'buscador_eku_param_procesamiento_pago_codigo'), Gral::getVars(1, 'buscador_eku_param_procesamiento_pago_codigo_comparador'));
	$criterio->add('eku_param_procesamiento_pago.codigo_eku', Gral::getVars(1, 'buscador_eku_param_procesamiento_pago_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_procesamiento_pago_codigo_eku_comparador'));
	$criterio->add('eku_param_procesamiento_pago.observacion', Gral::getVars(1, 'buscador_eku_param_procesamiento_pago_observacion'), Gral::getVars(1, 'buscador_eku_param_procesamiento_pago_observacion_comparador'));
	$criterio->add('eku_param_procesamiento_pago.estado', Gral::getVars(1, 'buscador_eku_param_procesamiento_pago_estado'), Gral::getVars(1, 'buscador_eku_param_procesamiento_pago_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_procesamiento_pago');
		$criterio->setCriterios();		
}
?>

