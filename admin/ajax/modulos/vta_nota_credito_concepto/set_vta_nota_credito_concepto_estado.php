<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_CONCEPTO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_nota_credito_concepto = VtaNotaCreditoConcepto::getOxId($id);
    if($vta_nota_credito_concepto->getEstado() == 1){
        $vta_nota_credito_concepto->setEstado(0);
    }else{
        $vta_nota_credito_concepto->setEstado(1);
    }
    $vta_nota_credito_concepto->cambiarEstado();
}        
?>

