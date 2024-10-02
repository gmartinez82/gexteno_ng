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
if(UsCredencial::getEsAcreditado('EKU_DE_G050_G_CAM_GEN_G_CAM_CARG_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_de_g050_g_cam_gen_g_cam_carg = EkuDeG050GCamGenGCamCarg::setInicializarRegistroSimple();
    if($eku_de_g050_g_cam_gen_g_cam_carg){
        $arr['id'] = $eku_de_g050_g_cam_gen_g_cam_carg->getId();
        $arr['hash'] = $eku_de_g050_g_cam_gen_g_cam_carg->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

