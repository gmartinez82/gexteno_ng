<?php
class Login
{
	private $usuario, $pass;
	const SES_LOGIN = "ses_usuario_login";
	const SES_ID = "ses_usuario_id";
	
	const SES_TIPO_ACCESO = 'DB_TIPO_ACCESO_BD';
	const SES_CONECTOR_BD = 'DB_CONECTOR_BD';
	
	public function getUsuario(){ return $this->usuario; }
	public function setUsuario($v){ $this->usuario = $v; }

	public function getPass(){ return $this->pass; }
	public function setPass($v){ $this->pass = $v; }

	public function loguear(){
		$usuario = UsUsuario::esValido($this->usuario, $this->pass);
		if($usuario){
			UsLogin::registrarLogin($usuario, 1);
			self::autenticar($usuario->getId());
			return true;
		}	
		UsLogin::registrarLogin(null, 0);
		return false;
	}
	
	static function autenticar($id){
		Gral::setSes(self::SES_LOGIN, 1); /* Se carga autenticacion */
		Gral::setSes(self::SES_ID, $id); /* Se carga id de usuario */
	}
	static function autenticado(){
		if(Gral::getSes(self::SES_LOGIN) == 1) return Gral::getSes(self::SES_ID);
		return false;
	}
	static function logout(){
		Gral::setSes(self::SES_LOGIN, ""); /* Se carga autenticacion */
		Gral::setSes(self::SES_ID, ""); /* Se carga id de usuario */
	}
	
	static function getCredencialDelArchivo($archivo){
		$codigo = '';
		$arr = explode('.', $archivo);
		array_pop($arr);
		$codigo = $arr[0];
		$codigo = strtoupper($codigo);
		return $codigo;
	}
	
	static function esAutorizado($usuario, $codigo){
		$absoluto = $usuario->getAbsoluto();
		if($absoluto == 1) return true;
		
		$credenciales = $usuario->getCredencialesSes();		
		$acreditado = array_search($codigo, $credenciales);
		if(trim($acreditado) != '') return true;
		return false;
	}
	
	static function getTipoAcceso(){
		return $_SESSION[self::SES_TIPO_ACCESO];
	}
	static function setTipoAcceso($tipo){
		$_SESSION[self::SES_TIPO_ACCESO] = $tipo;
	}
	
	static function getConector(){
		return $_SESSION[self::SES_CONECTOR_BD];
	}
	static function setConector($conector){
		$_SESSION[self::SES_CONECTOR_BD] = $conector;
	}
	static function limpiarConector(){
		unset($_SESSION[self::SES_CONECTOR_BD]);
	}
	static function tieneConector(){
		if (isset($_SESSION[self::SES_CONECTOR_BD])) return true;
		return false;
	}
	
	
	
}
?>