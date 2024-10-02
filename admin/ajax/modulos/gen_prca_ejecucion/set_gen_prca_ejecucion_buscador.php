<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GenPrcaEjecucion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gen_prca_ejecucion.id', Gral::getVars(1, 'buscador_gen_prca_ejecucion_id'), Gral::getVars(1, 'buscador_gen_prca_ejecucion_id_comparador'));
	$criterio->add('gen_prca_ejecucion.descripcion', Gral::getVars(1, 'buscador_gen_prca_ejecucion_descripcion'), Gral::getVars(1, 'buscador_gen_prca_ejecucion_descripcion_comparador'));
	$criterio->add('gen_prca_ejecucion.gen_api_proyecto_id', Gral::getVars(1, 'buscador_gen_prca_ejecucion_gen_api_proyecto_id'), Gral::getVars(1, 'buscador_gen_prca_ejecucion_gen_api_proyecto_id_comparador'));
	$criterio->add('gen_prca_ejecucion.gen_prca_proceso_id', Gral::getVars(1, 'buscador_gen_prca_ejecucion_gen_prca_proceso_id'), Gral::getVars(1, 'buscador_gen_prca_ejecucion_gen_prca_proceso_id_comparador'));
	$criterio->add('gen_prca_ejecucion.fechahora_inicio', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_gen_prca_ejecucion_fechahora_inicio')), Gral::getVars(1, 'buscador_gen_prca_ejecucion_fechahora_inicio_comparador'));
	$criterio->add('gen_prca_ejecucion.fechahora_fin', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_gen_prca_ejecucion_fechahora_fin')), Gral::getVars(1, 'buscador_gen_prca_ejecucion_fechahora_fin_comparador'));
	$criterio->add('gen_prca_ejecucion.iniciado', Gral::getVars(1, 'buscador_gen_prca_ejecucion_iniciado'), Gral::getVars(1, 'buscador_gen_prca_ejecucion_iniciado_comparador'));
	$criterio->add('gen_prca_ejecucion.finalizado', Gral::getVars(1, 'buscador_gen_prca_ejecucion_finalizado'), Gral::getVars(1, 'buscador_gen_prca_ejecucion_finalizado_comparador'));
	$criterio->add('gen_prca_ejecucion.codigo', Gral::getVars(1, 'buscador_gen_prca_ejecucion_codigo'), Gral::getVars(1, 'buscador_gen_prca_ejecucion_codigo_comparador'));
	$criterio->add('gen_prca_ejecucion.confirmado', Gral::getVars(1, 'buscador_gen_prca_ejecucion_confirmado'), Gral::getVars(1, 'buscador_gen_prca_ejecucion_confirmado_comparador'));
	$criterio->add('gen_prca_ejecucion.observacion', Gral::getVars(1, 'buscador_gen_prca_ejecucion_observacion'), Gral::getVars(1, 'buscador_gen_prca_ejecucion_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gen_prca_ejecucion_detalle', 'gen_prca_ejecucion_detalle.gen_prca_ejecucion_id', 'gen_prca_ejecucion.id', 'LEFT JOIN');
	$criterio->addRealJoin('gen_api_proyecto', 'gen_api_proyecto.id', 'gen_prca_ejecucion_detalle.gen_api_proyecto_id', 'LEFT JOIN');
	$criterio->addRealJoin('gen_prca_proceso', 'gen_prca_proceso.id', 'gen_prca_ejecucion_detalle.gen_prca_proceso_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gen_prca_ejecucion');
		$criterio->setCriterios();		
}
?>

