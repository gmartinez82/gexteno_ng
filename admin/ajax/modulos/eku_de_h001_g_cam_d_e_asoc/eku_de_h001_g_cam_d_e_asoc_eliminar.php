<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_H001_G_CAM_D_E_ASOC_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $eku_de_h001_g_cam_d_e_asoc = EkuDeH001GCamDEAsoc::getOxId($id);
    if($eku_de_h001_g_cam_d_e_asoc){
        if($eku_de_h001_g_cam_d_e_asoc->getHash() == $hash){
            $eku_de_h001_g_cam_d_e_asoc->deleteAll();
        }
    }
}    
?>

