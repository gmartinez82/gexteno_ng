<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrdParamOperacionOpeOperario::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prd_param_operacion_ope_operario.id', Gral::getVars(1, 'buscador_prd_param_operacion_ope_operario_id'), Gral::getVars(1, 'buscador_prd_param_operacion_ope_operario_id_comparador'));
	$criterio->add('prd_param_operacion_ope_operario.prd_param_operacion_id', Gral::getVars(1, 'buscador_prd_param_operacion_ope_operario_prd_param_operacion_id'), Gral::getVars(1, 'buscador_prd_param_operacion_ope_operario_prd_param_operacion_id_comparador'));
	$criterio->add('prd_param_operacion_ope_operario.ope_operario_id', Gral::getVars(1, 'buscador_prd_param_operacion_ope_operario_ope_operario_id'), Gral::getVars(1, 'buscador_prd_param_operacion_ope_operario_ope_operario_id_comparador'));
	$criterio->add('prd_param_operacion_ope_operario.codigo', Gral::getVars(1, 'buscador_prd_param_operacion_ope_operario_codigo'), Gral::getVars(1, 'buscador_prd_param_operacion_ope_operario_codigo_comparador'));
	$criterio->add('prd_param_operacion_ope_operario.observacion', Gral::getVars(1, 'buscador_prd_param_operacion_ope_operario_observacion'), Gral::getVars(1, 'buscador_prd_param_operacion_ope_operario_observacion_comparador'));
	$criterio->add('prd_param_operacion_ope_operario.estado', Gral::getVars(1, 'buscador_prd_param_operacion_ope_operario_estado'), Gral::getVars(1, 'buscador_prd_param_operacion_ope_operario_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prd_param_operacion_ope_operario');
		$criterio->setCriterios();		
}
?>

