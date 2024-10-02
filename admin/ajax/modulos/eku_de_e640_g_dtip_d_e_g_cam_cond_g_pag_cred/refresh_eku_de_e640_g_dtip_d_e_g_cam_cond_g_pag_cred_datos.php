<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE640GDtipDEGCamCondGPagCred::setSesPag($pag);

$criterio = new Criterio(EkuDeE640GDtipDEGCamCondGPagCred::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE640GDtipDEGCamCondGPagCred::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE640GDtipDEGCamCondGPagCred::getSesPagCantidad(), EkuDeE640GDtipDEGCamCondGPagCred::getSesPag());
$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_creds = EkuDeE640GDtipDEGCamCondGPagCred::getEkuDeE640GDtipDEGCamCondGPagCredsDesdeBackend($paginador, $criterio);

include 'eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_datos.php';
?>

