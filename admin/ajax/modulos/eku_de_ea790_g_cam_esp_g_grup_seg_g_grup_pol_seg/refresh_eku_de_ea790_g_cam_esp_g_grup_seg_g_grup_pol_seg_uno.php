<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg = EkuDeEa790GCamEspGGrupSegGGrupPolSeg::getOxId($id);

$estado = ($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_uno.php';
?>

