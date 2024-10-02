<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ML_ITEM_STATUS_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $ml_item_status = new MlItemStatus();
    $ml_item_status->setId($id, false);
    $ml_item_status->deleteAll();
}    
?>

