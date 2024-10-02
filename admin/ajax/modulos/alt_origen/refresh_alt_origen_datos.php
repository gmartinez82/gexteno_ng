<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
AltOrigen::setSesPag($pag);

$criterio = new Criterio(AltOrigen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AltOrigen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('alt_origen');
$criterio->setCriteriosInicial();

$paginador = new Paginador(AltOrigen::getSesPagCantidad(), AltOrigen::getSesPag());
$alt_origens = AltOrigen::getAltOrigensDesdeBackend($paginador, $criterio);

include 'alt_origen_datos.php';
?>

