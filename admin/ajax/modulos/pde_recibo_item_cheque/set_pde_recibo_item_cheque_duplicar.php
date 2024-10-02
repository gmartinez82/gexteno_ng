<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('PDE_RECIBO_ITEM_CHEQUE_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $pde_recibo_item_cheque = PdeReciboItemCheque::getOxId($id);
    $pde_recibo_item_cheque->duplicarPdeReciboItemCheque();
}    

