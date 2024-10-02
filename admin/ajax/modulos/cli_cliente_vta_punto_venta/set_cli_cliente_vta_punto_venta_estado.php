<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_CLIENTE_VTA_PUNTO_VENTA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $cli_cliente_vta_punto_venta = CliClienteVtaPuntoVenta::getOxId($id);
    if($cli_cliente_vta_punto_venta->getEstado() == 1){
        $cli_cliente_vta_punto_venta->setEstado(0);
    }else{
        $cli_cliente_vta_punto_venta->setEstado(1);
    }
    $cli_cliente_vta_punto_venta->cambiarEstado();
}        
?>

