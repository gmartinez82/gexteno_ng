<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrdOrdenTrabajoOperacionPrdEquipo::setSesPag($pag);

$criterio = new Criterio(PrdOrdenTrabajoOperacionPrdEquipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdOrdenTrabajoOperacionPrdEquipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prd_orden_trabajo_operacion_prd_equipo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrdOrdenTrabajoOperacionPrdEquipo::getSesPagCantidad(), PrdOrdenTrabajoOperacionPrdEquipo::getSesPag());
$prd_orden_trabajo_operacion_prd_equipos = PrdOrdenTrabajoOperacionPrdEquipo::getPrdOrdenTrabajoOperacionPrdEquiposDesdeBackend($paginador, $criterio);

include 'prd_orden_trabajo_operacion_prd_equipo_datos.php';
?>

