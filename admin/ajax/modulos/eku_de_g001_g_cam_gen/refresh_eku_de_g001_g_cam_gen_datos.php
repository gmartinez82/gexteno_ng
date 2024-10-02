<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeG001GCamGen::setSesPag($pag);

$criterio = new Criterio(EkuDeG001GCamGen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeG001GCamGen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_g001_g_cam_gen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeG001GCamGen::getSesPagCantidad(), EkuDeG001GCamGen::getSesPag());
$eku_de_g001_g_cam_gens = EkuDeG001GCamGen::getEkuDeG001GCamGensDesdeBackend($paginador, $criterio);

include 'eku_de_g001_g_cam_gen_datos.php';
?>

