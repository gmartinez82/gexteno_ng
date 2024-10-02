<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
PdeNotaCreditoPdeFacturaPdeRecepcion::setSesPag($pag);

$criterio = new Criterio(PdeNotaCreditoPdeFacturaPdeRecepcion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaCreditoPdeFacturaPdeRecepcion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('pde_nota_credito_pde_factura_pde_recepcion');
$criterio->setCriteriosInicial();

$paginador = new Paginador(PdeNotaCreditoPdeFacturaPdeRecepcion::getSesPagCantidad(), PdeNotaCreditoPdeFacturaPdeRecepcion::getSesPag());
$pde_nota_credito_pde_factura_pde_recepcions = PdeNotaCreditoPdeFacturaPdeRecepcion::getPdeNotaCreditoPdeFacturaPdeRecepcionsDesdeBackend($paginador, $criterio);

include 'pde_nota_credito_pde_factura_pde_recepcion_datos.php';
?>

