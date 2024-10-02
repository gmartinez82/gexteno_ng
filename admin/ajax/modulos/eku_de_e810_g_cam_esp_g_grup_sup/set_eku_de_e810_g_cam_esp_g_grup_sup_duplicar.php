<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E810_G_CAM_ESP_G_GRUP_SUP_ADM_ACCION_CONFIG_DUPLICAR')){
    $id = Gral::getVars(1, 'id');
    $eku_de_e810_g_cam_esp_g_grup_sup = EkuDeE810GCamEspGGrupSup::getOxId($id);
    $eku_de_e810_g_cam_esp_g_grup_sup->duplicarEkuDeE810GCamEspGGrupSup();
}    

