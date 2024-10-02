<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
UsAgrupado::setSesPag($pag);

$criterio = new Criterio(UsAgrupado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsAgrupado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('us_agrupado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(UsAgrupado::getSesPagCantidad(), UsAgrupado::getSesPag());
$us_agrupados = UsAgrupado::getUsAgrupadosDesdeBackend($paginador, $criterio);

include 'us_agrupado_datos.php';
?>

