<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralSiNo::setSesPag($pag);

$criterio = new Criterio(GralSiNo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralSiNo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_si_no');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralSiNo::getSesPagCantidad(), GralSiNo::getSesPag());
$gral_si_nos = GralSiNo::getGralSiNosDesdeBackend($paginador, $criterio);

include 'gral_si_no_datos.php';
?>

