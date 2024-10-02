<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaCreditoVtaFacturaVtaTributo::setSesPag($pag);

$criterio = new Criterio(VtaNotaCreditoVtaFacturaVtaTributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaCreditoVtaFacturaVtaTributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_credito_vta_factura_vta_tributo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaCreditoVtaFacturaVtaTributo::getSesPagCantidad(), VtaNotaCreditoVtaFacturaVtaTributo::getSesPag());
$vta_nota_credito_vta_factura_vta_tributos = VtaNotaCreditoVtaFacturaVtaTributo::getVtaNotaCreditoVtaFacturaVtaTributosDesdeBackend($paginador, $criterio);

include 'vta_nota_credito_vta_factura_vta_tributo_datos.php';
?>

