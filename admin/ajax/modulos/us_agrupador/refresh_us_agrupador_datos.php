<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
UsAgrupador::setSesPag($pag);

$criterio = new Criterio(UsAgrupador::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsAgrupador::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('us_agrupador');
$criterio->setCriteriosInicial();

$paginador = new Paginador(UsAgrupador::getSesPagCantidad(), UsAgrupador::getSesPag());
$us_agrupadors = UsAgrupador::getUsAgrupadorsDesdeBackend($paginador, $criterio);

include 'us_agrupador_datos.php';
?>

