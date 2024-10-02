<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaPoliticaDescuentoInsInsumo::setSesPag($pag);

$criterio = new Criterio(VtaPoliticaDescuentoInsInsumo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaPoliticaDescuentoInsInsumo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_politica_descuento_ins_insumo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaPoliticaDescuentoInsInsumo::getSesPagCantidad(), VtaPoliticaDescuentoInsInsumo::getSesPag());
$vta_politica_descuento_ins_insumos = VtaPoliticaDescuentoInsInsumo::getVtaPoliticaDescuentoInsInsumosDesdeBackend($paginador, $criterio);

include 'vta_politica_descuento_ins_insumo_datos.php';
?>

