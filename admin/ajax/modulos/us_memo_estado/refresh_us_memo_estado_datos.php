<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
UsMemoEstado::setSesPag($pag);

$criterio = new Criterio(UsMemoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsMemoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('us_memo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(UsMemoEstado::getSesPagCantidad(), UsMemoEstado::getSesPag());
$us_memo_estados = UsMemoEstado::getUsMemoEstadosDesdeBackend($paginador, $criterio);

include 'us_memo_estado_datos.php';
?>

