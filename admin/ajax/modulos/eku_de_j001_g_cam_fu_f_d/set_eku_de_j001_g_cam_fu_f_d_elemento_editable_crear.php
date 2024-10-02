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
if(UsCredencial::getEsAcreditado('EKU_DE_J001_G_CAM_FU_F_D_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_de_j001_g_cam_fu_f_d = EkuDeJ001GCamFuFD::setInicializarRegistroSimple();
    if($eku_de_j001_g_cam_fu_f_d){
        $arr['id'] = $eku_de_j001_g_cam_fu_f_d->getId();
        $arr['hash'] = $eku_de_j001_g_cam_fu_f_d->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

