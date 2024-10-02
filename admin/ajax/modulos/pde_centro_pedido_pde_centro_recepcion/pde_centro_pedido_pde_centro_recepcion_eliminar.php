<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_PDE_CENTRO_RECEPCION_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $pde_centro_pedido_pde_centro_recepcion = new PdeCentroPedidoPdeCentroRecepcion();
    $pde_centro_pedido_pde_centro_recepcion->setId($id, false);
    $pde_centro_pedido_pde_centro_recepcion->deleteAll();
}    
?>

