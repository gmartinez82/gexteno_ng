<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndCajaEgreso::setSesPag($pag);

$criterio = new Criterio(FndCajaEgreso::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndCajaEgreso::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_caja_egreso');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndCajaEgreso::getSesPagCantidad(), FndCajaEgreso::getSesPag());
$fnd_caja_egresos = FndCajaEgreso::getFndCajaEgresosDesdeBackend($paginador, $criterio);

include 'fnd_caja_egreso_datos.php';
?>

