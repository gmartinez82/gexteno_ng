<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeF001GTotSub::setSesPag($pag);

$criterio = new Criterio(EkuDeF001GTotSub::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeF001GTotSub::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_f001_g_tot_sub');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeF001GTotSub::getSesPagCantidad(), EkuDeF001GTotSub::getSesPag());
$eku_de_f001_g_tot_subs = EkuDeF001GTotSub::getEkuDeF001GTotSubsDesdeBackend($paginador, $criterio);

include 'eku_de_f001_g_tot_sub_datos.php';
?>

