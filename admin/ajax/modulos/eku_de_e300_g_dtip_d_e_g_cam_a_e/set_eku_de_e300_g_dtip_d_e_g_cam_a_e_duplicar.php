<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E300_G_DTIP_D_E_G_CAM_A_E_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $eku_de_e300_g_dtip_d_e_g_cam_a_e = EkuDeE300GDtipDEGCamAE::getOxId($id);
    $eku_de_e300_g_dtip_d_e_g_cam_a_e->duplicarEkuDeE300GDtipDEGCamAE();
}    

