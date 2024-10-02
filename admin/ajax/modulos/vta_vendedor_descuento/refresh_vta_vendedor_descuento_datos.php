<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaVendedorDescuento::setSesPag($pag);

$criterio = new Criterio(VtaVendedorDescuento::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaVendedorDescuento::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_vendedor_descuento');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaVendedorDescuento::getSesPagCantidad(), VtaVendedorDescuento::getSesPag());
$vta_vendedor_descuentos = VtaVendedorDescuento::getVtaVendedorDescuentosDesdeBackend($paginador, $criterio);

include 'vta_vendedor_descuento_datos.php';
?>

