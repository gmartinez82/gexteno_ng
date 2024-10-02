<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PerMovPlanificacionTramo::setSesPag($pag);

$criterio = new Criterio(PerMovPlanificacionTramo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PerMovPlanificacionTramo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('per_mov_planificacion_tramo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PerMovPlanificacionTramo::getSesPagCantidad(), PerMovPlanificacionTramo::getSesPag());
$per_mov_planificacion_tramos = PerMovPlanificacionTramo::getPerMovPlanificacionTramosDesdeBackend($paginador, $criterio);

include 'per_mov_planificacion_tramo_datos.php';
?>

