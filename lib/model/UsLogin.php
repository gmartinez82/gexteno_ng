<?php 
require_once "base/BUsLogin.php"; 
class UsLogin extends BUsLogin
{
	/*
	Autor: Pablo Rosen
	Fecha: 31/08/2012 15:30 hs.
	Return void
	
	Metodo que registra en UsLogin los intentos de logueo que se hacen en el sitio, sean exitosos o no.
	*/
	static function registrarLogin($us_usuario, $exito){		
		Login::limpiarConector();
		Login::setTipoAcceso('backend'); // se obtiene acceso para escritura en la BD

		$us_login = new UsLogin();
		if($us_usuario){
			$us_login->setUsUsuarioId($us_usuario->getId());
		}
		$us_login->setSession(session_id());
		$us_login->setNavegador($_SERVER['HTTP_USER_AGENT']);
		$us_login->setExito($exito);
		$us_login->setLogin(GralSiNo::getOxCodigo('SI')->getId()); // LOGIN
		$us_login->setIp($_SERVER['REMOTE_ADDR'] .' - '. $_SERVER['HTTP_X_FORWARDED_FOR']);
		$us_login->setObservacion('');
		$us_login->setEstado($exito);
		$us_login->save();

		if($exito == 0){
			Login::limpiarConector();
			Login::setTipoAcceso(''); // se limpia el tipo de acceso
		}
	}

	/*
	Autor: Pablo Rosen
	Fecha: 31/08/2012 15:40 hs.
	Return void
	
	Metodo que registra en UsLogin el deslogueo de los usuarios.
	*/
	static function registrarLogout($us_usuario, $exito){		
		$us_login = new UsLogin();
		$us_login->setUsUsuarioId($us_usuario->getId());
		$us_login->setSession(session_id());
		$us_login->setNavegador($_SERVER['HTTP_USER_AGENT']);
		$us_login->setExito($exito);
		$us_login->setLogin(GralSiNo::getOxCodigo('NO')->getId()); // LOGOUT
		$us_login->setIp($_SERVER['REMOTE_ADDR'] .' - '. $_SERVER['HTTP_X_FORWARDED_FOR']);
		$us_login->setObservacion('');
		$us_login->setEstado($exito);
		$us_login->save();
	}
 
}
?>