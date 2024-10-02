<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_CONDICION_CREDITO_GRAL_FP_MEDIO_PAGO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $eku_param_condicion_credito_gral_fp_medio_pago = EkuParamCondicionCreditoGralFpMedioPago::getOxId($id);
    if($eku_param_condicion_credito_gral_fp_medio_pago){
        if($eku_param_condicion_credito_gral_fp_medio_pago->getHash() == $hash){
            $eku_param_condicion_credito_gral_fp_medio_pago->deleteAll();
        }
    }
}    
?>

