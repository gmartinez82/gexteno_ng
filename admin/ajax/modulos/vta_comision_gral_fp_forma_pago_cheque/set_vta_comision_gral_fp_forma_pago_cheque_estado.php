<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('VTA_COMISION_GRAL_FP_FORMA_PAGO_CHEQUE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $vta_comision_gral_fp_forma_pago_cheque = VtaComisionGralFpFormaPagoCheque::getOxId($id);
    if($vta_comision_gral_fp_forma_pago_cheque->getEstado() == 1){
        $vta_comision_gral_fp_forma_pago_cheque->setEstado(0);
    }else{
        $vta_comision_gral_fp_forma_pago_cheque->setEstado(1);
    }
    $vta_comision_gral_fp_forma_pago_cheque->cambiarEstado();
}        
?>

