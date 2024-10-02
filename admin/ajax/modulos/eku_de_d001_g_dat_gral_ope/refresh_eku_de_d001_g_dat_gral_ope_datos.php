<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeD001GDatGralOpe::setSesPag($pag);

$criterio = new Criterio(EkuDeD001GDatGralOpe::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeD001GDatGralOpe::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_d001_g_dat_gral_ope');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeD001GDatGralOpe::getSesPagCantidad(), EkuDeD001GDatGralOpe::getSesPag());
$eku_de_d001_g_dat_gral_opes = EkuDeD001GDatGralOpe::getEkuDeD001GDatGralOpesDesdeBackend($paginador, $criterio);

include 'eku_de_d001_g_dat_gral_ope_datos.php';
?>

