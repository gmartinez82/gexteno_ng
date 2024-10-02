<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
OsEstado::setSesPag($pag);

$criterio = new Criterio(OsEstado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
OsEstado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('os_estado');
$criterio->setCriteriosInicial();

$paginador = new Paginador(OsEstado::getSesPagCantidad(), OsEstado::getSesPag());
$os_estados = OsEstado::getOsEstadosDesdeBackend($paginador, $criterio);

include 'os_estado_datos.php';
?>

