<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GenPrcaEjecucionDetalle::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gen_prca_ejecucion_detalle.id', Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_id'), Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_id_comparador'));
	$criterio->add('gen_prca_ejecucion_detalle.descripcion', Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_descripcion'), Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_descripcion_comparador'));
	$criterio->add('gen_prca_ejecucion_detalle.gen_api_proyecto_id', Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_gen_api_proyecto_id'), Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_gen_api_proyecto_id_comparador'));
	$criterio->add('gen_prca_ejecucion_detalle.gen_prca_proceso_id', Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_gen_prca_proceso_id'), Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_gen_prca_proceso_id_comparador'));
	$criterio->add('gen_prca_ejecucion_detalle.gen_prca_ejecucion_id', Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_gen_prca_ejecucion_id'), Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_gen_prca_ejecucion_id_comparador'));
	$criterio->add('gen_prca_ejecucion_detalle.fechahora_inicio', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_fechahora_inicio')), Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_fechahora_inicio_comparador'));
	$criterio->add('gen_prca_ejecucion_detalle.fechahora_fin', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_fechahora_fin')), Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_fechahora_fin_comparador'));
	$criterio->add('gen_prca_ejecucion_detalle.iniciado', Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_iniciado'), Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_iniciado_comparador'));
	$criterio->add('gen_prca_ejecucion_detalle.finalizado', Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_finalizado'), Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_finalizado_comparador'));
	$criterio->add('gen_prca_ejecucion_detalle.codigo', Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_codigo'), Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_codigo_comparador'));
	$criterio->add('gen_prca_ejecucion_detalle.confirmado', Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_confirmado'), Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_confirmado_comparador'));
	$criterio->add('gen_prca_ejecucion_detalle.observacion', Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_observacion'), Gral::getVars(1, 'buscador_gen_prca_ejecucion_detalle_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gen_prca_ejecucion_detalle');
		$criterio->setCriterios();		
}
?>

