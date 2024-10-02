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
if(UsCredencial::getEsAcreditado('EKU_DE_E980_G_DTIP_D_E_G_TRANSP_G_CAM_TRANS_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans = EkuDeE980GDtipDEGTranspGCamTrans::setInicializarRegistroSimple();
    if($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans){
        $arr['id'] = $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getId();
        $arr['hash'] = $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

