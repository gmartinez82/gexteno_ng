<?php 
require_once "base/BUsClave.php"; 
class UsClave extends BUsClave
{
	const MSG_COD_VIGENCIA_CLAVE = 'VIGENCIA_CLAVE';
	
	/*
	Autor: Pablo Rosen
	Fecha: 23/01/2012 17:20 hs.
	Return: Boolean
	
	Metodo que controla la validez de la contrasena. Debe poseer como minimo una mayuscula, una minuscula, un numero, mas de 6 digitos, menos de 16 digitos.
	*/	
	static function esClaveValida($clave, &$error_clave){
		$estado = true;

		if(strlen($clave) < 6){
		  $error_clave = 155;
		  return false;
		}
		if(strlen($clave) > 16){
		  $error_clave = 156;
		  return false;
		}
		if (!preg_match('`[a-z]`',$clave)){
		  $error_clave = 157;
		  return false;
		}
		if (!preg_match('`[A-Z]`',$clave)){
		  $error_clave = 158;
		  return false;
		}
		if (!preg_match('`[0-9]`',$clave)){
		  $error_clave = 159;
		  return false;
		}
		$error_clave = "";
		return true;

		
		return $estado;
	}
	 
}
?>