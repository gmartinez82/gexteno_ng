<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeD140GDatGralOpeGRespDE::setSesPag($pag);

$criterio = new Criterio(EkuDeD140GDatGralOpeGRespDE::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeD140GDatGralOpeGRespDE::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_d140_g_dat_gral_ope_g_resp_d_e');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeD140GDatGralOpeGRespDE::getSesPagCantidad(), EkuDeD140GDatGralOpeGRespDE::getSesPag());
$eku_de_d140_g_dat_gral_ope_g_resp_d_es = EkuDeD140GDatGralOpeGRespDE::getEkuDeD140GDatGralOpeGRespDEsDesdeBackend($paginador, $criterio);

include 'eku_de_d140_g_dat_gral_ope_g_resp_d_e_datos.php';
?>

