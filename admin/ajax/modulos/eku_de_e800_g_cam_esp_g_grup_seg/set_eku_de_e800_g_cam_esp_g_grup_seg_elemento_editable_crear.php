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
if(UsCredencial::getEsAcreditado('EKU_DE_E800_G_CAM_ESP_G_GRUP_SEG_ALTA')){
    
    // -------------------------------------------------------------------------
    // se inicializa registro simple
    // -------------------------------------------------------------------------
    $eku_de_e800_g_cam_esp_g_grup_seg = EkuDeE800GCamEspGGrupSeg::setInicializarRegistroSimple();
    if($eku_de_e800_g_cam_esp_g_grup_seg){
        $arr['id'] = $eku_de_e800_g_cam_esp_g_grup_seg->getId();
        $arr['hash'] = $eku_de_e800_g_cam_esp_g_grup_seg->getHash();
    }    
}    

// -----------------------------------------------------------------------------
// se retornan datos
// -----------------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;

