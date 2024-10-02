<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE500GDtipDEGCamNRE::setSesPag($pag);

$criterio = new Criterio(EkuDeE500GDtipDEGCamNRE::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE500GDtipDEGCamNRE::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e500_g_dtip_d_e_g_cam_n_r_e');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE500GDtipDEGCamNRE::getSesPagCantidad(), EkuDeE500GDtipDEGCamNRE::getSesPag());
$eku_de_e500_g_dtip_d_e_g_cam_n_r_es = EkuDeE500GDtipDEGCamNRE::getEkuDeE500GDtipDEGCamNREsDesdeBackend($paginador, $criterio);

include 'eku_de_e500_g_dtip_d_e_g_cam_n_r_e_datos.php';
?>

