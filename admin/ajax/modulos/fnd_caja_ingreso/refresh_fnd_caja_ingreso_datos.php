<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndCajaIngreso::setSesPag($pag);

$criterio = new Criterio(FndCajaIngreso::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndCajaIngreso::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_caja_ingreso');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndCajaIngreso::getSesPagCantidad(), FndCajaIngreso::getSesPag());
$fnd_caja_ingresos = FndCajaIngreso::getFndCajaIngresosDesdeBackend($paginador, $criterio);

include 'fnd_caja_ingreso_datos.php';
?>

