<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_CENTRO_PEDIDO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $cli_centro_pedido = CliCentroPedido::getOxId($id);
    if($cli_centro_pedido->getEstado() == 1){
        $cli_centro_pedido->setEstado(0);
    }else{
        $cli_centro_pedido->setEstado(1);
    }
    $cli_centro_pedido->cambiarEstado();
}        
?>

