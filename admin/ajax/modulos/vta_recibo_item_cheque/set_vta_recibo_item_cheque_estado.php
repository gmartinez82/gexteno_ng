<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_CHEQUE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_recibo_item_cheque = VtaReciboItemCheque::getOxId($id);
    if($vta_recibo_item_cheque->getEstado() == 1){
        $vta_recibo_item_cheque->setEstado(0);
    }else{
        $vta_recibo_item_cheque->setEstado(1);
    }
    $vta_recibo_item_cheque->cambiarEstado();
}        
?>

