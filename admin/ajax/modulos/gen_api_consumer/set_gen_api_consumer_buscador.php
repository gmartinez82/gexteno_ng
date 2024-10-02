<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GenApiConsumer::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gen_api_consumer.id', Gral::getVars(1, 'buscador_gen_api_consumer_id'), Gral::getVars(1, 'buscador_gen_api_consumer_id_comparador'));
	$criterio->add('gen_api_consumer.descripcion', Gral::getVars(1, 'buscador_gen_api_consumer_descripcion'), Gral::getVars(1, 'buscador_gen_api_consumer_descripcion_comparador'));
	$criterio->add('gen_api_consumer.gen_api_proyecto_id', Gral::getVars(1, 'buscador_gen_api_consumer_gen_api_proyecto_id'), Gral::getVars(1, 'buscador_gen_api_consumer_gen_api_proyecto_id_comparador'));
	$criterio->add('gen_api_consumer.consumer', Gral::getVars(1, 'buscador_gen_api_consumer_consumer'), Gral::getVars(1, 'buscador_gen_api_consumer_consumer_comparador'));
	$criterio->add('gen_api_consumer.secret_code', Gral::getVars(1, 'buscador_gen_api_consumer_secret_code'), Gral::getVars(1, 'buscador_gen_api_consumer_secret_code_comparador'));
	$criterio->add('gen_api_consumer.codigo', Gral::getVars(1, 'buscador_gen_api_consumer_codigo'), Gral::getVars(1, 'buscador_gen_api_consumer_codigo_comparador'));
	$criterio->add('gen_api_consumer.observacion', Gral::getVars(1, 'buscador_gen_api_consumer_observacion'), Gral::getVars(1, 'buscador_gen_api_consumer_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gen_api_token', 'gen_api_token.gen_api_consumer_id', 'gen_api_consumer.id', 'LEFT JOIN');
	$criterio->addRealJoin('gen_api_proyecto', 'gen_api_proyecto.id', 'gen_api_token.gen_api_proyecto_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gen_api_consumer');
		$criterio->setCriterios();		
}
?>

