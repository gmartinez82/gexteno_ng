<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_e800_g_cam_esp_g_grup_seg = EkuDeE800GCamEspGGrupSeg::getOxId($id);

$estado = ($eku_de_e800_g_cam_esp_g_grup_seg->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_e800_g_cam_esp_g_grup_seg_uno.php';
?>

