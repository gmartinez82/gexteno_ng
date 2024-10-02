<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
OsOrdenServicioImagen::setSesPag($pag);

$criterio = new Criterio(OsOrdenServicioImagen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
OsOrdenServicioImagen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('os_orden_servicio_imagen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(OsOrdenServicioImagen::getSesPagCantidad(), OsOrdenServicioImagen::getSesPag());
$os_orden_servicio_imagens = OsOrdenServicioImagen::getOsOrdenServicioImagensDesdeBackend($paginador, $criterio);

include 'os_orden_servicio_imagen_datos.php';
?>

