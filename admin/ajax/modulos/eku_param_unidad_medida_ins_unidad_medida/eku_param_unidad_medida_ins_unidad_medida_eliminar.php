<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_PARAM_UNIDAD_MEDIDA_INS_UNIDAD_MEDIDA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $eku_param_unidad_medida_ins_unidad_medida = EkuParamUnidadMedidaInsUnidadMedida::getOxId($id);
    if($eku_param_unidad_medida_ins_unidad_medida){
        if($eku_param_unidad_medida_ins_unidad_medida->getHash() == $hash){
            $eku_param_unidad_medida_ins_unidad_medida->deleteAll();
        }
    }
}    
?>

