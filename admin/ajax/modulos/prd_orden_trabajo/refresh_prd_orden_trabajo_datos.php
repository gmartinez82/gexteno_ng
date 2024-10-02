<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrdOrdenTrabajo::setSesPag($pag);

$criterio = new Criterio(PrdOrdenTrabajo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdOrdenTrabajo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prd_orden_trabajo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrdOrdenTrabajo::getSesPagCantidad(), PrdOrdenTrabajo::getSesPag());
$prd_orden_trabajos = PrdOrdenTrabajo::getPrdOrdenTrabajosDesdeBackend($paginador, $criterio);

include 'prd_orden_trabajo_datos.php';
?>

