<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ML_CATEGORY_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $ml_category = new MlCategory();
    $ml_category->setId($id, false);
    $ml_category->deleteAll();
}    
?>

