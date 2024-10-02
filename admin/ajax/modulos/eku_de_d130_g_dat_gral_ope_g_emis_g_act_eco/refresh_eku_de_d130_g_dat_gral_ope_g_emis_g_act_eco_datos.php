<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeD130GDatGralOpeGEmisGActEco::setSesPag($pag);

$criterio = new Criterio(EkuDeD130GDatGralOpeGEmisGActEco::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeD130GDatGralOpeGEmisGActEco::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeD130GDatGralOpeGEmisGActEco::getSesPagCantidad(), EkuDeD130GDatGralOpeGEmisGActEco::getSesPag());
$eku_de_d130_g_dat_gral_ope_g_emis_g_act_ecos = EkuDeD130GDatGralOpeGEmisGActEco::getEkuDeD130GDatGralOpeGEmisGActEcosDesdeBackend($paginador, $criterio);

include 'eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_datos.php';
?>

