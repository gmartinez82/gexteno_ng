<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaCreditoPdeFacturaPdeTributo::setSesPag($pag);

$criterio = new Criterio(PdeNotaCreditoPdeFacturaPdeTributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaCreditoPdeFacturaPdeTributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_credito_pde_factura_pde_tributo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaCreditoPdeFacturaPdeTributo::getSesPagCantidad(), PdeNotaCreditoPdeFacturaPdeTributo::getSesPag());
$pde_nota_credito_pde_factura_pde_tributos = PdeNotaCreditoPdeFacturaPdeTributo::getPdeNotaCreditoPdeFacturaPdeTributosDesdeBackend($paginador, $criterio);

include 'pde_nota_credito_pde_factura_pde_tributo_datos.php';
?>

