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
if(UsCredencial::getEsAcreditado('EKU_DE_E500_G_DTIP_D_E_G_CAM_N_R_E_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_de_e500_g_dtip_d_e_g_cam_n_r_e = EkuDeE500GDtipDEGCamNRE::setInicializarRegistroSimple();
    if($eku_de_e500_g_dtip_d_e_g_cam_n_r_e){
        $arr['id'] = $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getId();
        $arr['hash'] = $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

