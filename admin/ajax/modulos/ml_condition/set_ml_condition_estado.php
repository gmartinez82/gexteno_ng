<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ML_CONDITION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ml_condition = MlCondition::getOxId($id);
    if($ml_condition->getEstado() == 1){
        $ml_condition->setEstado(0);
    }else{
        $ml_condition->setEstado(1);
    }
    $ml_condition->cambiarEstado();
}        
?>

