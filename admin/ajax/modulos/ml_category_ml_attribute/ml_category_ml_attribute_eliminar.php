<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ML_CATEGORY_ML_ATTRIBUTE_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(1, 'id');
    $ml_category_ml_attribute = new MlCategoryMlAttribute();
    $ml_category_ml_attribute->setId($id, false);
    $ml_category_ml_attribute->deleteAll();
}    
?>

