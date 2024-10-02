<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E605_G_DTIP_D_E_G_CAM_COND_G_PA_CON_E_INI_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini = EkuDeE605GDtipDEGCamCondGPaConEIni::getOxId($id);
    if($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEstado() == 1){
        $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->setEstado(0);
    }else{
        $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->setEstado(1);
    }
    $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->cambiarEstado();
}        
?>

