<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent = EkuDeE940GDtipDEGTranspGCamEnt::getOxId($id);
    if($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEstado() == 1){
        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEstado(0);
    }else{
        $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->setEstado(1);
    }
    $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->cambiarEstado();
}        
?>

