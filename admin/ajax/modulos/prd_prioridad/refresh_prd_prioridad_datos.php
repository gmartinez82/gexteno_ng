<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrdPrioridad::setSesPag($pag);

$criterio = new Criterio(PrdPrioridad::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdPrioridad::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prd_prioridad');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrdPrioridad::getSesPagCantidad(), PrdPrioridad::getSesPag());
$prd_prioridads = PrdPrioridad::getPrdPrioridadsDesdeBackend($paginador, $criterio);

include 'prd_prioridad_datos.php';
?>

