<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeD200GDatGralOpeGDatRec::setSesPag($pag);

$criterio = new Criterio(EkuDeD200GDatGralOpeGDatRec::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeD200GDatGralOpeGDatRec::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_d200_g_dat_gral_ope_g_dat_rec');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeD200GDatGralOpeGDatRec::getSesPagCantidad(), EkuDeD200GDatGralOpeGDatRec::getSesPag());
$eku_de_d200_g_dat_gral_ope_g_dat_recs = EkuDeD200GDatGralOpeGDatRec::getEkuDeD200GDatGralOpeGDatRecsDesdeBackend($paginador, $criterio);

include 'eku_de_d200_g_dat_gral_ope_g_dat_rec_datos.php';
?>

