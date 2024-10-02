<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_G050_G_CAM_GEN_G_CAM_CARG_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_g050_g_cam_gen_g_cam_carg = EkuDeG050GCamGenGCamCarg::getOxId($id);
    if($eku_de_g050_g_cam_gen_g_cam_carg->getEstado() == 1){
        $eku_de_g050_g_cam_gen_g_cam_carg->setEstado(0);
    }else{
        $eku_de_g050_g_cam_gen_g_cam_carg->setEstado(1);
    }
    $eku_de_g050_g_cam_gen_g_cam_carg->cambiarEstado();
}        
?>

