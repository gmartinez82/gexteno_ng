<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_BILLETE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_billete = GralBillete::getOxId($id);
    if($gral_billete->getEstado() == 1){
        $gral_billete->setEstado(0);
    }else{
        $gral_billete->setEstado(1);
    }
    $gral_billete->cambiarEstado();
}        
?>

