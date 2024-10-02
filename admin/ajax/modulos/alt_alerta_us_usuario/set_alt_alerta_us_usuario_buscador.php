<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(AltAlertaUsUsuario::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('alt_alerta_us_usuario.id', Gral::getVars(1, 'buscador_alt_alerta_us_usuario_id'), Gral::getVars(1, 'buscador_alt_alerta_us_usuario_id_comparador'));
	$criterio->add('alt_alerta_us_usuario.alt_alerta_id', Gral::getVars(1, 'buscador_alt_alerta_us_usuario_alt_alerta_id'), Gral::getVars(1, 'buscador_alt_alerta_us_usuario_alt_alerta_id_comparador'));
	$criterio->add('alt_alerta_us_usuario.us_usuario_id', Gral::getVars(1, 'buscador_alt_alerta_us_usuario_us_usuario_id'), Gral::getVars(1, 'buscador_alt_alerta_us_usuario_us_usuario_id_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('alt_alerta_envio_email', 'alt_alerta_envio_email.alt_alerta_us_usuario_id', 'alt_alerta_us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_alerta', 'alt_alerta.id', 'alt_alerta_envio_email.alt_alerta_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('alt_alerta_us_usuario');
		$criterio->setCriterios();		
}
?>

