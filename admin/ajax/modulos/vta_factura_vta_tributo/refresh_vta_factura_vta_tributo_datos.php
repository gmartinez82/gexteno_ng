<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaFacturaVtaTributo::setSesPag($pag);

$criterio = new Criterio(VtaFacturaVtaTributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaFacturaVtaTributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_factura_vta_tributo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaFacturaVtaTributo::getSesPagCantidad(), VtaFacturaVtaTributo::getSesPag());
$vta_factura_vta_tributos = VtaFacturaVtaTributo::getVtaFacturaVtaTributosDesdeBackend($paginador, $criterio);

include 'vta_factura_vta_tributo_datos.php';
?>

