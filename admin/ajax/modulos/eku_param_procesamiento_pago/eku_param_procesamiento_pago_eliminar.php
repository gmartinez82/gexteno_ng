<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_PROCESAMIENTO_PAGO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $eku_param_procesamiento_pago = EkuParamProcesamientoPago::getOxId($id);
    if($eku_param_procesamiento_pago){
        if($eku_param_procesamiento_pago->getHash() == $hash){
            $eku_param_procesamiento_pago->deleteAll();
        }
    }
}    
?>

