<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamTipoTransaccion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_tipo_transaccion.id', Gral::getVars(1, 'buscador_eku_param_tipo_transaccion_id'), Gral::getVars(1, 'buscador_eku_param_tipo_transaccion_id_comparador'));
	$criterio->add('eku_param_tipo_transaccion.descripcion', Gral::getVars(1, 'buscador_eku_param_tipo_transaccion_descripcion'), Gral::getVars(1, 'buscador_eku_param_tipo_transaccion_descripcion_comparador'));
	$criterio->add('eku_param_tipo_transaccion.codigo', Gral::getVars(1, 'buscador_eku_param_tipo_transaccion_codigo'), Gral::getVars(1, 'buscador_eku_param_tipo_transaccion_codigo_comparador'));
	$criterio->add('eku_param_tipo_transaccion.codigo_eku', Gral::getVars(1, 'buscador_eku_param_tipo_transaccion_codigo_eku'), Gral::getVars(1, 'buscador_eku_param_tipo_transaccion_codigo_eku_comparador'));
	$criterio->add('eku_param_tipo_transaccion.observacion', Gral::getVars(1, 'buscador_eku_param_tipo_transaccion_observacion'), Gral::getVars(1, 'buscador_eku_param_tipo_transaccion_observacion_comparador'));
	$criterio->add('eku_param_tipo_transaccion.estado', Gral::getVars(1, 'buscador_eku_param_tipo_transaccion_estado'), Gral::getVars(1, 'buscador_eku_param_tipo_transaccion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_tipo_transaccion');
		$criterio->setCriterios();		
}
?>

