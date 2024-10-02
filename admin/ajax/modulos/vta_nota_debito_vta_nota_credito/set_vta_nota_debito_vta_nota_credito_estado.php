<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_VTA_NOTA_CREDITO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_nota_debito_vta_nota_credito = VtaNotaDebitoVtaNotaCredito::getOxId($id);
    if($vta_nota_debito_vta_nota_credito->getEstado() == 1){
        $vta_nota_debito_vta_nota_credito->setEstado(0);
    }else{
        $vta_nota_debito_vta_nota_credito->setEstado(1);
    }
    $vta_nota_debito_vta_nota_credito->cambiarEstado();
}        
?>

