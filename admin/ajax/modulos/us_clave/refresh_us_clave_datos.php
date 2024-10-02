<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
UsClave::setSesPag($pag);

$criterio = new Criterio(UsClave::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsClave::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('us_clave');
$criterio->setCriteriosInicial();

$paginador = new Paginador(UsClave::getSesPagCantidad(), UsClave::getSesPag());
$us_claves = UsClave::getUsClavesDesdeBackend($paginador, $criterio);

include 'us_clave_datos.php';
?>

