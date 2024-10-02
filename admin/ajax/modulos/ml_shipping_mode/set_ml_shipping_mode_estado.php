<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ML_SHIPPING_MODE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $ml_shipping_mode = MlShippingMode::getOxId($id);
    if($ml_shipping_mode->getEstado() == 1){
        $ml_shipping_mode->setEstado(0);
    }else{
        $ml_shipping_mode->setEstado(1);
    }
    $ml_shipping_mode->cambiarEstado();
}        
?>

