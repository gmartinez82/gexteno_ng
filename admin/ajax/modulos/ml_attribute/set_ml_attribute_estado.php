<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ml_attribute = MlAttribute::getOxId($id);
    if($ml_attribute->getEstado() == 1){
        $ml_attribute->setEstado(0);
    }else{
        $ml_attribute->setEstado(1);
    }
    $ml_attribute->cambiarEstado();
}        
?>

