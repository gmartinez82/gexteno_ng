<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
OsPrioridad::setSesPag($pag);

$criterio = new Criterio(OsPrioridad::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
OsPrioridad::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('os_prioridad');
$criterio->setCriteriosInicial();

$paginador = new Paginador(OsPrioridad::getSesPagCantidad(), OsPrioridad::getSesPag());
$os_prioridads = OsPrioridad::getOsPrioridadsDesdeBackend($paginador, $criterio);

include 'os_prioridad_datos.php';
?>

