<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PlnJornada::setSesPag($pag);

$criterio = new Criterio(PlnJornada::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PlnJornada::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pln_jornada');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PlnJornada::getSesPagCantidad(), PlnJornada::getSesPag());
$pln_jornadas = PlnJornada::getPlnJornadasDesdeBackend($paginador, $criterio);

include 'pln_jornada_datos.php';
?>

