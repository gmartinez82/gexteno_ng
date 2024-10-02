<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_RECIBO_ITEM_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $pde_recibo_item = PdeReciboItem::getOxId($id);
    if($pde_recibo_item->getEstado() == 1){
        $pde_recibo_item->setEstado(0);
    }else{
        $pde_recibo_item->setEstado(1);
    }
    $pde_recibo_item->cambiarEstado();
}        
?>

