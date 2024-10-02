<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ML_VALUE_INS_MARCA_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ml_value_ins_marca = MlValueInsMarca::getOxId($id);
    if($ml_value_ins_marca->getEstado() == 1){
        $ml_value_ins_marca->setEstado(0);
    }else{
        $ml_value_ins_marca->setEstado(1);
    }
    $ml_value_ins_marca->cambiarEstado();
}        
?>

