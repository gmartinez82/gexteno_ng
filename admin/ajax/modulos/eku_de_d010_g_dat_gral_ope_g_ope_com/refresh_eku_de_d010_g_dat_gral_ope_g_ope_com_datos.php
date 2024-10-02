<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
EkuDeD010GDatGralOpeGOpeCom::setSesPag($pag);

$criterio = new Criterio(EkuDeD010GDatGralOpeGOpeCom::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeD010GDatGralOpeGOpeCom::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('eku_de_d010_g_dat_gral_ope_g_ope_com');
$criterio->setCriteriosInicial();

$paginador = new Paginador(EkuDeD010GDatGralOpeGOpeCom::getSesPagCantidad(), EkuDeD010GDatGralOpeGOpeCom::getSesPag());
$eku_de_d010_g_dat_gral_ope_g_ope_coms = EkuDeD010GDatGralOpeGOpeCom::getEkuDeD010GDatGralOpeGOpeComsDesdeBackend($paginador, $criterio);

include 'eku_de_d010_g_dat_gral_ope_g_ope_com_datos.php';
?>

