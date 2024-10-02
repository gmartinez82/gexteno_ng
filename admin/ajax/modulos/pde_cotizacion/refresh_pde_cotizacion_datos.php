<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeCotizacion::setSesPag($pag);

$criterio = new Criterio(PdeCotizacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeCotizacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_cotizacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeCotizacion::getSesPagCantidad(), PdeCotizacion::getSesPag());
$pde_cotizacions = PdeCotizacion::getPdeCotizacionsDesdeBackend($paginador, $criterio);

include 'pde_cotizacion_datos.php';
?>

