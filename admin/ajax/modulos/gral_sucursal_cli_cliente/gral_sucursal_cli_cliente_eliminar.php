<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_CLI_CLIENTE_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $gral_sucursal_cli_cliente = GralSucursalCliCliente::getOxId($id);
    if($gral_sucursal_cli_cliente){
        if($gral_sucursal_cli_cliente->getHash() == $hash){
            $gral_sucursal_cli_cliente->deleteAll();
        }
    }
}    
?>

