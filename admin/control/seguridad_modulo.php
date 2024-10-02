<?php
session_start();
include_once "_autoload.php";

$user = UsUsuario::autenticado();
if(!$user) header("Location: ".Gral::getPathHttp()."admin/login.php?err=2");

// Deslogueo
$logout = Gral::getVars(2, "logout", 0);
if(trim($logout) == "logout"){
	UsLogin::registrarLogout($user, 1); // registra logout
	Login::logout();
	header("Location: login.php");
	exit;
}

?>