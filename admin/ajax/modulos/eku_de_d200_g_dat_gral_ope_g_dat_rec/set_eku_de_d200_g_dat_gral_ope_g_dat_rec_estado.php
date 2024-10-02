<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_D200_G_DAT_GRAL_OPE_G_DAT_REC_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_d200_g_dat_gral_ope_g_dat_rec = EkuDeD200GDatGralOpeGDatRec::getOxId($id);
    if($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEstado() == 1){
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEstado(0);
    }else{
        $eku_de_d200_g_dat_gral_ope_g_dat_rec->setEstado(1);
    }
    $eku_de_d200_g_dat_gral_ope_g_dat_rec->cambiarEstado();
}        
?>

