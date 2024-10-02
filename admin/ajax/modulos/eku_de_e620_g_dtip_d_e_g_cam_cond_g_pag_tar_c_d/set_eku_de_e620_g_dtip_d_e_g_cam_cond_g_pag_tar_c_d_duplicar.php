<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E620_G_DTIP_D_E_G_CAM_COND_G_PAG_TAR_C_D_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d = EkuDeE620GDtipDEGCamCondGPagTarCD::getOxId($id);
    $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->duplicarEkuDeE620GDtipDEGCamCondGPagTarCD();
}    

