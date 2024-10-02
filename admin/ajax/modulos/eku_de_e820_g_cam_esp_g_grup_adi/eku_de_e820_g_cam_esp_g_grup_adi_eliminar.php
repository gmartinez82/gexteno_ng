<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E820_G_CAM_ESP_G_GRUP_ADI_ADM_ACCION_ELIMINAR')){
    $id = Gral::getVars(Gral::VARS_POST, 'id', 0, Gral::TIPO_INTEGER);
    $hash = Gral::getVars(Gral::VARS_POST, 'hash', 0, Gral::TIPO_STRING);
    
    $eku_de_e820_g_cam_esp_g_grup_adi = EkuDeE820GCamEspGGrupAdi::getOxId($id);
    if($eku_de_e820_g_cam_esp_g_grup_adi){
        if($eku_de_e820_g_cam_esp_g_grup_adi->getHash() == $hash){
            $eku_de_e820_g_cam_esp_g_grup_adi->deleteAll();
        }
    }
}    
?>

