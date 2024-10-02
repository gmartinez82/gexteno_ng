<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
FndCajaTipoIngreso::setSesPag($pag);

$criterio = new Criterio(FndCajaTipoIngreso::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndCajaTipoIngreso::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('fnd_caja_tipo_ingreso');
$criterio->setCriteriosInicial();

$paginador = new Paginador(FndCajaTipoIngreso::getSesPagCantidad(), FndCajaTipoIngreso::getSesPag());
$fnd_caja_tipo_ingresos = FndCajaTipoIngreso::getFndCajaTipoIngresosDesdeBackend($paginador, $criterio);

include 'fnd_caja_tipo_ingreso_datos.php';
?>

