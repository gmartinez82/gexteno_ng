<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PrvDescuentoFinanciero::setSesPag($pag);

$criterio = new Criterio(PrvDescuentoFinanciero::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvDescuentoFinanciero::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('prv_descuento_financiero');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PrvDescuentoFinanciero::getSesPagCantidad(), PrvDescuentoFinanciero::getSesPag());
$prv_descuento_financieros = PrvDescuentoFinanciero::getPrvDescuentoFinancierosDesdeBackend($paginador, $criterio);

include 'prv_descuento_financiero_datos.php';
?>

