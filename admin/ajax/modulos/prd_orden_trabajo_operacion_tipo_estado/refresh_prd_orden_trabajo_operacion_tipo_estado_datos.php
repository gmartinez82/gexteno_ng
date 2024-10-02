<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrdOrdenTrabajoOperacionTipoEstado::setSesPag($pag);

$criterio = new Criterio(PrdOrdenTrabajoOperacionTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdOrdenTrabajoOperacionTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prd_orden_trabajo_operacion_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrdOrdenTrabajoOperacionTipoEstado::getSesPagCantidad(), PrdOrdenTrabajoOperacionTipoEstado::getSesPag());
$prd_orden_trabajo_operacion_tipo_estados = PrdOrdenTrabajoOperacionTipoEstado::getPrdOrdenTrabajoOperacionTipoEstadosDesdeBackend($paginador, $criterio);

include 'prd_orden_trabajo_operacion_tipo_estado_datos.php';
?>

