<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PlnTurnoNovedad::setSesPag($pag);

$criterio = new Criterio(PlnTurnoNovedad::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PlnTurnoNovedad::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pln_turno_novedad');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PlnTurnoNovedad::getSesPagCantidad(), PlnTurnoNovedad::getSesPag());
$pln_turno_novedads = PlnTurnoNovedad::getPlnTurnoNovedadsDesdeBackend($paginador, $criterio);

include 'pln_turno_novedad_datos.php';
?>

