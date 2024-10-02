<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE605GDtipDEGCamCondGPaConEIni::setSesPag($pag);

$criterio = new Criterio(EkuDeE605GDtipDEGCamCondGPaConEIni::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE605GDtipDEGCamCondGPaConEIni::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE605GDtipDEGCamCondGPaConEIni::getSesPagCantidad(), EkuDeE605GDtipDEGCamCondGPaConEIni::getSesPag());
$eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_inis = EkuDeE605GDtipDEGCamCondGPaConEIni::getEkuDeE605GDtipDEGCamCondGPaConEInisDesdeBackend($paginador, $criterio);

include 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_datos.php';
?>

