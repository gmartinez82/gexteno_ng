<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaFacturaVtaNotaCredito::setSesPag($pag);

$criterio = new Criterio(VtaFacturaVtaNotaCredito::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaFacturaVtaNotaCredito::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_factura_vta_nota_credito');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaFacturaVtaNotaCredito::getSesPagCantidad(), VtaFacturaVtaNotaCredito::getSesPag());
$vta_factura_vta_nota_creditos = VtaFacturaVtaNotaCredito::getVtaFacturaVtaNotaCreditosDesdeBackend($paginador, $criterio);

include 'vta_factura_vta_nota_credito_datos.php';
?>

