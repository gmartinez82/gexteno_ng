<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_VTA_RECIBO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $vta_nota_debito_vta_recibo = new VtaNotaDebitoVtaRecibo();
    $vta_nota_debito_vta_recibo->setId($id, false);
    $vta_nota_debito_vta_recibo->deleteAll();
}    
?>

