<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E600_G_DTIP_D_E_G_CAM_COND_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_e600_g_dtip_d_e_g_cam_cond = EkuDeE600GDtipDEGCamCond::getOxId($id);
    if($eku_de_e600_g_dtip_d_e_g_cam_cond->getEstado() == 1){
        $eku_de_e600_g_dtip_d_e_g_cam_cond->setEstado(0);
    }else{
        $eku_de_e600_g_dtip_d_e_g_cam_cond->setEstado(1);
    }
    $eku_de_e600_g_dtip_d_e_g_cam_cond->cambiarEstado();
}        
?>

