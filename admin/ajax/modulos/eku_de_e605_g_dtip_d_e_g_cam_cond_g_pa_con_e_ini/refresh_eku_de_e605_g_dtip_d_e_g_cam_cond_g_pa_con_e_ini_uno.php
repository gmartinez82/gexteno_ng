<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini = EkuDeE605GDtipDEGCamCondGPaConEIni::getOxId($id);

$estado = ($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_uno.php';
?>

