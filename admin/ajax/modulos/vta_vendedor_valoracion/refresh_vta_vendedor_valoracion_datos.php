<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaVendedorValoracion::setSesPag($pag);

$criterio = new Criterio(VtaVendedorValoracion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaVendedorValoracion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_vendedor_valoracion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaVendedorValoracion::getSesPagCantidad(), VtaVendedorValoracion::getSesPag());
$vta_vendedor_valoracions = VtaVendedorValoracion::getVtaVendedorValoracionsDesdeBackend($paginador, $criterio);

include 'vta_vendedor_valoracion_datos.php';
?>

