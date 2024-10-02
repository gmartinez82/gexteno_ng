<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('ALT_CONTROL_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $alt_control = AltControl::getOxId($id);
    if($alt_control->getEstado() == 1){
        $alt_control->setEstado(0);
    }else{
        $alt_control->setEstado(1);
    }
    $alt_control->cambiarEstado();
}        
?>

