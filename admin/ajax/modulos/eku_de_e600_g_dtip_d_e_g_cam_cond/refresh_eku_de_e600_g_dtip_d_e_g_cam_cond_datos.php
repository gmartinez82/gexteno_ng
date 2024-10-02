<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE600GDtipDEGCamCond::setSesPag($pag);

$criterio = new Criterio(EkuDeE600GDtipDEGCamCond::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE600GDtipDEGCamCond::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e600_g_dtip_d_e_g_cam_cond');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE600GDtipDEGCamCond::getSesPagCantidad(), EkuDeE600GDtipDEGCamCond::getSesPag());
$eku_de_e600_g_dtip_d_e_g_cam_conds = EkuDeE600GDtipDEGCamCond::getEkuDeE600GDtipDEGCamCondsDesdeBackend($paginador, $criterio);

include 'eku_de_e600_g_dtip_d_e_g_cam_cond_datos.php';
?>

