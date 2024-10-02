<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE010GDtipDEGCamFE::setSesPag($pag);

$criterio = new Criterio(EkuDeE010GDtipDEGCamFE::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE010GDtipDEGCamFE::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e010_g_dtip_d_e_g_cam_f_e');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE010GDtipDEGCamFE::getSesPagCantidad(), EkuDeE010GDtipDEGCamFE::getSesPag());
$eku_de_e010_g_dtip_d_e_g_cam_f_es = EkuDeE010GDtipDEGCamFE::getEkuDeE010GDtipDEGCamFEsDesdeBackend($paginador, $criterio);

include 'eku_de_e010_g_dtip_d_e_g_cam_f_e_datos.php';
?>

