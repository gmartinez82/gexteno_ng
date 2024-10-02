<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ML_ITEM_STATUS_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ml_item_status = MlItemStatus::getOxId($id);
    if($ml_item_status->getEstado() == 1){
        $ml_item_status->setEstado(0);
    }else{
        $ml_item_status->setEstado(1);
    }
    $ml_item_status->cambiarEstado();
}        
?>

