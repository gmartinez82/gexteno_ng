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
if(UsCredencial::getEsAcreditado('EKU_DE_E300_G_DTIP_D_E_G_CAM_A_E_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_de_e300_g_dtip_d_e_g_cam_a_e = EkuDeE300GDtipDEGCamAE::setInicializarRegistroSimple();
    if($eku_de_e300_g_dtip_d_e_g_cam_a_e){
        $arr['id'] = $eku_de_e300_g_dtip_d_e_g_cam_a_e->getId();
        $arr['hash'] = $eku_de_e300_g_dtip_d_e_g_cam_a_e->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

