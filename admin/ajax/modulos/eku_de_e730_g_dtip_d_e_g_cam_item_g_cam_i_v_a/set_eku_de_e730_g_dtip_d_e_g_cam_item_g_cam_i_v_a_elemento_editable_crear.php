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
if(UsCredencial::getEsAcreditado('EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = EkuDeE730GDtipDEGCamItemGCamIVA::setInicializarRegistroSimple();
    if($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a){
        $arr['id'] = $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getId();
        $arr['hash'] = $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

