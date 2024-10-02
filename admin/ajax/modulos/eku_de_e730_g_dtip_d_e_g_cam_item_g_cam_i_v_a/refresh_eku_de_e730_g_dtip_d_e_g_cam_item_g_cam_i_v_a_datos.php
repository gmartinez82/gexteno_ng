<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE730GDtipDEGCamItemGCamIVA::setSesPag($pag);

$criterio = new Criterio(EkuDeE730GDtipDEGCamItemGCamIVA::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE730GDtipDEGCamItemGCamIVA::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE730GDtipDEGCamItemGCamIVA::getSesPagCantidad(), EkuDeE730GDtipDEGCamItemGCamIVA::getSesPag());
$eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_as = EkuDeE730GDtipDEGCamItemGCamIVA::getEkuDeE730GDtipDEGCamItemGCamIVAsDesdeBackend($paginador, $criterio);

include 'eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_datos.php';
?>

