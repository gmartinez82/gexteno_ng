<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $cli_cliente = CliCliente::getOxId($id);
    if($cli_cliente->getEstado() == 1){
        $cli_cliente->setEstado(0);
    }else{
        $cli_cliente->setEstado(1);
    }
    $cli_cliente->cambiarEstado();
}        
?>

