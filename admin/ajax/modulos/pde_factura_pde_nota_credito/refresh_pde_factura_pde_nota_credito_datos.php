<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeFacturaPdeNotaCredito::setSesPag($pag);

$criterio = new Criterio(PdeFacturaPdeNotaCredito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeFacturaPdeNotaCredito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_factura_pde_nota_credito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeFacturaPdeNotaCredito::getSesPagCantidad(), PdeFacturaPdeNotaCredito::getSesPag());
$pde_factura_pde_nota_creditos = PdeFacturaPdeNotaCredito::getPdeFacturaPdeNotaCreditosDesdeBackend($paginador, $criterio);

include 'pde_factura_pde_nota_credito_datos.php';
?>

