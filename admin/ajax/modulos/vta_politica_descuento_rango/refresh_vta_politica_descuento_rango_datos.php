<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPoliticaDescuentoRango::setSesPag($pag);

$criterio = new Criterio(VtaPoliticaDescuentoRango::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPoliticaDescuentoRango::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_politica_descuento_rango');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPoliticaDescuentoRango::getSesPagCantidad(), VtaPoliticaDescuentoRango::getSesPag());
$vta_politica_descuento_rangos = VtaPoliticaDescuentoRango::getVtaPoliticaDescuentoRangosDesdeBackend($paginador, $criterio);

include 'vta_politica_descuento_rango_datos.php';
?>

