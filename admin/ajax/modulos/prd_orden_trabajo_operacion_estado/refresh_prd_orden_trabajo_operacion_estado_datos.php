<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrdOrdenTrabajoOperacionEstado::setSesPag($pag);

$criterio = new Criterio(PrdOrdenTrabajoOperacionEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdOrdenTrabajoOperacionEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prd_orden_trabajo_operacion_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrdOrdenTrabajoOperacionEstado::getSesPagCantidad(), PrdOrdenTrabajoOperacionEstado::getSesPag());
$prd_orden_trabajo_operacion_estados = PrdOrdenTrabajoOperacionEstado::getPrdOrdenTrabajoOperacionEstadosDesdeBackend($paginador, $criterio);

include 'prd_orden_trabajo_operacion_estado_datos.php';
?>

