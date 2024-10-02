<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndCajero::setSesPag($pag);

$criterio = new Criterio(FndCajero::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndCajero::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_cajero');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndCajero::getSesPagCantidad(), FndCajero::getSesPag());
$fnd_cajeros = FndCajero::getFndCajerosDesdeBackend($paginador, $criterio);

include 'fnd_cajero_datos.php';
?>

