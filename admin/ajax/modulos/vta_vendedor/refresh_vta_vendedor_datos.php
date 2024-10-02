<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaVendedor::setSesPag($pag);

$criterio = new Criterio(VtaVendedor::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaVendedor::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_vendedor');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaVendedor::getSesPagCantidad(), VtaVendedor::getSesPag());
$vta_vendedors = VtaVendedor::getVtaVendedorsDesdeBackend($paginador, $criterio);

include 'vta_vendedor_datos.php';
?>

