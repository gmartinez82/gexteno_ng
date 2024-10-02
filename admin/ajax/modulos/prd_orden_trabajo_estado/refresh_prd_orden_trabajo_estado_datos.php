<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrdOrdenTrabajoEstado::setSesPag($pag);

$criterio = new Criterio(PrdOrdenTrabajoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdOrdenTrabajoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prd_orden_trabajo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrdOrdenTrabajoEstado::getSesPagCantidad(), PrdOrdenTrabajoEstado::getSesPag());
$prd_orden_trabajo_estados = PrdOrdenTrabajoEstado::getPrdOrdenTrabajoEstadosDesdeBackend($paginador, $criterio);

include 'prd_orden_trabajo_estado_datos.php';
?>

