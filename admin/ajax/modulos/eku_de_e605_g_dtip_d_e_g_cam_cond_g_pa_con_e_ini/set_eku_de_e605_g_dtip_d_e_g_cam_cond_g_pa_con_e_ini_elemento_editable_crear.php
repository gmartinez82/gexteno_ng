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
if(UsCredencial::getEsAcreditado('EKU_DE_E605_G_DTIP_D_E_G_CAM_COND_G_PA_CON_E_INI_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini = EkuDeE605GDtipDEGCamCondGPaConEIni::setInicializarRegistroSimple();
    if($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini){
        $arr['id'] = $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getId();
        $arr['hash'] = $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

