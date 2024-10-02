<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo = EkuDeE770GDtipDEGCamItemGVehNuevo::getOxId($id);
    if($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getEstado() == 1){
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEstado(0);
    }else{
        $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->setEstado(1);
    }
    $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->cambiarEstado();
}        
?>

