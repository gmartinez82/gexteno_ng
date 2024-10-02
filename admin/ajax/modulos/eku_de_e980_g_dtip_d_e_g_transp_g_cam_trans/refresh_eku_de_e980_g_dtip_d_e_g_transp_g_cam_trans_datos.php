<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE980GDtipDEGTranspGCamTrans::setSesPag($pag);

$criterio = new Criterio(EkuDeE980GDtipDEGTranspGCamTrans::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE980GDtipDEGTranspGCamTrans::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE980GDtipDEGTranspGCamTrans::getSesPagCantidad(), EkuDeE980GDtipDEGTranspGCamTrans::getSesPag());
$eku_de_e980_g_dtip_d_e_g_transp_g_cam_transs = EkuDeE980GDtipDEGTranspGCamTrans::getEkuDeE980GDtipDEGTranspGCamTranssDesdeBackend($paginador, $criterio);

include 'eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_datos.php';
?>

