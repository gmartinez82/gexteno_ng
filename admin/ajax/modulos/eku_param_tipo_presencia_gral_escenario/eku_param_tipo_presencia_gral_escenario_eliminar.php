<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_PRESENCIA_GRAL_ESCENARIO_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $eku_param_tipo_presencia_gral_escenario = EkuParamTipoPresenciaGralEscenario::getOxId($id);
    if($eku_param_tipo_presencia_gral_escenario){
        if($eku_param_tipo_presencia_gral_escenario->getHash() == $hash){
            $eku_param_tipo_presencia_gral_escenario->deleteAll();
        }
    }
}    
?>

