<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
OsResolucion::setSesPag($pag);

$criterio = new Criterio(OsResolucion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
OsResolucion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('os_resolucion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(OsResolucion::getSesPagCantidad(), OsResolucion::getSesPag());
$os_resolucions = OsResolucion::getOsResolucionsDesdeBackend($paginador, $criterio);

include 'os_resolucion_datos.php';
?>

