<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_ITEM_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pdi_pedido_agrupacion_item = PdiPedidoAgrupacionItem::getOxId($id);
    if($pdi_pedido_agrupacion_item->getEstado() == 1){
        $pdi_pedido_agrupacion_item->setEstado(0);
    }else{
        $pdi_pedido_agrupacion_item->setEstado(1);
    }
    $pdi_pedido_agrupacion_item->cambiarEstado();
}        
?>

