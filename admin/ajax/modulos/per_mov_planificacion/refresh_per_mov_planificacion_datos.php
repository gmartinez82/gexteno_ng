<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PerMovPlanificacion::setSesPag($pag);

$criterio = new Criterio(PerMovPlanificacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PerMovPlanificacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('per_mov_planificacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PerMovPlanificacion::getSesPagCantidad(), PerMovPlanificacion::getSesPag());
$per_mov_planificacions = PerMovPlanificacion::getPerMovPlanificacionsDesdeBackend($paginador, $criterio);

include 'per_mov_planificacion_datos.php';
?>

