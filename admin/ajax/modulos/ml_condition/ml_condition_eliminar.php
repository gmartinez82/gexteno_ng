<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ML_CONDITION_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $ml_condition = new MlCondition();
    $ml_condition->setId($id, false);
    $ml_condition->deleteAll();
}    
?>

