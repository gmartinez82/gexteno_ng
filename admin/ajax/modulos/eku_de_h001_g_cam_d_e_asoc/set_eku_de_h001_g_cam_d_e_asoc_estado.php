<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_H001_G_CAM_D_E_ASOC_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_h001_g_cam_d_e_asoc = EkuDeH001GCamDEAsoc::getOxId($id);
    if($eku_de_h001_g_cam_d_e_asoc->getEstado() == 1){
        $eku_de_h001_g_cam_d_e_asoc->setEstado(0);
    }else{
        $eku_de_h001_g_cam_d_e_asoc->setEstado(1);
    }
    $eku_de_h001_g_cam_d_e_asoc->cambiarEstado();
}        
?>

