<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_CONDICION_CREDITO_GRAL_FP_MEDIO_PAGO_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $eku_param_condicion_credito_gral_fp_medio_pago = EkuParamCondicionCreditoGralFpMedioPago::getOxId($id);
    $eku_param_condicion_credito_gral_fp_medio_pago->duplicarEkuParamCondicionCreditoGralFpMedioPago();
}    

