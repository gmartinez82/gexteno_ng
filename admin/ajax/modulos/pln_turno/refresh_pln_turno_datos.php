<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PlnTurno::setSesPag($pag);

$criterio = new Criterio(PlnTurno::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PlnTurno::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pln_turno');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PlnTurno::getSesPagCantidad(), PlnTurno::getSesPag());
$pln_turnos = PlnTurno::getPlnTurnosDesdeBackend($paginador, $criterio);

include 'pln_turno_datos.php';
?>

