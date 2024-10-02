<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE300GDtipDEGCamAE::setSesPag($pag);

$criterio = new Criterio(EkuDeE300GDtipDEGCamAE::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE300GDtipDEGCamAE::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e300_g_dtip_d_e_g_cam_a_e');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE300GDtipDEGCamAE::getSesPagCantidad(), EkuDeE300GDtipDEGCamAE::getSesPag());
$eku_de_e300_g_dtip_d_e_g_cam_a_es = EkuDeE300GDtipDEGCamAE::getEkuDeE300GDtipDEGCamAEsDesdeBackend($paginador, $criterio);

include 'eku_de_e300_g_dtip_d_e_g_cam_a_e_datos.php';
?>

