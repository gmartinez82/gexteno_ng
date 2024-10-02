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
if(UsCredencial::getEsAcreditado('EKU_DE_H001_G_CAM_D_E_ASOC_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_de_h001_g_cam_d_e_asoc = EkuDeH001GCamDEAsoc::setInicializarRegistroSimple();
    if($eku_de_h001_g_cam_d_e_asoc){
        $arr['id'] = $eku_de_h001_g_cam_d_e_asoc->getId();
        $arr['hash'] = $eku_de_h001_g_cam_d_e_asoc->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

