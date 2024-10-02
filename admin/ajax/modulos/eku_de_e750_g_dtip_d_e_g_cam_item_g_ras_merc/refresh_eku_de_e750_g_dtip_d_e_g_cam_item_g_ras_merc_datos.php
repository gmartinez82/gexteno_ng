<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE750GDtipDEGCamItemGRasMerc::setSesPag($pag);

$criterio = new Criterio(EkuDeE750GDtipDEGCamItemGRasMerc::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE750GDtipDEGCamItemGRasMerc::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE750GDtipDEGCamItemGRasMerc::getSesPagCantidad(), EkuDeE750GDtipDEGCamItemGRasMerc::getSesPag());
$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_mercs = EkuDeE750GDtipDEGCamItemGRasMerc::getEkuDeE750GDtipDEGCamItemGRasMercsDesdeBackend($paginador, $criterio);

include 'eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_datos.php';
?>

