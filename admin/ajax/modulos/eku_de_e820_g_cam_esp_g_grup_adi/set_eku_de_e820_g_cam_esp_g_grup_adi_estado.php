<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E820_G_CAM_ESP_G_GRUP_ADI_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_e820_g_cam_esp_g_grup_adi = EkuDeE820GCamEspGGrupAdi::getOxId($id);
    if($eku_de_e820_g_cam_esp_g_grup_adi->getEstado() == 1){
        $eku_de_e820_g_cam_esp_g_grup_adi->setEstado(0);
    }else{
        $eku_de_e820_g_cam_esp_g_grup_adi->setEstado(1);
    }
    $eku_de_e820_g_cam_esp_g_grup_adi->cambiarEstado();
}        
?>

