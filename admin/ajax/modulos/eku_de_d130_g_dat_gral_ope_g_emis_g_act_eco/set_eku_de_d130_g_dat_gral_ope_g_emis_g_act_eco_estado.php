<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_D130_G_DAT_GRAL_OPE_G_EMIS_G_ACT_ECO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco = EkuDeD130GDatGralOpeGEmisGActEco::getOxId($id);
    if($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getEstado() == 1){
        $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->setEstado(0);
    }else{
        $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->setEstado(1);
    }
    $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->cambiarEstado();
}        
?>

