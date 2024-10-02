<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = EkuDeE730GDtipDEGCamItemGCamIVA::getOxId($id);
    if($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEstado() == 1){
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEstado(0);
    }else{
        $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->setEstado(1);
    }
    $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->cambiarEstado();
}        
?>

