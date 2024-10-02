<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeG050GCamGenGCamCarg::setSesPag($pag);

$criterio = new Criterio(EkuDeG050GCamGenGCamCarg::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeG050GCamGenGCamCarg::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_g050_g_cam_gen_g_cam_carg');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeG050GCamGenGCamCarg::getSesPagCantidad(), EkuDeG050GCamGenGCamCarg::getSesPag());
$eku_de_g050_g_cam_gen_g_cam_cargs = EkuDeG050GCamGenGCamCarg::getEkuDeG050GCamGenGCamCargsDesdeBackend($paginador, $criterio);

include 'eku_de_g050_g_cam_gen_g_cam_carg_datos.php';
?>

