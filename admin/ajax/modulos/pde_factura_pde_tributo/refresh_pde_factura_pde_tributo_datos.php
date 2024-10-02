<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeFacturaPdeTributo::setSesPag($pag);

$criterio = new Criterio(PdeFacturaPdeTributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeFacturaPdeTributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_factura_pde_tributo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeFacturaPdeTributo::getSesPagCantidad(), PdeFacturaPdeTributo::getSesPag());
$pde_factura_pde_tributos = PdeFacturaPdeTributo::getPdeFacturaPdeTributosDesdeBackend($paginador, $criterio);

include 'pde_factura_pde_tributo_datos.php';
?>

