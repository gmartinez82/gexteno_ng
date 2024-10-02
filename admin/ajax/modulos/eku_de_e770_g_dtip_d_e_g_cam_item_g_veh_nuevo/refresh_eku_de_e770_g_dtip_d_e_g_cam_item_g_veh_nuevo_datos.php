<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE770GDtipDEGCamItemGVehNuevo::setSesPag($pag);

$criterio = new Criterio(EkuDeE770GDtipDEGCamItemGVehNuevo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE770GDtipDEGCamItemGVehNuevo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE770GDtipDEGCamItemGVehNuevo::getSesPagCantidad(), EkuDeE770GDtipDEGCamItemGVehNuevo::getSesPag());
$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevos = EkuDeE770GDtipDEGCamItemGVehNuevo::getEkuDeE770GDtipDEGCamItemGVehNuevosDesdeBackend($paginador, $criterio);

include 'eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_datos.php';
?>

