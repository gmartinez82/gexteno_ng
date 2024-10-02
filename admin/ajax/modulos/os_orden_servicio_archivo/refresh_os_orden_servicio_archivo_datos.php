<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
OsOrdenServicioArchivo::setSesPag($pag);

$criterio = new Criterio(OsOrdenServicioArchivo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
OsOrdenServicioArchivo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('os_orden_servicio_archivo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(OsOrdenServicioArchivo::getSesPagCantidad(), OsOrdenServicioArchivo::getSesPag());
$os_orden_servicio_archivos = OsOrdenServicioArchivo::getOsOrdenServicioArchivosDesdeBackend($paginador, $criterio);

include 'os_orden_servicio_archivo_datos.php';
?>

