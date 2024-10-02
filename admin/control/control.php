<?php
session_start();
include_once "_autoload.php";

$txt_usuario = Gral::getVars(1, "txt_usuario", 'NOUSUARIO', Gral::TIPO_USUARIO);
$txt_pass = Gral::getVars(1, "txt_pass", 'NOPASS', Gral::TIPO_PASS);

$login = new Login();
$login->setUsuario($txt_usuario);
$login->setPass($txt_pass);

if($login->loguear()){
	$user = UsUsuario::autenticado();
	$user->setCredencialesSes();
	$findex = "index";
	//if($user->esAdmin()) $findex = "index";
	header("Location: ../".$findex.".php");
}else{
	header("Location: ../login.php?err=1");
}
?>