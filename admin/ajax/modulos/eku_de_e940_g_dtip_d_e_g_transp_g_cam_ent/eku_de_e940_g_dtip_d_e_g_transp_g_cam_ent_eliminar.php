<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent = EkuDeE940GDtipDEGTranspGCamEnt::getOxId($id);
    if($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent){
        if($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getHash() == $hash){
            $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->deleteAll();
        }
    }
}    
?>

