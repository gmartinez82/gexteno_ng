<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
OsOrdenServicio::setSesPag($pag);

$criterio = new Criterio(OsOrdenServicio::SES_CRITERIOS);
$criterio->setWhereInit(true);
$criterio->addTabla('os_orden_servicio');
//$criterio->setCriteriosInicial();

$paginador = new Paginador(OsOrdenServicio::getSesPagCantidad(), OsOrdenServicio::getSesPag());
$os_orden_servicios = OsOrdenServicio::getOsOrdenServiciosDesdeBackend($paginador, $criterio);

include 'os_orden_servicio_gestion_datos.php';
?>

