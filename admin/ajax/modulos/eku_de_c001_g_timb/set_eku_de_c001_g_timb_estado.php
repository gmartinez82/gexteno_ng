<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_C001_G_TIMB_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_c001_g_timb = EkuDeC001GTimb::getOxId($id);
    if($eku_de_c001_g_timb->getEstado() == 1){
        $eku_de_c001_g_timb->setEstado(0);
    }else{
        $eku_de_c001_g_timb->setEstado(1);
    }
    $eku_de_c001_g_timb->cambiarEstado();
}        
?>

