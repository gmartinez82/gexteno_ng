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
if(UsCredencial::getEsAcreditado('EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent = EkuDeE940GDtipDEGTranspGCamEnt::setInicializarRegistroSimple();
    if($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent){
        $arr['id'] = $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId();
        $arr['hash'] = $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

