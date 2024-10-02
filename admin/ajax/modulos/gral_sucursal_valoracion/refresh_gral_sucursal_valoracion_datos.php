<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralSucursalValoracion::setSesPag($pag);

$criterio = new Criterio(GralSucursalValoracion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralSucursalValoracion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_sucursal_valoracion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralSucursalValoracion::getSesPagCantidad(), GralSucursalValoracion::getSesPag());
$gral_sucursal_valoracions = GralSucursalValoracion::getGralSucursalValoracionsDesdeBackend($paginador, $criterio);

include 'gral_sucursal_valoracion_datos.php';
?>

