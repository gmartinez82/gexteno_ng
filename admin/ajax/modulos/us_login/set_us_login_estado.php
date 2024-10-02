<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('US_LOGIN_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $us_login = UsLogin::getOxId($id);
    if($us_login->getEstado() == 1){
        $us_login->setEstado(0);
    }else{
        $us_login->setEstado(1);
    }
    $us_login->cambiarEstado();
}        
?>

