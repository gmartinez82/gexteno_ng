<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ML_VALUE_INS_MARCA_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $ml_value_ins_marca = new MlValueInsMarca();
    $ml_value_ins_marca->setId($id, false);
    $ml_value_ins_marca->deleteAll();
}    
?>

