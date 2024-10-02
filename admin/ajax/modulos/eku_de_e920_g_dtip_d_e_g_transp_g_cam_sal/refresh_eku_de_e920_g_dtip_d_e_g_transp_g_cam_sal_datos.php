<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE920GDtipDEGTranspGCamSal::setSesPag($pag);

$criterio = new Criterio(EkuDeE920GDtipDEGTranspGCamSal::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE920GDtipDEGTranspGCamSal::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE920GDtipDEGTranspGCamSal::getSesPagCantidad(), EkuDeE920GDtipDEGTranspGCamSal::getSesPag());
$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sals = EkuDeE920GDtipDEGTranspGCamSal::getEkuDeE920GDtipDEGTranspGCamSalsDesdeBackend($paginador, $criterio);

include 'eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_datos.php';
?>

