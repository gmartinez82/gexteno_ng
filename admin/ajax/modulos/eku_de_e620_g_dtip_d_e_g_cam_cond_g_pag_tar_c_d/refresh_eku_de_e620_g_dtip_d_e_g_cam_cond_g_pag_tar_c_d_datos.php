<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE620GDtipDEGCamCondGPagTarCD::setSesPag($pag);

$criterio = new Criterio(EkuDeE620GDtipDEGCamCondGPagTarCD::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE620GDtipDEGCamCondGPagTarCD::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE620GDtipDEGCamCondGPagTarCD::getSesPagCantidad(), EkuDeE620GDtipDEGCamCondGPagTarCD::getSesPag());
$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_ds = EkuDeE620GDtipDEGCamCondGPagTarCD::getEkuDeE620GDtipDEGCamCondGPagTarCDsDesdeBackend($paginador, $criterio);

include 'eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_datos.php';
?>

