<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_J001_G_CAM_FU_F_D_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $eku_de_j001_g_cam_fu_f_d = EkuDeJ001GCamFuFD::getOxId($id);
    $eku_de_j001_g_cam_fu_f_d->duplicarEkuDeJ001GCamFuFD();
}    

