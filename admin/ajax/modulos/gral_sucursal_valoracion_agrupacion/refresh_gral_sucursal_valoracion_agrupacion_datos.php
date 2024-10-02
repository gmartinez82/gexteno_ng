<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralSucursalValoracionAgrupacion::setSesPag($pag);

$criterio = new Criterio(GralSucursalValoracionAgrupacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralSucursalValoracionAgrupacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_sucursal_valoracion_agrupacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralSucursalValoracionAgrupacion::getSesPagCantidad(), GralSucursalValoracionAgrupacion::getSesPag());
$gral_sucursal_valoracion_agrupacions = GralSucursalValoracionAgrupacion::getGralSucursalValoracionAgrupacionsDesdeBackend($paginador, $criterio);

include 'gral_sucursal_valoracion_agrupacion_datos.php';
?>

