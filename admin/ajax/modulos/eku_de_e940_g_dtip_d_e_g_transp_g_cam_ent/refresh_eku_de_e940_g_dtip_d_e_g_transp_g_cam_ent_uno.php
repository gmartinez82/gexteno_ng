<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent = EkuDeE940GDtipDEGTranspGCamEnt::getOxId($id);

$estado = ($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_uno.php';
?>

