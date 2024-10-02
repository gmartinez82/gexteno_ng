<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(UsNavegacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('us_navegacion.id', Gral::getVars(1, 'buscador_us_navegacion_id'), Gral::getVars(1, 'buscador_us_navegacion_id_comparador'));
	$criterio->add('us_navegacion.us_usuario_id', Gral::getVars(1, 'buscador_us_navegacion_us_usuario_id'), Gral::getVars(1, 'buscador_us_navegacion_us_usuario_id_comparador'));
	$criterio->add('us_navegacion.session', Gral::getVars(1, 'buscador_us_navegacion_session'), Gral::getVars(1, 'buscador_us_navegacion_session_comparador'));
	$criterio->add('us_navegacion.ip', Gral::getVars(1, 'buscador_us_navegacion_ip'), Gral::getVars(1, 'buscador_us_navegacion_ip_comparador'));
	$criterio->add('us_navegacion.navegador', Gral::getVars(1, 'buscador_us_navegacion_navegador'), Gral::getVars(1, 'buscador_us_navegacion_navegador_comparador'));
	$criterio->add('us_navegacion.pagina', Gral::getVars(1, 'buscador_us_navegacion_pagina'), Gral::getVars(1, 'buscador_us_navegacion_pagina_comparador'));
	$criterio->add('us_navegacion.url', Gral::getVars(1, 'buscador_us_navegacion_url'), Gral::getVars(1, 'buscador_us_navegacion_url_comparador'));
	$criterio->add('us_navegacion.url_referer', Gral::getVars(1, 'buscador_us_navegacion_url_referer'), Gral::getVars(1, 'buscador_us_navegacion_url_referer_comparador'));
	$criterio->add('us_navegacion.observacion', Gral::getVars(1, 'buscador_us_navegacion_observacion'), Gral::getVars(1, 'buscador_us_navegacion_observacion_comparador'));
	$criterio->add('us_navegacion.estado', Gral::getVars(1, 'buscador_us_navegacion_estado'), Gral::getVars(1, 'buscador_us_navegacion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('us_navegacion');
		$criterio->setCriterios();		
}
?>

