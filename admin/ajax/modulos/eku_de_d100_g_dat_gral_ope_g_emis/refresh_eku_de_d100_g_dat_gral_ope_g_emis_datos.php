<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeD100GDatGralOpeGEmis::setSesPag($pag);

$criterio = new Criterio(EkuDeD100GDatGralOpeGEmis::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeD100GDatGralOpeGEmis::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_d100_g_dat_gral_ope_g_emis');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeD100GDatGralOpeGEmis::getSesPagCantidad(), EkuDeD100GDatGralOpeGEmis::getSesPag());
$eku_de_d100_g_dat_gral_ope_g_emiss = EkuDeD100GDatGralOpeGEmis::getEkuDeD100GDatGralOpeGEmissDesdeBackend($paginador, $criterio);

include 'eku_de_d100_g_dat_gral_ope_g_emis_datos.php';
?>

