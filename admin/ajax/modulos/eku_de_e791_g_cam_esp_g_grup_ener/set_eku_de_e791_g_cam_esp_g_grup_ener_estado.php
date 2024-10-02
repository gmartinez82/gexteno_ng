<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_E791_G_CAM_ESP_G_GRUP_ENER_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_e791_g_cam_esp_g_grup_ener = EkuDeE791GCamEspGGrupEner::getOxId($id);
    if($eku_de_e791_g_cam_esp_g_grup_ener->getEstado() == 1){
        $eku_de_e791_g_cam_esp_g_grup_ener->setEstado(0);
    }else{
        $eku_de_e791_g_cam_esp_g_grup_ener->setEstado(1);
    }
    $eku_de_e791_g_cam_esp_g_grup_ener->cambiarEstado();
}        
?>

