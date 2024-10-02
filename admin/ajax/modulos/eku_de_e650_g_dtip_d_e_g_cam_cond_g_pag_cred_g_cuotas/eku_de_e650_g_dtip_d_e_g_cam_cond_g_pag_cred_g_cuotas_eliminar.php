<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E650_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_G_CUOTAS_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas = EkuDeE650GDtipDEGCamCondGPagCredGCuotas::getOxId($id);
    if($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas){
        if($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getHash() == $hash){
            $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->deleteAll();
        }
    }
}    
?>

