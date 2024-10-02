<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE720GDtipDEGCamItemGValorItem::setSesPag($pag);

$criterio = new Criterio(EkuDeE720GDtipDEGCamItemGValorItem::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE720GDtipDEGCamItemGValorItem::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE720GDtipDEGCamItemGValorItem::getSesPagCantidad(), EkuDeE720GDtipDEGCamItemGValorItem::getSesPag());
$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_items = EkuDeE720GDtipDEGCamItemGValorItem::getEkuDeE720GDtipDEGCamItemGValorItemsDesdeBackend($paginador, $criterio);

include 'eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_datos.php';
?>

