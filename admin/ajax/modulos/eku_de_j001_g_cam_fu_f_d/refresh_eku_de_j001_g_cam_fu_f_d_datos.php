<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeJ001GCamFuFD::setSesPag($pag);

$criterio = new Criterio(EkuDeJ001GCamFuFD::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeJ001GCamFuFD::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_j001_g_cam_fu_f_d');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeJ001GCamFuFD::getSesPagCantidad(), EkuDeJ001GCamFuFD::getSesPag());
$eku_de_j001_g_cam_fu_f_ds = EkuDeJ001GCamFuFD::getEkuDeJ001GCamFuFDsDesdeBackend($paginador, $criterio);

include 'eku_de_j001_g_cam_fu_f_d_datos.php';
?>

