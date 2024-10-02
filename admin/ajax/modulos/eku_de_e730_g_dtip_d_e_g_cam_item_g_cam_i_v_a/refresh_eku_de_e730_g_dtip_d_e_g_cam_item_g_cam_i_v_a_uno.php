<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a = EkuDeE730GDtipDEGCamItemGCamIVA::getOxId($id);

$estado = ($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_uno.php';
?>

