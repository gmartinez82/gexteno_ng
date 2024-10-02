<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaVendedorValoracionAgrupacion::setSesPag($pag);

$criterio = new Criterio(VtaVendedorValoracionAgrupacion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaVendedorValoracionAgrupacion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_vendedor_valoracion_agrupacion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaVendedorValoracionAgrupacion::getSesPagCantidad(), VtaVendedorValoracionAgrupacion::getSesPag());
$vta_vendedor_valoracion_agrupacions = VtaVendedorValoracionAgrupacion::getVtaVendedorValoracionAgrupacionsDesdeBackend($paginador, $criterio);

include 'vta_vendedor_valoracion_agrupacion_datos.php';
?>

