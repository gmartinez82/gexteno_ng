<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE400GDtipDEGCamNCDE::setSesPag($pag);

$criterio = new Criterio(EkuDeE400GDtipDEGCamNCDE::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE400GDtipDEGCamNCDE::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE400GDtipDEGCamNCDE::getSesPagCantidad(), EkuDeE400GDtipDEGCamNCDE::getSesPag());
$eku_de_e400_g_dtip_d_e_g_cam_n_c_d_es = EkuDeE400GDtipDEGCamNCDE::getEkuDeE400GDtipDEGCamNCDEsDesdeBackend($paginador, $criterio);

include 'eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_datos.php';
?>

