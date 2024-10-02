<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_CLIENTE_INFO_SIFEN_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $cli_cliente_info_sifen = CliClienteInfoSifen::getOxId($id);
    if($cli_cliente_info_sifen){
        if($cli_cliente_info_sifen->getHash() == $hash){
            $cli_cliente_info_sifen->deleteAll();
        }
    }
}    
?>

