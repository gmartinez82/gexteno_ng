<?php
session_start();
include_once "_autoload.php";

$user = UsUsuario::autenticado();
if(!$user) header("Location: login.php?err=2");

// -----------------------------------------------------------------------------
// Refresh Credenciales
// -----------------------------------------------------------------------------
$refresh_credenciales = Gral::getVars(2, "refresh_credenciales", 0);
if(trim($refresh_credenciales) == 1){
    $user->setCredencialesSes();    
}

// -----------------------------------------------------------------------------
// Deslogueo
// -----------------------------------------------------------------------------
$logout = Gral::getVars(2, "logout", 0);
if(trim($logout) == "logout"){
    UsLogin::registrarLogout($user, 1); // registra logout
    Login::logout();

    header("Location: login.php");
    exit;
}
$server_php_self = $_SERVER['PHP_SELF'];
$arr_server_php_self = explode('/', $server_php_self);
$archivo = array_pop($arr_server_php_self);
$codigo = Login::getCredencialDelArchivo($archivo);

if(!UsCredencial::getEsAcreditado($codigo)){
    header("Location: us_noautorizado.php?cod=".$codigo);
    exit;
}

UsNavegacion::registrarNavegacion();
?>
