<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GenPrcaProceso::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gen_prca_proceso.id', Gral::getVars(1, 'buscador_gen_prca_proceso_id'), Gral::getVars(1, 'buscador_gen_prca_proceso_id_comparador'));
	$criterio->add('gen_prca_proceso.descripcion', Gral::getVars(1, 'buscador_gen_prca_proceso_descripcion'), Gral::getVars(1, 'buscador_gen_prca_proceso_descripcion_comparador'));
	$criterio->add('gen_prca_proceso.codigo', Gral::getVars(1, 'buscador_gen_prca_proceso_codigo'), Gral::getVars(1, 'buscador_gen_prca_proceso_codigo_comparador'));
	$criterio->add('gen_prca_proceso.observacion', Gral::getVars(1, 'buscador_gen_prca_proceso_observacion'), Gral::getVars(1, 'buscador_gen_prca_proceso_observacion_comparador'));
	$criterio->add('gen_prca_proceso.estado', Gral::getVars(1, 'buscador_gen_prca_proceso_estado'), Gral::getVars(1, 'buscador_gen_prca_proceso_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gen_prca_ejecucion', 'gen_prca_ejecucion.gen_prca_proceso_id', 'gen_prca_proceso.id', 'LEFT JOIN');
	$criterio->addRealJoin('gen_api_proyecto', 'gen_api_proyecto.id', 'gen_prca_ejecucion.gen_api_proyecto_id', 'LEFT JOIN');
	$criterio->addRealJoin('gen_prca_ejecucion_detalle', 'gen_prca_ejecucion_detalle.gen_prca_proceso_id', 'gen_prca_proceso.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gen_prca_proceso');
		$criterio->setCriterios();		
}
?>

