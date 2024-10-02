<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_ARSCH01_RESP_MENSAJE_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $eku_de_arsch01_resp_mensaje = EkuDeArsch01RespMensaje::getOxId($id);
    $eku_de_arsch01_resp_mensaje->duplicarEkuDeArsch01RespMensaje();
}    

