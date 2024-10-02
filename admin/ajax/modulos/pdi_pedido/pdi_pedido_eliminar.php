<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDI_PEDIDO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $pdi_pedido = new PdiPedido();
    $pdi_pedido->setId($id, false);
    $pdi_pedido->deleteAll();
}    
?>

