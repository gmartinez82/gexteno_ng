<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GenApiProyecto::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gen_api_proyecto.id', Gral::getVars(1, 'buscador_gen_api_proyecto_id'), Gral::getVars(1, 'buscador_gen_api_proyecto_id_comparador'));
	$criterio->add('gen_api_proyecto.descripcion', Gral::getVars(1, 'buscador_gen_api_proyecto_descripcion'), Gral::getVars(1, 'buscador_gen_api_proyecto_descripcion_comparador'));
	$criterio->add('gen_api_proyecto.url_api', Gral::getVars(1, 'buscador_gen_api_proyecto_url_api'), Gral::getVars(1, 'buscador_gen_api_proyecto_url_api_comparador'));
	$criterio->add('gen_api_proyecto.codigo', Gral::getVars(1, 'buscador_gen_api_proyecto_codigo'), Gral::getVars(1, 'buscador_gen_api_proyecto_codigo_comparador'));
	$criterio->add('gen_api_proyecto.observacion', Gral::getVars(1, 'buscador_gen_api_proyecto_observacion'), Gral::getVars(1, 'buscador_gen_api_proyecto_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gen_api_consumer', 'gen_api_consumer.gen_api_proyecto_id', 'gen_api_proyecto.id', 'LEFT JOIN');
	$criterio->addRealJoin('gen_api_token', 'gen_api_token.gen_api_proyecto_id', 'gen_api_proyecto.id', 'LEFT JOIN');
	$criterio->addRealJoin('gen_prca_ejecucion', 'gen_prca_ejecucion.gen_api_proyecto_id', 'gen_api_proyecto.id', 'LEFT JOIN');
	$criterio->addRealJoin('gen_prca_proceso', 'gen_prca_proceso.id', 'gen_prca_ejecucion.gen_prca_proceso_id', 'LEFT JOIN');
	$criterio->addRealJoin('gen_prca_ejecucion_detalle', 'gen_prca_ejecucion_detalle.gen_api_proyecto_id', 'gen_api_proyecto.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gen_api_proyecto');
		$criterio->setCriterios();		
}
?>

