<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrdOrdenTrabajoCiclo::setSesPag($pag);

$criterio = new Criterio(PrdOrdenTrabajoCiclo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdOrdenTrabajoCiclo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prd_orden_trabajo_ciclo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrdOrdenTrabajoCiclo::getSesPagCantidad(), PrdOrdenTrabajoCiclo::getSesPag());
$prd_orden_trabajo_ciclos = PrdOrdenTrabajoCiclo::getPrdOrdenTrabajoCiclosDesdeBackend($paginador, $criterio);

include 'prd_orden_trabajo_ciclo_datos.php';
?>

