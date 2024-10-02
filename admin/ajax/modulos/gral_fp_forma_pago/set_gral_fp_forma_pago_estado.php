<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_FP_FORMA_PAGO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_fp_forma_pago = GralFpFormaPago::getOxId($id);
    if($gral_fp_forma_pago->getEstado() == 1){
        $gral_fp_forma_pago->setEstado(0);
    }else{
        $gral_fp_forma_pago->setEstado(1);
    }
    $gral_fp_forma_pago->cambiarEstado();
}        
?>

