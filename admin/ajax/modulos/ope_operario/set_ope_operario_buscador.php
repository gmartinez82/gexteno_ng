<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(OpeOperario::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ope_operario.id', Gral::getVars(1, 'buscador_ope_operario_id'), Gral::getVars(1, 'buscador_ope_operario_id_comparador'));
	$criterio->add('ope_operario.descripcion', Gral::getVars(1, 'buscador_ope_operario_descripcion'), Gral::getVars(1, 'buscador_ope_operario_descripcion_comparador'));
	$criterio->add('ope_operario.per_persona_id', Gral::getVars(1, 'buscador_ope_operario_per_persona_id'), Gral::getVars(1, 'buscador_ope_operario_per_persona_id_comparador'));
	$criterio->add('ope_operario.codigo', Gral::getVars(1, 'buscador_ope_operario_codigo'), Gral::getVars(1, 'buscador_ope_operario_codigo_comparador'));
	$criterio->add('ope_operario.observacion', Gral::getVars(1, 'buscador_ope_operario_observacion'), Gral::getVars(1, 'buscador_ope_operario_observacion_comparador'));
	$criterio->add('ope_operario.estado', Gral::getVars(1, 'buscador_ope_operario_estado'), Gral::getVars(1, 'buscador_ope_operario_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('prd_orden_trabajo_operacion_ope_operario', 'prd_orden_trabajo_operacion_ope_operario.ope_operario_id', 'ope_operario.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_orden_trabajo_operacion', 'prd_orden_trabajo_operacion.id', 'prd_orden_trabajo_operacion_ope_operario.prd_orden_trabajo_operacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_param_operacion_ope_operario', 'prd_param_operacion_ope_operario.ope_operario_id', 'ope_operario.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_param_operacion', 'prd_param_operacion.id', 'prd_param_operacion_ope_operario.prd_param_operacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('ope_operario_us_usuario', 'ope_operario_us_usuario.ope_operario_id', 'ope_operario.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'ope_operario_us_usuario.us_usuario_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ope_operario');
		$criterio->setCriterios();		
}
?>

