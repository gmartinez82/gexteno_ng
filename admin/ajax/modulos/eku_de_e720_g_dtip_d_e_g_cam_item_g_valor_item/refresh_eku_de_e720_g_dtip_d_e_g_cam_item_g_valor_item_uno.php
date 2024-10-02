<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id');
$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = EkuDeE720GDtipDEGCamItemGValorItem::getOxId($id);

$estado = ($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEstado()) ? 'habilitado' : 'deshabilitado';
include 'eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_uno.php';
?>

