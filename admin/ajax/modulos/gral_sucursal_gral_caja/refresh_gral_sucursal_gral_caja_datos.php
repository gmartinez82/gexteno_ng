<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
GralSucursalGralCaja::setSesPag($pag);

$criterio = new Criterio(GralSucursalGralCaja::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralSucursalGralCaja::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('gral_sucursal_gral_caja');
$criterio->setCriteriosInicial();

$paginador = new Paginador(GralSucursalGralCaja::getSesPagCantidad(), GralSucursalGralCaja::getSesPag());
$gral_sucursal_gral_cajas = GralSucursalGralCaja::getGralSucursalGralCajasDesdeBackend($paginador, $criterio);

include 'gral_sucursal_gral_caja_datos.php';
?>

