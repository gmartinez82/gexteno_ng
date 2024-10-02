<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
OsOrdenServicio::setSesPag($pag);

$criterio = new Criterio(OsOrdenServicio::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
OsOrdenServicio::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('os_orden_servicio');
$criterio->setCriteriosInicial();

$paginador = new Paginador(OsOrdenServicio::getSesPagCantidad(), OsOrdenServicio::getSesPag());
$os_orden_servicios = OsOrdenServicio::getOsOrdenServiciosDesdeBackend($paginador, $criterio);

include 'os_orden_servicio_datos.php';
?>

