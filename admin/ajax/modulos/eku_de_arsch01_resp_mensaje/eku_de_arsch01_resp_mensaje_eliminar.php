<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_ARSCH01_RESP_MENSAJE_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $eku_de_arsch01_resp_mensaje = EkuDeArsch01RespMensaje::getOxId($id);
    if($eku_de_arsch01_resp_mensaje){
        if($eku_de_arsch01_resp_mensaje->getHash() == $hash){
            $eku_de_arsch01_resp_mensaje->deleteAll();
        }
    }
}    
?>

