<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_ML_VALUE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ml_attribute_ml_value = MlAttributeMlValue::getOxId($id);
    if($ml_attribute_ml_value->getEstado() == 1){
        $ml_attribute_ml_value->setEstado(0);
    }else{
        $ml_attribute_ml_value->setEstado(1);
    }
    $ml_attribute_ml_value->cambiarEstado();
}        
?>

