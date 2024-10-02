<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se realizan los controles de datos
// -----------------------------------------------------------------------------
$arr['error'] = false;

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo = EkuDeE770GDtipDEGCamItemGVehNuevo::setInicializarRegistroSimple();
    if($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo){
        $arr['id'] = $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getId();
        $arr['hash'] = $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

