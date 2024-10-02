<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_RECIBO_CONCEPTO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_recibo_concepto = VtaReciboConcepto::getOxId($id);
    if($vta_recibo_concepto->getEstado() == 1){
        $vta_recibo_concepto->setEstado(0);
    }else{
        $vta_recibo_concepto->setEstado(1);
    }
    $vta_recibo_concepto->cambiarEstado();
}        
?>

