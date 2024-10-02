<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$pag = Gral::getVars(2, 'pag', 1);
VtaNotaCreditoVtaTributo::setSesPag($pag);

$criterio = new Criterio(VtaNotaCreditoVtaTributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
VtaNotaCreditoVtaTributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla('vta_nota_credito_vta_tributo');
$criterio->setCriteriosInicial();

$paginador = new Paginador(VtaNotaCreditoVtaTributo::getSesPagCantidad(), VtaNotaCreditoVtaTributo::getSesPag());
$vta_nota_credito_vta_tributos = VtaNotaCreditoVtaTributo::getVtaNotaCreditoVtaTributosDesdeBackend($paginador, $criterio);

include 'vta_nota_credito_vta_tributo_datos.php';
?>

