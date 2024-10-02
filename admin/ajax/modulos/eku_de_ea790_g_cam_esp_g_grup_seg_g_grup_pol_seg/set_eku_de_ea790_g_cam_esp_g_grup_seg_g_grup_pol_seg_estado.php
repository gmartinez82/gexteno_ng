<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('EKU_DE_EA790_G_CAM_ESP_G_GRUP_SEG_G_GRUP_POL_SEG_ADM_ACCION_ESTADO')){
    $id = Gral::getVars(1, 'id');
    $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg = EkuDeEa790GCamEspGGrupSegGGrupPolSeg::getOxId($id);
    if($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEstado() == 1){
        $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->setEstado(0);
    }else{
        $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->setEstado(1);
    }
    $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->cambiarEstado();
}        
?>

