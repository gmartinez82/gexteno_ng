<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $pde_centro_pedido = new PdeCentroPedido();
    $pde_centro_pedido->setId($id, false);
    $pde_centro_pedido->deleteAll();
}    
?>

