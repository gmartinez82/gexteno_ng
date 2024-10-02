<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeH001GCamDEAsoc::setSesPag($pag);

$criterio = new Criterio(EkuDeH001GCamDEAsoc::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeH001GCamDEAsoc::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_h001_g_cam_d_e_asoc');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeH001GCamDEAsoc::getSesPagCantidad(), EkuDeH001GCamDEAsoc::getSesPag());
$eku_de_h001_g_cam_d_e_asocs = EkuDeH001GCamDEAsoc::getEkuDeH001GCamDEAsocsDesdeBackend($paginador, $criterio);

include 'eku_de_h001_g_cam_d_e_asoc_datos.php';
?>

