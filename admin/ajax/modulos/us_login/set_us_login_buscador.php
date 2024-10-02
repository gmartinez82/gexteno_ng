<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(UsLogin::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('us_login.id', Gral::getVars(1, 'buscador_us_login_id'), Gral::getVars(1, 'buscador_us_login_id_comparador'));
	$criterio->add('us_login.us_usuario_id', Gral::getVars(1, 'buscador_us_login_us_usuario_id'), Gral::getVars(1, 'buscador_us_login_us_usuario_id_comparador'));
	$criterio->add('us_login.session', Gral::getVars(1, 'buscador_us_login_session'), Gral::getVars(1, 'buscador_us_login_session_comparador'));
	$criterio->add('us_login.ip', Gral::getVars(1, 'buscador_us_login_ip'), Gral::getVars(1, 'buscador_us_login_ip_comparador'));
	$criterio->add('us_login.exito', Gral::getVars(1, 'buscador_us_login_exito'), Gral::getVars(1, 'buscador_us_login_exito_comparador'));
	$criterio->add('us_login.login', Gral::getVars(1, 'buscador_us_login_login'), Gral::getVars(1, 'buscador_us_login_login_comparador'));
	$criterio->add('us_login.navegador', Gral::getVars(1, 'buscador_us_login_navegador'), Gral::getVars(1, 'buscador_us_login_navegador_comparador'));
	$criterio->add('us_login.observacion', Gral::getVars(1, 'buscador_us_login_observacion'), Gral::getVars(1, 'buscador_us_login_observacion_comparador'));
	$criterio->add('us_login.estado', Gral::getVars(1, 'buscador_us_login_estado'), Gral::getVars(1, 'buscador_us_login_estado_comparador'));
	$criterio->add('us_login.creado', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_us_login_creado')), Gral::getVars(1, 'buscador_us_login_creado_comparador'));
	$criterio->add('us_login.modificado', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_us_login_modificado')), Gral::getVars(1, 'buscador_us_login_modificado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('us_login');
		$criterio->setCriterios();		
}
?>

