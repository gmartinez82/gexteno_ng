<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_PEDIDO_PRV_PROVEEDOR_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $pde_pedido_prv_proveedor = new PdePedidoPrvProveedor();
    $pde_pedido_prv_proveedor->setId($id, false);
    $pde_pedido_prv_proveedor->deleteAll();
}    
?>

