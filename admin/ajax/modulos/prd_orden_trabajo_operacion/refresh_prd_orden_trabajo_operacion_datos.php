<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrdOrdenTrabajoOperacion::setSesPag($pag);

$criterio = new Criterio(PrdOrdenTrabajoOperacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdOrdenTrabajoOperacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prd_orden_trabajo_operacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrdOrdenTrabajoOperacion::getSesPagCantidad(), PrdOrdenTrabajoOperacion::getSesPag());
$prd_orden_trabajo_operacions = PrdOrdenTrabajoOperacion::getPrdOrdenTrabajoOperacionsDesdeBackend($paginador, $criterio);

include 'prd_orden_trabajo_operacion_datos.php';
?>

