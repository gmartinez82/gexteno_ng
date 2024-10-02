<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE700GDtipDEGCamItem::setSesPag($pag);

$criterio = new Criterio(EkuDeE700GDtipDEGCamItem::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE700GDtipDEGCamItem::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e700_g_dtip_d_e_g_cam_item');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE700GDtipDEGCamItem::getSesPagCantidad(), EkuDeE700GDtipDEGCamItem::getSesPag());
$eku_de_e700_g_dtip_d_e_g_cam_items = EkuDeE700GDtipDEGCamItem::getEkuDeE700GDtipDEGCamItemsDesdeBackend($paginador, $criterio);

include 'eku_de_e700_g_dtip_d_e_g_cam_item_datos.php';
?>

