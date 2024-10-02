<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_PEDIDO_ENVIADO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_pedido_enviado = PdePedidoEnviado::getOxId($id);
    if($pde_pedido_enviado->getEstado() == 1){
        $pde_pedido_enviado->setEstado(0);
    }else{
        $pde_pedido_enviado->setEstado(1);
    }
    $pde_pedido_enviado->cambiarEstado();
}        
?>

