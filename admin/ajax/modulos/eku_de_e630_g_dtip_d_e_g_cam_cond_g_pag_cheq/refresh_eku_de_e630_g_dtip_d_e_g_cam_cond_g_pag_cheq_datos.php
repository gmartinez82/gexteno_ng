<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE630GDtipDEGCamCondGPagCheq::setSesPag($pag);

$criterio = new Criterio(EkuDeE630GDtipDEGCamCondGPagCheq::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE630GDtipDEGCamCondGPagCheq::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE630GDtipDEGCamCondGPagCheq::getSesPagCantidad(), EkuDeE630GDtipDEGCamCondGPagCheq::getSesPag());
$eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheqs = EkuDeE630GDtipDEGCamCondGPagCheq::getEkuDeE630GDtipDEGCamCondGPagCheqsDesdeBackend($paginador, $criterio);

include 'eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_datos.php';
?>

