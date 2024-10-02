<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeFacturaPdeRecepcion::setSesPag($pag);

$criterio = new Criterio(PdeFacturaPdeRecepcion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeFacturaPdeRecepcion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_factura_pde_recepcion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeFacturaPdeRecepcion::getSesPagCantidad(), PdeFacturaPdeRecepcion::getSesPag());
$pde_factura_pde_recepcions = PdeFacturaPdeRecepcion::getPdeFacturaPdeRecepcionsDesdeBackend($paginador, $criterio);

include 'pde_factura_pde_recepcion_datos.php';
?>

