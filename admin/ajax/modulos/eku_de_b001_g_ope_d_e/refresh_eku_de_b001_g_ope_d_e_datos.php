<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeB001GOpeDE::setSesPag($pag);

$criterio = new Criterio(EkuDeB001GOpeDE::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeB001GOpeDE::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_b001_g_ope_d_e');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeB001GOpeDE::getSesPagCantidad(), EkuDeB001GOpeDE::getSesPag());
$eku_de_b001_g_ope_d_es = EkuDeB001GOpeDE::getEkuDeB001GOpeDEsDesdeBackend($paginador, $criterio);

include 'eku_de_b001_g_ope_d_e_datos.php';
?>

