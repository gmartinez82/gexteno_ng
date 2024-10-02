<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeE900GDtipDEGTransp::setSesPag($pag);

$criterio = new Criterio(EkuDeE900GDtipDEGTransp::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeE900GDtipDEGTransp::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_e900_g_dtip_d_e_g_transp');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeE900GDtipDEGTransp::getSesPagCantidad(), EkuDeE900GDtipDEGTransp::getSesPag());
$eku_de_e900_g_dtip_d_e_g_transps = EkuDeE900GDtipDEGTransp::getEkuDeE900GDtipDEGTranspsDesdeBackend($paginador, $criterio);

include 'eku_de_e900_g_dtip_d_e_g_transp_datos.php';
?>

