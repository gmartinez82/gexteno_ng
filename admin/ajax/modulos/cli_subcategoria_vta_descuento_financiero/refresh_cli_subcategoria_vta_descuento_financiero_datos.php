<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
CliSubcategoriaVtaDescuentoFinanciero::setSesPag($pag);

$criterio = new Criterio(CliSubcategoriaVtaDescuentoFinanciero::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliSubcategoriaVtaDescuentoFinanciero::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('cli_subcategoria_vta_descuento_financiero');
$criterio->setCriteriosInicial();

$paginador = new Paginador(CliSubcategoriaVtaDescuentoFinanciero::getSesPagCantidad(), CliSubcategoriaVtaDescuentoFinanciero::getSesPag());
$cli_subcategoria_vta_descuento_financieros = CliSubcategoriaVtaDescuentoFinanciero::getCliSubcategoriaVtaDescuentoFinancierosDesdeBackend($paginador, $criterio);

include 'cli_subcategoria_vta_descuento_financiero_datos.php';
?>

