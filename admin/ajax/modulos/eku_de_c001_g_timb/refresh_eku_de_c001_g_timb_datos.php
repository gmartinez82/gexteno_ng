<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeC001GTimb::setSesPag($pag);

$criterio = new Criterio(EkuDeC001GTimb::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeC001GTimb::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_c001_g_timb');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeC001GTimb::getSesPagCantidad(), EkuDeC001GTimb::getSesPag());
$eku_de_c001_g_timbs = EkuDeC001GTimb::getEkuDeC001GTimbsDesdeBackend($paginador, $criterio);

include 'eku_de_c001_g_timb_datos.php';
?>

