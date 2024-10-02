<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_D001_G_DAT_GRAL_OPE_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_d001_g_dat_gral_ope = EkuDeD001GDatGralOpe::getOxId($id);
    if($eku_de_d001_g_dat_gral_ope->getEstado() == 1){
        $eku_de_d001_g_dat_gral_ope->setEstado(0);
    }else{
        $eku_de_d001_g_dat_gral_ope->setEstado(1);
    }
    $eku_de_d001_g_dat_gral_ope->cambiarEstado();
}        
?>

