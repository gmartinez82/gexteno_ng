<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(AltAlertaEnvioEmail::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('alt_alerta_envio_email.id', Gral::getVars(1, 'buscador_alt_alerta_envio_email_id'), Gral::getVars(1, 'buscador_alt_alerta_envio_email_id_comparador'));
	$criterio->add('alt_alerta_envio_email.descripcion', Gral::getVars(1, 'buscador_alt_alerta_envio_email_descripcion'), Gral::getVars(1, 'buscador_alt_alerta_envio_email_descripcion_comparador'));
	$criterio->add('alt_alerta_envio_email.alt_alerta_id', Gral::getVars(1, 'buscador_alt_alerta_envio_email_alt_alerta_id'), Gral::getVars(1, 'buscador_alt_alerta_envio_email_alt_alerta_id_comparador'));
	$criterio->add('alt_alerta_envio_email.alt_alerta_us_usuario_id', Gral::getVars(1, 'buscador_alt_alerta_envio_email_alt_alerta_us_usuario_id'), Gral::getVars(1, 'buscador_alt_alerta_envio_email_alt_alerta_us_usuario_id_comparador'));
	$criterio->add('alt_alerta_envio_email.asunto', Gral::getVars(1, 'buscador_alt_alerta_envio_email_asunto'), Gral::getVars(1, 'buscador_alt_alerta_envio_email_asunto_comparador'));
	$criterio->add('alt_alerta_envio_email.email', Gral::getVars(1, 'buscador_alt_alerta_envio_email_email'), Gral::getVars(1, 'buscador_alt_alerta_envio_email_email_comparador'));
	$criterio->add('alt_alerta_envio_email.cuerpo', Gral::getVars(1, 'buscador_alt_alerta_envio_email_cuerpo'), Gral::getVars(1, 'buscador_alt_alerta_envio_email_cuerpo_comparador'));
	$criterio->add('alt_alerta_envio_email.adjunto', Gral::getVars(1, 'buscador_alt_alerta_envio_email_adjunto'), Gral::getVars(1, 'buscador_alt_alerta_envio_email_adjunto_comparador'));
	$criterio->add('alt_alerta_envio_email.codigo_envio', Gral::getVars(1, 'buscador_alt_alerta_envio_email_codigo_envio'), Gral::getVars(1, 'buscador_alt_alerta_envio_email_codigo_envio_comparador'));
	$criterio->add('alt_alerta_envio_email.codigo', Gral::getVars(1, 'buscador_alt_alerta_envio_email_codigo'), Gral::getVars(1, 'buscador_alt_alerta_envio_email_codigo_comparador'));
	$criterio->add('alt_alerta_envio_email.observacion', Gral::getVars(1, 'buscador_alt_alerta_envio_email_observacion'), Gral::getVars(1, 'buscador_alt_alerta_envio_email_observacion_comparador'));
	$criterio->add('alt_alerta_envio_email.estado', Gral::getVars(1, 'buscador_alt_alerta_envio_email_estado'), Gral::getVars(1, 'buscador_alt_alerta_envio_email_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('alt_alerta_envio_email');
		$criterio->setCriterios();		
}
?>

