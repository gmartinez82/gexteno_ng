<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
OsResolucionSuspension::setSesPag($pag);

$criterio = new Criterio(OsResolucionSuspension::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
OsResolucionSuspension::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('os_resolucion_suspension');
$criterio->setCriteriosInicial();

$paginador = new Paginador(OsResolucionSuspension::getSesPagCantidad(), OsResolucionSuspension::getSesPag());
$os_resolucion_suspensions = OsResolucionSuspension::getOsResolucionSuspensionsDesdeBackend($paginador, $criterio);

include 'os_resolucion_suspension_datos.php';
?>

