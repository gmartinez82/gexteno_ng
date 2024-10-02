<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E980_G_DTIP_D_E_G_TRANSP_G_CAM_TRANS_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans = EkuDeE980GDtipDEGTranspGCamTrans::getOxId($id);
    $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->duplicarEkuDeE980GDtipDEGTranspGCamTrans();
}    

