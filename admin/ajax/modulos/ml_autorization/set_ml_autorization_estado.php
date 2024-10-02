<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ML_AUTORIZATION_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ml_autorization = MlAutorization::getOxId($id);
    if($ml_autorization->getEstado() == 1){
        $ml_autorization->setEstado(0);
    }else{
        $ml_autorization->setEstado(1);
    }
    $ml_autorization->cambiarEstado();
}        
?>

