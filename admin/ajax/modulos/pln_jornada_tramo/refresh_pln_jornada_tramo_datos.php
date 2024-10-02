<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PlnJornadaTramo::setSesPag($pag);

$criterio = new Criterio(PlnJornadaTramo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PlnJornadaTramo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pln_jornada_tramo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PlnJornadaTramo::getSesPagCantidad(), PlnJornadaTramo::getSesPag());
$pln_jornada_tramos = PlnJornadaTramo::getPlnJornadaTramosDesdeBackend($paginador, $criterio);

include 'pln_jornada_tramo_datos.php';
?>

