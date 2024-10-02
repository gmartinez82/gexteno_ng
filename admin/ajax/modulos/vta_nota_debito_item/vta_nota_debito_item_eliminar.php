<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ITEM_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $vta_nota_debito_item = new VtaNotaDebitoItem();
    $vta_nota_debito_item->setId($id, false);
    $vta_nota_debito_item->deleteAll();
}    
?>

