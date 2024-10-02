<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_AFECTACION_TRIBUTARIA_GRAL_TIPO_IVA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $eku_param_tipo_afectacion_tributaria_gral_tipo_iva = EkuParamTipoAfectacionTributariaGralTipoIva::getOxId($id);
    if($eku_param_tipo_afectacion_tributaria_gral_tipo_iva){
        if($eku_param_tipo_afectacion_tributaria_gral_tipo_iva->getHash() == $hash){
            $eku_param_tipo_afectacion_tributaria_gral_tipo_iva->deleteAll();
        }
    }
}    
?>

