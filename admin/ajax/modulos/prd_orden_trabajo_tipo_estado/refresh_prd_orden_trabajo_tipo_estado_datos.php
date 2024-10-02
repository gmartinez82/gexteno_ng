<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrdOrdenTrabajoTipoEstado::setSesPag($pag);

$criterio = new Criterio(PrdOrdenTrabajoTipoEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdOrdenTrabajoTipoEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prd_orden_trabajo_tipo_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrdOrdenTrabajoTipoEstado::getSesPagCantidad(), PrdOrdenTrabajoTipoEstado::getSesPag());
$prd_orden_trabajo_tipo_estados = PrdOrdenTrabajoTipoEstado::getPrdOrdenTrabajoTipoEstadosDesdeBackend($paginador, $criterio);

include 'prd_orden_trabajo_tipo_estado_datos.php';
?>

