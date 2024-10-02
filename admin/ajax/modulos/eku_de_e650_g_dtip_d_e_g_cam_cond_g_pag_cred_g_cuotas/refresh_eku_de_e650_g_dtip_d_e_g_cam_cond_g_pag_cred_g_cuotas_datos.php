<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE650GDtipDEGCamCondGPagCredGCuotas::setSesPag($pag);

$criterio = new Criterio(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE650GDtipDEGCamCondGPagCredGCuotas::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::getSesPagCantidad(), EkuDeE650GDtipDEGCamCondGPagCredGCuotas::getSesPag());
$eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotass = EkuDeE650GDtipDEGCamCondGPagCredGCuotas::getEkuDeE650GDtipDEGCamCondGPagCredGCuotassDesdeBackend($paginador, $criterio);

include 'eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_datos.php';
?>

