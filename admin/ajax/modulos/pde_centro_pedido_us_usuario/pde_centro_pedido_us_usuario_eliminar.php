<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_US_USUARIO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $pde_centro_pedido_us_usuario = new PdeCentroPedidoUsUsuario();
    $pde_centro_pedido_us_usuario->setId($id, false);
    $pde_centro_pedido_us_usuario->deleteAll();
}    
?>

