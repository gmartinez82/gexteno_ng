<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E810_G_CAM_ESP_G_GRUP_SUP_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $eku_de_e810_g_cam_esp_g_grup_sup = EkuDeE810GCamEspGGrupSup::getOxId($id);
    if($eku_de_e810_g_cam_esp_g_grup_sup){
        if($eku_de_e810_g_cam_esp_g_grup_sup->getHash() == $hash){
            $eku_de_e810_g_cam_esp_g_grup_sup->deleteAll();
        }
    }
}    
?>

