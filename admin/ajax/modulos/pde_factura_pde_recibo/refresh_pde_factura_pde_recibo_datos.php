<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeFacturaPdeRecibo::setSesPag($pag);

$criterio = new Criterio(PdeFacturaPdeRecibo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeFacturaPdeRecibo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_factura_pde_recibo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeFacturaPdeRecibo::getSesPagCantidad(), PdeFacturaPdeRecibo::getSesPag());
$pde_factura_pde_recibos = PdeFacturaPdeRecibo::getPdeFacturaPdeRecibosDesdeBackend($paginador, $criterio);

include 'pde_factura_pde_recibo_datos.php';
?>

