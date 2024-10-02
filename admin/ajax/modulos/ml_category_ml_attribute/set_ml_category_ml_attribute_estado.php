<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ML_CATEGORY_ML_ATTRIBUTE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ml_category_ml_attribute = MlCategoryMlAttribute::getOxId($id);
    if($ml_category_ml_attribute->getEstado() == 1){
        $ml_category_ml_attribute->setEstado(0);
    }else{
        $ml_category_ml_attribute->setEstado(1);
    }
    $ml_category_ml_attribute->cambiarEstado();
}        
?>

