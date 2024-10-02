<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('GRAL_SI_NO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $gral_si_no = GralSiNo::getOxId($id);
    if($gral_si_no->getEstado() == 1){
        $gral_si_no->setEstado(0);
    }else{
        $gral_si_no->setEstado(1);
    }
    $gral_si_no->cambiarEstado();
}        
?>

