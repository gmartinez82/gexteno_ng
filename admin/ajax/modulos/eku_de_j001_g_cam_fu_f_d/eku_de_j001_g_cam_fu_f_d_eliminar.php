<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_J001_G_CAM_FU_F_D_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $eku_de_j001_g_cam_fu_f_d = EkuDeJ001GCamFuFD::getOxId($id);
    if($eku_de_j001_g_cam_fu_f_d){
        if($eku_de_j001_g_cam_fu_f_d->getHash() == $hash){
            $eku_de_j001_g_cam_fu_f_d->deleteAll();
        }
    }
}    
?>

