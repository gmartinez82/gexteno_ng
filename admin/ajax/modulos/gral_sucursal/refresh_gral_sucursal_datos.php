<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralSucursal::setSesPag($pag);

$criterio = new Criterio(GralSucursal::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralSucursal::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_sucursal');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralSucursal::getSesPagCantidad(), GralSucursal::getSesPag());
$gral_sucursals = GralSucursal::getGralSucursalsDesdeBackend($paginador, $criterio);

include 'gral_sucursal_datos.php';
?>

