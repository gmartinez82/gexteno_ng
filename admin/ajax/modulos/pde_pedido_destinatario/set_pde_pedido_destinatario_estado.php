<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_PEDIDO_DESTINATARIO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_pedido_destinatario = PdePedidoDestinatario::getOxId($id);
    if($pde_pedido_destinatario->getEstado() == 1){
        $pde_pedido_destinatario->setEstado(0);
    }else{
        $pde_pedido_destinatario->setEstado(1);
    }
    $pde_pedido_destinatario->cambiarEstado();
}        
?>

